import React from "react"
import ReactDOM from "react-dom/client"
import Header from "./components/Header"
import Footer from "./components/Footer/Footer"
import LanguageToggle from "./components/LanguageToggle"
import { applyLang, getInitialLang } from "./scripts/i18n"
import { initHeroSlider, initReveal, initTilt } from "./scripts/effects"
import { initAutoSubmit, initEmailForms } from "./scripts/forms"
import { initFaqSearch } from "./scripts/faqs"
import { initProductPage } from "./scripts/product"

const readConfig = el => JSON.parse(el.dataset.config || "{}")

const navbarRoot = document.querySelector("#navbar-root")
if (navbarRoot) {
  ReactDOM.createRoot(navbarRoot).render(<Header root={navbarRoot} config={readConfig(navbarRoot)} />)
}

const footerRoot = document.querySelector("#footer-root")
if (footerRoot) {
  ReactDOM.createRoot(footerRoot).render(<Footer config={readConfig(footerRoot)} />)
}

initReveal()
initTilt()
initHeroSlider()
initEmailForms()
initAutoSubmit()
initFaqSearch()
initProductPage()

// Idioma: botón flotante EN/ES (src/components/LanguageToggle.js) y traducción en el navegador
// (src/scripts/i18n.js). Se aplica al final para que React ya haya montado header y footer.
const langRoot = document.createElement("div")
langRoot.id = "lang-toggle-root"
document.body.appendChild(langRoot)
ReactDOM.createRoot(langRoot).render(<LanguageToggle />)
applyLang(getInitialLang())
