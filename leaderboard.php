<?php
/**
 * leaderboard.php - SUPERONG Mobile App
 * 排行榜 (Leaderboard Page)
 * 100% Match with resource/1/69.png - 70.png
 */

$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'winners';

$pageName = 'leaderboard';
$pageTitle = $activeTab === 'winners' ? '今日游戏赢家榜' : '今日盈利榜';
$headerTitle = $activeTab === 'winners' ? '今日游戏赢家榜' : '今日盈利榜';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Top 3 winners
$topWinners = [
    ['rank' => 2, 'name' => 'edfr****234', 'amount' => 'MYR 66666.66', 'badge' => 'silver', 'icon' => 'resource/ui-elements/level-2.png'],
    ['rank' => 1, 'name' => 'edfr****234', 'amount' => 'MYR 66666.66', 'badge' => 'gold', 'icon' => 'resource/ui-elements/level-1.png'],
    ['rank' => 3, 'name' => 'edfr****234', 'amount' => 'MYR 66666.66', 'badge' => 'bronze', 'icon' => 'resource/ui-elements/level-3.png'],
];

// Rankings 4-10
$rankings = [];
for ($i = 4; $i <= 10; $i++) {
    $rankings[] = ['rank' => sprintf('%02d', $i), 'name' => 'edfr****234', 'amount' => 'MYR 6666.00', 'game' => 'EPICWIN'];
}
?>

<main class="sp-page">
    <div class="sp-leaderboard-container">
        <!-- Banner Area (Dark Blue) -->
        <div class="sp-leaderboard-banner"></div>

        <!-- Tab Switch -->
        <div class="sp-leaderboard-tabs">
            <a href="leaderboard.php?tab=winners" class="sp-leaderboard-tab <?php echo $activeTab === 'winners' ? 'active' : ''; ?>">今日游戏赢家榜</a>
            <a href="leaderboard.php?tab=profit" class="sp-leaderboard-tab <?php echo $activeTab === 'profit' ? 'active' : ''; ?>">今日盈利榜</a>
        </div>

        <!-- Podium -->
        <div class="sp-leaderboard-podium">
            <?php foreach ($topWinners as $winner): ?>
            <div class="sp-podium-item sp-podium-<?php echo $winner['badge']; ?>">
                <img src="<?php echo $winner['icon']; ?>" alt="<?php echo $winner['rank']; ?>" class="sp-podium-badge-img">
                <div class="sp-podium-avatar">
                    <img src="resource/ui-elements/user-alt.png" alt="" class="sp-podium-avatar-img">
                </div>
                <div class="sp-podium-name"><?php echo htmlspecialchars($winner['name']); ?></div>
                <div class="sp-podium-amount"><?php echo htmlspecialchars($winner['amount']); ?></div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Rankings Table -->
        <div class="sp-leaderboard-card">
            <div class="sp-leaderboard-header">
                <span></span>
                <span>玩家</span>
                <span>中奖</span>
                <span>游戏</span>
            </div>
            <?php foreach ($rankings as $rank): ?>
            <div class="sp-leaderboard-row">
                <span class="sp-rank-num"><?php echo $rank['rank']; ?></span>
                <span class="sp-rank-name"><?php echo htmlspecialchars($rank['name']); ?></span>
                <span class="sp-rank-amount"><?php echo htmlspecialchars($rank['amount']); ?></span>
                <span class="sp-rank-game"><?php echo htmlspecialchars($rank['game']); ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<div class="mobile-nav-spacer"></div>
<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
