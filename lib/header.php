<?php

/**
 * header.php - SUPERONG Mobile App Header
 * Simplified header structure matching design exactly
 * 
 * Home Page: Logo + Language + Balance Bar
 * Other Pages: Back Button + Title + Action
 */
?>

<header class="sp-header-container">
    <?php if ($pageName === 'home'): ?>
        <!-- HOME HEADER -->
        <div class="sp-header-home">
            <div class="sp-header-top">
                <!-- Logo Center -->
                <div class="sp-logo-area">
                    <img src="resource/ui-elements/logo_main.png" alt="SUPERONG" class="sp-logo">
                </div>
                <!-- Web Icon Button -->
                <a href="https://superong.com" target="_blank" class="sp-btn-web" title="官方网站">
                    <img src="resource/ui-elements/webs.png" alt="Website" class="sp-web-icon">
                </a>
            </div>
        </div>
    <?php else: ?>
        <!-- STANDARD PAGE HEADER -->
        <div class="sp-header-page">
            <!-- Back Button -->
            <a href="javascript:history.back()" class="sp-btn-back" title="返回">
                <i class="fas fa-arrow-left"></i>
            </a>
            <!-- Title -->
            <h1 class="sp-header-title"><?php echo htmlspecialchars($headerTitle ?? 'Page'); ?></h1>
            <!-- Right Action -->
            <div class="sp-header-action">
                <?php if (isset($headerRightIcon)): ?>
                    <a href="<?php echo htmlspecialchars($headerRightLink ?? '#'); ?>" class="sp-btn-action">
                        <i class="fas <?php echo htmlspecialchars($headerRightIcon); ?>"></i>
                    </a>
                <?php else: ?>
                    <div style="width: 36px;"></div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</header>