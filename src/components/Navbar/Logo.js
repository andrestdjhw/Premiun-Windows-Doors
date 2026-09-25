import React from "react"

// Usa el logo personalizado de WordPress si existe; si no, el logo en SVG + texto.
// `inverted` lo adapta a fondos oscuros (footer).
export default function Logo({ href, logoUrl, siteName = "Premium Windows & Doors", compact = false, inverted = false }) {
  return (
    <a href={href} className="flex shrink-0 items-center gap-3" aria-label={`${siteName} — Home`}>
      {logoUrl ? (
        <img
          src={logoUrl}
          alt={siteName}
          className={`${compact ? "h-10 w-auto" : "h-11 w-auto xl:h-14"} ${inverted ? "brightness-0 invert" : ""}`}
        />
      ) : (
        <>
          <svg viewBox="0 0 56 56" aria-hidden="true" className={compact ? "size-9" : "size-10 xl:size-13"}>
            <defs>
              <linearGradient id="pwd-logo-mark" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0" stopColor="var(--color-brand-800)" />
                <stop offset="1" stopColor="var(--color-brand-950)" />
              </linearGradient>
            </defs>
            <polygon points="0,6 44,54 0,54" fill={inverted ? "white" : "url(#pwd-logo-mark)"} />
            <rect x="46" y="2" width="10" height="52" fill={`var(--color-brand-${inverted ? 500 : 600})`} />
          </svg>
          <span className="flex flex-col leading-none">
            <span
              className={`font-extrabold tracking-tight ${inverted ? "text-white" : "text-brand-600"} ${
                compact ? "text-[26px]" : "text-[28px] xl:text-[40px]"
              }`}
            >
              Premium
            </span>
            <span
              className={`mt-1 font-medium uppercase ${inverted ? "text-white/70" : "text-slate-800"} ${
                compact ? "text-[8px] tracking-[0.34em]" : "text-[8px] tracking-[0.34em] xl:text-[11px] xl:tracking-[0.36em]"
              }`}
            >
              Windows &amp; Doors
            </span>
          </span>
        </>
      )}
    </a>
  )
}
