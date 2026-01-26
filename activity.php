<?php
/**
 * activity.php - SUPERONG Mobile App
 * 活动 (Activity List Page)
 * 100% Match with activity_list活动列表.png
 */

$pageName = 'activity';
$pageTitle = '活动';
$headerTitle = '活动';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Activity banners
$activities = [
    ['id' => 1, 'image' => 'resource/ui-elements/promo-banner-1.png', 'title' => '每周老虎机排行榜'],
    ['id' => 2, 'image' => 'resource/ui-elements/promo-banner-2.png', 'title' => '首充优惠'],
    ['id' => 3, 'image' => 'resource/ui-elements/promo-banner-3.png', 'title' => '每日签到奖励'],
];
?>

<!-- ========== ACTIVITY LIST PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-activity-list-container">

        <!-- Activity Banners -->
        <?php foreach ($activities as $activity): ?>
        <a href="activity-detail.php?id=<?php echo $activity['id']; ?>" class="sp-activity-banner">
            <div class="sp-activity-banner-placeholder">
                <span><?php echo htmlspecialchars($activity['title']); ?></span>
            </div>
        </a>
        <?php endforeach; ?>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
