<?php
/**
 * activity.php - SUPERONG Mobile App
 * 活动 (Activity List Page)
 * 100% Match with design 7.png
 */

$pageName = 'activity';
$pageTitle = '活动';
$headerTitle = '活动';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Activity banners (placeholders for promotional content)
$activities = [
    ['id' => 1, 'title' => '每周老虎机排行榜'],
    ['id' => 2, 'title' => '首充优惠'],
    ['id' => 3, 'title' => '每日签到奖励'],
];
?>

<!-- ========== ACTIVITY LIST PAGE CONTENT ========== -->
<main class="sp-page sp-activity-page">
    <div class="sp-activity-container">
        <?php foreach ($activities as $activity): ?>
        <a href="activity-detail.php?id=<?php echo $activity['id']; ?>" class="sp-activity-card">
            <!-- Placeholder dark card - will show promo banner images -->
        </a>
        <?php endforeach; ?>
    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
