// Búsqueda en vivo de la página de FAQs: oculta preguntas y categorías sin coincidencias
// y abre las que coinciden.
export function initFaqSearch() {
  const root = document.querySelector("[data-faq]")
  const input = root?.querySelector("[data-faq-search]")
  if (!input) return

  const groups = [...root.querySelectorAll("[data-faq-group]")]
  const empty = root.querySelector("[data-faq-empty]")

  input.addEventListener("input", () => {
    const query = input.value.trim().toLowerCase()
    let matches = 0

    groups.forEach(group => {
      let groupMatches = 0
      group.querySelectorAll("[data-faq-item]").forEach(item => {
        const match = !query || item.textContent.toLowerCase().includes(query)
        item.hidden = !match
        item.open = Boolean(query) && match
        if (match) groupMatches++
      })
      group.hidden = groupMatches === 0
      matches += groupMatches
    })

    empty.hidden = matches > 0
  })
}
