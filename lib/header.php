<?php
/**
 * header.php - SUPERONG Mobile App
 * Header component (Home header + Inner page header)
 * 99% Similarity Required
 */
?>

<?php if ($pageName === 'home'): ?>
<!-- ========== HOME PAGE HEADER ========== -->
<header class="sp-home-header">
    <!-- Top Row: Logo + Globe Icon -->
    <div class="sp-home-header-top">
        <div class="sp-logo-wrap">
            <img src="resource/ui-elements/logo-white.svg" alt="SUPERONG" class="sp-logo">
        </div>
        <div class="sp-header-actions">
            <!-- Globe/Language Icon -->
            <a href="#" class="sp-header-globe" id="langToggle">
                <img src="resource/ui-elements/webs.svg" alt="Language" class="sp-globe-icon">
            </a>
        </div>
    </div>
</header>

<?php else: ?>
<!-- ========== INNER PAGE HEADER ========== -->
<header class="sp-page-header">
    <!-- Back Button -->
    <a href="javascript:history.back()" class="sp-header-back">
        <i class="fas fa-arrow-left"></i>
    </a>

    <!-- Page Title -->
    <h1 class="sp-header-title"><?php echo e($headerTitle ?? $pageTitle ?? ''); ?></h1>

    <!-- Right Icon (optional) -->
    <?php if (isset($headerRightIcon)): ?>
    <a href="<?php echo e($headerRightLink ?? '#'); ?>" class="sp-header-icon-right">
        <i class="fas <?php echo e($headerRightIcon); ?>"></i>
    </a>
    <?php elseif (isset($headerRightText)): ?>
    <a href="<?php echo e($headerRightLink ?? '#'); ?>" class="sp-header-text-right">
        <?php echo e($headerRightText); ?>
    </a>
    <?php else: ?>
    <div class="sp-header-placeholder"></div>
    <?php endif; ?>
</header>
<?php endif; ?>
