import React from "react"
import { socials } from "./TopBar/topbarData"
import { Bbb, Facebook, GoogleBusiness, Instagram, Linkedin } from "./Navbar/icons"

const socialIcons = { facebook: Facebook, instagram: Instagram, linkedin: Linkedin, bbb: Bbb, google: GoogleBusiness }

// Lista de redes sociales compartida por el topbar y el footer.
export default function SocialLinks({ className = "", linkClassName = "", iconClassName = "size-4" }) {
  return (
    <ul className={`flex items-center ${className}`}>
      {socials.map(({ id, label, href }) => {
        const Icon = socialIcons[id]
        return (
          <li key={id}>
            <a
              href={href}
              target="_blank"
              rel="noopener noreferrer"
              aria-label={label}
              title={label}
              className={`flex transition-colors duration-150 ${linkClassName}`}
            >
              <Icon className={iconClassName} />
            </a>
          </li>
        )
      })}
    </ul>
  )
}
