<?php

/**
 * index.php - SUPERONG Mobile App
 * 首页 (Home Page)
 * 100% Design Match with home.png
 */

$pageName = 'alert';
$pageTitle = 'SUPERONG';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page">
    <div class="sp-main-content" style="padding: 0; width: 100%; max-width: 100%; overflow-x: hidden;">

        <!-- ========== BANNER SLIDER ========== -->
        <section class="sp-banner-section">
            <div class="sp-banner-slider">
                <div class="sp-banner-slide active">
                    <img src="resource/game-icons/pp-wang-zhe-slot-banner.png" alt="Banner 1">
                </div>
                <div class="sp-banner-slide">
                    <img src="resource/game-icons/golden-temple.png" alt="Banner 2">
                </div>
                <div class="sp-banner-slide">
                    <img src="resource/game-icons/dragon-gem.png" alt="Banner 3">
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
                <!-- Left Side: Point + Value -->
                <div class="sp-point-left">
                    <span class="sp-point-label-home">Point:</span>
                    <span class="sp-point-value-home">MYR 0.00</span>
                </div>
                <!-- Right Side: 3 Action Buttons -->
                <div class="sp-point-right">
                    <a href="deposit.php" class="sp-point-action">
                        <div class="sp-point-action-icon"><img src="resource/ui-elements/wallet-orange.png" alt="充值"></div>
                        <span class="sp-point-action-label">充值</span>
                    </a>
                    <a href="withdraw.php" class="sp-point-action">
                        <div class="sp-point-action-icon"><img src="resource/ui-elements/cash-orange.png" alt="提现"></div>
                        <span class="sp-point-action-label">提款</span>
                    </a>
                    <a href="transfer.php" class="sp-point-action">
                        <div class="sp-point-action-icon"><img src="resource/ui-elements/file-orange.png" alt="转账"></div>
                        <span class="sp-point-action-label">交易记录</span>
                    </a>
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
                <a href="qrcode.php" class="sp-quick-btn">
                    <div class="sp-quick-btn-icon"><img src="resource/ui-elements/qrcode.png" alt="二维码"></div>
                    <span class="sp-quick-btn-label">二维码</span>
                </a>
                <a href="transfer.php" class="sp-quick-btn">
                    <div class="sp-quick-btn-icon"><img src="resource/ui-elements/transfer.png" alt="转账"></div>
                    <span class="sp-quick-btn-label">转账</span>
                </a>
            </div>
        </section>

        <!-- ========== HOT GAMES ========== -->
        <section class="sp-hot-games-section">
            <div class="sp-section-header">
                <div class="sp-hot-label">
                    <span>热门</span>
                    <img src="resource/ui-elements/fire.png" alt="热门" class="sp-hot-label-icon">
                </div>
            </div>
            <div class="swiper hotGamesSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="game.php?id=1" class="sp-hot-game-item">
                            <img src="resource/game-icons/dragon-gem.png" alt="Dragon Gem">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="game.php?id=2" class="sp-hot-game-item">
                            <img src="resource/game-icons/golden-temple.png" alt="Golden Temple">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="game.php?id=3" class="sp-hot-game-item">
                            <img src="resource/game-icons/lucky-piggy.png" alt="Lucky Piggy">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="game.php?id=4" class="sp-hot-game-item">
                            <img src="resource/game-icons/ae-sexy-live.png" alt="AE Sexy">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="game.php?id=5" class="sp-hot-game-item">
                            <img src="resource/game-icons/king-arthur.png" alt="King Arthur">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="game.php?id=6" class="sp-hot-game-item">
                            <img src="resource/game-icons/3x-catch.png" alt="3X Catch">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========== CATEGORY TABS (Pill Style) ========== -->
        <section class="sp-category-tabs-section">
            <div class="sp-category-tabs">
                <a href="#" class="sp-category-tab active" data-category="hot">
                    <img src="resource/ui-elements/logo-white.png" alt="ALL" class="sp-tab-icon">
                    <span>ALL</span>
                </a>
                <a href="#" class="sp-category-tab" data-category="slots">
                    <img src="resource/ui-elements/slots.png" alt="SLOT" class="sp-tab-icon">
                    <span>SLOT</span>
                </a>
                <a href="#" class="sp-category-tab" data-category="live">
                    <img src="resource/ui-elements/card.png" alt="LIVE" class="sp-tab-icon">
                    <span>LIVE</span>
                </a>
                <a href="#" class="sp-category-tab" data-category="sports">
                    <img src="resource/ui-elements/horse.png" alt="SPORT" class="sp-tab-icon">
                    <span>SPORT</span>
                </a>
                <a href="#" class="sp-category-tab" data-category="lotto">
                    <img src="resource/ui-elements/pools.png" alt="LOTTO" class="sp-tab-icon">
                    <span>LOTTO</span>
                </a>
            </div>
        </section>

        <!-- ========== GAMES GRID (3 Columns) ========== -->
        <section class="sp-games-section-home">
            <div class="sp-games-grid-home" id="gamesGrid">
                <?php
                // All games with categories: hot, slots, live, sports, lotto
                $games = [
                    // HOT (Featured games from all categories)
                    ['img' => 'dragon-gem.png', 'name' => 'Dragon Gem', 'category' => 'hot,slots'],
                    ['img' => 'golden-temple.png', 'name' => 'Golden Temple', 'category' => 'hot,slots'],
                    ['img' => 'lucky-piggy.png', 'name' => 'Lucky Piggy', 'category' => 'hot,slots'],
                    ['img' => 'ae-sexy-live.png', 'name' => 'AE Sexy', 'category' => 'hot,live'],
                    ['img' => 'king-arthur.png', 'name' => 'King Arthur', 'category' => 'hot,slots'],
                    ['img' => '3x-catch.png', 'name' => '3X Catch', 'category' => 'hot,lotto'],

                    // SLOTS (老虎机)
                    ['img' => 'aristocrat-roman-warrior.png', 'name' => 'Roman Warrior', 'category' => 'slots'],
                    ['img' => 'coin-princess-x1000.png', 'name' => 'Coin Princess', 'category' => 'slots'],
                    ['img' => 'dragon-gem-2.png', 'name' => 'Dragon Gem 2', 'category' => 'slots'],
                    ['img' => 'golden-temple-2.png', 'name' => 'Golden Temple 2', 'category' => 'slots'],
                    ['img' => 'ragnarok-odin.png', 'name' => 'Ragnarok Odin', 'category' => 'slots'],
                    ['img' => 'super-pink-joker.png', 'name' => 'Pink Joker', 'category' => 'slots'],
                    ['img' => 'dancing-joker.png', 'name' => 'Dancing Joker', 'category' => 'slots'],
                    ['img' => 'trick-or-treat.png', 'name' => 'Trick or Treat', 'category' => 'slots'],
                    ['img' => 'gold-rush-party.png', 'name' => 'Gold Rush', 'category' => 'slots'],
                    ['img' => 'flame-777.png', 'name' => 'Flame 777', 'category' => 'slots'],
                    ['img' => '918kiss-genie.png', 'name' => '918Kiss Genie', 'category' => 'slots'],
                    ['img' => 'super-3-hot-chillies.png', 'name' => 'Hot Chillies', 'category' => 'slots'],
                    ['img' => 'super-china-pots.png', 'name' => 'China Pots', 'category' => 'slots'],
                    ['img' => 'paxo-759-gaming-skeleton.png', 'name' => 'Skeleton', 'category' => 'slots'],

                    // LIVE (真人)
                    ['img' => 'ae-sexy-live.png', 'name' => 'AE Sexy', 'category' => 'live'],
                    ['img' => 'ag-asia-gaming-live.png', 'name' => 'AG Live', 'category' => 'live'],
                    ['img' => 'allbet-live.png', 'name' => 'Allbet Live', 'category' => 'live'],
                    ['img' => 'yuanbao-mahjong-2.png', 'name' => 'Yuanbao Mahjong', 'category' => 'live'],

                    // SPORTS (体育)
                    ['img' => 'king-arthur.png', 'name' => 'Sports Bet', 'category' => 'sports'],
                    ['img' => 'ragnarok-odin.png', 'name' => 'Live Sports', 'category' => 'sports'],
                    ['img' => 'dragon-gem.png', 'name' => 'E-Sports', 'category' => 'sports'],

                    // LOTTO (彩票)
                    ['img' => '3x-catch.png', 'name' => '4D Lotto', 'category' => 'lotto'],
                    ['img' => 'flame-777.png', 'name' => 'Mega Lotto', 'category' => 'lotto'],
                    ['img' => 'coin-princess-x1000.png', 'name' => 'Toto', 'category' => 'lotto'],
                ];
                foreach ($games as $index => $game):
                ?>
                    <a href="game.php?id=<?php echo $index + 1; ?>" class="sp-game-item-home" data-category="<?php echo $game['category']; ?>">
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

<!-- BANNER SLIDER + CATEGORY FILTER SCRIPT -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ===== BANNER SLIDER =====
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

        // ===== CATEGORY TAB FILTER =====
        const tabs = document.querySelectorAll('.sp-category-tab');
        const gameItems = document.querySelectorAll('.sp-game-item-home');

        function filterGames(category) {
            gameItems.forEach(item => {
                const itemCategories = item.dataset.category.split(',');

                // First fade out all items
                item.classList.add('sp-game-hiding');
                item.classList.remove('sp-game-showing');

                setTimeout(() => {
                    if (category === 'hot' || itemCategories.includes(category)) {
                        item.style.display = 'block';
                        // Trigger reflow for animation
                        void item.offsetWidth;
                        item.classList.remove('sp-game-hiding');
                        item.classList.add('sp-game-showing');
                    } else {
                        item.style.display = 'none';
                    }
                }, 150);
            });
        }

        // Category tab click handlers
        tabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                tabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');

                const category = this.dataset.category;
                filterGames(category);
            });
        });

        // Initial filter - show hot games
        filterGames('hot');

        // ===== HOT GAMES SWIPER SLIDER =====
        const hotGamesSwiper = new Swiper('.hotGamesSwiper', {
            slidesPerView: 'auto',
            spaceBetween: 10,
            freeMode: true,
            grabCursor: true,
            touchRatio: 1,
            resistance: true,
            resistanceRatio: 0.85,
            slidesOffsetBefore: -25,
            slidesOffsetAfter: -25
        });
    });
</script>

<?php include 'lib/htmlBody.php'; ?>