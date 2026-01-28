<?php
/**
 * blacklist.php - SUPERONG Mobile App
 * 黑名单 (Blacklist Page)
 * 100% Match with resource/1/21.png
 */

$pageName = 'chat';
$pageTitle = '黑名单';
$headerTitle = '黑名单';
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'fa-cog';
$headerRightDropdown = true;

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy blacklist data
$blacklist = [
    ['id' => 1, 'name' => 'AAA111'],
    ['id' => 2, 'name' => 'AAA222'],
];
?>

<!-- ========== BLACKLIST PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-blacklist-container">

        <!-- Blacklist Card -->
        <div class="sp-blacklist-card">
            <?php foreach ($blacklist as $user): ?>
            <div class="sp-blacklist-item" data-id="<?php echo $user['id']; ?>" data-name="<?php echo htmlspecialchars($user['name']); ?>">
                <div class="sp-blacklist-avatar">
                    <img src="resource/ui-elements/user-alt-2.png" alt="" class="sp-blacklist-avatar-img">
                </div>
                <span class="sp-blacklist-name"><?php echo htmlspecialchars($user['name']); ?></span>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</main>

<!-- Unblock Confirmation Modal -->
<div class="sp-confirm-overlay" id="unblockModal">
    <div class="sp-modal-card">
        <p class="sp-modal-title">解除黑名单？</p>
        <p class="sp-modal-name" id="unblockUserName">AAA111</p>
        <div class="sp-modal-buttons">
            <button class="sp-modal-btn sp-modal-btn-cancel" onclick="closeUnblockModal()">取消</button>
            <button class="sp-modal-btn sp-modal-btn-confirm" onclick="confirmUnblock()">确定</button>
        </div>
    </div>
</div>

<!-- Success Toast -->
<div class="sp-toast-overlay" id="successToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-name" id="toastUserName">AAA111</p>
        <p class="sp-toast-message">已解除黑名单</p>
    </div>
</div>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
let currentUserId = null;
let currentUserName = '';

// Click on blacklist item to show unblock modal
document.querySelectorAll('.sp-blacklist-item').forEach(item => {
    item.addEventListener('click', function() {
        currentUserId = this.dataset.id;
        currentUserName = this.dataset.name;
        document.getElementById('unblockUserName').textContent = currentUserName;
        document.getElementById('unblockModal').classList.add('active');
    });
});

function closeUnblockModal() {
    document.getElementById('unblockModal').classList.remove('active');
}

function confirmUnblock() {
    closeUnblockModal();
    // Show success toast
    document.getElementById('toastUserName').textContent = currentUserName;
    document.getElementById('successToast').classList.add('active');

    // Remove from list
    const item = document.querySelector(`.sp-blacklist-item[data-id="${currentUserId}"]`);
    if (item) item.remove();

    // Hide toast after 2 seconds
    setTimeout(() => {
        document.getElementById('successToast').classList.remove('active');
    }, 2000);
}

// Close modal on overlay click
document.getElementById('unblockModal').addEventListener('click', function(e) {
    if (e.target === this) closeUnblockModal();
});
</script>

<?php include 'lib/htmlBody.php'; ?>
