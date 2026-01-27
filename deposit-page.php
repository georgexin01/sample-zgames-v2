<?php

/**
 * deposit.php - SUPERONG Deposit Page
 * Payment methods and deposit interface
 * 99% Design Similarity
 */

$pageName = 'deposit';
$pageTitle = 'Deposit - SUPERONG';
$headerTitle = '存款';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page">
    <div class="container-fluid" style="padding: 16px;">

        <!-- Balance Display -->
        <div class="sp-profile-card" style="margin-bottom: 20px;">
            <div style="text-align: center; position: relative; z-index: 1;">
                <div style="color: #e0e0e0; font-size: 12px; margin-bottom: 8px;">当前余额</div>
                <div style="color: #d4a84b; font-size: 28px; font-weight: 700; margin-bottom: 12px;">¥ 15,250.50</div>
                <div style="color: #e0e0e0; font-size: 11px;">积分: 8,900</div>
            </div>
        </div>

        <!-- Quick Amount Buttons -->
        <h3 class="sp-section-title">快速充值</h3>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-bottom: 20px;">
            <?php
            $amounts = [100, 500, 1000, 2000, 5000, 10000];
            foreach ($amounts as $amount):
            ?>
                <button class="sp-list-item" style="padding: 16px; text-align: center; background: #f5f5f5; border: 1px solid #dfe6e9; cursor: pointer; transition: all 0.3s ease; color: #2d2d5a; font-weight: 600; border-radius: 12px;">
                    ¥ <?php echo number_format($amount); ?>
                </button>
            <?php endforeach; ?>
        </div>

        <!-- Custom Amount -->
        <h3 class="sp-section-title">自定义金额</h3>
        <div class="sp-form-group" style="margin-bottom: 20px;">
            <input type="number" class="sp-form-input" placeholder="请输入金额" min="10" max="100000">
        </div>

        <!-- Payment Methods -->
        <h3 class="sp-section-title">选择支付方式</h3>
        <div style="margin-bottom: 20px;">

            <!-- Bank Transfer -->
            <label class="sp-form-checkbox" style="padding: 16px; background: #f5f5f5; border-radius: 12px; margin-bottom: 12px;">
                <input type="radio" name="payment" value="bank" checked>
                <div>
                    <div style="color: #2d2d5a; font-weight: 600;">银行转账</div>
                    <div style="color: #9999aa; font-size: 12px;">安全快速，通常5-30分钟到账</div>
                </div>
            </label>

            <!-- E-Wallet -->
            <label class="sp-form-checkbox" style="padding: 16px; background: #f5f5f5; border-radius: 12px; margin-bottom: 12px;">
                <input type="radio" name="payment" value="ewallet">
                <div>
                    <div style="color: #2d2d5a; font-weight: 600;">电子钱包</div>
                    <div style="color: #9999aa; font-size: 12px;">支持支付宝、微信等钱包</div>
                </div>
            </label>

            <!-- Cryptocurrency -->
            <label class="sp-form-checkbox" style="padding: 16px; background: #f5f5f5; border-radius: 12px;">
                <input type="radio" name="payment" value="crypto">
                <div>
                    <div style="color: #2d2d5a; font-weight: 600;">数字货币</div>
                    <div style="color: #9999aa; font-size: 12px;">支持比特币、以太坊等加密货币</div>
                </div>
            </label>

        </div>

        <!-- Terms & Conditions -->
        <div class="sp-form-checkbox" style="margin-bottom: 20px;">
            <input type="checkbox" id="terms" checked>
            <label for="terms">我已阅读并同意<a href="#" style="color: #d4a84b; text-decoration: none;">《存款条款》</a></label>
        </div>

        <!-- Submit Button -->
        <button class="sp-btn-primary sp-btn-large" style="margin-bottom: 80px;">
            <i class="fas fa-plus-circle"></i>
            立即充值
        </button>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
</body>

</html>