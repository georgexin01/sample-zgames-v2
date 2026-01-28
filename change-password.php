<?php
/**
 * change-password.php - SUPERONG Mobile App
 * 修改登入密码 (Change Password Page)
 * 100% Match with resource/1/60.png, 67.png
 */

$pageName = 'settings';
$pageTitle = '修改登入密码';
$headerTitle = '修改登入密码';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<main class="sp-page">
    <div class="sp-form-container">
        <form id="changePasswordForm" onsubmit="handleChangePassword(event)">
            <!-- Password Card -->
            <div class="sp-auth-card">
                <!-- Old Password -->
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">旧密码</span>
                    <input type="password" name="oldPassword" placeholder="请输入旧密码" class="sp-auth-row-input" required>
                </div>

                <!-- New Password -->
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">新密码</span>
                    <input type="password" name="newPassword" id="newPassword" placeholder="请输入新密码" class="sp-auth-row-input" required>
                </div>

                <!-- Confirm Password -->
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">确认密码</span>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="请确认新密码" class="sp-auth-row-input" required>
                </div>
            </div>

            <!-- Password Rules -->
            <p class="sp-auth-hint">*密码为6-15位,且同时包含字母和数字,不支持空格</p>
            <p class="sp-auth-hint">*新密码不能和旧密码相同</p>

            <button type="submit" class="sp-auth-submit-btn">完成</button>
            <a href="forgot-password.php" class="sp-auth-forgot-link">忘记密码?</a>
        </form>
    </div>
</main>

<!-- Success Toast (67.png) -->
<div class="sp-toast-overlay" id="passwordSuccessToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-message">密码修改成功</p>
    </div>
</div>

<div class="mobile-nav-spacer"></div>
<?php include 'lib/footer.php'; ?>

<script>
function handleChangePassword(e) {
    e.preventDefault();
    var newPass = document.getElementById('newPassword').value;
    var confirmPass = document.getElementById('confirmPassword').value;

    if (newPass !== confirmPass) {
        alert('两次输入的密码不一致');
        return;
    }

    // Show success toast
    document.getElementById('passwordSuccessToast').classList.add('active');
    setTimeout(function() {
        document.getElementById('passwordSuccessToast').classList.remove('active');
        window.location.href = 'settings.php';
    }, 2000);
}
</script>

<?php include 'lib/htmlBody.php'; ?>
