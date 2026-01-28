<?php
/**
 * transfer-record.php - SUPERONG Mobile App
 * 转帐记录 (Transfer Record Page)
 * 100% Match with resource/1/41.png
 */

$pageName = 'transfer';
$pageTitle = '转帐记录';
$headerTitle = '转帐记录';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy transfer records
$records = [
    [
        'status' => 'pending',
        'user' => 'AAA111',
        'amount' => 'MYR 100',
        'date' => '2025-12-24 28:28:33'
    ],
];
?>

<!-- ========== TRANSFER RECORD PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-record-container">
        <?php foreach ($records as $record): ?>
        <div class="sp-record-card">
            <div class="sp-record-status <?php echo $record['status']; ?>">
                <?php if ($record['status'] === 'success'): ?>
                <img src="resource/ui-elements/check.png" alt="" class="sp-record-status-icon">
                <?php else: ?>
                <img src="resource/ui-elements/history-orange.png" alt="" class="sp-record-status-icon">
                <?php endif; ?>
            </div>
            <div class="sp-record-info">
                <div class="sp-record-info-bar">
                    <div class="sp-record-user">
                        <i class="fas fa-user sp-record-user-icon-fa"></i>
                        <span><?php echo htmlspecialchars($record['user']); ?></span>
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
