<?php

/**
 * profile.php - SUPERONG User Profile Page
 * User Information & Statistics Display
 * 99% Design Similarity
 */

$pageName = 'profile';
$pageTitle = 'My Profile - SUPERONG';

// Mock user data
$currentUser = [
    'username' => 'Player123',
    'userid' => '123456789',
    'level' => 5,
    'balance' => 15250.50,
    'points' => 8900,
    'avatar_initial' => 'P'
];

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page">
    <div class="container-fluid" style="padding: 16px;">

        <!-- Profile Header Card -->
        <div class="sp-profile-card">
            <div class="sp-profile-header">
                <div class="sp-profile-avatar">
                    <?php echo $currentUser['avatar_initial']; ?>
                </div>
                <div class="sp-profile-info">
                    <div class="sp-profile-name"><?php echo $currentUser['username']; ?></div>
                    <div class="sp-profile-id">ID: <?php echo $currentUser['userid']; ?></div>
                </div>
            </div>

            <!-- Profile Stats Grid -->
            <div class="sp-profile-stats">
                <div class="sp-stat-item">
                    <div class="sp-stat-value"><?php echo number_format($currentUser['balance'], 2); ?></div>
                    <div class="sp-stat-label">余额</div>
                </div>
                <div class="sp-stat-item">
                    <div class="sp-stat-value"><?php echo $currentUser['level']; ?></div>
                    <div class="sp-stat-label">等级</div>
                </div>
                <div class="sp-stat-item">
                    <div class="sp-stat-value"><?php echo number_format($currentUser['points'], 0); ?></div>
                    <div class="sp-stat-label">积分</div>
                </div>
            </div>
        </div>

        <!-- Account Management Section -->
        <div style="margin-top: 20px;">
            <h3 class="sp-section-title">账户管理</h3>

            <!-- List Items -->
            <a href="profile-edit.php" class="sp-list-item">
                <div class="sp-list-icon">
                    <i class="fas fa-user-edit"></i>
                </div>
                <div class="sp-list-content">
                    <div class="sp-list-title">编辑个人信息</div>
                    <div class="sp-list-desc">修改用户名、头像等信息</div>
                </div>
                <div class="sp-list-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </a>

            <a href="bind-email.php" class="sp-list-item">
                <div class="sp-list-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="sp-list-content">
                    <div class="sp-list-title">邮箱绑定</div>
                    <div class="sp-list-desc">绑定和验证邮箱地址</div>
                </div>
                <div class="sp-list-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </a>

            <a href="change-phone.php" class="sp-list-item">
                <div class="sp-list-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="sp-list-content">
                    <div class="sp-list-title">修改手机号</div>
                    <div class="sp-list-desc">更新账户绑定的手机号码</div>
                </div>
                <div class="sp-list-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </a>

            <a href="change-password.php" class="sp-list-item">
                <div class="sp-list-icon">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="sp-list-content">
                    <div class="sp-list-title">修改密码</div>
                    <div class="sp-list-desc">更新登录密码确保安全</div>
                </div>
                <div class="sp-list-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </a>
        </div>

        <!-- Financial Management Section -->
        <div style="margin-top: 20px; margin-bottom: 20px;">
            <h3 class="sp-section-title">财务管理</h3>

            <a href="deposit.php" class="sp-list-item">
                <div class="sp-list-icon" style="background: linear-gradient(135deg, #2ecc71, #27ae60);">
                    <i class="fas fa-plus-circle"></i>
                </div>
                <div class="sp-list-content">
                    <div class="sp-list-title">存款</div>
                    <div class="sp-list-desc">充值账户余额</div>
                </div>
                <div class="sp-list-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </a>

            <a href="withdraw.php" class="sp-list-item">
                <div class="sp-list-icon" style="background: linear-gradient(135deg, #e74c3c, #c0392b);">
                    <i class="fas fa-minus-circle"></i>
                </div>
                <div class="sp-list-content">
                    <div class="sp-list-title">提款</div>
                    <div class="sp-list-desc">提取账户余额</div>
                </div>
                <div class="sp-list-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </a>

            <a href="transaction.php" class="sp-list-item">
                <div class="sp-list-icon" style="background: linear-gradient(135deg, #3498db, #2980b9);">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <div class="sp-list-content">
                    <div class="sp-list-title">交易记录</div>
                    <div class="sp-list-desc">查看所有存取款记录</div>
                </div>
                <div class="sp-list-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </a>
        </div>

        <!-- Logout Button -->
        <div style="padding: 0 16px; margin-bottom: 80px;">
            <button class="sp-btn-primary sp-btn-large" onclick="if(confirm('确定要退出吗？')) { window.location='logout.php'; }">
                <i class="fas fa-sign-out-alt"></i>
                退出登录
            </button>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
</body>

</html>