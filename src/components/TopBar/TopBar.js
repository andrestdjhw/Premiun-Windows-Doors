import React from "react"
import SocialLinks from "../SocialLinks"
import { contact } from "./topbarData"
import { Mail, MapPin, Phone } from "../Navbar/icons"

const link = "inline-flex items-center gap-2 whitespace-nowrap transition-colors hover:text-brand-700"

export default function TopBar() {
  return (
    <div className="h-10 border-b border-slate-200/70 bg-white text-[13px] text-slate-600">
      <div className="mx-auto flex h-full max-w-[1536px] items-center justify-between gap-4 px-5 lg:grid lg:grid-cols-[1fr_auto_1fr] xl:px-10 2xl:px-12">
        <div className="flex items-center gap-5">
          <a href={`mailto:${contact.email}`} className={`${link} max-md:hidden`}>
            <Mail className="size-3.5 text-brand-600" />
            {contact.email}
          </a>
          <a href={contact.phone.href} className={link}>
            <Phone className="size-3.5 text-brand-600" />
            {contact.phone.label}
          </a>
        </div>

        <a
          href={contact.address.href}
          target="_blank"
          rel="noopener noreferrer"
          className={`${link} max-lg:hidden`}
        >
          <MapPin className="size-3.5 text-brand-600" />
          {contact.address.label}
        </a>

        <SocialLinks
          className="gap-3.5 sm:gap-4 lg:justify-self-end"
          linkClassName="text-slate-500 hover:text-brand-700"
        />
      </div>
    </div>
  )
}
