import { useState, useEffect, useRef } from 'react'
import { useNavigate } from 'react-router-dom'
import isologo from '../assets/images/isologo.svg'

export default function SearchBar({ large = false, autoFocus = false }) {
  const [query, setQuery] = useState('')
  const navigate = useNavigate()
  const inputRef = useRef(null)

  useEffect(() => {
    if (autoFocus && inputRef.current) {
      inputRef.current.focus()
    }
  }, [autoFocus])

  const handleSubmit = (e) => {
    e.preventDefault()
    if (query.trim()) {
      navigate(`/resultados?q=${encodeURIComponent(query.trim())}`)
    }
  }

  return (
    <form onSubmit={handleSubmit} className={`search-container ${large ? 'mx-auto' : ''}`}>
      <div className="search-field-group">
        <input
          ref={inputRef}
          type="text"
          className="form-control"
          placeholder="Ingresa tu busqueda"
          value={query}
          onChange={(e) => setQuery(e.target.value)}
        />
        <button className="search-btn" type="submit" aria-label="Buscar">
          <img src={isologo} alt="" className="search-btn-logo" />
        </button>
      </div>
    </form>
  )
}
