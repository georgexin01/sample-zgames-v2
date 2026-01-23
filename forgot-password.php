<?php
/**
 * forgot-password.php - SUPERONG Mobile App
 * 忘记密码 (Forgot Password Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'forgot-password';
$pageTitle = '忘记密码';
$showHeader = false;
$showFooter = false;

// Include header
include 'lib/htmlHead.php';
?>

<!-- ========== FORGOT PASSWORD PAGE CONTENT ========== -->
<main class="sp-auth-page">
    <!-- Back Link -->
    <a href="login.php" class="sp-auth-home-link">
        <i class="fas fa-arrow-left"></i>
        <span>返回登录</span>
    </a>

    <!-- Logo -->
    <div class="sp-auth-logo">
        <img src="resource/logo/logo.png" alt="SUPERONG" onerror="this.nextElementSibling.style.display='block'; this.style.display='none';">
        <div class="sp-auth-logo-text" style="display:none;">
            <span class="sp-logo-super">SUPER</span><span class="sp-logo-ong">ONG</span>
        </div>
    </div>

    <!-- Title -->
    <h1 class="sp-auth-title">忘记密码</h1>
    <p class="sp-auth-subtitle">请输入您的手机号码，我们将发送验证码给您</p>

    <!-- Forgot Password Form -->
    <form id="forgotPasswordForm" class="sp-auth-form">
        <div class="sp-auth-input-group">
            <label class="sp-auth-label">手机号码</label>
            <div class="sp-auth-phone-input">
                <select class="sp-country-select">
                    <option value="+60">+60</option>
                    <option value="+65">+65</option>
                    <option value="+66">+66</option>
                </select>
                <input type="tel" name="phone" placeholder="请输入手机号码" class="sp-auth-input">
            </div>
        </div>

        <div class="sp-auth-input-group">
            <label class="sp-auth-label">验证码</label>
            <div class="sp-auth-verify-row">
                <input type="text" name="verifyCode" placeholder="请输入验证码" class="sp-auth-input sp-verify-input">
                <button type="button" class="sp-auth-verify-btn" onclick="sendVerifyCode()">发送验证码</button>
            </div>
        </div>

        <button type="submit" class="sp-btn sp-btn-primary sp-auth-btn">下一步</button>

        <p class="sp-auth-switch">
            想起密码了？ <a href="login.php">返回登录</a>
        </p>
    </form>
</main>

<script>
function sendVerifyCode() {
    alert('验证码已发送');
}
</script>

<?php
include 'lib/htmlBody.php';
?>
