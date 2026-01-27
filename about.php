<?php
/**
 * about.php - SUPERONG Mobile App
 * 关于 (About Page)
 * 100% Match with about关于.png
 */

$pageName = 'about';
$pageTitle = '关于';
$headerTitle = '关于';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== ABOUT PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-about-container">

        <!-- Logo Section -->
        <div class="sp-about-logo-section">
            <img src="resource/ui-elements/logo_main.png" alt="SUPERONG" class="sp-about-logo-img">
            <h1 class="sp-about-title">关于 SUPERONG</h1>
            <p class="sp-about-subtitle">SUPERONG ........................</p>
        </div>

        <!-- Menu Links -->
        <div class="sp-about-menu">
            <a href="faq.php" class="sp-about-menu-item">
                <span>常见问题</span>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="terms.php" class="sp-about-menu-item">
                <span>条款与规则</span>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="privacy.php" class="sp-about-menu-item">
                <span>隐私权政策</span>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="cookies.php" class="sp-about-menu-item">
                <span>Cookies 政策</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
