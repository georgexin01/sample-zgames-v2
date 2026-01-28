<?php
/**
 * winloss-report.php - SUPERONG Mobile App
 * 输赢报表 (Win/Loss Report Page)
 * 100% Match with resource/1/56.png
 */

$pageName = 'winloss';
$pageTitle = '输赢报表';
$headerTitle = '输赢报表';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy report data
$reports = [];
?>

<!-- ========== WIN/LOSS REPORT PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-winloss-container">

        <!-- Filter Bar -->
        <div class="sp-filter-bar">
            <div class="sp-filter-select">
                <select>
                    <option value="all">全部货币</option>
                    <option value="myr">MYR</option>
                    <option value="usd">USD</option>
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

        <!-- Report Card -->
        <div class="sp-winloss-card">
            <?php if (empty($reports)): ?>
            <div class="sp-empty-state">
                <span>暂无数据</span>
            </div>
            <?php else: ?>
            <?php foreach ($reports as $report): ?>
            <div class="sp-winloss-row">
                <span><?php echo htmlspecialchars($report['date']); ?></span>
                <span><?php echo htmlspecialchars($report['currency']); ?></span>
                <span><?php echo number_format($report['amount'], 2); ?></span>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
