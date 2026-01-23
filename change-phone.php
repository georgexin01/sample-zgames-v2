<?php
/**
 * change-phone.php - SUPERONG Mobile App
 * 修改手机号码 (Change Phone Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'change-phone';
$pageTitle = '修改手机号码';
$headerTitle = '修改手机号码';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Country codes
$countryCodes = array(
    array('code' => '+60', 'country' => 'MY'),
    array('code' => '+65', 'country' => 'SG'),
    array('code' => '+66', 'country' => 'TH'),
    array('code' => '+84', 'country' => 'VN'),
    array('code' => '+62', 'country' => 'ID'),
);
?>

<!-- ========== CHANGE PHONE PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Phone Form -->
    <form id="changePhoneForm" class="sp-form">
        <div class="sp-form-section">
            <label class="sp-form-label">新手机号码验证码</label>
            <div class="sp-phone-input-row">
                <div class="sp-country-code" onclick="showCountryCodeModal()">
                    <span id="countryCode">+60</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="sp-phone-input">
                    <input type="tel" name="phone" id="phone" placeholder="手机号码">
                </div>
            </div>
        </div>

        <div class="sp-form-section">
            <div class="sp-verification-row">
                <div class="sp-verification-label">验证码</div>
                <div class="sp-verification-input">
                    <input type="text" name="verifyCode" id="verifyCode" placeholder="请输入验证码">
                </div>
                <button type="button" class="sp-verify-btn" onclick="sendVerifyCode()">发送验证码</button>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="sp-form-actions">
            <button type="submit" class="sp-btn sp-btn-primary sp-btn-block">完成</button>
            <p class="sp-form-hint">没有收到验证码？ <a href="customer-service.php">联络我们</a></p>
        </div>
    </form>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
