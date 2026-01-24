<?php

/**
 * index.php - SUPERONG Mobile App
 * 首页 (Home Page)
 * 99% Design Similarity with Sample Images
 * 
 * Design Elements:
 * - Banner Slider (3 rotating banners with overlay)
 * - Point/Balance bar (gradient background)
 * - 8 Feature Icons (Activity, Ranking, Support, Invite, Level, Transfer, History, etc)
 * - Promo Grid (4 columns)
 * - Game Category Grid (3 columns)
 * - Hot Games Grid (2 columns)
 * 
 * Color Scheme:
 * - Primary Purple: #3d3d7a
 * - Gold Accent: #d4a84b  
 * - Background Light: #f5f5f5
 * - Text Dark: #2d2d5a
 * - Text Muted: #9999aa
 */

$pageName = 'home';
$pageTitle = 'SUPERONG';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page">
    <div class="container-fluid" style="padding: 0;">

        <!-- ========== BANNER SLIDER ========== -->
        <section class="sp-banner-section">
            <div class="sp-banner-slider">
                <div class="sp-banner-slide active">
                    <img src="resource/game-icons/pp-wang-zhe-slot-banner.png" alt="Banner 1">
                    <div class="sp-banner-overlay">
                        <span class="sp-banner-label">PLAYTECH</span>
                        <h3 class="sp-banner-title">PP王者电子特供</h3>
                        <a href="games.php" class="sp-banner-btn">立即前往</a>
                    </div>
                </div>
                <div class="sp-banner-slide">
                    <img src="resource/game-icons/golden-temple.png" alt="Banner 2">
                    <div class="sp-banner-overlay">
                        <span class="sp-banner-label">MEGA888</span>
                        <h3 class="sp-banner-title">金庙每日免费旋转</h3>
                        <a href="games.php" class="sp-banner-btn">立即前往</a>
                    </div>
                </div>
                <div class="sp-banner-slide">
                    <img src="resource/game-icons/dragon-gem.png" alt="Banner 3">
                    <div class="sp-banner-overlay">
                        <span class="sp-banner-label">PRAGMATIC</span>
                        <h3 class="sp-banner-title">龙珠宝石大奖等您</h3>
                        <a href="games.php" class="sp-banner-btn">立即前往</a>
                    </div>
                </div>
            </div>
            <div class="sp-banner-indicators">
                <span class="sp-indicator active"></span>
                <span class="sp-indicator"></span>
                <span class="sp-indicator"></span>
            </div>
        </section>

        <!-- ========== POINTS/BALANCE BAR ========== -->
        <div class="sp-point-section">
            <div class="sp-point-bar">
                <span class="sp-point-label">当前余额</span>
                <div class="sp-point-value-wrap">
                    <span class="sp-point-value">¥ 15,250.50</span>
                    <i class="fas fa-chevron-down sp-point-dropdown"></i>
                </div>
            </div>
        </div>

        <!-- ========== FEATURE ICONS (8 Items) ========== -->
        <section class="sp-feature-section">
            <div class="sp-feature-scroll">
                <a href="activity.php" class="sp-feature-item">
                    <div class="sp-feature-icon"><img src="resource/ui-elements/gift.png" alt="活动"></div>
                    <span class="sp-feature-label">活动</span>
                </a>
                <a href="ranking.php" class="sp-feature-item">
                    <div class="sp-feature-icon"><img src="resource/ui-elements/champion.png" alt="排行榜"></div>
                    <span class="sp-feature-label">排行榜</span>
                </a>
                <a href="#" class="sp-feature-item">
                    <div class="sp-feature-icon"><i class="fas fa-qrcode"></i></div>
                    <span class="sp-feature-label">二维码</span>
                </a>
                <a href="customer-service.php" class="sp-feature-item">
                    <div class="sp-feature-icon"><img src="resource/ui-elements/customer-service.png" alt="客服"></div>
                    <span class="sp-feature-label">客服</span>
                </a>
                <a href="invite.php" class="sp-feature-item">
                    <div class="sp-feature-icon"><img src="resource/ui-elements/user-plus.png" alt="邀请好友"></div>
                    <span class="sp-feature-label">邀请好友</span>
                </a>
                <a href="vip.php" class="sp-feature-item">
                    <div class="sp-feature-icon"><img src="resource/ui-elements/level-1.png" alt="等级"></div>
                    <span class="sp-feature-label">等级</span>
                </a>
                <a href="transfer.php" class="sp-feature-item">
                    <div class="sp-feature-icon"><img src="resource/ui-elements/transfer.png" alt="转账"></div>
                    <span class="sp-feature-label">转账</span>
                </a>
                <a href="transaction.php" class="sp-feature-item">
                    <div class="sp-feature-icon"><img src="resource/ui-elements/history.png" alt="记录"></div>
                    <span class="sp-feature-label">记录</span>
                </a>
            </div>
        </section>

        <!-- ========== PROMOTIONS GRID (4 Columns) ========== -->
        <div class="sp-promo-section">
            <h2 class="sp-section-title">热门推荐</h2>
            <div class="sp-promo-grid">
                <?php for ($i = 0; $i < 8; $i++): ?>
                    <a href="games.php" class="sp-promo-card">
                        <img src="resource/game-icons/<?php
                                                        $promos = ['dragon-gem.png', 'golden-temple.png', 'lucky-piggy.png', 'king-arthur.png', 'ragnarok-odin.png', 'super-pink-joker.png', 'dancing-joker.png', 'trick-or-treat.png'];
                                                        echo $promos[$i % 8];
                                                        ?>" alt="Promo">
                        <span class="sp-promo-label">HOT</span>
                    </a>
                <?php endfor; ?>
            </div>
        </div>

        <!-- ========== GAME CATEGORIES (3 Columns) ========== -->
        <div class="sp-category-section">
            <h2 class="sp-section-title">游戏分类</h2>
            <div class="sp-category-grid">
                <?php
                $categories = [
                    ['name' => 'SLOT', 'count' => '128'],
                    ['name' => 'LIVE', 'count' => '85'],
                    ['name' => 'SPORT', 'count' => '42'],
                    ['name' => 'LOTTO', 'count' => '36'],
                    ['name' => '电子', 'count' => '94'],
                    ['name' => '棋牌', 'count' => '58'],
                    ['name' => '捕鱼', 'count' => '27'],
                    ['name' => '真人', 'count' => '71'],
                    ['name' => '彩票', 'count' => '45']
                ];
                foreach ($categories as $index => $cat):
                ?>
                    <a href="games.php?cat=<?php echo strtolower($cat['name']); ?>" class="sp-category-card">
                        <img src="resource/game-icons/<?php
                                                        $imgs = ['dragon-gem.png', 'golden-temple.png', 'lucky-piggy.png'];
                                                        echo $imgs[$index % 3];
                                                        ?>" alt="<?php echo $cat['name']; ?>">
                        <div class="sp-category-overlay">
                            <div class="sp-category-name"><?php echo $cat['name']; ?></div>
                            <div class="sp-category-count"><?php echo $cat['count']; ?> 款</div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- ========== HOT GAMES (2 Columns) ========== -->
        <div class="sp-game-section">
            <h2 class="sp-section-title">热门游戏</h2>
            <div class="sp-game-grid">
                <?php
                $games = [
                    ['name' => 'Wild Fury', 'rating' => 4.8],
                    ['name' => 'Wealthy Dynasty', 'rating' => 4.7],
                    ['name' => 'Lucky Piggy', 'rating' => 4.9],
                    ['name' => 'Dragon Gem', 'rating' => 4.6],
                    ['name' => 'Golden Temple', 'rating' => 4.8],
                    ['name' => 'King Arthur', 'rating' => 4.7],
                    ['name' => 'Ragnarok', 'rating' => 4.9],
                    ['name' => 'Dancing Joker', 'rating' => 4.5]
                ];
                foreach ($games as $index => $game):
                ?>
                    <a href="game.php?id=<?php echo $index + 1; ?>" class="sp-game-card">
                        <div class="sp-game-image">
                            <img src="resource/game-icons/<?php
                                                            $gameImgs = ['dragon-gem.png', 'golden-temple.png', 'lucky-piggy.png', 'king-arthur.png', 'ragnarok-odin.png', 'super-pink-joker.png', 'dancing-joker.png', 'trick-or-treat.png'];
                                                            echo $gameImgs[$index % 8];
                                                            ?>" alt="<?php echo $game['name']; ?>">
                            <span class="sp-game-badge">HOT</span>
                        </div>
                        <div class="sp-game-body">
                            <div class="sp-game-name"><?php echo $game['name']; ?></div>
                            <div class="sp-game-meta">
                                <span class="sp-game-rating">
                                    <i class="fas fa-star"></i>
                                    <?php echo $game['rating']; ?>
                                </span>
                                <span><?php echo rand(1000, 9999); ?> 人</span>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- ========== SEE MORE BUTTON ========== -->
        <div class="sp-button-container">
            <a href="games.php" class="sp-btn-primary sp-btn-large">
                <i class="fas fa-gamepad"></i>
                查看所有游戏
            </a>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<!-- BANNER SLIDER SCRIPT -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.sp-banner-slide');
        const indicators = document.querySelectorAll('.sp-indicator');
        let currentSlide = 0;

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            indicators.forEach(ind => ind.classList.remove('active'));

            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
            indicators[currentSlide].classList.add('active');
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        // Auto-advance slides every 5 seconds
        setInterval(nextSlide, 5000);

        // Indicator click handlers
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => showSlide(index));
        });
    });
</script>

<?php include 'lib/htmlBody.php'; ?>
