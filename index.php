<?php

/**
 * index.php - SUPERONG Mobile App
 * 首页 (Home Page)
 * 100% Design Match with home.png
 */

$pageName = 'home';
$pageTitle = 'SUPERONG';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page sp-page-dark">
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
        <div class="sp-point-section-home">
            <div class="sp-point-bar-home">
                <span class="sp-point-label-home">Point:</span>
                <div class="sp-point-value-wrap-home">
                    <span class="sp-point-value-home">MYR 0.00</span>
                    <img src="resource/ui-elements/dropdown-white.png" alt="dropdown" class="sp-point-dropdown-icon">
                </div>
            </div>
        </div>

        <!-- ========== QUICK ACTION BUTTONS (4 Items) ========== -->
        <section class="sp-quick-buttons-section">
            <div class="sp-quick-buttons-row">
                <a href="activity.php" class="sp-quick-btn">
                    <div class="sp-quick-btn-icon"><img src="resource/ui-elements/gift.png" alt="活动"></div>
                    <span class="sp-quick-btn-label">活动</span>
                </a>
                <a href="ranking.php" class="sp-quick-btn">
                    <div class="sp-quick-btn-icon"><img src="resource/ui-elements/champion.png" alt="排行榜"></div>
                    <span class="sp-quick-btn-label">排行榜</span>
                </a>
                <a href="#" class="sp-quick-btn" onclick="showQRModal()">
                    <div class="sp-quick-btn-icon"><img src="resource/ui-elements/item-blue-7.png" alt="二维码"></div>
                    <span class="sp-quick-btn-label">二维码</span>
                </a>
                <a href="transfer.php" class="sp-quick-btn">
                    <div class="sp-quick-btn-icon"><img src="resource/ui-elements/transfer.png" alt="转账"></div>
                    <span class="sp-quick-btn-label">转账</span>
                </a>
            </div>
        </section>

        <!-- ========== CATEGORY TABS ========== -->
        <section class="sp-category-tabs-section">
            <div class="sp-category-tabs">
                <a href="#" class="sp-category-tab active" data-category="hot">
                    <img src="resource/ui-elements/fire.png" alt="热门" class="sp-tab-icon">
                    <span>热门</span>
                </a>
                <a href="#" class="sp-category-tab" data-category="slots">老虎机</a>
                <a href="#" class="sp-category-tab" data-category="fishing">捕鱼</a>
                <a href="#" class="sp-category-tab" data-category="live">真人</a>
                <a href="#" class="sp-category-tab" data-category="chess">棋牌</a>
                <a href="#" class="sp-category-tab" data-category="sports">体育</a>
                <a href="#" class="sp-category-tab" data-category="esports">电竞</a>
            </div>
        </section>

        <!-- ========== GAMES GRID (4 Columns) ========== -->
        <section class="sp-games-section-home">
            <div class="sp-games-grid-home">
                <!-- ALL Button as first grid item -->
                <a href="games.php" class="sp-all-btn-grid">
                    <div class="sp-all-btn-inner">
                        <img src="resource/ui-elements/menu-1.png" alt="ALL" class="sp-all-icon">
                        <span>ALL</span>
                    </div>
                </a>

                <?php
                $games = [
                    ['img' => 'aristocrat-roman-warrior.png', 'name' => 'Wild Fury'],
                    ['img' => 'coin-princess-x1000.png', 'name' => 'Lucky Penny'],
                    ['img' => 'dragon-gem.png', 'name' => 'Aristocrat'],
                    ['img' => 'golden-temple.png', 'name' => '9 Texes'],
                    ['img' => 'lucky-piggy.png', 'name' => 'Lucky Piggy'],
                    ['img' => 'king-arthur.png', 'name' => 'King Arthur'],
                    ['img' => 'ragnarok-odin.png', 'name' => 'Ragnarok'],
                    ['img' => 'super-pink-joker.png', 'name' => 'Pink Joker'],
                    ['img' => 'dancing-joker.png', 'name' => 'Dancing Joker'],
                    ['img' => 'trick-or-treat.png', 'name' => 'Trick Treat'],
                    ['img' => 'gold-rush-party.png', 'name' => 'Gold Rush']
                ];
                foreach ($games as $index => $game):
                ?>
                    <a href="game.php?id=<?php echo $index + 1; ?>" class="sp-game-item-home">
                        <div class="sp-game-thumb-home">
                            <img src="resource/game-icons/<?php echo $game['img']; ?>" alt="<?php echo htmlspecialchars($game['name']); ?>">
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </section>

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

        // Category tab handlers
        const tabs = document.querySelectorAll('.sp-category-tab');
        tabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });

    function showQRModal() {
        alert('二维码功能');
    }
</script>

<?php include 'lib/htmlBody.php'; ?>
