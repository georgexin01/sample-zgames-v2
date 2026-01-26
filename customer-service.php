<?php
/**
 * customer-service.php - SUPERONG Mobile App
 * 客服 (Customer Service Page)
 * 100% Match with customer_service客服.png
 */

$pageName = 'customer-service';
$pageTitle = 'Customer Service';
$headerTitle = 'Customer Service';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== CUSTOMER SERVICE PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-cs-container">

        <!-- Logo -->
        <div class="sp-cs-logo">
            <i class="fas fa-crown"></i>
        </div>

        <!-- Welcome Title -->
        <h1 class="sp-cs-title">Welcome to SUPERONG!</h1>
        <p class="sp-cs-desc">SUPERONG 专业客服可以协助您解决所有问题, 并致力于为玩家提供良好的娱乐环境</p>

        <!-- Quick Action Buttons -->
        <div class="sp-cs-quick-actions">
            <a href="customer-service-chat.php?topic=deposit" class="sp-cs-action-btn">
                <i class="fas fa-wallet"></i>
                <span>充值出现问题?</span>
            </a>
            <a href="customer-service-chat.php?topic=withdraw" class="sp-cs-action-btn">
                <i class="fas fa-money-bill-wave"></i>
                <span>提款出现问题?</span>
            </a>
            <a href="customer-service-chat.php?topic=records" class="sp-cs-action-btn">
                <i class="fas fa-search"></i>
                <span>记录无法查寻</span>
            </a>
        </div>

        <!-- Chat Input Bar -->
        <div class="sp-cs-input-bar">
            <input type="text" class="sp-cs-input" placeholder="Tell me what do you want?">
            <button class="sp-cs-mic-btn"><i class="fas fa-microphone"></i></button>
            <button class="sp-cs-send-btn"><i class="fas fa-paper-plane"></i></button>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
