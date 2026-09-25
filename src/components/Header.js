import React, { useEffect, useState } from "react"
import TopBar from "./TopBar/TopBar"
import Navbar from "./Navbar/Navbar"

const TOPBAR_HEIGHT = 40
const SCROLL_TOLERANCE = 6

// El contenedor sticky (#navbar-root) sube la altura del topbar al hacer scroll hacia abajo
// y vuelve a bajar al hacer scroll hacia arriba. Se usa `top` y no `transform` para no
// romper el `position: fixed` del menú móvil.
export default function Header({ root, config }) {
  const [topbarHidden, setTopbarHidden] = useState(false)

  useEffect(() => {
    let lastY = window.scrollY
    const onScroll = () => {
      const y = window.scrollY
      if (Math.abs(y - lastY) < SCROLL_TOLERANCE) return
      setTopbarHidden(y > lastY && y > TOPBAR_HEIGHT)
      lastY = y
    }
    window.addEventListener("scroll", onScroll, { passive: true })
    return () => window.removeEventListener("scroll", onScroll)
  }, [])

  useEffect(() => {
    root.toggleAttribute("data-topbar-hidden", topbarHidden)
  }, [root, topbarHidden])

  return (
    <>
      <TopBar />
      <div className="h-[76px] xl:h-[100px]">
        <Navbar config={config} />
      </div>
    </>
  )
}
