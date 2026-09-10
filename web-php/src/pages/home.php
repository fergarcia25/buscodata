<?php

// Página de inicio: hero animado con buscador.
?>
<section class="new-hero" data-typing data-lead="Obtené el informe " data-accent="más completo del mercado.">
    <div class="new-hero-bg" aria-hidden="true">
        <div class="new-hero-blob new-hero-blob-1"></div>
        <div class="new-hero-blob new-hero-blob-2"></div>
    </div>

    <div class="container position-relative" style="z-index:1">
        <div class="row align-items-stretch g-5">
            <div class="col-lg-6 new-hero-text">
                <h1 class="new-hero-title">
                    <span data-role="lead"></span>
                    <span class="new-hero-accent" data-role="accent"></span>
                    <span class="type-caret" data-role="title-caret" aria-hidden="true"></span>
                </h1>

                <p class="new-hero-sub">
                    <span data-role="sub" data-text="Solicitá un informe ingresando el nombre completo, DNI ó CUIT de un persona y obtené todos sus datos en minutos."></span>
                    <span class="type-caret is-hidden" data-role="sub-caret" aria-hidden="true"></span>
                </p>

                <div class="new-hero-cta hero-search-reveal">
                    <?= render_search() ?>
                </div>

                <div class="new-hero-footer">
                    <a href="<?= url('informe') ?>" class="new-hero-link">
                        ¿Qué contiene el informe? <i class="bi bi-arrow-down-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 new-hero-visual">
                <div class="new-hero-card">
                    <img src="<?= asset_url('images/imagen-hero2.png') ?>" alt="Informes Informe de Personas" class="new-hero-card-img">
                </div>
            </div>
        </div>
    </div>
</section>