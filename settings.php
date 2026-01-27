<?php
/**
 * settings.php - SUPERONG Mobile App
 * 设定 (Settings Page)
 * 100% Match with settings设定.png
 */

$pageName = 'settings';
$pageTitle = '设定';
$headerTitle = '设定';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== SETTINGS PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-settings-container">

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
            <a href="change-pay-password.php" class="sp-settings-item">
                <span>修改支付密码</span>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="set-birthday.php" class="sp-settings-item">
                <span>设置生日</span>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="about.php" class="sp-settings-item">
                <span>关于</span>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
