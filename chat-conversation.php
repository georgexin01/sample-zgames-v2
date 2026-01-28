<?php
/**
 * chat-conversation.php - SUPERONG Mobile App
 * 私聊 (Private Chat Page)
 * 100% Match with resource/1/20.png
 */

// Get user ID
$userId = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Users data (dummy)
$users = [
    1 => ['id' => 1, 'name' => 'AAA111'],
    2 => ['id' => 2, 'name' => 'AAA222'],
];

// Default to first user if not found
if (!isset($users[$userId])) {
    $userId = 1;
}
$user = $users[$userId];

// Dummy chat messages
$messages = [
    ['type' => 'sent', 'text' => '我的介绍怎么样?', 'time' => '04:28'],
    ['type' => 'received', 'text' => 'SUPERONG超好玩', 'time' => '04:29'],
];

// Page settings
$pageName = 'chat';
$pageTitle = $user['name'];
$headerTitle = $user['name'];
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== CHAT CONVERSATION PAGE CONTENT ========== -->
<main class="sp-page sp-chat-conversation-page">
    <div class="sp-conversation-container">

        <!-- User Info Header -->
        <div class="sp-conversation-user-header">
            <div class="sp-conversation-user-avatar">
                <div class="sp-conversation-avatar-box"></div>
            </div>
            <span class="sp-conversation-user-name"><?php echo htmlspecialchars($user['name']); ?></span>
        </div>

        <!-- Messages Area -->
        <div class="sp-conversation-messages">
            <?php foreach ($messages as $msg): ?>
            <div class="sp-message <?php echo $msg['type'] === 'sent' ? 'sp-message-sent' : 'sp-message-received'; ?>">
                <?php if ($msg['type'] === 'received'): ?>
                <div class="sp-message-avatar">
                    <img src="resource/ui-elements/user-alt.png" alt="" class="sp-message-avatar-img">
                </div>
                <?php endif; ?>
                <div class="sp-message-bubble">
                    <?php echo htmlspecialchars($msg['text']); ?>
                </div>
                <?php if ($msg['type'] === 'sent'): ?>
                <div class="sp-message-avatar">
                    <img src="resource/ui-elements/user-alt.png" alt="" class="sp-message-avatar-img">
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Chat Input Bar (same design as customer-service) -->
        <div class="sp-cs-input-form">
            <div class="sp-cs-input-bar">
                <div class="sp-cs-input-wrapper">
                    <input type="text" class="sp-cs-input sp-conversation-input" placeholder="Tell me what do you want?">
                    <button class="sp-cs-mic-btn">
                        <img src="resource/icons/microphone-gray.png" alt="" class="sp-cs-mic-icon">
                    </button>
                </div>
            </div>
            <button class="sp-cs-send-btn" onclick="sendMessage()">
                <img src="resource/ui-elements/button-orange.png" alt="" class="sp-cs-send-icon">
            </button>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function sendMessage() {
    const input = document.querySelector('.sp-conversation-input');
    const message = input.value.trim();
    if (message) {
        // Add message to chat (dummy - would send to server in real app)
        const messagesContainer = document.querySelector('.sp-conversation-messages');
        const msgDiv = document.createElement('div');
        msgDiv.className = 'sp-message sp-message-sent';
        msgDiv.innerHTML = `
            <div class="sp-message-bubble">${message}</div>
            <div class="sp-message-avatar">
                <img src="resource/ui-elements/user-alt.png" alt="" class="sp-message-avatar-img">
            </div>
        `;
        messagesContainer.appendChild(msgDiv);
        input.value = '';
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }
}

// Send on Enter key
document.querySelector('.sp-conversation-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});
</script>

<?php include 'lib/htmlBody.php'; ?>
