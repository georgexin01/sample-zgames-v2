<?php
/**
 * tutorial.php - SUPERONG Mobile App
 * 教程 (Tutorial Page)
 * 100% Match with resource/1/16.png tab design
 */

$pageName = 'tutorial';
$pageTitle = '常见问题';
$headerTitle = '常见问题';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Tutorial videos (dummy)
$tutorials = [
    ['id' => 1, 'title' => '如何注册账户', 'thumbnail' => 'resource/tutorial/register.jpg'],
    ['id' => 2, 'title' => '如何充值', 'thumbnail' => 'resource/tutorial/deposit.jpg'],
    ['id' => 3, 'title' => '如何提款', 'thumbnail' => 'resource/tutorial/withdraw.jpg'],
    ['id' => 4, 'title' => '如何转账', 'thumbnail' => 'resource/tutorial/transfer.jpg'],
    ['id' => 5, 'title' => '如何进入游戏', 'thumbnail' => 'resource/tutorial/game.jpg'],
];
?>

<!-- ========== TUTORIAL PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-faq-container">

        <!-- Tab Switch (same design as FAQ) -->
        <div class="sp-tab-switch">
            <a href="tutorial.php" class="sp-tab-btn active">教程</a>
            <a href="faq.php" class="sp-tab-btn">常见问题</a>
        </div>

        <!-- Tutorial Videos List -->
        <div class="sp-tutorial-list">
            <?php foreach ($tutorials as $tutorial): ?>
            <div class="sp-tutorial-item">
                <div class="sp-tutorial-thumbnail">
                    <div class="sp-tutorial-placeholder">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<?php include 'lib/htmlBody.php'; ?>
