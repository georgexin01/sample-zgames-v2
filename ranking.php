<?php
/**
 * ranking.php - SUPERONG Mobile App
 * 排行榜 (Ranking/Leaderboard Page)
 * 100% Match with resource/1/69.png
 */

$pageName = 'ranking';
$pageTitle = '今日游戏赢家榜';
$headerTitle = '今日游戏赢家榜';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Top 3 winners
$top3 = [
    ['rank' => 2, 'user' => 'edfr****234', 'amount' => 'MYR 66666.66', 'badge' => 'silver'],
    ['rank' => 1, 'user' => 'edfr****234', 'amount' => 'MYR 66666.66', 'badge' => 'gold'],
    ['rank' => 3, 'user' => 'edfr****234', 'amount' => 'MYR 66666.66', 'badge' => 'bronze'],
];

// Other rankings
$rankings = [
    ['rank' => '04', 'user' => 'edfr****234', 'amount' => 'MYR 6666.00', 'game' => 'EPICWIN'],
    ['rank' => '05', 'user' => 'edfr****234', 'amount' => 'MYR 6666.00', 'game' => 'EPICWIN'],
    ['rank' => '06', 'user' => 'edfr****234', 'amount' => 'MYR 6666.00', 'game' => 'EPICWIN'],
    ['rank' => '07', 'user' => 'edfr****234', 'amount' => 'MYR 6666.00', 'game' => 'EPICWIN'],
    ['rank' => '08', 'user' => 'edfr****234', 'amount' => 'MYR 6666.00', 'game' => 'EPICWIN'],
    ['rank' => '09', 'user' => 'edfr****234', 'amount' => 'MYR 6666.00', 'game' => 'EPICWIN'],
    ['rank' => '10', 'user' => 'edfr****234', 'amount' => 'MYR 6666.00', 'game' => 'EPICWIN'],
];
?>

<!-- ========== RANKING PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-ranking-container">

        <!-- Dark Navy Banner -->
        <div class="sp-ranking-banner"></div>

        <!-- Tab Switch -->
        <div class="sp-ranking-tabs">
            <button type="button" class="sp-ranking-tab active" id="tabWinners" onclick="switchRankingTab('winners')">今日游戏赢家榜</button>
            <button type="button" class="sp-ranking-tab" id="tabProfit" onclick="switchRankingTab('profit')">今日盈利榜</button>
        </div>

        <!-- Tab Content: Winners -->
        <div id="contentWinners" class="sp-ranking-content" style="display: block;">
            <!-- Top 3 Podium -->
            <div class="sp-ranking-podium">
                <?php foreach ($top3 as $winner): ?>
                <div class="sp-ranking-winner sp-winner-<?php echo $winner['badge']; ?>">
                    <img src="resource/ui-elements/level-<?php echo $winner['rank']; ?>.png" alt="<?php echo $winner['rank']; ?>" class="sp-winner-badge">
                    <div class="sp-winner-card">
                        <div class="sp-winner-avatar">
                            <img src="resource/ui-elements/user-alt.png" alt="" class="sp-winner-avatar-img">
                        </div>
                        <span class="sp-winner-name"><?php echo $winner['user']; ?></span>
                        <span class="sp-winner-amount"><?php echo $winner['amount']; ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Rankings Table -->
            <div class="sp-ranking-table">
                <div class="sp-ranking-table-header">
                    <span></span>
                    <span>玩家</span>
                    <span>中奖</span>
                    <span>游戏</span>
                </div>
                <?php foreach ($rankings as $rank): ?>
                <div class="sp-ranking-table-row">
                    <span class="sp-rank-num"><?php echo $rank['rank']; ?></span>
                    <span class="sp-rank-user"><?php echo $rank['user']; ?></span>
                    <span class="sp-rank-amount"><?php echo $rank['amount']; ?></span>
                    <span class="sp-rank-game"><?php echo $rank['game']; ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Tab Content: Profit -->
        <div id="contentProfit" class="sp-ranking-content" style="display: none;">
            <!-- Top 3 Podium -->
            <div class="sp-ranking-podium">
                <?php foreach ($top3 as $winner): ?>
                <div class="sp-ranking-winner sp-winner-<?php echo $winner['badge']; ?>">
                    <img src="resource/ui-elements/level-<?php echo $winner['rank']; ?>.png" alt="<?php echo $winner['rank']; ?>" class="sp-winner-badge">
                    <div class="sp-winner-card">
                        <div class="sp-winner-avatar">
                            <img src="resource/ui-elements/user-alt.png" alt="" class="sp-winner-avatar-img">
                        </div>
                        <span class="sp-winner-name"><?php echo $winner['user']; ?></span>
                        <span class="sp-winner-amount"><?php echo $winner['amount']; ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Rankings Table -->
            <div class="sp-ranking-table">
                <div class="sp-ranking-table-header">
                    <span></span>
                    <span>玩家</span>
                    <span>盈利</span>
                    <span>游戏</span>
                </div>
                <?php foreach ($rankings as $rank): ?>
                <div class="sp-ranking-table-row">
                    <span class="sp-rank-num"><?php echo $rank['rank']; ?></span>
                    <span class="sp-rank-user"><?php echo $rank['user']; ?></span>
                    <span class="sp-rank-amount"><?php echo $rank['amount']; ?></span>
                    <span class="sp-rank-game"><?php echo $rank['game']; ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function switchRankingTab(tab) {
    // Update tab buttons
    document.getElementById('tabWinners').classList.remove('active');
    document.getElementById('tabProfit').classList.remove('active');

    // Hide all content
    document.getElementById('contentWinners').style.display = 'none';
    document.getElementById('contentProfit').style.display = 'none';

    // Show selected tab
    if (tab === 'winners') {
        document.getElementById('tabWinners').classList.add('active');
        document.getElementById('contentWinners').style.display = 'block';
    } else {
        document.getElementById('tabProfit').classList.add('active');
        document.getElementById('contentProfit').style.display = 'block';
    }
}
</script>

<?php include 'lib/htmlBody.php'; ?>
