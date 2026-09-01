import { Link } from 'react-router-dom'

export default function NosotrosPage() {
  return (
    <section id="que-es-buscadata" className="about-section">
      <div className="container">
        <div className="row g-5 align-items-center">
          <div className="col-lg-6">
            <div className="about-label">SOBRE NOSOTROS</div>
            <h2 className="about-title">Busca Data</h2>
            <p className="about-text">
              Somos una plataforma especializada en la generación de informes personalizados.
              Nuestro objetivo es brindarte información confiable y detallada de manera rápida y sencilla.
            </p>
            <p className="about-text">
              Con años de experiencia en el rubro, garantizamos datos precisos y actualizados
              para que puedas tomar las mejores decisiones.
            </p>
            <Link to="/buscadatatarget" className="about-btn-primary mt-3 d-inline-flex">Conocé más</Link>
          </div>
          <div className="col-lg-6">
            <div className="home-about-card">
              <div className="home-about-card-header">
                <i className="bi bi-info-circle"></i>
                <span>Descubrí todo lo que hacemos</span>
              </div>
              <div className="home-about-list">
                <Link to="/buscadatatarget#funcionalidades" className="home-about-item">
                  <i className="bi bi-bullseye"></i>
                  <span>BuscaData Target</span>
                  <i className="bi bi-chevron-right"></i>
                </Link>
                <Link to="/buscadatatarget" className="home-about-item">
                  <i className="bi bi-arrow-repeat"></i>
                  <span>Transformamos datos complejos en decisiones estratégicas</span>
                  <i className="bi bi-chevron-right"></i>
                </Link>
                <Link to="/buscadatatarget#funcionalidades" className="home-about-item">
                  <i className="bi bi-grid-3x3-gap"></i>
                  <span>Todo lo que necesitás para encontrar a tus clientes</span>
                  <i className="bi bi-chevron-right"></i>
                </Link>
                <Link to="/buscadatatarget" className="home-about-item">
                  <i className="bi bi-people"></i>
                  <span>Para equipos de Marketing y Ventas</span>
                  <i className="bi bi-chevron-right"></i>
                </Link>
                <Link to="/buscadatatarget" className="home-about-item">
                  <i className="bi bi-signpost-2"></i>
                  <span>El camino hacia tu base de datos ideal</span>
                  <i className="bi bi-chevron-right"></i>
                </Link>
                <Link to="/buscadatatarget" className="home-about-item">
                  <i className="bi bi-rocket-takeoff"></i>
                  <span>Impulsá el rendimiento de tu negocio hoy mismo</span>
                  <i className="bi bi-chevron-right"></i>
                </Link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}
