<?php

/**
 * vip.php - SUPERONG VIP Program
 * VIP membership levels and benefits
 * 99% Design Similarity
 */

$pageName = 'vip';
$pageTitle = 'VIP - SUPERONG';
$headerTitle = 'VIP会员';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page">
    <div class="container-fluid" style="padding: 16px;">

        <!-- Current VIP Level Card -->
        <div class="sp-vip-card" style="background: linear-gradient(135deg, #f5a623, #e8851c); border-radius: 16px; padding: 24px; color: #ffffff; margin-bottom: 24px; text-align: center;">
            <p style="margin: 0 0 8px 0; font-size: 12px; opacity: 0.9;">您的VIP等级</p>
            <h2 style="margin: 0 0 8px 0; font-size: 32px; font-weight: 700;">VIP 3</h2>
            <p style="margin: 0; font-size: 12px; opacity: 0.85;">下一等级还需要消费 ¥5,000</p>
            <div style="margin-top: 12px; background: rgba(0,0,0,0.2); height: 6px; border-radius: 3px; overflow: hidden;">
                <div style="width: 65%; height: 100%; background: rgba(255,255,255,0.8);"></div>
            </div>
        </div>

        <!-- VIP Benefits -->
        <h3 style="font-size: 14px; font-weight: 700; color: #2d2d5a; margin: 0 0 12px 0;">会员权益</h3>
        <div style="background: #ffffff; border-radius: 12px; padding: 12px;">
            <?php
            $benefits = [
                ['icon' => 'fa-gift', 'name' => '尊享礼包', 'desc' => '每月赠送价值¥500礼包'],
                ['icon' => 'fa-percent', 'name' => '返利加倍', 'desc' => '返利额度提升50%'],
                ['icon' => 'fa-user-tie', 'name' => '专属客服', 'desc' => '24/7专属VIP客服'],
                ['icon' => 'fa-star', 'name' => '积分加倍', 'desc' => '消费积分翻倍赚取'],
            ];
            ?>
            <?php foreach ($benefits as $benefit): ?>
                <div style="padding: 12px; border-bottom: 1px solid #f0f0f0; display: flex; gap: 12px; align-items: flex-start;">
                    <div style="width: 44px; height: 44px; background: linear-gradient(135deg, #f5a623, #e8851c); border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #ffffff; font-size: 20px; flex-shrink: 0;">
                        <i class="fas <?php echo $benefit['icon']; ?>"></i>
                    </div>
                    <div style="flex: 1;">
                        <div style="font-size: 13px; font-weight: 600; color: #2d2d5a; margin-bottom: 4px;">
                            <?php echo $benefit['name']; ?>
                        </div>
                        <div style="font-size: 11px; color: #9999aa;">
                            <?php echo $benefit['desc']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- VIP Levels Comparison -->
        <h3 style="font-size: 14px; font-weight: 700; color: #2d2d5a; margin: 24px 0 12px 0;">VIP等级对比</h3>
        <div style="background: #ffffff; border-radius: 12px; overflow: hidden;">
            <div style="padding: 12px 16px; background: #f5f5f5; border-bottom: 1px solid #f0f0f0; display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 8px; font-size: 11px; font-weight: 600; color: #9999aa;">
                <div>等级</div>
                <div>消费金额</div>
                <div>返利</div>
                <div>礼包</div>
            </div>
            <?php
            $levels = [
                ['level' => 'VIP 0', 'amount' => '¥0+', 'rebate' => '0.5%', 'gift' => '无'],
                ['level' => 'VIP 1', 'amount' => '¥5000+', 'rebate' => '1%', 'gift' => '¥100'],
                ['level' => 'VIP 2', 'amount' => '¥20000+', 'rebate' => '1.5%', 'gift' => '¥300'],
                ['level' => 'VIP 3', 'amount' => '¥50000+', 'rebate' => '2%', 'gift' => '¥500'],
                ['level' => 'VIP 4', 'amount' => '¥100000+', 'rebate' => '3%', 'gift' => '¥1000'],
                ['level' => 'VIP 5', 'amount' => '¥200000+', 'rebate' => '5%', 'gift' => '¥2000'],
            ];
            ?>
            <?php foreach ($levels as $level): ?>
                <div style="padding: 12px 16px; border-bottom: 1px solid #f0f0f0; display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 8px; font-size: 12px; align-items: center;">
                    <div style="font-weight: 700; color: #2d2d5a;"><?php echo $level['level']; ?></div>
                    <div style="color: #2d2d5a;"><?php echo $level['amount']; ?></div>
                    <div style="color: #d4a84b; font-weight: 600;"><?php echo $level['rebate']; ?></div>
                    <div style="color: #2d2d5a;"><?php echo $level['gift']; ?></div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Upgrade Button -->
        <div style="padding: 20px 0;">
            <a href="deposit.php" class="sp-btn-primary sp-btn-large" style="display: block; text-align: center;">
                <i class="fas fa-arrow-up"></i>
                升级 VIP
            </a>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>