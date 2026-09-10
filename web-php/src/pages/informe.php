<?php

// Página "/informe": qué contiene el informe.
$sections = INFORME_SECTIONS;
?>
<section class="new-hero new-hero-informe">
    <div class="new-hero-bg" aria-hidden="true">
        <div class="new-hero-blob new-hero-blob-1"></div>
        <div class="new-hero-blob new-hero-blob-2"></div>
    </div>

    <div class="container position-relative" style="z-index:1">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="new-hero-title">
                    <span class="new-hero-accent">¿Que contiene nuestro informe?</span>
                </h1>
                <p class="new-hero-sub mx-auto">
                    Conoce que información recibirás al solicitar un Informe de Personas.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="contenido-informe" class="about-benefits-section">
    <div class="container">
        <div class="about-benefits-grid about-benefits-grid-2">
            <?php foreach ($sections as $section): ?>
                <div class="about-benefit-card">
                    <i class="bi <?= htmlspecialchars($section['icon']) ?>"></i>
                    <h4><?= htmlspecialchars($section['title']) ?></h4>
                    <p><?= htmlspecialchars($section['description']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="informe-cta-section">
    <div class="new-hero-bg" aria-hidden="true">
        <div class="new-hero-blob new-hero-blob-1"></div>
        <div class="new-hero-blob new-hero-blob-2"></div>
    </div>

    <div class="container position-relative" style="z-index:1">
        <div class="about-cta-wrapper">
            <a href="<?= url() ?>" class="about-btn-primary about-btn-xl">
                Iniciar una búsqueda
            </a>
        </div>
    </div>
</section>