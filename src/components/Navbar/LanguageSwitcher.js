import React, { useEffect, useRef, useState } from "react"
import { Check, ChevronDown } from "./icons"

export default function LanguageSwitcher({ languages = [], current = "en" }) {
  const [open, setOpen] = useState(false)
  const ref = useRef(null)

  useEffect(() => {
    if (!open) return
    const onPointerDown = e => {
      if (!ref.current?.contains(e.target)) setOpen(false)
    }
    const onKeyDown = e => {
      if (e.key === "Escape") setOpen(false)
    }
    document.addEventListener("pointerdown", onPointerDown)
    document.addEventListener("keydown", onKeyDown)
    return () => {
      document.removeEventListener("pointerdown", onPointerDown)
      document.removeEventListener("keydown", onKeyDown)
    }
  }, [open])

  if (languages.length < 2) return null

  return (
    <div ref={ref} className="relative">
      <button
        type="button"
        onClick={() => setOpen(prev => !prev)}
        aria-expanded={open}
        aria-haspopup="true"
        aria-label="Change language"
        className="inline-flex items-center gap-1.5 rounded-sm px-2 py-2 text-[15px] font-medium uppercase text-slate-800 transition-colors hover:text-brand-700"
      >
        {current}
        <ChevronDown className={`size-3.5 transition-transform ${open ? "rotate-180" : ""}`} />
      </button>

      {open && (
        <ul className="absolute right-0 top-full mt-2 w-44 animate-nav-in rounded-sm border border-slate-200 bg-white py-1.5 shadow-xl shadow-slate-900/10">
          {languages.map(lang => (
            <li key={lang.code}>
              <a
                href={lang.href}
                lang={lang.code}
                className="flex items-center justify-between px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 hover:text-brand-700"
              >
                {lang.label}
                {lang.code === current && <Check className="size-4 text-brand-700" />}
              </a>
            </li>
          ))}
        </ul>
      )}
    </div>
  )
}
