<?php
declare(strict_types=1);

/**
 * Dra. Débora Almeida — Clareamento Dental
 * 
 * Conteúdo educativo sobre técnicas supervisionadas de clareamento dental,
 * cuidados com a sensibilidade, saúde do esmalte e FAQ específico.
 */

$site = require __DIR__ . '/../app/config/site.php';

$pageTitle = 'Clareamento Dental em Petrolina-PE | Dra. Débora Almeida';
$pageDescription = 'Informações educativas sobre clareamento dental supervisionado em Petrolina-PE com a Dra. Débora Almeida. Cuidado com o esmalte, conforto e estética natural.';

require __DIR__ . '/../app/partials/head.php';
require __DIR__ . '/../app/partials/header.php';

$breadcrumbs = [
    ['label' => 'Início', 'url' => 'index.php'],
    ['label' => 'Clareamento Dental', 'url' => null],
];
require __DIR__ . '/../app/components/breadcrumbs.php';
?>

<main id="main-content" class="main-content internal-page">

    <!-- Cabeçalho Editorial do Tratamento -->
    <header class="page-hero">
        <div class="container container-narrow text-center">
            <span class="section-badge">Estética e Luminosidade</span>
            <h1 class="page-title">
                Clareamento Dental: luminosidade e segurança para o seu esmalte.
            </h1>
            <p class="page-lead">
                Protocolos supervisionados que respeitam a integridade biológica dos dentes, buscando clarear o sorriso com conforto e previsibilidade.
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
                        <h2>Como funciona o clareamento seguro?</h2>
                        <p>
                            O clareamento dental consiste na quebra de moléculas de pigmentos acumuladas na intimidade do esmalte e da dentina através de agentes oxidantes específicos (como peróxido de hidrogênio ou peróxido de carbamida). Sob a orientação da Dra. Débora Almeida, o procedimento é conduzido de forma estritamente controlada para evitar desmineralização ou sensibilidade desnecessária.
                        </p>
                        <p>
                            Antes de iniciar qualquer técnica, é fundamental realizar um exame diagnóstico para checar se as gengivas estão sadias e se não existem lesões de cárie ou restaurações infiltradas. A saúde bucal básica é sempre o pré-requisito número um para qualquer tratamento estético.
                        </p>

                        <h3>Modalidades Avaliadas em Consulta</h3>
                        <p>
                            O método mais indicado para o seu perfil é definido após a consulta clínica:
                        </p>

                        <div class="steps-list">
                            <div class="step-card">
                                <span class="step-num">A</span>
                                <div class="step-body">
                                    <h4>Clareamento no Consultório</h4>
                                    <p>Realizado em sessões clínicas com proteção especial para as gengivas e aplicação de gel clareador em dosagem controlada pelo profissional.</p>
                                </div>
                            </div>
                            <div class="step-card">
                                <span class="step-num">B</span>
                                <div class="step-body">
                                    <h4>Clareamento Caseiro Supervisionado</h4>
                                    <p>O paciente utiliza moldeiras transparentes feitas sob medida para sua arcada, aplicando o gel recomendado em casa durante o período estipulado.</p>
                                </div>
                            </div>
                            <div class="step-card">
                                <span class="step-num">C</span>
                                <div class="step-body">
                                    <h4>Protocolo Combinado</h4>
                                    <p>Em situações selecionadas, a associação de etapas no consultório com o acompanhamento domiciliar oferece maior estabilidade e uniformidade.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Aviso Ético em Destaque -->
                        <div class="ethical-notice-card">
                            <div class="notice-icon" aria-hidden="true">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                    <circle cx="12" cy="11" r="1"></circle>
                                    <line x1="12" y1="7" x2="12.01" y2="7.01"></line>
                                
                                </svg>
                            </div>
                            <div class="notice-text">
                                <strong>Variação biológica do clareamento:</strong>
                                <p>
                                    Cada dente possui características únicas de espessura de esmalte, coloração básica e mineralização. Por essa razão, a odontologia ética não promete escalas de cores predefinidas nem garante resultados idênticos entre pacientes diferentes.
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
                                <span>Clareamento de dentes manchados ou escurecidos.</span>
                            </li>
                            <li>
                                <strong>Supervisão:</strong>
                                <span>Acompanhamento clínico presencial durante todo o processo.</span>
                            </li>
                            <li>
                                <strong>Conforto:</strong>
                                <span>Protocolos preventivos para controle da sensibilidade.</span>
                            </li>
                            <li>
                                <strong>Local:</strong>
                                <span>Empresarial Trade Center, sala 1406, Petrolina-PE.</span>
                            </li>
                        </ul>

                        <div class="sidebar-cta-wrap">
                            <a href="<?= e(getWhatsAppUrl($site, 'Olá Dra. Débora, gostaria de agendar uma avaliação para saber mais sobre o clareamento dental.')) ?>" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="btn btn-primary btn-full"
                               aria-label="Solicitar avaliação de clareamento no WhatsApp (abre em nova aba)">
                                Solicitar avaliação no WhatsApp
                            </a>
                            <p class="sidebar-cta-note">
                                Tire dúvidas sobre o clareamento diretamente com nossa equipe.
                            </p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- FAQ Específico sobre Clareamento -->
    <section class="section section-faq bg-branco">
        <div class="container container-narrow">
            <div class="section-header text-center">
                <span class="section-badge">Dúvidas Frequentes</span>
                <h2 class="section-title">Perguntas sobre Clareamento Dental</h2>
                <p class="section-subtitle">Esclarecimentos essenciais para um tratamento seguro e confortável.</p>
            </div>

            <div class="faq-accordion">
                <?php 
                $clareamentoFaqs = [
                    [
                        'question' => 'O clareamento dental causa dor ou sensibilidade nos dentes?',
                        'answer' => 'Uma sensibilidade transitória pode ocorrer em alguns pacientes, variando conforme a resposta biológica. Com o planejamento adequado da concentração do gel e o uso de agentes dessensibilizantes pré e pós-tratamento, o desconforto é significativamente minimizado.',
                    ],
                    [
                        'question' => 'O clareamento desgasta ou enfraquece o esmalte dentário?',
                        'answer' => 'Não, desde que realizado com produtos regulamentados pela Anvisa e sob supervisão odontológica. Os géis clareadores agem sobre os pigmentos internos sem desgastar ou dissolver a estrutura mineral do dente.',
                    ],
                    [
                        'question' => 'Quem tem restaurações ou resinas nos dentes da frente pode clarear?',
                        'answer' => 'Sim, mas é importante saber que os géis clareadores não alteram a cor de resinas compostas ou porcelanas já existentes. Caso haja diferença de tonalidade ao final do clareamento, pode ser recomendada a troca dessas restaurações antigas.',
                    ],
                    [
                        'question' => 'Preciso cortar totalmente café, chá ou alimentos escuros durante o tratamento?',
                        'answer' => 'Não é necessário fazer dietas restritivas extremas. Recomenda-se apenas moderação e boa higiene após o consumo de alimentos altamente pigmentados durante o período de tratamento para otimizar os resultados.',
                    ],
                    [
                        'question' => 'Quanto tempo dura o resultado do clareamento?',
                        'answer' => 'A estabilidade do clareamento depende principalmente dos hábitos de vida, alimentação e higiene do paciente. Com visitas regulares e profilaxia periódica, o resultado pode se manter satisfatório por bastante tempo, com retoques eventuais quando indicado.',
                    ],
                ];
                foreach ($clareamentoFaqs as $index => $faq):
                    include __DIR__ . '/../app/components/faq-item.php';
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="section section-subtle-cta">
        <div class="container container-narrow text-center">
            <h2 class="subtle-cta-title">Avalie a técnica ideal para o seu sorriso</h2>
            <p class="subtle-cta-desc">
                Agende uma conversa clínica com a Dra. Débora Almeida no Centro de Petrolina para receber orientações individualizadas.
            </p>
            <a href="<?= e(getWhatsAppUrl($site, 'Olá Dra. Débora, gostaria de agendar uma consulta sobre clareamento dental.')) ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-primary btn-lg"
               aria-label="Agendar avaliação pelo WhatsApp (abre em nova aba)">
                Agendar avaliação pelo WhatsApp
            </a>
        </div>
    </section>

</main>

<?php require __DIR__ . '/../app/partials/footer.php'; ?>

