<?php
/**
 * chat.php - SUPERONG Mobile App
 * 聊天 (Chat Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'chat';
$pageTitle = '聊天';

// Get chat user from URL parameter
$chatUserId = isset($_GET['user']) ? $_GET['user'] : '';
$headerTitle = $chatUserId ? $chatUserId : '聊天';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Chat user data (dummy)
$chatUser = array(
    'id' => 'AAA111',
    'name' => 'AAA111',
    'avatar' => null,
);

// Dummy messages
$messages = array(
    array(
        'id' => 1,
        'type' => 'sent',
        'text' => '我的介绍怎么样？',
        'time' => '10:30',
    ),
    array(
        'id' => 2,
        'type' => 'received',
        'text' => 'SUPERONG超好玩',
        'time' => '10:31',
    ),
);
?>

<!-- ========== CHAT PAGE CONTENT ========== -->
<main class="sp-page-content sp-chat-page">

    <!-- Chat User Info -->
    <div class="sp-chat-user-info">
        <div class="sp-chat-user-avatar">
            <div class="sp-avatar-placeholder">
                <i class="fas fa-user"></i>
            </div>
        </div>
        <span class="sp-chat-user-name"><?php echo e($chatUser['name']); ?></span>
    </div>

    <!-- Chat Messages -->
    <div class="sp-chat-messages">
        <?php foreach ($messages as $msg): ?>
        <div class="sp-chat-message <?php echo $msg['type'] === 'sent' ? 'sp-sent' : 'sp-received'; ?>">
            <?php if ($msg['type'] === 'received'): ?>
            <div class="sp-message-avatar">
                <div class="sp-avatar-small">
                    <i class="fas fa-user"></i>
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
