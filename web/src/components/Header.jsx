import { useState } from 'react'
import { Link, NavLink, useNavigate } from 'react-router-dom'
import logo from '../assets/images/logo-full.svg'

export default function Header() {
  const [query, setQuery] = useState('')
  const [menuOpen, setMenuOpen] = useState(false)
  const navigate = useNavigate()

  const handleSubmit = (e) => {
    e.preventDefault()
    setMenuOpen(false)
    if (query.trim()) {
      navigate(`/resultados?q=${encodeURIComponent(query.trim())}`)
    }
  }

  const handleNavClick = () => {
    setMenuOpen(false)
  }

  const navLinks = (
    <>
      <li>
        <NavLink to="/informe" className="nav-link" onClick={handleNavClick}>
          Que datos muestra el informe
        </NavLink>
      </li>
      <li>
        <NavLink to="/nosotros" className="nav-link" onClick={handleNavClick}>
          Sobre nosotros
        </NavLink>
      </li>
      <li>
        <a
          href="https://wa.me/5493512190843"
          target="_blank"
          rel="noreferrer"
          className="nav-link"
          onClick={handleNavClick}
        >
          Consultas
        </a>
      </li>
    </>
  )

  const searchForm = (
    <form onSubmit={handleSubmit} className="d-flex" style={{ background: '#f1f1f1', borderRadius: '50px', padding: '0.2rem' }}>
      <input
        type="text"
        className="form-control border-0"
        placeholder="Buscar..."
        value={query}
        onChange={(e) => setQuery(e.target.value)}
        style={{ background: 'transparent', fontSize: '0.85rem' }}
      />
      <button type="submit" className="search-btn-logo" aria-label="Buscar">
        <img
          src="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20width='46'%20height='46'%20viewBox='0%200%2046%2046'%20role='img'%20aria-label='Busca%20Data'%3e%3cdefs%3e%3clinearGradient%20id='bd-isologo-gradient'%20x1='0'%20y1='0'%20x2='1'%20y2='1'%3e%3cstop%20offset='0'%20stop-color='%23009c4f'/%3e%3cstop%20offset='1'%20stop-color='%23007b3b'/%3e%3c/linearGradient%3e%3c/defs%3e%3crect%20x='3'%20y='3'%20width='40'%20height='40'%20rx='12'%20fill='url(%23bd-isologo-gradient)'/%3e%3ccircle%20cx='21'%20cy='21'%20r='8.5'%20fill='none'%20stroke='%23ffffff'%20stroke-width='3'/%3e%3cline%20x1='27.5'%20y1='27.5'%20x2='34.5'%20y2='34.5'%20stroke='%23ffffff'%20stroke-width='3.5'%20stroke-linecap='round'/%3e%3c/svg%3e"
          alt="Buscar"
        />
      </button>
    </form>
  )

  return (
    <>
      {menuOpen && <div className="nav-overlay" onClick={() => setMenuOpen(false)} />}
      <nav className="navbar navbar-expand-lg">
        <div className="container container-navbar">
          <Link className="navbar-brand" to="/">
            <img src={logo} alt="Busca Data" height="52" />
          </Link>
          <button className="navbar-toggler" type="button" onClick={() => setMenuOpen(true)}>
            <span className="navbar-toggler-icon"></span>
          </button>

          <div className={`nav-offcanvas ${menuOpen ? 'open' : ''}`}>
            <div className="nav-offcanvas-header">
              <Link className="navbar-brand" to="/" onClick={handleNavClick}>
                <img src={logo} alt="Busca Data" height="52" />
              </Link>
              <button className="nav-close-btn" onClick={() => setMenuOpen(false)}>
                <i className="bi bi-x-lg"></i>
              </button>
            </div>
            <ul className="nav-offcanvas-links">
              {navLinks}
            </ul>
            <div className="nav-offcanvas-search">
              {searchForm}
            </div>
          </div>

          <div className="collapse navbar-collapse navbar-desktop">
            <ul className="navbar-nav navbar-desktop-links">
              <li>
                <NavLink to="/informe" className="nav-link">
                  Que datos muestra el informe
                </NavLink>
              </li>
              <li>
                <NavLink to="/nosotros" className="nav-link">
                  Sobre nosotros
                </NavLink>
              </li>
              <li>
                <a
                  href="https://wa.me/5493512190843"
                  target="_blank"
                  rel="noreferrer"
                  className="nav-link"
                >
                  Consultas
                </a>
              </li>
            </ul>
            {searchForm}
          </div>
        </div>
      </nav>
    </>)
}
