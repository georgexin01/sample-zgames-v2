<?php
/**
 * withdraw-record.php - SUPERONG Mobile App
 * 提款记录 (Withdraw Record Page)
 * 100% Match with resource/1/46.png
 */

$pageName = 'withdraw';
$pageTitle = '提款记录';
$headerTitle = '提款记录';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy withdraw records
$records = [
    [
        'status' => 'success',
        'bank' => 'Hong Leong Bank',
        'bankIcon' => 'resource/bank/hlb.png',
        'amount' => 'MYR 100',
        'date' => '2025-12-24 18:28:33'
    ],
    [
        'status' => 'pending',
        'bank' => 'Hong Leong Bank',
        'bankIcon' => 'resource/bank/hlb.png',
        'amount' => 'MYR 100',
        'date' => '2025-12-24 28:28:33'
    ],
];
?>

<!-- ========== WITHDRAW RECORD PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-record-container">
        <?php foreach ($records as $record): ?>
        <div class="sp-record-card">
            <div class="sp-record-status">
                <?php if ($record['status'] === 'success'): ?>
                <img src="resource/ui-elements/check.png" alt="" class="sp-record-status-icon">
                <?php else: ?>
                <img src="resource/ui-elements/history-orange.png" alt="" class="sp-record-status-icon">
                <?php endif; ?>
            </div>
            <div class="sp-record-info">
                <div class="sp-record-info-bar">
                    <div class="sp-record-bank">
                        <img src="<?php echo htmlspecialchars($record['bankIcon']); ?>" alt="" class="sp-record-bank-icon">
                        <span><?php echo htmlspecialchars($record['bank']); ?></span>
                    </div>
                    <span class="sp-record-amount"><?php echo htmlspecialchars($record['amount']); ?></span>
                </div>
                <div class="sp-record-date"><?php echo htmlspecialchars($record['date']); ?></div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
