<?php
/**
 * change-password.php - SUPERONG Mobile App
 * 修改密码 (Change Password Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'change-password';
$pageTitle = '修改密码';
$headerTitle = '修改密码';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== CHANGE PASSWORD PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Step Indicator -->
    <div class="sp-step-indicator">
        <span class="sp-step active">1</span>
        <span class="sp-step-line"></span>
        <span class="sp-step">2</span>
        <span class="sp-step-line"></span>
        <span class="sp-step">3</span>
    </div>

    <!-- Password Form -->
    <form id="changePasswordForm" class="sp-form">
        <div class="sp-password-section">
            <h3 class="sp-password-title">请输入支付密码</h3>
            <div class="sp-password-inputs">
                <input type="password" maxlength="1" class="sp-password-box" data-index="0">
                <input type="password" maxlength="1" class="sp-password-box" data-index="1">
                <input type="password" maxlength="1" class="sp-password-box" data-index="2">
                <input type="password" maxlength="1" class="sp-password-box" data-index="3">
                <input type="password" maxlength="1" class="sp-password-box" data-index="4">
                <input type="password" maxlength="1" class="sp-password-box" data-index="5">
            </div>
            <p class="sp-step-counter">(1/3)</p>
        </div>

        <!-- Submit Button -->
        <div class="sp-form-actions">
            <button type="submit" class="sp-btn sp-btn-primary sp-btn-block">下一步</button>
        </div>
    </form>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
