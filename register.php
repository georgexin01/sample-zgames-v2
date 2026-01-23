<?php
/**
 * register.php - SUPERONG Mobile App
 * 注册帐号 (Register Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'register';
$pageTitle = '注册帐号';
$headerTitle = '注册帐号';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== REGISTER PAGE CONTENT ========== -->
<main class="sp-page-content sp-register-page">

    <!-- Register Form -->
    <form id="registerForm" class="sp-form">
        <!-- Account ID -->
        <div class="sp-form-section">
            <div class="sp-form-row">
                <span class="sp-form-row-label">账号</span>
                <div class="sp-form-row-input">
                    <input type="text" name="account" placeholder="4 - 10码英文数字">
                </div>
            </div>
            <p class="sp-input-hint">*范例：Abc123</p>
        </div>

        <!-- Password -->
        <div class="sp-form-section">
            <div class="sp-form-row">
                <span class="sp-form-row-label">密码</span>
                <div class="sp-form-row-input">
                    <input type="password" name="password" placeholder="请输入密码">
                </div>
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="sp-form-section">
            <div class="sp-form-row">
                <span class="sp-form-row-label">确认密码</span>
                <div class="sp-form-row-input">
                    <input type="password" name="confirmPassword" placeholder="请输入密码">
                </div>
            </div>
            <p class="sp-input-hint">*密码为6-15位,且同时包含字母和数字,不支持空格</p>
        </div>

        <!-- Referral Code -->
        <div class="sp-form-section">
            <div class="sp-form-row">
                <span class="sp-form-row-label">推荐码</span>
                <div class="sp-form-row-input">
                    <input type="text" name="referralCode" placeholder="请输入推荐码">
                </div>
            </div>
        </div>

        <!-- Terms Agreement -->
        <div class="sp-terms-checkbox">
            <input type="checkbox" id="agreeTerms" name="agreeTerms">
            <label for="agreeTerms">我已阅读并同意 <a href="terms.php">用户协议</a></label>
        </div>

        <!-- Submit Button -->
        <div class="sp-form-actions">
            <button type="submit" class="sp-btn sp-btn-primary">下一步</button>
        </div>
    </form>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
