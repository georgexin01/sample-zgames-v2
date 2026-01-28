<?php
/**
 * bind-email.php - SUPERONG Mobile App
 * 绑定Email (Bind Email Page)
 * 100% Match with resource/1/59.png, 66.png
 */

$pageName = 'settings';
$pageTitle = '绑定Email';
$headerTitle = '绑定Email';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== BIND EMAIL PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-form-container">
        <form id="bindEmailForm" onsubmit="handleBindEmail(event)">
            <!-- Email Input Card -->
            <div class="sp-auth-card">
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">邮箱</span>
                    <input type="email" name="email" id="emailInput" placeholder="请输入邮箱地址" class="sp-auth-row-input" required>
                </div>
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">验证码</span>
                    <div class="sp-auth-verify-group">
                        <input type="text" name="verifyCode" placeholder="请输入验证码" class="sp-auth-row-input sp-verify-input" required>
                        <button type="button" class="sp-verify-send-btn" onclick="sendVerifyCode()">发送验证码</button>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="sp-auth-submit-btn">绑定</button>

            <!-- Help Link -->
            <p class="sp-auth-help-text">没有收到验证码？ <a href="customer-service.php">联系我们</a></p>
        </form>
    </div>
</main>

<!-- Success Toast (66.png) -->
<div class="sp-toast-overlay" id="bindSuccessToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-message">绑定成功</p>
    </div>
</div>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function sendVerifyCode() {
    var email = document.getElementById('emailInput').value;
    if (!email) {
        alert('请先输入邮箱地址');
        return;
    }
    alert('验证码已发送到您的邮箱');
}

function handleBindEmail(e) {
    e.preventDefault();
    // Show success toast
    document.getElementById('bindSuccessToast').classList.add('active');
    setTimeout(function() {
        document.getElementById('bindSuccessToast').classList.remove('active');
        window.location.href = 'settings.php';
    }, 2000);
}
</script>

<?php include 'lib/htmlBody.php'; ?>
