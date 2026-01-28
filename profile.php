<?php
/**
 * profile.php - SUPERONG Mobile App
 * 我的 (My Profile Page)
 * 100% Match with resource/1/53.png
 */

$pageName = 'profile';
$pageTitle = '我的';
$headerTitle = '我的';
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'fa-sign-out-alt';
$headerRightLink = 'javascript:showLogoutModal()';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy user data
$user = [
    'username' => 'SUPERONG123',
    'displayName' => 'SUPERONG',
    'phone' => '+6012 435 6567',
    'birthday' => '22-08-1996',
    'points' => 1000.00,
];

// Menu items
$menuItems = [
    ['label' => '充值', 'link' => 'deposit.php'],
    ['label' => '提款', 'link' => 'withdraw.php'],
    ['label' => '转帐', 'link' => 'transfer.php'],
    ['label' => '活动', 'link' => 'activity.php'],
    ['label' => '排行榜', 'link' => 'leaderboard.php'],
    ['label' => '交易记录', 'link' => 'transaction.php'],
    ['label' => '输赢报表', 'link' => 'winloss-report.php'],
    ['label' => '投注记录', 'link' => 'betting-record.php'],
    ['label' => '安全认证', 'link' => 'verification.php'],
    ['label' => '设定', 'link' => 'settings.php'],
];
?>

<!-- ========== PROFILE PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-profile-container">

        <!-- Profile Card (Dark Navy) -->
        <div class="sp-profile-card">
            <div class="sp-profile-avatar">
                <div class="sp-profile-avatar-inner">
                    <img src="resource/ui-elements/user-alt-2.png" alt="" class="sp-profile-avatar-icon">
                </div>
            </div>
            <h2 class="sp-profile-username"><?php echo htmlspecialchars($user['username']); ?></h2>
            <p class="sp-profile-displayname"><?php echo htmlspecialchars($user['displayName']); ?></p>
            <div class="sp-profile-info-row">
                <div class="sp-profile-info-item">
                    <i class="fas fa-phone-alt"></i>
                    <span><?php echo htmlspecialchars($user['phone']); ?></span>
                </div>
                <div class="sp-profile-info-divider"></div>
                <div class="sp-profile-info-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span><?php echo htmlspecialchars($user['birthday']); ?></span>
                </div>
            </div>
        </div>

        <!-- Points Bar -->
        <div class="sp-profile-points-bar">
            <span class="sp-profile-points-label">Point</span>
            <div class="sp-profile-points-divider"></div>
            <span class="sp-profile-points-value"><?php echo number_format($user['points'], 2); ?></span>
        </div>

        <!-- Menu Card -->
        <div class="sp-profile-menu-card">
            <div class="sp-profile-menu-header">
                <span class="sp-profile-menu-badge">其他功能</span>
            </div>
            <div class="sp-profile-menu-list">
                <?php foreach ($menuItems as $item): ?>
                <a href="<?php echo $item['link']; ?>" class="sp-profile-menu-item">
                    <span class="sp-profile-menu-text"><?php echo htmlspecialchars($item['label']); ?></span>
                    <i class="fas fa-chevron-right sp-profile-menu-arrow"></i>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<!-- Logout Confirmation Modal -->
<div class="sp-confirm-overlay" id="logoutModal">
    <div class="sp-modal-card">
        <div class="sp-modal-icon">
            <i class="fas fa-sign-out-alt"></i>
        </div>
        <p class="sp-modal-title">确认退出？</p>
        <p class="sp-modal-name">您确定要退出登入吗？</p>
        <div class="sp-modal-buttons">
            <button class="sp-modal-btn sp-modal-btn-cancel" onclick="closeLogoutModal()">取消</button>
            <button class="sp-modal-btn sp-modal-btn-confirm" onclick="confirmLogout()">确定</button>
        </div>
    </div>
</div>

<?php include 'lib/footer.php'; ?>

<script>
function showLogoutModal() {
    document.getElementById('logoutModal').classList.add('active');
}

function closeLogoutModal() {
    document.getElementById('logoutModal').classList.remove('active');
}

function confirmLogout() {
    window.location.href = 'login.php';
}

document.getElementById('logoutModal').addEventListener('click', function(e) {
    if (e.target === this) closeLogoutModal();
});
</script>

<?php include 'lib/htmlBody.php'; ?>
