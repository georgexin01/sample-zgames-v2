<?php

/**
 * rewards.php - SUPERONG Rewards & Bonuses
 * Display available rewards and bonus offers
 * 99% Design Similarity
 */

$pageName = 'rewards';
$pageTitle = 'Rewards - SUPERONG';
$headerTitle = '奖励';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page">
    <div class="container-fluid" style="padding: 16px;">

        <!-- Rewards Summary Card -->
        <div class="sp-reward-card" style="background: linear-gradient(135deg, #3d3d7a, #4a4a8a); border-radius: 16px; padding: 20px; color: #ffffff; margin-bottom: 20px;">
            <h2 style="margin: 0 0 12px 0; font-size: 16px;">总奖励</h2>
            <div style="display: flex; justify-content: space-between; align-items: flex-end;">
                <div>
                    <p style="margin: 0; font-size: 12px; color: #e0e0e0;">可用奖励</p>
                    <p style="margin: 8px 0 0 0; font-size: 24px; font-weight: 700; color: #d4a84b;">¥3,500</p>
                </div>
                <button class="sp-btn-primary" style="padding: 10px 20px; font-size: 12px;">提取</button>
            </div>
        </div>

        <!-- Reward Types Tabs -->
        <div class="sp-tab-bar" style="margin-bottom: 20px;">
            <a href="#" class="sp-tab-item active">全部奖励</a>
            <a href="#" class="sp-tab-item">首存奖励</a>
            <a href="#" class="sp-tab-item">每日返利</a>
            <a href="#" class="sp-tab-item">邀请奖励</a>
        </div>

        <!-- Rewards List -->
        <div style="background: #ffffff; border-radius: 12px;">
            <?php
            $rewards = [
                ['name' => '首次存款奖励', 'desc' => '首次存款即可获得', 'amount' => '+¥500', 'date' => '2024-01-20', 'status' => '已领取'],
                ['name' => '每日签到奖励', 'desc' => '每日签到领取奖励', 'amount' => '+¥50', 'date' => '2024-01-24', 'status' => '待领取'],
                ['name' => '邀请好友奖励', 'desc' => '邀请好友成功注册', 'amount' => '+¥200', 'date' => '2024-01-22', 'status' => '已领取'],
                ['name' => '周周红利', 'desc' => '每周返利活动', 'amount' => '+¥300', 'date' => '2024-01-21', 'status' => '已领取'],
                ['name' => '转盘奖励', 'desc' => '幸运转盘中奖', 'amount' => '+¥250', 'date' => '2024-01-19', 'status' => '已领取'],
                ['name' => '排名奖励', 'desc' => '月度排名前10', 'amount' => '+¥800', 'date' => '2024-01-18', 'status' => '已领取'],
            ];
            ?>
            <?php foreach ($rewards as $reward): ?>
                <div style="padding: 16px; border-bottom: 1px solid #f0f0f0; display: flex; justify-content: space-between; align-items: center;">
                    <div style="flex: 1;">
                        <div style="font-size: 14px; font-weight: 600; color: #2d2d5a; margin-bottom: 4px;">
                            <?php echo $reward['name']; ?>
                        </div>
                        <div style="font-size: 12px; color: #9999aa; margin-bottom: 4px;">
                            <?php echo $reward['desc']; ?>
                        </div>
                        <div style="font-size: 11px; color: #9999aa;">
                            <?php echo $reward['date']; ?>
                        </div>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 14px; font-weight: 700; color: #d4a84b; margin-bottom: 8px;">
                            <?php echo $reward['amount']; ?>
                        </div>
                        <span style="display: inline-block; padding: 4px 12px; border-radius: 12px; font-size: 10px; font-weight: 600; 
                            <?php echo $reward['status'] === '已领取' ? 'background: #f0f0f0; color: #9999aa;' : 'background: #d4a84b; color: #2d2d5a;'; ?>">
                            <?php echo $reward['status']; ?>
                        </span>
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