import { Link } from 'react-router-dom'

const sections = [
  {
    title: 'Información Personal',
    description: 'Consultá nombre completo, fecha de nacimiento, nacionalidad, edad y otros datos identificatorios relevantes de la persona.',
    icon: 'bi-person-vcard',
  },
  {
    title: 'Evaluación Crediticia',
    description: 'Conocé un indicador de comportamiento financiero basado en antecedentes de pago, nivel de cumplimiento y perfil de riesgo.',
    icon: 'bi-graph-up-arrow',
  },
  {
    title: 'Ubicación y Medios de Contacto',
    description: 'Accedé a domicilios registrados, teléfonos asociados y direcciones de correo electrónico vinculadas al titular.',
    icon: 'bi-geo-alt',
  },
  {
    title: 'Relaciones y Grupo Familiar',
    description: 'Identificá posibles vínculos personales y familiares, incluyendo familiares directos, pareja y personas relacionadas.',
    icon: 'bi-diagram-3',
  },
  {
    title: 'Actividad Laboral e Ingresos',
    description: 'Obtené información sobre antecedentes laborales, situación ocupacional actual y referencias estimadas de ingresos.',
    icon: 'bi-briefcase',
  },
  {
    title: 'Vehículos Asociados',
    description: 'Visualizá automotores relacionados con la persona, incluyendo dominio, marca, modelo y demás información registral disponible.',
    icon: 'bi-truck',
  },
  {
    title: 'Estado Crediticio y Financiero',
    description: 'Consultá antecedentes informados en el sistema financiero, niveles de cumplimiento y posibles obligaciones o deudas registradas.',
    icon: 'bi-bank',
  },
  {
    title: 'Información Impositiva y Comercial',
    description: 'Conocé su condición fiscal, actividad declarada, inscripciones tributarias, participación en sociedades y antecedentes comerciales.',
    icon: 'bi-clipboard-data',
  },
]

export default function InformePage() {
  return (
    <>
      <section className="new-hero new-hero-informe">
        <div className="new-hero-bg" aria-hidden="true">
          <div className="new-hero-blob new-hero-blob-1" />
          <div className="new-hero-blob new-hero-blob-2" />
        </div>
        <div className="container position-relative" style={{ zIndex: 1 }}>
          <div className="row justify-content-center text-center">
            <div className="col-lg-8">
              <h1 className="new-hero-title">
                <span className="new-hero-accent">¿Que contiene nuestro informe?</span>
              </h1>
              <p className="new-hero-sub mx-auto">
                Conoce que información recibirás al solicitar un Informe de Personas.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id="contenido-informe" className="about-benefits-section">
        <div className="container">
          <div className="about-benefits-grid about-benefits-grid-2">
            {sections.map((section) => (
              <div key={section.title} className="about-benefit-card">
                <i className={`bi ${section.icon}`} />
                <h4>{section.title}</h4>
                <p>{section.description}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className="informe-cta-section">
        <div className="new-hero-bg" aria-hidden="true">
          <div className="new-hero-blob new-hero-blob-1" />
          <div className="new-hero-blob new-hero-blob-2" />
        </div>
        <div className="container position-relative" style={{ zIndex: 1 }}>
          <div className="about-cta-wrapper">
            <Link to="/" className="about-btn-primary about-btn-xl">
              Iniciar una búsqueda
            </Link>
          </div>
        </div>
      </section>
    </>
  )
}
