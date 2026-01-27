<?php
/**
 * profile.php - SUPERONG Mobile App
 * 我的 (Profile Page)
 * 100% Match with profile我的_个人中心.png
 */

$pageName = 'profile';
$pageTitle = '我的';
$headerTitle = '我的';
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'fa-sign-out-alt';
$headerRightLink = 'javascript:showLogoutModal()';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy user data (simulating logged-in user)
$user = [
    'username' => 'SUPERONG123',
    'level' => 'SUPERONG',
    'phone' => '+6012 435 6567',
    'joinDate' => '22-08-1996',
    'point' => 1000.00
];
?>

<!-- ========== PROFILE PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="container-fluid" style="padding: 0;">

        <!-- ========== USER PROFILE CARD ========== -->
        <section class="sp-profile-card-section">
            <div class="sp-profile-user-card">
                <!-- Avatar with Ring -->
                <div class="sp-profile-avatar-wrap">
                    <div class="sp-avatar-ring">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <!-- Username & Level -->
                <h2 class="sp-profile-username"><?php echo htmlspecialchars($user['username']); ?></h2>
                <p class="sp-profile-level"><?php echo htmlspecialchars($user['level']); ?></p>
                <!-- Phone & Date Info -->
                <div class="sp-profile-meta">
                    <div class="sp-profile-meta-item">
                        <i class="fas fa-phone-alt"></i>
                        <span><?php echo htmlspecialchars($user['phone']); ?></span>
                    </div>
                    <div class="sp-profile-meta-item">
                        <i class="fas fa-calendar-alt"></i>
                        <span><?php echo htmlspecialchars($user['joinDate']); ?></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========== POINT BAR ========== -->
        <section class="sp-profile-point-section">
            <div class="sp-profile-point-row">
                <span class="sp-profile-point-label">Point</span>
                <span class="sp-profile-point-value"><?php echo number_format($user['point'], 2); ?></span>
            </div>
        </section>

        <!-- ========== MENU SECTION ========== -->
        <section class="sp-profile-menu-section">
            <div class="sp-profile-menu-header">
                <span>其他功能</span>
            </div>
            <div class="sp-profile-menu-list">
                <a href="deposit.php" class="sp-profile-menu-item">
                    <span>充值</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <a href="withdrawal.php" class="sp-profile-menu-item">
                    <span>提款</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <a href="transfer.php" class="sp-profile-menu-item">
                    <span>转帐</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <a href="activity.php" class="sp-profile-menu-item">
                    <span>活动</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <a href="ranking.php" class="sp-profile-menu-item">
                    <span>排行榜</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <a href="transaction.php" class="sp-profile-menu-item">
                    <span>交易记录</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <a href="winloss.php" class="sp-profile-menu-item">
                    <span>输赢报表</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <a href="betting.php" class="sp-profile-menu-item">
                    <span>投注记录</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
                <a href="settings.php" class="sp-profile-menu-item">
                    <span>安全设定</span>
                    <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </section>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function showLogoutModal() {
    document.getElementById('confirmModalIcon').innerHTML = '<i class="fas fa-sign-out-alt"></i>';
    document.getElementById('confirmModalTitle').textContent = '确认退出？';
    document.getElementById('confirmModalMessage').textContent = '您确定要退出登入吗？';
    document.getElementById('confirmModalBtn').onclick = function() {
        window.location.href = 'login.php';
    };
    document.getElementById('confirmModal').classList.add('active');
}
</script>

<?php include 'lib/htmlBody.php'; ?>
