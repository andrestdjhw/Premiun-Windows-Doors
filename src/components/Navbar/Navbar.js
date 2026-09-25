import React, { useEffect, useMemo, useRef, useState } from "react"
import Logo from "./Logo"
import MegaMenu from "./MegaMenu"
import MobileMenu from "./MobileMenu"
import SearchPanel from "./SearchPanel"
import LanguageSwitcher from "./LanguageSwitcher"
import { getNavData } from "./navData"
import { ArrowRight, ChevronDown, Close, Menu, Search } from "./icons"

const CLOSE_DELAY = 150

export default function Navbar({ config }) {
  const { items } = useMemo(() => getNavData(config), [config])
  const [openMenu, setOpenMenu] = useState(null)
  const [searchOpen, setSearchOpen] = useState(false)
  const [mobileOpen, setMobileOpen] = useState(false)
  const [scrolled, setScrolled] = useState(false)
  const headerRef = useRef(null)
  const closeTimer = useRef(null)
  const lastPointer = useRef("")

  const activeMenu = items.find(item => item.id === openMenu)?.menu

  const cancelClose = () => clearTimeout(closeTimer.current)
  const scheduleClose = () => {
    cancelClose()
    closeTimer.current = setTimeout(() => setOpenMenu(null), CLOSE_DELAY)
  }
  const closeAll = () => {
    setOpenMenu(null)
    setSearchOpen(false)
  }

  // Hover abre el mega menú en escritorio; el click lo alterna para teclado y pantallas táctiles.
  const handleHover = (e, id) => {
    if (e.pointerType !== "mouse") return
    cancelClose()
    setSearchOpen(false)
    setOpenMenu(id)
  }
  const handleClick = id => {
    const fromMouse = lastPointer.current === "mouse"
    lastPointer.current = ""
    setSearchOpen(false)
    setOpenMenu(prev => (prev === id && !fromMouse ? null : id))
  }

  useEffect(() => {
    const onKeyDown = e => {
      if (e.key === "Escape") {
        closeAll()
        setMobileOpen(false)
      }
    }
    const onPointerDown = e => {
      if (!headerRef.current?.contains(e.target)) closeAll()
    }
    const onScroll = () => setScrolled(window.scrollY > 8)
    const desktop = window.matchMedia("(min-width: 80rem)")
    const onBreakpoint = e => e.matches && setMobileOpen(false)

    onScroll()
    document.addEventListener("keydown", onKeyDown)
    document.addEventListener("pointerdown", onPointerDown)
    window.addEventListener("scroll", onScroll, { passive: true })
    desktop.addEventListener("change", onBreakpoint)
    return () => {
      clearTimeout(closeTimer.current)
      document.removeEventListener("keydown", onKeyDown)
      document.removeEventListener("pointerdown", onPointerDown)
      window.removeEventListener("scroll", onScroll)
      desktop.removeEventListener("change", onBreakpoint)
    }
  }, [])

  return (
    <>
      <header
        ref={headerRef}
        onPointerEnter={cancelClose}
        onPointerLeave={e => e.pointerType === "mouse" && scheduleClose()}
        className={`relative h-full border-b border-slate-200/70 bg-white/95 backdrop-blur-md transition-shadow ${
          scrolled || openMenu || searchOpen ? "shadow-sm" : ""
        }`}
      >
        <div className="mx-auto flex h-full max-w-[1536px] items-center gap-6 px-5 xl:px-10 2xl:px-12">
          <Logo href={config.homeUrl} logoUrl={config.logoUrl} siteName={config.siteName} />

          <nav aria-label="Main" className="hidden flex-1 justify-center xl:flex">
            <ul className="flex items-center gap-0.5 2xl:gap-1.5">
              {items.map(item => {
                const isOpen = openMenu === item.id
                const base = "inline-flex items-center gap-1.5 rounded-sm px-3 py-3 text-[15px] font-medium transition-colors"

                return (
                  <li key={item.id}>
                    {item.menu ? (
                      <button
                        type="button"
                        aria-expanded={isOpen}
                        aria-controls={`mega-menu-${item.id}`}
                        onPointerEnter={e => handleHover(e, item.id)}
                        onPointerDown={e => (lastPointer.current = e.pointerType)}
                        onClick={() => handleClick(item.id)}
                        className={`${base} ${isOpen ? "bg-slate-100 text-brand-700" : "text-slate-800 hover:text-brand-700"}`}
                      >
                        {item.label}
                        <ChevronDown className={`size-3.5 transition-transform ${isOpen ? "rotate-180" : ""}`} />
                      </button>
                    ) : (
                      <a
                        href={item.href}
                        onPointerEnter={e => e.pointerType === "mouse" && setOpenMenu(null)}
                        className={`${base} text-slate-800 hover:text-brand-700`}
                      >
                        {item.label}
                      </a>
                    )}
                  </li>
                )
              })}
            </ul>
          </nav>

          <div className="ml-auto flex items-center gap-1 sm:gap-3 xl:ml-0 2xl:gap-5">
            <button
              type="button"
              onClick={() => {
                setOpenMenu(null)
                setSearchOpen(prev => !prev)
              }}
              aria-expanded={searchOpen}
              aria-controls="navbar-search"
              aria-label={searchOpen ? "Close search" : "Open search"}
              className="hidden rounded-sm p-2 text-slate-800 transition-colors hover:text-brand-700 xl:inline-flex"
            >
              {searchOpen ? <Close className="size-6" /> : <Search className="size-6" />}
            </button>

            <div className="hidden xl:block">
              <LanguageSwitcher languages={config.languages} current={config.currentLang} />
            </div>

            <a
              href={config.quoteUrl}
              className="btn-sweep group hidden rounded-sm bg-brand-800 px-6 py-3.5 text-[15px] font-medium text-white shadow-sm sm:inline-flex 2xl:px-7 2xl:py-4 2xl:text-base"
            >
              <span className="inline-flex items-center gap-2">
                Request a Quote
                <ArrowRight className="size-4 transition-transform group-hover:translate-x-1" />
              </span>
            </a>

            <button
              type="button"
              onClick={() => setMobileOpen(true)}
              aria-expanded={mobileOpen}
              aria-controls="mobile-menu"
              aria-label="Open menu"
              className="-mr-2 rounded-sm p-2 text-slate-900 hover:bg-slate-100 xl:hidden"
            >
              <Menu className="size-7" />
            </button>
          </div>
        </div>

        {activeMenu && (
          <div className="hidden xl:block">
            <MegaMenu key={openMenu} id={openMenu} menu={activeMenu} />
          </div>
        )}
        {searchOpen && <SearchPanel action={config.homeUrl} />}
      </header>

      <MobileMenu open={mobileOpen} onClose={() => setMobileOpen(false)} items={items} config={config} />
    </>
  )
}
