import { useParams, useNavigate } from 'react-router-dom'
import RequestForm from '../components/RequestForm'

const staticData = {
  1: { nombre: 'Juan Pérez', dni: '30.123.456', cuil: '20-30123456-7', edad: 35, sexo: 'Masculino', provincia: 'Buenos Aires', ciudad: 'La Plata' },
}

const PRECIO = 500

export default function SolicitarPage() {
  const { id } = useParams()
  const navigate = useNavigate()
  const persona = staticData[id]

  if (!persona) {
    return (
      <div className="container py-5 text-center">
        <h3>Persona no encontrada</h3>
        <button className="btn btn-primary mt-3" onClick={() => navigate('/')}>Volver al inicio</button>
      </div>
    )
  }

  const handleSubmit = ({ email, telefono }) => {
    console.log('Solicitud:', { personaId: id, email, telefono, precio: PRECIO })
    alert('Redirigiendo a MercadoPago para completar el pago...')
  }

  const sexo = (persona.sexo || '').toLowerCase()
  const genderIcon =
    sexo === 'masculino'
      ? 'bi-person-standing'
      : sexo === 'femenino'
      ? 'bi-person-standing-dress'
      : 'bi-person-bounding-box'

  return (
    <div className="mt-5 container py-5">
      <div className="my-4 text-center">
        <h1 className="new-hero-title">
          Solicitar Informe de <span className="new-hero-accent">{persona.nombre}</span>
        </h1>
      </div>

      <div className="row justify-content-center">
        <div className="col-lg-8">
          <div className="about-feat-card">
            <div className="d-flex align-items-center gap-3 mb-3">
              <div className="about-feat-icon">
                <i className={`bi ${genderIcon}`}></i>
              </div>
              <div>
                <h3 className="fw-bold mb-0 text-gradient">{persona.nombre}</h3>
                <p className="mb-0 text-muted" style={{ fontSize: '0.85rem' }}>
                  {persona.edad} años &middot; {persona.sexo} &middot; {persona.ciudad}, {persona.provincia}
                </p>
              </div>
            </div>

            <hr />

            <RequestForm precio={PRECIO} onSubmit={handleSubmit} />
          </div>
        </div>
      </div>
    </div>
  )
}
