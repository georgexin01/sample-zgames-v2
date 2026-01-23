<?php
/**
 * index.php - SUPERONG Mobile App
 * 首页 (Home Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'home';
$pageTitle = 'SUPERONG';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== HOME PAGE CONTENT ========== -->
<main class="sp-home-content">

    <!-- Banner Slider -->
    <section class="sp-banner-section">
        <div class="sp-banner-slider">
            <div class="sp-banner-slide active">
                <img src="resource/banners/banner1.jpg" alt="PP王者电子特供">
                <div class="sp-banner-content">
                    <span class="sp-banner-label">PLAYTECH</span>
                    <h3 class="sp-banner-title">PP王者电子特供</h3>
                    <a href="activity.php" class="sp-banner-btn">立即前往</a>
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

    <!-- Feature Buttons Grid -->
    <section class="sp-feature-grid">
        <a href="activity.php" class="sp-feature-item">
            <div class="sp-feature-icon">
                <i class="fas fa-gift"></i>
            </div>
            <span class="sp-feature-label">活动</span>
        </a>
        <a href="ranking.php" class="sp-feature-item">
            <div class="sp-feature-icon">
                <i class="fas fa-trophy"></i>
            </div>
            <span class="sp-feature-label">排行榜</span>
        </a>
        <a href="qrcode.php" class="sp-feature-item">
            <div class="sp-feature-icon">
                <i class="fas fa-qrcode"></i>
            </div>
            <span class="sp-feature-label">二维码</span>
        </a>
        <a href="customer-service.php" class="sp-feature-item">
            <div class="sp-feature-icon">
                <i class="fas fa-headset"></i>
            </div>
            <span class="sp-feature-label">客服</span>
        </a>
    </section>

    <!-- Game Categories Tabs -->
    <section class="sp-game-section">
        <div class="sp-game-tabs" data-tab-group="games">
            <button class="sp-game-tab active" data-category="all">
                <i class="fas fa-sync-alt"></i>
                <span>ALL</span>
            </button>
            <button class="sp-game-tab" data-category="hot">
                <span>热门</span>
            </button>
            <button class="sp-game-tab" data-category="slot">
                <span>SLOT</span>
            </button>
            <button class="sp-game-tab" data-category="live">
                <span>LIVE</span>
            </button>
            <button class="sp-game-tab" data-category="sport">
                <span>SPORT</span>
            </button>
            <button class="sp-game-tab" data-category="lotto">
                <span>LOTTO</span>
            </button>
        </div>

        <!-- Game Grid -->
        <div class="sp-game-grid">
            <!-- Row 1 -->
            <a href="game.php?id=1" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/games/aristocrat.jpg" alt="ARISTOCRAT">
                </div>
                <span class="sp-game-name">ARISTOCRAT</span>
            </a>
            <a href="game.php?id=2" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/games/sweet-bonanza.jpg" alt="Sweet Bonanza">
                </div>
                <span class="sp-game-name">Sweet Bonanza</span>
            </a>
            <a href="game.php?id=3" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/games/lucky-penny.jpg" alt="Lucky Penny">
                </div>
                <span class="sp-game-name">Lucky Penny</span>
            </a>

            <!-- Row 2 -->
            <a href="game.php?id=4" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/games/mahjong.jpg" alt="Mahjong Ways">
                </div>
                <span class="sp-game-name">Mahjong Ways</span>
            </a>
            <a href="game.php?id=5" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/games/918kiss.jpg" alt="918Kiss">
                </div>
                <span class="sp-game-name">918Kiss</span>
            </a>
            <a href="game.php?id=6" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/games/allbet.jpg" alt="Allbet">
                </div>
                <span class="sp-game-name">Allbet</span>
            </a>

            <!-- Row 3 -->
            <a href="game.php?id=7" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/games/pragmatic.jpg" alt="Pragmatic Play">
                </div>
                <span class="sp-game-name">Pragmatic Play</span>
            </a>
            <a href="game.php?id=8" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/games/joker.jpg" alt="Joker">
                </div>
                <span class="sp-game-name">Joker</span>
            </a>
            <a href="game.php?id=9" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/games/mega888.jpg" alt="Mega888">
                </div>
                <span class="sp-game-name">Mega888</span>
            </a>
        </div>
    </section>

</main>

<?php
// Include footer (bottom nav + modals)
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
