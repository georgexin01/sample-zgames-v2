<?php
/**
 * customer-service-chat.php - SUPERONG Mobile App
 * 客服聊天 (Customer Service Chat Page)
 * 100% Match with resource/1/24.png
 */

$topic = isset($_GET['topic']) ? $_GET['topic'] : 'general';

// Topic messages
$topicMessages = [
    'deposit' => '充值出现问题?',
    'withdraw' => '提款出现问题?',
    'records' => '记录无法查寻',
    'general' => '您好，请问有什么可以帮助您?',
];

$userMessage = isset($topicMessages[$topic]) ? $topicMessages[$topic] : $topicMessages['general'];

// Dummy chat messages
$messages = [
    ['type' => 'sent', 'text' => $userMessage, 'time' => '04:28'],
    ['type' => 'received', 'text' => '关于充值问题..............', 'time' => '04:29'],
];

$pageName = 'customer-service';
$pageTitle = 'Customer Service';
$headerTitle = 'Customer Service';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== CS CHAT PAGE CONTENT ========== -->
<main class="sp-page sp-chat-conversation-page">
    <div class="sp-conversation-container">

        <!-- CS Header (same design as chat-conversation) -->
        <div class="sp-conversation-user-header">
            <div class="sp-conversation-user-avatar">
                <img src="resource/ui-elements/logo-transparent.png" alt="" class="sp-conversation-avatar-img">
            </div>
            <span class="sp-conversation-user-name">Customer Service</span>
        </div>

        <!-- Messages Area -->
        <div class="sp-cs-chat-messages">
            <?php foreach ($messages as $msg): ?>
            <div class="sp-cs-message <?php echo $msg['type'] === 'sent' ? 'sp-cs-message-sent' : 'sp-cs-message-received'; ?>">
                <?php if ($msg['type'] === 'received'): ?>
                <div class="sp-cs-message-avatar">
                    <img src="resource/ui-elements/logo-transparent.png" alt="" class="sp-cs-message-avatar-img">
                </div>
                <?php endif; ?>
                <div class="sp-cs-message-bubble">
                    <?php echo htmlspecialchars($msg['text']); ?>
                </div>
                <?php if ($msg['type'] === 'sent'): ?>
                <div class="sp-cs-message-avatar">
                    <img src="resource/ui-elements/user-alt.png" alt="" class="sp-cs-message-avatar-img">
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Chat Input Bar (same design as customer-service) -->
        <div class="sp-cs-input-form">
            <div class="sp-cs-input-bar">
                <div class="sp-cs-input-wrapper">
                    <input type="text" class="sp-cs-input" placeholder="Tell me what do you want?">
                    <button class="sp-cs-mic-btn">
                        <img src="resource/icons/microphone-gray.png" alt="" class="sp-cs-mic-icon">
                    </button>
                </div>
            </div>
            <button class="sp-cs-send-btn" onclick="sendCSMessage()">
                <img src="resource/ui-elements/button-orange.png" alt="" class="sp-cs-send-icon">
            </button>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function sendCSMessage() {
    const input = document.querySelector('.sp-cs-input');
    const message = input.value.trim();
    if (message) {
        const messagesContainer = document.querySelector('.sp-cs-chat-messages');
        const msgDiv = document.createElement('div');
        msgDiv.className = 'sp-cs-message sp-cs-message-sent';
        msgDiv.innerHTML = `
            <div class="sp-cs-message-bubble">${message}</div>
            <div class="sp-cs-message-avatar">
                <img src="resource/ui-elements/user-alt.png" alt="" class="sp-cs-message-avatar-img">
            </div>
        `;
        messagesContainer.appendChild(msgDiv);
        input.value = '';
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }
}

document.querySelector('.sp-cs-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') sendCSMessage();
});
</script>

<?php include 'lib/htmlBody.php'; ?>
