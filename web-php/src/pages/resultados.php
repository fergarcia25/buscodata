<?php

// Página "/resultados": resultados estáticos con filtros decorativos.
$query = trim((string) ($params['q'] ?? ''));
$results = RESULTADOS;
?>
<div class="mt-5 container py-5">
    <div class="my-4">
        <h1 class="new-hero-title">
            Resultados de: <span class="new-hero-accent"><?= htmlspecialchars($query) ?></span>
        </h1>
        <p class="text-muted">Se encontraron <?= count($results) ?> resultados</p>
    </div>

    <div class="d-md-none mb-3">
        <button
            class="btn btn-dark w-100 d-flex align-items-center justify-content-center gap-2"
            data-action="toggle-filters"
        >
            <i class="bi bi-funnel"></i>
            Filtros
        </button>
    </div>

    <div class="d-none d-md-block mb-4" id="results-filters">
        <div class="filter-bar p-3 bg-light rounded-3 shadow-sm">
            <?= render_filters() ?>
        </div>
    </div>

    <?php if ($query !== ''): ?>
        <div class="row">
            <?php foreach ($results as $result): ?>
                <div class="col-12 mb-3">
                    <?= render_result_card($result) ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="text-center py-5 text-muted">
            <p>Realice una búsqueda para ver resultados</p>
        </div>
    <?php endif; ?>
</div>