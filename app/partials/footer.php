<?php
declare(strict_types=1);

/**
 * Dra. Débora Almeida — Parcial: Rodapé
 * 
 * Rodapé institucional com canais de contato, endereço, links de navegação,
 * link para política de privacidade, conformidade ética e botão flutuante de WhatsApp.
 */
?>
<footer class="site-footer" id="contato">
    <div class="footer-container">
        <div class="footer-grid">
            <!-- Coluna 1: Identidade e Conceito -->
            <div class="footer-col footer-col-brand">
                <a href="index.php" class="brand-signature brand-signature-light" aria-label="<?= e($site['name']) ?> — Início">
                    <img src="assets/img/simbolo-oficial.png" 
                         alt="" 
                         class="brand-symbol footer-brand-symbol" 
                         width="48" 
                         height="48" 
                         aria-hidden="true">
                    <div class="brand-text-block">
                        <span class="brand-title"><?= e($site['title_signature']) ?></span>
                        <span class="brand-subtitle"><?= e($site['subtitle_signature']) ?></span>
                    </div>
                </a>
                <p class="footer-description">
                    Cuidado odontológico em Petrolina com foco na estética do sorriso e na saúde bucal, através de um atendimento sereno, acolhedor e individualizado.
                </p>
                <div class="footer-social-links">
                    <a href="<?= e($site['social']['instagram']) ?>" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="social-link" 
                       aria-label="Instagram da Dra. Débora Almeida (abre em nova aba)"
                       id="footer-social-ig">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="<?= e($site['social']['facebook']) ?>" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="social-link" 
                       aria-label="Facebook da Dra. Débora Almeida (abre em nova aba)"
                       id="footer-social-fb">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Coluna 2: Contato e Endereço -->
            <div class="footer-col">
                <h3 class="footer-heading">Atendimento</h3>
                <ul class="footer-contact-list">
                    <li class="footer-contact-item">
                        <svg class="footer-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <address class="footer-address">
                            <?= e($site['address']['building']) ?><br>
                            <?= e($site['address']['room']) ?><br>
                            <?= e($site['address']['district']) ?>, <?= e($site['city']) ?> - <?= e($site['state']) ?>
                        </address>
                    </li>
                    <li class="footer-contact-item">
                        <svg class="footer-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <a href="<?= e($site['phone_link']) ?>" class="footer-link">
                            <?= e($site['phone']) ?>
                        </a>
                    </li>
                    <li class="footer-contact-item">
                        <svg class="footer-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <span><?= e($site['cro']) ?></span>
                    </li>
                </ul>
            </div>

            <!-- Coluna 3: Links Institucionais e Cuidados -->
            <div class="footer-col">
                <h3 class="footer-heading">Navegação</h3>
                <ul class="footer-nav-list">
                    <li><a href="index.php" class="footer-nav-link">Página Inicial</a></li>
                    <li><a href="sobre.php" class="footer-nav-link">Sobre a Profissional</a></li>
                    <li><a href="lentes-em-resina.php" class="footer-nav-link">Lentes em Resina</a></li>
                    <li><a href="clareamento-dental.php" class="footer-nav-link">Clareamento Dental</a></li>
                    <li><a href="saude-bucal.php" class="footer-nav-link">Saúde Bucal</a></li>
                    <li><a href="contato.php" class="footer-nav-link">Contato e Localização</a></li>
                    <li><a href="privacidade.php" class="footer-nav-link">Política de Privacidade</a></li>
                </ul>
            </div>

            <!-- Coluna 4: Horários e Rotas -->
            <div class="footer-col">
                <h3 class="footer-heading">Funcionamento</h3>
                <p class="footer-hours-note">
                    Atendimento com hora marcada para acolhimento individualizado.
                </p>
                <div class="footer-hours-status">
                    <span class="status-badge"><?= e($site['hours']['status']) ?></span>
                </div>
                <div class="footer-actions mt-4">
                    <a href="<?= e($site['google_maps_url']) ?>" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="footer-text-cta"
                       id="footer-maps-link"
                       aria-label="Ver rotas no Google Maps (abre em nova aba)">
                        Ver rotas no Google Maps &rarr;
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-bottom-copy">
                <p class="footer-copyright">
                    &copy; <?= date('Y') ?> <?= e($site['name']) ?>. Todos os direitos reservados. <?= e($site['cro']) ?>.
                </p>
                <p class="footer-compliance">
                    Petrolina - PE &bull; Atendimento em conformidade com as normas do Conselho Federal de Odontologia (CFO 196/2019).
                </p>
            </div>
            <div class="footer-bottom-privacy">
                <a href="privacidade.php" class="footer-privacy-link">Política de Privacidade</a>
            </div>
        </div>
    </div>
</footer>

<!-- Botão Flutuante de WhatsApp (Mobile & Acesso Rápido) -->
<a href="<?= e(getWhatsAppUrl($site)) ?>" 
   target="_blank" 
   rel="noopener noreferrer" 
   class="fab-whatsapp" 
   id="fab-whatsapp"
   aria-label="Falar no WhatsApp com a Dra. Débora (abre em nova aba)">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
    </svg>
</a>

<!-- Scripts Autorais Vanilla JS (sem frameworks externos) -->
<script src="assets/js/main.js" defer></script>
</body>
</html>
