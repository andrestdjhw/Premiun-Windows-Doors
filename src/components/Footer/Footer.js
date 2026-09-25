import React, { useMemo } from "react"
import Logo from "../Navbar/Logo"
import SocialLinks from "../SocialLinks"
import { contact } from "../TopBar/topbarData"
import { getFooterData } from "./footerData"
import { ArrowRight, Mail, MapPin, Phone } from "../Navbar/icons"

export default function Footer({ config }) {
  const { columns, legal } = useMemo(() => getFooterData(config), [config])
  const siteName = config.siteName || "Premium Windows & Doors"

  const contactItems = [
    { icon: MapPin, label: contact.address.label, href: contact.address.href, external: true },
    { icon: Phone, label: contact.phone.label, href: contact.phone.href },
    { icon: Mail, label: contact.email, href: `mailto:${contact.email}` },
  ]

  return (
    <footer className="bg-brand-950 text-white/70">
      <div className="bg-linear-to-r from-brand-900 via-brand-700 to-brand-500">
        <div className="mx-auto flex max-w-[1536px] flex-col gap-6 px-5 py-12 md:flex-row md:items-center md:justify-between lg:py-14 xl:px-10 2xl:px-12">
          <div>
            <h2 className="text-2xl font-semibold tracking-tight text-white lg:text-3xl">Have a project in mind?</h2>
            <p className="mt-2 text-[15px] text-white/80">Our team is ready to help you find the right windows and doors.</p>
          </div>
          <div className="flex flex-col gap-3 sm:flex-row">
            <a
              href={config.quoteUrl}
              className="btn-sweep group inline-flex justify-center rounded-sm bg-white px-6 py-3.5 text-[15px] font-medium text-brand-900 shadow-lg shadow-brand-950/20 transition-colors duration-300 [--sweep-color:var(--color-brand-950)] hover:text-white"
            >
              <span className="inline-flex items-center gap-2">
                Request a Quote
                <ArrowRight className="size-4 transition-transform group-hover:translate-x-1" />
              </span>
            </a>
            <a
              href={contact.phone.href}
              className="btn-sweep inline-flex justify-center rounded-sm border border-white/40 px-6 py-3.5 text-[15px] font-medium text-white transition-colors duration-300 [--sweep-color:white] hover:border-white hover:text-brand-950"
            >
              <span className="inline-flex items-center gap-2">
                <Phone className="size-4" />
                {contact.phone.label}
              </span>
            </a>
          </div>
        </div>
      </div>

      <div className="mx-auto max-w-[1536px] px-5 xl:px-10 2xl:px-12">
        <div className="grid gap-12 py-12 lg:grid-cols-12 lg:gap-8 lg:py-16">
          <div className="lg:col-span-4 lg:pr-8">
            <Logo href={config.homeUrl} logoUrl={config.logoUrl} siteName={siteName} inverted />
            <p className="mt-6 max-w-sm text-sm leading-relaxed">
              High-performance windows and doors engineered and built in California for residential, multifamily and
              commercial projects.
            </p>

            <ul className="mt-6 space-y-3 text-sm">
              {contactItems.map(({ icon: Icon, label, href, external }) => (
                <li key={label}>
                  <a
                    href={href}
                    {...(external && { target: "_blank", rel: "noopener noreferrer" })}
                    className="inline-flex items-start gap-3 transition-colors hover:text-white"
                  >
                    <Icon className="mt-0.5 size-4 shrink-0 text-brand-500" />
                    {label}
                  </a>
                </li>
              ))}
            </ul>

            <SocialLinks className="mt-8 gap-5" linkClassName="text-white/60 hover:text-white" iconClassName="size-5" />
          </div>

          <nav aria-label="Footer" className="grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-3 lg:col-span-8 lg:grid-cols-5">
            {columns.map(column => (
              <div key={column.title}>
                <h3 className="text-xs font-semibold uppercase tracking-[0.16em] text-white">{column.title}</h3>
                <ul className="mt-4 space-y-2.5 text-sm">
                  {column.links.map(link => (
                    <li key={link.label}>
                      <a href={link.href} className="transition-colors hover:text-white">
                        {link.label}
                      </a>
                    </li>
                  ))}
                </ul>
              </div>
            ))}
          </nav>
        </div>

        <div className="flex flex-col gap-4 border-t border-white/10 py-6 text-[13px] text-white/50 md:flex-row md:items-center md:justify-between">
          <p>
            &copy; {new Date().getFullYear()} {siteName}. All rights reserved.
          </p>
          <ul className="flex flex-wrap gap-x-6 gap-y-2">
            {legal.map(link => (
              <li key={link.label}>
                <a href={link.href} className="transition-colors hover:text-white">
                  {link.label}
                </a>
              </li>
            ))}
          </ul>
        </div>
      </div>
    </footer>
  )
}
