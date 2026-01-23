<?php
/**
 * kyc.php - SUPERONG Mobile App
 * 实名认证 (KYC Verification Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'kyc';
$pageTitle = '实名认证';
$headerTitle = '实名认证';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Currency options
$currencies = array(
    array('code' => 'MYR', 'name' => 'MYR'),
    array('code' => 'SGD', 'name' => 'SGD'),
);

// Bank options
$banks = array(
    array('code' => 'maybank', 'name' => 'MAYBANK'),
    array('code' => 'hong-leong', 'name' => 'Hong Leong Bank'),
    array('code' => 'cimb', 'name' => 'CIMB Bank'),
);
?>

<!-- ========== KYC PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- KYC Form -->
    <form id="kycForm" class="sp-form">
        <!-- Real Name -->
        <div class="sp-form-section">
            <label class="sp-form-label">真实名称</label>
            <div class="sp-input-box">
                <input type="text" name="realName" id="realName" placeholder="请输入真实名称">
            </div>
        </div>

        <!-- Currency Selection -->
        <div class="sp-form-section">
            <div class="sp-form-row">
                <span class="sp-form-row-label">货币</span>
                <div class="sp-form-row-value" onclick="showSelectModal('currency')">
                    <span id="currencyValue">请选择货币</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </div>

        <!-- Bank Selection -->
        <div class="sp-form-section">
            <div class="sp-form-row">
                <span class="sp-form-row-label">银行</span>
                <div class="sp-form-row-value" onclick="showSelectModal('bank')">
                    <span id="bankValue">请选择银行</span>
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </div>

        <!-- Bank Account -->
        <div class="sp-form-section">
            <div class="sp-form-row">
                <span class="sp-form-row-label">银行帐号</span>
                <div class="sp-form-row-input">
                    <input type="text" name="bankAccount" id="bankAccount" placeholder="请输入银行帐号">
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="sp-form-actions">
            <button type="submit" class="sp-btn sp-btn-primary sp-btn-block">确认</button>
        </div>

        <!-- Notice -->
        <div class="sp-form-notice">
            <p>注:请输入您的真实姓名，姓名要和银行户口一致，以便之后进行违分/洗分交易，我们不光于任何第三方姓名进行违分/洗分交易，一经发现不予处理。</p>
            <p>为您带来不便，敬请谅解，谢谢。</p>
        </div>
    </form>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
