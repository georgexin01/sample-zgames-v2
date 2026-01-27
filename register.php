<?php
/**
 * register.php - SUPERONG Mobile App
 * 注册帐号 (Register Page)
 * 100% Match with register注册帐号.png
 */

$pageName = 'register';
$pageTitle = '注册帐号';
$headerTitle = '注册帐号';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== REGISTER PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-auth-form-container">

        <!-- Register Form -->
        <form id="registerForm" class="sp-register-form" onsubmit="handleRegister(event)">
            <!-- Account ID -->
            <div class="sp-auth-input-group">
                <label class="sp-auth-label">账号</label>
                <input type="text" name="account" placeholder="4 - 10码英文数字" class="sp-auth-input" required>
            </div>
            <p class="sp-auth-input-hint">*范例：Abc123</p>

            <!-- Password -->
            <div class="sp-auth-input-group">
                <label class="sp-auth-label">密码</label>
                <input type="password" name="password" placeholder="请输入密码" class="sp-auth-input" required>
            </div>

            <!-- Confirm Password -->
            <div class="sp-auth-input-group">
                <label class="sp-auth-label">确认密码</label>
                <input type="password" name="confirmPassword" placeholder="请输入密码" class="sp-auth-input" required>
            </div>
            <p class="sp-auth-input-hint">*密码为6-15位,且同时包含字母和数字,不支持空格</p>

            <!-- Referral Code -->
            <div class="sp-auth-input-group">
                <label class="sp-auth-label">推荐码</label>
                <input type="text" name="referralCode" placeholder="请输入推荐码" class="sp-auth-input">
            </div>

            <!-- Terms Agreement -->
            <div class="sp-auth-checkbox">
                <input type="checkbox" id="agreeTerms" name="agreeTerms" required>
                <label for="agreeTerms">我已阅读并同意 <a href="terms.php">用户协议</a></label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="sp-auth-btn">下一步</button>
        </form>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<script>
function handleRegister(e) {
    e.preventDefault();
    // Show success modal
    alert('注册成功！');
    window.location.href = 'login.php';
}
</script>

<?php include 'lib/htmlBody.php'; ?>
