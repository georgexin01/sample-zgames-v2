<?php
/**
 * about.php - SUPERONG Mobile App
 * 关于 (About Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'about';
$pageTitle = '关于';
$headerTitle = '关于';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== ABOUT PAGE CONTENT ========== -->
<main class="sp-page-content sp-about-page">

    <!-- Logo Section -->
    <div class="sp-about-logo">
        <img src="resource/logo/logo-icon.png" alt="SUPERONG" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
        <div class="sp-about-logo-placeholder" style="display:none;">
            <i class="fas fa-crown"></i>
        </div>
        <h1 class="sp-about-name">SUPERONG</h1>
        <span class="sp-about-version">Version <?php echo e($siteConfig['version']); ?></span>
    </div>

    <!-- About Info -->
    <div class="sp-about-content">
        <div class="sp-about-section">
            <h3>关于我们</h3>
            <p>SUPERONG 是一款专业的在线娱乐平台，致力于为玩家提供最优质的游戏体验和最安全的交易环境。</p>
        </div>

        <div class="sp-about-section">
            <h3>我们的优势</h3>
            <ul>
                <li>安全可靠的支付系统</li>
                <li>24/7 专业客服支持</li>
                <li>丰富的游戏选择</li>
                <li>快速的存取款服务</li>
                <li>公平公正的游戏环境</li>
            </ul>
        </div>

        <div class="sp-about-section">
            <h3>联系我们</h3>
            <p>如有任何问题，请随时联系我们的客服团队。</p>
            <a href="customer-service.php" class="sp-about-contact-btn">
                <i class="fas fa-headset"></i>
                <span>联络客服</span>
            </a>
        </div>
    </div>

    <!-- Links -->
    <div class="sp-about-links">
        <a href="terms.php" class="sp-about-link">
            <span>用户协议</span>
            <i class="fas fa-chevron-right"></i>
        </a>
        <a href="privacy.php" class="sp-about-link">
            <span>隐私政策</span>
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>

    <!-- Copyright -->
    <div class="sp-about-copyright">
        <p>&copy; <?php echo date('Y'); ?> SUPERONG. All rights reserved.</p>
    </div>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
