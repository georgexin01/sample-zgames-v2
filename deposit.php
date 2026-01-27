<?php
/**
 * deposit.php - SUPERONG Mobile App
 * 充值 (Deposit Page)
 * 100% Match with deposit_bank充值_银行充值.png
 */

$pageName = 'chat';
$pageTitle = '充值';
$headerTitle = '充值';
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'fa-history';
$headerRightLink = 'deposit-record.php';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== DEPOSIT PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-form-page-container">

        <!-- Tab Navigation -->
        <div class="sp-tab-switch">
            <button class="sp-tab-btn active" data-tab="bank">银行充值</button>
            <button class="sp-tab-btn" data-tab="quick">快速充值</button>
        </div>

        <!-- Bank Deposit Form -->
        <form id="depositForm" class="sp-card-form">
            <!-- Bank Selection -->
            <div class="sp-form-card">
                <label class="sp-form-card-label">银行存款</label>
                <div class="sp-select-dropdown" onclick="toggleDropdown(this)">
                    <div class="sp-select-icon">
                        <img src="resource/ui-elements/bank-maybank.png" alt="MAYBANK">
                    </div>
                    <span class="sp-select-text">MAYBANK</span>
                    <i class="fas fa-chevron-down sp-select-arrow"></i>
                </div>

                <label class="sp-form-card-label" style="margin-top: 16px;">银行账号</label>
                <div class="sp-form-card-value">47736610099</div>
            </div>

            <!-- Amount Input -->
            <div class="sp-form-card">
                <label class="sp-form-card-label">提款金额</label>
                <input type="number" class="sp-form-card-input" placeholder="10 - 100000" min="10" max="100000">
            </div>

            <!-- Submit Button -->
            <div class="sp-form-actions">
                <button type="submit" class="sp-btn-submit">确认</button>
                <a href="#" class="sp-form-notice-link">充值注意事项</a>
            </div>
        </form>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
// Tab switching
document.querySelectorAll('.sp-tab-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.sp-tab-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});

function toggleDropdown(el) {
    el.classList.toggle('open');
}
</script>

<?php include 'lib/htmlBody.php'; ?>
