<?php
declare(strict_types=1);

/**
 * Componente: Moldura de Fotografia Editorial / Placeholder
 * 
 * Verifica se a fotografia real existe no sistema de arquivos.
 * Quando existente, exibe tag <picture> com WebP prioritário (se gerado)
 * e fallback JPEG/PNG, atributos de dimensão para prevenção de CLS,
 * e configuração otimizada de carregamento (eager/LCP ou lazy).
 * 
 * Caso não exista, exibe um placeholder editorial sereno e elegante,
 * garantindo que jamais seja exibido um rosto ou imagem fictícia.
 * 
 * @param string $imagePath Caminho relativo a partir de public/ (ex: 'assets/img/dra-debora.jpg')
 * @param string $altText Texto alternativo descritivo e factual
 * @param string $title Título explicativo do placeholder
 * @param string $subtitle Subtítulo ou legenda de substituição
 * @param string $aspectRatio Proporção da imagem ('4/5', '1/1', '16/9', etc.)
 * @param string $customClass Classe CSS opcional
 * @param string $loadingMode Modo de carregamento ('lazy' ou 'eager')
 * @param bool $isLcp Se é elemento LCP prioritário (adiciona fetchpriority="high")
 * @param int|null $imgWidth Largura intrínseca para CLS
 * @param int|null $imgHeight Altura intrínseca para CLS
 * @param string $objectPosition Posição focal do enquadramento CSS (ex: 'center 15%')
 */
$fullServerPath = dirname(__DIR__, 2) . '/public/' . ltrim($imagePath, '/');
$hasRealImage = file_exists($fullServerPath);
$ratio = $aspectRatio ?? '4/5';
$cssClass = $customClass ?? '';
$loading = $loadingMode ?? 'lazy';
$isHighPriority = $isLcp ?? false;
$focalPosition = $objectPosition ?? 'center 15%';

// Detecta arquivo WebP gerado localmente
$webpPath = null;
$webpCandidate = preg_replace('/\.(jpe?g|png)$/i', '.webp', $imagePath);
if ($webpCandidate !== null && $webpCandidate !== $imagePath) {
    $fullWebpPath = dirname(__DIR__, 2) . '/public/' . ltrim($webpCandidate, '/');
    if (file_exists($fullWebpPath)) {
        $webpPath = $webpCandidate;
    }
}

// Resolução de dimensões para prevenir Cumulative Layout Shift (CLS)
if (!isset($imgWidth) || !isset($imgHeight)) {
    match ($ratio) {
        '1/1' => [$imgWidth, $imgHeight] = [600, 600],
        '3/4' => [$imgWidth, $imgHeight] = [480, 640],
        '4/3' => [$imgWidth, $imgHeight] = [640, 480],
        '16/9' => [$imgWidth, $imgHeight] = [800, 450],
        default => [$imgWidth, $imgHeight] = [540, 675], // 4/5
    };
}
?>
<div class="photo-frame-wrapper <?= e($cssClass) ?>" style="--frame-aspect-ratio: <?= e($ratio) ?>;">
    <?php if ($hasRealImage): ?>
        <!-- FOTO REAL DA PROFISSIONAL / CONSULTÓRIO -->
        <picture class="photo-real-picture">
            <?php if ($webpPath !== null): ?>
                <source srcset="<?= e($webpPath) ?>" type="image/webp">
            <?php endif; ?>
            <img src="<?= e($imagePath) ?>" 
                 alt="<?= e($altText) ?>" 
                 class="photo-real-img" 
                 width="<?= e((string)$imgWidth) ?>"
                 height="<?= e((string)$imgHeight) ?>"
                 loading="<?= e($loading) ?>"
                 <?php if ($isHighPriority): ?>fetchpriority="high"<?php endif; ?>
                 decoding="async"
                 style="object-position: <?= e($focalPosition) ?>;">
        </picture>
    <?php else: ?>
        <!-- ESPAÇO RESERVADO PARA FOTO REAL (Substituir por arquivo em public/<?= e($imagePath) ?>) -->
        <div class="editorial-placeholder-frame" aria-label="<?= e($altText) ?>">
            <div class="placeholder-layer-pattern" aria-hidden="true"></div>
            <div class="placeholder-inner-border" aria-hidden="true"></div>
            
            <div class="placeholder-caption-block">
                <div class="placeholder-icon-wrap" aria-hidden="true">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                </div>
                <strong class="placeholder-headline"><?= e($title) ?></strong>
                <span class="placeholder-subheadline"><?= e($subtitle) ?></span>
            </div>
        </div>
    <?php endif; ?>
</div>
