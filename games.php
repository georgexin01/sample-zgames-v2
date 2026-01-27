<?php

/**
 * games.php - SUPERONG Games Browse
 * Game Categories & Hot Games Page
 * Design: Multi-tab layout with game grid
 * 99% Design Similarity
 */

$pageName = 'games';
$pageTitle = 'Games - SUPERONG';
$headerTitle = '游戏';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page sp-page-white">
    <div class="container-fluid" style="padding: 0;">

        <!-- Tab Navigation -->
        <div class="sp-tab-bar">
            <a href="#" class="sp-tab-item active">所有游戏</a>
            <a href="#" class="sp-tab-item">最新游戏</a>
            <a href="#" class="sp-tab-item">热门推荐</a>
            <a href="#" class="sp-tab-item">VIP专享</a>
            <a href="#" class="sp-tab-item">真人视讯</a>
        </div>

        <!-- Game Category Grid (3 Columns) -->
        <div class="sp-category-section">
            <h2 class="sp-section-title">游戏分类</h2>
            <div class="sp-category-grid">
                <?php for ($i = 0; $i < 12; $i++): ?>
                    <a href="game.php?id=<?php echo $i + 1; ?>" class="sp-category-card">
                        <img src="resource/game-icons/dragon-gem-<?php echo ($i % 2) ? '2' : ''; ?>.png" alt="Game">
                        <div class="sp-category-overlay">
                            <div class="sp-category-name">游戏<?php echo $i + 1; ?></div>
                            <div class="sp-category-count">128 款游戏</div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Hot Games Grid (2 Columns) -->
        <div class="sp-game-section">
            <h2 class="sp-section-title">热门游戏</h2>
            <div class="sp-game-grid">
                <?php for ($i = 0; $i < 8; $i++): ?>
                    <a href="game.php?id=game-<?php echo $i + 1; ?>" class="sp-game-card">
                        <div class="sp-game-image">
                            <img src="resource/game-icons/<?php
                                                            $games = ['dragon-gem.png', 'golden-temple.png', 'lucky-piggy.png', 'king-arthur.png', 'ragnarok-odin.png', 'super-3-hot-chillies.png', 'trick-or-treat.png', 'dancing-joker.png'];
                                                            echo $games[$i % 8];
                                                            ?>" alt="Game">
                            <span class="sp-game-badge">HOT</span>
                        </div>
                        <div class="sp-game-body">
                            <div class="sp-game-name">游戏名称<?php echo $i + 1; ?></div>
                            <div class="sp-game-meta">
                                <span class="sp-game-rating">
                                    <i class="fas fa-star"></i>
                                    4.<?php echo rand(5, 9); ?>
                                </span>
                                <span><?php echo rand(1000, 9999); ?> 人玩</span>
                            </div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<?php include('lib/footer.php'); ?>

<?php include('lib/htmlBody.php'); ?>