// Diccionario inglés → español para src/scripts/i18n.js (se carga solo al elegir español).
//   strings   textos exactos (es-strings.json), con espacios normalizados
//   patterns  textos que combinan nombres de producto, series o números; se prueban en orden
//   keys      textos por clave para elementos con data-i18n="clave"
// Los nombres de serie (Zenith, Timeless, Serene, Elegance, Aluminum) y de los PDFs no se traducen.
import strings from "./es-strings.json"

const SERIES = "Zenith|Timeless|Serene|Elegance|Aluminum"

// Estilo en inglés → [singular, plural, tipo]. Ventana y puerta son femeninos, así que los adjetivos concuerdan igual.
const STYLES = {
  "Picture": ["fija", "fijas", "w"],
  "Casement & Awning": ["abatible y proyectable", "abatibles y proyectables", "w"],
  "Horizontal Sliding": ["corrediza horizontal", "corredizas horizontales", "w"],
  "Single Hung": ["de guillotina simple", "de guillotina simple", "w"],
  "Single-Hung": ["de guillotina simple", "de guillotina simple", "w"],
  "Double Hung": ["de guillotina doble", "de guillotina doble", "w"],
  "Double-Hung": ["de guillotina doble", "de guillotina doble", "w"],
  "Arch": ["en arco", "en arco", "w"],
  "Arch & Special Shape": ["en arco y de forma especial", "en arco y de forma especial", "w"],
  "Patio Sliding": ["corrediza de patio", "corredizas de patio", "d"],
  "French Swing": ["francesa abatible", "francesas abatibles", "d"],
  "Multiple Sliding": ["corrediza múltiple", "corredizas múltiples", "d"],
  "Multi-Slide": ["corrediza múltiple", "corredizas múltiples", "d"],
  "Multiple Folding": ["plegable múltiple", "plegables múltiples", "d"],
  "Multi-Fold": ["plegable múltiple", "plegables múltiples", "d"],
}
const STYLE_NAMES = Object.keys(STYLES)
  .sort((a, b) => b.length - a.length)
  .map(s => s.replace(/[.*+?^${}()|[\]\\&]/g, "\\$&"))
  .join("|")
const findStyle = name => STYLES[Object.keys(STYLES).find(key => key.toLowerCase() === name.toLowerCase())]

// "Zenith Horizontal Sliding Window" → "Ventana corrediza horizontal Zenith"
const product = (series, name, kind) => `${/door/i.test(kind) ? "Puerta" : "Ventana"} ${findStyle(name)[0]} ${series}`
// "Horizontal Sliding" (+ "Windows") → "Ventanas corredizas horizontales"
const style = name => {
  const [, plural, kind] = findStyle(name)
  return `${kind === "d" ? "Puertas" : "Ventanas"} ${plural}`
}
const lower = text => text[0].toLowerCase() + text.slice(1)

const PRODUCT = `(${SERIES}) (${STYLE_NAMES}) (Windows?|Doors?)`
const FRAMES = { "Block": "Block", "Nail-On": "Nail-On", "Retrofit": "Retrofit" }
const TIMES = { morning: "la mañana", afternoon: "la tarde", night: "la noche" }
const VIEWS = { "blinds outside": "persianas exteriores", "blinds inside": "persianas interiores", operator: "operador" }

const patterns = [
  // Productos y variantes de texto alternativo
  [new RegExp(`^${PRODUCT}$`), (m, s, st, k) => product(s, st, k)],
  [new RegExp(`^${PRODUCT} \\| Premium Windows & Doors$`), (m, s, st, k) => `${product(s, st, k)} | Premium Windows & Doors`],
  [new RegExp(`^${PRODUCT} (Block|Nail-On|Retrofit) frame section$`), (m, s, st, k, f) => `${product(s, st, k)}: sección del marco ${FRAMES[f]}`],
  [new RegExp(`^${PRODUCT} \\((blinds outside|blinds inside|operator)\\)$`), (m, s, st, k, v) => `${product(s, st, k)} (${VIEWS[v]})`],
  [new RegExp(`^Plan your ${PRODUCT} project$`), (m, s, st, k) => `Planifique su proyecto: ${product(s, st, k)}`],
  [new RegExp(`^Technical docs: ${PRODUCT}$`), (m, s, st, k) => `Documentos técnicos: ${product(s, st, k)}`],
  [new RegExp(`^(${SERIES}) (Arch) (Window)$`), (m, s, st, k) => product(s, st, k)],

  // Estilos
  [new RegExp(`^(${STYLE_NAMES}) (Windows|Doors)$`), (m, st) => style(st)],
  [new RegExp(`^(${STYLE_NAMES}) (windows|doors)$`), (m, st) => lower(style(st))],
  [new RegExp(`^(${STYLE_NAMES}) (Windows|Doors) \\| Premium Windows & Doors$`), (m, st) => `${style(st)} | Premium Windows & Doors`],
  [new RegExp(`^(${STYLE_NAMES}) (window|door) technical data$`), (m, st) => `Datos técnicos: ${lower(style(st))}`],
  [new RegExp(`^(${STYLE_NAMES}) (windows|doors) by series$`), (m, st) => `${style(st)} por serie`],
  [new RegExp(`^Plan your (${STYLE_NAMES}) (windows|doors)$`, "i"), (m, st) => `Planifique sus ${lower(style(st))}`],
  [new RegExp(`^Compare (${STYLE_NAMES}) (windows|doors)$`, "i"), (m, st) => `Comparar ${lower(style(st))}`],
  [new RegExp(`^(${STYLE_NAMES}) Documents$`), (m, st) => `Documentos de ${lower(style(st))}`],
  [new RegExp(`^All (${STYLE_NAMES}) Documents$`), (m, st) => `Todos los documentos de ${lower(style(st))}`],
  [new RegExp(`^Every (${SERIES}) (${STYLE_NAMES}) document in one place\\.$`), (m, s, st) => `Todos los documentos de ${lower(style(st))} ${s} en un solo lugar.`],

  // Series
  [new RegExp(`^(${SERIES}) Series$`), (m, s) => `Serie ${s}`],
  [new RegExp(`^(${SERIES}) Series™$`), (m, s) => `Serie ${s}™`],
  [new RegExp(`^All (${SERIES}) Documents$`), (m, s) => `Todos los documentos ${s}`],
  [new RegExp(`^About the (${SERIES}) Series$`), (m, s) => `Acerca de la Serie ${s}`],
  [new RegExp(`^Explore the (${SERIES}) Series$`), (m, s) => `Explorar la Serie ${s}`],
  [new RegExp(`^(${SERIES}) (Windows|Doors)$`), (m, s, k) => `${k === "Doors" ? "Puertas" : "Ventanas"} ${s}`],
  [new RegExp(`^More (${SERIES}) (windows|doors)$`), (m, s, k) => `Más ${k === "doors" ? "puertas" : "ventanas"} ${s}`],
  [new RegExp(`^Explore (${SERIES}) (Windows|Doors)$`), (m, s, k) => `Explorar ${k === "Doors" ? "puertas" : "ventanas"} ${s}`],
  [new RegExp(`^(${SERIES}) Series (windows|doors)$`), (m, s, k) => `${k === "doors" ? "Puertas" : "Ventanas"} de la Serie ${s}`],
  [new RegExp(`^(${SERIES}) Series (windows|doors|home exterior) in a living space$`), (m, s) => `Ventanas de la Serie ${s} en un espacio interior`],
  [new RegExp(`^(${SERIES}) technical data$`), (m, s) => `Datos técnicos ${s}`],
  [new RegExp(`^Specify (${SERIES})$`), (m, s) => `Especifique ${s}`],
  [new RegExp(`^(${SERIES}) drawings, certifications and documents\\.$`), (m, s) => `Dibujos, certificaciones y documentos ${s}.`],
  [new RegExp(`^(${SERIES}) detail drawings and documents\\.$`), (m, s) => `Detail drawings y documentos ${s}.`],

  // Números
  [/^(\d+) files?$/, (m, n) => `${n} ${n === "1" ? "archivo" : "archivos"}`],
  [/^(\d+) images?$/, (m, n) => `${n} ${n === "1" ? "imagen" : "imágenes"}`],
  [/^(\d+) documents?$/, (m, n) => `${n} ${n === "1" ? "documento" : "documentos"}`],
  [/^(\d+) products?$/, (m, n) => `${n} ${n === "1" ? "producto" : "productos"}`],
  [/^(\d+) styles?$/, (m, n) => `${n} ${n === "1" ? "estilo" : "estilos"}`],
  [/^Something went wrong\. Please try again or email us at (\S+)\.$/, (m, email) => `Algo salió mal. Inténtelo de nuevo o escríbanos a ${email}.`],

  [/^Search Results for “(.+)” \| (.+)$/, (m, q, site) => `Resultados de búsqueda para “${q}” | ${site}`],

  // Texturas de vidrio por momento del día: "Reed glass in the morning"
  [/^(Obscure|Reed|Rain|Glue Chip|Flemish) glass in the (morning|afternoon|night)$/, (m, t, time) => `Vidrio ${t} por ${TIMES[time]}`],
]

export default {
  strings,
  patterns,
  keys: {
    "home.hero.title":
      '<span class="font-light">Ventanas y puertas</span> <span class="block font-bold text-brand-500">de alto desempeño.</span> <span class="block font-medium">Fabricadas en California.</span>',
    "about.hero.title":
      '<span class="block font-light">Fabricando</span> <span class="block font-bold text-brand-500">ventanas y puertas</span> <span class="block font-medium">en California desde 2001.</span>',
    "legal.english-only":
      "Este documento legal está disponible solo en inglés. Si tiene preguntas, escríbanos a <a href=\"mailto:info@premiumwindows.com\" class=\"font-medium text-brand-700 underline\">info@premiumwindows.com</a>.",
  },
}
