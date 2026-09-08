import { useState } from 'react'
import { Link, NavLink } from 'react-router-dom'
import logoWeb from '../assets/images/logo-web.png'

const LogoImage = <img src={logoWeb} alt="Informe de Personas" style={{ display: 'block', height: '58px', width: 'auto' }} />

export default function Header() {
  const [menuOpen, setMenuOpen] = useState(false)

  const handleNavClick = () => {
    setMenuOpen(false)
  }

  const navLinks = (
    <>
      <li>
        <NavLink to="/informe" className="nav-link" onClick={handleNavClick}>
                  ¿Que contiene el informe?
        </NavLink>
      </li>
    </>
  )

  const navWhatsapp = (
    <li>
      <a
        href="https://wa.me/5493512190843"
        target="_blank"
        rel="noreferrer"
        className="nav-link nav-link-whatsapp"
        onClick={handleNavClick}
      >
        Consultas por <i className="bi bi-whatsapp"></i>
      </a>
    </li>
  )

  return (
    <>
      {menuOpen && <div className="nav-overlay" onClick={() => setMenuOpen(false)} />}
      <nav className="navbar navbar-expand-lg">
        <div className="container container-navbar">
          <Link className="navbar-brand" to="/">
            {LogoImage}
          </Link>
          <button className="navbar-toggler" type="button" onClick={() => setMenuOpen(true)}>
            <span className="navbar-toggler-icon"></span>
          </button>

          <div className={`nav-offcanvas ${menuOpen ? 'open' : ''}`}>
            <div className="nav-offcanvas-header">
              <button className="nav-close-btn" onClick={() => setMenuOpen(false)}>
                <i className="bi bi-x-lg"></i>
              </button>
            </div>
            <ul className="nav-offcanvas-links">
              {navLinks}
              <li>
                <NavLink to="/terminos-y-condiciones" className="nav-link" onClick={handleNavClick}>
                  Términos y Condiciones
                </NavLink>
              </li>
              <li>
                <NavLink to="/politicas-de-privacidad" className="nav-link" onClick={handleNavClick}>
                  Políticas de Privacidad
                </NavLink>
              </li>
              {navWhatsapp}
            </ul>
            <div className="nav-offcanvas-cta">
              <Link to="/" className="about-btn-primary" onClick={handleNavClick}>
                Iniciar una búsqueda
              </Link>
            </div>
          </div>

          <div className="collapse navbar-collapse navbar-desktop">
            <ul className="navbar-nav navbar-desktop-links">
              <li>
                <NavLink to="/informe" className="nav-link">
          ¿Que contiene el informe?
                </NavLink>
              </li>
              {navWhatsapp}
            </ul>
          </div>
        </div>
      </nav>
    </>)
}
