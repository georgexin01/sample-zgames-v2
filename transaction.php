<?php
/**
 * transaction.php - SUPERONG Mobile App
 * 交易记录 (Transaction Record Page)
 * 100% Match with resource/1/10.png
 */

$pageName = 'transaction';
$pageTitle = '交易记录';
$headerTitle = '交易记录';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy transaction data
$transactions = [
    [
        'status' => 'success',
        'bank' => 'Hong Leong Bank',
        'bankIcon' => 'resource/bank/hlb.png',
        'amount' => 'MYR 100',
        'date' => '2025-12-24 18:28:33',
    ],
    [
        'status' => 'pending',
        'bank' => 'Hong Leong Bank',
        'bankIcon' => 'resource/bank/hlb.png',
        'amount' => 'MYR 100',
        'date' => '2025-12-24 28:28:33',
    ],
];
?>

<!-- ========== TRANSACTION PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-transaction-container">

        <!-- Filter Bar -->
        <div class="sp-transaction-filter">
            <div class="sp-transaction-select">
                <select>
                    <option value="all">全部类型</option>
                    <option value="deposit">进分</option>
                    <option value="withdraw">进入类型</option>
                    <option value="transfer">进入类型</option>
                    <option value="transfer">游戏结算</option>
                    <option value="transfer">转帐</option>
                </select>
                <img src="resource/ui-elements/dropdown-white.png" alt="" class="sp-select-arrow-icon">
            </div>
            <div class="sp-transaction-select">
                <select>
                    <option value="12-24">12-24</option>
                    <option value="12-25">12-25</option>
                    <option value="12-26">12-26</option>
                    <option value="12-27">12-27</option>
                    <option value="12-28">12-28</option>

                </select>
                <img src="resource/ui-elements/dropdown-white.png" alt="" class="sp-select-arrow-icon">
            </div>
        </div>

        <!-- Transaction List -->
        <div class="sp-transaction-list">
            <?php foreach ($transactions as $trans): ?>
            <div class="sp-transaction-item">
                <div class="sp-transaction-status <?php echo $trans['status']; ?>">
                    <?php if ($trans['status'] === 'success'): ?>
                    <img src="resource/ui-elements/check.png" alt="Success" class="sp-status-icon">
                    <?php else: ?>
                    <img src="resource/ui-elements/history-orange.png" alt="Pending" class="sp-status-icon">
                    <?php endif; ?>
                </div>
                <div class="sp-transaction-details">
                    <div class="sp-transaction-badge">
                        <img src="<?php echo htmlspecialchars($trans['bankIcon']); ?>" alt="" class="sp-transaction-bank-icon" onerror="this.style.display='none'">
                        <span class="sp-transaction-bank"><?php echo htmlspecialchars($trans['bank']); ?></span>
                        <span class="sp-transaction-amount"><?php echo htmlspecialchars($trans['amount']); ?></span>
                    </div>
                    <div class="sp-transaction-date"><?php echo htmlspecialchars($trans['date']); ?></div>
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
