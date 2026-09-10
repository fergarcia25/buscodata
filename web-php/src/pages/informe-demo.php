<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Personas - Martín Alejandro Gómez</title>
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-green: #0a8a3c;
            --primary-green-dark: #06632a;
            --light-green: #eef9f2;
            --badge-green-bg: #10a34a;
            --bg-page: #f8faf9;
            --card-bg: #ffffff;
            --border-color: #e8ece9;
            --text-main: #1f2937;
            --text-muted: #6b7280;
            --text-light: #9ca3af;
        }

        @page {
            size: A4;
            margin: 10mm 12mm;
            background-color: var(--bg-page);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', system-ui, -apple-system, BlinkMacSystemFont, Roboto, sans-serif;
        }

        body {
            background-color: var(--bg-page);
            color: var(--text-main);
            font-size: 11px;
            line-height: 1.35;
            padding: 15px;
            max-width: 900px;
            margin: 0 auto;
        }

        /* Header */
        .header {
            display: table;
            width: 100%;
            margin-bottom: 12px;
            border-bottom: 1px solid #e2e8f0;
            padding-bottom: 8px;
        }
        .header-left {
            display: table-cell;
            vertical-align: middle;
        }
        .header-left img {
            height: 38px;
        }
        .header-right {
            display: table-cell;
            vertical-align: middle;
            text-align: right;
            color: var(--text-muted);
            font-size: 10px;
        }
        .header-right strong {
            color: var(--text-main);
        }

        /* Title section */
        .doc-title-block {
            margin-bottom: 12px;
        }
        .doc-title {
            font-size: 20px;
            font-weight: 800;
            color: #111827;
            letter-spacing: -0.3px;
        }
        .doc-subtitle {
            font-size: 12px;
            font-weight: 600;
            color: var(--primary-green);
            margin-top: -2px;
        }
        .doc-desc {
            font-size: 9.5px;
            color: var(--text-muted);
            margin-top: 3px;
        }

        /* Layout Grid */
        .grid-container {
            display: table;
            width: 100%;
            table-layout: fixed;
        }
        .col-left {
            display: table-cell;
            width: 48%;
            vertical-align: top;
            padding-right: 8px;
        }
        .col-right {
            display: table-cell;
            width: 52%;
            vertical-align: top;
            padding-left: 8px;
        }

        /* Cards Styling */
        .card {
            background: var(--card-bg);
            border-radius: 10px;
            border: 1px solid var(--border-color);
            padding: 12px;
            margin-bottom: 12px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
            position: relative;
            page-break-inside: avoid;
        }

        .card-header-badge {
            display: inline-block;
            background: var(--primary-green);
            color: white;
            font-size: 8.5px;
            font-weight: 700;
            padding: 2px 7px;
            border-radius: 4px;
            text-transform: uppercase;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        .card-dots {
            position: absolute;
            top: 10px;
            right: 12px;
            color: var(--primary-green);
            font-size: 10px;
            letter-spacing: 1px;
        }

        .card-title-with-icon {
            display: table;
            width: 100%;
            margin-bottom: 10px;
        }
        .card-title-icon {
            display: table-cell;
            width: 22px;
            vertical-align: middle;
            color: var(--primary-green);
            font-size: 13px;
        }
        .card-title-text {
            display: table-cell;
            vertical-align: middle;
            padding-left: 0.8rem;
            font-size: 13px;
            font-weight: 500;
            color: #363636;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        /* Sujeto Card */
        .profile-row {
            display: table;
            width: 100%;
            margin-bottom: 10px;
        }
        .profile-avatar {
            display: table-cell;
            width: 40px;
            vertical-align: middle;
            text-align: center;
        }
        .perfil-avatar-circulo {
            width: 49px;
            height: 49px;
            border-radius: 50%;
            border: 2px solid #ececec;
            display: inline-block;
            line-height: 43px;
            color: #373737;
            font-size: 22px;
            background: #f8faf9;
            text-align: center;
        }
        .profile-info {
            display: table-cell;
            vertical-align: middle;
            padding-left: 8px;
        }
        .profile-name {
            font-size: 18px;
            font-weight: 600;
            color: #111827;
        }
        .profile-dni {
            font-size: 10px;
            color: #6a6a6a;
            font-weight: 600;
            padding-top: 0.3rem;
        }
        .profile-cuit {
            font-size: 10px;
            color: #6a6a6a;
            font-weight: 600;
            padding-top: 0.1rem;
        }

        .data-grid-3 {
            display: table;
            width: 100%;
            margin-top: 8px;
            border-top: 1px dashed #f3f4f6;
            padding-top: 8px;
        }
        .data-col-3 {
            display: table-cell;
            width: 33.33%;
            vertical-align: top;
        }
        .label-muted {
            font-size: 9px;
            color: var(--text-light);
            display: block;
        }
        .value-bold {
            font-size: 10px;
            font-weight: 600;
            color: #141414;
            padding-bottom: 5px;
        }

        /* Gauge & Score */
        .gauge-container {
            display: table;
            width: 100%;
        }
        .gauge-left {
            display: table-cell;
            width: 50%;
            vertical-align: middle;
        }
        .gauge-right {
            display: table-cell;
            width: 50%;
            vertical-align: middle;
            text-align: center;
        }

        .score-num {
            font-size: 48px;
            font-weight: 400;
            color: var(--primary-green);
            line-height: 1;
            display: inline-block;
        }
        .score-max {
            font-size: 14px;
            color: var(--text-light);
            font-weight: 400;
        }

        .badge-risk {
            background: var(--badge-green-bg);
            color: white;
            font-weight: 800;
            font-size: 9px;
            padding: 3px 10px;
            border-radius: 12px;
            display: inline-block;
            margin-top: 6px;
            letter-spacing: 0.5px;
        }

        .gauge-svg-wrap {
            text-align: center;
            position: relative;
            width: 130px;
            margin: 0 auto;
        }

        .gauge-legend {
            font-size: 10px;
            color: var(--text-muted);
            line-height: 1.4;
            display: inline-flex;
            margin-left: 0;
        }
        .gauge-legend-dot {
            display: inline-block;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            margin-right: 4px;
        }

        /* Table Styling */
        .custom-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 9.5px;
            margin-top: 4px;
        }
        .custom-table th {
            text-align: left;
            color: var(--text-light);
            font-weight: 600;
            padding: 4px 2px;
            font-size: 8.5px;
            border-bottom: 1px solid #f3f4f6;
        }
        .custom-table td {
            padding: 5px 2px;
            color: var(--text-main);
            border-bottom: 1px solid #f8faf9;
        }
        .custom-table td.bold {
            font-weight: 700;
        }

        .link-more {
            color: var(--primary-green);
            font-size: 9px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            margin-top: 6px;
        }

        /* Vehicle section */
        .vehicle-box {
            display: table;
            width: 100%;
            margin-top: 4px;
        }
        .vehicle-icon {
            display: table-cell;
            width: 45px;
            vertical-align: middle;
            text-align: center;
            font-size: 24px;
            color: #374151;
        }
        .vehicle-details {
            display: table-cell;
            vertical-align: middle;
            padding-left: 8px;
        }
        .vehicle-name {
            font-size: 11px;
            font-weight: 600;
            color: #111827;
        }
        .vehicle-grid {
            display: table;
            width: 100%;
            margin-top: 4px;
        }
        .vehicle-col {
            display: table-cell;
            width: 50%;
        }

        /* Financial chart area */
        .fin-badge {
            background: #f5f5f5;
            color: #15803d;
            font-weight: 600;
            font-size: 10px;
            padding: 2px 8px;
            border-radius: 4px;
            display: inline-block;
            margin-top: 6px;
        }

        /* Timeline for Employment */
        .timeline-box {
            border-left: 2px solid var(--primary-green);
            padding-left: 8px;
            margin-left: 4px;
            margin-top: 6px;
        }
        .timeline-item {
            margin-bottom: 8px;
            position: relative;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -13px;
            top: 3px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary-green);
        }
        .timeline-date {
            font-size: 8.5px;
            color: var(--text-light);
            font-weight: 600;
        }
        .timeline-title {
            font-size: 9.5px;
            font-weight: 700;
            color: var(--text-main);
        }
        .timeline-sub {
            font-size: 8.5px;
            color: var(--text-muted);
        }

        /* Footer disclaimer */
        .footer-card {
            background: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 10px;
            padding: 10px;
            display: table;
            width: 100%;
            margin-top: 5px;
            page-break-inside: avoid;
        }
        .footer-icon {
            display: table-cell;
            width: 30px;
            vertical-align: middle;
            color: var(--primary-green);
            font-size: 18px;
            text-align: center;
        }
        .footer-text {
            display: table-cell;
            vertical-align: middle;
            padding-left: 8px;
            font-size: 8px;
            color: var(--text-muted);
            line-height: 1.3;
        }
        .footer-qr {
            display: table-cell;
            width: 110px;
            vertical-align: middle;
            text-align: right;
            border-left: 1px solid #f3f4f6;
            padding-left: 8px;
        }
        .qr-code-img {
            width: 48px;
            height: 48px;
        }
        .qr-id {
            font-size: 8px;
            color: var(--text-light);
            margin-top: 2px;
            font-weight: 700;
        }

        .footer-url {
            text-align: center;
            font-size: 11px;
            font-weight: 800;
            color: var(--text-main);
            margin-top: 8px;
        }

        /* Floating Download Button (Hide when printing to PDF) */
        .btn-float-download {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background: var(--primary-green);
            color: white;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 14px rgba(10, 138, 60, 0.4);
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s ease;
            z-index: 9999;
            border: none;
            outline: none;
        }
        .btn-float-download:hover {
            background: var(--primary-green-dark);
            transform: scale(1.08);
        }
        .btn-float-download i {
            font-size: 22px;
        }

        @media print {
            body {
                padding: 0;
                background-color: white;
            }
            .btn-float-download {
                display: none !important;
            }
            .card {
                box-shadow: none;
            }
        }
    </style>
</head>
<body>

    <!-- Floating Download Button -->
    <button class="btn-float-download" id="downloadPdfBtn" title="Descargar Informe en PDF">
        <i class="fas fa-download"></i>
    </button>

    <!-- Header Block -->
    <div class="header">
        <div class="header-left">
            <img src="<?= asset_url('images/logo-web.png') ?>" alt="Informe de Personas" class="new-hero-card-img">
        </div>
        <div class="header-right">
            Fecha de generación<br>
            <strong>25 de Mayo de 2025 | 11:32 hs.</strong>
        </div>
    </div>

    <!-- Title Block -->
    <div class="doc-title-block">
        <div class="doc-title">Informe de Personas</div>
        <div class="doc-subtitle">Reporte Integral</div>
        <div class="doc-desc">
            Información reunida de fuentes públicas y privadas.<br>
            Datos actualizados a Mayo 2025.
        </div>
    </div>

    <!-- Main Two Column Grid -->
    <div class="grid-container">
        
        <!-- Left Column -->
        <div class="col-left">
            
            <!-- Sujeto Card -->
            <div class="card">
                <span class="card-header-badge">SUJETO</span>
                <div class="profile-row">
                    <div class="profile-avatar">
                        <div class="perfil-avatar-circulo">
                            <i class="far fa-user"></i>
                        </div>
                    </div>
                    <div class="profile-info">
                        <div class="profile-name">Martín Alejandro Gómez</div>
                        <div class="profile-dni">DNI 32.123.456</div>
                        <div class="profile-cuit">CUIT/CUIL 20-32123456-7</div>
                    </div>
                </div>

                <div class="data-grid-3">
                    <div class="data-col-3">
                        <span class="label-muted">Fecha de nacimiento</span>
                        <span class="value-bold">14/08/1986</span>
                    </div>
                    <div class="data-col-3">
                        <span class="label-muted">Edad</span>
                        <span class="value-bold">38 años</span>
                    </div>
                    <div class="data-col-3">
                        <span class="label-muted">Sexo</span>
                        <span class="value-bold">Masculino</span>
                    </div>
                </div>

                <div class="data-grid-3" style="border-top: none; padding-top: 4px;">
                    <div class="data-col-3" style="width: 50%;">
                        <span class="label-muted">Nacionalidad</span>
                        <span class="value-bold">Argentina</span>
                    </div>
                    <div class="data-col-3" style="width: 50%;">
                        <span class="label-muted">Estado civil</span>
                        <span class="value-bold">Casado</span>
                    </div>
                </div>
            </div>

            <!-- Vínculos Familiares Card -->
            <div class="card">
                <span class="card-dots">• •</span>
                <div class="card-title-with-icon">
                    <div class="card-title-icon"><i class="fas fa-users"></i></div>
                    <div class="card-title-text">VÍNCULOS FAMILIARES</div>
                </div>

                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Vínculo</th>
                            <th>Nac.</th>
                            <th>Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bold">Laura Belén Pérez</td>
                            <td>Cónyuge</td>
                            <td>12/04/1988</td>
                            <td>37</td>
                        </tr>
                        <tr>
                            <td class="bold">Sofía Gómez</td>
                            <td>Hija</td>
                            <td>03/07/2014</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td class="bold">Tomás Gómez</td>
                            <td>Hijo</td>
                            <td>21/09/2017</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td class="bold">María Elvira Gómez</td>
                            <td>Madre</td>
                            <td>15/02/1962</td>
                            <td>63</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#" class="link-more">+ Ver más vínculos registrados</a>
            </div>

            <!-- Vehículos Registrados Card -->
            <div class="card">
                <span class="card-dots">• •</span>
                <div class="card-title-with-icon">
                    <div class="card-title-icon"><i class="fas fa-car"></i></div>
                    <div class="card-title-text">VEHÍCULOS REGISTRADOS</div>
                </div>

                <div class="vehicle-box">
                    <div class="vehicle-icon">
                        <i class="fas fa-car-side"></i>
                    </div>
                    <div class="vehicle-details">
                        <div class="label-muted">Marca / Modelo</div>
                        <div class="vehicle-name">Toyota Corolla XEI</div>
                        
                        <div class="vehicle-grid">
                            <div class="vehicle-col">
                                <span class="label-muted">Año</span>
                                <span class="value-bold">2021</span>
                            </div>
                            <div class="vehicle-col">
                                <span class="label-muted">Dominio</span>
                                <span class="value-bold">AA123BB</span>
                            </div>
                        </div>
                        <div class="vehicle-grid" style="margin-top: 2px;">
                            <div class="vehicle-col">
                                <span class="label-muted">Estado</span>
                                <span class="value-bold" style="color: var(--primary-green);">Sin deuda</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="link-more" style="margin-top: 8px;">+ 1 vehículo adicional</a>
            </div>

            <!-- Situación Financiera Card -->
            <div class="card">
                <span class="card-dots">• •</span>
                <div class="card-title-with-icon">
                    <div class="card-title-icon"><i class="fas fa-dollar-sign"></i></div>
                    <div class="card-title-text">SITUACIÓN FINANCIERA</div>
                </div>

                <div style="margin-bottom: 6px;">
                    <span class="label-muted">Comportamiento de pagos (Últimos 12 meses)</span>
                    <div class="fin-badge">Excelente</div>
                </div>

                <!-- Line Chart SVG -->
                <div style="width: 100%; height: 95px; margin: 4px 0 8px 0; position: relative;">
                    <svg viewBox="0 0 280 90" style="width: 100%; height: 100%;">
                        <!-- Background Grid lines -->
                        <line x1="20" y1="15" x2="270" y2="15" stroke="#f3f4f6" stroke-dasharray="2" />
                        <text x="5" y="18" fill="#9ca3af" font-size="7">1000</text>

                        <line x1="20" y1="35" x2="270" y2="35" stroke="#f3f4f6" stroke-dasharray="2" />
                        <text x="5" y="38" fill="#9ca3af" font-size="7">750</text>

                        <line x1="20" y1="55" x2="270" y2="55" stroke="#f3f4f6" stroke-dasharray="2" />
                        <text x="5" y="58" fill="#9ca3af" font-size="7">250</text>

                        <line x1="20" y1="75" x2="270" y2="75" stroke="#f3f4f6" stroke-dasharray="2" />
                        <text x="5" y="78" fill="#9ca3af" font-size="7">0</text>

                        <!-- Filled area under chart -->
                        <polygon points="30,35 70,30 110,48 150,32 190,25 230,28 260,25 260,75 30,75" fill="#eef9f2" opacity="0.7"/>

                        <!-- Chart Line -->
                        <polyline points="30,35 70,30 110,48 150,32 190,25 230,28 260,25" fill="none" stroke="#10a34a" stroke-width="2"/>

                        <!-- Data Dots -->
                        <circle cx="30" cy="35" r="3" fill="#10a34a"/>
                        <circle cx="70" cy="30" r="3" fill="#10a34a"/>
                        <circle cx="110" cy="48" r="3" fill="#10a34a"/>
                        <circle cx="150" cy="32" r="3" fill="#10a34a"/>
                        <circle cx="190" cy="25" r="3" fill="#10a34a"/>
                        <circle cx="230" cy="28" r="3" fill="#10a34a"/>
                        <circle cx="260" cy="25" r="3" fill="#10a34a"/>

                        <!-- X Axis Labels -->
                        <text x="23" y="87" fill="#9ca3af" font-size="7">Jun 24</text>
                        <text x="61" y="87" fill="#9ca3af" font-size="7">Ago 24</text>
                        <text x="101" y="87" fill="#9ca3af" font-size="7">Oct 24</text>
                        <text x="141" y="87" fill="#9ca3af" font-size="7">Dic 24</text>
                        <text x="181" y="87" fill="#9ca3af" font-size="7">Feb 25</text>
                        <text x="221" y="87" fill="#9ca3af" font-size="7">Abr 25</text>
                    </svg>
                </div>

                <div class="data-grid-3">
                    <div class="data-col-3" style="width: 50%;">
                        <span class="label-muted">Nivel de endeudamiento</span>
                        <span class="value-bold" style="font-size: 13px;">28%</span>
                        <span class="label-muted" style="color: var(--primary-green); font-weight:700;">Bajo</span>
                    </div>
                    <div class="data-col-3" style="width: 50%;">
                        <span class="label-muted">Consultas registradas</span>
                        <span class="value-bold" style="font-size: 13px;">5</span>
                        <span class="label-muted">Últimos 6 meses</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Column -->
        <div class="col-right">

            <!-- Índice de Confianza Card -->
            <div class="card">
                <div style="font-size: 9px; font-weight: 700; color: var(--text-muted); text-transform: uppercase; margin-bottom: 8px;">
                    ÍNDICE DE CONFIANZA
                </div>

                <div class="gauge-container">
                    <div class="gauge-left">
                        <div class="score-num">812</div>
                        <span class="score-max">/1000</span>
                        <br>
                        <div class="badge-risk"><i class="fas fa-check-circle" style="margin-right: 3px;"></i> RIESGO BAJO</div>
                    </div>
                    <div class="gauge-right">
                        <!-- Semi-circle Gauge SVG -->
                        <div class="gauge-svg-wrap">
                            <svg viewBox="0 0 120 70" width="120" height="70">
                                <!-- Background Arc Paths -->
                                <!-- High Risk (Red/Orange) -->
                                <path d="M 10 60 A 50 50 0 0 1 32 22" fill="none" stroke="#fca5a5" stroke-width="12" stroke-linecap="round"/>
                                <!-- Medium Risk (Yellow) -->
                                <path d="M 36 19 A 50 50 0 0 1 84 19" fill="none" stroke="#fde047" stroke-width="12" stroke-linecap="round"/>
                                <!-- Low Risk (Green) -->
                                <path d="M 88 22 A 50 50 0 0 1 110 60" fill="none" stroke="#10a34a" stroke-width="12" stroke-linecap="round"/>

                                <!-- Gauge Needle pointing at 812 (~142 deg) -->
                                <g transform="translate(60,60) rotate(52)">
                                    <polygon points="-2,0 0,-42 2,0" fill="#1f2937" />
                                    <circle cx="0" cy="0" r="4" fill="#1f2937" />
                                </g>
                            </svg>
                        </div>
                        <div class="gauge-legend">
                            <div><span class="gauge-legend-dot" style="background:#10a34a;"></span><strong>700 - 1000</strong> Bajo</div>
                            <div><span class="gauge-legend-dot" style="background:#f1c40f;"></span><strong>400 - 699</strong> Medio</div>
                            <div><span class="gauge-legend-dot" style="background:#e74c3c;"></span><strong>0 - 399</strong> Alto</div>
                        </div>
                    </div>
                </div>

                <div style="font-size: 8px; color: var(--text-light); margin-top: 8px; border-top: 1px dashed #f3f4f6; padding-top: 5px;">
                    <i class="fas fa-shield-alt" style="margin-right: 3px;"></i> Índice calculado en base a comportamiento financiero, cumplimiento y estabilidad registrada.
                </div>
            </div>

            <!-- Contacto y Localización Card -->
            <div class="card">
                <span class="card-dots">• •</span>
                <div class="card-title-with-icon">
                    <div class="card-title-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="card-title-text">CONTACTO Y LOCALIZACIÓN</div>
                </div>

                <div style="margin-bottom: 8px;">
                    <div class="label-muted"><i class="fas fa-home" style="margin-right: 3px; color: var(--text-muted);"></i> Domicilio principal</div>
                    <div class="value-bold" style="font-size: 10px; margin-top: 2px;">
                        Av. San Martín 1234, Piso 5° Dpto. B<br>
                        <span style="font-weight: 500; color: var(--text-muted);">(C1414AAZ) CABA, Ciudad Autónoma de Buenos Aires</span>
                    </div>
                </div>

                <div style="margin-bottom: 8px;">
                    <div class="label-muted"><i class="fas fa-building" style="margin-right: 3px; color: var(--text-muted);"></i> Otros domicilios registrados</div>
                    <div style="font-size: 9.5px; color: var(--text-main); margin-top: 2px; padding-left: 8px;">
                        • Calle 9 de Julio 2456, Rosario, Santa Fe<br>
                        • Los Robles 145, Pilar, Buenos Aires
                    </div>
                </div>

                <div class="data-grid-3" style="border-top: 1px solid #f3f4f6; padding-top: 6px;">
                    <div class="data-col-3" style="width: 32%;">
                        <span class="label-muted"><i class="fas fa-phone" style="color:var(--primary-green);"></i> Teléfonos</span>
                        <span class="value-bold" style="display:block; font-size:9px; margin-top:2px;">(11) 5555-1234</span>
                        <span class="value-bold" style="display:block; font-size:9px;">(341) 555-9876</span>
                    </div>
                    <div class="data-col-3" style="width: 35%;">
                        <span class="label-muted"><i class="fas fa-mobile-alt" style="color:var(--primary-green);"></i> Celulares</span>
                        <span class="value-bold" style="display:block; font-size:9px; margin-top:2px;">+54 9 11 5555-4321 <i class="fab fa-whatsapp" style="color:#25D366; font-size:9px;"></i></span>
                        <span class="value-bold" style="display:block; font-size:9px;">+54 9 341 555-8765</span>
                    </div>
                    <div class="data-col-3" style="width: 33%;">
                        <span class="label-muted"><i class="fas fa-envelope" style="color:var(--primary-green);"></i> Emails</span>
                        <span class="value-bold" style="display:block; font-size:8.5px; margin-top:2px; word-break:break-all;">martin.gomez@email.com</span>
                        <span class="value-bold" style="display:block; font-size:8.5px; word-break:break-all;">mgomez@empresas.com.ar</span>
                    </div>
                </div>
            </div>

            <!-- Empleo e Ingresos Card -->
            <div class="card">
                <span class="card-dots">• •</span>
                <div class="card-title-with-icon">
                    <div class="card-title-icon"><i class="fas fa-briefcase"></i></div>
                    <div class="card-title-text">EMPLEO E INGRESOS</div>
                </div>

                <div style="display: table; width: 100%;">
                    <div style="display: table-cell; width: 55%; vertical-align: top;">
                        <span class="label-muted">Situación laboral</span>
                        <span class="value-bold" style="display: block; margin-bottom: 6px;">Relación de dependencia</span>

                        <span class="label-muted">Empresa</span>
                        <span class="value-bold" style="display: block; margin-bottom: 6px;">Soluciones Tecnológicas SA</span>

                        <span class="label-muted">Cargo</span>
                        <span class="value-bold" style="display: block; margin-bottom: 6px;">Gerente de Operaciones</span>

                        <span class="label-muted">Antigüedad</span>
                        <span class="value-bold" style="display: block; margin-bottom: 6px;">7 años y 3 meses</span>

                        <span class="label-muted">Ingresos mensuales estimados</span>
                        <div style="font-size: 16px; font-weight: 800; color: var(--primary-green);">$ 3.850.000</div>
                        <span class="label-muted" style="color: var(--text-muted);">Neto mensual &nbsp; <span style="background:#eef9f2; color:var(--primary-green); padding:1px 6px; border-radius:3px; font-weight:700;">Estable •</span></span>
                    </div>

                    <div style="display: table-cell; width: 45%; vertical-align: top; padding-left: 10px;">
                        <div style="background: #f9fafb; padding: 6px; border-radius: 6px; text-align: center; margin-bottom: 6px;">
                            <span class="label-muted">ANTIGÜEDAD LABORAL</span>
                            <span style="font-size: 17px; font-weight: 600; color: #141414; display: block;">7a 3m</span>
                        </div>

                        <!-- Mini timeline -->
                        <div class="timeline-box">
                            <div class="timeline-item">
                                <div class="timeline-date">2018 - Actual</div>
                                <div class="timeline-title">Soluciones Tecnológicas SA</div>
                                <div class="timeline-sub">Gerente de Operaciones</div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-date">2014 - 2018</div>
                                <div class="timeline-title">Innovar SRL</div>
                                <div class="timeline-sub">Jefe de Proyectos</div>
                            </div>
                            <div class="timeline-item" style="margin-bottom:0;">
                                <div class="timeline-date">2010 - 2014</div>
                                <div class="timeline-title">Next Solutions SA</div>
                                <div class="timeline-sub">Analista Sr.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Perfil Fiscal y Comercial Card -->
            <div class="card">
                <span class="card-dots">• •</span>
                <div class="card-title-with-icon">
                    <div class="card-title-icon"><i class="fas fa-chart-line"></i></div>
                    <div class="card-title-text">PERFIL FISCAL Y COMERCIAL</div>
                </div>

                <div class="data-grid-3" style="border-top: none; padding-top: 0;">
                    <div class="data-col-3" style="width: 50%;">
                        <span class="label-muted">Cumplimiento fiscal</span>
                        <div style="font-weight: 800; color: #111827; font-size: 11px;">AFIP <span style="background: #f2f2f2; color: var(--primary-green); padding: 1px 5px; border-radius: 3px; font-size: 10px; font-weight: 600; margin-left: 2px;">Cumple</span></div>
                        
                        <span class="label-muted" style="margin-top: 6px;">Categoría IVA</span>
                        <span class="value-bold">Responsable Inscripto</span>

                        <span class="label-muted" style="margin-top: 6px;">Ingresos brutos</span>
                        <span class="value-bold">Convenio Multilateral</span>
                        <span class="label-muted" style="background: #f2f2f2; color: var(--primary-green); padding: 1px 5px; border-radius: 3px; font-size: 10px; font-weight: 600; margin-left: 2px;">Cumple</span>
                    </div>

                    <div class="data-col-3" style="width: 50%;">
                        <span class="label-muted">Actividad económica principal</span>
                        <span class="value-bold" style="font-size: 9.5px;">6201 - Desarrollo de software</span>

                        <span class="label-muted" style="margin-top: 6px;">Situación en BCRA</span>
                        <span class="value-bold" style="color:var(--primary-green); font-size: 9.5px;">Sin irregularidades</span>

                        <div style="display: table; width: 100%; margin-top: 6px;">
                            <div style="display: table-cell; width: 50%;">
                                <span class="label-muted">Cheques rechazados</span>
                                <span style="font-size: 14px; font-weight: 800; color: #111827; display:block;">0</span>
                                <span class="label-muted">Últimos 12 meses</span>
                            </div>
                            <div style="display: table-cell; width: 50%;">
                                <span class="label-muted">Protestos</span>
                                <span style="font-size: 14px; font-weight: 800; color: #111827; display:block;">0</span>
                                <span class="label-muted">Últimos 12 meses</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Footer Disclaimer Block -->
    <div class="footer-card">
        <div class="footer-icon">
            <i class="far fa-check-circle"></i>
        </div>
        <div class="footer-text">
            <strong>INFORMACIÓN IMPORTANTE</strong><br>
            El presente informe es de carácter confidencial y contiene información obtenida de fuentes públicas y privadas.<br>
            Su uso debe limitarse a la evaluación comercial y crediticia del sujeto.<br>
            Informe válido por 30 días desde la fecha de emisión.
        </div>
        <div class="footer-qr">
            <!-- Inline SVG QR Code Representation -->
            <svg class="qr-code-img" viewBox="0 0 100 100">
                <rect width="100" height="100" fill="white"/>
                <!-- QR Corners -->
                <rect x="5" y="5" width="25" height="25" fill="#1f2937"/>
                <rect x="9" y="9" width="17" height="17" fill="white"/>
                <rect x="13" y="13" width="9" height="9" fill="#1f2937"/>

                <rect x="70" y="5" width="25" height="25" fill="#1f2937"/>
                <rect x="74" y="9" width="17" height="17" fill="white"/>
                <rect x="78" y="13" width="9" height="9" fill="#1f2937"/>

                <rect x="5" y="70" width="25" height="25" fill="#1f2937"/>
                <rect x="9" y="74" width="17" height="17" fill="white"/>
                <rect x="13" y="78" width="9" height="9" fill="#1f2937"/>

                <!-- Mock QR Bits -->
                <rect x="35" y="10" width="8" height="8" fill="#1f2937"/>
                <rect x="50" y="10" width="8" height="8" fill="#1f2937"/>
                <rect x="35" y="25" width="8" height="8" fill="#1f2937"/>
                <rect x="48" y="35" width="12" height="12" fill="#1f2937"/>
                <rect x="10" y="38" width="8" height="8" fill="#1f2937"/>
                <rect x="25" y="45" width="8" height="8" fill="#1f2937"/>
                <rect x="70" y="40" width="10" height="10" fill="#1f2937"/>
                <rect x="85" y="55" width="8" height="8" fill="#1f2937"/>
                <rect x="40" y="70" width="8" height="8" fill="#1f2937"/>
                <rect x="55" y="80" width="12" height="12" fill="#1f2937"/>
                <rect x="75" y="75" width="15" height="15" fill="#1f2937"/>
            </svg>
            <div style="font-size: 7px; color: var(--text-light);">Identificador de informe</div>
            <div class="qr-id">IP-25-05-25-1132-7834</div>
        </div>
    </div>

    <div class="footer-url">
        informedepersonas.com.ar
    </div>

    <!-- Script to trigger PDF print/download -->
    <script>
        document.getElementById('downloadPdfBtn').addEventListener('click', function() {
            window.print();
        });
    </script>
</body>
</html>
