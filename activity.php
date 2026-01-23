<?php
/**
 * activity.php - SUPERONG Mobile App
 * 活动详情 (Activity Details Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'activity';
$pageTitle = '活动详情';
$headerTitle = '活动详情';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Activity details
$activityRules = array(
    '活动时间：每周一 00:00:00 至 周日 23:59:59 为一期，总奖金RM58888将在每周一-4:00PM根据上周参与者的排名进行派发活动每周更新。',
    '总奖金RM58,888每周派送，直到官方宣布停止活动为止。',
    '排名计算：系统仅根据"老虎机"游戏的有效押注进行排名，其他游戏押注均视为无效。',
    '奖金派发：活动结束时，系统将根据排行榜名次进行奖金派发。',
    '排行榜更新：每15分钟更新一次，相同押注量的情况下，系统按时间排序，先达到者排在前。',
    '领奖规定：奖金必须在48小时内领取，超过指定时间将自动作废',
    '奖金形式：以礼包形式发放，不可直接提款或转账，需通过投注兑换成现金。',
    '游戏适用性：奖金礼包仅适用于指定（带有筹码标签）的游戏商进行游戏。',
);

// Ranking data
$rankings = array(
    array('rank' => 1, 'user' => 'edfr****234', 'amount' => '7666666.22'),
    array('rank' => 2, 'user' => 'edfr****234', 'amount' => '7666666.22'),
    array('rank' => 3, 'user' => 'edfr****234', 'amount' => '7666666.22'),
    array('rank' => 4, 'user' => 'edfr****234', 'amount' => '7666666.22'),
    array('rank' => 5, 'user' => 'edfr****234', 'amount' => '7666666.22'),
    array('rank' => 6, 'user' => 'edfr****234', 'amount' => '7666666.22'),
    array('rank' => 7, 'user' => 'edfr****234', 'amount' => '7666666.22'),
    array('rank' => 8, 'user' => 'edfr****234', 'amount' => '7666666.22'),
    array('rank' => 9, 'user' => 'edfr****234', 'amount' => '7666666.22'),
);

$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'details';
?>

<!-- ========== ACTIVITY PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Tabs -->
    <div class="sp-tabs-container">
        <div class="sp-tabs">
            <a href="activity.php?tab=details" class="sp-tab <?php echo $activeTab === 'details' ? 'active' : ''; ?>">活动详情</a>
            <a href="activity.php?tab=ranking" class="sp-tab <?php echo $activeTab === 'ranking' ? 'active' : ''; ?>">活动排行榜</a>
        </div>
    </div>

    <?php if ($activeTab === 'details'): ?>
    <!-- Activity Details -->
    <div class="sp-activity-content">
        <ol class="sp-activity-rules">
            <?php foreach ($activityRules as $index => $rule): ?>
            <li><?php echo e($rule); ?></li>
            <?php endforeach; ?>
        </ol>
    </div>

    <?php else: ?>
    <!-- Ranking Table -->
    <div class="sp-ranking-table">
        <div class="sp-table-header">
            <span>名次</span>
            <span>帐号名称</span>
            <span>投注额</span>
        </div>
        <?php foreach ($rankings as $rank): ?>
        <div class="sp-table-row">
            <span><?php echo $rank['rank']; ?></span>
            <span><?php echo e($rank['user']); ?></span>
            <span><?php echo e($rank['amount']); ?></span>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <!-- Activity Period -->
    <div class="sp-activity-period">
        <i class="far fa-clock"></i>
        <span>2023-12-01 至 2024-1-31</span>
    </div>

    <!-- Join Button -->
    <div class="sp-form-actions">
        <button type="button" class="sp-btn sp-btn-primary">参与活动</button>
    </div>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
