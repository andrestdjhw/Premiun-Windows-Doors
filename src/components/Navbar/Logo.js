import React from "react"

// Logo horizontal de marca (assets/images/brand/logo-horizontal.png, o el logo personalizado de WordPress
// si se define en Apariencia → Personalizar). Es de una tinta: `inverted` lo pasa a blanco en fondos oscuros (footer).
export default function Logo({ href, logoUrl, siteName = "Premium Windows & Doors", compact = false, inverted = false }) {
  return (
    <a href={href} translate="no" className="flex shrink-0 items-center" aria-label={`${siteName} home`}>
      <img
        src={logoUrl}
        alt={siteName}
        width="1536"
        height="364"
        className={`${compact ? "h-9 w-auto" : "h-11 w-auto xl:h-14"} ${inverted ? "brightness-0 invert" : ""}`}
      />
    </a>
  )
}
