<?php
/**
 * notification.php - SUPERONG Mobile App
 * 通知 (Notification Page)
 * 100% Match with resource/1/30.png, 31.png
 */

$pageName = 'notification';
$pageTitle = '通知';
$headerTitle = '通知';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy notification data for 通知 tab
$notifications = [
    [
        'status' => 'success',
        'title' => '充值成功',
        'date' => '2025-12-24 18:28:33',
        'bank' => 'Hong Leong Bank',
        'bankIcon' => 'resource/bank/hlb.png',
        'amount' => 'MYR 100'
    ],
    [
        'status' => 'pending',
        'title' => '充值处理中',
        'date' => '2025-12-24 18:25:33',
        'bank' => 'Hong Leong Bank',
        'bankIcon' => 'resource/bank/hlb.png',
        'amount' => 'MYR 100'
    ],
];

// Dummy news data for 最新消息 tab (31.png)
$newsItems = [
    [
        'type' => '活动通知',
        'date' => '2025-12-24 18:28:33',
        'icon' => 'resource/ui-elements/logo-transparent.png',
        'title' => 'SUPERONG 全新上线！'
    ],
];
?>

<!-- ========== NOTIFICATION PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-notification-container">

        <!-- Tab Switch -->
        <div class="sp-tab-switch">
            <button type="button" class="sp-tab-btn" id="tabNotification" onclick="switchNotificationTab('notification')">通知</button>
            <button type="button" class="sp-tab-btn active" id="tabNews" onclick="switchNotificationTab('news')">最新消息</button>
        </div>

        <!-- Tab Content: 通知 -->
        <div class="sp-notification-list sp-tab-content" id="contentNotification" style="display: none;">
            <?php foreach ($notifications as $notif): ?>
            <div class="sp-notification-card">
                <div class="sp-notification-header">
                    <div class="sp-notification-icon <?php echo $notif['status']; ?>">
                        <?php if ($notif['status'] === 'success'): ?>
                        <img src="resource/ui-elements/check.png" alt="" class="sp-notification-icon-img">
                        <?php else: ?>
                        <img src="resource/ui-elements/history-orange.png" alt="" class="sp-notification-icon-img">
                        <?php endif; ?>
                    </div>
                    <span class="sp-notification-title"><?php echo htmlspecialchars($notif['title']); ?></span>
                    <span class="sp-notification-date"><?php echo htmlspecialchars($notif['date']); ?></span>
                </div>
                <div class="sp-notification-body">
                    <div class="sp-notification-bank">
                        <img src="<?php echo htmlspecialchars($notif['bankIcon']); ?>" alt="" class="sp-notification-bank-icon">
                        <span><?php echo htmlspecialchars($notif['bank']); ?></span>
                    </div>
                    <span class="sp-notification-amount"><?php echo htmlspecialchars($notif['amount']); ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Tab Content: 最新消息 (31.png) -->
        <div class="sp-news-list sp-tab-content" id="contentNews">
            <?php foreach ($newsItems as $news): ?>
            <div class="sp-news-card">
                <div class="sp-news-header">
                    <div class="sp-news-type-icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <span class="sp-news-type"><?php echo htmlspecialchars($news['type']); ?></span>
                    <span class="sp-news-date"><?php echo htmlspecialchars($news['date']); ?></span>
                </div>
                <div class="sp-news-body">
                    <div class="sp-news-logo">
                        <img src="<?php echo htmlspecialchars($news['icon']); ?>" alt="" class="sp-news-logo-img">
                    </div>
                    <span class="sp-news-title"><?php echo htmlspecialchars($news['title']); ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</main>

<!-- Floating Customer Service Button -->
<a href="customer-service.php" class="sp-floating-cs-btn">
    <img src="resource/ui-elements/customer-service.png" alt="Customer Service" class="sp-floating-cs-icon">
</a>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function switchNotificationTab(tab) {
    // Update tab buttons
    document.getElementById('tabNotification').classList.remove('active');
    document.getElementById('tabNews').classList.remove('active');

    // Hide all content
    document.getElementById('contentNotification').style.display = 'none';
    document.getElementById('contentNews').style.display = 'none';

    // Show selected tab
    if (tab === 'notification') {
        document.getElementById('tabNotification').classList.add('active');
        document.getElementById('contentNotification').style.display = 'block';
    } else {
        document.getElementById('tabNews').classList.add('active');
        document.getElementById('contentNews').style.display = 'block';
    }
}
</script>

<?php include 'lib/htmlBody.php'; ?>
