<?php
/**
 * settings.php - SUPERONG Mobile App
 * 设定 (Settings Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'settings';
$pageTitle = '设定';
$headerTitle = '设定';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== SETTINGS PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Settings Menu -->
    <div class="sp-settings-menu">
        <a href="change-phone.php" class="sp-settings-item">
            <span>修改手机号</span>
            <i class="fas fa-chevron-right"></i>
        </a>
        <a href="bind-email.php" class="sp-settings-item">
            <span>绑定Email</span>
            <i class="fas fa-chevron-right"></i>
        </a>
        <a href="change-password.php" class="sp-settings-item">
            <span>修改密码</span>
            <i class="fas fa-chevron-right"></i>
        </a>
        <a href="kyc.php" class="sp-settings-item">
            <span>实名认证</span>
            <i class="fas fa-chevron-right"></i>
        </a>
        <a href="about.php" class="sp-settings-item">
            <span>关于</span>
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
