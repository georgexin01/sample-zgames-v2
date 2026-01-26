<?php
/**
 * qrcode.php - SUPERONG Mobile App
 * 二维码 (QR Code Page)
 * 100% Match with qrcode二维码.png
 */

$pageName = 'qrcode';
$pageTitle = '二维码';
$headerTitle = '二维码';
$headerRightIcon = 'fa-download';
$headerRightLink = '#';

include 'lib/htmlHead.php';
include 'lib/header.php';

// User data
$user = [
    'username' => 'SUPERONG123',
    'referralCode' => '123456',
];
?>

<!-- ========== QR CODE PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-qrcode-container">

        <!-- Username -->
        <h2 class="sp-qrcode-username"><?php echo htmlspecialchars($user['username']); ?></h2>

        <!-- Referral Code -->
        <div class="sp-referral-row">
            <span class="sp-referral-label">推荐码</span>
            <div class="sp-referral-value">
                <span id="refCode"><?php echo htmlspecialchars($user['referralCode']); ?></span>
                <button class="sp-copy-btn" onclick="copyToClipboard('refCode')">
                    <i class="far fa-copy"></i>
                </button>
            </div>
        </div>

        <!-- QR Code Card -->
        <div class="sp-qrcode-card">
            <div class="sp-qrcode-image">
                <!-- Placeholder QR Code -->
                <div class="sp-qrcode-placeholder">
                    <i class="fas fa-qrcode"></i>
                </div>
            </div>
            <p class="sp-qrcode-hint">扫描此二维码添加好友</p>
        </div>

        <!-- Scan Button -->
        <button class="sp-btn-submit" onclick="openScanner()">扫一扫</button>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function copyToClipboard(elementId) {
    const text = document.getElementById(elementId).textContent;
    navigator.clipboard.writeText(text).then(() => {
        alert('已复制: ' + text);
    });
}

function openScanner() {
    alert('扫一扫功能');
}
</script>

<?php include 'lib/htmlBody.php'; ?>
