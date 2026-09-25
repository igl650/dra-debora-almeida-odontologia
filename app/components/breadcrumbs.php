<?php
declare(strict_types=1);

/**
 * Componente: Breadcrumbs (Trilha de Navegação)
 * 
 * @param array $breadcrumbs Lista de itens com 'label' e 'url' (url nulo para a página atual)
 */
if (empty($breadcrumbs)) {
    return;
}
?>
<nav class="breadcrumbs-nav" aria-label="Trilha de navegação">
    <div class="container">
        <ol class="breadcrumbs-list">
            <?php foreach ($breadcrumbs as $index => $item): ?>
                <?php $isLast = ($index === count($breadcrumbs) - 1); ?>
                <li class="breadcrumb-item <?= $isLast ? 'is-active' : '' ?>">
                    <?php if (!$isLast && !empty($item['url'])): ?>
                        <a href="<?= e($item['url']) ?>" class="breadcrumb-link"><?= e($item['label']) ?></a>
                        <span class="breadcrumb-separator" aria-hidden="true">&rsaquo;</span>
                    <?php else: ?>
                        <span class="breadcrumb-current" aria-current="page"><?= e($item['label']) ?></span>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</nav>

