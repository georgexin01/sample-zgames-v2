<?php
/**
 * transaction.php - SUPERONG Mobile App
 * 交易记录 (Transaction Record Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'transaction';
$pageTitle = '交易记录';
$headerTitle = '交易记录';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Transaction types
$transactionTypes = array(
    'all' => '全部类型',
    'deposit' => '充值',
    'withdraw' => '提款',
    'transfer' => '转帐',
    'bonus' => '奖金',
);

// Dummy transaction data
$transactions = array(
    array(
        'id' => 1,
        'type' => 'deposit',
        'status' => 'success',
        'bank' => 'Hong Leong Bank',
        'bankClass' => 'hong-leong',
        'amount' => 'MYR 100',
        'date' => '2025-12-24 18:28:33',
    ),
    array(
        'id' => 2,
        'type' => 'deposit',
        'status' => 'pending',
        'bank' => 'Hong Leong Bank',
        'bankClass' => 'hong-leong',
        'amount' => 'MYR 100',
        'date' => '2025-12-24 28:28:33',
    ),
);
?>

<!-- ========== TRANSACTION PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Filter Bar -->
    <div class="sp-filter-bar">
        <select class="sp-filter-select" id="typeFilter">
            <?php foreach ($transactionTypes as $value => $label): ?>
            <option value="<?php echo $value; ?>"><?php echo e($label); ?></option>
            <?php endforeach; ?>
        </select>
        <select class="sp-filter-select" id="dateFilter">
            <option value="12-24">12-24</option>
            <option value="12-23">12-23</option>
            <option value="12-22">12-22</option>
        </select>
    </div>

    <!-- Transaction List -->
    <div class="sp-transaction-list">
        <?php if (empty($transactions)): ?>
        <div class="sp-empty">
            <i class="fas fa-receipt sp-empty-icon"></i>
            <p class="sp-empty-text">暂无交易记录</p>
        </div>
        <?php else: ?>
        <?php foreach ($transactions as $trans): ?>
        <div class="sp-transaction-item">
            <div class="sp-transaction-icon <?php echo e($trans['status']); ?>">
                <?php if ($trans['status'] === 'success'): ?>
                <i class="fas fa-check"></i>
                <?php else: ?>
                <i class="fas fa-clock"></i>
                <?php endif; ?>
            </div>
            <div class="sp-transaction-content">
                <span class="sp-transaction-bank <?php echo e($trans['bankClass']); ?>"><?php echo e($trans['bank']); ?></span>
                <span class="sp-transaction-date"><?php echo e($trans['date']); ?></span>
            </div>
            <span class="sp-transaction-amount"><?php echo e($trans['amount']); ?></span>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
