<?php
declare(strict_types=1);

/**
 * Dra. Débora Almeida — Página Inicial Completa
 * 
 * Estrutura:
 * 1. Hero Section (Primeira Dobra) com área visual reservada
 * 2. Faixa de Confiança Factual (CRO-PE 20.636, Petrolina, Avaliações Google)
 * 3. Apresentação da Profissional (Escuta e Planejamento Individual)
 * 4. Cuidados Divulgados (Lentes, Clareamento, Limpeza, Cirurgia, Ortodontia)
 * 5. Experiência do Consultório (Estrutura no Trade Center, 14º andar)
 * 6. Reputação & Avaliações (Convite transparente para ficha no Google)
 * 7. Perguntas Frequentes Úteis (FAQ acessível)
 * 8. Localização e Rotas (Empresarial Trade Center, Petrolina-PE)
 * 9. CTA Final para Agendamento via WhatsApp
 * 10. Rodapé Institucional
 */

// Configurações centrais e helpers
$site = require __DIR__ . '/../app/config/site.php';

// Metadados da página
$pageTitle = $site['name'] . ' | ' . $site['subtitle_signature'] . ' em ' . $site['city'] . ' - ' . $site['state'];
$pageDescription = $site['meta_description'];

// Cabeçalho e Head
require __DIR__ . '/../app/partials/head.php';
require __DIR__ . '/../app/partials/header.php';
?>

<main id="main-content" class="main-content">

    <!-- =====================================================================
         1. PRIMEIRA DOBRA: HERO SECTION
         ===================================================================== -->
    <section class="hero-section" id="inicio" aria-labelledby="hero-title">
        <div class="hero-decor-shape" aria-hidden="true"></div>

        <div class="hero-container">
            <!-- Conteúdo Editorial -->
            <div class="hero-content">
                <div class="hero-badge-wrapper fade-in-up">
                    <span class="hero-badge">
                        Odontologia em Petrolina &bull; PE
                    </span>
                </div>

                <h1 id="hero-title" class="hero-title fade-in-up delay-100">
                    Seu sorriso merece cuidado em cada detalhe.
                </h1>

                <p class="hero-description fade-in-up delay-200">
                    Uma abordagem centrada na estética natural e na saúde bucal plena. Planejamento individualizado em um ambiente sereno e acolhedor.
                </p>

                <div class="hero-actions fade-in-up delay-300">
                    <a href="<?= e(getWhatsAppUrl($site)) ?>" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="btn btn-primary btn-lg"
                       id="hero-cta-primary"
                       aria-label="Agendar pelo WhatsApp (abre em nova aba)">
                        <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                            <path d="m9 16 2 2 4-4"></path>
                        </svg>
                        Agendar pelo WhatsApp
                    </a>

                    <a href="sobre.php" 
                       class="btn btn-secondary btn-lg"
                       id="hero-cta-secondary">
                        Conhecer a Dra. Débora
                    </a>
                </div>
            </div>

            <!-- Área Visual com Retrato Real da Dra. Débora -->
            <div class="hero-visual fade-in-up delay-200">
                <div class="portrait-card">
                    <!-- Detalhe Decorativo Oficial (Padrão de Símbolos em Baixa Intensidade) -->
                    <div class="portrait-pattern-backdrop" aria-hidden="true"></div>

                    <?php 
                    $imagePath = 'assets/img/dra-debora.jpg';
                        $altText = 'Retrato profissional da Dra. Débora Almeida de uniforme preto em Petrolina-PE';
                    $title = 'Retrato da Dra. Débora';
                    $subtitle = 'Dra. Débora Almeida — Cirurgiã-Dentista';
                    $aspectRatio = '4/5';
                    $customClass = 'hero-photo-frame';
                    $loadingMode = 'eager';
                    $isLcp = true;
                    $objectPosition = 'center 12%';
                    include __DIR__ . '/../app/components/photo-frame.php';
                    ?>

                    <!-- Cartão Flutuante de Avaliações no Google -->
                    <a href="<?= e($site['google_reviews_url']) ?>" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="portrait-floating-badge" 
                       aria-label="Ver avaliações da Dra. Débora no Google Maps (abre em nova aba)">
                        <div class="badge-stars-row">
                            <?php for ($i = 0; $i < 3; $i++): ?>
                                <div class="star-badge" aria-hidden="true">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </div>
                            <?php endfor; ?>
                            <span class="badge-score-text"><?= e($site['rating']['score']) ?> no Google</span>
                        </div>
                        <p class="badge-subtext">Avaliações de pacientes em Petrolina &rarr;</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         2. FAIXA DE CONFIANÇA FACTUAL
         ===================================================================== -->
    <section class="trust-bar-section" aria-label="Informações de credibilidade e registro profissional">
        <div class="trust-bar-container">
            <ul class="trust-bar-items">
                <li class="trust-item">
                    <svg class="trust-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                    <span class="trust-text">Registro <?= e($site['cro']) ?></span>
                </li>

                <li class="trust-divider" aria-hidden="true"></li>

                <li class="trust-item">
                    <svg class="trust-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <span class="trust-text"><?= e($site['location_short']) ?></span>
                </li>

                <li class="trust-divider" aria-hidden="true"></li>

                <li class="trust-item">
                    <a href="<?= e($site['google_reviews_url']) ?>" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="trust-link" 
                       title="Visualizar ficha e avaliações públicas no Google"
                       aria-label="Visualizar ficha e avaliações públicas no Google Maps (abre em nova aba)">
                        <svg class="trust-icon" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" stroke="none" aria-hidden="true">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        <span class="trust-text"><?= e($site['rating']['label']) ?></span>
                        <svg class="trust-link-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M7 17l9.2-9.2M17 17V8H8"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- =====================================================================
         3. APRESENTAÇÃO DA PROFISSIONAL
         ===================================================================== -->
    <section class="section section-about" id="sobre" aria-labelledby="about-title">
        <div class="container">
            <div class="about-grid">
                <!-- Coluna Visual / Retrato Editorial -->
                <div class="about-visual">
                    <div class="about-image-card">
                        <?php 
                        $imagePath = 'assets/img/sobre-debora.jpg';
                        $altText = 'Retrato da Dra. Débora Almeida';
                        $title = 'Dra. Débora Almeida';
                        $subtitle = 'Retrato profissional';
                        $aspectRatio = '1/1';
                        $customClass = 'about-photo-frame';
                        include __DIR__ . '/../app/components/photo-frame.php';
                        ?>
                    </div>
                </div>

                <!-- Coluna de Texto Editorial -->
                <div class="about-content">
                    <span class="section-badge">A Profissional</span>
                    <h2 id="about-title" class="section-title">
                        Escuta, clareza e planejamento individual.
                    </h2>
                    
                    <div class="about-prose">
                        <p>
                            O cuidado com o sorriso começa com uma conversa atenta sobre as queixas, necessidades e expectativas de cada paciente. A partir de um exame criterioso, torna-se possível desenhar cada etapa do atendimento com tranquilidade e transparência.
                        </p>
                        <p>
                            A abordagem da Dra. Débora Almeida une a saúde bucal à harmonia estética natural, priorizando soluções funcionais, conforto durante as consultas e respeito às características individuais de cada pessoa.
                        </p>
                    </div>

                    <div class="about-meta-card">
                        <div class="about-meta-info">
                            <h3 class="about-meta-name"><?= e($site['name']) ?></h3>
                            <p class="about-meta-role"><?= e($site['profession']) ?> &bull; <?= e($site['cro']) ?></p>
                            <p class="about-meta-location"><?= e($site['address']['display_short']) ?></p>
                        </div>
                        <div class="about-meta-actions">
                            <a href="sobre.php" class="btn btn-secondary btn-sm">
                                Conhecer trajetória &rarr;
                            </a>
                            <a href="<?= e(getWhatsAppUrl($site, 'Olá Dra. Débora, conheci seu trabalho pelo site e gostaria de agendar uma consulta.')) ?>" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="btn btn-primary btn-sm about-cta"
                               aria-label="Falar no WhatsApp com a Dra. Débora (abre em nova aba)">
                                Falar no WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         4. CUIDADOS DIVULGADOS / ÁREAS DE ATUAÇÃO
         ===================================================================== -->
    <section class="section section-treatments" id="tratamentos" aria-labelledby="treatments-title">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-badge">Áreas de Atuação</span>
                <h2 id="treatments-title" class="section-title">
                    Cuidados com o seu sorriso
                </h2>
                <p class="section-subtitle">
                    Conheça os cuidados divulgados pela Dra. Débora. Cada procedimento é indicado e planejado a partir de uma avaliação presencial completa.
                </p>
            </div>

            <div class="treatments-grid">
                <?php foreach ($site['treatments'] as $treatment): ?>
                    <?php include __DIR__ . '/../app/components/treatment-card.php'; ?>
                <?php endforeach; ?>

                <!-- Card Especial de Agendamento -->
                <div class="treatment-card treatment-cta-card">
                    <div class="cta-card-content">
                        <div class="cta-icon-wrap" aria-hidden="true">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                        </div>
                        <h3 class="cta-card-title">Dúvidas sobre o tratamento mais indicado?</h3>
                        <p class="cta-card-desc">
                            A indicação correta depende da saúde do seu esmalte, gengiva e oclusão. Inicie o planejamento em uma consulta criteriosa.
                        </p>
                        <a href="<?= e(getWhatsAppUrl($site)) ?>" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn btn-primary btn-full cta-card-btn"
                           aria-label="Agendar avaliação pelo WhatsApp (abre em nova aba)">
                            Agendar avaliação
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         5. EXPERIÊNCIA DO CONSULTÓRIO
         ===================================================================== -->
    <section class="section section-experience" id="experiencia" aria-labelledby="experience-title">
        <div class="container">
            <div class="experience-grid">
                <!-- Informações e Diferenciais do Espaço -->
                <div class="experience-content">
                    <span class="section-badge">O Consultório</span>
                    <h2 id="experience-title" class="section-title">
                        Um ambiente pensado para o seu bem-estar.
                    </h2>
                    <p class="section-subtitle-left">
                        O consultório está localizado no 14º andar do Empresarial Trade Center, no coração de Petrolina. Uma estrutura planejada para proporcionar tranquilidade, pontualidade e acolhimento em cada etapa.
                    </p>

                    <!-- Lista de Diferenciais Estruturais -->
                    <div class="experience-features-list">
                        <?php foreach ($site['experience_features'] as $idx => $feat): ?>
                            <div class="feature-item">
                                <div class="feature-number" aria-hidden="true">0<?= $idx + 1 ?></div>
                                <div class="feature-text">
                                    <h3 class="feature-title"><?= e($feat['title']) ?></h3>
                                    <p class="feature-desc"><?= e($feat['desc']) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Cartão Informativo de Localização -->
                    <div class="experience-location-box">
                        <div class="box-icon" aria-hidden="true">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div class="box-info">
                            <strong>Empresarial Trade Center</strong>
                            <p>Rua Joaquim Nabuco, sala 1406 (14º andar) &bull; Centro, Petrolina-PE</p>
                            <a href="<?= e($site['google_maps_url']) ?>" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="box-link"
                               aria-label="Traçar rota no Google Maps (abre em nova aba)">
                                Traçar rota no Google Maps &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Padrão gráfico oficial da identidade visual -->
                <div class="experience-gallery">
                    <img src="assets/img/padrao-simbolo.jpg" alt="" loading="lazy" width="595" height="595" class="experience-brand-image">
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         6. REPUTAÇÃO & AVALIAÇÕES NO GOOGLE
         ===================================================================== -->
    <section class="section section-reviews" id="avaliacoes" aria-labelledby="reviews-title">
        <div class="container">
            <div class="reviews-box">
                <div class="reviews-header">
                    <span class="section-badge">Reputação e Confiança</span>
                    <h2 id="reviews-title" class="section-title">
                        Opinião de quem já conhece o atendimento
                    </h2>
                    <p class="section-subtitle">
                        A transparência e o acolhimento são premissas de cada consulta. Convidamos você a conferir os relatos e a experiência de outros pacientes diretamente na ficha pública da profissional no Google.
                    </p>
                </div>

                <div class="google-rating-card">
                    <div class="rating-highlight-group">
                        <div class="rating-large-number"><?= e($site['rating']['score']) ?></div>
                        <div class="rating-stars-and-source">
                            <div class="rating-stars-row" aria-label="Avaliação 5 estrelas">
                                <?php for ($s = 0; $s < 5; $s++): ?>
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="#B99B6B" stroke="none" aria-hidden="true">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                <?php endfor; ?>
                            </div>
                            <span class="rating-platform-name">Avaliações públicas no Google Maps</span>
                        </div>
                    </div>

                    <div class="rating-summary-text">
                        <p>
                            Pacientes destacam nos comentários a atenção dedicada, o esclarecimento detalhado de cada dúvida, o ambiente acolhedor e a pontualidade no atendimento no Empresarial Trade Center.
                        </p>
                    </div>

                    <div class="rating-action">
                        <a href="<?= e($site['google_reviews_url']) ?>" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn btn-primary btn-lg"
                           id="btn-google-reviews"
                           aria-label="Ver avaliações no Google Maps (abre em nova aba)">
                            <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                <polyline points="15 3 21 3 21 9"></polyline>
                                <line x1="10" y1="14" x2="21" y2="3"></line>
                            </svg>
                            Ver avaliações no Google Maps
                        </a>
                    </div>
                </div>

                <p class="reviews-ethical-note">
                    * Informações apuradas publicamente no Google Maps em 25/09/2026. Em conformidade com o Código de Ética Odontológica (CFO 196/2019), não utilizamos depoimentos fabricados nem divulgamos casos clínicos sem autorização prévia por escrito.
                </p>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         7. PERGUNTAS FREQUENTES (FAQ)
         ===================================================================== -->
    <section class="section section-faq" id="faq" aria-labelledby="faq-title">
        <div class="container container-narrow">
            <div class="section-header text-center">
                <span class="section-badge">Orientações</span>
                <h2 id="faq-title" class="section-title">
                    Perguntas frequentes
                </h2>
                <p class="section-subtitle">
                    Tire dúvidas comuns sobre o funcionamento do consultório, os primeiros passos do atendimento e os procedimentos oferecidos.
                </p>
            </div>

            <div class="faq-accordion">
                <?php foreach ($site['faqs'] as $index => $faq): ?>
                    <?php include __DIR__ . '/../app/components/faq-item.php'; ?>
                <?php endforeach; ?>
            </div>

            <div class="faq-footer-help">
                <p>Tem alguma outra dúvida ou gostaria de um esclarecimento específico?</p>
                <a href="<?= e(getWhatsAppUrl($site, 'Olá Dra. Débora, estou com uma dúvida sobre um procedimento e gostaria de orientação.')) ?>" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="btn btn-secondary btn-sm"
                   aria-label="Falar com a equipe no WhatsApp para tirar dúvidas (abre em nova aba)">
                    Falar com a equipe no WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         8. LOCALIZAÇÃO E ROTAS
         ===================================================================== -->
    <section class="section section-location" id="localizacao" aria-labelledby="location-title">
        <div class="container">
            <div class="location-grid">
                <!-- Informações Detalhadas de Endereço e Horários -->
                <div class="location-details-col">
                    <span class="section-badge">Localização</span>
                    <h2 id="location-title" class="section-title">
                        Como chegar ao consultório
                    </h2>
                    <p class="section-subtitle-left">
                        O consultório está localizado em um ponto estratégico e acessível no Centro de Petrolina, no Empresarial Trade Center.
                    </p>

                    <div class="location-cards-stack">
                        <!-- Card de Endereço -->
                        <div class="location-info-card">
                            <div class="info-card-header">
                                <div class="info-card-icon" aria-hidden="true">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3"></circle>
                                    </svg>
                                </div>
                                <h3 class="info-card-title">Endereço Completo</h3>
                            </div>
                            <address class="info-card-body">
                                <strong><?= e($site['address']['building']) ?></strong><br>
                                <?= e($site['address']['street']) ?>, <?= e($site['address']['room']) ?><br>
                                <?= e($site['address']['district']) ?>, <?= e($site['city']) ?> - <?= e($site['state']) ?><br>
                                CEP <?= e($site['address']['cep']) ?>
                            </address>
                        </div>

                        <!-- Card de Horários em Revisão -->
                        <div class="location-info-card">
                            <div class="info-card-header">
                                <div class="info-card-icon" aria-hidden="true">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polyline points="12 6 12 12 16 14"></polyline>
                                    </svg>
                                </div>
                                <div class="info-card-title-group">
                                    <h3 class="info-card-title">Horário de Atendimento</h3>
                                    <span class="status-pill"><?= e($site['hours']['status']) ?></span>
                                </div>
                            </div>
                            <div class="info-card-body">
                                <p class="hours-line"><?= e($site['hours']['weekdays']) ?></p>
                                <p class="hours-line"><?= e($site['hours']['saturday']) ?></p>
                                <p class="hours-line"><?= e($site['hours']['sunday']) ?></p>
                                <p class="hours-note-muted"><?= e($site['hours']['note']) ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="location-buttons-row">
                        <a href="<?= e($site['google_maps_url']) ?>" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn btn-primary btn-lg"
                           id="btn-location-routes"
                           aria-label="Abrir rotas para o consultório no Google Maps (abre em nova aba)">
                            <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polygon points="3 11 22 2 13 21 11 13 3 11"></polygon>
                            </svg>
                            Abrir rotas no Google Maps
                        </a>

                        <a href="contato.php" 
                           class="btn btn-secondary btn-lg"
                           id="btn-location-page">
                            Detalhes de contato &rarr;
                        </a>
                    </div>
                </div>

                <!-- Painel Visual de Localização / Mapa Interativo -->
                <div class="location-visual-col">
                    <div class="location-map-frame">
                        <div class="map-visual-placeholder">
                            <div class="map-visual-decor-circle circle-1" aria-hidden="true"></div>
                            <div class="map-visual-decor-circle circle-2" aria-hidden="true"></div>
                            
                            <div class="map-visual-card">
                                <div class="map-marker-pin" aria-hidden="true">
                                    <svg width="32" height="32" viewBox="0 0 24 24" fill="#B99B6B" stroke="#2D2925" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                        <circle cx="12" cy="10" r="3" fill="#FFFFFF"></circle>
                                    </svg>
                                </div>
                                <h3 class="map-card-building"><?= e($site['address']['building']) ?></h3>
                                <p class="map-card-address"><?= e($site['address']['room']) ?> &bull; Centro</p>
                                <p class="map-card-city"><?= e($site['city']) ?> - <?= e($site['state']) ?></p>

                                <a href="<?= e($site['google_maps_url']) ?>" 
                                   target="_blank" 
                                   rel="noopener noreferrer" 
                                   class="btn btn-primary btn-sm map-direct-link"
                                   aria-label="Visualizar no aplicativo do Google Maps (abre em nova aba)">
                                    Visualizar no aplicativo do Google Maps &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================================
         9. CTA FINAL PARA AGENDAMENTO
         ===================================================================== -->
    <section class="section section-cta-final" aria-labelledby="cta-final-title">
        <div class="container">
            <div class="cta-final-box">
                <div class="cta-final-decor" aria-hidden="true"></div>

                <div class="cta-final-content">
                    <span class="cta-final-badge">Agendamento e Orientações</span>
                    <h2 id="cta-final-title" class="cta-final-title">
                        Pronto para cuidar do seu sorriso com atenção e serenidade?
                    </h2>
                    <p class="cta-final-desc">
                        Inicie uma conversa no WhatsApp para tirar dúvidas sobre tratamentos e solicitar um horário de avaliação com a Dra. Débora Almeida no Centro de Petrolina.
                    </p>

                    <div class="cta-final-actions">
                        <a href="<?= e(getWhatsAppUrl($site)) ?>" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn btn-primary btn-lg cta-btn-whatsapp"
                           id="cta-final-whatsapp"
                           aria-label="Agendar pelo WhatsApp (abre em nova aba)">
                            <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                <path d="m9 16 2 2 4-4"></path>
                            </svg>
                            Agendar pelo WhatsApp
                        </a>

                        <a href="<?= e($site['phone_link']) ?>" 
                           class="btn btn-secondary btn-lg cta-btn-phone"
                           id="cta-final-phone"
                           aria-label="Ligar para o telefone (87) 99112-3727">
                            <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                            Ligar <?= e($site['phone']) ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
// Inclusão do Rodapé
require __DIR__ . '/../app/partials/footer.php';
