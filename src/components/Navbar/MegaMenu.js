import React from "react"
import { ArrowRight, ChevronRight, quickLinkIcons } from "./icons"

function Eyebrow({ children, className = "" }) {
  return <p className={`text-[11px] font-semibold uppercase tracking-[0.2em] text-slate-900 ${className}`}>{children}</p>
}

function ArrowLink({ href, children, className = "" }) {
  return (
    <a
      href={href}
      className={`group inline-flex items-center gap-2 font-medium text-brand-700 transition-colors hover:text-brand-900 ${className}`}
    >
      {children}
      <ArrowRight className="size-4 transition-transform group-hover:translate-x-1" />
    </a>
  )
}

// Imagen con degradado de respaldo mientras no exista el archivo en /assets/images/nav/.
function Thumb({ src, className = "" }) {
  return (
    <span
      className={`block shrink-0 rounded-sm bg-cover bg-center ${className}`}
      style={{
        backgroundImage: `url("${src}"), linear-gradient(135deg, var(--color-slate-200), var(--color-slate-400))`,
      }}
    />
  )
}

function Intro({ intro }) {
  return (
    <div className="flex flex-col">
      <Eyebrow>{intro.eyebrow}</Eyebrow>
      <h2 className="mt-8 text-[34px] leading-[1.08] tracking-tight text-slate-900 2xl:text-[40px]">
        <span className="block font-light">{intro.titleLight}</span>
        <span className="font-semibold">{intro.titleBold}</span>
      </h2>
      <p className="mt-6 text-[15px] leading-relaxed text-brand-900/75">{intro.text}</p>
      <ArrowLink href={intro.cta.href} className="mt-8">
        {intro.cta.label}
      </ArrowLink>
    </div>
  )
}

function ChevronList({ group }) {
  return (
    <div>
      <Eyebrow>{group.title}</Eyebrow>
      <ul className="mt-7 space-y-1">
        {group.links.map(link => (
          <li key={link.label}>
            <a
              href={link.href}
              className="group flex items-center justify-between gap-4 py-1.5 text-[15px] text-slate-700 transition-colors hover:text-brand-700"
            >
              {link.label}
              <ChevronRight className="size-4 shrink-0 text-slate-500 transition-transform group-hover:translate-x-0.5 group-hover:text-brand-700" />
            </a>
          </li>
        ))}
      </ul>
    </div>
  )
}

function Promo({ promo }) {
  return (
    <div className="rounded-sm bg-brand-50 p-5">
      <p className="font-medium text-slate-900">{promo.title}</p>
      <p className="mt-1 text-sm text-slate-600">{promo.text}</p>
      <a
        href={promo.cta.href}
        className="btn-sweep group mt-5 inline-flex rounded-sm bg-brand-800 px-5 py-3 text-sm font-medium text-white"
      >
        <span className="inline-flex items-center gap-2">
          {promo.cta.label}
          <ArrowRight className="size-4 transition-transform group-hover:translate-x-1" />
        </span>
      </a>
    </div>
  )
}

function ProductsMenu({ menu }) {
  return (
    <div className="grid grid-cols-[1.15fr_1fr_0.8fr_1.25fr_1.1fr] divide-x divide-slate-200 py-10 [&>*]:px-8 2xl:[&>*]:px-10">
      <Intro intro={menu.intro} />
      <ChevronList group={menu.windows} />
      <ChevronList group={menu.doors} />

      <div>
        <Eyebrow>{menu.series.title}</Eyebrow>
        <ul className="mt-6 space-y-2">
          {menu.series.items.map(item => (
            <li key={item.label}>
              <a href={item.href} className="group flex items-center gap-4 rounded-sm p-1 -mx-1 transition-colors hover:bg-slate-50">
                <Thumb src={item.image} className="h-13 w-20" />
                <span className="min-w-0 flex-1">
                  <span className="block text-[15px] font-medium text-slate-900 group-hover:text-brand-700">{item.label}</span>
                  <span className="mt-0.5 block text-[11px] uppercase tracking-[0.12em] text-slate-500">{item.tagline}</span>
                </span>
                <ChevronRight className="size-4 shrink-0 text-slate-500 transition-transform group-hover:translate-x-0.5" />
              </a>
            </li>
          ))}
        </ul>
      </div>

      <div>
        <Eyebrow>{menu.compare.eyebrow}</Eyebrow>
        <Thumb src={menu.compare.image} className="mt-6 aspect-[3/2] w-full" />
        <p className="mt-6 text-2xl font-medium leading-tight tracking-tight text-slate-900">{menu.compare.title}</p>
        <p className="mt-3 text-[15px] leading-relaxed text-slate-500">{menu.compare.text}</p>
        <ArrowLink href={menu.compare.cta.href} className="mt-3">
          {menu.compare.cta.label}
        </ArrowLink>
      </div>
    </div>
  )
}

function ProfessionalsMenu({ menu }) {
  return (
    <div className="grid grid-cols-[1.1fr_1fr_1fr_1fr_1fr] divide-x divide-slate-200 py-8 [&>*]:px-8">
      <div className="pt-2">
        <Intro intro={menu.intro} />
      </div>

      {menu.audiences.map(audience => (
        <div key={audience.title} className="flex flex-col">
          <Thumb src={audience.image} className="aspect-[3/2] w-full" />
          <p className="mt-6 text-xl font-medium leading-snug tracking-tight text-slate-900">{audience.title}</p>
          <p className="mt-2 text-[15px] leading-relaxed text-slate-600">{audience.text}</p>
          <ul className="mt-auto space-y-2 pt-6">
            {audience.links.map(link => (
              <li key={link.label}>
                <ArrowLink href={link.href} className="text-[15px] font-normal">
                  {link.label}
                </ArrowLink>
              </li>
            ))}
          </ul>
        </div>
      ))}

      <div className="flex flex-col">
        <Eyebrow className="pt-2">{menu.quickLinks.title}</Eyebrow>
        <ul className="mt-5 space-y-1">
          {menu.quickLinks.links.map(link => {
            const Icon = quickLinkIcons[link.icon]
            return (
              <li key={link.label}>
                <a
                  href={link.href}
                  className="group flex items-center gap-3 py-1.5 text-[15px] text-slate-700 transition-colors hover:text-brand-700"
                >
                  {Icon && <Icon className="size-5 text-slate-700 group-hover:text-brand-700" />}
                  <span className="flex-1">{link.label}</span>
                  <ArrowRight className="size-4 text-slate-500 transition-transform group-hover:translate-x-0.5" />
                </a>
              </li>
            )
          })}
        </ul>
        <span className="my-6 block h-px w-8 bg-slate-300" />
        <Promo promo={menu.promo} />
      </div>
    </div>
  )
}

function ColumnsMenu({ menu }) {
  return (
    <div
      className="grid divide-x divide-slate-200 py-10 [&>*]:px-8 2xl:[&>*]:px-10"
      style={{ gridTemplateColumns: `1.15fr repeat(${menu.groups.length}, 1fr) 1fr` }}
    >
      <Intro intro={menu.intro} />
      {menu.groups.map(group => (
        <div key={group.title}>
          <Eyebrow>{group.title}</Eyebrow>
          <ul className="mt-7 space-y-3">
            {group.links.map(link => (
              <li key={link.label}>
                <a href={link.href} className="group flex items-start justify-between gap-4 transition-colors">
                  <span>
                    <span className="block text-[15px] text-slate-800 group-hover:text-brand-700">{link.label}</span>
                    {link.description && <span className="mt-0.5 block text-sm text-slate-500">{link.description}</span>}
                  </span>
                  <ChevronRight className="mt-1 size-4 shrink-0 text-slate-500 transition-transform group-hover:translate-x-0.5 group-hover:text-brand-700" />
                </a>
              </li>
            ))}
          </ul>
        </div>
      ))}
      <div className="flex items-end">
        <div className="w-full">
          <Promo
            promo={
              menu.promo || {
                title: "Have a project in mind?",
                text: "Our team is here to help.",
                cta: menu.intro.cta,
              }
            }
          />
        </div>
      </div>
    </div>
  )
}

const layouts = {
  products: ProductsMenu,
  professionals: ProfessionalsMenu,
  columns: ColumnsMenu,
}

export default function MegaMenu({ id, menu }) {
  const Layout = layouts[menu.type]

  return (
    <div id={`mega-menu-${id}`} className="absolute inset-x-0 top-full px-4 xl:px-8">
      <div className="mx-auto max-w-[1480px] animate-nav-in overflow-hidden rounded-b-md border border-t-0 border-slate-200 bg-white shadow-2xl shadow-slate-900/15">
        <Layout menu={menu} />
      </div>
    </div>
  )
}
