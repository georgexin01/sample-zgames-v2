<?php
/**
 * forgot-password.php - SUPERONG Mobile App
 * 忘记密码 (Forgot Password Page)
 * 100% Match with resource/1/77.png, 79.png, 81.png
 */

$pageName = 'forgot-password';
$pageTitle = '忘记密码';
$headerTitle = '忘记密码';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'phone';
?>

<!-- ========== FORGOT PASSWORD PAGE CONTENT ========== -->
<main class="sp-page">
    <!-- Tab Switch -->
    <div class="sp-tab-switch sp-forgot-tabs">
        <a href="forgot-password.php?tab=phone" class="sp-tab-btn <?php echo $activeTab === 'phone' ? 'active' : ''; ?>">手机验证码</a>
        <a href="forgot-password.php?tab=email" class="sp-tab-btn <?php echo $activeTab === 'email' ? 'active' : ''; ?>">邮箱验证码</a>
    </div>

    <!-- Form Card -->
    <div class="sp-auth-card">
        <?php if ($activeTab === 'phone'): ?>
        <!-- Phone Verification Form (77.png) -->
        <form id="phoneVerifyForm" onsubmit="handleVerify(event, 'phone')">
            <div class="sp-forgot-form-title">新手机号码验证码</div>

            <div class="sp-auth-input-row">
                <div class="sp-country-code">
                    <select class="sp-country-select">
                        <option value="+60">+60</option>
                        <option value="+65">+65</option>
                        <option value="+66">+66</option>
                    </select>
                    <img src="resource/ui-elements/dropdown-blue.png" alt="" class="sp-select-arrow-icon">
                </div>
                <input type="tel" name="phone" placeholder="手机号码" class="sp-auth-input sp-phone-input" required>
            </div>

            <div class="sp-auth-input-row sp-verify-row">
                <span class="sp-verify-label">验证码</span>
                <input type="text" name="verifyCode" placeholder="请输入验证码" class="sp-auth-input sp-verify-input" required>
                <button type="button" class="sp-verify-send-btn" onclick="sendVerifyCode('phone')">发送验证码</button>
            </div>
        </form>
        <?php else: ?>
        <!-- Email Verification Form (79.png) -->
        <form id="emailVerifyForm" onsubmit="handleVerify(event, 'email')">
            <div class="sp-forgot-form-title">新邮箱验证码</div>

            <div class="sp-auth-input-row">
                <span class="sp-email-label">邮箱</span>
                <input type="email" name="email" placeholder="请输入邮箱" class="sp-auth-input" required>
            </div>

            <div class="sp-auth-input-row sp-verify-row">
                <span class="sp-verify-label">验证码</span>
                <input type="text" name="verifyCode" placeholder="请输入验证码" class="sp-auth-input sp-verify-input" required>
                <button type="button" class="sp-verify-send-btn" onclick="sendVerifyCode('email')">发送验证码</button>
            </div>
        </form>
        <?php endif; ?>
    </div>

    <!-- Submit Button -->
    <button type="button" class="sp-btn sp-btn-primary sp-auth-btn sp-forgot-btn" onclick="submitVerify()">确认</button>

    <!-- Help Link -->
    <p class="sp-forgot-help">没有收到验证码？ <a href="customer-service.php">联系我们</a></p>
</main>

<!-- Verification Success Toast (81.png) -->
<div id="verifySuccessToast" class="sp-toast-overlay" style="display:none;">
    <div class="sp-toast-card">
        <div class="sp-toast-icon sp-toast-success">
            <img src="resource/ui-elements/check.png" alt="">
        </div>
        <p class="sp-toast-message">验证成功</p>
    </div>
</div>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<script>
function sendVerifyCode(type) {
    alert('验证码已发送到您的' + (type === 'phone' ? '手机' : '邮箱'));
}

function submitVerify() {
    var activeTab = '<?php echo $activeTab; ?>';
    var form = document.getElementById(activeTab === 'phone' ? 'phoneVerifyForm' : 'emailVerifyForm');

    if (form.checkValidity()) {
        // Show success toast
        document.getElementById('verifySuccessToast').style.display = 'flex';
        setTimeout(function() {
            document.getElementById('verifySuccessToast').style.display = 'none';
            window.location.href = 'new-password.php';
        }, 2000);
    } else {
        form.reportValidity();
    }
}

function handleVerify(e, type) {
    e.preventDefault();
    submitVerify();
}
</script>

<?php include 'lib/htmlBody.php'; ?>
