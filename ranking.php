<?php
/**
 * ranking.php - SUPERONG Mobile App
 * 排行榜 (Ranking/Leaderboard Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'ranking';
$pageTitle = '排行榜';
$headerTitle = '排行榜';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Top 3 winners
$top3 = array(
    array('rank' => 1, 'user' => 'SUPERONG', 'score' => '999,999.00', 'avatar' => null),
    array('rank' => 2, 'user' => 'Player2', 'score' => '888,888.00', 'avatar' => null),
    array('rank' => 3, 'user' => 'Player3', 'score' => '777,777.00', 'avatar' => null),
);

// Other rankings
$rankings = array(
    array('rank' => 4, 'user' => 'edfr****234', 'score' => '666,666.00'),
    array('rank' => 5, 'user' => 'abcd****567', 'score' => '555,555.00'),
    array('rank' => 6, 'user' => 'wxyz****890', 'score' => '444,444.00'),
    array('rank' => 7, 'user' => 'qwer****123', 'score' => '333,333.00'),
    array('rank' => 8, 'user' => 'asdf****456', 'score' => '222,222.00'),
    array('rank' => 9, 'user' => 'zxcv****789', 'score' => '111,111.00'),
    array('rank' => 10, 'user' => 'poiu****012', 'score' => '99,999.00'),
);
?>

<!-- ========== RANKING PAGE CONTENT ========== -->
<main class="sp-page-content sp-ranking-page">

    <!-- Top 3 Section -->
    <div class="sp-ranking-header">
        <div class="sp-ranking-top3">
            <!-- 2nd Place -->
            <div class="sp-ranking-item rank-2">
                <div class="sp-ranking-medal silver">
                    <i class="fas fa-medal"></i>
                </div>
                <div class="sp-ranking-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <span class="sp-ranking-name"><?php echo e($top3[1]['user']); ?></span>
                <span class="sp-ranking-score"><?php echo e($top3[1]['score']); ?></span>
            </div>

            <!-- 1st Place -->
            <div class="sp-ranking-item rank-1">
                <div class="sp-ranking-medal gold">
                    <i class="fas fa-crown"></i>
                </div>
                <div class="sp-ranking-avatar gold">
                    <i class="fas fa-user"></i>
                </div>
                <span class="sp-ranking-name"><?php echo e($top3[0]['user']); ?></span>
                <span class="sp-ranking-score"><?php echo e($top3[0]['score']); ?></span>
            </div>

            <!-- 3rd Place -->
            <div class="sp-ranking-item rank-3">
                <div class="sp-ranking-medal bronze">
                    <i class="fas fa-medal"></i>
                </div>
                <div class="sp-ranking-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <span class="sp-ranking-name"><?php echo e($top3[2]['user']); ?></span>
                <span class="sp-ranking-score"><?php echo e($top3[2]['score']); ?></span>
            </div>
        </div>
    </div>

    <!-- Rankings List -->
    <div class="sp-ranking-list">
        <?php foreach ($rankings as $rank): ?>
        <div class="sp-ranking-row">
            <span class="sp-ranking-num"><?php echo $rank['rank']; ?></span>
            <div class="sp-ranking-user">
                <div class="sp-ranking-user-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <span><?php echo e($rank['user']); ?></span>
            </div>
            <span class="sp-ranking-amount"><?php echo e($rank['score']); ?></span>
        </div>
        <?php endforeach; ?>
    </div>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
