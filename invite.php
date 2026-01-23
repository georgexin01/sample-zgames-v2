<?php
/**
 * invite.php - SUPERONG Mobile App
 * 邀请好友 (Invite Friends Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'invite';
$pageTitle = '邀请好友';
$headerTitle = '邀请好友';
$headerRightIcon = 'fa-question-circle';
$headerRightLink = 'help.php';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Use global user data
global $currentUser;
?>

<!-- ========== INVITE PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Referral Info Card -->
    <div class="sp-referral-card">
        <div class="sp-referral-row">
            <div class="sp-referral-item">
                <span class="sp-referral-label">推荐链接</span>
                <div class="sp-referral-value">
                    <span id="referralLink"><?php echo e($currentUser['referralLink']); ?></span>
                    <button class="sp-copy-btn" onclick="copyToClipboard('<?php echo e($currentUser['referralLink']); ?>')">
                        <i class="far fa-copy"></i>
                    </button>
                </div>
            </div>
            <div class="sp-referral-item">
                <span class="sp-referral-label">推荐码</span>
                <div class="sp-referral-value">
                    <span id="referralCode"><?php echo e($currentUser['referralCode']); ?></span>
                    <button class="sp-copy-btn" onclick="copyToClipboard('<?php echo e($currentUser['referralCode']); ?>')">
                        <i class="far fa-copy"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="sp-stats-grid">
            <div class="sp-stat-item">
                <span class="sp-stat-label">直属人数</span>
                <span class="sp-stat-value">0</span>
            </div>
            <div class="sp-stat-item">
                <span class="sp-stat-label">今日新增人数</span>
                <span class="sp-stat-value">0</span>
            </div>
            <div class="sp-stat-item">
                <span class="sp-stat-label">今日团队新增人数</span>
                <span class="sp-stat-value">0</span>
            </div>
            <div class="sp-stat-item">
                <span class="sp-stat-label">团队总人数</span>
                <span class="sp-stat-value">0</span>
            </div>
        </div>
    </div>

    <!-- Commission Section -->
    <div class="sp-commission-section">
        <div class="sp-commission-header">
            <span class="sp-commission-title">佣金奖励</span>
            <a href="commission-record.php" class="sp-commission-link">领取记录 &gt;</a>
        </div>
        <div class="sp-commission-row">
            <span class="sp-commission-label">本期佣金（MYR）：</span>
            <span class="sp-commission-amount">1000.00</span>
            <span class="sp-commission-status">已派发</span>
        </div>
    </div>

    <!-- Tab Navigation -->
    <div class="sp-tabs-container">
        <div class="sp-tabs sp-tabs-scroll" data-tab-group="invite">
            <button class="sp-tab active">业绩查询</button>
            <button class="sp-tab">团队管理</button>
            <button class="sp-tab">代理报表</button>
            <button class="sp-tab">代理介绍</button>
        </div>
    </div>

    <!-- Tab Content: 业绩查询 -->
    <div class="sp-tab-content active" data-tab-content="invite">
        <div class="sp-performance-header">
            <h3 class="sp-section-title">业绩查询</h3>
            <span class="sp-date-selector">&lt; 今天 &gt;</span>
        </div>

        <div class="sp-performance-table">
            <div class="sp-table-header">
                <span>游戏类别</span>
                <span>总业绩</span>
                <span>直属业绩</span>
                <span>代理业绩</span>
            </div>
            <div class="sp-table-row">
                <span>老虎机</span>
                <span>0</span>
                <span>0</span>
                <span>0</span>
            </div>
            <div class="sp-table-row">
                <span>真人视讯</span>
                <span>0</span>
                <span>0</span>
                <span>0</span>
            </div>
            <div class="sp-table-row">
                <span>体育</span>
                <span>0</span>
                <span>0</span>
                <span>0</span>
            </div>
            <div class="sp-table-row">
                <span>彩票</span>
                <span>0</span>
                <span>0</span>
                <span>0</span>
            </div>
            <div class="sp-table-row">
                <span>棋牌</span>
                <span>0</span>
                <span>0</span>
                <span>0</span>
            </div>
            <div class="sp-table-row">
                <span>捕鱼</span>
                <span>0</span>
                <span>0</span>
                <span>0</span>
            </div>
            <div class="sp-table-row">
                <span>电竞</span>
                <span>0</span>
                <span>0</span>
                <span>0</span>
            </div>
        </div>
    </div>

    <!-- Tab Content: 团队管理 -->
    <div class="sp-tab-content" data-tab-content="invite" style="display: none;">
        <h3 class="sp-section-title">团队管理</h3>

        <!-- Search Box -->
        <div class="sp-search-box">
            <input type="text" placeholder="请输入玩家ID">
            <i class="fas fa-search"></i>
        </div>

        <div class="sp-team-table">
            <div class="sp-table-header">
                <span>会员ID</span>
                <span>直属业绩</span>
            </div>
            <!-- Empty state -->
            <div class="sp-empty">
                <p class="sp-empty-text">暂无数据</p>
            </div>
        </div>

        <!-- Share Button -->
        <div class="sp-button-container">
            <button class="sp-btn sp-btn-primary sp-btn-block">分享好友</button>
        </div>
    </div>

    <!-- Tab Content: 代理报表 -->
    <div class="sp-tab-content" data-tab-content="invite" style="display: none;">
        <h3 class="sp-section-title">代理报表</h3>
        <div class="sp-empty">
            <i class="fas fa-chart-bar sp-empty-icon"></i>
            <p class="sp-empty-text">暂无数据</p>
        </div>
    </div>

    <!-- Tab Content: 代理介绍 -->
    <div class="sp-tab-content" data-tab-content="invite" style="display: none;">
        <h3 class="sp-section-title">代理介绍</h3>
        <div class="sp-intro-content">
            <p>欢迎加入SUPERONG代理计划！</p>
            <p>作为代理，您可以：</p>
            <ul>
                <li>邀请好友注册</li>
                <li>获得佣金奖励</li>
                <li>查看团队业绩</li>
            </ul>
        </div>
    </div>

</main>

<?php
// Include footer (bottom nav + modals)
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
