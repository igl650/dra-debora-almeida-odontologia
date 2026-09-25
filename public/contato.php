<?php
declare(strict_types=1);

/**
 * Dra. Débora Almeida — Contato e Localização
 * 
 * Endereço no Empresarial Trade Center, canais diretos de contato,
 * rotas no Google Maps, acessibilidade e horários em revisão.
 */

$site = require __DIR__ . '/../app/config/site.php';

$pageTitle = 'Contato e Localização em Petrolina-PE | Dra. Débora Almeida';
$pageDescription = 'Endereço no Empresarial Trade Center, sala 1406, telefone, WhatsApp e rotas para o consultório da Dra. Débora Almeida em Petrolina-PE.';

require __DIR__ . '/../app/partials/head.php';
require __DIR__ . '/../app/partials/header.php';

$breadcrumbs = [
    ['label' => 'Início', 'url' => 'index.php'],
    ['label' => 'Contato e Localização', 'url' => null],
];
require __DIR__ . '/../app/components/breadcrumbs.php';
?>

<main id="main-content" class="main-content internal-page">

    <!-- Cabeçalho Editorial da Página -->
    <header class="page-hero">
        <div class="container container-narrow text-center">
            <span class="section-badge">Atendimento em Petrolina</span>
            <h1 class="page-title">
                Estamos à sua disposição no Centro de Petrolina.
            </h1>
            <p class="page-lead">
                Planeje sua visita ao Empresarial Trade Center ou entre em contato diretamente pelo WhatsApp para solicitar seu horário de avaliação.
            </p>
        </div>
    </header>

    <!-- Conteúdo Principal de Contato -->
    <section class="section section-contact-detail">
        <div class="container">
            <div class="contact-detail-grid">
                <!-- Coluna de Informações e Cartões -->
                <div class="contact-info-col">
                    <h2 class="section-title">Canais de Atendimento</h2>
                    <p class="section-subtitle-left">
                        Para um atendimento ágil e humanizado, priorizamos o contato direto por mensagem ou ligação telefônica.
                    </p>

                    <div class="contact-cards-list">
                        <!-- Card WhatsApp Principal -->
                        <div class="contact-card contact-card-highlight">
                            <div class="contact-card-icon whatsapp-icon" aria-hidden="true">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                </svg>
                            </div>
                            <div class="contact-card-body">
                                <h3>WhatsApp Oficial</h3>
                                <p>Canal prioritário para dúvidas, envio de informações e agendamento de consultas com hora marcada.</p>
                                <a href="<?= e(getWhatsAppUrl($site)) ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer" 
                                   class="btn btn-primary btn-sm"
                                   aria-label="Iniciar conversa no WhatsApp oficial (abre em nova aba)">
                                    Iniciar conversa no WhatsApp &rarr;
                                </a>
                            </div>
                        </div>

                        <!-- Card Telefone -->
                        <div class="contact-card">
                            <div class="contact-card-icon" aria-hidden="true">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div class="contact-card-body">
                                <h3>Ligação Telefônica</h3>
                                <p><?= e($site['phone']) ?></p>
                                <a href="<?= e($site['phone_link']) ?>" 
                                   class="card-action-link"
                                   aria-label="Fazer chamada telefônica para (87) 99112-3727">
                                    Fazer chamada agora
                                </a>
                            </div>
                        </div>

                        <!-- Card Endereço -->
                        <div class="contact-card">
                            <div class="contact-card-icon" aria-hidden="true">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="contact-card-body">
                                <h3>Endereço do Consultório</h3>
                                <address class="contact-address-text">
                                    <strong><?= e($site['address']['building']) ?></strong><br>
                                    <?= e($site['address']['street']) ?>, <?= e($site['address']['room']) ?><br>
                                    <?= e($site['address']['district']) ?> &bull; <?= e($site['city']) ?> - <?= e($site['state']) ?><br>
                                    CEP: <?= e($site['address']['cep']) ?>
                                </address>
                                <a href="<?= e($site['google_maps_url']) ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer" 
                                   class="card-action-link"
                                   aria-label="Ver endereço do consultório no Google Maps (abre em nova aba)">
                                    Ver no Google Maps &rarr;
                                </a>
                            </div>
                        </div>

                        <!-- Card Horários -->
                        <div class="contact-card">
                            <div class="contact-card-icon" aria-hidden="true">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <div class="contact-card-body">
                                <div class="card-title-badge">
                                    <h3>Horário de Funcionamento</h3>
                                    <span class="status-pill"><?= e($site['hours']['status']) ?></span>
                                </div>
                                <p class="hours-line"><?= e($site['hours']['weekdays']) ?></p>
                                <p class="hours-line"><?= e($site['hours']['saturday']) ?></p>
                                <p class="hours-line"><?= e($site['hours']['sunday']) ?></p>
                                <p class="hours-note-muted"><?= e($site['hours']['note']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Coluna do Painel Visual e Mapa -->
                <div class="contact-visual-col">
                    <div class="location-map-frame contact-map-frame">
                        <div class="map-visual-placeholder">
                            <div class="map-visual-decor-circle circle-1" aria-hidden="true"></div>
                            <div class="map-visual-decor-circle circle-2" aria-hidden="true"></div>
                            
                            <div class="map-visual-card">
                                <div class="map-marker-pin" aria-hidden="true">
                                    <svg width="36" height="36" viewBox="0 0 24 24" fill="#B99B6B" stroke="#2D2925" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3" fill="#FFFFFF"></circle>
                                    </svg>
                                </div>
                                <h3 class="map-card-building"><?= e($site['address']['building']) ?></h3>
                                <p class="map-card-address"><?= e($site['address']['room']) ?> &bull; Centro</p>
                                <p class="map-card-city"><?= e($site['city']) ?> - <?= e($site['state']) ?></p>

                                <div class="map-actions-block">
                                    <a href="<?= e($site['google_maps_url']) ?>" 
                                       target="_blank" 
                                       rel="noopener noreferrer" 
                                       class="btn btn-primary btn-sm map-direct-link"
                                       aria-label="Abrir localização do Trade Center no Google Maps (abre em nova aba)">
                                        Abrir no Google Maps &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accessibility-card">
                        <h4>Acessibilidade e Estrutura</h4>
                        <p>
                            O Empresarial Trade Center conta com portaria executiva, elevadores de alta capacidade, ambiente climatizado e acessibilidade para pessoas com mobilidade reduzida no Centro de Petrolina.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php require __DIR__ . '/../app/partials/footer.php'; ?>
