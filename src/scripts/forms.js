// Envío de formularios con EmailJS (API REST, sin librería).
// Cada <form data-emailjs-form> trae sus credenciales en data-* desde pwd_emailjs_attrs().
const EMAILJS_ENDPOINT = "https://api.emailjs.com/api/v1.0/email/send"

// Junta los campos del formulario; los grupos de checkboxes se unen con comas.
function collectParams(form) {
  const params = {}
  new FormData(form).forEach((value, key) => {
    if (key === "website") return // honeypot
    params[key] = params[key] ? `${params[key]}, ${value}` : value
  })
  params.form_name = form.dataset.emailjsForm
  params.page_url = window.location.href
  return params
}

function setStatus(form, type, message) {
  const status = form.querySelector("[data-form-status]")
  if (!status) return
  status.hidden = false
  status.dataset.type = type
  status.textContent = message
}

async function handleSubmit(e) {
  e.preventDefault()
  const form = e.currentTarget
  const button = form.querySelector('[type="submit"]')
  const { publicKey, serviceId, templateId, fallbackEmail } = form.dataset
  const errorMessage = `Something went wrong. Please try again or email us at ${fallbackEmail}.`

  // Los bots suelen llenar el campo oculto.
  if (form.elements.website?.value) return

  if (!publicKey || !serviceId || !templateId) {
    console.warn("EmailJS no está configurado: define las constantes PWD_EMAILJS_* en wp-config.php.")
    setStatus(form, "error", errorMessage)
    return
  }

  button.disabled = true
  setStatus(form, "info", "Sending…")

  try {
    const response = await fetch(EMAILJS_ENDPOINT, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        service_id: serviceId,
        template_id: templateId,
        user_id: publicKey,
        template_params: collectParams(form),
      }),
    })
    if (!response.ok) throw new Error(await response.text())

    form.reset()
    setStatus(form, "success", form.dataset.successMessage || "Thank you. Your project was submitted and our team will follow up shortly.")
  } catch (error) {
    console.error("EmailJS:", error)
    setStatus(form, "error", errorMessage)
  } finally {
    button.disabled = false
  }
}

export function initEmailForms() {
  document.querySelectorAll("form[data-emailjs-form]").forEach(form => form.addEventListener("submit", handleSubmit))
}

// Formularios de filtros (<form data-autosubmit>): se envían al cambiar un select.
export function initAutoSubmit() {
  document.querySelectorAll("form[data-autosubmit]").forEach(form => {
    form.querySelectorAll("[data-autosubmit-hide]").forEach(el => (el.hidden = true))
    form.querySelectorAll("select").forEach(select => select.addEventListener("change", () => form.requestSubmit()))
  })
}
