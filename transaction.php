<?php
/**
 * transaction.php - SUPERONG Mobile App
 * 交易记录 (Transaction Record Page)
 * 100% Match with resource/1/54.png
 */

$pageName = 'transaction';
$pageTitle = '交易记录';
$headerTitle = '交易记录';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy transaction data
$transactions = [
    [
        'status' => 'success',
        'type' => '转入',
        'user' => 'LFC888',
        'amount' => 'MYR 100',
        'date' => '2025-12-24 18:28:33',
    ],
];
?>

<!-- ========== TRANSACTION PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-transaction-container">

        <!-- Filter Bar -->
        <div class="sp-filter-bar">
            <div class="sp-filter-select">
                <select>
                    <option value="all">全部类型</option>
                    <option value="deposit">进分</option>
                    <option value="withdraw">出分</option>
                    <option value="transfer">转帐</option>
                    <option value="game">游戏结算</option>
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

        <!-- Transaction List -->
        <div class="sp-record-list">
            <?php foreach ($transactions as $trans): ?>
            <div class="sp-record-item">
                <div class="sp-record-icon <?php echo $trans['status']; ?>">
                    <?php if ($trans['status'] === 'success'): ?>
                    <img src="resource/ui-elements/check.png" alt="Success">
                    <?php else: ?>
                    <img src="resource/ui-elements/history-orange.png" alt="Pending">
                    <?php endif; ?>
                </div>
                <div class="sp-record-content">
                    <div class="sp-record-main">
                        <span class="sp-record-type"><?php echo htmlspecialchars($trans['type']); ?> <?php echo htmlspecialchars($trans['user']); ?></span>
                        <span class="sp-record-amount"><?php echo htmlspecialchars($trans['amount']); ?></span>
                    </div>
                    <div class="sp-record-date"><?php echo htmlspecialchars($trans['date']); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
