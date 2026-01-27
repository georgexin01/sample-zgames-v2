<?php
/**
 * chatroom.php - SUPERONG Mobile App
 * 通讯录 (Contacts/Address Book Page)
 * 100% Match with resource/1/17.png
 */

$pageName = 'chat';
$pageTitle = '通讯录';
$headerTitle = '通讯录';
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'resource/ui-elements/settings.png';
$headerRightIconType = 'image';
$headerRightLink = 'chat-settings.php';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy contacts data
$contacts = [
    ['id' => 1, 'letter' => 'A', 'name' => 'AAA111'],
    ['id' => 2, 'letter' => 'A', 'name' => 'AAA222'],
];

// Group contacts by letter
$contactsByLetter = [];
foreach ($contacts as $contact) {
    $letter = $contact['letter'];
    if (!isset($contactsByLetter[$letter])) {
        $contactsByLetter[$letter] = [];
    }
    $contactsByLetter[$letter][] = $contact;
}
?>

<!-- ========== CONTACTS PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-contacts-container">

        <!-- Tab Switch -->
        <div class="sp-tab-switch">
            <a href="chatroom.php" class="sp-tab-btn active">通讯录</a>
            <a href="chat.php" class="sp-tab-btn">聊天</a>
        </div>

        <!-- Contacts Card -->
        <div class="sp-contacts-card">
            <!-- Search Box -->
            <div class="sp-contacts-search">
                <input type="text" placeholder="请输入玩家ID" class="sp-contacts-search-input">
                <img src="resource/ui-elements/search.png" alt="" class="sp-contacts-search-icon">
            </div>

            <!-- Contacts List -->
            <div class="sp-contacts-list">
                <?php foreach ($contactsByLetter as $letter => $letterContacts): ?>
                <div class="sp-contact-group">
                    <div class="sp-contact-letter"><?php echo htmlspecialchars($letter); ?></div>
                    <?php foreach ($letterContacts as $contact): ?>
                    <a href="chat-conversation.php?id=<?php echo $contact['id']; ?>" class="sp-contact-item">
                        <div class="sp-contact-avatar">
                            <img src="resource/ui-elements/user-purple.png" alt="" class="sp-contact-avatar-img">
                        </div>
                        <span class="sp-contact-name"><?php echo htmlspecialchars($contact['name']); ?></span>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </div>
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
