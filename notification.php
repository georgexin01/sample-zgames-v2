<?php
/**
 * notification.php - SUPERONG Mobile App
 * 通知 (Notification Page)
 * 100% Match with notification通知.png
 */

$pageName = 'notification';
$pageTitle = '通知';
$headerTitle = '通知';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy notification data
$notifications = [
    [
        'status' => 'success',
        'title' => '充值成功',
        'date' => '2025-12-24 18:28:33',
        'bank' => 'Hong Leong Bank',
        'amount' => 'MYR 100'
    ],
    [
        'status' => 'pending',
        'title' => '充值处理中',
        'date' => '2025-12-24 18:25:33',
        'bank' => 'Hong Leong Bank',
        'amount' => 'MYR 100'
    ],
];
?>

<!-- ========== NOTIFICATION PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-notification-container">

        <!-- Tab Switch -->
        <div class="sp-tab-switch">
            <button class="sp-tab-btn active">通知</button>
            <button class="sp-tab-btn">最新消息</button>
        </div>

        <!-- Notification List -->
        <div class="sp-notification-list">
            <?php foreach ($notifications as $notif): ?>
            <div class="sp-notification-card">
                <div class="sp-notification-header">
                    <div class="sp-notification-icon <?php echo $notif['status']; ?>">
                        <?php if ($notif['status'] === 'success'): ?>
                        <i class="fas fa-check"></i>
                        <?php else: ?>
                        <i class="fas fa-clock"></i>
                        <?php endif; ?>
                    </div>
                    <span class="sp-notification-title"><?php echo htmlspecialchars($notif['title']); ?></span>
                    <span class="sp-notification-date"><?php echo htmlspecialchars($notif['date']); ?></span>
                </div>
                <div class="sp-notification-body">
                    <span class="sp-notification-bank"><?php echo htmlspecialchars($notif['bank']); ?></span>
                    <span class="sp-notification-amount"><?php echo htmlspecialchars($notif['amount']); ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</main>

<!-- Floating Customer Service Button -->
<a href="customer-service.php" class="sp-float-cs-btn">
    <i class="fas fa-headset"></i>
</a>

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
