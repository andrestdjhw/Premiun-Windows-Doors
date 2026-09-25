import React from "react"
import ReactDOM from "react-dom/client"
import Header from "./components/Header"
import Footer from "./components/Footer/Footer"
import { initHeroSlider, initReveal, initTilt } from "./scripts/effects"

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
