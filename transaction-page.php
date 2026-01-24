<?php

/**
 * transaction.php - SUPERONG Transaction History
 * Display all deposits, withdrawals, and transfers
 * 99% Design Similarity
 */

$pageName = 'transaction';
$pageTitle = 'Transactions - SUPERONG';
$headerTitle = '交易';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page">
    <div class="container-fluid" style="padding: 0;">

        <!-- Tab Navigation -->
        <div class="sp-tab-bar">
            <a href="#" class="sp-tab-item active">全部交易</a>
            <a href="#" class="sp-tab-item">存款</a>
            <a href="#" class="sp-tab-item">提款</a>
            <a href="#" class="sp-tab-item">转账</a>
        </div>

        <!-- Transactions List -->
        <div style="padding: 16px;">

            <!-- Group by Date -->
            <?php for ($d = 0; $d < 3; $d++): ?>
                <div style="margin-bottom: 20px;">
                    <div style="color: #9999aa; font-size: 12px; font-weight: 600; margin-bottom: 12px; padding-left: 12px;">
                        2024年01月<?php echo 24 - $d; ?>日
                    </div>

                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <div class="sp-list-item">
                            <div class="sp-list-icon" style="background: linear-gradient(135deg, <?php
                                                                                                    $types = [
                                                                                                        ['#2ecc71', '#27ae60'],
                                                                                                        ['#e74c3c', '#c0392b'],
                                                                                                        ['#3498db', '#2980b9'],
                                                                                                        ['#f39c12', '#e67e22']
                                                                                                    ];
                                                                                                    echo $types[$i % 4][0] . ', ' . $types[$i % 4][1];
                                                                                                    ?>);">
                                <i class="fas <?php
                                                $icons = ['fa-plus-circle', 'fa-minus-circle', 'fa-exchange-alt', 'fa-gift'];
                                                echo $icons[$i % 4];
                                                ?>"></i>
                            </div>
                            <div class="sp-list-content">
                                <div class="sp-list-title">
                                    <?php
                                    $titles = ['存款成功', '提款申请', '转账给好友', '活动奖励'];
                                    echo $titles[$i % 4];
                                    ?>
                                </div>
                                <div class="sp-list-desc">
                                    <?php
                                    $descs = ['银行转账', '提款至银行卡', '转账给 Player' . rand(100, 999), '参与活动获得'];
                                    echo $descs[$i % 4];
                                    ?>
                                </div>
                            </div>
                            <div style="text-align: right;">
                                <div style="color: <?php echo ($i % 2 == 0) ? '#2ecc71' : '#e74c3c'; ?>; font-weight: 600; font-size: 13px; margin-bottom: 4px;">
                                    <?php echo ($i % 2 == 0) ? '+' : '-'; ?>¥ <?php echo rand(100, 5000); ?>
                                </div>
                                <div style="color: #9999aa; font-size: 11px;">
                                    14:<?php echo str_pad($i * 15, 2, '0', STR_PAD_LEFT); ?>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>

        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
</body>

</html>