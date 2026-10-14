// Contenido del menú principal. Las rutas son relativas al home de WordPress
// y las imágenes se buscan en /assets/images/nav/ del tema o en la Media Library (uploads).
export function getNavData({ homeUrl = "/", imagesUrl = "", uploadsUrl = "/wp-content/uploads/" }) {
  const u = path => homeUrl.replace(/\/$/, "") + path
  const img = file => imagesUrl + file
  const upload = file => uploadsUrl + file

  const menus = {
    products: {
      type: "products",
      intro: {
        eyebrow: "Products",
        titleLight: "Designed",
        titleBold: "for a better tomorrow.",
        text: "A complete line of high-performance windows and doors, engineered for residential, commercial and multifamily projects.",
        cta: { label: "View All Products", href: u("/products/") },
      },
      windows: {
        title: "Windows",
        links: [
          { label: "All Windows", href: u("/windows/") },
          { label: "Picture Windows", href: u("/windows/picture-windows/") },
          { label: "Casement & Awning Windows", href: u("/windows/casement-awning-windows/") },
          { label: "Horizontal Sliding Windows", href: u("/windows/horizontal-sliding-windows/") },
          { label: "Single-Hung Windows", href: u("/windows/single-hung-windows/") },
          { label: "Double-Hung Windows", href: u("/windows/double-hung-windows/") },
          { label: "Arch & Special Shape Windows", href: u("/windows/arch-special-shape-windows/") },
        ],
      },
      doors: {
        title: "Doors",
        links: [
          { label: "All Doors", href: u("/doors/") },
          { label: "Patio Sliding Doors", href: u("/doors/patio-sliding-doors/") },
          { label: "French Swing Doors", href: u("/doors/french-swing-doors/") },
          { label: "Multi-Slide Doors", href: u("/doors/multiple-sliding-doors/") },
          { label: "Multi-Fold Doors", href: u("/doors/multiple-folding-doors/") },
        ],
      },
      series: {
        title: "Series",
        items: [
          { label: "Zenith", tagline: "Versatility Redefined", href: u("/series/zenith/"), image: upload("2026/09/ZENITH_Series-300x200.jpg") },
          { label: "Timeless", tagline: "Classic Performance", href: u("/series/timeless/"), image: upload("2026/09/Timeless_Series-300x200.jpg") },
          { label: "Serene", tagline: "Modern Comfort", href: u("/series/serene/"), image: upload("2026/09/Serene_Series-300x200.jpg") },
          { label: "Elegance", tagline: "Refined Design", href: u("/series/elegance/"), image: upload("2026/09/Elegance_Series-300x193.jpg") },
          { label: "Aluminum", tagline: "Strength in Form", href: u("/series/aluminum/"), image: upload("2026/09/Aluminum_Series-300x200.jpg") },
        ],
      },
      compare: {
        eyebrow: "Compare",
        image: img("compare-series.jpg"),
        title: "Find the right series for your project.",
        text: "Compare features, performance and options side by side.",
        cta: { label: "Compare Series", href: u("/series/#compare") },
      },
    },

    solutions: {
      type: "columns",
      intro: {
        eyebrow: "Solutions",
        titleLight: "Solutions for",
        titleBold: "every kind of project.",
        text: "From custom homes to multifamily and commercial buildings: the right product and the right support for each project.",
        cta: { label: "Explore Solutions", href: u("/solutions/") },
      },
      groups: [
        {
          title: "By Market",
          links: [
            { label: "Residential", description: "Beautiful spaces. Lasting value.", href: u("/solutions/residential/") },
            { label: "Multifamily", description: "Built for scale. Backed by expertise.", href: u("/solutions/multifamily/") },
            { label: "Commercial", description: "Performance for what's next.", href: u("/solutions/commercial/") },
          ],
        },
        {
          title: "By Project Type",
          links: [
            { label: "New Construction", href: u("/solutions/new-construction/") },
            { label: "Replacement & Retrofit", href: u("/solutions/replacement/") },
            { label: "Remodel & Renovation", href: u("/solutions/remodel/") },
            { label: "Energy Upgrades", href: u("/solutions/energy-upgrades/") },
          ],
        },
      ],
    },

    professionals: {
      type: "professionals",
      intro: {
        eyebrow: "For Professionals",
        titleLight: "Built to",
        titleBold: "Bring Your Vision to Life.",
        text: "Tools, documentation and support for architects, developers, contractors and dealers, from concept to completion.",
        cta: { label: "Work With Premium", href: u("/professionals/") },
      },
      audiences: [
        {
          title: "Architects & Specifiers",
          href: u("/professionals/architects-specifiers/"),
          text: "Design with confidence. Access technical resources, drawings, certifications and support.",
          image: upload("2026/09/ArchitectsSpecifiers-768x512.jpg"),
          links: [
            { label: "Technical Resources", href: u("/resources/technical/") },
            { label: "Specifications", href: u("/professionals/specifications/") },
            { label: "Finish & Glass Options", href: u("/professionals/finish-glass-options/") },
            { label: "Request Support", href: u("/professionals/request-support/") },
          ],
        },
        {
          title: "Developers & General Contractors",
          href: u("/professionals/developers-general-contractors/"),
          text: "Reliable solutions for projects of any scale. Consistent quality, competitive lead times and dedicated project support.",
          image: upload("2026/09/DevelopersGeneralContractors-768x512.jpg"),
          links: [
            { label: "Multifamily Solutions", href: u("/solutions/multifamily/") },
            { label: "Commercial Solutions", href: u("/solutions/commercial/") },
            { label: "Project Support", href: u("/professionals/project-support/") },
            { label: "Request a Quote", href: u("/request-a-quote/") },
          ],
        },
        {
          title: "Dealers & Distributors",
          href: u("/professionals/dealers-distributors/"),
          text: "A strong partner for your business. High-quality products, training, marketing support and a seamless ordering experience.",
          image: upload("2026/09/DealersDistributors-768x512.jpg"),
          links: [
            { label: "Dealer Program", href: u("/professionals/dealer-program/") },
            { label: "iQuote Login", href: u("/iquote/") },
            { label: "Marketing Resources", href: u("/professionals/marketing-resources/") },
            { label: "Become a Dealer", href: u("/professionals/become-a-dealer/") },
          ],
        },
      ],
      quickLinks: {
        title: "Quick Links",
        links: [
          { label: "Product Catalog", icon: "catalog", href: u("/resources/product-catalog/") },
          { label: "Brochures", icon: "brochures", href: u("/resources/brochures/") },
          { label: "Certifications", icon: "certifications", href: u("/resources/certifications/") },
          { label: "Warranty Information", icon: "warranty", href: u("/warranty/") },
          { label: "Service Request", icon: "service", href: u("/service-request/") },
          { label: "Contact Sales", icon: "contact", href: u("/contact/") },
        ],
      },
      promo: {
        title: "Have a project in mind?",
        text: "Our team is here to help.",
        cta: { label: "Start a Conversation", href: u("/contact/") },
      },
    },
  }

  const items = [
    { id: "products", label: "Products", menu: menus.products },
    { id: "solutions", label: "Solutions", menu: menus.solutions },
    { id: "professionals", label: "Professionals", menu: menus.professionals },
    { id: "projects", label: "Projects", href: u("/projects/") },
    { id: "about", label: "About", href: u("/about/") },
  ]

  return { items }
}

// Aplana cualquier tipo de mega menú en grupos de links para el menú móvil.
export function getMobileGroups(menu) {
  switch (menu.type) {
    case "products":
      return [
        menu.windows,
        menu.doors,
        { title: menu.series.title, links: menu.series.items },
        { title: menu.compare.eyebrow, links: [menu.compare.cta] },
      ]
    case "professionals":
      return [
        ...menu.audiences.map(({ title, href, links }) => ({
          title,
          links: href ? [{ label: "Overview", href }, ...links] : links,
        })),
        menu.quickLinks,
      ]
    default:
      // Los grupos con página propia muestran primero su "Overview" en el menú móvil.
      return menu.groups.map(group =>
        group.href ? { ...group, links: [{ label: "Overview", href: group.href }, ...group.links] } : group
      )
  }
}
