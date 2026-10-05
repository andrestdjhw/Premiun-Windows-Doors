import React, { useEffect, useState } from "react"
import { applyLang, getLang } from "../scripts/i18n"

// Botón flotante de idioma (mismo componente que FCL Empresarial, con los colores de Premium).
// Banderas simplificadas y originales (símbolos públicos) recortadas en círculo.
function FlagMX() {
  return (
    <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
      <defs><clipPath id="pwd-flag-mx"><circle cx="12" cy="12" r="11" /></clipPath></defs>
      <g clipPath="url(#pwd-flag-mx)">
        <rect x="1" y="1" width="7.33" height="22" fill="#006847" />
        <rect x="8.33" y="1" width="7.33" height="22" fill="#ffffff" />
        <rect x="15.66" y="1" width="7.34" height="22" fill="#ce1126" />
        <circle cx="12" cy="12" r="2.1" fill="none" stroke="#8a6d3b" strokeWidth="1" />
      </g>
      <circle cx="12" cy="12" r="11" fill="none" stroke="rgba(0,0,0,.14)" />
    </svg>
  )
}

function FlagUS() {
  return (
    <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true">
      <defs><clipPath id="pwd-flag-us"><circle cx="12" cy="12" r="11" /></clipPath></defs>
      <g clipPath="url(#pwd-flag-us)">
        <rect x="1" y="1" width="22" height="22" fill="#ffffff" />
        <g fill="#b22234">
          <rect x="1" y="1" width="22" height="1.7" />
          <rect x="1" y="4.4" width="22" height="1.7" />
          <rect x="1" y="7.8" width="22" height="1.7" />
          <rect x="1" y="11.15" width="22" height="1.7" />
          <rect x="1" y="14.5" width="22" height="1.7" />
          <rect x="1" y="17.9" width="22" height="1.7" />
          <rect x="1" y="21.3" width="22" height="1.7" />
        </g>
        <rect x="1" y="1" width="10" height="11.9" fill="#3c3b6e" />
        <g fill="#ffffff">
          <circle cx="3.2" cy="3.2" r=".65" /><circle cx="6" cy="3.2" r=".65" /><circle cx="8.8" cy="3.2" r=".65" />
          <circle cx="4.6" cy="5.6" r=".65" /><circle cx="7.4" cy="5.6" r=".65" />
          <circle cx="3.2" cy="8" r=".65" /><circle cx="6" cy="8" r=".65" /><circle cx="8.8" cy="8" r=".65" />
          <circle cx="4.6" cy="10.3" r=".65" /><circle cx="7.4" cy="10.3" r=".65" />
        </g>
      </g>
      <circle cx="12" cy="12" r="11" fill="none" stroke="rgba(0,0,0,.14)" />
    </svg>
  )
}

const OPTIONS = [
  { code: "en", label: "EN", name: "English", Flag: FlagUS },
  { code: "es", label: "ES", name: "Español", Flag: FlagMX },
]

export default function LanguageToggle() {
  const [lang, setLang] = useState(getLang())

  // Sigue el idioma si se cambia desde otro lugar (applyLang emite pwd:langchange).
  useEffect(() => {
    const onChange = e => setLang(e.detail)
    window.addEventListener("pwd:langchange", onChange)
    return () => window.removeEventListener("pwd:langchange", onChange)
  }, [])

  const choose = next => {
    if (next !== lang) applyLang(next)
  }

  return (
    <div
      role="group"
      aria-label="Language / Idioma"
      data-i18n-skip
      className="fixed right-4 bottom-[calc(1rem+env(safe-area-inset-bottom,0px))] z-40 inline-flex gap-1 rounded-full border border-slate-200 bg-white/90 p-1 shadow-lg shadow-brand-950/15 backdrop-blur-md sm:right-5 sm:bottom-5"
    >
      {OPTIONS.map(({ code, label, name, Flag }) => {
        const active = lang === code
        return (
          <button
            key={code}
            type="button"
            lang={code}
            aria-pressed={active}
            aria-label={name}
            title={name}
            onClick={() => choose(code)}
            className={`inline-flex items-center gap-1.5 rounded-full py-1.5 pr-3 pl-1.5 text-[13px] leading-none font-semibold tracking-wide transition-colors ${
              active ? "bg-brand-800 text-white" : "text-slate-700 hover:bg-slate-100"
            }`}
          >
            <span className="inline-flex size-5 shrink-0 overflow-hidden rounded-full">
              <Flag />
            </span>
            {label}
          </button>
        )
      })}
    </div>
  )
}
