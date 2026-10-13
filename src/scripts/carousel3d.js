// Carrusel 3D tipo coverflow ([data-carousel3d]): la card activa al frente y las demás giradas en perspectiva.
// El avance automático lo marca la barra de progreso del punto activo (animationend), así la pausa
// (hover, foco, fuera de pantalla, pestaña oculta o botón) congela barra y temporizador a la vez.
const SWIPE_THRESHOLD = 40 // px

export function initCarousel3d() {
  document.querySelectorAll("[data-carousel3d]").forEach(setup)
}

function setup(root) {
  const items = [...root.querySelectorAll("[data-c3d-item]")]
  const dots = [...root.querySelectorAll("[data-c3d-dot]")]
  const toggle = root.querySelector("[data-c3d-toggle]")
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches
  const count = items.length
  const pauses = new Set()
  let current = 0

  if (count < 2) return

  // Posición relativa más corta (circular): -2..2 con cinco items.
  const offset = i => {
    let d = i - current
    if (d > count / 2) d -= count
    if (d < -count / 2) d += count
    return d
  }

  const show = index => {
    current = (index + count) % count
    items.forEach((item, i) => {
      const pos = offset(i)
      item.style.setProperty("--pos", pos)
      item.style.setProperty("--abs", Math.abs(pos))
      item.style.zIndex = count - Math.abs(pos)
      item.toggleAttribute("data-active", pos === 0)
      item.toggleAttribute("data-far", Math.abs(pos) > 1)
      item.setAttribute("aria-hidden", String(pos !== 0))
      item.querySelector("a").tabIndex = pos === 0 ? 0 : -1
    })
    dots.forEach((dot, i) => dot.setAttribute("aria-current", String(i === current)))
  }

  const setPaused = (reason, paused) => {
    paused ? pauses.add(reason) : pauses.delete(reason)
    root.toggleAttribute("data-paused", pauses.size > 0)
  }

  // Avance automático al terminar la barra del punto activo.
  dots.forEach(dot => dot.querySelector("[data-c3d-bar]").addEventListener("animationend", () => show(current + 1)))
  dots.forEach((dot, i) => dot.addEventListener("click", () => show(i)))
  root.querySelector("[data-c3d-prev]").addEventListener("click", () => show(current - 1))
  root.querySelector("[data-c3d-next]").addEventListener("click", () => show(current + 1))

  // Clic en una card lateral: la trae al frente en vez de navegar.
  items.forEach((item, i) =>
    item.querySelector("a").addEventListener("click", e => {
      if (i !== current || root.dataset.swiped) {
        e.preventDefault()
        if (!root.dataset.swiped) show(i)
      }
    })
  )

  toggle.addEventListener("click", () => {
    const paused = toggle.getAttribute("aria-pressed") !== "true"
    toggle.setAttribute("aria-pressed", String(paused))
    toggle.setAttribute("aria-label", paused ? "Play carousel" : "Pause carousel")
    toggle.querySelector("[data-c3d-icon-pause]").hidden = paused
    toggle.querySelector("[data-c3d-icon-play]").hidden = !paused
    setPaused("user", paused)
  })

  root.addEventListener("pointerenter", e => e.pointerType === "mouse" && setPaused("hover", true))
  root.addEventListener("pointerleave", () => setPaused("hover", false))
  root.addEventListener("focusin", () => setPaused("focus", true))
  root.addEventListener("focusout", e => !root.contains(e.relatedTarget) && setPaused("focus", false))
  document.addEventListener("visibilitychange", () => setPaused("hidden", document.hidden))

  if ("IntersectionObserver" in window) {
    new IntersectionObserver(([entry]) => setPaused("offscreen", !entry.isIntersecting), { threshold: 0.3 }).observe(root)
  }

  root.addEventListener("keydown", e => {
    if (e.key === "ArrowLeft") show(current - 1)
    else if (e.key === "ArrowRight") show(current + 1)
  })

  // Swipe en táctil (y arrastre con mouse).
  let startX = null
  root.addEventListener("pointerdown", e => {
    if (e.target.closest("[data-c3d-controls]")) return
    startX = e.clientX
    delete root.dataset.swiped
  })
  root.addEventListener("pointerup", e => {
    if (startX === null) return
    const dx = e.clientX - startX
    startX = null
    if (Math.abs(dx) < SWIPE_THRESHOLD) return
    root.dataset.swiped = "true"
    show(current + (dx < 0 ? 1 : -1))
    setTimeout(() => delete root.dataset.swiped, 0)
  })
  items.forEach(item => item.addEventListener("dragstart", e => e.preventDefault()))

  if (reducedMotion) setPaused("reduced-motion", true)
  toggle.hidden = reducedMotion
  root.querySelector("[data-c3d-controls]").hidden = false
  root.toggleAttribute("data-autoplay", !reducedMotion)
  root.setAttribute("data-ready", "")
  show(0)
}
