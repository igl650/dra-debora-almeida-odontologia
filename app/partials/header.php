<?php
declare(strict_types=1);

/**
 * Dra. Débora Almeida — Parcial: Cabeçalho
 * 
 * Cabeçalho responsivo com assinatura tipográfica provisória,
 * navegação semântica, CTA direto para WhatsApp e menu móvel acessível.
 */
?>
<a href="#main-content" class="skip-link">Pular para o conteúdo principal</a>

<header class="site-header" id="site-header">
    <div class="header-container">
        <!-- Assinatura Oficial da Marca com Símbolo Real -->
        <a href="index.php" class="brand-signature" aria-label="<?= e($site['name']) ?> — <?= e($site['subtitle_signature']) ?>">
            <img src="assets/img/simbolo-oficial.png" 
                 alt="" 
                 class="brand-symbol" 
                 width="46" 
                 height="46" 
                 aria-hidden="true">
            <div class="brand-text-block">
                <span class="brand-title"><?= e($site['title_signature']) ?></span>
                <span class="brand-subtitle"><?= e($site['subtitle_signature']) ?></span>
            </div>
        </a>

        <!-- Navegação Desktop -->
        <nav class="desktop-nav" aria-label="Navegação principal">
            <ul class="nav-list">
                <?php foreach ($site['nav_links'] as $item): ?>
                    <li class="nav-item">
                        <a href="<?= e($item['url']) ?>" class="nav-link"><?= e($item['label']) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <!-- Ações do Cabeçalho -->
        <div class="header-actions">
            <a href="<?= e(getWhatsAppUrl($site)) ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-primary btn-sm header-cta"
               id="nav-cta"
               aria-label="Agendar avaliação pelo WhatsApp (abre em nova aba)">
                Agendar avaliação
            </a>

            <!-- Botão do Menu Celular -->
            <button type="button" 
                    class="menu-toggle" 
                    id="menu-toggle" 
                    aria-expanded="false" 
                    aria-controls="mobile-menu" 
                    aria-label="Abrir menu de navegação">
                <span class="menu-toggle-bars" aria-hidden="true">
                    <span class="bar bar-1"></span>
                    <span class="bar bar-2"></span>
                    <span class="bar bar-3"></span>
                </span>
            </button>
        </div>
    </div>
</header>

<!-- Menu Móvel (Drawer / Gaveta deslizante) -->
<div class="mobile-menu-backdrop" id="mobile-menu-backdrop" aria-hidden="true"></div>

<nav class="mobile-menu" id="mobile-menu" aria-label="Navegação móvel" aria-hidden="true">
    <div class="mobile-menu-inner">
        <div class="mobile-menu-header">
            <a href="index.php" class="brand-signature brand-signature-mobile" aria-label="<?= e($site['name']) ?> — Início">
                <img src="assets/img/simbolo-oficial.png" 
                     alt="" 
                     class="brand-symbol" 
                     width="38" 
                     height="38" 
                     aria-hidden="true">
                <div class="brand-text-block">
                    <span class="brand-title"><?= e($site['title_signature']) ?></span>
                    <span class="brand-subtitle"><?= e($site['subtitle_signature']) ?></span>
                </div>
            </a>
            <button type="button" 
                    class="mobile-menu-close" 
                    id="mobile-menu-close" 
                    aria-label="Fechar menu de navegação">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <ul class="mobile-nav-list">
            <?php foreach ($site['nav_links'] as $item): ?>
                <li class="mobile-nav-item">
                    <a href="<?= e($item['url']) ?>" class="mobile-nav-link"><?= e($item['label']) ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="mobile-menu-footer">
            <a href="<?= e(getWhatsAppUrl($site)) ?>" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-primary btn-full"
               aria-label="Agendar pelo WhatsApp (abre em nova aba)">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="btn-icon">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                </svg>
                Agendar pelo WhatsApp
            </a>

            <div class="mobile-info-block">
                <p class="mobile-info-item">
                    <strong>Localização:</strong><br>
                    <?= e($site['address']['display_short']) ?>
                </p>
                <p class="mobile-info-item">
                    <strong>Registro:</strong> <?= e($site['cro']) ?>
                </p>
            </div>
        </div>
    </div>
</nav>
