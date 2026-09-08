import { useState, useEffect, useMemo } from 'react'
import SearchBar from '../components/SearchBar'
import { Link } from 'react-router-dom'
import heroImage from '../assets/imagen-hero2.png'

const TITLE_LEAD = 'Obtené el informe '
const TITLE_ACCENT = 'más completo del mercado.'
const HERO_SUB = 'Solicitá un informe ingresando el nombre completo, DNI ó CUIT de un persona y obtené todos sus datos en minutos.'

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
    const timer = setTimeout(() => setLeadCount((c) => c + 1), 17.5)
    return () => clearTimeout(timer)
  }, [leadCount])

  useEffect(() => {
    if (leadCount < TITLE_LEAD.length || accentCount >= TITLE_ACCENT.length) return
    const timer = setTimeout(() => setAccentCount((c) => c + 1), 17.5)
    return () => clearTimeout(timer)
  }, [accentCount, leadCount])

  useEffect(() => {
    if (accentCount < TITLE_ACCENT.length || subCount >= HERO_SUB.length) return
    const timer = setTimeout(() => setSubCount((c) => c + 1), 2.5)
    return () => clearTimeout(timer)
  }, [subCount, accentCount])

  const titleTyping = leadCount < TITLE_LEAD.length || accentCount < TITLE_ACCENT.length
  const showSearch = reduceMotion || subCount >= HERO_SUB.length

  return (
    <>
      <section className="new-hero">
        <div className="new-hero-bg" aria-hidden="true">
          <div className="new-hero-blob new-hero-blob-1" />
          <div className="new-hero-blob new-hero-blob-2" />
        </div>
        <div className="container position-relative" style={{ zIndex: 1 }}>
          <div className="row align-items-stretch g-5">
            <div className="col-lg-6 new-hero-text">
              <h1 className="new-hero-title">
                {TITLE_LEAD.slice(0, leadCount)}
                {accentCount > 0 && <span className="new-hero-accent"> {TITLE_ACCENT.slice(0, accentCount)}</span>}
                {titleTyping && <span className="type-caret" aria-hidden="true" />}
              </h1>
              <p className="new-hero-sub">
                {HERO_SUB.slice(0, subCount)}
                {!titleTyping && subCount > 0 && subCount < HERO_SUB.length && <span className="type-caret" aria-hidden="true" />}
              </p>
              {showSearch && (
                <div className="new-hero-cta hero-search-reveal">
                  <SearchBar />
                </div>
              )}
              <div className="new-hero-footer">
                <Link to="/informe" className="new-hero-link">¿Qué contiene el informe? <i className="bi bi-arrow-down-right"></i></Link>
              </div>
            </div>
            <div className="col-lg-6 new-hero-visual">
              <div className="new-hero-card">
                <img src={heroImage} alt="Informes Informe de Personas" className="new-hero-card-img" />
              </div>
            </div>
          </div>
        </div>
      </section>
    </>
  )
}
