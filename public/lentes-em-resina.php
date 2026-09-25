<?php
declare(strict_types=1);

/**
 * Dra. Débora Almeida — Lentes em Resina
 * 
 * Conteúdo educativo sobre lentes em resina composta, processo de avaliação,
 * orientações de manutenção e FAQ ético em conformidade com o CFO.
 */

$site = require __DIR__ . '/../app/config/site.php';

$pageTitle = 'Lentes em Resina em Petrolina-PE | Dra. Débora Almeida';
$pageDescription = 'Orientações educativas sobre lentes em resina dental em Petrolina-PE com a Dra. Débora Almeida. Planejamento individualizado e estética com naturalidade.';

require __DIR__ . '/../app/partials/head.php';
require __DIR__ . '/../app/partials/header.php';

$breadcrumbs = [
    ['label' => 'Início', 'url' => 'index.php'],
    ['label' => 'Lentes em Resina', 'url' => null],
];
require __DIR__ . '/../app/components/breadcrumbs.php';
?>

<main id="main-content" class="main-content internal-page">

    <!-- Cabeçalho Editorial do Tratamento -->
    <header class="page-hero">
        <div class="container container-narrow text-center">
            <span class="section-badge">Odontologia Estética</span>
            <h1 class="page-title">
                Lentes em Resina: harmonia e naturalidade para o seu sorriso.
            </h1>
            <p class="page-lead">
                Uma alternativa estética conservadora para valorizar formato, cor e proporção dos dentes, sempre planejada a partir de avaliação clínica individual.
            </p>
        </div>
    </header>

    <!-- Conteúdo Educativo -->
    <section class="section section-treatment-detail">
        <div class="container">
            <div class="treatment-detail-grid">
                <!-- Coluna Principal: Explicação Educativa -->
                <div class="treatment-detail-main">
                    <div class="treatment-prose">
                        <h2>O que são as lentes em resina?</h2>
                        <p>
                            As lentes em resina são finas camadas de compósito resinoso de alta estética e resistência que são esculpidas e aderidas sobre a superfície externa dos dentes. Elas permitem harmonizar pequenas irregularidades de formato, fechar espaços indesejados (diastemas), corrigir pequenas fraturas e equilibrar a tonalidade do sorriso.
                        </p>
                        <p>
                            Diferente de abordagens mais invasivas, as lentes em resina têm como premissa a preservação máxima da estrutura natural do esmalte dentário. O foco da Dra. Débora Almeida é proporcionar um resultado que respeite a idade, os traços faciais e a anatomia de cada pessoa, evitando o aspecto artificial ou excessivamente monocromático.
                        </p>

                        <h3>Etapas do Planejamento e Execução</h3>
                        <p>
                            Para que o procedimento alcance longevidade e equilíbrio com a mastigação, cada caso segue um protocolo clínico criterioso:
                        </p>

                        <div class="steps-list">
                            <div class="step-card">
                                <span class="step-num">01</span>
                                <div class="step-body">
                                    <h4>Exame Clínico e Radiográfico</h4>
                                    <p>Avaliação detalhada da saúde das gengivas, ausência de cáries ou infiltrações e exame da mordida (oclusão).</p>
                                </div>
                            </div>
                            <div class="step-card">
                                <span class="step-num">02</span>
                                <div class="step-body">
                                    <h4>Planejamento Estético Individualizado</h4>
                                    <p>Análise de proporções e escolha das resinas que melhor mimetizam a cor, translucidez e textura do esmalte natural.</p>
                                </div>
                            </div>
                            <div class="step-card">
                                <span class="step-num">03</span>
                                <div class="step-body">
                                    <h4>Aplicação, Escultura e Acabamento</h4>
                                    <p>Execução cuidadosa com atenção milimétrica às bordas e contornos, seguida de polimento de alto brilho.</p>
                                </div>
                            </div>
                            <div class="step-card">
                                <span class="step-num">04</span>
                                <div class="step-body">
                                    <h4>Manutenção e Acompanhamento</h4>
                                    <p>Consultas periódicas de polimento e controle para assegurar a beleza e integridade das lentes ao longo dos anos.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Aviso Ético em Destaque -->
                        <div class="ethical-notice-card">
                            <div class="notice-icon" aria-hidden="true">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    <circle cx="12" cy="11" r="1"></circle>
                                    <line x1="12" y1="7" x2="12" y2="7.01"></line>
                                </svg>
                            </div>
                            <div class="notice-text">
                                <strong>Importante sobre a indicação do tratamento:</strong>
                                <p>
                                    A indicação de lentes em resina depende obrigatoriamente de consulta presencial. Condições como bruxismo severo não controlado, perdas ósseas ou alterações estruturais graves exigem condutas prévias ou alternativas. Conforme as normas éticas do CFO (Resolução 196/2019), os resultados variam biologicamente de pessoa para pessoa e não devem ser prometidos previamente.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Coluna Lateral: Resumo de Atendimento e CTA -->
                <aside class="treatment-detail-sidebar">
                    <div class="sidebar-card">
                        <h3 class="sidebar-title">Resumo do Cuidado</h3>
                        <ul class="sidebar-features-list">
                            <li>
                                <strong>Indicação:</strong>
                                <span>Harmonização sutil de formato, cor e diastemas.</span>
                            </li>
                            <li>
                                <strong>Princípio:</strong>
                                <span>Preservação máxima do dente e acabamento natural.</span>
                            </li>
                            <li>
                                <strong>Requisito:</strong>
                                <span>Gengivas saudáveis e avaliação clínica individual.</span>
                            </li>
                            <li>
                                <strong>Local:</strong>
                                <span>Empresarial Trade Center, sala 1406, Petrolina-PE.</span>
                            </li>
                        </ul>

                        <div class="sidebar-cta-wrap">
                            <a href="<?= e(getWhatsAppUrl($site, 'Olá Dra. Débora, gostaria de agendar uma avaliação para saber mais sobre lentes em resina.')) ?>" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="btn btn-primary btn-full"
                               aria-label="Solicitar avaliação de lentes em resina no WhatsApp (abre em nova aba)">
                                Solicitar avaliação no WhatsApp
                            </a>
                            <p class="sidebar-cta-note">
                                Tire dúvidas sobre o procedimento diretamente com a equipe.
                            </p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- FAQ Específico sobre Lentes em Resina -->
    <section class="section section-faq bg-branco">
        <div class="container container-narrow">
            <div class="section-header text-center">
                <span class="section-badge">Dúvidas Frequentes</span>
                <h2 class="section-title">Perguntas sobre Lentes em Resina</h2>
                <p class="section-subtitle">Respostas objetivas para ajudar no seu entendimento antes da consulta.</p>
            </div>

            <div class="faq-accordion">
                <?php 
                $lentesFaqs = [
                    [
                        'question' => 'É sempre necessário desgastar o dente para colocar lentes em resina?',
                        'answer' => 'Não necessariamente. Em muitos casos, as lentes em resina podem ser adicionadas com desgaste mínimo ou até mesmo sem desgaste dental prévio (técnica aditiva), dependendo do volume original do dente e do objetivo do planejamento.',
                    ],
                    [
                        'question' => 'Qual é a durabilidade das lentes em resina e como funciona a manutenção?',
                        'answer' => 'A durabilidade das resinas compostas depende dos hábitos de mastigação, higiene e visitas regulares de controle. Recomenda-se realizar revisões periódicas (geralmente a cada 6 meses) para profilaxia e repolimento da superfície, preservando o brilho e a lisura.',
                    ],
                    [
                        'question' => 'Quem aperta ou range os dentes (bruxismo) pode fazer lentes?',
                        'answer' => 'Pacientes com bruxismo podem realizar o procedimento, desde que a condição seja diagnosticada e acompanhada adequadamente. Frequentemente, é indispensável o uso de placa de proteção oclusal durante o sono para proteger tanto os dentes naturais quanto as restaurações.',
                    ],
                    [
                        'question' => 'As lentes em resina podem manchar ao longo do tempo?',
                        'answer' => 'As resinas estéticas modernas possuem excelente estabilidade de cor. No entanto, o consumo frequente de substâncias com pigmentos fortes (café, vinho, chás) pode demandar polimentos periódicos para manter a luminosidade ideal.',
                    ],
                    [
                        'question' => 'Quanto custa colocar lentes em resina?',
                        'answer' => 'Em respeito ao Código de Ética Odontológica (CFO 196/2019), valores de procedimentos não podem ser divulgados publicamente pela internet. O orçamento e o planejamento dependem da quantidade de dentes envolvidos, da complexidade do caso e das necessidades específicas identificadas em exame presencial.',
                    ],
                ];
                foreach ($lentesFaqs as $index => $faq):
                    include __DIR__ . '/../app/components/faq-item.php';
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="section section-subtle-cta">
        <div class="container container-narrow text-center">
            <h2 class="subtle-cta-title">Descubra se as lentes são indicadas para você</h2>
            <p class="subtle-cta-desc">
                Agende uma consulta individual no Centro de Petrolina para tirar dúvidas e planejar seu atendimento com serenidade.
            </p>
            <a href="<?= e(getWhatsAppUrl($site, 'Olá Dra. Débora, gostaria de agendar uma consulta sobre lentes em resina.')) ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-primary btn-lg"
               aria-label="Agendar avaliação de lentes em resina pelo WhatsApp (abre em nova aba)">
                Agendar avaliação pelo WhatsApp
            </a>
        </div>
    </section>

</main>

<?php require __DIR__ . '/../app/partials/footer.php'; ?>

