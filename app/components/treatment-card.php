<?php
declare(strict_types=1);

/**
 * Componente: Cartão de Tratamento / Cuidado
 * 
 * @param array $treatment Array com dados do tratamento ('title', 'badge', 'description', 'icon', 'url')
 */
$iconName = $treatment['icon'] ?? 'sparkles';
$cardUrl = $treatment['url'] ?? null;
?>
<div class="treatment-card">
    <div class="treatment-icon-wrap" aria-hidden="true">
        <?php if ($iconName === 'sparkles'): ?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="m12 3-1.9 5.8a2 2 0 0 1-1.3 1.3L3 12l5.8 1.9a2 2 0 0 1 1.3 1.3L12 21l1.9-5.8a2 2 0 0 1 1.3-1.3L21 12l-5.8-1.9a2 2 0 0 1-1.3-1.3Z"/>
            </svg>
        <?php elseif ($iconName === 'sun'): ?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="4"/>
                <path d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32 1.41 1.41M2 12h2m16 0h2M6.34 17.66l-1.41 1.41m14.14-14.14-1.41 1.41"/>
            </svg>
        <?php elseif ($iconName === 'shield-check'): ?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                <path d="m9 12 2 2 4-4"/>
            </svg>
        <?php elseif ($iconName === 'activity'): ?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
            </svg>
        <?php elseif ($iconName === 'git-commit'): ?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="3"/>
                <line x1="3" y1="12" x2="9" y2="12"/>
                <line x1="15" y1="12" x2="21" y2="12"/>
            </svg>
        <?php else: ?>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/>
                <path d="m9 12 2 2 4-4"/>
            </svg>
        <?php endif; ?>
    </div>

    <span class="treatment-badge"><?= e($treatment['badge'] ?? 'Cuidado Odontológico') ?></span>
    <h3 class="treatment-title"><?= e($treatment['title']) ?></h3>
    <p class="treatment-description"><?= e($treatment['description']) ?></p>

    <div class="treatment-footer">
        <?php if (!empty($cardUrl)): ?>
            <a href="<?= e($cardUrl) ?>" class="treatment-more-link">
                Saiba mais sobre este cuidado &rarr;
            </a>
        <?php else: ?>
            <span class="treatment-note">Indicação sob avaliação clínica individual</span>
        <?php endif; ?>
    </div>
</div>

