<?php
/**
 * game.php - SUPERONG Mobile App
 * 游戏详情 (Game Detail Page)
 * 100% Match with resource/1/13.png
 */

// Get game ID
$gameId = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Game data (dummy)
$games = array(
    1 => array(
        'code' => 'LFC888',
        'name' => '来发财',
        'banner' => 'resource/game-icons/game-banner.png',
        'description' => '各位玩家，请留意在2026年1月1日，东八区时间（GMT+8）起，SUPERONG将对所有游戏实施当日最高上限的调整。包括玩家在所有游戏中总计的每日最高赢金金额，将被设定为500,000（MYR）。超过500,000（MYR）以上的赢金将不计，谨注，启乐游戏与4D串不受这规则影响。

我们建议玩家们根据此项新规定，相应调整您的游戏策略。谢知悉，谢谢。

温馨提示：
如果某不确定版本中的规则和术语存在不一致之处，应以中文版本为准。',
        'returnRate' => '0.5%',
    ),
);

// Default to first game if not found
if (!isset($games[$gameId])) {
    $gameId = 1;
}
$game = $games[$gameId];

// Page settings
$pageName = 'game';
$pageTitle = $game['code'];
$headerTitle = $game['code'];
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'resource/ui-elements/menu-1.png';
$headerRightIconType = 'image';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== GAME PAGE CONTENT ========== -->
<main class="sp-page">

    <!-- Game Banner -->
    <div class="sp-game-detail-banner">
        <img src="<?php echo htmlspecialchars($game['banner']); ?>" alt="<?php echo htmlspecialchars($game['name']); ?>" onerror="this.src='resource/games/game-placeholder.png'">
    </div>

    <!-- Points Bar -->
    <div class="sp-game-points-bar">
        <div class="sp-points-info">
            <span class="sp-points-label">Point</span>
            <span class="sp-points-value">MYR 0.00</span>
        </div>
        <a href="deposit.php" class="sp-game-deposit-btn">
            <img src="resource/ui-elements/wallet.png" alt="" class="sp-deposit-icon">
            <span>充值</span>
        </a>
    </div>

    <!-- Game Description -->
    <div class="sp-game-description-card">
        <!-- Return Rate Card -->
        <div class="sp-game-info-card">
            <div class="sp-game-info-item">
                <span class="sp-game-info-label">游戏返水</span>
            </div>
            <div class="sp-game-info-divider"></div>
            <div class="sp-game-info-item">
                <span class="sp-game-info-value"><?php echo htmlspecialchars($game['returnRate']); ?></span>
            </div>
        </div>

        <?php echo nl2br(htmlspecialchars($game['description'])); ?>
    </div>

    <!-- Enter Game Button -->
    <div class="sp-game-action">
        <button type="button" class="sp-game-enter-btn" onclick="enterGame()">进入游戏</button>
    </div>

</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function enterGame() {
    // Game launch logic would go here
    alert('正在进入游戏...');
}
</script>

<?php include 'lib/htmlBody.php'; ?>
