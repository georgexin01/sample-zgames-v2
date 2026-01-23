<?php
/**
 * customer-service.php - SUPERONG Mobile App
 * 客服 (Customer Service Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'customer-service';
$pageTitle = 'Customer Service';
$headerTitle = 'Customer Service';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Quick options
$quickOptions = array(
    array('icon' => 'fas fa-wallet', 'text' => '充值出现问题?'),
    array('icon' => 'fas fa-money-bill-wave', 'text' => '提款出现问题?'),
    array('icon' => 'fas fa-search', 'text' => '记录无法查寻'),
);

// Dummy chat messages (for conversation view)
$messages = array(
    array(
        'id' => 1,
        'type' => 'sent',
        'text' => '充值出现问题?',
        'time' => '10:30',
    ),
    array(
        'id' => 2,
        'type' => 'received',
        'text' => '关于充值问题..............',
        'time' => '10:31',
    ),
);

// Check if in conversation mode
$inConversation = isset($_GET['chat']) && $_GET['chat'] === '1';
?>

<!-- ========== CUSTOMER SERVICE PAGE CONTENT ========== -->
<main class="sp-page-content sp-cs-page">

    <?php if (!$inConversation): ?>
    <!-- Welcome Screen -->
    <div class="sp-cs-welcome">
        <div class="sp-cs-logo">
            <img src="resource/logo/logo-icon.png" alt="SUPERONG" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
            <div class="sp-cs-logo-placeholder" style="display:none;">
                <i class="fas fa-crown"></i>
            </div>
        </div>
        <h1 class="sp-cs-title">Welcome to SUPERONG!</h1>
        <p class="sp-cs-desc">SUPERONG 专业客服可以协助您解决所有问题, 并致力于为玩家提供良好的娱乐环境</p>

        <!-- Quick Options -->
        <div class="sp-cs-options">
            <?php foreach ($quickOptions as $option): ?>
            <a href="customer-service.php?chat=1" class="sp-cs-option">
                <i class="<?php echo $option['icon']; ?>"></i>
                <span><?php echo e($option['text']); ?></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>

    <?php else: ?>
    <!-- Chat Conversation -->
    <div class="sp-chat-user-info sp-cs-user-info">
        <div class="sp-chat-user-avatar">
            <div class="sp-cs-avatar">
                <i class="fas fa-crown"></i>
            </div>
        </div>
        <span class="sp-chat-user-name">Customer Service</span>
    </div>

    <!-- Chat Messages -->
    <div class="sp-chat-messages">
        <?php foreach ($messages as $msg): ?>
        <div class="sp-chat-message <?php echo $msg['type'] === 'sent' ? 'sp-sent' : 'sp-received'; ?>">
            <?php if ($msg['type'] === 'received'): ?>
            <div class="sp-message-avatar">
                <div class="sp-cs-avatar-small">
                    <i class="fas fa-crown"></i>
                </div>
            </div>
            <?php endif; ?>
            <div class="sp-chat-bubble sp-chat-bubble-<?php echo $msg['type']; ?>">
                <?php echo e($msg['text']); ?>
            </div>
            <?php if ($msg['type'] === 'sent'): ?>
            <div class="sp-message-avatar">
                <div class="sp-avatar-small sp-avatar-user">
                    <i class="fas fa-user"></i>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <!-- Chat Input Bar -->
    <div class="sp-chat-input-bar">
        <div class="sp-chat-input-wrapper">
            <input type="text" placeholder="Tell me what do you want?" class="sp-chat-input">
            <button type="button" class="sp-voice-btn">
                <i class="fas fa-microphone"></i>
            </button>
        </div>
        <button type="button" class="sp-chat-send-btn">
            <i class="fas fa-paper-plane"></i>
        </button>
    </div>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
