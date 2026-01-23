<?php
/**
 * chatroom.php - SUPERONG Mobile App
 * 聊天室 (Chatroom Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'chatroom';
$pageTitle = '聊天室';
$headerTitle = '通讯录';
$headerRightIcon = 'fa-cog';
$headerRightLink = 'chat-settings.php';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy contacts data
$contacts = array(
    array(
        'id' => 1,
        'letter' => 'A',
        'name' => 'AAA111',
        'avatar' => 'resource/avatars/default.png',
    ),
    array(
        'id' => 2,
        'letter' => 'A',
        'name' => 'AAA222',
        'avatar' => 'resource/avatars/default.png',
    ),
);

// Dummy chat data
$chats = array(
    array(
        'id' => 1,
        'name' => 'AAA111',
        'avatar' => 'resource/avatars/default.png',
        'lastMessage' => 'SUPERONG超好玩',
        'time' => '04:29',
        'unread' => 0,
    ),
);

// Group contacts by letter
$contactsByLetter = array();
foreach ($contacts as $contact) {
    $letter = $contact['letter'];
    if (!isset($contactsByLetter[$letter])) {
        $contactsByLetter[$letter] = array();
    }
    $contactsByLetter[$letter][] = $contact;
}
?>

<!-- ========== CHATROOM PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Tab Navigation -->
    <div class="sp-tabs-container">
        <div class="sp-tabs" data-tab-group="chatroom">
            <button class="sp-tab active">通讯录</button>
            <button class="sp-tab">聊天</button>
        </div>
    </div>

    <!-- Tab Content: 通讯录 (Contacts) -->
    <div class="sp-tab-content" data-tab-content="chatroom" style="display: block;">
        <!-- Search Box -->
        <div class="sp-search-box">
            <input type="text" placeholder="请输入玩家ID">
            <i class="fas fa-search"></i>
        </div>

        <!-- Contacts List -->
        <div class="sp-contacts-list">
            <?php foreach ($contactsByLetter as $letter => $letterContacts): ?>
            <div class="sp-contact-group">
                <div class="sp-contact-letter"><?php echo e($letter); ?></div>
                <?php foreach ($letterContacts as $contact): ?>
                <a href="chat.php?id=<?php echo $contact['id']; ?>" class="sp-contact-item">
                    <div class="sp-contact-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="sp-contact-name"><?php echo e($contact['name']); ?></span>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Tab Content: 聊天 (Chat List) -->
    <div class="sp-tab-content" data-tab-content="chatroom" style="display: none;">
        <!-- Chat List -->
        <div class="sp-chat-list">
            <?php if (empty($chats)): ?>
            <div class="sp-empty">
                <i class="fas fa-comments sp-empty-icon"></i>
                <p class="sp-empty-text">暂无聊天记录</p>
            </div>
            <?php else: ?>
            <?php foreach ($chats as $chat): ?>
            <a href="chat.php?id=<?php echo $chat['id']; ?>" class="sp-chat-item">
                <div class="sp-chat-avatar">
                    <div class="sp-avatar-placeholder">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="sp-chat-content">
                    <div class="sp-chat-header">
                        <span class="sp-chat-name"><?php echo e($chat['name']); ?></span>
                        <span class="sp-chat-time"><?php echo e($chat['time']); ?></span>
                    </div>
                    <p class="sp-chat-message"><?php echo e($chat['lastMessage']); ?></p>
                </div>
                <?php if ($chat['unread'] > 0): ?>
                <span class="sp-chat-badge"><?php echo $chat['unread']; ?></span>
                <?php endif; ?>
            </a>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- Customer Service Button -->
    <div class="sp-cs-button-container">
        <a href="customer-service.php" class="sp-btn sp-btn-primary sp-btn-block">Customer Service</a>
    </div>

</main>

<?php
// Include footer (bottom nav + modals)
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
