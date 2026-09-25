// Columnas de enlaces del footer. Las rutas son relativas al home de WordPress.
export function getFooterData({ homeUrl = "/" }) {
  const u = path => homeUrl.replace(/\/$/, "") + path

  const columns = [
    {
      title: "Products",
      links: [
        { label: "Windows", href: u("/windows/") },
        { label: "Doors", href: u("/doors/") },
        { label: "Zenith Series", href: u("/series/zenith/") },
        { label: "Timeless Series", href: u("/series/timeless/") },
        { label: "Serene Series", href: u("/series/serene/") },
        { label: "Elegance Series", href: u("/series/elegance/") },
        { label: "Aluminum Series", href: u("/series/aluminum/") },
      ],
    },
    {
      title: "Solutions",
      links: [
        { label: "Residential", href: u("/solutions/residential/") },
        { label: "Multifamily", href: u("/solutions/multifamily/") },
        { label: "Commercial", href: u("/solutions/commercial/") },
        { label: "New Construction", href: u("/solutions/new-construction/") },
        { label: "Replacement & Retrofit", href: u("/solutions/replacement/") },
      ],
    },
    {
      title: "Professionals",
      links: [
        { label: "Technical Resources", href: u("/professionals/technical-resources/") },
        { label: "Project Support", href: u("/professionals/project-support/") },
        { label: "Dealer Program", href: u("/professionals/dealer-program/") },
        { label: "Become a Dealer", href: u("/professionals/become-a-dealer/") },
        { label: "iQuote Login", href: u("/iquote/") },
      ],
    },
    {
      title: "Company",
      links: [
        { label: "About Us", href: u("/about/") },
        { label: "Projects", href: u("/projects/") },
        { label: "Capabilities", href: u("/capabilities/") },
        { label: "Blog & News", href: u("/blog/") },
        { label: "Contact", href: u("/contact/") },
      ],
    },
    {
      title: "Support",
      links: [
        { label: "Warranty Information", href: u("/warranty/") },
        { label: "Service Request", href: u("/service-request/") },
        { label: "Product Catalog", href: u("/resources/product-catalog/") },
        { label: "Installation Guides", href: u("/resources/installation-guides/") },
        { label: "FAQs", href: u("/faqs/") },
      ],
    },
  ]

  const legal = [
    { label: "Privacy Policy", href: u("/privacy-policy/") },
    { label: "Terms & Conditions", href: u("/terms-and-conditions/") },
    { label: "Accessibility", href: u("/accessibility/") },
  ]

  return { columns, legal }
}
