<?php
/**
 * change-phone.php - SUPERONG Mobile App
 * 修改手机号码 (Change Phone Page)
 * 100% Match with resource/1/58.png, 65.png
 */

$pageName = 'settings';
$pageTitle = '修改手机号码';
$headerTitle = '修改手机号码';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

$step = isset($_GET['step']) ? intval($_GET['step']) : 1;
$currentPhone = '+6013 999 3123';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<main class="sp-page">
    <div class="sp-form-container">
        <?php if ($step === 1): ?>
        <!-- Step 1: Verify old phone (58.png) -->
        <form id="verifyOldPhoneForm" onsubmit="handleVerifyOldPhone(event)">
            <div class="sp-auth-card">
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">旧手机</span>
                    <span class="sp-auth-row-value"><?php echo htmlspecialchars($currentPhone); ?></span>
                </div>
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">验证码</span>
                    <div class="sp-auth-verify-group">
                        <input type="text" name="verifyCode" placeholder="请输入验证码" class="sp-auth-row-input sp-verify-input" required>
                        <button type="button" class="sp-verify-send-btn" onclick="sendOldPhoneCode()">发送验证码</button>
                    </div>
                </div>
            </div>

            <button type="submit" class="sp-auth-submit-btn">下一步</button>
            <p class="sp-auth-help-text">没有收到验证码？ <a href="customer-service.php">联系我们</a></p>
        </form>
        <?php else: ?>
        <!-- Step 2: Enter new phone (65.png) -->
        <form id="newPhoneForm" onsubmit="handleNewPhone(event)">
            <div class="sp-auth-card">
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">区号</span>
                    <select name="countryCode" class="sp-auth-row-select">
                        <option value="+60">+60</option>
                        <option value="+65">+65</option>
                        <option value="+66">+66</option>
                    </select>
                </div>
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">新手机</span>
                    <input type="tel" name="phone" placeholder="请输入手机号码" class="sp-auth-row-input" required>
                </div>
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">验证码</span>
                    <div class="sp-auth-verify-group">
                        <input type="text" name="verifyCode" placeholder="请输入验证码" class="sp-auth-row-input sp-verify-input" required>
                        <button type="button" class="sp-verify-send-btn" onclick="sendNewPhoneCode()">发送验证码</button>
                    </div>
                </div>
            </div>

            <button type="submit" class="sp-auth-submit-btn">完成</button>
            <p class="sp-auth-help-text">没有收到验证码？ <a href="customer-service.php">联系我们</a></p>
        </form>
        <?php endif; ?>
    </div>
</main>

<!-- Success Toast -->
<div class="sp-toast-overlay" id="phoneSuccessToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-message">手机号码修改成功</p>
    </div>
</div>

<div class="mobile-nav-spacer"></div>
<?php include 'lib/footer.php'; ?>

<script>
function sendOldPhoneCode() {
    alert('验证码已发送到您的旧手机');
}

function sendNewPhoneCode() {
    alert('验证码已发送到您的新手机');
}

function handleVerifyOldPhone(e) {
    e.preventDefault();
    window.location.href = 'change-phone.php?step=2';
}

function handleNewPhone(e) {
    e.preventDefault();
    document.getElementById('phoneSuccessToast').classList.add('active');
    setTimeout(function() {
        document.getElementById('phoneSuccessToast').classList.remove('active');
        window.location.href = 'settings.php';
    }, 2000);
}
</script>

<?php include 'lib/htmlBody.php'; ?>
