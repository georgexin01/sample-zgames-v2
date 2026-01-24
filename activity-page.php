<?php

/**
 * activity.php - SUPERONG Activities & Promotions
 * Display ongoing promotions and activities
 * 99% Design Similarity
 */

$pageName = 'activity';
$pageTitle = 'Activities - SUPERONG';
$headerTitle = '活动';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page">
    <div class="container-fluid" style="padding: 0;">

        <!-- Banner Slider -->
        <section class="sp-banner-section">
            <div class="sp-banner-slider">
                <div class="sp-banner-slide active">
                    <img src="resource/game-icons/pp-wang-zhe-slot-banner.png" alt="Promo" class="sp-banner-bg">
                    <div class="sp-banner-overlay">
                        <span class="sp-banner-label">PLAYTECH</span>
                        <h3 class="sp-banner-title">PP王者电子特供</h3>
                        <a href="#" class="sp-banner-btn">立即前往</a>
                    </div>
                </div>
                <div class="sp-banner-slide">
                    <img src="resource/game-icons/golden-temple.png" alt="Promo 2" class="sp-banner-bg">
                    <div class="sp-banner-overlay">
                        <span class="sp-banner-label">MEGA888</span>
                        <h3 class="sp-banner-title">金庙免费旋转100次</h3>
                        <a href="#" class="sp-banner-btn">立即前往</a>
                    </div>
                </div>
                <div class="sp-banner-slide">
                    <img src="resource/game-icons/dragon-gem.png" alt="Promo 3" class="sp-banner-bg">
                    <div class="sp-banner-overlay">
                        <span class="sp-banner-label">PRAGMATIC</span>
                        <h3 class="sp-banner-title">龙珠转盘每天赠送彩金</h3>
                        <a href="#" class="sp-banner-btn">立即前往</a>
                    </div>
                </div>
            </div>
            <!-- Banner Indicators -->
            <div class="sp-banner-indicators">
                <span class="sp-indicator active"></span>
                <span class="sp-indicator"></span>
                <span class="sp-indicator"></span>
            </div>
        </section>

        <!-- Tab Navigation -->
        <div class="sp-tab-bar">
            <a href="#" class="sp-tab-item active">全部活动</a>
            <a href="#" class="sp-tab-item">进行中</a>
            <a href="#" class="sp-tab-item">即将开始</a>
            <a href="#" class="sp-tab-item">已结束</a>
        </div>

        <!-- Activities List -->
        <div style="padding: 16px;">
            <?php for ($i = 0; $i < 6; $i++): ?>
                <a href="activity-detail.php?id=<?php echo $i + 1; ?>" class="sp-list-item">
                    <div class="sp-list-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <div class="sp-list-content">
                        <div class="sp-list-title">活动标题 <?php echo $i + 1; ?></div>
                        <div class="sp-list-desc">2024年01月24日 - 2024年02月07日</div>
                    </div>
                    <div class="sp-list-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </a>
            <?php endfor; ?>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
</body>

</html>