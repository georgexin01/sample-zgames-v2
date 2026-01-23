<?php
/**
 * deposit.php - SUPERONG Mobile App
 * 充值 (Deposit Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'deposit';
$pageTitle = '充值';
$headerTitle = '充值';
$headerRightIcon = 'fa-history';
$headerRightLink = 'deposit-record.php';

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
    array('code' => 'cimb', 'name' => 'CIMB Bank', 'icon' => 'resource/icons/cimb.png'),
);
?>

<!-- ========== DEPOSIT PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Tab Navigation -->
    <div class="sp-tabs-container">
        <div class="sp-tabs" data-tab-group="deposit">
            <button class="sp-tab">银行充值</button>
            <button class="sp-tab active">快速充值</button>
        </div>
    </div>

    <!-- Deposit Form -->
    <form id="depositForm" class="sp-form">
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
            <label class="sp-form-label">银行存款</label>
            <div class="sp-select-box" onclick="showSelectModal('bank')">
                <div class="sp-select-icon">
                    <img src="resource/icons/maybank.png" alt="MAYBANK" id="bankIcon">
                </div>
                <span class="sp-select-value" id="bankValue">MAYBANK</span>
                <i class="fas fa-chevron-down"></i>
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
            <button type="submit" class="sp-btn sp-btn-primary sp-btn-block">立即充值</button>
            <a href="#" class="sp-form-link">充值注意事项</a>
        </div>
    </form>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
