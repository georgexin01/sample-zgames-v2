<?php
/**
 * verification.php - SUPERONG Mobile App
 * 实名认证 (KYC/Real Name Verification Page)
 * 100% Match with resource/1/62.png
 */

$pageName = 'profile';
$pageTitle = '实名认证';
$headerTitle = '实名认证';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<main class="sp-page">
    <div class="sp-verification-container">
        <form id="verificationForm" onsubmit="handleVerification(event)">
            <div class="sp-verification-card">
                <!-- Real Name Field -->
                <div class="sp-verification-name-section">
                    <label class="sp-verification-label">真实名称</label>
                    <input type="text" class="sp-verification-name-input" placeholder="请输入真实名称" required>
                </div>

                <!-- Currency Select -->
                <div class="sp-verification-row">
                    <span class="sp-verification-row-label">货币</span>
                    <div class="sp-verification-row-divider"></div>
                    <select class="sp-verification-row-select" required>
                        <option value="">请选择货币</option>
                        <option value="MYR">MYR</option>
                        <option value="SGD">SGD</option>
                        <option value="THB">THB</option>
                    </select>
                    <i class="fas fa-chevron-down sp-verification-arrow"></i>
                </div>

                <!-- Bank Select -->
                <div class="sp-verification-row">
                    <span class="sp-verification-row-label">银行</span>
                    <div class="sp-verification-row-divider"></div>
                    <select class="sp-verification-row-select" required>
                        <option value="">请选择银行</option>
                        <option value="hlb">Hong Leong Bank</option>
                        <option value="maybank">Maybank</option>
                        <option value="cimb">CIMB Bank</option>
                        <option value="publicbank">Public Bank</option>
                    </select>
                    <i class="fas fa-chevron-down sp-verification-arrow"></i>
                </div>

                <!-- Bank Account Number -->
                <div class="sp-verification-row">
                    <span class="sp-verification-row-label">银行帐号</span>
                    <div class="sp-verification-row-divider"></div>
                    <input type="text" class="sp-verification-row-input" placeholder="请输入银行帐号" required>
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="sp-verification-submit-btn">确认</button>

            <!-- Notice Text -->
            <div class="sp-verification-notice">
                <p>注:请输入您的真实姓名、姓名需和银行户口一致，以便之后进行进分/洗分交易，我们不允许任何第三方姓名进行进分/洗分交易，一经发现不予处理。</p>
                <p>为您带来不便，请您谅解，谢谢。</p>
            </div>
        </form>
    </div>
</main>

<!-- Success Toast -->
<div class="sp-toast-overlay" id="verificationSuccessToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-message">实名认证成功</p>
    </div>
</div>

<div class="mobile-nav-spacer"></div>
<?php include 'lib/footer.php'; ?>

<script>
function handleVerification(e) {
    e.preventDefault();
    // Show success toast
    document.getElementById('verificationSuccessToast').classList.add('active');
    setTimeout(function() {
        document.getElementById('verificationSuccessToast').classList.remove('active');
        window.location.href = 'profile.php';
    }, 2000);
}
</script>

<?php include 'lib/htmlBody.php'; ?>
