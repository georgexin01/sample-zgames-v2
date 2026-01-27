<?php
/**
 * chat.php - SUPERONG Mobile App
 * 聊天 (Chat List Page)
 * 100% Match with resource/1/18.png
 */

$pageName = 'chat';
$pageTitle = '聊天';
$headerTitle = '聊天';
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'resource/ui-elements/settings.png';
$headerRightIconType = 'image';
$headerRightLink = 'chat-settings.php';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy chat list
$chats = [
    [
        'id' => 1,
        'name' => 'AAA111',
        'lastMessage' => 'SUPERONG超好玩',
        'time' => '04:29',
    ],
];
?>

<!-- ========== CHAT LIST PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-chat-list-container">

        <!-- Tab Switch -->
        <div class="sp-tab-switch">
            <a href="chatroom.php" class="sp-tab-btn">通讯录</a>
            <a href="chat.php" class="sp-tab-btn active">聊天</a>
        </div>

        <!-- Chat List Card -->
        <div class="sp-chat-list-card">
            <?php foreach ($chats as $chat): ?>
            <a href="chat-conversation.php?id=<?php echo $chat['id']; ?>" class="sp-chat-item">
                <div class="sp-chat-avatar">
                    <div class="sp-chat-avatar-box"></div>
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
        <a href="customer-service.php" class="sp-cs-btn-full">
            Customer Service
        </a>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
