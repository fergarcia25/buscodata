<?php

declare(strict_types=1);

/** URL absoluta dentro de la base del sitio. */
function url(string $path = ''): string
{
    return BASE_URL . '/' . ltrim($path, '/');
}

/** URL de un recurso dentro de /assets. */
function asset_url(string $path): string
{
    return url('assets/' . ltrim($path, '/'));
}

/** Encabezado común: <head>, navbar y apertura de <main>. */
function page_open(string $page, string $title): void
{
    $active = static fn (string $key): string => $page === $key ? ' active' : '';
    ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= asset_url('images/favicon.png') ?>">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= asset_url('css/main.css') ?>">
</head>
<body class="d-flex flex-column min-vh-100">

    <div class="nav-overlay" data-close-menu></div>

    <nav class="navbar navbar-expand-lg">
        <div class="container container-navbar">
            <a class="navbar-brand" href="<?= url() ?>">
                <img class="navbar-brand-logo" src="<?= asset_url('images/logo-web.png') ?>" alt="<?= SITE_NAME ?>">
            </a>
            <button class="navbar-toggler" type="button" data-open-menu aria-label="Abrir menú">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="nav-offcanvas" id="nav-offcanvas">
                <div class="nav-offcanvas-header">
                    <button class="nav-close-btn" data-close-menu aria-label="Cerrar menú">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <ul class="nav-offcanvas-links">
                    <li><a href="<?= url('informe') ?>" class="nav-link<?= $active('informe') ?>">¿Que contiene el informe?</a></li>
                    <li><a href="<?= url('terminos-y-condiciones') ?>" class="nav-link<?= $active('tyc') ?>">Términos y Condiciones</a></li>
                    <li><a href="<?= url('politicas-de-privacidad') ?>" class="nav-link<?= $active('privacidad') ?>">Políticas de Privacidad</a></li>
                    <li>
                        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noreferrer" class="nav-link nav-link-whatsapp">
                            Consultas por <i class="bi bi-whatsapp"></i>
                        </a>
                    </li>
                </ul>
                <div class="nav-offcanvas-cta">
                    <a href="<?= url() ?>" class="about-btn-primary">Iniciar una búsqueda</a>
                </div>
            </div>

            <div class="collapse navbar-collapse navbar-desktop">
                <ul class="navbar-nav navbar-desktop-links">
                    <li><a href="<?= url('informe') ?>" class="nav-link<?= $active('informe') ?>">¿Que contiene el informe?</a></li>
                    <li>
                        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noreferrer" class="nav-link nav-link-whatsapp">
                            Consultas por <i class="bi bi-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
    <?php
}

/** Cierre común: </main>, footer y scripts. */
function page_close(string $page): void
{
    ?>
    </main>

    <footer class="site-footer mt-auto">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3"><?= SITE_NAME ?></h5>
                    <p class="new-hero-sub footer-tagline"><?= SITE_TAGLINE ?></p>
                    <p class="footer-muted small mt-2 mb-0">&copy; <?= date('Y') ?>. Todos los derechos reservados.</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3">Condiciones de uso</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="<?= url('terminos-y-condiciones') ?>" class="footer-link text-decoration-none">Términos y Condiciones</a></li>
                        <li class="mb-2"><a href="<?= url('politicas-de-privacidad') ?>" class="footer-link text-decoration-none">Políticas de Privacidad</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-3">Contacto</h5>
                    <p class="footer-muted mb-1"><?= SUPPORT_EMAIL ?></p>
                    <p class="footer-muted mb-1">
                        <a href="<?= WHATSAPP_URL ?>" target="_blank" rel="noreferrer" class="footer-whatsapp text-decoration-none">
                            Consultas por <i class="bi bi-whatsapp"></i>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset_url('js/main.js') ?>" defer></script>
</body>
</html>
    <?php
}

/** Buscador del hero (port de SearchBar). */
function render_search(string $query = ''): string
{
    return '<form method="GET" action="' . url('resultados') . '" class="search-container" autocomplete="off">
        <div class="search-field-group">
            <input type="text" name="q" class="form-control" placeholder="Ingresa tu búsqueda"
                value="' . htmlspecialchars($query) . '" aria-label="Ingresa tu búsqueda">
            <button class="search-btn" type="submit" aria-label="Buscar">
                <img src="' . asset_url('images/isologo.svg') . '" alt="" class="search-btn-logo">
            </button>
        </div>
    </form>';
}

/** Tarjeta de resultado (port de ResultCard). */
function render_result_card(array $result): string
{
    $sexo = strtolower((string) ($result['sexo'] ?? ''));
    $genderIcon = $sexo === 'masculino'
        ? 'bi-person-standing'
        : ($sexo === 'femenino' ? 'bi-person-standing-dress' : 'bi-person-bounding-box');

    ob_start();
    ?>
    <div class="about-feat-card about-feat-card-sm d-flex flex-column">
        <div class="d-flex align-items-center gap-3 mb-3">
            <div class="about-feat-icon">
                <i class="bi <?= $genderIcon ?>"></i>
            </div>
            <div>
                <h3 class="fw-bold mb-0 text-gradient"><?= htmlspecialchars((string) $result['nombre']) ?></h3>
                <p class="mb-0 text-muted" style="font-size:0.85rem">
                    <?= (int) $result['edad'] ?> años &middot; <?= htmlspecialchars((string) $result['sexo']) ?> &middot; <?= htmlspecialchars((string) $result['provincia']) ?>, <?= htmlspecialchars((string) $result['ciudad']) ?>
                </p>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-sm-4">
                <p class="mb-0 text-muted" style="font-size:0.85rem">
                    <span class="fw-semibold" style="color:#1a1a1a">DNI</span><br>
                    <?= htmlspecialchars((string) $result['dni']) ?>
                </p>
            </div>
            <div class="col-sm-4">
                <p class="mb-0 text-muted" style="font-size:0.85rem">
                    <span class="fw-semibold" style="color:#1a1a1a">CUIL</span><br>
                    <?= htmlspecialchars((string) $result['cuil']) ?>
                </p>
            </div>
            <div class="col-sm-4 d-flex justify-content-end">
                <a href="<?= url('solicitar/' . (int) $result['id']) ?>" class="about-btn-primary">
                    <i class="bi bi-file-earmark-text"></i>
                    Solicitar Informe
                </a>
            </div>
        </div>
    </div>
    <?php
    return (string) ob_get_clean();
}

/** Filtros decorativos de resultados (port de FilterSidebar). */
function render_filters(): string
{
    ob_start();
    ?>
    <div class="row g-2 align-items-end">
        <div class="col-12 col-sm-6 col-md">
            <label class="form-label small fw-semibold mb-1">Edad</label>
            <select class="form-select form-select-sm">
                <option value="">Todas</option>
                <option value="18-25">18 - 25</option>
                <option value="26-35">26 - 35</option>
                <option value="36-50">36 - 50</option>
                <option value="51+">51+</option>
            </select>
        </div>
        <div class="col-12 col-sm-6 col-md">
            <label class="form-label small fw-semibold mb-1">Sexo</label>
            <select class="form-select form-select-sm">
                <option value="">Todos</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>
        </div>
        <div class="col-12 col-sm-6 col-md">
            <label class="form-label small fw-semibold mb-1">Provincia</label>
            <select class="form-select form-select-sm">
                <option value="">Todas</option>
                <option value="bsas">Buenos Aires</option>
                <option value="caba">CABA</option>
                <option value="cordoba">Córdoba</option>
                <option value="santa-fe">Santa Fe</option>
            </select>
        </div>
        <div class="col-12 col-sm-6 col-md">
            <label class="form-label small fw-semibold mb-1">Ciudad</label>
            <select class="form-select form-select-sm">
                <option value="">Todas</option>
                <option value="la-plata">La Plata</option>
                <option value="mar-del-plata">Mar del Plata</option>
                <option value="rosario">Rosario</option>
            </select>
        </div>
        <div class="col-12 col-sm-6 col-md-auto">
            <label class="form-label small fw-semibold mb-1 invisible d-none d-md-block">&nbsp;</label>
            <button class="btn btn-dark btn-sm w-100">Aplicar</button>
        </div>
    </div>
    <?php
    return (string) ob_get_clean();
}

/** Página 404 por defecto. */
function render_404(): void
{
    ?>
    <section class="d-flex align-items-center" style="min-height:60vh">
        <div class="container text-center py-5">
            <h1 class="new-hero-title">Página no encontrada</h1>
            <p class="text-muted">La página que buscás no existe o fue movida.</p>
            <a href="<?= url() ?>" class="about-btn-primary mt-3">Volver al inicio</a>
        </div>
    </section>
    <?php
}