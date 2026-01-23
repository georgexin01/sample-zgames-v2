<?php
/**
 * notification.php - SUPERONG Mobile App
 * 通知 (Notification Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'notification';
$pageTitle = '通知';
$headerTitle = '通知';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy notification data
$notifications = array(
    array(
        'type' => 'success',
        'icon' => 'fa-check-circle',
        'title' => '充值成功',
        'date' => '2025-12-24 18:28:33',
        'bank' => 'Hong Leong Bank',
        'amount' => 'MYR 100'
    ),
    array(
        'type' => 'pending',
        'icon' => 'fa-clock',
        'title' => '充值处理中',
        'date' => '2025-12-24 18:25:33',
        'bank' => 'Hong Leong Bank',
        'amount' => 'MYR 100'
    ),
);

$latestNews = array(
    array(
        'icon' => 'fa-bell',
        'iconBg' => 'warning',
        'title' => '活动通知',
        'date' => '2025-12-24 18:28:33',
        'content' => 'SUPERONG 全新上线！'
    ),
);
?>

<!-- ========== NOTIFICATION PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Tab Navigation -->
    <div class="sp-tabs-container">
        <div class="sp-tabs" data-tab-group="notification">
            <button class="sp-tab active">通知</button>
            <button class="sp-tab">最新消息</button>
        </div>
    </div>

    <!-- Tab Content: 通知 -->
    <div class="sp-tab-content" data-tab-content="notification" style="display: block;">
        <?php foreach ($notifications as $notif): ?>
        <div class="sp-notification-item">
            <div class="sp-notification-header">
                <div class="sp-notification-status <?php echo e($notif['type']); ?>">
                    <i class="fas <?php echo e($notif['icon']); ?>"></i>
                </div>
                <span class="sp-notification-title"><?php echo e($notif['title']); ?></span>
                <span class="sp-notification-date"><?php echo e($notif['date']); ?></span>
            </div>
            <div class="sp-notification-body">
                <span class="sp-notification-bank"><?php echo e($notif['bank']); ?></span>
                <span class="sp-notification-amount"><?php echo e($notif['amount']); ?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <!-- Tab Content: 最新消息 -->
    <div class="sp-tab-content" data-tab-content="notification" style="display: none;">
        <?php foreach ($latestNews as $news): ?>
        <div class="sp-news-item">
            <div class="sp-news-header">
                <div class="sp-news-icon <?php echo e($news['iconBg']); ?>">
                    <i class="fas <?php echo e($news['icon']); ?>"></i>
                </div>
                <span class="sp-news-title"><?php echo e($news['title']); ?></span>
                <span class="sp-news-date"><?php echo e($news['date']); ?></span>
            </div>
            <div class="sp-news-content">
                <div class="sp-news-icon-large">
                    <img src="resource/logo/superong-icon.png" alt="SUPERONG">
                </div>
                <p class="sp-news-text"><?php echo e($news['content']); ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</main>

<?php
// Include footer (bottom nav + modals)
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
