<?php
/**
 * chat.php - SUPERONG Mobile App
 * 聊天 (Chat List Page)
 * 100% Match with chat_list聊天列表.png
 */

$pageName = 'chat';
$pageTitle = '聊天';
$headerTitle = '聊天';
$headerRightIcon = 'fa-cog';
$headerRightLink = 'chat-settings.php';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy chat list
$chats = [
    [
        'id' => 'AAA111',
        'name' => 'AAA111',
        'lastMessage' => 'SUPERONG超好玩',
        'time' => '04:29',
    ],
];
?>

<!-- ========== CHAT LIST PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-chat-list-container">

        <!-- Tab Switch -->
        <div class="sp-tab-switch">
            <button class="sp-tab-btn">通讯录</button>
            <button class="sp-tab-btn active">聊天</button>
        </div>

        <!-- Chat List -->
        <div class="sp-chat-list">
            <?php foreach ($chats as $chat): ?>
            <a href="chat-conversation.php?user=<?php echo urlencode($chat['id']); ?>" class="sp-chat-item">
                <div class="sp-chat-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sp-chat-content">
                    <div class="sp-chat-name"><?php echo htmlspecialchars($chat['name']); ?></div>
                    <div class="sp-chat-preview"><?php echo htmlspecialchars($chat['lastMessage']); ?></div>
                </div>
                <div class="sp-chat-time"><?php echo htmlspecialchars($chat['time']); ?></div>
            </a>
            <?php endforeach; ?>
        </div>

        <!-- Customer Service Button -->
        <a href="customer-service.php" class="sp-cs-btn-outline">
            Customer Service
        </a>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
document.querySelectorAll('.sp-tab-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.sp-tab-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>

<?php include 'lib/htmlBody.php'; ?>
