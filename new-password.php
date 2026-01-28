<?php
/**
 * new-password.php - SUPERONG Mobile App
 * 输入新密码 (New Password Page)
 * 100% Match with resource/1/82.png, 83.png
 */

$pageName = 'new-password';
$pageTitle = '输入新密码';
$headerTitle = '输入新密码';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== NEW PASSWORD PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-form-container">
        <form id="newPasswordForm" onsubmit="handleNewPassword(event)">
            <!-- New Password Card -->
            <div class="sp-form-card">
                <label class="sp-form-label-center">新密码</label>
                <input type="password" class="sp-form-input" id="newPassword" placeholder="请输入新密码" required>

                <div class="sp-form-row-inline sp-form-row-border">
                    <span class="sp-form-row-label">确认密码</span>
                    <input type="password" class="sp-form-row-input" id="confirmPassword" placeholder="请确认新密码" required>
                </div>
            </div>

            <!-- Password Rules -->
            <div class="sp-form-rules">
                <p>1.密码为6-15位,且同时包含字母和数字,不支持空格</p>
                <p>2.新密码不能和旧密码相同</p>
            </div>

            <button type="submit" class="sp-form-submit-btn">确认</button>
        </form>
    </div>
</main>

<!-- Password Update Success Toast (83.png) -->
<div class="sp-toast-overlay" id="passwordSuccessToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-message">密码更新成功</p>
    </div>
</div>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function handleNewPassword(e) {
    e.preventDefault();
    var newPass = document.getElementById('newPassword').value;
    var confirmPass = document.getElementById('confirmPassword').value;

    if (!newPass || !confirmPass) {
        alert('请填写所有字段');
        return;
    }

    if (newPass !== confirmPass) {
        alert('两次输入的密码不一致');
        return;
    }

    if (newPass.length < 6 || newPass.length > 15) {
        alert('密码长度必须为6-15位');
        return;
    }

    // Show success toast
    document.getElementById('passwordSuccessToast').classList.add('active');
    setTimeout(function() {
        document.getElementById('passwordSuccessToast').classList.remove('active');
        window.location.href = 'login.php';
    }, 2000);
}
</script>

<?php include 'lib/htmlBody.php'; ?>
