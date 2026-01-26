<?php
/**
 * betting.php - SUPERONG Mobile App
 * 投注记录 (Betting Record Page)
 * 100% Match with betting_record投注记录.png
 */

$pageName = 'betting';
$pageTitle = '投注记录';
$headerTitle = '投注记录';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy betting data
$totalBets = 15;
$totalWinLoss = 10000.00;
?>

<!-- ========== BETTING PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-record-container">

        <!-- Filter Bar -->
        <div class="sp-filter-bar">
            <div class="sp-filter-select-wrap">
                <select class="sp-filter-select">
                    <option value="">请选择游戏商</option>
                    <option value="pp">Pragmatic Play</option>
                    <option value="pg">PG Soft</option>
                    <option value="mega">Mega888</option>
                </select>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="sp-filter-select-wrap">
                <select class="sp-filter-select">
                    <option value="12-24">12-24</option>
                    <option value="12-23">12-23</option>
                    <option value="12-22">12-22</option>
                </select>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>

        <!-- Betting Table -->
        <div class="sp-betting-table">
            <div class="sp-betting-table-header">
                <span>游戏名称</span>
                <span>笔数</span>
                <span>有效投注</span>
                <span>输赢</span>
            </div>
            <!-- Empty state - no data -->
            <div style="padding: 40px 0; text-align: center; color: #999;">
                暂无数据
            </div>
        </div>

        <!-- Summary Bar -->
        <div class="sp-betting-summary">
            <div class="sp-betting-summary-item">
                <span class="sp-betting-summary-label">总笔数:</span>
                <span class="sp-betting-summary-value"><?php echo $totalBets; ?></span>
            </div>
            <div class="sp-betting-summary-item">
                <span class="sp-betting-summary-label">总输赢:</span>
                <span class="sp-betting-summary-value"><?php echo number_format($totalWinLoss, 2); ?></span>
            </div>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
