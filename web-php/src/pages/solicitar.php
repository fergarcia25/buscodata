<?php

// Página "/solicitar/{id}": formulario de solicitud (demo).
$id = (int) ($params['id'] ?? 0);
$persona = PERSONAS[$id] ?? null;

if (!$persona): ?>
    <div class="mt-5 container py-5 text-center">
        <h3>Persona no encontrada</h3>
        <a href="<?= url() ?>" class="about-btn-primary mt-3">Volver al inicio</a>
    </div>
<?php else:
    $sexo = strtolower((string) ($persona['sexo'] ?? ''));
    $genderIcon = $sexo === 'masculino'
        ? 'bi-person-standing'
        : ($sexo === 'femenino' ? 'bi-person-standing-dress' : 'bi-person-bounding-box');
?>
    <div class="mt-5 container py-5">
        <div class="my-4 text-center">
            <h1 class="new-hero-title">
                Solicitar Informe de <span class="new-hero-accent"><?= htmlspecialchars($persona['nombre']) ?></span>
            </h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="about-feat-card">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="about-feat-icon">
                            <i class="bi <?= $genderIcon ?>"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold mb-0 text-gradient"><?= htmlspecialchars($persona['nombre']) ?></h3>
                            <p class="mb-0 text-muted" style="font-size:0.85rem">
                                <?= (int) $persona['edad'] ?> años &middot; <?= htmlspecialchars($persona['sexo']) ?> &middot; <?= htmlspecialchars($persona['ciudad']) ?>, <?= htmlspecialchars($persona['provincia']) ?>
                            </p>
                        </div>
                    </div>

                    <hr>

                    <form data-demo>
                        <div class="mb-3">
                            <h4 class="fw-bold">Detalle del Informe</h4>
                            <p class="text-muted">Complete los datos para recibir el informe solicitado.</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold" for="email">Email de destino *</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                placeholder="ejemplo@correo.com"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold" for="telefono">Teléfono (opcional)</label>
                            <input
                                type="tel"
                                id="telefono"
                                name="telefono"
                                class="form-control"
                                placeholder="+54 11 1234-5678"
                            >
                        </div>

                        <div class="mb-4 p-3 bg-light rounded">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">Precio del informe:</span>
                                <span class="fs-4 fw-bold text-primary">$<?= PRECIO_INFORME ?></span>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="about-btn-primary btn-lg w-100 justify-content-center">
                                Pagar con MercadoPago
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>