<?php
/**
 * register.php - SUPERONG Mobile App
 * 注册帐号 (Register Page)
 * 100% Match with resource/1/76.png, 78.png, 80.png
 */

$pageName = 'register';
$pageTitle = '注册帐号';
$headerTitle = '注册帐号';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-auth-bg';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== REGISTER PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-register-container">
        <!-- Register Form -->
        <form id="registerForm" onsubmit="handleRegister(event)">
            <div class="sp-auth-card">
                <!-- Account ID -->
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">账号</span>
                    <input type="text" name="account" placeholder="4 - 10码英文数字" class="sp-auth-row-input" required>
                </div>
            </div>
            <p class="sp-auth-hint">*范例：Abc123</p>

            <div class="sp-auth-card">
                <!-- Password -->
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">密码</span>
                    <input type="password" name="password" placeholder="请输入密码" class="sp-auth-row-input" required>
                </div>

                <!-- Confirm Password -->
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">确认密码</span>
                    <input type="password" name="confirmPassword" placeholder="请输入密码" class="sp-auth-row-input" required>
                </div>
            </div>
            <p class="sp-auth-hint">*密码为6-15位,且同时包含字母和数字,不支持空格</p>

            <div class="sp-auth-card">
                <!-- Referral Code -->
                <div class="sp-auth-row">
                    <span class="sp-auth-row-label">推荐码</span>
                    <input type="text" name="referralCode" placeholder="请输入推荐码" class="sp-auth-row-input">
                </div>
            </div>

            <!-- Terms Agreement -->
            <div class="sp-auth-terms">
                <input type="checkbox" id="agreeTerms" name="agreeTerms" required>
                <label for="agreeTerms">我已阅读并同意 <a href="javascript:void(0)" onclick="showAgreementModal()">用户协议</a></label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="sp-auth-submit-btn">下一步</button>
        </form>
    </div>
</main>

<!-- User Agreement Modal (78.png) -->
<div id="agreementModal" class="sp-modal-overlay" style="display:none;">
    <div class="sp-modal-card sp-agreement-modal">
        <div class="sp-agreement-header">
            <h3>用户协议</h3>
            <button type="button" class="sp-modal-close" onclick="hideAgreementModal()">&times;</button>
        </div>
        <div class="sp-agreement-content">
            <h4>1. 服务条款</h4>
            <p>欢迎使用SUPERONG平台服务。在使用本平台服务之前，请您仔细阅读以下服务条款。</p>
            <h4>2. 用户注册</h4>
            <p>用户在注册时必须提供真实、准确、完整的个人资料，并保证资料的及时更新。</p>
            <h4>3. 隐私保护</h4>
            <p>我们重视用户的隐私保护，将采取合理措施保护用户的个人信息安全。</p>
            <h4>4. 用户责任</h4>
            <p>用户对其账号下的所有活动负责，应妥善保管账号密码。</p>
            <h4>5. 服务变更</h4>
            <p>本平台保留随时修改或中断服务的权利，恕不另行通知。</p>
        </div>
        <div class="sp-agreement-footer">
            <button type="button" class="sp-btn sp-btn-primary" onclick="acceptAgreement()">同意</button>
        </div>
    </div>
</div>

<!-- Success Toast (80.png) -->
<div id="registerSuccessToast" class="sp-toast-overlay" style="display:none;">
    <div class="sp-toast-card">
        <div class="sp-toast-icon sp-toast-success">
            <img src="resource/ui-elements/check.png" alt="">
        </div>
        <p class="sp-toast-message">注册成功</p>
    </div>
</div>

<script>
function showAgreementModal() {
    document.getElementById('agreementModal').style.display = 'flex';
}

function hideAgreementModal() {
    document.getElementById('agreementModal').style.display = 'none';
}

function acceptAgreement() {
    document.getElementById('agreeTerms').checked = true;
    hideAgreementModal();
}

function handleRegister(e) {
    e.preventDefault();
    document.getElementById('registerSuccessToast').style.display = 'flex';
    setTimeout(function() {
        document.getElementById('registerSuccessToast').style.display = 'none';
        window.location.href = 'login.php';
    }, 2000);
}
</script>

<?php include 'lib/htmlBody.php'; ?>
