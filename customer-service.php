<?php
/**
 * customer-service.php - SUPERONG Mobile App
 * 客服 (Customer Service Page)
 * 100% Match with resource/1/19.png
 */

$pageName = 'customer-service';
$pageTitle = 'Customer Service';
$headerTitle = 'Customer Service';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== CUSTOMER SERVICE PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-cs-container">

        <!-- Welcome Card -->
        <div class="sp-cs-welcome-card">
            <!-- Logo -->
            <div class="sp-cs-logo">
                <img src="resource/ui-elements/logo-transparent.png" alt="SUPERONG" class="sp-cs-logo-img">
            </div>

            <!-- Welcome Title -->
            <h1 class="sp-cs-title">Welcome to SUPERONG!</h1>
            <p class="sp-cs-desc">SUPERONG 专业客服可以协助您解决所有问题, 并致力于为玩家提供良好的娱乐环境</p>

            <!-- Quick Action Buttons -->
            <div class="sp-cs-quick-actions">
                <a href="customer-service-chat.php?topic=deposit" class="sp-cs-action-btn">
                    <img src="resource/icons/chat-blue.png" alt="" class="sp-cs-action-icon">
                    <span>充值出现问题?</span>
                </a>
                <a href="customer-service-chat.php?topic=withdraw" class="sp-cs-action-btn">
                    <img src="resource/icons/chat-blue.png" alt="" class="sp-cs-action-icon">
                    <span>提款出现问题?</span>
                </a>
                <a href="customer-service-chat.php?topic=records" class="sp-cs-action-btn">
                    <img src="resource/icons/edit-blue.png" alt="" class="sp-cs-action-icon">
                    <span>记录无法查寻</span>
                </a>
            </div>
        </div>

        <!-- Chat Input Bar -->
        <div class="sp-cs-input-form">
            <div class="sp-cs-input-bar">
                <div class="sp-cs-input-wrapper">
                    <input type="text" class="sp-cs-input" placeholder="Tell me what do you want?">
                    <button class="sp-cs-mic-btn">
                        <img src="resource/icons/microphone-gray.png" alt="" class="sp-cs-mic-icon">
                    </button>
                </div>
            </div>
            <button class="sp-cs-send-btn">
                <img src="resource/ui-elements/button-orange.png" alt="" class="sp-cs-send-icon">
            </button>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
