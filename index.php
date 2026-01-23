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
                <img src="resource/game-icons/pp-wang-zhe-slot-banner.png" alt="PP王者电子特供" class="sp-banner-bg">
                <div class="sp-banner-overlay">
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

    <!-- Point Bar -->
    <section class="sp-point-section">
        <div class="sp-point-bar">
            <span class="sp-point-label">Point</span>
            <div class="sp-point-value-wrap">
                <span class="sp-point-value"><?php echo e($siteConfig['currency']); ?> <?php echo number_format($currentUser['point'], 2); ?></span>
                <i class="fas fa-chevron-down sp-point-dropdown"></i>
            </div>
        </div>
    </section>

    <!-- Feature Icons Row (8 icons) -->
    <section class="sp-feature-section">
        <div class="sp-feature-scroll">
            <a href="activity.php" class="sp-feature-item">
                <div class="sp-feature-icon">
                    <img src="resource/ui-elements/gift.svg" alt="活动">
                </div>
                <span class="sp-feature-label">活动</span>
            </a>
            <a href="ranking.php" class="sp-feature-item">
                <div class="sp-feature-icon">
                    <img src="resource/ui-elements/champion.svg" alt="排行榜">
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
                    <img src="resource/ui-elements/customer-service.svg" alt="客服">
                </div>
                <span class="sp-feature-label">客服</span>
            </a>
            <a href="invite.php" class="sp-feature-item">
                <div class="sp-feature-icon">
                    <img src="resource/ui-elements/user-plus.svg" alt="邀请好友">
                </div>
                <span class="sp-feature-label">邀请好友</span>
            </a>
            <a href="level.php" class="sp-feature-item">
                <div class="sp-feature-icon">
                    <img src="resource/ui-elements/level-1.png" alt="等级">
                </div>
                <span class="sp-feature-label">等级</span>
            </a>
            <a href="transfer.php" class="sp-feature-item">
                <div class="sp-feature-icon">
                    <img src="resource/ui-elements/transfer.svg" alt="转账">
                </div>
                <span class="sp-feature-label">转账</span>
            </a>
            <a href="history.php" class="sp-feature-item">
                <div class="sp-feature-icon">
                    <img src="resource/ui-elements/history.svg" alt="记录">
                </div>
                <span class="sp-feature-label">记录</span>
            </a>
        </div>
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
                    <img src="resource/game-icons/super-pink-joker.png" alt="Wild Fury">
                </div>
                <span class="sp-game-name">Wild Fury</span>
            </a>
            <a href="game.php?id=2" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/game-icons/lucky-piggy.png" alt="Wealthy Dynasty">
                </div>
                <span class="sp-game-name">Wealthy Dynasty</span>
            </a>
            <a href="game.php?id=3" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/game-icons/coin-princess-x1000.png" alt="Lucky Penny">
                </div>
                <span class="sp-game-name">Lucky Penny</span>
            </a>

            <!-- Row 2 -->
            <a href="game.php?id=4" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/game-icons/aristocrat-roman-warrior.png" alt="ARISTOCRAT">
                </div>
                <span class="sp-game-name">ARISTOCRAT</span>
            </a>
            <a href="game.php?id=5" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/game-icons/918kiss-genie.png" alt="918Kiss">
                </div>
                <span class="sp-game-name">918Kiss</span>
            </a>
            <a href="game.php?id=6" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/game-icons/allbet-live.png" alt="Allbet">
                </div>
                <span class="sp-game-name">Allbet</span>
            </a>

            <!-- Row 3 -->
            <a href="game.php?id=7" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/game-icons/paxo-759-gaming-skeleton.png" alt="9 Texes">
                </div>
                <span class="sp-game-name">9 Texes</span>
            </a>
            <a href="game.php?id=8" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/game-icons/golden-temple.png" alt="Golden Temple">
                </div>
                <span class="sp-game-name">Golden Temple</span>
            </a>
            <a href="game.php?id=9" class="sp-game-item">
                <div class="sp-game-thumb">
                    <img src="resource/game-icons/dragon-gem.png" alt="Dragon Gem">
                </div>
                <span class="sp-game-name">Dragon Gem</span>
            </a>
        </div>
    </section>

</main>

<?php
// Include footer (bottom nav + modals)
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
