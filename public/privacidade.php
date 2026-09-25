<?php
declare(strict_types=1);

$site = require __DIR__ . '/../app/config/site.php';
$pageTitle = 'Privacidade | Dra. Débora Almeida';
$pageDescription = 'Informações sobre o funcionamento e a privacidade deste site modelo da Dra. Débora Almeida.';

require __DIR__ . '/../app/partials/head.php';
require __DIR__ . '/../app/partials/header.php';

$breadcrumbs = [
    ['label' => 'Início', 'url' => 'index.php'],
    ['label' => 'Privacidade', 'url' => null],
];
require __DIR__ . '/../app/components/breadcrumbs.php';
?>

<main id="main-content" class="main-content internal-page">
    <header class="page-hero">
        <div class="container container-narrow text-center">
            <span class="section-badge">Transparência</span>
            <h1 class="page-title">Privacidade</h1>
            <p class="page-lead">Como funciona este site modelo e quais serviços externos podem receber dados durante a navegação.</p>
        </div>
    </header>

    <section class="section section-privacy-content">
        <div class="container container-narrow">
            <div class="privacy-document-card">
                <div class="privacy-header-meta">
                    <p><strong>Última atualização:</strong> 25 de setembro de 2026</p>
                    <p>Esta página descreve o protótipo de apresentação. Uma política definitiva deverá refletir a operação real do consultório e da hospedagem antes do lançamento oficial.</p>
                </div>
                <div class="privacy-prose">
                    <h2>Dados enviados pelo visitante</h2>
                    <p>Este site não contém formulário de contato nem solicita informações de saúde. Os botões de agendamento abrem o WhatsApp; a conversa ocorre nessa plataforma externa, conforme as condições de privacidade dela. Evite enviar dados clínicos sensíveis por mensagens antes de receber orientações da profissional.</p>

                    <h2>Serviços utilizados na navegação</h2>
                    <p>O site carrega fontes pelo Google Fonts. Ao acessar a página, o navegador pode enviar dados técnicos, como endereço IP, a esse serviço. A hospedagem também pode tratar dados técnicos de acesso para entregar o site e manter sua segurança. O código deste protótipo não inclui ferramenta de análise de visitantes, pixel de publicidade ou formulário de cadastro.</p>

                    <h2>Links externos</h2>
                    <p>Links para WhatsApp, Google Maps, Instagram e Facebook levam a serviços independentes. Consulte os respectivos avisos de privacidade ao utilizá-los.</p>

                    <h2>Contato e versão definitiva</h2>
                    <p>Para dúvidas sobre este protótipo, utilize o <a href="<?= e(getWhatsAppUrl($site, 'Olá, gostaria de tirar uma dúvida sobre o site da Dra. Débora.')) ?>" target="_blank" rel="noopener noreferrer">canal de contato exibido no site</a>. Antes da publicação oficial, a profissional deverá confirmar a identificação do responsável pelo tratamento, o canal para pedidos de titulares e os fornecedores efetivamente usados.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require __DIR__ . '/../app/partials/footer.php'; ?>
