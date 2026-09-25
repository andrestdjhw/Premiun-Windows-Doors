// Efectos de las plantillas PHP: reveal al hacer scroll ([data-reveal]), tilt 3D en cards ([data-tilt])
// y slideshow del hero ([data-hero-slider]).
const REVEAL_RATIO = 0.15
const MAX_TILT = 6 // grados

// El reveal se reinicia al salir de pantalla, así que se repite cada vez que se pasa por la sección.
export function initReveal() {
  const elements = document.querySelectorAll("[data-reveal]")
  if (!elements.length) return

  if (!("IntersectionObserver" in window)) {
    elements.forEach(el => el.classList.add("is-revealed"))
    return
  }

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(({ target, isIntersecting, intersectionRatio }) => {
        if (isIntersecting && intersectionRatio >= REVEAL_RATIO) target.classList.add("is-revealed")
        else if (!isIntersecting) target.classList.remove("is-revealed")
      })
    },
    { threshold: [0, REVEAL_RATIO] }
  )

  elements.forEach(el => observer.observe(el))
}

// Solo en dispositivos con mouse y sin preferencia de movimiento reducido.
export function initTilt() {
  const canTilt = window.matchMedia("(hover: hover) and (pointer: fine) and (prefers-reduced-motion: no-preference)")
  if (!canTilt.matches) return

  document.querySelectorAll("[data-tilt]").forEach(card => {
    let rect = null

    card.addEventListener("pointerenter", () => {
      rect = card.getBoundingClientRect()
      card.classList.add("is-tilting")
    })

    card.addEventListener("pointermove", e => {
      if (!rect) rect = card.getBoundingClientRect()
      const x = (e.clientX - rect.left) / rect.width
      const y = (e.clientY - rect.top) / rect.height

      card.style.setProperty("--tilt-x", `${(0.5 - y) * MAX_TILT * 2}deg`)
      card.style.setProperty("--tilt-y", `${(x - 0.5) * MAX_TILT * 2}deg`)
      card.style.setProperty("--shadow-x", `${(0.5 - x) * 24}px`)
      card.style.setProperty("--shadow-y", `${28 + (0.5 - y) * 16}px`)
      card.style.setProperty("--glare-x", `${x * 100}%`)
      card.style.setProperty("--glare-y", `${y * 100}%`)
    })

    card.addEventListener("pointerleave", () => {
      rect = null
      card.classList.remove("is-tilting")
      ;["--tilt-x", "--tilt-y", "--shadow-x", "--shadow-y"].forEach(prop => card.style.removeProperty(prop))
    })
  })
}

// Slideshow de fondo: fundido entre slides, avance automático e indicadores clicables.
export function initHeroSlider() {
  const hero = document.querySelector("[data-hero-slider]")
  if (!hero) return

  const slides = [...hero.querySelectorAll("[data-slide]")]
  const dots = [...hero.querySelectorAll("[data-slide-to]")]
  const interval = Number(hero.dataset.interval) || 6000
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches
  let current = 0
  let timer = null

  const show = index => {
    current = (index + slides.length) % slides.length
    slides.forEach((slide, i) => slide.toggleAttribute("data-active", i === current))
    dots.forEach((dot, i) => dot.setAttribute("aria-current", String(i === current)))
  }
  const stop = () => clearInterval(timer)
  const start = () => {
    stop()
    if (!reducedMotion) timer = setInterval(() => show(current + 1), interval)
  }

  dots.forEach((dot, i) =>
    dot.addEventListener("click", () => {
      show(i)
      start()
    })
  )
  document.addEventListener("visibilitychange", () => (document.hidden ? stop() : start()))

  start()
}
