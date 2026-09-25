<?php
declare(strict_types=1);

/**
 * Dra. Débora Almeida — Cuidados com a Saúde Bucal
 * 
 * Conteúdo educativo sobre prevenção, profilaxia profissional,
 * avaliação para cirurgia oral/extrações e acompanhamento ortodôntico,
 * em estrita conformidade ética (sem uso indevido de títulos de especialista).
 */

$site = require __DIR__ . '/../app/config/site.php';

$pageTitle = 'Cuidados com a Saúde Bucal em Petrolina-PE | Dra. Débora Almeida';
$pageDescription = 'Prevenção, profilaxia dental, cuidados gengivais, avaliação para extrações e acompanhamento oclusal em Petrolina-PE com a Dra. Débora Almeida.';

require __DIR__ . '/../app/partials/head.php';
require __DIR__ . '/../app/partials/header.php';

$breadcrumbs = [
    ['label' => 'Início', 'url' => 'index.php'],
    ['label' => 'Saúde Bucal', 'url' => null],
];
require __DIR__ . '/../app/components/breadcrumbs.php';
?>

<main id="main-content" class="main-content internal-page">

    <!-- Cabeçalho Editorial do Cuidado -->
    <header class="page-hero">
        <div class="container container-narrow text-center">
            <span class="section-badge">Prevenção e Saúde Plena</span>
            <h1 class="page-title">
                A base de um sorriso bonito é uma boca saudável.
            </h1>
            <p class="page-lead">
                Cuidado preventivo contínuo, profilaxia profissional e avaliações clínicas dedicadas para manter seus dentes e gengivas em perfeito equilíbrio.
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
                        <h2>A importância da odontologia preventiva</h2>
                        <p>
                            A odontologia moderna prioriza a prevenção antes de qualquer intervenção estética. Manter os tecidos de suporte dos dentes saudáveis evita inflamações gengivais, perda óssea, sensibilidade e desconfortos que poderiam comprometer tratamentos futuros.
                        </p>
                        <p>
                            No consultório da Dra. Débora Almeida no Centro de Petrolina, o check-up preventivo é um momento de diálogo transparente e avaliação atenta de toda a cavidade oral.
                        </p>

                        <h3>Cuidados Oferecidos no Consultório</h3>

                        <div class="care-topics-stack">
                            <!-- Tópico 1: Profilaxia e Limpeza -->
                            <div class="care-topic-card" id="profilaxia">
                                <div class="topic-header">
                                    <div class="topic-icon-wrap" aria-hidden="true">
                                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                            <path d="m9 12 2 2 4-4"/>
                                        </svg>
                                    </div>
                                    <h4>Profilaxia e Limpeza Profissional</h4>
                                </div>
                                <p>
                                    Remoção mecânica criteriosa da placa bacteriana e do tártaro (cálculo dentário) supra e subgengival, seguida de polimento coronário. Esse cuidado essencial previne gengivite, periodontite e mau hálito, restabelecendo a sensação de leveza e frescor na boca.
                                </p>
                            </div>

                            <!-- Tópico 2: Cirurgia Oral e Extrações -->
                            <div class="care-topic-card" id="cirurgia">
                                <div class="topic-header">
                                    <div class="topic-icon-wrap" aria-hidden="true">
                                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                                        </svg>
                                    </div>
                                    <h4>Avaliação para Cirurgia Oral e Extrações</h4>
                                </div>
                                <p>
                                    Quando a manutenção do dente não é biologicamente viável, ou diante de dentes inclusos/sisos que causam apinhamento ou risco infeccioso, é realizada uma avaliação clínica e radiográfica minuciosa. O procedimento cirúrgico é planejado com anestesia local eficaz e orientação pós-operatória humanizada para uma recuperação tranquila.
                                </p>
                            </div>

                            <!-- Tópico 3: Avaliação Ortodôntica -->
                            <div class="care-topic-card" id="ortodontia">
                                <div class="topic-header">
                                    <div class="topic-icon-wrap" aria-hidden="true">
                                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="3"/>
                                            <line x1="3" y1="12" x2="9" y2="12"/>
                                            <line x1="15" y1="12" x2="21" y2="12"/>
                                        </svg>
                                    </div>
                                    <h4>Acompanhamento e Avaliação Ortodôntica</h4>
                                </div>
                                <p>
                                    O alinhamento dos dentes vai além da harmonia visual: dentes bem posicionados facilitam a escovação, diminuem o acúmulo de alimentos e proporcionam uma mastigação equilibrada. Na consulta, são avaliadas as condições da mordida e o direcionamento adequado para cada caso.
                                </p>
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
                                <strong>Esclarecimento ético sobre áreas de atuação:</strong>
                                <p>
                                    A indicação de procedimentos cirúrgicos ou ortodônticos depende de diagnóstico individual. A citação dos cuidados neste site tem caráter meramente informativo sobre a atuação no consultório e não pressupõe título de especialista formal não registrado.
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
                                <strong>Foco:</strong>
                                <span>Prevenção gengival, higiene e controle de tártaro.</span>
                            </li>
                            <li>
                                <strong>Cirurgia & Extrações:</strong>
                                <span>Avaliação clínica com hora marcada e conforto.</span>
                            </li>
                            <li>
                                <strong>Ortodontia:</strong>
                                <span>Diagnóstico funcional da oclusão e alinhamento.</span>
                            </li>
                            <li>
                                <strong>Local:</strong>
                                <span>Empresarial Trade Center, sala 1406, Petrolina-PE.</span>
                            </li>
                        </ul>

                        <div class="sidebar-cta-wrap">
                            <a href="<?= e(getWhatsAppUrl($site, 'Olá Dra. Débora, gostaria de agendar uma consulta para limpeza e avaliação da saúde bucal.')) ?>" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="btn btn-primary btn-full"
                               aria-label="Agendar avaliação no WhatsApp (abre em nova aba)">
                                Agendar avaliação no WhatsApp
                            </a>
                            <p class="sidebar-cta-note">
                                Cuidado humanizado e atenção à sua saúde bucal.
                            </p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!-- FAQ Específico sobre Saúde Bucal -->
    <section class="section section-faq bg-branco">
        <div class="container container-narrow">
            <div class="section-header text-center">
                <span class="section-badge">Dúvidas Frequentes</span>
                <h2 class="section-title">Perguntas sobre Saúde Bucal e Prevenção</h2>
                <p class="section-subtitle">Orientações úteis para a manutenção da sua saúde no dia a dia.</p>
            </div>

            <div class="faq-accordion">
                <?php 
                $saudeFaqs = [
                    [
                        'question' => 'De quanto em quanto tempo devo fazer limpeza profissional no consultório?',
                        'answer' => 'Para a maioria dos pacientes, recomenda-se uma visita a cada 6 meses. No entanto, pessoas com tendência a acúmulo rápido de tártaro, histórico de gengivite ou em tratamento ortodôntico podem se beneficiar de intervalos mais curtos, definidos na avaliação.',
                    ],
                    [
                        'question' => 'Sangramento na gengiva ao escovar ou passar fio dental é normal?',
                        'answer' => 'Não. O sangramento é o principal sinal de alerta para a presença de gengivite (inflamação causada pelo acúmulo de placa bacteriana). Quando notado, é fundamental agendar uma profilaxia profissional para desinflamar o tecido e receber orientações de higiene.',
                    ],
                    [
                        'question' => 'Quando é realmente necessária a extração de um dente ou siso?',
                        'answer' => 'A extração é indicada quando o dente não pode ser restaurado, quando causa infecções recorrentes, perdas ósseas adjacentes ou quando a falta de espaço na arcada compromete a posição dos dentes vizinhos. A decisão é sempre respaldada por exames de imagem.',
                    ],
                    [
                        'question' => 'Como o alinhamento dos dentes afeta a saúde bucal geral?',
                        'answer' => 'Dentes apinhados ou desalinhados criam áreas de difícil higienização, aumentando a probabilidade de cáries e tártaro. Além disso, uma mordida desequilibrada pode sobrecarregar a articulação da mandíbula (ATM) e causar desgastes anormais no esmalte.',
                    ],
                ];
                foreach ($saudeFaqs as $index => $faq):
                    include __DIR__ . '/../app/components/faq-item.php';
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="section section-subtle-cta">
        <div class="container container-narrow text-center">
            <h2 class="subtle-cta-title">Priorize a saúde do seu sorriso</h2>
            <p class="subtle-cta-desc">
                Agende uma limpeza preventiva ou tire dúvidas sobre extrações e alinhamento no Centro de Petrolina.
            </p>
            <a href="<?= e(getWhatsAppUrl($site, 'Olá Dra. Débora, gostaria de agendar uma consulta para revisão preventiva.')) ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-primary btn-lg"
               aria-label="Agendar consulta pelo WhatsApp (abre em nova aba)">
                Agendar consulta pelo WhatsApp
            </a>
        </div>
    </section>

</main>

<?php require __DIR__ . '/../app/partials/footer.php'; ?>
