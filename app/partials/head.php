<?php
declare(strict_types=1);

/**
 * Dra. Débora Almeida — Parcial: Head
 * 
 * Metadados, tipografia editorial (Instrument Serif + Inter),
 * favicon vetorial, SEO local com dados estruturados JSON-LD (Dentist)
 * apenas com dados confirmados (sem ratings falsos nem horários definitivos).
 */

$currentScript = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$siteUrl = rtrim($site['base_url'] ?? '', '/');
$canonicalHref = $siteUrl ? ($siteUrl . '/' . ($currentScript === 'index.php' ? '' : $currentScript)) : null;

// JSON-LD Estruturado do tipo Dentist com dados verificados
$schemaDentist = [
    '@context' => 'https://schema.org',
    '@type' => 'Dentist',
    'name' => $site['name'] . ' - ' . $site['subtitle_signature'],
    'image' => $siteUrl ? ($siteUrl . '/assets/img/dra-debora.jpg') : 'assets/img/dra-debora.jpg',
    'description' => $site['meta_description'],
    'telephone' => '+55-87-99112-3727',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => $site['address']['street'] . ', ' . $site['address']['room'],
        'addressLocality' => $site['city'],
        'addressRegion' => $site['state'],
        'postalCode' => $site['address']['cep'],
        'addressCountry' => 'BR',
    ],
    'hasMap' => $site['google_maps_url'],
    'sameAs' => [
        $site['social']['instagram'],
        $site['social']['facebook'],
    ],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle ?? ($site['name'] . ' | ' . $site['profession'] . ' em ' . $site['city'])) ?></title>
    <meta name="description" content="<?= e($pageDescription ?? $site['meta_description']) ?>">
    <meta name="author" content="<?= e($site['name']) ?>">
    <meta name="theme-color" content="#FAF7F2">
    <meta name="robots" content="noindex, nofollow">

    <?php if ($canonicalHref): ?>
        <link rel="canonical" href="<?= e($canonicalHref) ?>">
    <?php endif; ?>

    <!-- Open Graph Básico -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($pageTitle ?? ($site['name'] . ' | ' . $site['profession'] . ' em ' . $site['city'])) ?>">
    <meta property="og:description" content="<?= e($pageDescription ?? $site['meta_description']) ?>">
    <?php if ($canonicalHref): ?>
        <meta property="og:url" content="<?= e($canonicalHref) ?>">
    <?php endif; ?>
    <meta property="og:site_name" content="<?= e($site['name']) ?>">

    <!-- Tipografia Editorial: Instrument Serif & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Autoral -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Favicon Oficial a partir do Símbolo da Marca -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/img/favicon-32x32.png">

    <!-- Dados Estruturados JSON-LD (Schema.org / Dentist) -->
    <script type="application/ld+json">
    <?= json_encode($schemaDentist, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>
</head>
<body class="bg-porcelana text-espresso">
