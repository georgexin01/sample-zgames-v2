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
$headerRightIcon = 'fa-cog';
$headerRightDropdown = true;

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
            <div class="sp-swipe-container" data-id="<?php echo $chat['id']; ?>" data-name="<?php echo htmlspecialchars($chat['name']); ?>">
                <a href="chat-conversation.php?id=<?php echo $chat['id']; ?>" class="sp-chat-item sp-swipe-content">
                    <div class="sp-chat-avatar">
                        <div class="sp-chat-avatar-box"></div>
                    </div>
                    <div class="sp-chat-content">
                        <div class="sp-chat-name"><?php echo htmlspecialchars($chat['name']); ?></div>
                        <div class="sp-chat-preview"><?php echo htmlspecialchars($chat['lastMessage']); ?></div>
                    </div>
                    <div class="sp-chat-time"><?php echo htmlspecialchars($chat['time']); ?></div>
                </a>
                <div class="sp-swipe-actions">
                    <button type="button" class="sp-swipe-btn" onclick="event.stopPropagation(); addToBlacklist(this);">
                        <i class="fas fa-ban"></i>
                        <span>加入黑名单</span>
                    </button>
                    <button type="button" class="sp-swipe-btn" onclick="event.stopPropagation(); deleteFriend(this);">
                        <i class="fas fa-trash-alt"></i>
                        <span>删除好友</span>
                    </button>
                </div>
            </div>
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

<!-- Confirmation Modal (25.png, 32.png) -->
<div class="sp-confirm-overlay" id="confirmModal">
    <div class="sp-modal-card">
        <div class="sp-modal-icon" id="confirmIcon" style="display: none;">
            <i class="fas fa-trash-alt"></i>
        </div>
        <p class="sp-modal-title" id="confirmTitle">确认操作？</p>
        <p class="sp-modal-name" id="confirmName"></p>
        <div class="sp-modal-buttons">
            <button class="sp-modal-btn sp-modal-btn-cancel" onclick="closeConfirmModal()">取消</button>
            <button class="sp-modal-btn sp-modal-btn-confirm" onclick="confirmAction()">确定</button>
        </div>
    </div>
</div>

<!-- Success Toast (29.png, 33.png) -->
<div class="sp-toast-overlay" id="successToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-name" id="toastName"></p>
        <p class="sp-toast-message" id="toastMessage"></p>
    </div>
</div>

<?php include 'lib/footer.php'; ?>

<script>
// Swipe functionality
let startX = 0;
let currentX = 0;
let isDragging = false;
let currentSwipeItem = null;

document.querySelectorAll('.sp-swipe-container').forEach(container => {
    const content = container.querySelector('.sp-swipe-content');

    // Touch events for mobile
    content.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
        isDragging = true;
        closeAllSwipes();
    });

    content.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        currentX = e.touches[0].clientX;
        const diff = startX - currentX;

        if (diff > 20) {
            content.classList.add('swiped');
            currentSwipeItem = container;
            e.preventDefault();
        } else if (diff < -20) {
            content.classList.remove('swiped');
        }
    });

    content.addEventListener('touchend', () => {
        isDragging = false;
    });

    // Mouse events for desktop testing
    content.addEventListener('mousedown', (e) => {
        startX = e.clientX;
        isDragging = true;
        e.preventDefault();
    });

    content.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        currentX = e.clientX;
        const diff = startX - currentX;

        if (diff > 30) {
            content.classList.add('swiped');
            currentSwipeItem = container;
        }
    });

    content.addEventListener('mouseup', () => {
        isDragging = false;
    });

    content.addEventListener('mouseleave', () => {
        isDragging = false;
    });
});

function closeAllSwipes() {
    document.querySelectorAll('.sp-swipe-content.swiped').forEach(el => {
        if (currentSwipeItem && !currentSwipeItem.contains(el)) {
            el.classList.remove('swiped');
        }
    });
}

// Close swipe when clicking outside
document.addEventListener('click', (e) => {
    if (!e.target.closest('.sp-swipe-container')) {
        document.querySelectorAll('.sp-swipe-content.swiped').forEach(el => {
            el.classList.remove('swiped');
        });
    }
});

// Action handling
let pendingAction = null;
let pendingContainer = null;

function addToBlacklist(btn) {
    pendingContainer = btn.closest('.sp-swipe-container');
    const name = pendingContainer.dataset.name;
    // Hide icon for blacklist (25.png)
    document.getElementById('confirmIcon').style.display = 'none';
    document.getElementById('confirmTitle').textContent = '加入黑名单？';
    document.getElementById('confirmName').textContent = name;
    document.getElementById('confirmModal').classList.add('active');
    pendingAction = 'blacklist';
}

function deleteFriend(btn) {
    pendingContainer = btn.closest('.sp-swipe-container');
    const name = pendingContainer.dataset.name;
    // Show trash icon for delete (32.png)
    document.getElementById('confirmIcon').style.display = 'block';
    document.getElementById('confirmTitle').textContent = '删除该好友？';
    document.getElementById('confirmName').textContent = name;
    document.getElementById('confirmModal').classList.add('active');
    pendingAction = 'delete';
}

function closeConfirmModal() {
    document.getElementById('confirmModal').classList.remove('active');
    pendingAction = null;
}

function confirmAction() {
    const name = pendingContainer.dataset.name;
    closeConfirmModal();

    if (pendingAction === 'blacklist') {
        // 29.png: AAA111 (bold top), 已加入黑名单 (normal bottom)
        showToast(name, '已加入黑名单');
    } else if (pendingAction === 'delete') {
        // 33.png: 已删除好友 (bold top), AAA111 (normal bottom)
        showToast('已删除好友', name);
    }

    // Remove from list
    pendingContainer.remove();
}

function showToast(topText, bottomText) {
    document.getElementById('toastName').textContent = topText;
    document.getElementById('toastMessage').textContent = bottomText;
    document.getElementById('successToast').classList.add('active');

    setTimeout(() => {
        document.getElementById('successToast').classList.remove('active');
    }, 2000);
}

// Close modal on overlay click
document.getElementById('confirmModal').addEventListener('click', function(e) {
    if (e.target === this) closeConfirmModal();
});
</script>

<?php include 'lib/htmlBody.php'; ?>
