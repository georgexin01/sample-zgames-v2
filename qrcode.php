<?php
/**
 * qrcode.php - SUPERONG Mobile App
 * 二维码 (QR Code Page)
 * 100% Match with resource/1/47.png
 */

$pageName = 'qrcode';
$pageTitle = '二维码';
$headerTitle = '二维码';
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'fa-download';
$headerRightLink = '#';

include 'lib/htmlHead.php';
include 'lib/header.php';

// User data
$username = 'SUPERONG123';
$referralCode = '123456';
?>

<!-- ========== QR CODE PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-qrcode-container">

        <!-- QR Card -->
        <div class="sp-qrcode-card">
            <h2 class="sp-qrcode-username"><?php echo htmlspecialchars($username); ?></h2>

            <div class="sp-qrcode-code-bar">
                <span class="sp-qrcode-label">推荐码</span>
                <span class="sp-qrcode-value"><?php echo htmlspecialchars($referralCode); ?></span>
                <i class="fas fa-copy sp-qrcode-copy" onclick="copyCode('<?php echo $referralCode; ?>')"></i>
            </div>

            <div class="sp-qrcode-image">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=<?php echo urlencode($username); ?>" alt="QR Code" class="sp-qrcode-img">
            </div>

            <p class="sp-qrcode-hint">扫描此二维码添加好友</p>
        </div>

        <!-- Scan Button -->
        <button class="sp-qrcode-scan-btn" onclick="scanQR()">扫一扫</button>

    </div>
</main>

<!-- Success Toast -->
<div class="sp-toast-overlay" id="copyToast" style="display: none;">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <img src="resource/ui-elements/check.png" alt="" class="sp-toast-icon-img">
        </div>
        <p class="sp-toast-message">复制成功</p>
    </div>
</div>

<div class="sp-toast-overlay" id="saveToast" style="display: none;">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <img src="resource/ui-elements/check.png" alt="" class="sp-toast-icon-img">
        </div>
        <p class="sp-toast-message">保存成功</p>
    </div>
</div>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function copyCode(code) {
    navigator.clipboard.writeText(code).then(function() {
        document.getElementById('copyToast').style.display = 'flex';
        setTimeout(function() {
            document.getElementById('copyToast').style.display = 'none';
        }, 1500);
    });
}

function scanQR() {
    alert('Scan QR feature');
}
</script>

<?php include 'lib/htmlBody.php'; ?>
