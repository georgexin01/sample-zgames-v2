<?php
/**
 * withdraw.php - SUPERONG Mobile App
 * 提款 (Withdraw Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'withdraw';
$pageTitle = '提款';
$headerTitle = '提款';
$headerRightIcon = 'fa-history';
$headerRightLink = 'withdraw-record.php';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Currency options
$currencies = array(
    array('code' => 'SGD', 'name' => 'SGD', 'icon' => 'resource/icons/sgd.png'),
    array('code' => 'MYR', 'name' => 'MYR', 'icon' => 'resource/icons/myr.png'),
);

// Bank options
$banks = array(
    array('code' => 'maybank', 'name' => 'MAYBANK', 'icon' => 'resource/icons/maybank.png'),
    array('code' => 'hong-leong', 'name' => 'Hong Leong Bank', 'icon' => 'resource/icons/hlb.png'),
);
?>

<!-- ========== WITHDRAW PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Withdraw Form -->
    <form id="withdrawForm" class="sp-form">
        <!-- Currency Selection -->
        <div class="sp-form-section">
            <label class="sp-form-label">提款货币</label>
            <div class="sp-select-box" onclick="showSelectModal('currency')">
                <div class="sp-select-icon">
                    <img src="resource/icons/sgd.png" alt="SGD" id="currencyIcon">
                </div>
                <span class="sp-select-value" id="currencyValue">SGD</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>

        <!-- Bank Selection -->
        <div class="sp-form-section">
            <label class="sp-form-label">选择银行</label>
            <div class="sp-select-box" onclick="showSelectModal('bank')">
                <div class="sp-select-icon">
                    <img src="resource/icons/maybank.png" alt="MAYBANK" id="bankIcon">
                </div>
                <span class="sp-select-value" id="bankValue">MAYBANK</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>

        <!-- Bank Account Info -->
        <div class="sp-form-section">
            <div class="sp-info-row-inline">
                <span class="sp-info-label">银行帐号</span>
                <span class="sp-info-value">ALI（系统绑定实名认证）</span>
            </div>
        </div>

        <!-- Amount Input -->
        <div class="sp-form-section">
            <label class="sp-form-label">提款金额</label>
            <div class="sp-input-box">
                <input type="number" name="amount" id="amount" placeholder="10 - 100000" min="10" max="100000">
            </div>
        </div>

        <!-- Submit Button -->
        <div class="sp-form-actions">
            <button type="submit" class="sp-btn sp-btn-primary sp-btn-block">确认提款</button>
            <a href="#" class="sp-form-link">提款注意事项</a>
        </div>
    </form>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
