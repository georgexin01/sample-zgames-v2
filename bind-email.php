<?php
/**
 * bind-email.php - SUPERONG Mobile App
 * 绑定Email (Bind Email Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'bind-email';
$pageTitle = '绑定Email';
$headerTitle = '绑定Email';
$bodyClass = 'sp-bg-fixed';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== BIND EMAIL PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Email Form -->
    <form id="bindEmailForm" class="sp-form">
        <!-- Email Input -->
        <div class="sp-form-section">
            <label class="sp-form-label">邮箱地址</label>
            <div class="sp-input-box">
                <input type="email" name="email" id="email" placeholder="请输入邮箱地址">
            </div>
        </div>

        <!-- Verification Code -->
        <div class="sp-form-section">
            <div class="sp-verification-row">
                <div class="sp-verification-label">验证码</div>
                <div class="sp-verification-input">
                    <input type="text" name="verifyCode" id="verifyCode" placeholder="请输入验证码">
                </div>
                <button type="button" class="sp-verify-btn" onclick="sendEmailCode()">发送验证码</button>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="sp-form-actions">
            <button type="submit" class="sp-btn sp-btn-primary sp-btn-block">确认绑定</button>
            <p class="sp-form-hint">没有收到验证码？ <a href="customer-service.php">联络我们</a></p>
        </div>
    </form>

</main>

<script>
function sendEmailCode() {
    var email = document.getElementById('email').value;
    if (!email) {
        alert('请输入邮箱地址');
        return;
    }
    // Send verification code logic
    alert('验证码已发送到 ' + email);
}
</script>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
