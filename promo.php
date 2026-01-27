<?php
/**
 * promo.php - SUPERONG Mobile App
 * 优惠 (Promotions Page)
 * Similar to activity page - shows promotional offers
 */

$pageName = 'invite';
$pageTitle = '优惠';
$headerTitle = '优惠';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Promo banners/offers
$promos = [
    ['id' => 1, 'title' => '首充优惠 - 100%奖励', 'desc' => '首次充值即可获得100%奖励'],
    ['id' => 2, 'title' => '每日签到 - 免费旋转', 'desc' => '每日签到领取免费旋转机会'],
    ['id' => 3, 'title' => '推荐好友 - 双倍佣金', 'desc' => '邀请好友注册双方均可获得奖励'],
    ['id' => 4, 'title' => '周末特惠 - 50%返水', 'desc' => '周末期间所有游戏50%返水'],
];
?>

<!-- ========== PROMO PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-activity-list-container">

        <!-- Promo Banners -->
        <?php foreach ($promos as $promo): ?>
        <a href="promo-detail.php?id=<?php echo $promo['id']; ?>" class="sp-activity-banner">
            <div class="sp-promo-card">
                <div class="sp-promo-icon">
                    <i class="fas fa-gift"></i>
                </div>
                <div class="sp-promo-content">
                    <h3 class="sp-promo-title"><?php echo htmlspecialchars($promo['title']); ?></h3>
                    <p class="sp-promo-desc"><?php echo htmlspecialchars($promo['desc']); ?></p>
                </div>
                <i class="fas fa-chevron-right sp-promo-arrow"></i>
            </div>
        </a>
        <?php endforeach; ?>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
