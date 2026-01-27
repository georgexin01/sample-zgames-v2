<?php

/**
 * activity-detail.php - SUPERONG Mobile App
 * 活动详情 (Activity Detail Page)
 * 100% Match with resource/1/8.png and resource/1/9.png
 */

// Activity data (MySQL dummy data)
$activities = [
    1 => [
        'title' => '每周排行榜奖励',
        'banner' => 'resource/activity/activity-banner-1.png',
        'dateStart' => '2023-12-01',
        'dateEnd' => '2024-1-31',
        'rules' => [
            '活动时间：每周一 00:00:00 至 周日 23:59:59 为一期，总奖金RM58888将在每周一4:00PM根据上周参与者的排名进行派发活动每周更新，总奖金RM58,888每周派，直到官方宣布停止活动为止。',
            '排名计算：系统仅根据"老虎机"游戏的有效押注进行排名，其他游戏押注均视为无效。',
            '奖金派发：活动结束时，系统将根据排行榜名次进行奖金派发。',
            '排行榜更新：每15分钟更新一次，相同押注量的情况下，系统按时间排序，先达到者排位在前。',
            '领奖规定：奖金必须在48小时内领取，超过指定时间将自动作废。',
            '奖金形式：以礼码形式发放，不可直接提款或转账，需通过投注兑换成现金。',
            '游戏适用性：奖金礼码仅适用于指定（带有黄码标签）的游戏商进行游戏。',
        ],
        'rankings' => [
            ['rank' => 1, 'user' => 'edfr****234', 'amount' => '7666666.22'],
            ['rank' => 2, 'user' => 'edfr****234', 'amount' => '7666666.22'],
            ['rank' => 3, 'user' => 'edfr****234', 'amount' => '7666666.22'],
            ['rank' => 4, 'user' => 'edfr****234', 'amount' => '7666666.22'],
            ['rank' => 5, 'user' => 'edfr****234', 'amount' => '7666666.22'],
            ['rank' => 6, 'user' => 'edfr****234', 'amount' => '7666666.22'],
            ['rank' => 7, 'user' => 'edfr****234', 'amount' => '7666666.22'],
            ['rank' => 8, 'user' => 'edfr****234', 'amount' => '7666666.22'],
            ['rank' => 9, 'user' => 'edfr****234', 'amount' => '7666666.22'],
        ]
    ],
    2 => [
        'title' => '新人首充奖励',
        'banner' => 'resource/activity/activity-banner-2.png',
        'dateStart' => '2024-01-01',
        'dateEnd' => '2024-12-31',
        'rules' => [
            '活动对象：首次充值的新会员。',
            '奖励内容：首充即可获得100%存款奖励。',
            '最高奖励：单笔最高奖励RM888。',
            '流水要求：奖金需完成5倍流水后方可提款。',
            '有效期限：奖励需在7天内完成流水要求。',
            '活动限制：每位会员仅限参与一次。',
            '最终解释权归SUPERONG所有。',
        ],
        'rankings' => []
    ],
];

// Get activity ID
$id = isset($_GET['id']) ? intval($_GET['id']) : 1;
if (!isset($activities[$id])) {
    header('Location: activity.php');
    exit;
}
$activity = $activities[$id];

// Get active tab
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'details';

// Page settings
$pageName = 'activity';
$pageTitle = '活动详情';
$headerTitle = $activeTab === 'ranking' ? '活动排行榜' : '活动详情';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== ACTIVITY DETAIL PAGE CONTENT ========== -->
<main class="sp-page sp-bg-fixed">
    <div class="sp-activity-detail-container">

        <!-- Activity Banner -->
        <div class="sp-activity-detail-banner">
            <img src="<?php echo htmlspecialchars($activity['banner']); ?>" alt="<?php echo htmlspecialchars($activity['title']); ?>" onerror="this.style.display='none'">
        </div>

        <!-- Tab Switch -->
        <div class="sp-tab-switch sp-tab-switch-overlay">
            <a href="javascript:void(0)" onclick="switchTab('details')" id="tab-btn-details" class="sp-tab-btn <?php echo $activeTab !== 'ranking' ? 'active' : ''; ?>">活动详情</a>
            <a href="javascript:void(0)" onclick="switchTab('ranking')" id="tab-btn-ranking" class="sp-tab-btn <?php echo $activeTab === 'ranking' ? 'active' : ''; ?>">活动排行榜</a>
        </div>

        <!-- Content Card -->
        <div class="sp-activity-detail-card">
            <!-- Rankings Table -->
            <div id="tab-content-ranking" class="sp-activity-ranking-table" style="display: <?php echo $activeTab === 'ranking' ? 'block' : 'none'; ?>;">
                <div class="sp-activity-ranking-header">
                    <span class="sp-ranking-col-rank">名次</span>
                    <span class="sp-ranking-col-user">帐号名称</span>
                    <span class="sp-ranking-col-amount">投注额</span>
                </div>
                <?php foreach ($activity['rankings'] as $rank): ?>
                    <div class="sp-activity-ranking-row">
                        <span class="sp-ranking-col-rank"><?php echo $rank['rank']; ?></span>
                        <span class="sp-ranking-col-user"><?php echo htmlspecialchars($rank['user']); ?></span>
                        <span class="sp-ranking-col-amount"><?php echo htmlspecialchars($rank['amount']); ?></span>
                    </div>
                <?php endforeach; ?>
                <?php if (empty($activity['rankings'])): ?>
                    <div class="sp-activity-ranking-empty">暂无排行数据</div>
                <?php endif; ?>
            </div>

            <!-- Activity Rules -->
            <div id="tab-content-details" class="sp-activity-rules" style="display: <?php echo $activeTab !== 'ranking' ? 'block' : 'none'; ?>;">
                <?php foreach ($activity['rules'] as $index => $rule): ?>
                    <div class="sp-activity-rule-item">
                        <span class="sp-rule-number"><?php echo $index + 1; ?>.</span>
                        <span class="sp-rule-text"><?php echo htmlspecialchars($rule); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Date Range -->
            <div class="sp-activity-date">
                <i class="far fa-clock"></i>
                <span><?php echo htmlspecialchars($activity['dateStart']); ?> 至 <?php echo htmlspecialchars($activity['dateEnd']); ?></span>
            </div>
        </div>

        <!-- Join Button -->
        <div class="sp-activity-detail-actions">
            <button type="button" class="sp-btn-activity-join" onclick="joinActivity()">参与活动</button>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function joinActivity() {
            // Show success modal or redirect
            document.getElementById('successModalText').textContent = '已成功参与活动！';
            document.getElementById('successModal').classList.add('active');
            setTimeout(function() {
                document.getElementById('successModal').classList.remove('active');
            }, 2000);
        }

        function switchTab(tab) {
            // Update buttons
            document.querySelectorAll('.sp-tab-btn').forEach(btn => btn.classList.remove('active'));
            document.getElementById('tab-btn-' + tab).classList.add('active');

            // Update content
            document.getElementById('tab-content-details').style.display = tab === 'details' ? 'block' : 'none';
            document.getElementById('tab-content-ranking').style.display = tab === 'ranking' ? 'block' : 'none';

            // Update header title
            const title = tab === 'ranking' ? '活动排行榜' : '活动详情';
            const headerTitle = document.querySelector('.sp-header-title');
            if (headerTitle) {
                headerTitle.textContent = title;
            }
        }
    });
</script>

<?php include 'lib/htmlBody.php'; ?>