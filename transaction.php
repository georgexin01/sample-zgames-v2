<?php
/**
 * transaction.php - SUPERONG Mobile App
 * 交易记录 (Transaction Record Page)
 * 100% Match with transaction_record交易记录.png
 */

$pageName = 'transaction';
$pageTitle = '交易记录';
$headerTitle = '交易记录';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy transaction data
$transactions = [
    [
        'status' => 'success',
        'bank' => 'Hong Leong Bank',
        'amount' => 'MYR 100',
        'date' => '2025-12-24 18:28:33',
    ],
    [
        'status' => 'pending',
        'bank' => 'Hong Leong Bank',
        'amount' => 'MYR 100',
        'date' => '2025-12-24 28:28:33',
    ],
];
?>

<!-- ========== TRANSACTION PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-record-container">

        <!-- Filter Bar -->
        <div class="sp-filter-bar">
            <div class="sp-filter-select-wrap">
                <select class="sp-filter-select">
                    <option value="all">全部类型</option>
                    <option value="deposit">充值</option>
                    <option value="withdraw">提款</option>
                    <option value="transfer">转帐</option>
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

        <!-- Transaction List -->
        <div class="sp-record-list">
            <?php foreach ($transactions as $trans): ?>
            <div class="sp-record-item">
                <div class="sp-record-icon <?php echo $trans['status']; ?>">
                    <?php if ($trans['status'] === 'success'): ?>
                    <i class="fas fa-check"></i>
                    <?php else: ?>
                    <i class="fas fa-clock"></i>
                    <?php endif; ?>
                </div>
                <div class="sp-record-content">
                    <div class="sp-record-bank"><?php echo htmlspecialchars($trans['bank']); ?></div>
                    <div class="sp-record-date"><?php echo htmlspecialchars($trans['date']); ?></div>
                </div>
                <div class="sp-record-amount"><?php echo htmlspecialchars($trans['amount']); ?></div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</main>

<!-- Floating Customer Service Button -->
<a href="customer-service.php" class="sp-float-cs-btn">
    <i class="fas fa-headset"></i>
</a>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
