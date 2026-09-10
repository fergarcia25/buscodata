# Web PHP — Busca Data

Reimplementación de `buscadata/web` (React) en PHP plano, sin framework ni build.
Contiene únicamente 6 páginas: inicio, informe, privacidad, resultados, solicitar y TyC.

## Stack
- PHP 8 (sin framework) + HTML5 + CSS3 + JS vanilla
- Bootstrap 5.3 (CDN) + Bootstrap Icons (CDN) + Google Fonts Inter (CDN)

## Estructura
```
web-php/
├── index.php            # Front controller: routing + render de páginas
├── config.php           # Constantes globales, datos estáticos y BASE_URL
├── .htaccess            # URLs limpias → index.php (mod_rewrite)
├── src/
│   ├── layout.php       # page_open/page_close, navbar, footer, helpers de render
│   └── pages/           # Una vista por ruta (home, informe, resultados, solicitar, privacidad, tyc)
└── assets/
    ├── css/main.css     # Estilos custom (colores green hardcodeados) + overrides Bootstrap
    ├── js/main.js       # Offcanvas, tipeo del hero, toggle de filtros, form demo
    └── images/          # logo-web.png, isologo.svg, imagen-hero2.png, favicon.png
```

## Rutas
| URL | Vista |
|---|---|
| `/` | inicio |
| `/informe` | informe |
| `/resultados?q=...` | resultados |
| `/solicitar/:id` | solicitar |
| `/politicas-de-privacidad` | privacidad |
| `/terminos-y-condiciones` | tyc |

Fallback portable: `/index.php?page=informe&id=1` (sin mod_rewrite).

## Convenciones
- `BASE_URL` se calcula desde `SCRIPT_NAME` → los links usan `url()` / `asset_url()` (portable a subdirectorio o raíz del vhost).
- Los colores verdes son `#17693f` (primary) y `#007b3b` (light), igual que `web/src/styles/_variables.scss`.
- `config.php` concentra toda la data estática (resultados, perfiles, secciones del informe, contacto).
- Los datos se escapan con `htmlspecialchars()` al renderizar.
- Sin compilar: editar `assets/css/main.css` a mano (no SASS).

## Dev
```bash
cd web-php
php -S localhost:8000 -t .        # probar local sin Apache (URLs sin prefijo)
```
Para probar las URLs limpias en dev, el root del vhost debe apuntar al directorio `web-php`.