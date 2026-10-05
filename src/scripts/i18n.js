// Traducción EN ⇄ ES en el navegador (mismo enfoque que LanguageToggle de FCL Empresarial):
// el idioma se guarda en localStorage y applyLang() cambia los textos sin recargar.
//
// A diferencia de FCL, no hace falta marcar cada texto con data-i18n: el sitio está escrito en inglés y
// el diccionario (src/i18n/es.js) mapea "texto en inglés" → "texto en español". Se recorren los nodos de
// texto y los atributos visibles, guardando el original para poder volver a inglés. Un MutationObserver
// traduce lo que React monte después (mega menús, menú móvil, mensajes de formularios).
//   data-i18n="clave"      → usa keys[clave] del diccionario (innerHTML), como en FCL
//   data-i18n-skip / translate="no" → no se traduce (nombres propios, emails, código)
// El diccionario se carga aparte (chunk i18n-es) solo cuando alguien elige español.

export const DEFAULT_LANG = "en"
export const STORAGE_KEY = "pwd-lang"
export const LANGS = ["en", "es"]

const ATTRIBUTES = ["alt", "placeholder", "aria-label", "title"]
const SKIP = "script, style, noscript, svg, textarea, code, [data-i18n-skip], [translate='no']"

const originalText = new WeakMap() // nodo de texto → texto original (inglés)
const appliedText = new WeakMap() // nodo de texto → último texto que puso este script
const originalAttrs = new WeakMap() // elemento → { atributo: original }
const originalHtml = new WeakMap() // elemento con data-i18n → innerHTML original

let current = DEFAULT_LANG
let dictionary = null
let observer = null
let originalTitle = ""
// Textos sin traducción vistos en esta página. En la consola: [...pwdI18nMissing] para copiarlos a es-strings.json.
const missing = (window.pwdI18nMissing = new Set())

async function loadDictionary() {
  if (!dictionary) dictionary = (await import(/* webpackChunkName: "i18n-es" */ "../i18n/es")).default
  return dictionary
}

// Traduce conservando los espacios de los extremos. null si no hay traducción.
function translate(text) {
  if (current === DEFAULT_LANG || !dictionary) return null
  const trimmed = text.trim()
  if (!trimmed || !/[A-Za-z]/.test(trimmed)) return null
  const key = trimmed.replace(/\s+/g, " ")
  let value = dictionary.strings[key]
  if (value == null) {
    for (const [pattern, replacement] of dictionary.patterns) {
      if (pattern.test(key)) {
        value = key.replace(pattern, replacement)
        break
      }
    }
  }
  // Textos compuestos ("Zenith Series · Performance Vinyl", "Retrofit 2″ • Block"): se traduce cada parte.
  if (value == null) {
    const separator = [" · ", " • "].find(sep => key.includes(sep))
    if (separator) {
      const parts = key.split(separator)
      const translated = parts.map(part => translate(part)?.trim() ?? part)
      if (translated.some((part, i) => part !== parts[i])) value = translated.join(separator)
    }
  }
  if (value == null) {
    missing.add(key)
    return null
  }
  const lead = text.match(/^\s*/)[0]
  const trail = text.match(/\s*$/)[0]
  return lead + value + trail
}

function skipped(node) {
  const el = node.nodeType === Node.TEXT_NODE ? node.parentElement : node
  return !el || el.closest(SKIP)
}

function applyText(node) {
  if (skipped(node)) return
  // Si React (u otro script) cambió el texto, ese es el nuevo original.
  if (!originalText.has(node) || node.nodeValue !== appliedText.get(node)) originalText.set(node, node.nodeValue)
  const original = originalText.get(node)
  const next = translate(original) ?? original
  appliedText.set(node, next)
  if (node.nodeValue !== next) node.nodeValue = next
}

function applyAttributes(el) {
  if (skipped(el)) return
  const saved = originalAttrs.get(el) || {}
  ATTRIBUTES.forEach(attr => {
    if (!el.hasAttribute(attr)) return
    const value = el.getAttribute(attr)
    // Igual que en applyText: un valor que no puso este script es el nuevo original.
    if (!saved[attr] || value !== saved[attr].applied) saved[attr] = { original: value }
    const next = translate(saved[attr].original) ?? saved[attr].original
    saved[attr].applied = next
    if (value !== next) el.setAttribute(attr, next)
  })
  originalAttrs.set(el, saved)
}

function applyKey(el) {
  if (!originalHtml.has(el)) originalHtml.set(el, el.innerHTML)
  const value = current === DEFAULT_LANG ? null : dictionary?.keys?.[el.getAttribute("data-i18n")]
  el.innerHTML = value ?? originalHtml.get(el)
}

function applyTree(root) {
  if (root.nodeType === Node.TEXT_NODE) return applyText(root)
  if (root.nodeType !== Node.ELEMENT_NODE) return

  const keyed = root.matches("[data-i18n]") ? [root] : []
  keyed.push(...root.querySelectorAll("[data-i18n]"))
  keyed.forEach(applyKey)

  const walker = document.createTreeWalker(root, NodeFilter.SHOW_TEXT)
  for (let node = walker.nextNode(); node; node = walker.nextNode()) {
    if (!node.parentElement?.closest("[data-i18n]")) applyText(node)
  }
  ;[root, ...root.querySelectorAll(ATTRIBUTES.map(a => `[${a}]`).join(","))].forEach(el => {
    if (el.nodeType === Node.ELEMENT_NODE) applyAttributes(el)
  })
}

function observe() {
  if (observer) return
  observer = new MutationObserver(mutations => {
    if (current === DEFAULT_LANG) return
    mutations.forEach(m => {
      if (m.type === "characterData") applyText(m.target)
      else if (m.type === "attributes") applyAttributes(m.target)
      else m.addedNodes.forEach(applyTree)
    })
  })
  observer.observe(document.body, { subtree: true, childList: true, characterData: true, attributes: true, attributeFilter: ATTRIBUTES })
}

export async function applyLang(lang) {
  const next = LANGS.includes(lang) ? lang : DEFAULT_LANG
  if (next !== DEFAULT_LANG) {
    try {
      await loadDictionary()
    } catch (error) {
      console.error("i18n:", error)
      return
    }
  }
  current = next

  if (!originalTitle) originalTitle = document.title
  document.title = translate(originalTitle) ?? originalTitle
  applyTree(document.body)
  observe()

  document.documentElement.lang = current
  document.documentElement.classList.remove("i18n-pending")
  try { localStorage.setItem(STORAGE_KEY, current) } catch (e) {}
  window.dispatchEvent(new CustomEvent("pwd:langchange", { detail: current }))
}

// ?lang=es en la URL tiene prioridad (enlaces directos a la versión en español); luego localStorage.
export function getInitialLang() {
  const param = new URLSearchParams(window.location.search).get("lang")
  if (LANGS.includes(param)) return param
  try {
    const saved = localStorage.getItem(STORAGE_KEY)
    if (LANGS.includes(saved)) return saved
  } catch (e) {}
  return DEFAULT_LANG
}

export function getLang() {
  return current
}
