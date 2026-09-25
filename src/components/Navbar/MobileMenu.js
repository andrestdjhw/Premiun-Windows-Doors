import React, { useEffect, useState } from "react"
import Logo from "./Logo"
import { getMobileGroups } from "./navData"
import { ArrowRight, ChevronDown, Close, Search } from "./icons"

export default function MobileMenu({ open, onClose, items, config }) {
  const [expanded, setExpanded] = useState(null)

  // Bloquea el scroll de la página mientras el menú está abierto.
  useEffect(() => {
    if (!open) return
    const previous = document.body.style.overflow
    document.body.style.overflow = "hidden"
    return () => {
      document.body.style.overflow = previous
    }
  }, [open])

  return (
    <div
      className={`fixed inset-0 z-[60] transition-[visibility] duration-300 xl:hidden ${open ? "visible" : "invisible"}`}
    >
      <div
        className={`absolute inset-0 bg-slate-950/40 transition-opacity duration-300 ${open ? "opacity-100" : "opacity-0"}`}
        onClick={onClose}
      />

      <div
        id="mobile-menu"
        role="dialog"
        aria-modal="true"
        aria-label="Main menu"
        className={`absolute inset-y-0 right-0 flex w-full max-w-md flex-col bg-white shadow-2xl transition-transform duration-300 ${
          open ? "translate-x-0" : "translate-x-full"
        }`}
      >
        <div className="flex h-[76px] shrink-0 items-center justify-between border-b border-slate-200 px-5">
          <Logo href={config.homeUrl} logoUrl={config.logoUrl} siteName={config.siteName} compact />
          <button
            type="button"
            onClick={onClose}
            className="-mr-2 rounded-sm p-2 text-slate-800 hover:bg-slate-100"
            aria-label="Close menu"
          >
            <Close className="size-6" />
          </button>
        </div>

        <div className="flex-1 overflow-y-auto px-5 py-4">
          <form action={config.homeUrl} method="get" role="search" className="relative mb-4">
            <Search className="pointer-events-none absolute left-3 top-1/2 size-5 -translate-y-1/2 text-slate-400" />
            <input
              type="search"
              name="s"
              placeholder="Search products, resources…"
              className="w-full rounded-sm border border-slate-300 py-3 pl-11 pr-4 text-[15px] outline-none focus:border-brand-600 focus:ring-2 focus:ring-brand-600/20"
            />
          </form>

          <ul className="divide-y divide-slate-200">
            {items.map(item => {
              if (!item.menu) {
                return (
                  <li key={item.id}>
                    <a href={item.href} className="block py-4 text-[17px] font-medium text-slate-900">
                      {item.label}
                    </a>
                  </li>
                )
              }

              const isOpen = expanded === item.id
              return (
                <li key={item.id}>
                  <button
                    type="button"
                    onClick={() => setExpanded(isOpen ? null : item.id)}
                    aria-expanded={isOpen}
                    aria-controls={`mobile-section-${item.id}`}
                    className={`flex w-full items-center justify-between py-4 text-left text-[17px] font-medium ${
                      isOpen ? "text-brand-700" : "text-slate-900"
                    }`}
                  >
                    {item.label}
                    <ChevronDown className={`size-5 transition-transform ${isOpen ? "rotate-180" : ""}`} />
                  </button>

                  {isOpen && (
                    <div id={`mobile-section-${item.id}`} className="animate-nav-in pb-5">
                      <a
                        href={item.menu.intro.cta.href}
                        className="group mb-4 inline-flex items-center gap-2 text-[15px] font-medium text-brand-700"
                      >
                        {item.menu.intro.cta.label}
                        <ArrowRight className="size-4 transition-transform group-hover:translate-x-1" />
                      </a>
                      <div className="space-y-5">
                        {getMobileGroups(item.menu).map(group => (
                          <div key={group.title}>
                            <p className="text-[11px] font-semibold uppercase tracking-[0.2em] text-slate-500">
                              {group.title}
                            </p>
                            <ul className="mt-2">
                              {group.links.map(link => (
                                <li key={link.label}>
                                  <a href={link.href} className="block py-1.5 text-[15px] text-slate-700 hover:text-brand-700">
                                    {link.label}
                                  </a>
                                </li>
                              ))}
                            </ul>
                          </div>
                        ))}
                      </div>
                    </div>
                  )}
                </li>
              )
            })}
          </ul>
        </div>

        <div className="shrink-0 border-t border-slate-200 p-5">
          {config.languages?.length > 1 && (
            <div className="mb-4 flex gap-2">
              {config.languages.map(lang => (
                <a
                  key={lang.code}
                  href={lang.href}
                  className={`rounded-sm px-3 py-1.5 text-sm font-medium uppercase ${
                    lang.code === config.currentLang ? "bg-brand-50 text-brand-700" : "text-slate-600 hover:bg-slate-100"
                  }`}
                >
                  {lang.code}
                </a>
              ))}
            </div>
          )}
          <a
            href={config.quoteUrl}
            className="btn-sweep group flex w-full justify-center rounded-sm bg-brand-800 px-6 py-4 font-medium text-white"
          >
            <span className="inline-flex items-center gap-2">
              Request a Quote
              <ArrowRight className="size-5 transition-transform group-hover:translate-x-1" />
            </span>
          </a>
        </div>
      </div>
    </div>
  )
}
