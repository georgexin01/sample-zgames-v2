<?php
/**
 * ranking.php - SUPERONG Mobile App
 * 排行榜 (Ranking/Leaderboard Page)
 * 100% Match with ranking_game_winners今日游戏赢家榜.png
 */

$pageName = 'ranking';
$pageTitle = '今日游戏赢家榜';
$headerTitle = '今日游戏赢家榜';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Top 3 winners
$top3 = [
    ['rank' => 2, 'user' => 'edfr****234', 'amount' => 'MYR 66666.66'],
    ['rank' => 1, 'user' => 'edfr****234', 'amount' => 'MYR 66666.66'],
    ['rank' => 3, 'user' => 'edfr****234', 'amount' => 'MYR 66666.66'],
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
<main class="sp-page sp-page-dark">
    <div class="sp-ranking-container">

        <!-- Tab Switch -->
        <div class="sp-tab-switch">
            <button class="sp-tab-btn active">今日游戏赢家榜</button>
            <button class="sp-tab-btn">今日盈利榜</button>
        </div>

        <!-- Top 3 Podium -->
        <div class="sp-ranking-podium">
            <!-- 2nd Place -->
            <div class="sp-podium-item rank-2">
                <div class="sp-podium-badge silver">2</div>
                <div class="sp-podium-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <span class="sp-podium-user"><?php echo $top3[0]['user']; ?></span>
                <span class="sp-podium-amount"><?php echo $top3[0]['amount']; ?></span>
            </div>

            <!-- 1st Place -->
            <div class="sp-podium-item rank-1">
                <div class="sp-podium-badge gold">1</div>
                <div class="sp-podium-avatar gold">
                    <i class="fas fa-user"></i>
                </div>
                <span class="sp-podium-user"><?php echo $top3[1]['user']; ?></span>
                <span class="sp-podium-amount"><?php echo $top3[1]['amount']; ?></span>
            </div>

            <!-- 3rd Place -->
            <div class="sp-podium-item rank-3">
                <div class="sp-podium-badge bronze">3</div>
                <div class="sp-podium-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <span class="sp-podium-user"><?php echo $top3[2]['user']; ?></span>
                <span class="sp-podium-amount"><?php echo $top3[2]['amount']; ?></span>
            </div>
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
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
document.querySelectorAll('.sp-tab-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.sp-tab-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>

<?php include 'lib/htmlBody.php'; ?>
