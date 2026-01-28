<?php
/**
 * invite.php - SUPERONG Mobile App
 * 邀请好友 (Invite Friends Page)
 * 100% Match with resource/1/34.png - 37.png
 */

$pageName = 'invite';
$pageTitle = '邀请好友';
$headerTitle = '邀请好友';
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'fa-question-circle';
$headerRightLink = 'faq.php';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy data
$referralLink = 'http://SUPERONG123456.my';
$referralCode = '123456';

$stats = [
    ['label' => '直属人数', 'value' => 0],
    ['label' => '今日新增人数', 'value' => 0],
    ['label' => '今日团队新增人数', 'value' => 0],
    ['label' => '团队总人数', 'value' => 0],
];

$commission = 1000.00;

$gamePerformance = [
    ['name' => '老虎机', 'total' => 0, 'direct' => 0, 'agent' => 0],
    ['name' => '真人视讯', 'total' => 0, 'direct' => 0, 'agent' => 0],
    ['name' => '体育', 'total' => 0, 'direct' => 0, 'agent' => 0],
    ['name' => '彩票', 'total' => 0, 'direct' => 0, 'agent' => 0],
    ['name' => '棋牌', 'total' => 0, 'direct' => 0, 'agent' => 0],
    ['name' => '捕鱼', 'total' => 0, 'direct' => 0, 'agent' => 0],
    ['name' => '电竞', 'total' => 0, 'direct' => 0, 'agent' => 0],
];

$agentReport = [
    ['label' => '本期直属下级业绩', 'value' => 0],
    ['label' => '本期团队业绩', 'value' => 0],
    ['label' => '本期总业绩', 'value' => 0],
    ['label' => '上期佣金', 'value' => 0],
    ['label' => '历史总佣金', 'value' => 0],
];
?>

<!-- ========== INVITE PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-invite-container">

        <!-- Referral Card (Dark Blue) -->
        <div class="sp-invite-referral-card">
            <div class="sp-referral-row">
                <div class="sp-referral-col">
                    <label class="sp-referral-label">推荐链接</label>
                    <div class="sp-referral-input-box" onclick="copyToClipboard('<?php echo $referralLink; ?>')">
                        <span class="sp-referral-value"><?php echo htmlspecialchars($referralLink); ?></span>
                        <i class="fas fa-copy sp-referral-copy-icon"></i>
                    </div>
                </div>
                <div class="sp-referral-col sp-referral-col-small">
                    <label class="sp-referral-label">推荐码</label>
                    <div class="sp-referral-input-box" onclick="copyToClipboard('<?php echo $referralCode; ?>')">
                        <span class="sp-referral-value"><?php echo htmlspecialchars($referralCode); ?></span>
                        <i class="fas fa-copy sp-referral-copy-icon"></i>
                    </div>
                </div>
            </div>

            <!-- Stats List -->
            <div class="sp-invite-stats">
                <?php foreach ($stats as $stat): ?>
                <div class="sp-invite-stat-row">
                    <span class="sp-stat-label"><?php echo htmlspecialchars($stat['label']); ?></span>
                    <span class="sp-stat-value"><?php echo $stat['value']; ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Commission Section -->
        <div class="sp-commission-header">
            <span class="sp-commission-title">佣金奖励</span>
            <a href="#" class="sp-commission-link" onclick="openCommissionModal(); return false;">领取记录 ></a>
        </div>
        <div class="sp-commission-bar">
            <span class="sp-commission-label">本期佣金（MYR）：</span>
            <span class="sp-commission-amount"><?php echo number_format($commission, 2); ?></span>
            <span class="sp-commission-status">已派发</span>
        </div>

        <!-- Tab Switch (4 tabs) - JavaScript based -->
        <div class="sp-invite-tabs">
            <button type="button" class="sp-invite-tab active" id="tabPerformance" onclick="switchInviteTab('performance')">业绩查询</button>
            <button type="button" class="sp-invite-tab" id="tabTeam" onclick="switchInviteTab('team')">团队管理</button>
            <button type="button" class="sp-invite-tab" id="tabReport" onclick="switchInviteTab('report')">代理报表</button>
            <button type="button" class="sp-invite-tab" id="tabIntro" onclick="switchInviteTab('intro')">代理介绍</button>
        </div>

        <!-- Tab Content -->
        <div class="sp-invite-content">
            <!-- Performance Tab -->
            <div class="sp-invite-tab-content" id="contentPerformance">
                <div class="sp-invite-content-card">
                    <div class="sp-performance-header">
                        <h3 class="sp-performance-title">业绩查询</h3>
                        <div class="sp-performance-date">< 今天 ></div>
                    </div>
                    <table class="sp-performance-table">
                        <thead>
                            <tr>
                                <th>游戏类别</th>
                                <th>总业绩</th>
                                <th>直属业绩</th>
                                <th>代理业绩</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($gamePerformance as $game): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($game['name']); ?></td>
                                <td><?php echo $game['total']; ?></td>
                                <td><?php echo $game['direct']; ?></td>
                                <td><?php echo $game['agent']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Team Management Tab -->
            <div class="sp-invite-tab-content" id="contentTeam" style="display: none;">
                <div class="sp-invite-content-card">
                    <h3 class="sp-team-title">团队管理</h3>
                    <div class="sp-team-search">
                        <input type="text" placeholder="请输入玩家ID" class="sp-team-search-input">
                        <i class="fas fa-search sp-team-search-icon"></i>
                    </div>
                    <table class="sp-team-table">
                        <thead>
                            <tr>
                                <th>会员ID</th>
                                <th>直属业绩</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Agent Report Tab -->
            <div class="sp-invite-tab-content" id="contentReport" style="display: none;">
                <div class="sp-invite-content-card">
                    <h3 class="sp-report-title">代理报表</h3>
                    <?php foreach ($agentReport as $item): ?>
                    <div class="sp-report-row">
                        <span class="sp-report-label"><?php echo htmlspecialchars($item['label']); ?></span>
                        <span class="sp-report-value"><?php echo $item['value']; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Agent Introduction Tab -->
            <div class="sp-invite-tab-content" id="contentIntro" style="display: none;">
                <div class="sp-invite-content-card">
                    <h3 class="sp-intro-title">代理介绍</h3>
                    <div class="sp-intro-content"></div>
                </div>
            </div>
        </div>

        <!-- Share Button -->
        <button type="button" class="sp-invite-share-btn" onclick="shareInvite()">分享好友</button>

    </div>
</main>

<!-- Commission Records Modal (39.png) -->
<div class="sp-confirm-overlay" id="commissionModal">
    <div class="sp-modal-card sp-modal-large">
        <div class="sp-modal-header-bar">
            <span class="sp-modal-header-title">佣金记录</span>
            <button class="sp-modal-close" onclick="closeCommissionModal()">&times;</button>
        </div>
        <div class="sp-modal-body">
            <table class="sp-commission-table">
                <thead>
                    <tr>
                        <th>时间</th>
                        <th>结算金额</th>
                        <th>结算状态</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>02:23:33 05/01/2024</td>
                        <td>RM10,000.00</td>
                        <td><i class="fas fa-check-circle sp-status-check"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Copy Success Toast (38.png) -->
<div class="sp-toast-overlay" id="copyToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-message">复制成功</p>
    </div>
</div>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
// Tab switching function
function switchInviteTab(tab) {
    // Remove active from all tabs
    document.getElementById('tabPerformance').classList.remove('active');
    document.getElementById('tabTeam').classList.remove('active');
    document.getElementById('tabReport').classList.remove('active');
    document.getElementById('tabIntro').classList.remove('active');

    // Hide all content
    document.getElementById('contentPerformance').style.display = 'none';
    document.getElementById('contentTeam').style.display = 'none';
    document.getElementById('contentReport').style.display = 'none';
    document.getElementById('contentIntro').style.display = 'none';

    // Show selected tab and content
    if (tab === 'performance') {
        document.getElementById('tabPerformance').classList.add('active');
        document.getElementById('contentPerformance').style.display = 'block';
    } else if (tab === 'team') {
        document.getElementById('tabTeam').classList.add('active');
        document.getElementById('contentTeam').style.display = 'block';
    } else if (tab === 'report') {
        document.getElementById('tabReport').classList.add('active');
        document.getElementById('contentReport').style.display = 'block';
    } else if (tab === 'intro') {
        document.getElementById('tabIntro').classList.add('active');
        document.getElementById('contentIntro').style.display = 'block';
    }
}

function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(function() {
        document.getElementById('copyToast').classList.add('active');
        setTimeout(function() {
            document.getElementById('copyToast').classList.remove('active');
        }, 1500);
    });
}

function openCommissionModal() {
    document.getElementById('commissionModal').classList.add('active');
}

function closeCommissionModal() {
    document.getElementById('commissionModal').classList.remove('active');
}

document.getElementById('commissionModal').addEventListener('click', function(e) {
    if (e.target === this) closeCommissionModal();
});

function shareInvite() {
    var shareData = {
        title: 'SUPERONG',
        text: '加入 SUPERONG，使用我的推荐码：<?php echo $referralCode; ?>',
        url: '<?php echo $referralLink; ?>'
    };
    if (navigator.share) {
        navigator.share(shareData);
    } else {
        copyToClipboard('<?php echo $referralLink; ?>');
    }
}
</script>

<?php include 'lib/htmlBody.php'; ?>
