<?php
declare(strict_types=1);

/**
 * Dra. Débora Almeida — Sobre a Profissional
 * 
 * Apresentação ética em terceira pessoa, filosofia de atendimento,
 * espaço para confirmação curricular e FAQ específico.
 */

$site = require __DIR__ . '/../app/config/site.php';

$pageTitle = 'Sobre a Dra. Débora Almeida | Cirurgiã-Dentista em Petrolina-PE';
$pageDescription = 'Conheça a filosofia de atendimento, cuidado individualizado e valores da cirurgiã-dentista Dra. Débora Almeida (CRO-PE 20.636) em Petrolina-PE.';

require __DIR__ . '/../app/partials/head.php';
require __DIR__ . '/../app/partials/header.php';

$breadcrumbs = [
    ['label' => 'Início', 'url' => 'index.php'],
    ['label' => 'Sobre a Dra. Débora', 'url' => null],
];
require __DIR__ . '/../app/components/breadcrumbs.php';
?>

<main id="main-content" class="main-content internal-page">

    <!-- Cabeçalho Editorial da Página -->
    <header class="page-hero">
        <div class="container container-narrow text-center">
            <span class="section-badge">A Profissional</span>
            <h1 class="page-title">
                Cuidado guiado pela escuta atenta, clareza e naturalidade.
            </h1>
            <p class="page-lead">
                Conheça a proposta de atendimento da Dra. Débora Almeida, unindo saúde bucal integral e estética do sorriso no Centro de Petrolina-PE.
            </p>
        </div>
    </header>

    <!-- Apresentação Principal -->
    <section class="section section-about-detail">
        <div class="container">
            <div class="about-grid">
                <!-- Coluna Visual: Foto da Profissional -->
                <div class="about-visual">
                    <div class="about-image-card">
                        <?php 
                        $imagePath = 'assets/img/sobre-debora.jpg';
                        $altText = 'Retrato profissional da Dra. Débora Almeida, cirurgiã-dentista de uniforme preto em Petrolina-PE';
                        $title = 'Retrato Profissional';
                        $subtitle = 'Dra. Débora Almeida — Cirurgiã-Dentista';
                        $aspectRatio = '4/5';
                        $customClass = 'about-detail-photo';
                        $loadingMode = 'eager';
                        $isLcp = true;
                        $objectPosition = 'center 12%';
                        include __DIR__ . '/../app/components/photo-frame.php';
                        ?>
                    </div>

                    <div class="trust-summary-card">
                        <div class="trust-summary-icon" aria-hidden="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                        </div>
                        <div>
                            <strong>Cirurgiã-Dentista</strong>
                            <p><?= e($site['cro']) ?> &bull; Atendimento em Petrolina-PE</p>
                        </div>
                    </div>
                </div>

                <!-- Coluna de Texto: Filosofia e Escuta -->
                <div class="about-content">
                    <h2 class="section-title">
                        Uma odontologia que respeita a sua singularidade.
                    </h2>
                    
                    <div class="about-prose">
                        <p>
                            A prática clínica da Dra. Débora Almeida parte da premissa de que cada paciente chega ao consultório com uma história, expectativas e necessidades próprias. Por isso, o atendimento não segue roteiros rígidos ou promessas padronizadas: ele começa com uma escuta cuidadosa.
                        </p>
                        <p>
                            O objetivo é proporcionar uma experiência serena, onde cada etapa do planejamento seja compreendida com transparência. Seja na busca por harmonização estética através de lentes em resina ou na manutenção rotineira da saúde gengival, a prioridade é sempre o equilíbrio biológico e a naturalidade.
                        </p>
                        <p>
                            No consultório situado no Empresarial Trade Center, o acolhimento acontece com hora marcada, garantindo que o tempo da consulta seja inteiramente dedicado à atenção clínica detalhada.
                        </p>
                    </div>

                    <!-- Dados profissionais divulgados para apresentação do protótipo -->
                    <div class="bio-validation-box">
                        <div class="validation-box-header">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                            <h3>Ficha Informativa da Profissional</h3>
                        </div>
                        <dl class="bio-data-list">
                            <div class="bio-data-row">
                                <dt>Nome Completo:</dt>
                                <dd><?= e($site['name']) ?></dd>
                            </div>
                            <div class="bio-data-row">
                                <dt>Inscrição Profissional:</dt>
                                <dd><?= e($site['cro']) ?> (Conselho Regional de Odontologia de Pernambuco)</dd>
                            </div>
                            <div class="bio-data-row">
                                <dt>Áreas Divulgadas:</dt>
                                <dd>Estética do Sorriso (Lentes em Resina, Clareamento Dental), Profilaxia, Cirurgia Oral e Ortodontia.</dd>
                            </div>
                            <div class="bio-data-row">
                                <dt>Local de Atendimento:</dt>
                                <dd><?= e($site['address']['formatted']) ?></dd>
                            </div>
                        </dl>
                    </div>

                    <div class="about-action-row">
                        <a href="<?= e(getWhatsAppUrl($site, 'Olá Dra. Débora, conheci sua história pelo site e gostaria de agendar uma avaliação.')) ?>" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="btn btn-primary btn-lg"
                           aria-label="Agendar avaliação no WhatsApp (abre em nova aba)">
                            <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                <path d="m9 16 2 2 4-4"></path>
                            </svg>
                            Agendar avaliação no WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Perguntas Frequentes sobre a Profissional -->
    <section class="section section-faq bg-branco">
        <div class="container container-narrow">
            <div class="section-header text-center">
                <span class="section-badge">Esclarecimentos</span>
                <h2 class="section-title">Dúvidas sobre o atendimento</h2>
                <p class="section-subtitle">Informações práticas sobre como funciona o acolhimento da Dra. Débora Almeida.</p>
            </div>

            <div class="faq-accordion">
                <?php 
                $aboutFaqs = [
                    [
                        'question' => 'Onde o consultório está localizado em Petrolina?',
                        'answer' => 'O consultório fica no Empresarial Trade Center, na Rua Joaquim Nabuco, sala 1406 (14º andar), no Centro de Petrolina-PE. O edifício conta com elevadores, portaria executiva e ambiente acessível.',
                    ],
                    [
                        'question' => 'Como é conduzida a primeira consulta de avaliação?',
                        'answer' => 'A primeira consulta é voltada para um exame clínico completo, diálogo detalhado sobre queixas e desejos do paciente e avaliação das condições de dentes e gengivas antes de propor qualquer intervenção.',
                    ],
                    [
                        'question' => 'É necessário agendar horário com antecedência?',
                        'answer' => 'Sim. O atendimento é realizado exclusivamente com hora marcada para garantir que cada paciente receba atenção com tranquilidade, sem espera excessiva.',
                    ],
                ];
                foreach ($aboutFaqs as $index => $faq):
                    include __DIR__ . '/../app/components/faq-item.php';
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Final Discreto -->
    <section class="section section-subtle-cta">
        <div class="container container-narrow text-center">
            <h2 class="subtle-cta-title">Agende sua visita ao consultório</h2>
            <p class="subtle-cta-desc">
                Inicie uma conversa diretamente no WhatsApp para verificar disponibilidade de horários no Empresarial Trade Center.
            </p>
            <a href="<?= e(getWhatsAppUrl($site)) ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-primary btn-lg"
               aria-label="Falar com a Dra. Débora no WhatsApp (abre em nova aba)">
                Falar com a Dra. Débora no WhatsApp
            </a>
        </div>
    </section>

</main>

<?php require __DIR__ . '/../app/partials/footer.php'; ?>
