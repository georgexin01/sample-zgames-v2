<?php
/**
 * betting-record.php - SUPERONG Mobile App
 * 投注记录 (Betting Record Page)
 * 100% Match with resource/1/55.png
 */

$pageName = 'betting';
$pageTitle = '投注记录';
$headerTitle = '投注记录';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy betting data
$bettingRecords = [];

// Summary data
$totalBets = 15;
$totalWinLoss = 10000.00;
?>

<!-- ========== BETTING RECORD PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-betting-container">

        <!-- Filter Bar -->
        <div class="sp-filter-bar">
            <div class="sp-filter-select">
                <select>
                    <option value="">请选择游戏商</option>
                    <option value="epicwin">EPICWIN</option>
                    <option value="pragmatic">Pragmatic</option>
                    <option value="pg">PG Soft</option>
                </select>
                <img src="resource/ui-elements/dropdown-white.png" alt="" class="sp-filter-arrow">
            </div>
            <div class="sp-filter-select">
                <select>
                    <option value="12-24">12-24</option>
                    <option value="12-25">12-25</option>
                    <option value="12-26">12-26</option>
                </select>
                <img src="resource/ui-elements/dropdown-white.png" alt="" class="sp-filter-arrow">
            </div>
        </div>

        <!-- Betting Table Card -->
        <div class="sp-betting-card">
            <!-- Table Header -->
            <div class="sp-betting-table-header">
                <span>游戏名称</span>
                <span>笔数</span>
                <span>有效投注</span>
                <span>输赢</span>
            </div>

            <!-- Table Body -->
            <div class="sp-betting-table-body">
                <?php if (empty($bettingRecords)): ?>
                <!-- Empty state -->
                <?php else: ?>
                <?php foreach ($bettingRecords as $record): ?>
                <div class="sp-betting-table-row">
                    <span><?php echo htmlspecialchars($record['game']); ?></span>
                    <span><?php echo $record['count']; ?></span>
                    <span><?php echo number_format($record['validBet'], 2); ?></span>
                    <span><?php echo number_format($record['winLoss'], 2); ?></span>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Summary Bar -->
            <div class="sp-betting-summary">
                <span>总笔数：<?php echo $totalBets; ?></span>
                <span>总输赢：<?php echo number_format($totalWinLoss, 2); ?></span>
            </div>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
