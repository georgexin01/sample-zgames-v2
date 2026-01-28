<?php
/**
 * login.php - SUPERONG Mobile App
 * 登入 (Login Page)
 * 100% Match with resource/1/75.png
 */

$pageName = 'login';
$pageTitle = '登入';
$bodyClass = 'sp-auth-bg';
$showHeader = false;
$showFooter = false;

include 'lib/htmlHead.php';
?>

<!-- ========== LOGIN PAGE CONTENT ========== -->
<main class="sp-auth-page">
    <!-- Home Link -->
    <a href="index.php" class="sp-auth-home-link">
        <i class="fas fa-home"></i>
        <span>首页</span>
    </a>

    <!-- Logo -->
    <div class="sp-auth-logo">
        <img src="resource/ui-elements/logo_main_purple.png" alt="SUPERONG">
    </div>

    <!-- Welcome Text -->
    <h1 class="sp-auth-title">WELCOME TO SUPERONG</h1>

    <!-- Login Form -->
    <form id="loginForm" class="sp-auth-form" onsubmit="handleLogin(event)">
        <div class="sp-auth-card">
            <div class="sp-auth-row">
                <span class="sp-auth-row-label">用户名</span>
                <input type="text" name="username" placeholder="请输入用户名" class="sp-auth-row-input" required>
            </div>

            <div class="sp-auth-row">
                <span class="sp-auth-row-label">密码</span>
                <input type="password" name="password" placeholder="请输入密码" class="sp-auth-row-input" required>
            </div>
        </div>

        <a href="forgot-password.php" class="sp-auth-forgot-link">忘记密码?</a>

        <button type="submit" class="sp-auth-submit-btn">登入</button>

        <p class="sp-auth-switch">
            还没有ID？ <a href="register.php">点此注册</a>
        </p>
    </form>
</main>

<script>
function handleLogin(e) {
    e.preventDefault();
    window.location.href = 'index.php';
}
</script>

<?php include 'lib/htmlBody.php'; ?>
