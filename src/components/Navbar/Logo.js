import React from "react"

// Logo horizontal de marca (assets/images/brand/: full color en header y menú móvil, una tinta en el footer),
// o el logo personalizado de WordPress si se define en Apariencia → Personalizar.
// `inverted` pasa la versión de una tinta a blanco en fondos oscuros.
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
