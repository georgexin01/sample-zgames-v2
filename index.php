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

        <!-- ========== CATEGORY TABS (Pill Style) ========== -->
        <section class="sp-category-tabs-section">
            <div class="sp-category-tabs">
                <a href="#" class="sp-category-tab active" data-category="hot">
                    <img src="resource/game-icons/spade-icon-orange.png" alt="ALL" class="sp-tab-icon">
                    <span>ALL</span>
                </a>
                <a href="#" class="sp-category-tab" data-category="slots">SLOT</a>
                <a href="#" class="sp-category-tab" data-category="live">LIVE</a>
                <a href="#" class="sp-category-tab" data-category="sports">SPORT</a>
                <a href="#" class="sp-category-tab" data-category="fishing">FISH</a>
                <a href="#" class="sp-category-tab" data-category="chess">CHESS</a>
                <a href="#" class="sp-category-tab" data-category="esports">ESPORT</a>
            </div>
        </section>

        <!-- ========== GAMES GRID (3 Columns) ========== -->
        <section class="sp-games-section-home">
            <div class="sp-games-grid-home" id="gamesGrid">
                <?php
                // All games with categories: hot, slots, fishing, live, chess, sports, esports
                $games = [
                    // HOT (Featured games from all categories)
                    ['img' => 'dragon-gem.png', 'name' => 'Dragon Gem', 'category' => 'hot,slots'],
                    ['img' => 'golden-temple.png', 'name' => 'Golden Temple', 'category' => 'hot,slots'],
                    ['img' => 'lucky-piggy.png', 'name' => 'Lucky Piggy', 'category' => 'hot,slots'],
                    ['img' => 'ae-sexy-live.png', 'name' => 'AE Sexy', 'category' => 'hot,live'],
                    ['img' => '3x-catch.png', 'name' => '3X Catch', 'category' => 'hot,fishing'],
                    ['img' => 'king-arthur.png', 'name' => 'King Arthur', 'category' => 'hot,slots'],

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

                    // FISHING (捕鱼)
                    ['img' => '3x-catch.png', 'name' => '3X Catch', 'category' => 'fishing'],

                    // LIVE (真人)
                    ['img' => 'ae-sexy-live.png', 'name' => 'AE Sexy', 'category' => 'live'],
                    ['img' => 'ag-asia-gaming-live.png', 'name' => 'AG Live', 'category' => 'live'],
                    ['img' => 'allbet-live.png', 'name' => 'Allbet Live', 'category' => 'live'],

                    // CHESS (棋牌)
                    ['img' => 'yuanbao-mahjong-2.png', 'name' => 'Yuanbao Mahjong', 'category' => 'chess'],

                    // SPORTS (体育) - using slot icons as placeholders
                    ['img' => 'king-arthur.png', 'name' => 'Sports Bet', 'category' => 'sports'],
                    ['img' => 'ragnarok-odin.png', 'name' => 'Live Sports', 'category' => 'sports'],

                    // ESPORTS (电竞) - using slot icons as placeholders
                    ['img' => 'dragon-gem.png', 'name' => 'LoL Betting', 'category' => 'esports'],
                    ['img' => 'flame-777.png', 'name' => 'Dota 2', 'category' => 'esports'],
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
    });

    function showQRModal() {
        alert('二维码功能');
    }
</script>

<?php include 'lib/htmlBody.php'; ?>
