<?php

/**
 * htmlHead.php - SUPERONG Mobile App
 * HTML <head> section
 * 99% Similarity Required
 */

// Load initData if not already loaded
if (!isset($siteConfig)) {
    include_once(__DIR__ . '/initData.php');
}

// Set default page name if not set
if (!isset($pageName)) {
    $pageName = 'home';
}

// Set default page title if not set
if (!isset($pageTitle)) {
    $pageTitle = $siteConfig['siteName'];
}
?>
<!DOCTYPE html>
<html lang="<?php echo getLang(); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page Title -->
    <title><?php echo e($pageTitle); ?></title>

    <!-- Mobile Web App -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="<?php echo e($siteConfig['siteName']); ?>">
    <meta name="theme-color" content="#2d2d5a">

    <!-- Prevent phone number detection -->
    <meta name="format-detection" content="telephone=no">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="resource/favicon.png">
    <link rel="apple-touch-icon" href="resource/app-icon.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts - Noto Sans SC for Chinese -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/style2.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/components.css'); ?>">

    <!-- Page specific CSS if exists -->
    <?php if (isset($pageCSS) && !empty($pageCSS)): ?>
        <link rel="stylesheet" href="<?php echo asset($pageCSS); ?>">
    <?php endif; ?>
</head>

<body class="sp-app <?php echo isset($bodyClass) ? e($bodyClass) : ''; ?>">
    <div class="sp-wrapper">