<?php
/**
 * about.php - SUPERONG Mobile App
 * 关于 (About Page)
 * 100% Match with resource/1/64.png, 71.png
 */

$pageName = 'about';
$pageTitle = '关于';
$headerTitle = '关于';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

$subpage = isset($_GET['page']) ? $_GET['page'] : '';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== ABOUT PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-about-container">

        <?php if ($subpage === 'faq'): ?>
        <!-- FAQ Content (71.png) -->
        <div class="sp-about-card">
            <div class="sp-about-logo-section">
                <img src="resource/ui-elements/logo_main_purple.png" alt="SUPERONG" class="sp-about-logo-img">
            </div>
            <div class="sp-faq-section">
                <h2 class="sp-faq-title">常见问题</h2>
                <h3 class="sp-faq-subtitle">技术支持</h3>
                <p class="sp-faq-text">由于我们产品自身的特点，在您访问或浏览网站不同区域，或使用网站的一般功能时，可能会出现各种技术问题。</p>
                <h4 class="sp-faq-heading">常见问题包括：</h4>
                <ul class="sp-faq-list">
                    <li>- 显示与功能异常</li>
                    <li>- 存款或提款问题</li>
                    <li>- 登录失败</li>
                    <li>- 意外或异常错误讯息</li>
                    <li>- 连结无反应</li>
                </ul>
                <p class="sp-faq-text">若您遇到以上任何问题，我们专业的客服技术支持团队将24小时全天候为您服务。</p>
                <p class="sp-faq-text">如需协助，请随时联系我们。</p>
            </div>
        </div>
        <?php elseif ($subpage === 'privacy'): ?>
        <!-- Privacy Policy Content -->
        <div class="sp-about-card">
            <div class="sp-about-logo-section">
                <img src="resource/ui-elements/logo_main_purple.png" alt="SUPERONG" class="sp-about-logo-img">
            </div>
            <div class="sp-faq-section">
                <h2 class="sp-faq-title">隐私权政策</h2>
                <p class="sp-faq-text">SUPERONG 非常重视您的隐私。本政策说明我们如何收集、使用和保护您的个人信息。</p>
                <h3 class="sp-faq-subtitle">信息收集</h3>
                <p class="sp-faq-text">我们收集您在注册和使用服务时提供的信息，包括姓名、联系方式和账户信息。</p>
                <h3 class="sp-faq-subtitle">信息使用</h3>
                <p class="sp-faq-text">我们使用您的信息来提供服务、处理交易、发送通知和改善用户体验。</p>
                <h3 class="sp-faq-subtitle">信息保护</h3>
                <p class="sp-faq-text">我们采用行业标准的安全措施来保护您的个人信息免受未经授权的访问或泄露。</p>
            </div>
        </div>
        <?php elseif ($subpage === 'cookies'): ?>
        <!-- Cookies Policy Content -->
        <div class="sp-about-card">
            <div class="sp-about-logo-section">
                <img src="resource/ui-elements/logo_main_purple.png" alt="SUPERONG" class="sp-about-logo-img">
            </div>
            <div class="sp-faq-section">
                <h2 class="sp-faq-title">Cookies 政策</h2>
                <p class="sp-faq-text">本网站使用 Cookies 来增强您的浏览体验。</p>
                <h3 class="sp-faq-subtitle">什么是 Cookies</h3>
                <p class="sp-faq-text">Cookies 是存储在您设备上的小型文本文件，用于记住您的偏好和登录状态。</p>
                <h3 class="sp-faq-subtitle">我们如何使用 Cookies</h3>
                <p class="sp-faq-text">我们使用 Cookies 来保持登录状态、记住语言偏好、分析网站流量和改善服务。</p>
                <h3 class="sp-faq-subtitle">管理 Cookies</h3>
                <p class="sp-faq-text">您可以通过浏览器设置管理或删除 Cookies。请注意，禁用 Cookies 可能会影响某些功能的正常使用。</p>
            </div>
        </div>
        <?php else: ?>
        <!-- Main About Page (64.png) -->
        <div class="sp-about-card">
            <!-- Logo Section -->
            <div class="sp-about-logo-section">
                <img src="resource/ui-elements/logo_main_purple.png" alt="SUPERONG" class="sp-about-logo-img">
                <h1 class="sp-about-title">关于 SUPERONG</h1>
                <p class="sp-about-subtitle">SUPERONG . . . . . . . .</p>
            </div>

            <!-- Menu Links -->
            <div class="sp-about-menu">
                <a href="about.php?page=faq" class="sp-about-menu-item">
                    <span>常见问题</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <a href="terms.php" class="sp-about-menu-item">
                    <span>条款与规则</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <a href="about.php?page=privacy" class="sp-about-menu-item">
                    <span>隐私权政策</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <a href="about.php?page=cookies" class="sp-about-menu-item">
                    <span>Cookies 政策</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <?php endif; ?>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
