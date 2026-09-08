import { Link } from 'react-router-dom'

export default function Footer() {
  return (
    <footer className="site-footer mt-auto">
      <div className="container">
        <div className="row g-4">
          <div className="col-lg-4">
            <h5 className="fw-bold mb-3">Informe de Personas</h5>
            <p className="new-hero-sub footer-tagline">
              El informe más completo del mercado.
            </p>
            <p className="footer-muted small mt-2 mb-0">
              &copy; {new Date().getFullYear()}. Todos los derechos reservados.
            </p>
          </div>
          <div className="col-lg-4">
            <h5 className="fw-bold mb-3">Condiciones de uso</h5>
            <ul className="list-unstyled">
              <li className="mb-2"><Link to="/terminos-y-condiciones" className="footer-link text-decoration-none">Términos y Condiciones</Link></li>
              <li className="mb-2"><Link to="/politicas-de-privacidad" className="footer-link text-decoration-none">Políticas de Privacidad</Link></li>
            </ul>
          </div>
          <div className="col-lg-4">
            <h5 className="fw-bold mb-3">Contacto</h5>
            <p className="footer-muted mb-1">ayuda@informedepersonas.com.ar</p>
            <p className="footer-muted mb-1">
              <a
                href="https://wa.me/5493512190843"
                target="_blank"
                rel="noreferrer"
                className="footer-whatsapp text-decoration-none"
              >
                Consultas por <i className="bi bi-whatsapp"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </footer>
  )
}