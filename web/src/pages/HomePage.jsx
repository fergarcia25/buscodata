import { useState, useEffect, useMemo } from 'react'
import SearchBar from '../components/SearchBar'
import { Link } from 'react-router-dom'

const plans = [
  { id: 1, title: 'Datos Personales', description: 'Nombres y Apellidos completos, Fecha de nacimiento, Nacionalidades, Fechas de defunción y otros datos.', icon: 'bi-person-vcard', popular: false },
  { id: 2, title: 'Scoring', description: 'Índice numérico de solvencia del 1 al 999. Analiza el comportamiento de pago histórico y proyecta el nivel de riesgo crediticio.', icon: 'bi-graph-up-arrow', popular: true },
  { id: 3, title: 'Domicilios, Contactos y Emails', description: 'Datos precisos de localización: domicilios actualizados, números de celular vinculados y cuentas de email verificadas.', icon: 'bi-geo-alt', popular: false },
  { id: 4, title: 'Vínculos y Familiares', description: 'Mapeá el entorno de cualquier perfil. Identificá vínculos familiares directos, parejas y otros allegados clave.', icon: 'bi-diagram-3', popular: false },
  { id: 5, title: 'Historial Laboral e Ingresos', description: 'Historial de empleo, situación de contratación actual y niveles estimados de ingresos mensuales.', icon: 'bi-briefcase', popular: false },
  { id: 6, title: 'Historial de Vehículos', description: 'Registro completo de vehículos vinculados a una persona o empresa. Patentes, marcas, modelos y estado registral.', icon: 'bi-truck', popular: false },
  { id: 7, title: 'Situación Financiera', description: 'Informe detallado del Banco Central. Escala del 1 al 6 desde cumplimiento normal hasta deudas en gestión judicial.', icon: 'bi-bank', popular: false },
  { id: 8, title: 'Perfil Fiscal y Comercial', description: 'Detalle de inscripción como Monotributista o Autónomo. Participación en sociedades y registro de cheques rechazados.', icon: 'bi-clipboard-data', popular: false, highlight: true },
]

const TITLE_LEAD = 'Obtené el informe '
const TITLE_ACCENT = 'más completo del mercado.'
const HERO_SUB = 'Buscá por Nombre, Apellido, DNI ó CUIL y solicitá tu informe en minutos.'

export default function HomePage() {
  const reduceMotion = useMemo(
    () => window.matchMedia('(prefers-reduced-motion: reduce)').matches,
    []
  )

  const [leadCount, setLeadCount] = useState(reduceMotion ? TITLE_LEAD.length : 0)
  const [accentCount, setAccentCount] = useState(reduceMotion ? TITLE_ACCENT.length : 0)
  const [subCount, setSubCount] = useState(reduceMotion ? HERO_SUB.length : 0)

  useEffect(() => {
    if (leadCount >= TITLE_LEAD.length) return
    const timer = setTimeout(() => setLeadCount((c) => c + 1), 25)
    return () => clearTimeout(timer)
  }, [leadCount])

  useEffect(() => {
    if (leadCount < TITLE_LEAD.length || accentCount >= TITLE_ACCENT.length) return
    const timer = setTimeout(() => setAccentCount((c) => c + 1), 25)
    return () => clearTimeout(timer)
  }, [accentCount, leadCount])

  useEffect(() => {
    if (accentCount < TITLE_ACCENT.length || subCount >= HERO_SUB.length) return
    const timer = setTimeout(() => setSubCount((c) => c + 1), 10)
    return () => clearTimeout(timer)
  }, [subCount, accentCount])

  const titleTyping = leadCount < TITLE_LEAD.length || accentCount < TITLE_ACCENT.length
  const showSearch = reduceMotion || subCount >= HERO_SUB.length

  return (
    <>
      <section className="about-hero home-hero">
        <div className="about-hero-bg" />
        <div className="home-hero-visual" aria-hidden="true">
          <div className="about-circle about-circle-1" />
          <div className="about-circle about-circle-2" />
          <div className="about-circle about-circle-3" />
        </div>
        <div className="container position-relative d-flex align-items-center justify-content-center" style={{ zIndex: 1, flex: 1, minHeight: 0 }}>
          <div className="home-hero-content text-center">
            <h1 className="about-hero-title">
              {TITLE_LEAD.slice(0, leadCount)}
              {accentCount > 0 && <br />}
              <span className="text-gradient">{TITLE_ACCENT.slice(0, accentCount)}</span>
              {titleTyping && <span className="type-caret" aria-hidden="true" />}
            </h1>
            <p className="about-hero-sub mx-auto">
              {HERO_SUB.slice(0, subCount)}
              {!titleTyping && subCount > 0 && subCount < HERO_SUB.length && <span className="type-caret" aria-hidden="true" />}
            </p>
            {showSearch && (
              <div className="hero-search-reveal">
                <SearchBar large autoFocus />
              </div>
            )}
          </div>
        </div>

        {showSearch && (
          <div className="home-hero-actions">
            <a href="#contenido-informe" className="about-btn-outline home-hero-action-reveal">Conocer más</a>
          </div>
        )}
      </section>

      {/* Planes y servicios 
      <section className="about-plans-section" style={{ backgroundColor: '#f2f2f2' }}>
        <div className="container">
          <div className="text-center mb-5">
            <div className="about-label">PLANES Y SERVICIOS</div>
            <h2 className="about-title">Elegí la solución que mejor se adapte a tus necesidades</h2>
            <p className="about-text" style={{ maxWidth: 600, margin: '0 auto' }}>
              Dos formas de acceder a la información más completa del mercado.
            </p>
          </div>
          <div className="row g-4 justify-content-center">
            <div className="col-md-6 col-lg-5">
              <div className="about-feat-card">
                <h3 className="fw-bold text-gradient">InfoBoost</h3>
                <p style={{ marginBottom: '1.5rem' }}>
                  Subí tu base de DNI, CUIT o patentes y obtené datos de contacto, patrimoniales y comerciales actualizados de forma masiva y 100% autogestionable.
                </p>
                <Link to="/infoboost" className="about-btn-primary">Ver InfoBoost</Link>
              </div>
            </div>
            <div className="col-md-6 col-lg-5">
              <div className="about-feat-card">
                <h3 className="fw-bold text-gradient">BuscaData Target</h3>
                <p style={{ marginBottom: '1.5rem' }}>
                  Mediante tecnología Big Data analizamos millones de señales digitales para construir bases de datos de potenciales clientes altamente calificados.
                </p>
                <Link to="/buscadatatarget" className="about-btn-primary">Ver BuscaData Target</Link>
              </div>
            </div>
          </div>
        </div>
      </section>
*/}
      {/* Services section */}
      <section id="contenido-informe" className="about-benefits-section">
        <div className="container">
          <div className="text-center mb-5">
            <h2 className="about-title" style={{ color: '#1a1a1a' }}>¿Que contiene el informe?</h2>
            <p style={{ color: '#666', fontSize: '1.1rem' }}>En el informe podrás conocer la siguiente información de la persona.</p>
          </div>
          <div className="about-benefits-grid about-benefits-grid-2">
            {plans.map((plan) => (
              <div key={plan.id} className="about-benefit-card">
                <i className={`bi ${plan.icon}`} />
                <h4>{plan.title}</h4>
                <p>{plan.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* About section */}
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
    </>
  )
}
