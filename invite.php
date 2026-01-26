<?php
/**
 * invite.php - SUPERONG Mobile App
 * 邀请好友 (Invite Friends Page)
 * 100% Match with invite_agent_intro邀请好友_代理介绍.png
 */

$pageName = 'invite';
$pageTitle = '邀请好友';
$headerTitle = '邀请好友';
$headerRightIcon = 'fa-question-circle';
$headerRightLink = 'invite-help.php';

include 'lib/htmlHead.php';
include 'lib/header.php';

// User referral data
$referral = [
    'link' => 'http://SUPERONG123456.my',
    'code' => '123456',
    'directMembers' => 0,
    'todayNew' => 0,
    'todayTeamNew' => 0,
    'totalTeam' => 0,
    'commission' => 1000.00,
    'commissionStatus' => '已派发'
];
?>

<!-- ========== INVITE PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-invite-container">

        <!-- Header Section with Links & Stats -->
        <div class="sp-invite-header">
            <!-- Referral Links -->
            <div class="sp-invite-links">
                <div class="sp-invite-link-box">
                    <div class="sp-invite-link-label">推荐链接</div>
                    <div class="sp-invite-link-value">
                        <span id="refLink"><?php echo htmlspecialchars($referral['link']); ?></span>
                        <button onclick="copyToClipboard('refLink')"><i class="far fa-copy"></i></button>
                    </div>
                </div>
                <div class="sp-invite-link-box">
                    <div class="sp-invite-link-label">推荐码</div>
                    <div class="sp-invite-link-value">
                        <span id="refCode"><?php echo htmlspecialchars($referral['code']); ?></span>
                        <button onclick="copyToClipboard('refCode')"><i class="far fa-copy"></i></button>
                    </div>
                </div>
            </div>

            <!-- Stats Table -->
            <div class="sp-invite-stats">
                <div class="sp-invite-stat-row">
                    <span class="sp-invite-stat-label">直属人数</span>
                    <span class="sp-invite-stat-value"><?php echo $referral['directMembers']; ?></span>
                </div>
                <div class="sp-invite-stat-row">
                    <span class="sp-invite-stat-label">今日新增人数</span>
                    <span class="sp-invite-stat-value"><?php echo $referral['todayNew']; ?></span>
                </div>
                <div class="sp-invite-stat-row">
                    <span class="sp-invite-stat-label">今日团队新增人数</span>
                    <span class="sp-invite-stat-value"><?php echo $referral['todayTeamNew']; ?></span>
                </div>
                <div class="sp-invite-stat-row">
                    <span class="sp-invite-stat-label">团队总人数</span>
                    <span class="sp-invite-stat-value"><?php echo $referral['totalTeam']; ?></span>
                </div>
            </div>
        </div>

        <!-- Commission Section -->
        <div class="sp-invite-commission">
            <div class="sp-commission-header">
                <span class="sp-commission-title">佣金奖励</span>
                <a href="commission-record.php" class="sp-commission-link">领取记录 &gt;</a>
            </div>
            <div class="sp-commission-box">
                <span class="sp-commission-amount">本期佣金（MYR）: <?php echo number_format($referral['commission'], 2); ?></span>
                <span class="sp-commission-status"><?php echo htmlspecialchars($referral['commissionStatus']); ?></span>
            </div>
        </div>

        <!-- Tab Menu & Content -->
        <div class="sp-form-page-container" style="padding-top: 0;">
            <div class="sp-tab-switch">
                <button class="sp-tab-btn">业绩查询</button>
                <button class="sp-tab-btn">团队管理</button>
                <button class="sp-tab-btn">代理报表</button>
                <button class="sp-tab-btn active">代理介绍</button>
            </div>

            <!-- Content Area -->
            <div class="sp-form-card">
                <label class="sp-form-card-label">代理介绍</label>
                <div style="padding: 20px 0; color: #999; text-align: center;">
                    代理介绍内容
                </div>
            </div>

            <!-- Share Button -->
            <div class="sp-form-actions">
                <button class="sp-btn-submit" onclick="shareToFriends()">分享好友</button>
            </div>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function copyToClipboard(elementId) {
    const text = document.getElementById(elementId).textContent;
    navigator.clipboard.writeText(text).then(() => {
        alert('已复制: ' + text);
    });
}

function shareToFriends() {
    alert('分享功能');
}

document.querySelectorAll('.sp-tab-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.sp-tab-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>

<?php include 'lib/htmlBody.php'; ?>
