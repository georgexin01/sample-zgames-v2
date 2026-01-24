<?php
/**
 * profile.php - SUPERONG Mobile App
 * 我的 (Profile Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'profile';
$pageTitle = '我的';
$headerTitle = '我的';
$headerRightIcon = 'fa-share-alt';
$headerRightLink = '#';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Use global user data
global $currentUser, $profileMenuItems;
?>

<!-- ========== PROFILE PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Profile Card -->
    <div class="sp-profile-card">
        <div class="sp-profile-avatar">
            <div class="sp-avatar-circle">
                <img src="resource/ui-elements/user-alt.png" alt="Avatar" style="width: 100%; height: 100%; object-fit: cover; border-radius: 50%;">
            </div>
        </div>
        <h2 class="sp-profile-name"><?php echo e($currentUser['username']); ?></h2>
        <p class="sp-profile-nickname"><?php echo e($currentUser['nickname']); ?></p>
        <div class="sp-profile-info">
            <div class="sp-profile-info-item">
                <i class="fas fa-phone"></i>
                <span><?php echo e($currentUser['phone']); ?></span>
            </div>
            <div class="sp-profile-info-item">
                <i class="fas fa-birthday-cake"></i>
                <span><?php echo e($currentUser['birthday']); ?></span>
            </div>
        </div>
    </div>

    <!-- Point Balance -->
    <div class="sp-point-row">
        <span class="sp-point-row-label">Point</span>
        <span class="sp-point-row-value"><?php echo number_format($currentUser['point'], 2); ?></span>
    </div>

    <!-- Menu Section -->
    <div class="sp-menu-section">
        <div class="sp-menu-label">其他功能</div>
        <div class="sp-menu-list">
            <a href="deposit.php" class="sp-menu-item">
                <div style="display:flex; align-items:center; gap:10px;">
                    <img src="resource/ui-elements/wallet-orange.png" style="width:24px; height:24px;">
                    <span>充值</span>
                </div>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="withdraw.php" class="sp-menu-item">
                <div style="display:flex; align-items:center; gap:10px;">
                    <img src="resource/ui-elements/cash-orange.png" style="width:24px; height:24px;">
                    <span>提款</span>
                </div>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="transfer.php" class="sp-menu-item">
                <div style="display:flex; align-items:center; gap:10px;">
                    <img src="resource/ui-elements/transfer.png" style="width:24px; height:24px;">
                    <span>转帐</span>
                </div>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="activity.php" class="sp-menu-item">
                <div style="display:flex; align-items:center; gap:10px;">
                    <img src="resource/ui-elements/gift.png" style="width:24px; height:24px;">
                    <span>活动</span>
                </div>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="ranking.php" class="sp-menu-item">
                <div style="display:flex; align-items:center; gap:10px;">
                    <img src="resource/ui-elements/champion.png" style="width:24px; height:24px;">
                    <span>排行榜</span>
                </div>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="transaction.php" class="sp-menu-item">
                <div style="display:flex; align-items:center; gap:10px;">
                    <img src="resource/ui-elements/history.png" style="width:24px; height:24px;">
                    <span>交易记录</span>
                </div>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="profit-report.php" class="sp-menu-item">
                <div style="display:flex; align-items:center; gap:10px;">
                    <img src="resource/ui-elements/file-orange.png" style="width:24px; height:24px;">
                    <span>输赢报表</span>
                </div>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="bet-record.php" class="sp-menu-item">
                <div style="display:flex; align-items:center; gap:10px;">
                    <img src="resource/ui-elements/file.png" style="width:24px; height:24px;">
                    <span>投注记录</span>
                </div>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="settings.php" class="sp-menu-item">
                <div style="display:flex; align-items:center; gap:10px;">
                    <img src="resource/ui-elements/item-blue-8.png" style="width:24px; height:24px;">
                    <span>安全设定</span>
                </div>
                <i class="fas fa-chevron-right"></i>
            </a>
            <a href="#" class="sp-menu-item" onclick="logout(); return false;">
                <div style="display:flex; align-items:center; gap:10px;">
                    <img src="resource/ui-elements/logout-blue.png" style="width:24px; height:24px;">
                    <span>退出登录</span>
                </div>
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>

</main>

<?php
// Include footer (bottom nav + modals)
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
