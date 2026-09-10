# Web — Busca Data

## Stack
- React 19 + Vite 8 + Bootstrap 5 + SASS

## Base path
`base: '/web/'` — the app lives at `http://buscadata.test/web/`.

## Dev
```bash
npm run dev        # http://localhost:5173/web/
npm run build      # Build to /dist → served by Laragon at http://buscadata.test/web/
```

## Proxy (Vite)
Redirects `/admin/api/...` to `http://localhost/admin/api/...` (Laragon).

## Pages
| Route | File |
|---|---|
| `/` | HomePage — animated hero + search |
| `/informe` | InformePage — what the report contains |
| `/nosotros` | NosotrosPage |
| `/buscadatatarget` | AboutPage |
| `/infoboost` | InfoboostPage |
| `/servicios` | ServicesPage |
| `/resultados?q=...` | ResultsPage (static results) |
| `/terminos-y-condiciones` | TyCPage |
| `/politicas-de-privacidad` | PrivacidadPage |
| `/solicitar/:id` | SolicitarPage (request form → MercadoPago) |

## Design
- Light theme: white background with gradient to light gray (`$body-bg-start`, `$body-bg-end`).
- Green tones (`#1b5e20`, `#2e7d32`) — no blue, no red.
- Hero: typed title + accent, decorative blobs (`.new-hero-*`).
- Bootstrap SASS deprecation warnings are harmless.

## Search behavior (static)
Home search captures input → navigates to `/resultados?q=...` → shows 2 static items with decorative filters. `/solicitar/:id` shows a static person (MercadoPago redirect still mocked via alert).

## Key files
- `src/App.jsx` — route definitions
- `src/Layout.jsx` — common layout (Header + Footer)
- `src/styles/_variables.scss` — color variables
- `src/styles/main.scss` — global styles
- `src/components/SearchBar.jsx` — search input + button
- `src/components/RequestForm.jsx` — solicitud form
- `src/components/FilterSidebar.jsx` — decorative filters on results
