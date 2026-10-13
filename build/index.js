/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/components/Footer/Footer.js"
/*!*****************************************!*\
  !*** ./src/components/Footer/Footer.js ***!
  \*****************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Footer)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _Navbar_Logo__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../Navbar/Logo */ "./src/components/Navbar/Logo.js");
/* harmony import */ var _SocialLinks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../SocialLinks */ "./src/components/SocialLinks.js");
/* harmony import */ var _TopBar_topbarData__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../TopBar/topbarData */ "./src/components/TopBar/topbarData.js");
/* harmony import */ var _footerData__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./footerData */ "./src/components/Footer/footerData.js");
/* harmony import */ var _Navbar_icons__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../Navbar/icons */ "./src/components/Navbar/icons.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__);







function Footer({
  config
}) {
  const {
    columns,
    legal
  } = (0,react__WEBPACK_IMPORTED_MODULE_0__.useMemo)(() => (0,_footerData__WEBPACK_IMPORTED_MODULE_4__.getFooterData)(config), [config]);
  const siteName = config.siteName || "Premium Windows & Doors";
  const contactItems = [{
    icon: _Navbar_icons__WEBPACK_IMPORTED_MODULE_5__.MapPin,
    label: _TopBar_topbarData__WEBPACK_IMPORTED_MODULE_3__.contact.address.label,
    href: _TopBar_topbarData__WEBPACK_IMPORTED_MODULE_3__.contact.address.href,
    external: true
  }, {
    icon: _Navbar_icons__WEBPACK_IMPORTED_MODULE_5__.Phone,
    label: _TopBar_topbarData__WEBPACK_IMPORTED_MODULE_3__.contact.phone.label,
    href: _TopBar_topbarData__WEBPACK_IMPORTED_MODULE_3__.contact.phone.href
  }, {
    icon: _Navbar_icons__WEBPACK_IMPORTED_MODULE_5__.Mail,
    label: _TopBar_topbarData__WEBPACK_IMPORTED_MODULE_3__.contact.email,
    href: `mailto:${_TopBar_topbarData__WEBPACK_IMPORTED_MODULE_3__.contact.email}`
  }];
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("footer", {
    className: "bg-brand-950 text-white/70",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("div", {
      className: "bg-linear-to-r from-brand-900 via-brand-700 to-brand-500",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
        className: "mx-auto flex max-w-[1536px] flex-col gap-6 px-5 py-12 md:flex-row md:items-center md:justify-between lg:py-14 xl:px-10 2xl:px-12",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("h2", {
            className: "text-2xl font-semibold tracking-tight text-white lg:text-3xl",
            children: "Have a project in mind?"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("p", {
            className: "mt-2 text-[15px] text-white/80",
            children: "Our team is ready to help you find the right windows and doors."
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
          className: "flex flex-col gap-3 sm:flex-row",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
            href: config.quoteUrl,
            className: "btn-sweep group inline-flex justify-center rounded-sm bg-white px-6 py-3.5 text-[15px] font-medium text-brand-900 shadow-lg shadow-brand-950/20 transition-colors duration-300 [--sweep-color:var(--color-brand-950)] hover:text-white",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("span", {
              className: "inline-flex items-center gap-2",
              children: ["Request a Quote", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_Navbar_icons__WEBPACK_IMPORTED_MODULE_5__.ArrowRight, {
                className: "size-4 transition-transform group-hover:translate-x-1"
              })]
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
            href: _TopBar_topbarData__WEBPACK_IMPORTED_MODULE_3__.contact.phone.href,
            className: "btn-sweep inline-flex justify-center rounded-sm border border-white/40 px-6 py-3.5 text-[15px] font-medium text-white transition-colors duration-300 [--sweep-color:white] hover:border-white hover:text-brand-950",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("span", {
              className: "inline-flex items-center gap-2",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_Navbar_icons__WEBPACK_IMPORTED_MODULE_5__.Phone, {
                className: "size-4"
              }), _TopBar_topbarData__WEBPACK_IMPORTED_MODULE_3__.contact.phone.label]
            })
          })]
        })]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
      className: "mx-auto max-w-[1536px] px-5 xl:px-10 2xl:px-12",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
        className: "grid gap-12 py-12 lg:grid-cols-12 lg:gap-8 lg:py-16",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
          className: "lg:col-span-4 lg:pr-8",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_Navbar_Logo__WEBPACK_IMPORTED_MODULE_1__["default"], {
            href: config.homeUrl,
            logoUrl: config.logoUrl,
            siteName: siteName,
            inverted: true
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("p", {
            className: "mt-6 max-w-sm text-sm leading-relaxed",
            children: "High-performance windows and doors engineered and built in California for residential, multifamily and commercial projects."
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("ul", {
            className: "mt-6 space-y-3 text-sm",
            children: contactItems.map(({
              icon: Icon,
              label,
              href,
              external
            }) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("li", {
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("a", {
                href: href,
                ...(external && {
                  target: "_blank",
                  rel: "noopener noreferrer"
                }),
                className: "inline-flex items-start gap-3 transition-colors hover:text-white",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(Icon, {
                  className: "mt-0.5 size-4 shrink-0 text-brand-500"
                }), label]
              })
            }, label))
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)(_SocialLinks__WEBPACK_IMPORTED_MODULE_2__["default"], {
            className: "mt-8 gap-5",
            linkClassName: "text-white/60 hover:text-white",
            iconClassName: "size-5"
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("nav", {
          "aria-label": "Footer",
          className: "grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-3 lg:col-span-8 lg:grid-cols-5",
          children: columns.map(column => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("h3", {
              className: "text-xs font-semibold uppercase tracking-[0.16em] text-white",
              children: column.title
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("ul", {
              className: "mt-4 space-y-2.5 text-sm",
              children: column.links.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("li", {
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
                  href: link.href,
                  className: "transition-colors hover:text-white",
                  children: link.label
                })
              }, link.label))
            })]
          }, column.title))
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("div", {
        className: "flex flex-col gap-4 border-t border-white/10 py-6 text-[13px] text-white/50 md:flex-row md:items-center md:justify-between",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("p", {
          children: ["\xA9 ", new Date().getFullYear(), " ", siteName, ". All rights reserved."]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsxs)("ul", {
          className: "flex flex-wrap gap-x-6 gap-y-2",
          children: [legal.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("li", {
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
              href: link.href,
              className: "transition-colors hover:text-white",
              children: link.label
            })
          }, link.label)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("li", {
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_6__.jsx)("a", {
              href: "https://828marketingsolutions.com",
              target: "_blank",
              rel: "noopener",
              className: "transition-colors hover:text-white",
              children: "Site by 828 Marketing Solutions"
            })
          })]
        })]
      })]
    })]
  });
}

/***/ },

/***/ "./src/components/Footer/footerData.js"
/*!*********************************************!*\
  !*** ./src/components/Footer/footerData.js ***!
  \*********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   getFooterData: () => (/* binding */ getFooterData)
/* harmony export */ });
// Columnas de enlaces del footer. Las rutas son relativas al home de WordPress.
function getFooterData({
  homeUrl = "/"
}) {
  const u = path => homeUrl.replace(/\/$/, "") + path;
  const columns = [{
    title: "Products",
    links: [{
      label: "Windows",
      href: u("/windows/")
    }, {
      label: "Doors",
      href: u("/doors/")
    }, {
      label: "Zenith Series",
      href: u("/series/zenith/")
    }, {
      label: "Timeless Series",
      href: u("/series/timeless/")
    }, {
      label: "Serene Series",
      href: u("/series/serene/")
    }, {
      label: "Elegance Series",
      href: u("/series/elegance/")
    }, {
      label: "Aluminum Series",
      href: u("/series/aluminum/")
    }]
  }, {
    title: "Solutions",
    links: [{
      label: "Residential",
      href: u("/solutions/residential/")
    }, {
      label: "Multifamily",
      href: u("/solutions/multifamily/")
    }, {
      label: "Commercial",
      href: u("/solutions/commercial/")
    }, {
      label: "New Construction",
      href: u("/solutions/new-construction/")
    }, {
      label: "Replacement & Retrofit",
      href: u("/solutions/replacement/")
    }]
  }, {
    title: "Professionals",
    links: [{
      label: "Technical Resources",
      href: u("/resources/technical/")
    }, {
      label: "Project Support",
      href: u("/professionals/project-support/")
    }, {
      label: "Dealer Program",
      href: u("/professionals/dealer-program/")
    }, {
      label: "Become a Dealer",
      href: u("/professionals/become-a-dealer/")
    }, {
      label: "iQuote Login",
      href: u("/iquote/")
    }]
  }, {
    title: "Company",
    links: [{
      label: "About Us",
      href: u("/about/")
    }, {
      label: "Projects",
      href: u("/projects/")
    }, {
      label: "Capabilities",
      href: u("/capabilities/")
    }, {
      label: "Blog & News",
      href: u("/blog/")
    }, {
      label: "Contact",
      href: u("/contact/")
    }]
  }, {
    title: "Support",
    links: [{
      label: "Warranty Information",
      href: u("/warranty/")
    }, {
      label: "Service Request",
      href: u("/service-request/")
    }, {
      label: "Product Catalog",
      href: u("/resources/product-catalog/")
    }, {
      label: "Installation Guides",
      href: u("/resources/technical/?type=installation-guide")
    }, {
      label: "FAQs",
      href: u("/faqs/")
    }]
  }];
  const legal = [{
    label: "Privacy Policy",
    href: u("/privacy-policy/")
  }, {
    label: "Terms & Conditions",
    href: u("/terms-and-conditions/")
  }];
  return {
    columns,
    legal
  };
}

/***/ },

/***/ "./src/components/Header.js"
/*!**********************************!*\
  !*** ./src/components/Header.js ***!
  \**********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Header)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _TopBar_TopBar__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./TopBar/TopBar */ "./src/components/TopBar/TopBar.js");
/* harmony import */ var _Navbar_Navbar__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Navbar/Navbar */ "./src/components/Navbar/Navbar.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__);




const TOPBAR_HEIGHT = 40;
const SCROLL_TOLERANCE = 6;

// El contenedor sticky (#navbar-root) sube la altura del topbar al hacer scroll hacia abajo
// y vuelve a bajar al hacer scroll hacia arriba. Se usa `top` y no `transform` para no
// romper el `position: fixed` del menú móvil.
function Header({
  root,
  config
}) {
  const [topbarHidden, setTopbarHidden] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    let lastY = window.scrollY;
    const onScroll = () => {
      const y = window.scrollY;
      if (Math.abs(y - lastY) < SCROLL_TOLERANCE) return;
      setTopbarHidden(y > lastY && y > TOPBAR_HEIGHT);
      lastY = y;
    };
    window.addEventListener("scroll", onScroll, {
      passive: true
    });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    root.toggleAttribute("data-topbar-hidden", topbarHidden);
  }, [root, topbarHidden]);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_TopBar_TopBar__WEBPACK_IMPORTED_MODULE_1__["default"], {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("div", {
      className: "h-[76px] xl:h-[100px]",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(_Navbar_Navbar__WEBPACK_IMPORTED_MODULE_2__["default"], {
        config: config
      })
    })]
  });
}

/***/ },

/***/ "./src/components/LanguageToggle.js"
/*!******************************************!*\
  !*** ./src/components/LanguageToggle.js ***!
  \******************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ LanguageToggle)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _scripts_i18n__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../scripts/i18n */ "./src/scripts/i18n.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__);



// Botón flotante de idioma (mismo componente que FCL Empresarial, con los colores de Premium).
// Banderas simplificadas y originales (símbolos públicos) recortadas en círculo.

function FlagMX() {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("svg", {
    viewBox: "0 0 24 24",
    width: "20",
    height: "20",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("defs", {
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("clipPath", {
        id: "pwd-flag-mx",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
          cx: "12",
          cy: "12",
          r: "11"
        })
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("g", {
      clipPath: "url(#pwd-flag-mx)",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("rect", {
        x: "1",
        y: "1",
        width: "7.33",
        height: "22",
        fill: "#006847"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("rect", {
        x: "8.33",
        y: "1",
        width: "7.33",
        height: "22",
        fill: "#ffffff"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("rect", {
        x: "15.66",
        y: "1",
        width: "7.34",
        height: "22",
        fill: "#ce1126"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
        cx: "12",
        cy: "12",
        r: "2.1",
        fill: "none",
        stroke: "#8a6d3b",
        strokeWidth: "1"
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
      cx: "12",
      cy: "12",
      r: "11",
      fill: "none",
      stroke: "rgba(0,0,0,.14)"
    })]
  });
}
function FlagUS() {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("svg", {
    viewBox: "0 0 24 24",
    width: "20",
    height: "20",
    "aria-hidden": "true",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("defs", {
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("clipPath", {
        id: "pwd-flag-us",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
          cx: "12",
          cy: "12",
          r: "11"
        })
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("g", {
      clipPath: "url(#pwd-flag-us)",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("rect", {
        x: "1",
        y: "1",
        width: "22",
        height: "22",
        fill: "#ffffff"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("g", {
        fill: "#b22234",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("rect", {
          x: "1",
          y: "1",
          width: "22",
          height: "1.7"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("rect", {
          x: "1",
          y: "4.4",
          width: "22",
          height: "1.7"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("rect", {
          x: "1",
          y: "7.8",
          width: "22",
          height: "1.7"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("rect", {
          x: "1",
          y: "11.15",
          width: "22",
          height: "1.7"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("rect", {
          x: "1",
          y: "14.5",
          width: "22",
          height: "1.7"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("rect", {
          x: "1",
          y: "17.9",
          width: "22",
          height: "1.7"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("rect", {
          x: "1",
          y: "21.3",
          width: "22",
          height: "1.7"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("rect", {
        x: "1",
        y: "1",
        width: "10",
        height: "11.9",
        fill: "#3c3b6e"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("g", {
        fill: "#ffffff",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
          cx: "3.2",
          cy: "3.2",
          r: ".65"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
          cx: "6",
          cy: "3.2",
          r: ".65"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
          cx: "8.8",
          cy: "3.2",
          r: ".65"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
          cx: "4.6",
          cy: "5.6",
          r: ".65"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
          cx: "7.4",
          cy: "5.6",
          r: ".65"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
          cx: "3.2",
          cy: "8",
          r: ".65"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
          cx: "6",
          cy: "8",
          r: ".65"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
          cx: "8.8",
          cy: "8",
          r: ".65"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
          cx: "4.6",
          cy: "10.3",
          r: ".65"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
          cx: "7.4",
          cy: "10.3",
          r: ".65"
        })]
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("circle", {
      cx: "12",
      cy: "12",
      r: "11",
      fill: "none",
      stroke: "rgba(0,0,0,.14)"
    })]
  });
}
const OPTIONS = [{
  code: "en",
  label: "EN",
  name: "English",
  Flag: FlagUS
}, {
  code: "es",
  label: "ES",
  name: "Español",
  Flag: FlagMX
}];
function LanguageToggle() {
  const [lang, setLang] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)((0,_scripts_i18n__WEBPACK_IMPORTED_MODULE_1__.getLang)());

  // Sigue el idioma si se cambia desde otro lugar (applyLang emite pwd:langchange).
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const onChange = e => setLang(e.detail);
    window.addEventListener("pwd:langchange", onChange);
    return () => window.removeEventListener("pwd:langchange", onChange);
  }, []);
  const choose = next => {
    if (next !== lang) (0,_scripts_i18n__WEBPACK_IMPORTED_MODULE_1__.applyLang)(next);
  };
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
    role: "group",
    "aria-label": "Language / Idioma",
    "data-i18n-skip": true,
    className: "fixed right-4 bottom-[calc(1rem+env(safe-area-inset-bottom,0px))] z-40 inline-flex gap-1 rounded-full border border-slate-200 bg-white/90 p-1 shadow-lg shadow-brand-950/15 backdrop-blur-md sm:right-5 sm:bottom-5",
    children: OPTIONS.map(({
      code,
      label,
      name,
      Flag
    }) => {
      const active = lang === code;
      return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("button", {
        type: "button",
        lang: code,
        "aria-pressed": active,
        "aria-label": name,
        title: name,
        onClick: () => choose(code),
        className: `inline-flex items-center gap-1.5 rounded-full py-1.5 pr-3 pl-1.5 text-[13px] leading-none font-semibold tracking-wide transition-colors ${active ? "bg-brand-800 text-white" : "text-slate-700 hover:bg-slate-100"}`,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
          className: "inline-flex size-5 shrink-0 overflow-hidden rounded-full",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Flag, {})
        }), label]
      }, code);
    })
  });
}

/***/ },

/***/ "./src/components/Navbar/Logo.js"
/*!***************************************!*\
  !*** ./src/components/Navbar/Logo.js ***!
  \***************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Logo)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


// Usa el logo personalizado de WordPress si existe; si no, el logo en SVG + texto.
// `inverted` lo adapta a fondos oscuros (footer).

function Logo({
  href,
  logoUrl,
  siteName = "Premium Windows & Doors",
  compact = false,
  inverted = false
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
    href: href,
    translate: "no",
    className: "flex shrink-0 items-center gap-3",
    "aria-label": `${siteName} home`,
    children: logoUrl ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
      src: logoUrl,
      alt: siteName,
      className: `${compact ? "h-10 w-auto" : "h-11 w-auto xl:h-14"} ${inverted ? "brightness-0 invert" : ""}`
    }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
        viewBox: "0 0 56 56",
        "aria-hidden": "true",
        className: compact ? "size-9" : "size-10 xl:size-13",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("defs", {
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("linearGradient", {
            id: "pwd-logo-mark",
            x1: "0",
            y1: "0",
            x2: "1",
            y2: "1",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("stop", {
              offset: "0",
              stopColor: "var(--color-brand-800)"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("stop", {
              offset: "1",
              stopColor: "var(--color-brand-950)"
            })]
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("polygon", {
          points: "0,6 44,54 0,54",
          fill: inverted ? "white" : "url(#pwd-logo-mark)"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
          x: "46",
          y: "2",
          width: "10",
          height: "52",
          fill: `var(--color-brand-${inverted ? 500 : 600})`
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
        className: "flex flex-col leading-none",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: `font-extrabold tracking-tight ${inverted ? "text-white" : "text-brand-600"} ${compact ? "text-[26px]" : "text-[28px] xl:text-[40px]"}`,
          children: "Premium"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: `mt-1 font-medium uppercase ${inverted ? "text-white/70" : "text-slate-800"} ${compact ? "text-[8px] tracking-[0.34em]" : "text-[8px] tracking-[0.34em] xl:text-[11px] xl:tracking-[0.36em]"}`,
          children: "Windows & Doors"
        })]
      })]
    })
  });
}

/***/ },

/***/ "./src/components/Navbar/MegaMenu.js"
/*!*******************************************!*\
  !*** ./src/components/Navbar/MegaMenu.js ***!
  \*******************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ MegaMenu)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _icons__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./icons */ "./src/components/Navbar/icons.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__);



function Eyebrow({
  children,
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
    className: `text-[11px] font-semibold uppercase tracking-[0.2em] text-slate-900 ${className}`,
    children: children
  });
}
function ArrowLink({
  href,
  children,
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
    href: href,
    className: `group inline-flex items-center gap-2 font-medium text-brand-700 transition-colors hover:text-brand-900 ${className}`,
    children: [children, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.ArrowRight, {
      className: "size-4 transition-transform group-hover:translate-x-1"
    })]
  });
}

// Imagen con degradado de respaldo mientras no exista el archivo en /assets/images/nav/.
function Thumb({
  src,
  className = ""
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
    className: `block shrink-0 rounded-sm bg-cover bg-center ${className}`,
    style: {
      backgroundImage: `url("${src}"), linear-gradient(135deg, var(--color-slate-200), var(--color-slate-400))`
    }
  });
}
function Intro({
  intro
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
    className: "flex flex-col",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Eyebrow, {
      children: intro.eyebrow
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("h2", {
      className: "mt-8 text-[34px] leading-[1.08] tracking-tight text-slate-900 2xl:text-[40px]",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
        className: "block font-light",
        children: intro.titleLight
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
        className: "font-semibold",
        children: intro.titleBold
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
      className: "mt-6 text-[15px] leading-relaxed text-brand-900/75",
      children: intro.text
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(ArrowLink, {
      href: intro.cta.href,
      className: "mt-8",
      children: intro.cta.label
    })]
  });
}
function ChevronList({
  group
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Eyebrow, {
      children: group.title
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("ul", {
      className: "mt-7 space-y-1",
      children: group.links.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("li", {
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
          href: link.href,
          className: "group flex items-center justify-between gap-4 py-1.5 text-[15px] text-slate-700 transition-colors hover:text-brand-700",
          children: [link.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.ChevronRight, {
            className: "size-4 shrink-0 text-slate-500 transition-transform group-hover:translate-x-0.5 group-hover:text-brand-700"
          })]
        })
      }, link.label))
    })]
  });
}
function Promo({
  promo
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
    className: "rounded-sm bg-brand-50 p-5",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
      className: "font-medium text-slate-900",
      children: promo.title
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
      className: "mt-1 text-sm text-slate-600",
      children: promo.text
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("a", {
      href: promo.cta.href,
      className: "btn-sweep group mt-5 inline-flex rounded-sm bg-brand-800 px-5 py-3 text-sm font-medium text-white",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("span", {
        className: "inline-flex items-center gap-2",
        children: [promo.cta.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.ArrowRight, {
          className: "size-4 transition-transform group-hover:translate-x-1"
        })]
      })
    })]
  });
}
function ProductsMenu({
  menu
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
    className: "grid grid-cols-[1.15fr_1fr_0.8fr_1.25fr_1.1fr] divide-x divide-slate-200 py-10 [&>*]:px-8 2xl:[&>*]:px-10",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Intro, {
      intro: menu.intro
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(ChevronList, {
      group: menu.windows
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(ChevronList, {
      group: menu.doors
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Eyebrow, {
        children: menu.series.title
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("ul", {
        className: "mt-6 space-y-2",
        children: menu.series.items.map(item => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("li", {
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
            href: item.href,
            className: "group flex items-center gap-4 rounded-sm p-1 -mx-1 transition-colors hover:bg-slate-50",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Thumb, {
              src: item.image,
              className: "h-13 w-20"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("span", {
              className: "min-w-0 flex-1",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                className: "block text-[15px] font-medium text-slate-900 group-hover:text-brand-700",
                children: item.label
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                className: "mt-0.5 block text-[11px] uppercase tracking-[0.12em] text-slate-500",
                children: item.tagline
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.ChevronRight, {
              className: "size-4 shrink-0 text-slate-500 transition-transform group-hover:translate-x-0.5"
            })]
          })
        }, item.label))
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Eyebrow, {
        children: menu.compare.eyebrow
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Thumb, {
        src: menu.compare.image,
        className: "mt-6 aspect-[3/2] w-full"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
        className: "mt-6 text-2xl font-medium leading-tight tracking-tight text-slate-900",
        children: menu.compare.title
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
        className: "mt-3 text-[15px] leading-relaxed text-slate-500",
        children: menu.compare.text
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(ArrowLink, {
        href: menu.compare.cta.href,
        className: "mt-3",
        children: menu.compare.cta.label
      })]
    })]
  });
}
function ProfessionalsMenu({
  menu
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
    className: "grid grid-cols-[1.1fr_1fr_1fr_1fr_1fr] divide-x divide-slate-200 py-8 [&>*]:px-8",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
      className: "pt-2",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Intro, {
        intro: menu.intro
      })
    }), menu.audiences.map(audience => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
      className: "flex flex-col",
      children: [audience.href ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
        href: audience.href,
        className: "group block",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
          className: "block overflow-hidden rounded-sm",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Thumb, {
            src: audience.image,
            className: "aspect-[3/2] w-full transition-transform duration-500 group-hover:scale-105"
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("span", {
          className: "mt-6 flex items-start justify-between gap-3 text-xl font-medium leading-snug tracking-tight text-slate-900 transition-colors group-hover:text-brand-700",
          children: [audience.title, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.ArrowRight, {
            className: "mt-1.5 size-4 shrink-0 text-brand-700 transition-transform group-hover:translate-x-1"
          })]
        })]
      }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.Fragment, {
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Thumb, {
          src: audience.image,
          className: "aspect-[3/2] w-full"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
          className: "mt-6 text-xl font-medium leading-snug tracking-tight text-slate-900",
          children: audience.title
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("p", {
        className: "mt-2 text-[15px] leading-relaxed text-slate-600",
        children: audience.text
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("ul", {
        className: "mt-auto space-y-2 pt-6",
        children: audience.links.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("li", {
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(ArrowLink, {
            href: link.href,
            className: "text-[15px] font-normal",
            children: link.label
          })
        }, link.label))
      })]
    }, audience.title)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
      className: "flex flex-col",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Eyebrow, {
        className: "pt-2",
        children: menu.quickLinks.title
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("ul", {
        className: "mt-5 space-y-1",
        children: menu.quickLinks.links.map(link => {
          const Icon = _icons__WEBPACK_IMPORTED_MODULE_1__.quickLinkIcons[link.icon];
          return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("li", {
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
              href: link.href,
              className: "group flex items-center gap-3 py-1.5 text-[15px] text-slate-700 transition-colors hover:text-brand-700",
              children: [Icon && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Icon, {
                className: "size-5 text-slate-700 group-hover:text-brand-700"
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                className: "flex-1",
                children: link.label
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.ArrowRight, {
                className: "size-4 text-slate-500 transition-transform group-hover:translate-x-0.5"
              })]
            })
          }, link.label);
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
        className: "my-6 block h-px w-8 bg-slate-300"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Promo, {
        promo: menu.promo
      })]
    })]
  });
}
function ColumnsMenu({
  menu
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
    className: "grid divide-x divide-slate-200 py-10 [&>*]:px-8 2xl:[&>*]:px-10",
    style: {
      gridTemplateColumns: `1.15fr repeat(${menu.groups.length}, 1fr) 1fr`
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Intro, {
      intro: menu.intro
    }), menu.groups.map(group => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("div", {
      children: [group.href ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
        href: group.href,
        className: "group inline-flex items-center gap-2",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Eyebrow, {
          className: "transition-colors group-hover:text-brand-700",
          children: group.title
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.ArrowRight, {
          className: "size-3.5 text-brand-700 transition-transform group-hover:translate-x-1"
        })]
      }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Eyebrow, {
        children: group.title
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("ul", {
        className: "mt-7 space-y-3",
        children: group.links.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("li", {
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("a", {
            href: link.href,
            className: "group flex items-start justify-between gap-4 transition-colors",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("span", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                className: "block text-[15px] text-slate-800 group-hover:text-brand-700",
                children: link.label
              }), link.description && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("span", {
                className: "mt-0.5 block text-sm text-slate-500",
                children: link.description
              })]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.ChevronRight, {
              className: "mt-1 size-4 shrink-0 text-slate-500 transition-transform group-hover:translate-x-0.5 group-hover:text-brand-700"
            })]
          })
        }, link.label))
      })]
    }, group.title)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
      className: "flex items-end",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
        className: "w-full",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Promo, {
          promo: menu.promo || {
            title: "Have a project in mind?",
            text: "Our team is here to help.",
            cta: menu.intro.cta
          }
        })
      })
    })]
  });
}
const layouts = {
  products: ProductsMenu,
  professionals: ProfessionalsMenu,
  columns: ColumnsMenu
};
function MegaMenu({
  id,
  menu
}) {
  const Layout = layouts[menu.type];
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
    id: `mega-menu-${id}`,
    className: "absolute inset-x-0 top-full px-4 xl:px-8",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
      className: "mx-auto max-w-[1480px] animate-nav-in overflow-hidden rounded-b-md border border-t-0 border-slate-200 bg-white shadow-2xl shadow-slate-900/15",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(Layout, {
        menu: menu
      })
    })
  });
}

/***/ },

/***/ "./src/components/Navbar/MobileMenu.js"
/*!*********************************************!*\
  !*** ./src/components/Navbar/MobileMenu.js ***!
  \*********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ MobileMenu)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _Logo__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Logo */ "./src/components/Navbar/Logo.js");
/* harmony import */ var _navData__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./navData */ "./src/components/Navbar/navData.js");
/* harmony import */ var _icons__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./icons */ "./src/components/Navbar/icons.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__);





function MobileMenu({
  open,
  onClose,
  items,
  config
}) {
  const [expanded, setExpanded] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);

  // Bloquea el scroll de la página mientras el menú está abierto.
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (!open) return;
    const previous = document.body.style.overflow;
    document.body.style.overflow = "hidden";
    return () => {
      document.body.style.overflow = previous;
    };
  }, [open]);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("div", {
    className: `fixed inset-0 z-[60] transition-[visibility] duration-300 xl:hidden ${open ? "visible" : "invisible"}`,
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("div", {
      className: `absolute inset-0 bg-slate-950/40 transition-opacity duration-300 ${open ? "opacity-100" : "opacity-0"}`,
      onClick: onClose
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("div", {
      id: "mobile-menu",
      role: "dialog",
      "aria-modal": "true",
      "aria-label": "Main menu",
      className: `absolute inset-y-0 right-0 flex w-full max-w-md flex-col bg-white shadow-2xl transition-transform duration-300 ${open ? "translate-x-0" : "translate-x-full"}`,
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("div", {
        className: "flex h-[76px] shrink-0 items-center justify-between border-b border-slate-200 px-5",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(_Logo__WEBPACK_IMPORTED_MODULE_1__["default"], {
          href: config.homeUrl,
          logoUrl: config.logoUrl,
          siteName: config.siteName,
          compact: true
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("button", {
          type: "button",
          onClick: onClose,
          className: "-mr-2 rounded-sm p-2 text-slate-800 hover:bg-slate-100",
          "aria-label": "Close menu",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_3__.Close, {
            className: "size-6"
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("div", {
        className: "flex-1 overflow-y-auto px-5 py-4",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("form", {
          action: config.homeUrl,
          method: "get",
          role: "search",
          className: "relative mb-4",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_3__.Search, {
            className: "pointer-events-none absolute left-3 top-1/2 size-5 -translate-y-1/2 text-slate-400"
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("input", {
            type: "search",
            name: "s",
            placeholder: "Search products, resources\u2026",
            className: "w-full rounded-sm border border-slate-300 py-3 pl-11 pr-4 text-[15px] outline-none focus:border-brand-600 focus:ring-2 focus:ring-brand-600/20"
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("ul", {
          className: "divide-y divide-slate-200",
          children: items.map(item => {
            if (!item.menu) {
              return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("li", {
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("a", {
                  href: item.href,
                  className: "block py-4 text-[17px] font-medium text-slate-900",
                  children: item.label
                })
              }, item.id);
            }
            const isOpen = expanded === item.id;
            return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("li", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("button", {
                type: "button",
                onClick: () => setExpanded(isOpen ? null : item.id),
                "aria-expanded": isOpen,
                "aria-controls": `mobile-section-${item.id}`,
                className: `flex w-full items-center justify-between py-4 text-left text-[17px] font-medium ${isOpen ? "text-brand-700" : "text-slate-900"}`,
                children: [item.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_3__.ChevronDown, {
                  className: `size-5 transition-transform ${isOpen ? "rotate-180" : ""}`
                })]
              }), isOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("div", {
                id: `mobile-section-${item.id}`,
                className: "animate-nav-in pb-5",
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("a", {
                  href: item.menu.intro.cta.href,
                  className: "group mb-4 inline-flex items-center gap-2 text-[15px] font-medium text-brand-700",
                  children: [item.menu.intro.cta.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_3__.ArrowRight, {
                    className: "size-4 transition-transform group-hover:translate-x-1"
                  })]
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("div", {
                  className: "space-y-5",
                  children: (0,_navData__WEBPACK_IMPORTED_MODULE_2__.getMobileGroups)(item.menu).map(group => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("div", {
                    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("p", {
                      className: "text-[11px] font-semibold uppercase tracking-[0.2em] text-slate-500",
                      children: group.title
                    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("ul", {
                      className: "mt-2",
                      children: group.links.map(link => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("li", {
                        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("a", {
                          href: link.href,
                          className: "block py-1.5 text-[15px] text-slate-700 hover:text-brand-700",
                          children: link.label
                        })
                      }, link.label))
                    })]
                  }, group.title))
                })]
              })]
            }, item.id);
          })
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("div", {
        className: "shrink-0 border-t border-slate-200 p-5",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("a", {
          href: config.quoteUrl,
          className: "btn-sweep group flex w-full justify-center rounded-sm bg-brand-800 px-6 py-4 font-medium text-white",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("span", {
            className: "inline-flex items-center gap-2",
            children: ["Request a Quote", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_3__.ArrowRight, {
              className: "size-5 transition-transform group-hover:translate-x-1"
            })]
          })
        })
      })]
    })]
  });
}

/***/ },

/***/ "./src/components/Navbar/Navbar.js"
/*!*****************************************!*\
  !*** ./src/components/Navbar/Navbar.js ***!
  \*****************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ Navbar)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _Logo__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Logo */ "./src/components/Navbar/Logo.js");
/* harmony import */ var _MegaMenu__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./MegaMenu */ "./src/components/Navbar/MegaMenu.js");
/* harmony import */ var _MobileMenu__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./MobileMenu */ "./src/components/Navbar/MobileMenu.js");
/* harmony import */ var _SearchPanel__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./SearchPanel */ "./src/components/Navbar/SearchPanel.js");
/* harmony import */ var _navData__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./navData */ "./src/components/Navbar/navData.js");
/* harmony import */ var _icons__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./icons */ "./src/components/Navbar/icons.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__);








const CLOSE_DELAY = 150;
function Navbar({
  config
}) {
  const {
    items
  } = (0,react__WEBPACK_IMPORTED_MODULE_0__.useMemo)(() => (0,_navData__WEBPACK_IMPORTED_MODULE_5__.getNavData)(config), [config]);
  const [openMenu, setOpenMenu] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  const [searchOpen, setSearchOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [mobileOpen, setMobileOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [scrolled, setScrolled] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const headerRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const closeTimer = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const lastPointer = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)("");
  const activeMenu = items.find(item => item.id === openMenu)?.menu;
  const cancelClose = () => clearTimeout(closeTimer.current);
  const scheduleClose = () => {
    cancelClose();
    closeTimer.current = setTimeout(() => setOpenMenu(null), CLOSE_DELAY);
  };
  const closeAll = () => {
    setOpenMenu(null);
    setSearchOpen(false);
  };

  // Hover abre el mega menú en escritorio; el click lo alterna para teclado y pantallas táctiles.
  const handleHover = (e, id) => {
    if (e.pointerType !== "mouse") return;
    cancelClose();
    setSearchOpen(false);
    setOpenMenu(id);
  };
  const handleClick = id => {
    const fromMouse = lastPointer.current === "mouse";
    lastPointer.current = "";
    setSearchOpen(false);
    setOpenMenu(prev => prev === id && !fromMouse ? null : id);
  };
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const onKeyDown = e => {
      if (e.key === "Escape") {
        closeAll();
        setMobileOpen(false);
      }
    };
    const onPointerDown = e => {
      if (!headerRef.current?.contains(e.target)) closeAll();
    };
    const onScroll = () => setScrolled(window.scrollY > 8);
    const desktop = window.matchMedia("(min-width: 80rem)");
    const onBreakpoint = e => e.matches && setMobileOpen(false);
    onScroll();
    document.addEventListener("keydown", onKeyDown);
    document.addEventListener("pointerdown", onPointerDown);
    window.addEventListener("scroll", onScroll, {
      passive: true
    });
    desktop.addEventListener("change", onBreakpoint);
    return () => {
      clearTimeout(closeTimer.current);
      document.removeEventListener("keydown", onKeyDown);
      document.removeEventListener("pointerdown", onPointerDown);
      window.removeEventListener("scroll", onScroll);
      desktop.removeEventListener("change", onBreakpoint);
    };
  }, []);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsxs)("header", {
      ref: headerRef,
      onPointerEnter: cancelClose,
      onPointerLeave: e => e.pointerType === "mouse" && scheduleClose(),
      className: `relative h-full border-b border-slate-200/70 bg-white/95 backdrop-blur-md transition-shadow ${scrolled || openMenu || searchOpen ? "shadow-sm" : ""}`,
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsxs)("div", {
        className: "mx-auto flex h-full max-w-[1536px] items-center gap-6 px-5 xl:px-10 2xl:px-12",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_Logo__WEBPACK_IMPORTED_MODULE_1__["default"], {
          href: config.homeUrl,
          logoUrl: config.logoUrl,
          siteName: config.siteName
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)("nav", {
          "aria-label": "Main",
          className: "hidden flex-1 justify-center xl:flex",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)("ul", {
            className: "flex items-center gap-0.5 2xl:gap-1.5",
            children: items.map(item => {
              const isOpen = openMenu === item.id;
              const base = "inline-flex items-center gap-1.5 rounded-sm px-3 py-3 text-[15px] font-medium transition-colors";
              return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)("li", {
                children: item.menu ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsxs)("button", {
                  type: "button",
                  "aria-expanded": isOpen,
                  "aria-controls": `mega-menu-${item.id}`,
                  onPointerEnter: e => handleHover(e, item.id),
                  onPointerDown: e => lastPointer.current = e.pointerType,
                  onClick: () => handleClick(item.id),
                  className: `${base} ${isOpen ? "bg-slate-100 text-brand-700" : "text-slate-800 hover:text-brand-700"}`,
                  children: [item.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_6__.ChevronDown, {
                    className: `size-3.5 transition-transform ${isOpen ? "rotate-180" : ""}`
                  })]
                }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)("a", {
                  href: item.href,
                  onPointerEnter: e => e.pointerType === "mouse" && setOpenMenu(null),
                  className: `${base} text-slate-800 hover:text-brand-700`,
                  children: item.label
                })
              }, item.id);
            })
          })
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsxs)("div", {
          className: "ml-auto flex items-center gap-1 sm:gap-3 xl:ml-0 2xl:gap-5",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)("button", {
            type: "button",
            onClick: () => {
              setOpenMenu(null);
              setSearchOpen(prev => !prev);
            },
            "aria-expanded": searchOpen,
            "aria-controls": "navbar-search",
            "aria-label": searchOpen ? "Close search" : "Open search",
            className: "hidden rounded-sm p-2 text-slate-800 transition-colors hover:text-brand-700 xl:inline-flex",
            children: searchOpen ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_6__.Close, {
              className: "size-6"
            }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_6__.Search, {
              className: "size-6"
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)("a", {
            href: config.quoteUrl,
            className: "btn-sweep group hidden rounded-sm bg-brand-800 px-6 py-3.5 text-[15px] font-medium text-white shadow-sm sm:inline-flex 2xl:px-7 2xl:py-4 2xl:text-base",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsxs)("span", {
              className: "inline-flex items-center gap-2",
              children: ["Request a Quote", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_6__.ArrowRight, {
                className: "size-4 transition-transform group-hover:translate-x-1"
              })]
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)("button", {
            type: "button",
            onClick: () => setMobileOpen(true),
            "aria-expanded": mobileOpen,
            "aria-controls": "mobile-menu",
            "aria-label": "Open menu",
            className: "-mr-2 rounded-sm p-2 text-slate-900 hover:bg-slate-100 xl:hidden",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_6__.Menu, {
              className: "size-7"
            })
          })]
        })]
      }), activeMenu && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)("div", {
        className: "hidden xl:block",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_MegaMenu__WEBPACK_IMPORTED_MODULE_2__["default"], {
          id: openMenu,
          menu: activeMenu
        }, openMenu)
      }), searchOpen && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_SearchPanel__WEBPACK_IMPORTED_MODULE_4__["default"], {
        action: config.homeUrl
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_7__.jsx)(_MobileMenu__WEBPACK_IMPORTED_MODULE_3__["default"], {
      open: mobileOpen,
      onClose: () => setMobileOpen(false),
      items: items,
      config: config
    })]
  });
}

/***/ },

/***/ "./src/components/Navbar/SearchPanel.js"
/*!**********************************************!*\
  !*** ./src/components/Navbar/SearchPanel.js ***!
  \**********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ SearchPanel)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _icons__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./icons */ "./src/components/Navbar/icons.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__);



function SearchPanel({
  action
}) {
  const inputRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    inputRef.current?.focus();
  }, []);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
    id: "navbar-search",
    className: "absolute inset-x-0 top-full px-4 xl:px-8",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("div", {
      className: "mx-auto max-w-[1480px] animate-nav-in rounded-b-md border border-t-0 border-slate-200 bg-white px-8 py-8 shadow-2xl shadow-slate-900/15",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("form", {
        action: action,
        method: "get",
        role: "search",
        className: "mx-auto flex max-w-3xl items-center gap-4",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.Search, {
          className: "size-6 shrink-0 text-slate-400"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("label", {
          htmlFor: "navbar-search-input",
          className: "sr-only",
          children: "Search"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)("input", {
          ref: inputRef,
          id: "navbar-search-input",
          type: "search",
          name: "s",
          placeholder: "Search products, series, resources\u2026",
          className: "min-w-0 flex-1 border-b border-slate-300 bg-transparent py-3 text-xl font-light text-slate-900 outline-none placeholder:text-slate-400 focus:border-brand-600"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsxs)("button", {
          type: "submit",
          className: "group inline-flex items-center gap-2 rounded-sm bg-brand-800 px-5 py-3 text-sm font-medium text-white transition-colors hover:bg-brand-900",
          children: ["Search", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_2__.jsx)(_icons__WEBPACK_IMPORTED_MODULE_1__.ArrowRight, {
            className: "size-4 transition-transform group-hover:translate-x-1"
          })]
        })]
      })
    })
  });
}

/***/ },

/***/ "./src/components/Navbar/icons.js"
/*!****************************************!*\
  !*** ./src/components/Navbar/icons.js ***!
  \****************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   ArrowRight: () => (/* binding */ ArrowRight),
/* harmony export */   Award: () => (/* binding */ Award),
/* harmony export */   Bbb: () => (/* binding */ Bbb),
/* harmony export */   BookOpen: () => (/* binding */ BookOpen),
/* harmony export */   Check: () => (/* binding */ Check),
/* harmony export */   ChevronDown: () => (/* binding */ ChevronDown),
/* harmony export */   ChevronRight: () => (/* binding */ ChevronRight),
/* harmony export */   Close: () => (/* binding */ Close),
/* harmony export */   Facebook: () => (/* binding */ Facebook),
/* harmony export */   FileText: () => (/* binding */ FileText),
/* harmony export */   GoogleBusiness: () => (/* binding */ GoogleBusiness),
/* harmony export */   Instagram: () => (/* binding */ Instagram),
/* harmony export */   Linkedin: () => (/* binding */ Linkedin),
/* harmony export */   Mail: () => (/* binding */ Mail),
/* harmony export */   MapPin: () => (/* binding */ MapPin),
/* harmony export */   Menu: () => (/* binding */ Menu),
/* harmony export */   Phone: () => (/* binding */ Phone),
/* harmony export */   Search: () => (/* binding */ Search),
/* harmony export */   ShieldCheck: () => (/* binding */ ShieldCheck),
/* harmony export */   Wrench: () => (/* binding */ Wrench),
/* harmony export */   quickLinkIcons: () => (/* binding */ quickLinkIcons)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const icon = paths => function Icon({
  className = "size-4",
  ...props
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 24 24",
    fill: "none",
    stroke: "currentColor",
    strokeWidth: "1.75",
    strokeLinecap: "round",
    strokeLinejoin: "round",
    "aria-hidden": "true",
    className: className,
    ...props,
    children: paths
  });
};
const ChevronDown = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
  d: "m6 9 6 6 6-6"
}));
const ChevronRight = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
  d: "m9 18 6-6-6-6"
}));
const ArrowRight = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M5 12h14"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m12 5 7 7-7 7"
  })]
}));
const Search = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "11",
    cy: "11",
    r: "8"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m21 21-4.3-4.3"
  })]
}));
const Menu = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
  d: "M4 6h16M4 12h16M4 18h16"
}));
const Close = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
  d: "M18 6 6 18M6 6l12 12"
}));
const Check = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
  d: "M20 6 9 17l-5-5"
}));
const BookOpen = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"
  })]
}));
const FileText = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M14 2v4a2 2 0 0 0 2 2h4"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M10 9H8M16 13H8M16 17H8"
  })]
}));
const Award = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "12",
    cy: "8",
    r: "6"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"
  })]
}));
const ShieldCheck = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m9 12 2 2 4-4"
  })]
}));
const Wrench = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
  d: "M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"
}));
const Mail = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    width: "20",
    height: "16",
    x: "2",
    y: "4",
    rx: "2"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"
  })]
}));
const quickLinkIcons = {
  catalog: BookOpen,
  brochures: FileText,
  certifications: Award,
  warranty: ShieldCheck,
  service: Wrench,
  contact: Mail
};
const Phone = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
  d: "M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"
}));
const MapPin = icon(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "12",
    cy: "10",
    r: "3"
  })]
}));
// Iconos de marca (relleno sólido) para las redes sociales del topbar.
const brandIcon = (viewBox, d) => function BrandIcon({
  className = "size-4",
  ...props
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
    viewBox: viewBox,
    fill: "currentColor",
    "aria-hidden": "true",
    className: className,
    ...props,
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
      d: d
    })
  });
};
const Facebook = brandIcon("0 0 24 24", "M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z");
const Instagram = brandIcon("0 0 24 24", "M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.72 3.72 0 01-1.38-.9 3.72 3.72 0 01-.9-1.38c-.16-.42-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16M12 0C8.74 0 8.33.01 7.05.07 5.78.13 4.9.33 4.14.63a5.88 5.88 0 00-2.13 1.38A5.88 5.88 0 00.63 4.14C.33 4.9.13 5.78.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.06 1.27.26 2.15.56 2.91.31.79.73 1.46 1.38 2.13a5.88 5.88 0 002.13 1.38c.76.3 1.64.5 2.91.56C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c1.27-.06 2.15-.26 2.91-.56a5.88 5.88 0 002.13-1.38 5.88 5.88 0 001.38-2.13c.3-.76.5-1.64.56-2.91.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.06-1.27-.26-2.15-.56-2.91a5.88 5.88 0 00-1.38-2.13A5.88 5.88 0 0019.86.63C19.1.33 18.22.13 16.95.07 15.67.01 15.26 0 12 0zm0 5.84a6.16 6.16 0 100 12.32 6.16 6.16 0 000-12.32zm0 10.16a4 4 0 110-8 4 4 0 010 8zm6.4-11.85a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z");
const Linkedin = brandIcon("0 0 24 24", "M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z");
const Bbb = brandIcon("0 0 30 30", "M11.166 20.194c.806.577 2.809 1.923 3.222 2.358.412.435.023 1.099.023 1.099l.618.252c.137-.298.962-1.397 1.511-2.084.496-.62.926-1.706.941-2.503.047-2.572-3.367-3.794-4.949-5.237-.778-.71-.16-1.122-.16-1.122l-.527-.343C9.808 14.926 7.662 17.686 11.166 20.194zM12.922 11.605c1.969 1.74 5.435 3.548 5.679 4.717.318 1.523-.412 2.382-.412 2.382l.394.321c.213-.304.451-.591.67-.891.892-1.222 1.752-2.463 2.629-3.695 2.004-2.818 1.254-5.49-1.765-7.648-1.537-1.098-3.032-2.26-4.584-3.339-.871-.733-.275-2.107-.275-2.107l-.367-.32c0 0-3.286 3.984-3.573 5.588C11.045 8.148 10.953 9.865 12.922 11.605zM23 27L22.341 25 7.659 25 7 27 11.19 27 11.822 29 18.217 29 18.816 27z");
const GoogleBusiness = brandIcon("0 0 50 50", "M 9.2832031 4 C 7.488935 4 5.9052102 5.2051958 5.4277344 6.9355469 L 2 19.365234 L 2 19.5 C 2 23.078268 4.9217323 26 8.5 26 C 10.813035 26 12.845511 24.77516 13.998047 22.945312 C 15.146939 24.778014 17.180833 26 19.5 26 C 21.819167 26 23.853061 24.778014 25.001953 22.945312 C 26.154489 24.77516 28.186965 26 30.5 26 C 32.813993 26 34.847721 24.77447 36 22.943359 C 37.152279 24.77447 39.186007 26 41.5 26 C 45.078268 26 48 23.078268 48 19.5 L 48 19.365234 L 44.570312 6.9355469 C 44.092963 5.2056548 42.509782 4 40.714844 4 L 9.2832031 4 z M 9.2832031 6 L 14.851562 6 L 13.197266 18 L 4.4511719 18 L 7.3554688 7.46875 C 7.5959929 6.597101 8.3794712 6 9.2832031 6 z M 26 6 L 33.128906 6 L 34.783203 18 L 26 18 L 26 6 z M 15 18 L 24 18 L 24 19.5 C 24 19.668891 24.012611 19.834272 24.025391 20 L 15 20 L 15 19.5 L 15 18 z M 36.802734 18 L 45.548828 18 L 45.984375 19.580078 C 45.981749 19.724009 45.951091 19.859765 45.935547 20 L 37.050781 20 C 37.032383 19.833631 37 19.67153 37 19.5 L 37 19.431641 L 36.802734 18 z M 4.0644531 20 L 12.949219 20 C 12.699714 22.256206 10.826202 24 8.5 24 C 6.175282 24 4.3143567 22.254621 4.0644531 20 z M 26.099609 20 L 34.900391 20 C 34.642986 22.247621 32.820142 24 30.5 24 C 28.179858 24 26.357014 22.247621 26.099609 20 z M 14 25.974609 C 12.517 27.235609 10.599 28 8.5 28 C 6.845 28 5.306 27.519172 4 26.701172 L 4 43 C 4 44.654 5.346 46 7 46 L 43 46 C 44.654 46 46 44.654 46 43 L 46 26.701172 C 44.694 27.519172 43.155 28 41.5 28 C 39.401 28 37.483 27.235609 36 25.974609 C 34.517 27.235609 32.599 28 30.5 28 C 28.401 28 26.483 27.235609 25 25.974609 C 23.517 27.235609 21.599 28 19.5 28 C 17.401 28 15.483 27.235609 14 25.974609 z M 35.5 29 C 37.546 29 39.372453 29.952547 40.564453 31.435547 L 39.132812 32.867188 C 38.314813 31.740187 36.996 31 35.5 31 C 33.019 31 31 33.019 31 35.5 C 31 37.981 33.019 40 35.5 40 C 37.453 40 39.102609 38.742 39.724609 37 L 36 37 L 36 35 L 41.974609 35 C 41.986609 35.166 42 35.331 42 35.5 C 42 39.084 39.084 42 35.5 42 C 31.916 42 29 39.084 29 35.5 C 29 31.916 31.916 29 35.5 29 z");

/***/ },

/***/ "./src/components/Navbar/navData.js"
/*!******************************************!*\
  !*** ./src/components/Navbar/navData.js ***!
  \******************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   getMobileGroups: () => (/* binding */ getMobileGroups),
/* harmony export */   getNavData: () => (/* binding */ getNavData)
/* harmony export */ });
// Contenido del menú principal. Las rutas son relativas al home de WordPress
// y las imágenes se buscan en /assets/images/nav/ del tema o en la Media Library (uploads).
function getNavData({
  homeUrl = "/",
  imagesUrl = "",
  uploadsUrl = "/wp-content/uploads/"
}) {
  const u = path => homeUrl.replace(/\/$/, "") + path;
  const img = file => imagesUrl + file;
  const upload = file => uploadsUrl + file;
  const menus = {
    products: {
      type: "products",
      intro: {
        eyebrow: "Products",
        titleLight: "Designed",
        titleBold: "for a better tomorrow.",
        text: "A complete line of high-performance windows and doors, engineered for residential, commercial and multifamily projects.",
        cta: {
          label: "View All Products",
          href: u("/products/")
        }
      },
      windows: {
        title: "Windows",
        links: [{
          label: "All Windows",
          href: u("/windows/")
        }, {
          label: "Picture Windows",
          href: u("/windows/picture-windows/")
        }, {
          label: "Casement & Awning Windows",
          href: u("/windows/casement-awning-windows/")
        }, {
          label: "Horizontal Sliding Windows",
          href: u("/windows/horizontal-sliding-windows/")
        }, {
          label: "Single-Hung Windows",
          href: u("/windows/single-hung-windows/")
        }, {
          label: "Double-Hung Windows",
          href: u("/windows/double-hung-windows/")
        }, {
          label: "Arch & Special Shape Windows",
          href: u("/windows/arch-special-shape-windows/")
        }]
      },
      doors: {
        title: "Doors",
        links: [{
          label: "All Doors",
          href: u("/doors/")
        }, {
          label: "Patio Sliding Doors",
          href: u("/doors/patio-sliding-doors/")
        }, {
          label: "French Swing Doors",
          href: u("/doors/french-swing-doors/")
        }, {
          label: "Multi-Slide Doors",
          href: u("/doors/multiple-sliding-doors/")
        }, {
          label: "Multi-Fold Doors",
          href: u("/doors/multiple-folding-doors/")
        }]
      },
      series: {
        title: "Series",
        items: [{
          label: "Zenith",
          tagline: "Versatility Redefined",
          href: u("/series/zenith/"),
          image: upload("2026/09/ZENITH_Series-300x200.jpg")
        }, {
          label: "Timeless",
          tagline: "Classic Performance",
          href: u("/series/timeless/"),
          image: upload("2026/09/Timeless_Series-300x200.jpg")
        }, {
          label: "Serene",
          tagline: "Modern Comfort",
          href: u("/series/serene/"),
          image: upload("2026/09/Serene_Series-300x200.jpg")
        }, {
          label: "Elegance",
          tagline: "Refined Design",
          href: u("/series/elegance/"),
          image: upload("2026/09/Elegance_Series-300x193.jpg")
        }, {
          label: "Aluminum",
          tagline: "Strength in Form",
          href: u("/series/aluminum/"),
          image: upload("2026/09/Aluminum_Series-300x200.jpg")
        }]
      },
      compare: {
        eyebrow: "Compare",
        image: img("compare-series.jpg"),
        title: "Find the right series for your project.",
        text: "Compare features, performance and options side by side.",
        cta: {
          label: "Compare Series",
          href: u("/series/#compare")
        }
      }
    },
    solutions: {
      type: "columns",
      intro: {
        eyebrow: "Solutions",
        titleLight: "Solutions for",
        titleBold: "every kind of project.",
        text: "From custom homes to multifamily and commercial buildings: the right product and the right support for each project.",
        cta: {
          label: "Explore Solutions",
          href: u("/solutions/")
        }
      },
      groups: [{
        title: "By Market",
        links: [{
          label: "Residential",
          description: "Beautiful spaces. Lasting value.",
          href: u("/solutions/residential/")
        }, {
          label: "Multifamily",
          description: "Built for scale. Backed by expertise.",
          href: u("/solutions/multifamily/")
        }, {
          label: "Commercial",
          description: "Performance for what's next.",
          href: u("/solutions/commercial/")
        }]
      }, {
        title: "By Project Type",
        links: [{
          label: "New Construction",
          href: u("/solutions/new-construction/")
        }, {
          label: "Replacement & Retrofit",
          href: u("/solutions/replacement/")
        }, {
          label: "Remodel & Renovation",
          href: u("/solutions/remodel/")
        }, {
          label: "Energy Upgrades",
          href: u("/solutions/energy-upgrades/")
        }]
      }]
    },
    professionals: {
      type: "professionals",
      intro: {
        eyebrow: "For Professionals",
        titleLight: "Built to",
        titleBold: "Bring Your Vision to Life.",
        text: "Tools, documentation and support for architects, developers, contractors and dealers, from concept to completion.",
        cta: {
          label: "Work With Premium",
          href: u("/professionals/")
        }
      },
      audiences: [{
        title: "Architects & Specifiers",
        href: u("/professionals/architects-specifiers/"),
        text: "Design with confidence. Access technical resources, drawings, certifications and support.",
        image: upload("2026/09/ArchitectsSpecifiers-768x512.jpg"),
        links: [{
          label: "Technical Resources",
          href: u("/resources/technical/")
        }, {
          label: "Specifications",
          href: u("/professionals/specifications/")
        }, {
          label: "Finish & Glass Options",
          href: u("/professionals/finish-glass-options/")
        }, {
          label: "Request Support",
          href: u("/professionals/request-support/")
        }]
      }, {
        title: "Developers & General Contractors",
        href: u("/professionals/developers-general-contractors/"),
        text: "Reliable solutions for projects of any scale. Consistent quality, competitive lead times and dedicated project support.",
        image: upload("2026/09/DevelopersGeneralContractors-768x512.jpg"),
        links: [{
          label: "Multifamily Solutions",
          href: u("/solutions/multifamily/")
        }, {
          label: "Commercial Solutions",
          href: u("/solutions/commercial/")
        }, {
          label: "Project Support",
          href: u("/professionals/project-support/")
        }, {
          label: "Request a Quote",
          href: u("/request-a-quote/")
        }]
      }, {
        title: "Dealers & Distributors",
        href: u("/professionals/dealers-distributors/"),
        text: "A strong partner for your business. High-quality products, training, marketing support and a seamless ordering experience.",
        image: upload("2026/09/DealersDistributors-768x512.jpg"),
        links: [{
          label: "Dealer Program",
          href: u("/professionals/dealer-program/")
        }, {
          label: "iQuote Login",
          href: u("/iquote/")
        }, {
          label: "Marketing Resources",
          href: u("/professionals/marketing-resources/")
        }, {
          label: "Become a Dealer",
          href: u("/professionals/become-a-dealer/")
        }]
      }],
      quickLinks: {
        title: "Quick Links",
        links: [{
          label: "Product Catalog",
          icon: "catalog",
          href: u("/resources/product-catalog/")
        }, {
          label: "Brochures",
          icon: "brochures",
          href: u("/resources/brochures/")
        }, {
          label: "Certifications",
          icon: "certifications",
          href: u("/resources/certifications/")
        }, {
          label: "Warranty Information",
          icon: "warranty",
          href: u("/warranty/")
        }, {
          label: "Service Request",
          icon: "service",
          href: u("/service-request/")
        }, {
          label: "Contact Sales",
          icon: "contact",
          href: u("/contact/")
        }]
      },
      promo: {
        title: "Have a project in mind?",
        text: "Our team is here to help.",
        cta: {
          label: "Start a Conversation",
          href: u("/contact/")
        }
      }
    },
    capabilities: {
      type: "columns",
      intro: {
        eyebrow: "Capabilities",
        titleLight: "Engineered",
        titleBold: "and built in California.",
        text: "In-house manufacturing, testing and custom fabrication give us control over every detail.",
        cta: {
          label: "Our Capabilities",
          href: u("/capabilities/")
        }
      },
      groups: [{
        title: "Manufacturing",
        href: u("/capabilities/manufacturing/"),
        links: [{
          label: "Custom Sizes & Shapes",
          href: u("/capabilities/customization/")
        }, {
          label: "Finishes & Colors",
          href: u("/capabilities/finishes-colors/")
        }, {
          label: "Glass Options",
          href: u("/capabilities/glass-options/")
        }, {
          label: "Hardware & Accessories",
          href: u("/capabilities/hardware/")
        }]
      }, {
        title: "Performance",
        links: [{
          label: "Energy Efficiency",
          href: u("/capabilities/energy-efficiency/")
        }, {
          label: "Testing & Certifications",
          href: u("/capabilities/certifications/")
        }, {
          label: "Sound Control",
          href: u("/capabilities/sound-control/")
        }, {
          label: "Coastal & High-Wind",
          href: u("/capabilities/coastal-high-wind/")
        }]
      }]
    },
    resources: {
      type: "columns",
      intro: {
        eyebrow: "Resources",
        titleLight: "Everything",
        titleBold: "you need, in one place.",
        text: "Catalogs, technical documents, warranty information and support for homeowners and professionals.",
        cta: {
          label: "View All Resources",
          href: u("/resources/")
        }
      },
      groups: [{
        title: "Documents",
        links: [{
          label: "Product Catalog",
          href: u("/resources/product-catalog/")
        }, {
          label: "Brochures",
          href: u("/resources/brochures/")
        }, {
          label: "Technical Drawings",
          href: u("/resources/technical/?type=detail-drawing")
        }, {
          label: "Installation Guides",
          href: u("/resources/technical/?type=installation-guide")
        }]
      }, {
        title: "Support",
        links: [{
          label: "Warranty Information",
          href: u("/warranty/")
        }, {
          label: "Service Request",
          href: u("/service-request/")
        }, {
          label: "FAQs",
          href: u("/faqs/")
        }, {
          label: "Blog & News",
          href: u("/blog/")
        }]
      }]
    }
  };
  const items = [{
    id: "products",
    label: "Products",
    menu: menus.products
  }, {
    id: "solutions",
    label: "Solutions",
    menu: menus.solutions
  }, {
    id: "professionals",
    label: "Professionals",
    menu: menus.professionals
  }, {
    id: "capabilities",
    label: "Capabilities",
    menu: menus.capabilities
  }, {
    id: "projects",
    label: "Projects",
    href: u("/projects/")
  }, {
    id: "resources",
    label: "Resources",
    menu: menus.resources
  }, {
    id: "about",
    label: "About",
    href: u("/about/")
  }];
  return {
    items
  };
}

// Aplana cualquier tipo de mega menú en grupos de links para el menú móvil.
function getMobileGroups(menu) {
  switch (menu.type) {
    case "products":
      return [menu.windows, menu.doors, {
        title: menu.series.title,
        links: menu.series.items
      }, {
        title: menu.compare.eyebrow,
        links: [menu.compare.cta]
      }];
    case "professionals":
      return [...menu.audiences.map(({
        title,
        href,
        links
      }) => ({
        title,
        links: href ? [{
          label: "Overview",
          href
        }, ...links] : links
      })), menu.quickLinks];
    default:
      // Los grupos con página propia muestran primero su "Overview" en el menú móvil.
      return menu.groups.map(group => group.href ? {
        ...group,
        links: [{
          label: "Overview",
          href: group.href
        }, ...group.links]
      } : group);
  }
}

/***/ },

/***/ "./src/components/SocialLinks.js"
/*!***************************************!*\
  !*** ./src/components/SocialLinks.js ***!
  \***************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ SocialLinks)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _TopBar_topbarData__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./TopBar/topbarData */ "./src/components/TopBar/topbarData.js");
/* harmony import */ var _Navbar_icons__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Navbar/icons */ "./src/components/Navbar/icons.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__);




const socialIcons = {
  facebook: _Navbar_icons__WEBPACK_IMPORTED_MODULE_2__.Facebook,
  instagram: _Navbar_icons__WEBPACK_IMPORTED_MODULE_2__.Instagram,
  linkedin: _Navbar_icons__WEBPACK_IMPORTED_MODULE_2__.Linkedin,
  bbb: _Navbar_icons__WEBPACK_IMPORTED_MODULE_2__.Bbb,
  google: _Navbar_icons__WEBPACK_IMPORTED_MODULE_2__.GoogleBusiness
};

// Lista de redes sociales compartida por el topbar y el footer.
function SocialLinks({
  className = "",
  linkClassName = "",
  iconClassName = "size-4"
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("ul", {
    className: `flex items-center ${className}`,
    children: _TopBar_topbarData__WEBPACK_IMPORTED_MODULE_1__.socials.map(({
      id,
      label,
      href
    }) => {
      const Icon = socialIcons[id];
      return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("li", {
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)("a", {
          href: href,
          target: "_blank",
          rel: "noopener noreferrer",
          "aria-label": label,
          title: label,
          className: `flex transition-colors duration-150 ${linkClassName}`,
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_3__.jsx)(Icon, {
            className: iconClassName
          })
        })
      }, id);
    })
  });
}

/***/ },

/***/ "./src/components/TopBar/TopBar.js"
/*!*****************************************!*\
  !*** ./src/components/TopBar/TopBar.js ***!
  \*****************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ TopBar)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _SocialLinks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../SocialLinks */ "./src/components/SocialLinks.js");
/* harmony import */ var _topbarData__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./topbarData */ "./src/components/TopBar/topbarData.js");
/* harmony import */ var _Navbar_icons__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../Navbar/icons */ "./src/components/Navbar/icons.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__);





const link = "inline-flex items-center gap-2 whitespace-nowrap transition-colors hover:text-brand-700";
function TopBar() {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)("div", {
    className: "h-10 border-b border-slate-200/70 bg-white text-[13px] text-slate-600",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("div", {
      className: "mx-auto flex h-full max-w-[1536px] items-center justify-between gap-4 px-5 lg:grid lg:grid-cols-[1fr_auto_1fr] xl:px-10 2xl:px-12",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("div", {
        className: "flex items-center gap-5",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("a", {
          href: `mailto:${_topbarData__WEBPACK_IMPORTED_MODULE_2__.contact.email}`,
          className: `${link} max-md:hidden`,
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(_Navbar_icons__WEBPACK_IMPORTED_MODULE_3__.Mail, {
            className: "size-3.5 text-brand-600"
          }), _topbarData__WEBPACK_IMPORTED_MODULE_2__.contact.email]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("a", {
          href: _topbarData__WEBPACK_IMPORTED_MODULE_2__.contact.phone.href,
          className: link,
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(_Navbar_icons__WEBPACK_IMPORTED_MODULE_3__.Phone, {
            className: "size-3.5 text-brand-600"
          }), _topbarData__WEBPACK_IMPORTED_MODULE_2__.contact.phone.label]
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsxs)("a", {
        href: _topbarData__WEBPACK_IMPORTED_MODULE_2__.contact.address.href,
        target: "_blank",
        rel: "noopener noreferrer",
        className: `${link} max-lg:hidden`,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(_Navbar_icons__WEBPACK_IMPORTED_MODULE_3__.MapPin, {
          className: "size-3.5 text-brand-600"
        }), _topbarData__WEBPACK_IMPORTED_MODULE_2__.contact.address.label]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_4__.jsx)(_SocialLinks__WEBPACK_IMPORTED_MODULE_1__["default"], {
        className: "gap-3.5 sm:gap-4 lg:justify-self-end",
        linkClassName: "text-slate-500 hover:text-brand-700"
      })]
    })
  });
}

/***/ },

/***/ "./src/components/TopBar/topbarData.js"
/*!*********************************************!*\
  !*** ./src/components/TopBar/topbarData.js ***!
  \*********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   contact: () => (/* binding */ contact),
/* harmony export */   socials: () => (/* binding */ socials)
/* harmony export */ });
// Datos de contacto y redes sociales que muestra la barra superior.
const contact = {
  email: "info@premiumwindows.com",
  phone: {
    label: "800 608 0252",
    href: "tel:+18006080252"
  },
  address: {
    label: "15 Longitude Way, Corona, CA 92881",
    href: "https://www.google.com/maps/search/?api=1&query=15+Longitude+Way,+Corona,+CA+92881"
  }
};
const socials = [{
  id: "facebook",
  label: "Facebook",
  href: "https://www.facebook.com/premiumwindows/"
}, {
  id: "instagram",
  label: "Instagram",
  href: "https://www.instagram.com/premiumwindows_/"
}, {
  id: "linkedin",
  label: "LinkedIn",
  href: "https://www.linkedin.com/company/premium-windows-doors/"
}, {
  id: "bbb",
  label: "Better Business Bureau",
  href: "https://www.bbb.org/us/ca/corona/profile/door-manufacturers/premium-windows-1126-850101245"
}, {
  id: "google",
  label: "Google Business Profile",
  href: "https://www.google.com/search?q=Premium+Windows+and+Doors&stick=H4sIAAAAAAAA_-NgU1I1qLAwSElOskw2NjZMS0xKTLa0MqgwNTE2SzEyNbQ0TLQ0TUoyX8QqGVCUmptZmqsQnpmXkl9erJCYl6Lgkp9fVAwAXcFhukUAAAA&hl=en&mat=CX3YJ_lDl-NuElcBa0lj_9EOgGJKLRrDgAqBI-sVDpaZaSenBf2GbvkWFrOgnHZVI4eGjd3iYR-PxVxznX2KvsfWkimuDNr2wiAvYGK9RgRDSsZuIaNj0i4THIeBkpdbLhA&authuser=0"
}];

/***/ },

/***/ "./src/scripts/carousel3d.js"
/*!***********************************!*\
  !*** ./src/scripts/carousel3d.js ***!
  \***********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initCarousel3d: () => (/* binding */ initCarousel3d)
/* harmony export */ });
// Carrusel 3D tipo coverflow ([data-carousel3d]): la card activa al frente y las demás giradas en perspectiva.
// El avance automático lo marca la barra de progreso del punto activo (animationend), así la pausa
// (hover, foco, fuera de pantalla, pestaña oculta o botón) congela barra y temporizador a la vez.
const SWIPE_THRESHOLD = 40; // px

function initCarousel3d() {
  document.querySelectorAll("[data-carousel3d]").forEach(setup);
}
function setup(root) {
  const items = [...root.querySelectorAll("[data-c3d-item]")];
  const dots = [...root.querySelectorAll("[data-c3d-dot]")];
  const toggle = root.querySelector("[data-c3d-toggle]");
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const count = items.length;
  const pauses = new Set();
  let current = 0;
  if (count < 2) return;

  // Posición relativa más corta (circular): -2..2 con cinco items.
  const offset = i => {
    let d = i - current;
    if (d > count / 2) d -= count;
    if (d < -count / 2) d += count;
    return d;
  };
  const show = index => {
    current = (index + count) % count;
    items.forEach((item, i) => {
      const pos = offset(i);
      item.style.setProperty("--pos", pos);
      item.style.setProperty("--abs", Math.abs(pos));
      item.style.zIndex = count - Math.abs(pos);
      item.toggleAttribute("data-active", pos === 0);
      item.toggleAttribute("data-far", Math.abs(pos) > 1);
      item.setAttribute("aria-hidden", String(pos !== 0));
      item.querySelector("a").tabIndex = pos === 0 ? 0 : -1;
    });
    dots.forEach((dot, i) => dot.setAttribute("aria-current", String(i === current)));
  };
  const setPaused = (reason, paused) => {
    paused ? pauses.add(reason) : pauses.delete(reason);
    root.toggleAttribute("data-paused", pauses.size > 0);
  };

  // Avance automático al terminar la barra del punto activo.
  dots.forEach(dot => dot.querySelector("[data-c3d-bar]").addEventListener("animationend", () => show(current + 1)));
  dots.forEach((dot, i) => dot.addEventListener("click", () => show(i)));
  root.querySelector("[data-c3d-prev]").addEventListener("click", () => show(current - 1));
  root.querySelector("[data-c3d-next]").addEventListener("click", () => show(current + 1));

  // Clic en una card lateral: la trae al frente en vez de navegar.
  items.forEach((item, i) => item.querySelector("a").addEventListener("click", e => {
    if (i !== current || root.dataset.swiped) {
      e.preventDefault();
      if (!root.dataset.swiped) show(i);
    }
  }));
  toggle.addEventListener("click", () => {
    const paused = toggle.getAttribute("aria-pressed") !== "true";
    toggle.setAttribute("aria-pressed", String(paused));
    toggle.setAttribute("aria-label", paused ? "Play carousel" : "Pause carousel");
    toggle.querySelector("[data-c3d-icon-pause]").hidden = paused;
    toggle.querySelector("[data-c3d-icon-play]").hidden = !paused;
    setPaused("user", paused);
  });
  root.addEventListener("pointerenter", e => e.pointerType === "mouse" && setPaused("hover", true));
  root.addEventListener("pointerleave", () => setPaused("hover", false));
  root.addEventListener("focusin", () => setPaused("focus", true));
  root.addEventListener("focusout", e => !root.contains(e.relatedTarget) && setPaused("focus", false));
  document.addEventListener("visibilitychange", () => setPaused("hidden", document.hidden));
  if ("IntersectionObserver" in window) {
    new IntersectionObserver(([entry]) => setPaused("offscreen", !entry.isIntersecting), {
      threshold: 0.3
    }).observe(root);
  }
  root.addEventListener("keydown", e => {
    if (e.key === "ArrowLeft") show(current - 1);else if (e.key === "ArrowRight") show(current + 1);
  });

  // Swipe en táctil (y arrastre con mouse).
  let startX = null;
  root.addEventListener("pointerdown", e => {
    if (e.target.closest("[data-c3d-controls]")) return;
    startX = e.clientX;
    delete root.dataset.swiped;
  });
  root.addEventListener("pointerup", e => {
    if (startX === null) return;
    const dx = e.clientX - startX;
    startX = null;
    if (Math.abs(dx) < SWIPE_THRESHOLD) return;
    root.dataset.swiped = "true";
    show(current + (dx < 0 ? 1 : -1));
    setTimeout(() => delete root.dataset.swiped, 0);
  });
  items.forEach(item => item.addEventListener("dragstart", e => e.preventDefault()));
  if (reducedMotion) setPaused("reduced-motion", true);
  toggle.hidden = reducedMotion;
  root.querySelector("[data-c3d-controls]").hidden = false;
  root.toggleAttribute("data-autoplay", !reducedMotion);
  root.setAttribute("data-ready", "");
  show(0);
}

/***/ },

/***/ "./src/scripts/effects.js"
/*!********************************!*\
  !*** ./src/scripts/effects.js ***!
  \********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initHeroSlider: () => (/* binding */ initHeroSlider),
/* harmony export */   initReveal: () => (/* binding */ initReveal),
/* harmony export */   initTilt: () => (/* binding */ initTilt)
/* harmony export */ });
// Efectos de las plantillas PHP: reveal al hacer scroll ([data-reveal]), tilt 3D en cards ([data-tilt])
// y slideshows ([data-hero-slider] en el hero, [data-slideshow] en el resto).
const REVEAL_RATIO = 0.15;
const MAX_TILT = 6; // grados

// El reveal se reinicia al salir de pantalla, así que se repite cada vez que se pasa por la sección.
function initReveal() {
  const elements = document.querySelectorAll("[data-reveal]");
  if (!elements.length) return;
  if (!("IntersectionObserver" in window)) {
    elements.forEach(el => el.classList.add("is-revealed"));
    return;
  }
  const observer = new IntersectionObserver(entries => {
    entries.forEach(({
      target,
      isIntersecting,
      intersectionRatio
    }) => {
      if (isIntersecting && intersectionRatio >= REVEAL_RATIO) target.classList.add("is-revealed");else if (!isIntersecting) target.classList.remove("is-revealed");
    });
  }, {
    threshold: [0, REVEAL_RATIO]
  });
  elements.forEach(el => observer.observe(el));
}

// Solo en dispositivos con mouse y sin preferencia de movimiento reducido.
function initTilt() {
  const canTilt = window.matchMedia("(hover: hover) and (pointer: fine) and (prefers-reduced-motion: no-preference)");
  if (!canTilt.matches) return;
  document.querySelectorAll("[data-tilt]").forEach(card => {
    let rect = null;
    card.addEventListener("pointerenter", () => {
      rect = card.getBoundingClientRect();
      card.classList.add("is-tilting");
    });
    card.addEventListener("pointermove", e => {
      if (!rect) rect = card.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width;
      const y = (e.clientY - rect.top) / rect.height;
      card.style.setProperty("--tilt-x", `${(0.5 - y) * MAX_TILT * 2}deg`);
      card.style.setProperty("--tilt-y", `${(x - 0.5) * MAX_TILT * 2}deg`);
      card.style.setProperty("--shadow-x", `${(0.5 - x) * 24}px`);
      card.style.setProperty("--shadow-y", `${28 + (0.5 - y) * 16}px`);
      card.style.setProperty("--glare-x", `${x * 100}%`);
      card.style.setProperty("--glare-y", `${y * 100}%`);
    });
    card.addEventListener("pointerleave", () => {
      rect = null;
      card.classList.remove("is-tilting");
      ["--tilt-x", "--tilt-y", "--shadow-x", "--shadow-y"].forEach(prop => card.style.removeProperty(prop));
    });
  });
}

// Slideshows (hero y [data-slideshow]): fundido entre slides, avance automático e indicadores clicables.
function initHeroSlider() {
  document.querySelectorAll("[data-hero-slider], [data-slideshow]").forEach(setupSlideshow);
}
function setupSlideshow(hero) {
  const slides = [...hero.querySelectorAll("[data-slide]")];
  const dots = [...hero.querySelectorAll("[data-slide-to]")];
  const interval = Number(hero.dataset.interval) || 6000;
  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  let current = 0;
  let timer = null;
  const show = index => {
    current = (index + slides.length) % slides.length;
    slides.forEach((slide, i) => slide.toggleAttribute("data-active", i === current));
    dots.forEach((dot, i) => dot.setAttribute("aria-current", String(i === current)));
  };
  const stop = () => clearInterval(timer);
  const start = () => {
    stop();
    if (!reducedMotion) timer = setInterval(() => show(current + 1), interval);
  };
  dots.forEach((dot, i) => dot.addEventListener("click", () => {
    show(i);
    start();
  }));
  document.addEventListener("visibilitychange", () => document.hidden ? stop() : start());
  start();
}

/***/ },

/***/ "./src/scripts/faqs.js"
/*!*****************************!*\
  !*** ./src/scripts/faqs.js ***!
  \*****************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initFaqSearch: () => (/* binding */ initFaqSearch)
/* harmony export */ });
// Búsqueda en vivo de la página de FAQs: oculta preguntas y categorías sin coincidencias
// y abre las que coinciden.
function initFaqSearch() {
  const root = document.querySelector("[data-faq]");
  const input = root?.querySelector("[data-faq-search]");
  if (!input) return;
  const groups = [...root.querySelectorAll("[data-faq-group]")];
  const empty = root.querySelector("[data-faq-empty]");
  input.addEventListener("input", () => {
    const query = input.value.trim().toLowerCase();
    let matches = 0;
    groups.forEach(group => {
      let groupMatches = 0;
      group.querySelectorAll("[data-faq-item]").forEach(item => {
        const match = !query || item.textContent.toLowerCase().includes(query);
        item.hidden = !match;
        item.open = Boolean(query) && match;
        if (match) groupMatches++;
      });
      group.hidden = groupMatches === 0;
      matches += groupMatches;
    });
    empty.hidden = matches > 0;
  });
}

/***/ },

/***/ "./src/scripts/forms.js"
/*!******************************!*\
  !*** ./src/scripts/forms.js ***!
  \******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initAutoSubmit: () => (/* binding */ initAutoSubmit),
/* harmony export */   initEmailForms: () => (/* binding */ initEmailForms)
/* harmony export */ });
// Envío de formularios con EmailJS (API REST, sin librería).
// Cada <form data-emailjs-form> trae sus credenciales en data-* desde pwd_emailjs_attrs().
const EMAILJS_ENDPOINT = "https://api.emailjs.com/api/v1.0/email/send";

// Junta los campos del formulario; los grupos de checkboxes se unen con comas.
function collectParams(form) {
  const params = {};
  new FormData(form).forEach((value, key) => {
    if (key === "website") return; // honeypot
    params[key] = params[key] ? `${params[key]}, ${value}` : value;
  });
  // Resumen legible para la plantilla general de EmailJS ({{summary}}): una línea "Etiqueta: valor" por campo.
  params.summary = Object.entries(params).filter(([key, value]) => key !== "consent" && value !== "").map(([key, value]) => `${form.querySelector(`[name="${key}"]`)?.dataset.label || key}: ${value}`).join("\n");
  params.form_name = form.dataset.emailjsForm;
  params.page_url = window.location.href;
  return params;
}
function setStatus(form, type, message) {
  const status = form.querySelector("[data-form-status]");
  if (!status) return;
  status.hidden = false;
  status.dataset.type = type;
  status.textContent = message;
}
async function handleSubmit(e) {
  e.preventDefault();
  const form = e.currentTarget;
  const button = form.querySelector('[type="submit"]');
  const {
    publicKey,
    serviceId,
    templateId,
    fallbackEmail
  } = form.dataset;
  const errorMessage = `Something went wrong. Please try again or email us at ${fallbackEmail}.`;

  // Los bots suelen llenar el campo oculto.
  if (form.elements.website?.value) return;
  if (!publicKey || !serviceId || !templateId) {
    console.warn("EmailJS no está configurado: define las constantes PWD_EMAILJS_* en wp-config.php.");
    setStatus(form, "error", errorMessage);
    return;
  }
  button.disabled = true;
  setStatus(form, "info", "Sending…");
  try {
    const response = await fetch(EMAILJS_ENDPOINT, {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({
        service_id: serviceId,
        template_id: templateId,
        user_id: publicKey,
        template_params: collectParams(form)
      })
    });
    if (!response.ok) throw new Error(await response.text());
    form.reset();
    setStatus(form, "success", form.dataset.successMessage || "Thank you. Your project was submitted and our team will follow up shortly.");
  } catch (error) {
    console.error("EmailJS:", error);
    setStatus(form, "error", errorMessage);
  } finally {
    button.disabled = false;
  }
}
function initEmailForms() {
  document.querySelectorAll("form[data-emailjs-form]").forEach(form => form.addEventListener("submit", handleSubmit));
}

// Formularios de filtros (<form data-autosubmit>): se envían al cambiar un select.
function initAutoSubmit() {
  document.querySelectorAll("form[data-autosubmit]").forEach(form => {
    form.querySelectorAll("[data-autosubmit-hide]").forEach(el => el.hidden = true);
    form.querySelectorAll("select").forEach(select => select.addEventListener("change", () => form.requestSubmit()));
  });
}

/***/ },

/***/ "./src/scripts/i18n.js"
/*!*****************************!*\
  !*** ./src/scripts/i18n.js ***!
  \*****************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   DEFAULT_LANG: () => (/* binding */ DEFAULT_LANG),
/* harmony export */   LANGS: () => (/* binding */ LANGS),
/* harmony export */   STORAGE_KEY: () => (/* binding */ STORAGE_KEY),
/* harmony export */   applyLang: () => (/* binding */ applyLang),
/* harmony export */   getInitialLang: () => (/* binding */ getInitialLang),
/* harmony export */   getLang: () => (/* binding */ getLang)
/* harmony export */ });
// Traducción EN ⇄ ES en el navegador (mismo enfoque que LanguageToggle de FCL Empresarial):
// el idioma se guarda en localStorage y applyLang() cambia los textos sin recargar.
//
// A diferencia de FCL, no hace falta marcar cada texto con data-i18n: el sitio está escrito en inglés y
// el diccionario (src/i18n/es.js) mapea "texto en inglés" → "texto en español". Se recorren los nodos de
// texto y los atributos visibles, guardando el original para poder volver a inglés. Un MutationObserver
// traduce lo que React monte después (mega menús, menú móvil, mensajes de formularios).
//   data-i18n="clave"      → usa keys[clave] del diccionario (innerHTML), como en FCL
//   data-i18n-skip / translate="no" → no se traduce (nombres propios, emails, código)
// El diccionario se carga aparte (chunk i18n-es) solo cuando alguien elige español.

const DEFAULT_LANG = "en";
const STORAGE_KEY = "pwd-lang";
const LANGS = ["en", "es"];
const ATTRIBUTES = ["alt", "placeholder", "aria-label", "title"];
const SKIP = "script, style, noscript, svg, textarea, code, [data-i18n-skip], [translate='no']";
const originalText = new WeakMap(); // nodo de texto → texto original (inglés)
const appliedText = new WeakMap(); // nodo de texto → último texto que puso este script
const originalAttrs = new WeakMap(); // elemento → { atributo: original }
const originalHtml = new WeakMap(); // elemento con data-i18n → innerHTML original

let current = DEFAULT_LANG;
let dictionary = null;
let observer = null;
let originalTitle = "";
// Textos sin traducción vistos en esta página. En la consola: [...pwdI18nMissing] para copiarlos a es-strings.json.
const missing = window.pwdI18nMissing = new Set();
async function loadDictionary() {
  if (!dictionary) dictionary = (await __webpack_require__.e(/*! import() | i18n-es */ "i18n-es").then(() => (__webpack_require__(/*! ../i18n/es */ "./src/i18n/es.js")))).default;
  return dictionary;
}

// Traduce conservando los espacios de los extremos. null si no hay traducción.
function translate(text) {
  if (current === DEFAULT_LANG || !dictionary) return null;
  const trimmed = text.trim();
  if (!trimmed || !/[A-Za-z]/.test(trimmed)) return null;
  const key = trimmed.replace(/\s+/g, " ");
  let value = dictionary.strings[key];
  if (value == null) {
    for (const [pattern, replacement] of dictionary.patterns) {
      if (pattern.test(key)) {
        value = key.replace(pattern, replacement);
        break;
      }
    }
  }
  // Textos compuestos ("Zenith Series · Performance Vinyl", "Retrofit 2″ • Block"): se traduce cada parte.
  if (value == null) {
    const separator = [" · ", " • "].find(sep => key.includes(sep));
    if (separator) {
      const parts = key.split(separator);
      const translated = parts.map(part => translate(part)?.trim() ?? part);
      if (translated.some((part, i) => part !== parts[i])) value = translated.join(separator);
    }
  }
  if (value == null) {
    missing.add(key);
    return null;
  }
  const lead = text.match(/^\s*/)[0];
  const trail = text.match(/\s*$/)[0];
  return lead + value + trail;
}
function skipped(node) {
  const el = node.nodeType === Node.TEXT_NODE ? node.parentElement : node;
  return !el || el.closest(SKIP);
}
function applyText(node) {
  if (skipped(node)) return;
  // Si React (u otro script) cambió el texto, ese es el nuevo original.
  if (!originalText.has(node) || node.nodeValue !== appliedText.get(node)) originalText.set(node, node.nodeValue);
  const original = originalText.get(node);
  const next = translate(original) ?? original;
  appliedText.set(node, next);
  if (node.nodeValue !== next) node.nodeValue = next;
}
function applyAttributes(el) {
  if (skipped(el)) return;
  const saved = originalAttrs.get(el) || {};
  ATTRIBUTES.forEach(attr => {
    if (!el.hasAttribute(attr)) return;
    const value = el.getAttribute(attr);
    // Igual que en applyText: un valor que no puso este script es el nuevo original.
    if (!saved[attr] || value !== saved[attr].applied) saved[attr] = {
      original: value
    };
    const next = translate(saved[attr].original) ?? saved[attr].original;
    saved[attr].applied = next;
    if (value !== next) el.setAttribute(attr, next);
  });
  originalAttrs.set(el, saved);
}
function applyKey(el) {
  if (!originalHtml.has(el)) originalHtml.set(el, el.innerHTML);
  const value = current === DEFAULT_LANG ? null : dictionary?.keys?.[el.getAttribute("data-i18n")];
  el.innerHTML = value ?? originalHtml.get(el);
}
function applyTree(root) {
  if (root.nodeType === Node.TEXT_NODE) return applyText(root);
  if (root.nodeType !== Node.ELEMENT_NODE) return;
  const keyed = root.matches("[data-i18n]") ? [root] : [];
  keyed.push(...root.querySelectorAll("[data-i18n]"));
  keyed.forEach(applyKey);
  const walker = document.createTreeWalker(root, NodeFilter.SHOW_TEXT);
  for (let node = walker.nextNode(); node; node = walker.nextNode()) {
    if (!node.parentElement?.closest("[data-i18n]")) applyText(node);
  }
  ;
  [root, ...root.querySelectorAll(ATTRIBUTES.map(a => `[${a}]`).join(","))].forEach(el => {
    if (el.nodeType === Node.ELEMENT_NODE) applyAttributes(el);
  });
}
function observe() {
  if (observer) return;
  observer = new MutationObserver(mutations => {
    if (current === DEFAULT_LANG) return;
    mutations.forEach(m => {
      if (m.type === "characterData") applyText(m.target);else if (m.type === "attributes") applyAttributes(m.target);else m.addedNodes.forEach(applyTree);
    });
  });
  observer.observe(document.body, {
    subtree: true,
    childList: true,
    characterData: true,
    attributes: true,
    attributeFilter: ATTRIBUTES
  });
}
async function applyLang(lang) {
  const next = LANGS.includes(lang) ? lang : DEFAULT_LANG;
  if (next !== DEFAULT_LANG) {
    try {
      await loadDictionary();
    } catch (error) {
      console.error("i18n:", error);
      return;
    }
  }
  current = next;
  if (!originalTitle) originalTitle = document.title;
  document.title = translate(originalTitle) ?? originalTitle;
  applyTree(document.body);
  observe();
  document.documentElement.lang = current;
  document.documentElement.classList.remove("i18n-pending");
  try {
    localStorage.setItem(STORAGE_KEY, current);
  } catch (e) {}
  window.dispatchEvent(new CustomEvent("pwd:langchange", {
    detail: current
  }));
}

// ?lang=es en la URL tiene prioridad (enlaces directos a la versión en español); luego localStorage.
function getInitialLang() {
  const param = new URLSearchParams(window.location.search).get("lang");
  if (LANGS.includes(param)) return param;
  try {
    const saved = localStorage.getItem(STORAGE_KEY);
    if (LANGS.includes(saved)) return saved;
  } catch (e) {}
  return DEFAULT_LANG;
}
function getLang() {
  return current;
}

/***/ },

/***/ "./src/scripts/product.js"
/*!********************************!*\
  !*** ./src/scripts/product.js ***!
  \********************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   initProductPage: () => (/* binding */ initProductPage)
/* harmony export */ });
// Fichas de producto (template-parts/product-page.php): selector de vistas de la foto principal
// ([data-product-views]) y momento del día de las texturas de vidrio ([data-glass-textures]).
// Sin JavaScript se ve la primera vista y la textura de tarde.
function initToggle(root, buttonAttr, itemAttr) {
  const buttons = [...root.querySelectorAll(`[${buttonAttr}]`)];
  const items = [...root.querySelectorAll(`[${itemAttr}]`)];
  buttons.forEach(button => {
    button.addEventListener("click", () => {
      const value = button.getAttribute(buttonAttr);
      buttons.forEach(b => b.setAttribute("aria-pressed", String(b === button)));
      items.forEach(item => item.hidden = item.getAttribute(itemAttr) !== value);
    });
  });
}
function initProductPage() {
  document.querySelectorAll("[data-product-views]").forEach(root => initToggle(root, "data-view-to", "data-view"));
  document.querySelectorAll("[data-glass-textures]").forEach(root => initToggle(root, "data-time-to", "data-time"));
}

/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom/client"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	const __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		const cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		const module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			const e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = (module) => {
/******/ 		const getter = module && module.__esModule ?
/******/ 			() => (module['default']) :
/******/ 			() => (module);
/******/ 		__webpack_require__.d(getter, { a: getter });
/******/ 		return getter;
/******/ 	};
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	// define getter/value functions for harmony exports
/******/ 	__webpack_require__.d = (exports, definition) => {
/******/ 		for(var key in definition) {
/******/ 			if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 				Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 			}
/******/ 		}
/******/ 	};
/******/ 	
/******/ 	/* webpack/runtime/ensure chunk */
/******/ 	__webpack_require__.f = {};
/******/ 	// This file contains only the entry chunk.
/******/ 	// The chunk loading function for additional chunks
/******/ 	__webpack_require__.e = (chunkId) => {
/******/ 		return Promise.all(Object.keys(__webpack_require__.f).reduce((promises, key) => {
/******/ 			__webpack_require__.f[key](chunkId, promises);
/******/ 			return promises;
/******/ 		}, []));
/******/ 	};
/******/ 	
/******/ 	/* webpack/runtime/get javascript chunk filename */
/******/ 	// This function allow to reference async chunks
/******/ 	__webpack_require__.u = (chunkId) => (chunkId + ".js?ver=" + "6bdc14a64b3db861e3f0" + "");
/******/ 	
/******/ 	/* webpack/runtime/get mini-css chunk filename */
/******/ 	// This function allow to reference async chunks
/******/ 	__webpack_require__.miniCssF = (chunkId) => (undefined);
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	__webpack_require__.o = (obj, prop) => (Object.hasOwn(obj, prop));
/******/ 	
/******/ 	/* webpack/runtime/load script */
/******/ 	(() => {
/******/ 		const inProgress = {};
/******/ 		const dataWebpackPrefix = "brads-boilerplate-theme:";
/******/ 		// loadScript function to load a script via script tag
/******/ 		__webpack_require__.l = (url, done, key, chunkId) => {
/******/ 			if(inProgress[url]) { inProgress[url].push(done); return; }
/******/ 			let script, needAttach;
/******/ 			if(key !== undefined) {
/******/ 				const scripts = document.getElementsByTagName("script");
/******/ 				for(var i = 0; i < scripts.length; i++) {
/******/ 					const s = scripts[i];
/******/ 					if(s.getAttribute("src") == url || s.getAttribute("data-webpack") == dataWebpackPrefix + key) { script = s; break; }
/******/ 				}
/******/ 			}
/******/ 			if(!script) {
/******/ 				needAttach = true;
/******/ 				script = document.createElement('script');
/******/ 		
/******/ 				script.charset = 'utf-8';
/******/ 				if (__webpack_require__.nc) {
/******/ 					script.setAttribute("nonce", __webpack_require__.nc);
/******/ 				}
/******/ 				script.setAttribute("data-webpack", dataWebpackPrefix + key);
/******/ 		
/******/ 				script.src = url;
/******/ 			}
/******/ 			inProgress[url] = [done];
/******/ 			const onScriptComplete = (prev, event) => {
/******/ 				// avoid mem leaks in IE.
/******/ 				script.onerror = script.onload = null;
/******/ 				clearTimeout(timeout);
/******/ 				const doneFns = inProgress[url];
/******/ 				delete inProgress[url];
/******/ 				script.parentNode?.removeChild(script);
/******/ 				doneFns?.forEach((fn) => (fn(event)));
/******/ 				if(prev) return prev(event);
/******/ 			}
/******/ 			const timeout = setTimeout(onScriptComplete.bind(null, undefined, { type: 'timeout', target: script }), 120000);
/******/ 			script.onerror = onScriptComplete.bind(null, script.onerror);
/******/ 			script.onload = onScriptComplete.bind(null, script.onload);
/******/ 			needAttach && document.head.appendChild(script);
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = (exports) => {
/******/ 		Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/ 	
/******/ 	/* webpack/runtime/publicPath */
/******/ 	(() => {
/******/ 		let scriptUrl;
/******/ 		if (globalThis.importScripts) scriptUrl = globalThis.location + "";
/******/ 		const document = globalThis.document;
/******/ 		if (!scriptUrl && document) {
/******/ 			if (document.currentScript?.tagName.toUpperCase() === 'SCRIPT')
/******/ 				scriptUrl = document.currentScript.src;
/******/ 			if (!scriptUrl) {
/******/ 				const scripts = document.getElementsByTagName("script");
/******/ 				if(scripts.length) {
/******/ 					let i = scripts.length - 1;
/******/ 					while (i > -1 && (!scriptUrl || !/^https?:/.test(scriptUrl))) scriptUrl = scripts[i--].src;
/******/ 				}
/******/ 			}
/******/ 		}
/******/ 		// When supporting browsers where an automatic publicPath is not supported you must specify an output.publicPath manually via configuration
/******/ 		// or pass an empty string ("") and set the __webpack_public_path__ variable from your code to use your own logic.
/******/ 		if (!scriptUrl) throw new Error("Automatic publicPath is not supported in this browser");
/******/ 		scriptUrl = scriptUrl.replace(/^blob:|[?#].*$/g, "").replace(/\/[^/]+$/, "/");
/******/ 		__webpack_require__.p = scriptUrl;
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		const installedChunks = {
/******/ 			"index": 0
/******/ 		};
/******/ 		
/******/ 		__webpack_require__.f.j = (chunkId, promises) => {
/******/ 				// JSONP chunk loading for javascript
/******/ 				let installedChunkData = __webpack_require__.o(installedChunks, chunkId) ? installedChunks[chunkId] : undefined;
/******/ 				if(installedChunkData !== 0) { // 0 means "already installed".
/******/ 		
/******/ 					// a Promise means "currently loading".
/******/ 					if(installedChunkData) {
/******/ 						promises.push(installedChunkData[2]);
/******/ 					} else {
/******/ 						if(true) { // all chunks have JS
/******/ 							// setup Promise in chunk cache
/******/ 							const promise = new Promise((resolve, reject) => (installedChunkData = installedChunks[chunkId] = [resolve, reject]));
/******/ 							promises.push(installedChunkData[2] = promise);
/******/ 		
/******/ 							// create error before stack unwound to get useful stacktrace later
/******/ 							const error = new Error();
/******/ 							const loadingEnded = (event) => {
/******/ 								if(__webpack_require__.o(installedChunks, chunkId)) {
/******/ 									installedChunkData = installedChunks[chunkId];
/******/ 									if(installedChunkData !== 0) installedChunks[chunkId] = undefined;
/******/ 									if(installedChunkData) {
/******/ 										const errorType = event && (event.type === 'load' ? 'missing' : event.type);
/******/ 										const realSrc = event && event.target && event.target.src;
/******/ 										error.message = 'Loading chunk ' + chunkId + ' failed.\n(' + errorType + ': ' + realSrc + ')';
/******/ 										error.name = 'ChunkLoadError';
/******/ 										error.type = errorType;
/******/ 										error.request = realSrc;
/******/ 										error.event = event;
/******/ 										installedChunkData[1](error);
/******/ 									}
/******/ 								}
/******/ 							};
/******/ 							__webpack_require__.l(__webpack_require__.p + __webpack_require__.u(chunkId), loadingEnded, "chunk-" + chunkId, chunkId);
/******/ 						}
/******/ 					}
/******/ 				}
/******/ 		};
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		// no on chunks loaded
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		const webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			let [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 		
/******/ 		}
/******/ 		
/******/ 		const chunkLoadingGlobal = globalThis["webpackChunkbrads_boilerplate_theme"] ||= [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
let __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom/client */ "react-dom/client");
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_dom_client__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _components_Header__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/Header */ "./src/components/Header.js");
/* harmony import */ var _components_Footer_Footer__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/Footer/Footer */ "./src/components/Footer/Footer.js");
/* harmony import */ var _components_LanguageToggle__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/LanguageToggle */ "./src/components/LanguageToggle.js");
/* harmony import */ var _scripts_i18n__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./scripts/i18n */ "./src/scripts/i18n.js");
/* harmony import */ var _scripts_effects__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./scripts/effects */ "./src/scripts/effects.js");
/* harmony import */ var _scripts_carousel3d__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./scripts/carousel3d */ "./src/scripts/carousel3d.js");
/* harmony import */ var _scripts_forms__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./scripts/forms */ "./src/scripts/forms.js");
/* harmony import */ var _scripts_faqs__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./scripts/faqs */ "./src/scripts/faqs.js");
/* harmony import */ var _scripts_product__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./scripts/product */ "./src/scripts/product.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_11__);












const readConfig = el => JSON.parse(el.dataset.config || "{}");
const navbarRoot = document.querySelector("#navbar-root");
if (navbarRoot) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(navbarRoot).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_11__.jsx)(_components_Header__WEBPACK_IMPORTED_MODULE_2__["default"], {
    root: navbarRoot,
    config: readConfig(navbarRoot)
  }));
}
const footerRoot = document.querySelector("#footer-root");
if (footerRoot) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(footerRoot).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_11__.jsx)(_components_Footer_Footer__WEBPACK_IMPORTED_MODULE_3__["default"], {
    config: readConfig(footerRoot)
  }));
}
;(0,_scripts_effects__WEBPACK_IMPORTED_MODULE_6__.initReveal)();
(0,_scripts_effects__WEBPACK_IMPORTED_MODULE_6__.initTilt)();
(0,_scripts_effects__WEBPACK_IMPORTED_MODULE_6__.initHeroSlider)();
(0,_scripts_carousel3d__WEBPACK_IMPORTED_MODULE_7__.initCarousel3d)();
(0,_scripts_forms__WEBPACK_IMPORTED_MODULE_8__.initEmailForms)();
(0,_scripts_forms__WEBPACK_IMPORTED_MODULE_8__.initAutoSubmit)();
(0,_scripts_faqs__WEBPACK_IMPORTED_MODULE_9__.initFaqSearch)();
(0,_scripts_product__WEBPACK_IMPORTED_MODULE_10__.initProductPage)();

// Idioma: botón flotante EN/ES (src/components/LanguageToggle.js) y traducción en el navegador
// (src/scripts/i18n.js). Se aplica al final para que React ya haya montado header y footer.
const langRoot = document.createElement("div");
langRoot.id = "lang-toggle-root";
document.body.appendChild(langRoot);
react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(langRoot).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_11__.jsx)(_components_LanguageToggle__WEBPACK_IMPORTED_MODULE_4__["default"], {}));
(0,_scripts_i18n__WEBPACK_IMPORTED_MODULE_5__.applyLang)((0,_scripts_i18n__WEBPACK_IMPORTED_MODULE_5__.getInitialLang)());
})();

/******/ })()
;
//# sourceMappingURL=index.js.map