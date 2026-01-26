<?php
/**
 * transfer.php - SUPERONG Mobile App
 * 转帐 (Transfer Page)
 * 100% Match with transfer转帐.png
 */

$pageName = 'transfer';
$pageTitle = '转帐';
$headerTitle = '转帐';
$headerRightIcon = 'fa-history';
$headerRightLink = 'transfer-record.php';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy balance
$balance = 10000;
?>

<!-- ========== TRANSFER PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-form-page-container">

        <!-- Transfer Form -->
        <form id="transferForm" class="sp-card-form">
            <!-- User Selection -->
            <div class="sp-form-card">
                <label class="sp-form-card-label">转帐用户</label>
                <div class="sp-select-dropdown" onclick="toggleDropdown(this)">
                    <div class="sp-select-icon">
                        <i class="fas fa-user" style="color: #1a1a3a; font-size: 16px;"></i>
                    </div>
                    <span class="sp-select-text" style="color: #999;">输入用户帐号</span>
                    <i class="fas fa-chevron-down sp-select-arrow"></i>
                </div>
            </div>

            <!-- Amount & Fee Card -->
            <div class="sp-form-card">
                <label class="sp-form-card-label">转帐金额</label>
                <input type="number" class="sp-form-card-input" placeholder="10 - 100000" min="10" max="100000">

                <div class="sp-info-row" style="margin-top: 12px;">
                    <span class="sp-info-label">手续费</span>
                    <span class="sp-info-value">0.00</span>
                </div>
            </div>

            <!-- Balance Card -->
            <div class="sp-form-card">
                <label class="sp-form-card-label">帐户余额</label>
                <div class="sp-balance-display"><?php echo number_format($balance, 0); ?></div>
            </div>

            <!-- Submit Button -->
            <div class="sp-form-actions">
                <button type="button" class="sp-btn-submit" onclick="confirmTransfer()">确认转帐</button>
                <a href="#" class="sp-form-notice-link">转帐注意事项</a>
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

function confirmTransfer() {
    // Show password modal
    document.getElementById('passwordModalTitle').textContent = '输入支付密码';
    document.getElementById('passwordModal').classList.add('active');
}
</script>

<?php include 'lib/htmlBody.php'; ?>
