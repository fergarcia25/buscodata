<?php

declare(strict_types=1);

require __DIR__ . '/config.php';
require __DIR__ . '/src/layout.php';

[$page, $params] = resolve_route();

$titles = [
    'home' => SITE_NAME,
    'informe' => '¿Qué contiene el informe? | ' . SITE_NAME,
    'informe-demo' => 'Informe de Personas | ' . SITE_NAME,
    'resultados' => 'Resultados | ' . SITE_NAME,
    'solicitar' => 'Solicitar Informe | ' . SITE_NAME,
    'privacidad' => 'Políticas de Privacidad | ' . SITE_NAME,
    'tyc' => 'Términos y Condiciones | ' . SITE_NAME,
    '404' => 'Página no encontrada | ' . SITE_NAME,
];

$pageFile = __DIR__ . '/src/pages/' . $page . '.php';

$standalone = ($page === 'informe-demo');

if (!$standalone) {
    page_open($page, $titles[$page] ?? $titles['404']);
}

if ($page === '404' || !is_file($pageFile)) {
    render_404();
} else {
    include $pageFile;
}

if (!$standalone) {
    page_close($page);
}

/**
 * Resuelve la ruta actual (limpia, vía .htaccess) y devuelve [página, parámetros].
 * Soporta un fallback por query string (?page=&id=) en hostings sin mod_rewrite.
 */
function resolve_route(): array
{
    $base = BASE_URL;
    $uri = parse_url((string) ($_SERVER['REQUEST_URI'] ?? '/'), PHP_URL_PATH) ?? '/';
    $path = ($base !== '' && strpos($uri, $base) === 0) ? substr($uri, strlen($base)) : $uri;
    $path = trim($path, '/');
    $parts = $path === '' ? [] : explode('/', $path);

    // Fallback por query string: /index.php?page=informe&id=1
    // Acepta tanto el slug de la URL como el nombre de la página.
    $pageKeys = [
        'home' => '',
        'informe' => 'informe',
        'informe-demo' => 'informe-demo',
        'resultados' => 'resultados',
        'solicitar' => 'solicitar',
        'privacidad' => 'politicas-de-privacidad',
        'tyc' => 'terminos-y-condiciones',
    ];

    if (($_GET['page'] ?? '') !== '') {
        $page = (string) $_GET['page'];
        $parts = [$pageKeys[$page] ?? $page];
        if (($_GET['id'] ?? '') !== '') {
            $parts[] = (string) $_GET['id'];
        }
    }

    $route = $parts[0] ?? '';
    $params = [];

    switch ($route) {
        case '':
        case 'index.php':
            return ['home', $params];

        case 'informe':
            return ['informe', $params];

        case 'informe-demo':
            return ['informe-demo', $params];

        case 'resultados':
            $params['q'] = trim((string) ($_GET['q'] ?? ''));
            return ['resultados', $params];

        case 'terminos-y-condiciones':
            return ['tyc', $params];

        case 'politicas-de-privacidad':
            return ['privacidad', $params];

        case 'solicitar':
            $params['id'] = (string) ($parts[1] ?? '');
            return ['solicitar', $params];

        default:
            return ['404', $params];
    }
}