<?php
/**
 * withdraw.php - SUPERONG Mobile App
 * 提款 (Withdrawal Page)
 * 100% Match with withdrawal提款.png
 */

$pageName = 'withdraw';
$pageTitle = '提款';
$headerTitle = '提款';
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'fa-history';
$headerRightLink = 'withdrawal-record.php';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== WITHDRAWAL PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-form-page-container">

        <!-- Withdrawal Form -->
        <form id="withdrawForm" class="sp-card-form">
            <!-- Currency Selection -->
            <div class="sp-form-card">
                <label class="sp-form-card-label">提款货币</label>
                <div class="sp-select-dropdown" onclick="toggleDropdown(this)">
                    <div class="sp-select-icon">
                        <img src="resource/ui-elements/flag-sg.png" alt="SGD">
                    </div>
                    <span class="sp-select-text">SGD</span>
                    <i class="fas fa-chevron-down sp-select-arrow"></i>
                </div>
            </div>

            <!-- Bank Selection -->
            <div class="sp-form-card">
                <label class="sp-form-card-label">选择银行</label>
                <div class="sp-select-dropdown" onclick="toggleDropdown(this)">
                    <div class="sp-select-icon">
                        <img src="resource/ui-elements/bank-maybank.png" alt="MAYBANK">
                    </div>
                    <span class="sp-select-text">MAYBANK</span>
                    <i class="fas fa-chevron-down sp-select-arrow"></i>
                </div>

                <label class="sp-form-card-label" style="margin-top: 16px;">银行帐号</label>
                <div class="sp-form-card-value">ALI（系统绑定实名认证）</div>
            </div>

            <!-- Amount Input -->
            <div class="sp-form-card">
                <label class="sp-form-card-label">提款金额</label>
                <input type="number" class="sp-form-card-input" placeholder="10 - 100000" min="10" max="100000">
            </div>

            <!-- Submit Button -->
            <div class="sp-form-actions">
                <button type="submit" class="sp-btn-submit">确认提款</button>
                <a href="#" class="sp-form-notice-link">提款注意事项</a>
            </div>
        </form>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function toggleDropdown(el) {
    el.classList.toggle('open');
}
</script>

<?php include 'lib/htmlBody.php'; ?>
