<?php
/**
 * login.php - SUPERONG Mobile App
 * 登录 (Login Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'login';
$pageTitle = '登录';
$showHeader = false;
$showFooter = false;

// Include header
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
        <img src="resource/logo/logo.png" alt="SUPERONG" onerror="this.nextElementSibling.style.display='block'; this.style.display='none';">
        <div class="sp-auth-logo-text" style="display:none;">
            <span class="sp-logo-super">SUPER</span><span class="sp-logo-ong">ONG</span>
        </div>
    </div>

    <!-- Welcome Text -->
    <h1 class="sp-auth-title">WELCOME TO SUPERONG</h1>

    <!-- Login Form -->
    <form id="loginForm" class="sp-auth-form">
        <div class="sp-auth-input-group">
            <label class="sp-auth-label">用户名</label>
            <input type="text" name="username" placeholder="请输入用户名" class="sp-auth-input">
        </div>

        <div class="sp-auth-input-group">
            <label class="sp-auth-label">密码</label>
            <input type="password" name="password" placeholder="请输入密码" class="sp-auth-input">
        </div>

        <a href="forgot-password.php" class="sp-forgot-link">忘记密码?</a>

        <button type="submit" class="sp-btn sp-btn-primary sp-auth-btn">登入</button>

        <p class="sp-auth-switch">
            还没有ID？ <a href="register.php">点此注册</a>
        </p>
    </form>
</main>

<?php
include 'lib/htmlBody.php';
?>
