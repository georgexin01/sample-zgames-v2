<?php
/**
 * game.php - SUPERONG Mobile App
 * 游戏详情 (Game Detail Page)
 * 99% Similarity Required
 */

// Get game ID
$gameId = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Game data (dummy)
$games = array(
    1 => array(
        'code' => 'LFC888',
        'name' => '来发财',
        'banner' => 'resource/games/lfc888-banner.png',
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
$headerRightIcon = 'fas fa-info-circle';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== GAME PAGE CONTENT ========== -->
<main class="sp-page-content sp-game-detail-page">

    <!-- Game Banner -->
    <div class="sp-game-banner">
        <img src="<?php echo e($game['banner']); ?>" alt="<?php echo e($game['name']); ?>" onerror="this.style.display='none'">
        <div class="sp-game-banner-overlay">
            <span class="sp-game-banner-name"><?php echo e($game['name']); ?></span>
            <span class="sp-game-banner-code"><?php echo e($game['code']); ?></span>
        </div>
    </div>

    <!-- Points Bar -->
    <div class="sp-game-points-bar">
        <div class="sp-points-left">
            <span class="sp-points-label">Point</span>
            <span class="sp-points-value">MYR 0.00</span>
        </div>
        <a href="deposit.php" class="sp-deposit-btn">
            <i class="fas fa-plus"></i>
            <span>充值</span>
        </a>
    </div>

    <!-- Return Rate -->
    <div class="sp-game-info-row">
        <span class="sp-info-label">游戏返水</span>
        <span class="sp-info-value"><?php echo e($game['returnRate']); ?></span>
    </div>

    <!-- Game Description -->
    <div class="sp-game-description">
        <?php echo nl2br(e($game['description'])); ?>
    </div>

    <!-- Enter Game Button -->
    <div class="sp-form-actions">
        <button type="button" class="sp-btn sp-btn-primary" onclick="enterGame()">进入游戏</button>
    </div>

</main>

<script>
function enterGame() {
    // Game launch logic would go here
    alert('正在进入游戏...');
}
</script>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
