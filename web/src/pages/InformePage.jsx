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

export default function InformePage() {
  return (
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
  )
}
