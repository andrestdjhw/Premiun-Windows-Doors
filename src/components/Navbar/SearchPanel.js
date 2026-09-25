import React, { useEffect, useRef } from "react"
import { ArrowRight, Search } from "./icons"

export default function SearchPanel({ action }) {
  const inputRef = useRef(null)

  useEffect(() => {
    inputRef.current?.focus()
  }, [])

  return (
    <div id="navbar-search" className="absolute inset-x-0 top-full px-4 xl:px-8">
      <div className="mx-auto max-w-[1480px] animate-nav-in rounded-b-md border border-t-0 border-slate-200 bg-white px-8 py-8 shadow-2xl shadow-slate-900/15">
        <form action={action} method="get" role="search" className="mx-auto flex max-w-3xl items-center gap-4">
          <Search className="size-6 shrink-0 text-slate-400" />
          <label htmlFor="navbar-search-input" className="sr-only">
            Search
          </label>
          <input
            ref={inputRef}
            id="navbar-search-input"
            type="search"
            name="s"
            placeholder="Search products, series, resources…"
            className="min-w-0 flex-1 border-b border-slate-300 bg-transparent py-3 text-xl font-light text-slate-900 outline-none placeholder:text-slate-400 focus:border-brand-600"
          />
          <button
            type="submit"
            className="group inline-flex items-center gap-2 rounded-sm bg-brand-800 px-5 py-3 text-sm font-medium text-white transition-colors hover:bg-brand-900"
          >
            Search
            <ArrowRight className="size-4 transition-transform group-hover:translate-x-1" />
          </button>
        </form>
      </div>
    </div>
  )
}
