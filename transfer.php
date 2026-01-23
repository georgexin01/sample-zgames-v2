<?php
/**
 * transfer.php - SUPERONG Mobile App
 * 转帐 (Transfer Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'transfer';
$pageTitle = '转帐';
$headerTitle = '转帐';
$headerRightIcon = 'fa-history';
$headerRightLink = 'transfer-record.php';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Use global user data
global $currentUser;
?>

<!-- ========== TRANSFER PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Transfer Form -->
    <form id="transferForm" class="sp-form">
        <!-- User Selection -->
        <div class="sp-form-section">
            <label class="sp-form-label">转帐用户</label>
            <div class="sp-select-box" onclick="showSelectModal('user')">
                <div class="sp-select-icon">
                    <i class="fas fa-user"></i>
                </div>
                <span class="sp-select-value sp-placeholder" id="userValue">输入用户帐号</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>

        <!-- Amount Input -->
        <div class="sp-form-section">
            <label class="sp-form-label">转帐金额</label>
            <div class="sp-input-box">
                <input type="number" name="amount" id="amount" placeholder="10 - 100000" min="10" max="100000">
            </div>
        </div>

        <!-- Fee Info -->
        <div class="sp-form-section">
            <div class="sp-info-row-inline">
                <span class="sp-info-label">手续费</span>
                <span class="sp-info-value">0.00</span>
            </div>
        </div>

        <!-- Balance Info -->
        <div class="sp-balance-box">
            <span class="sp-balance-label">帐户余额</span>
            <span class="sp-balance-value"><?php echo number_format($currentUser['point'], 0); ?></span>
        </div>

        <!-- Submit Button -->
        <div class="sp-form-actions">
            <button type="button" class="sp-btn sp-btn-primary sp-btn-block" onclick="confirmTransfer()">确认转帐</button>
            <a href="#" class="sp-form-link">转帐注意事项</a>
        </div>
    </form>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
