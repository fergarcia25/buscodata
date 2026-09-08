import { Link } from 'react-router-dom'

export default function ResultCard({ result }) {
  const sexo = (result.sexo || '').toLowerCase()
  const genderIcon =
    sexo === 'masculino'
      ? 'bi-person-standing'
      : sexo === 'femenino'
      ? 'bi-person-standing-dress'
      : 'bi-person-bounding-box'

  return (
    <div className="about-feat-card about-feat-card-sm d-flex flex-column">
      <div className="d-flex align-items-center gap-3 mb-3">
        <div className="about-feat-icon">
          <i className={`bi ${genderIcon}`}></i>
        </div>
        <div>
          <h3 className="fw-bold mb-0 text-gradient">{result.nombre}</h3>
          <p className="mb-0 text-muted" style={{ fontSize: '0.85rem' }}>
            {result.edad} años &middot; {result.sexo} &middot; {result.provincia}, {result.ciudad}
          </p>
        </div>
      </div>

      <div className="row g-2">
        <div className="col-sm-4">
          <p className="mb-0 text-muted" style={{ fontSize: '0.85rem' }}>
            <span className="fw-semibold" style={{ color: '#1a1a1a' }}>DNI</span><br />
            {result.dni}
          </p>
        </div>
        <div className="col-sm-4">
          <p className="mb-0 text-muted" style={{ fontSize: '0.85rem' }}>
            <span className="fw-semibold" style={{ color: '#1a1a1a' }}>CUIL</span><br />
            {result.cuil}
          </p>
        </div>
        <div className="col-sm-4 d-flex justify-content-end">
          <Link to={`/solicitar/${result.id}`} className="about-btn-primary">
            <i className="bi bi-file-earmark-text"></i>
            Solicitar Informe
          </Link>
        </div>
      </div>
    </div>
  )
}
