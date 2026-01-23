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
    <!-- Top Row: Logo + Language + Settings -->
    <div class="sp-home-header-top">
        <div class="sp-logo-wrap">
            <img src="resource/logo/superong-logo.png" alt="SUPERONG" class="sp-logo">
        </div>
        <div class="sp-header-actions">
            <!-- Settings Icon -->
            <a href="settings.php" class="sp-header-icon">
                <i class="fas fa-cog"></i>
            </a>
            <!-- Language Dropdown -->
            <div class="sp-lang-dropdown" id="langDropdown">
                <span class="sp-lang-current"><?php echo e($availableLanguages[getLang()]); ?></span>
                <i class="fas fa-chevron-down"></i>
                <div class="sp-lang-menu">
                    <?php foreach ($availableLanguages as $code => $name): ?>
                    <a href="?lang=<?php echo $code; ?>" class="sp-lang-item <?php echo getLang() === $code ? 'active' : ''; ?>">
                        <?php echo e($name); ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Point Bar -->
    <div class="sp-point-bar">
        <span class="sp-point-label">Point</span>
        <span class="sp-point-value"><?php echo e($siteConfig['currency']); ?> <?php echo number_format($currentUser['point'], 2); ?></span>
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
