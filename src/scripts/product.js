// Fichas de producto (template-parts/product-page.php): selector de vistas de la foto principal
// ([data-product-views]) y momento del día de las texturas de vidrio ([data-glass-textures]).
// Sin JavaScript se ve la primera vista y la textura de tarde.
function initToggle(root, buttonAttr, itemAttr) {
  const buttons = [...root.querySelectorAll(`[${buttonAttr}]`)]
  const items = [...root.querySelectorAll(`[${itemAttr}]`)]

  buttons.forEach(button => {
    button.addEventListener("click", () => {
      const value = button.getAttribute(buttonAttr)
      buttons.forEach(b => b.setAttribute("aria-pressed", String(b === button)))
      items.forEach(item => (item.hidden = item.getAttribute(itemAttr) !== value))
    })
  })
}

export function initProductPage() {
  document.querySelectorAll("[data-product-views]").forEach(root => initToggle(root, "data-view-to", "data-view"))
  document.querySelectorAll("[data-glass-textures]").forEach(root => initToggle(root, "data-time-to", "data-time"))
}
