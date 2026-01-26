<?php

/**
 * footer.php - SUPERONG Mobile App
 * Bottom Navigation - 100% Match with home.png design
 * 5 items: 首页, 优惠, Crown(center), 充值, 我的
 */
?>

<!-- Bottom Navigation -->
<nav class="sp-bottom-nav">
    <!-- 首页 (Home) -->
    <a href="index.php" class="sp-nav-item <?php echo isActivePage($pageName, 'home'); ?>">
        <img src="resource/ui-elements/menu-1.png" alt="首页" class="sp-nav-icon">
        <span>首页</span>
    </a>

    <!-- 优惠 (Promo) -->
    <a href="promo.php" class="sp-nav-item <?php echo isActivePage($pageName, 'promo'); ?>">
        <img src="resource/ui-elements/gift.png" alt="优惠" class="sp-nav-icon">
        <span>优惠</span>
    </a>

    <!-- Center Crown Button (Home) -->
    <div class="sp-nav-center">
        <a href="index.php" class="sp-nav-crown <?php echo isActivePage($pageName, 'index'); ?>">
            <img src="resource/ui-elements/logo-transparent.png" alt="Home" class="sp-nav-crown-logo">
        </a>
    </div>

    <!-- 充值 (Deposit) -->
    <a href="deposit.php" class="sp-nav-item <?php echo isActivePage($pageName, 'deposit'); ?>">
        <img src="resource/ui-elements/wallet.png" alt="充值" class="sp-nav-icon">
        <span>充值</span>
    </a>

    <!-- 我的 (Profile) -->
    <a href="profile.php" class="sp-nav-item <?php echo isActivePage($pageName, 'profile'); ?>">
        <img src="resource/ui-elements/user.png" alt="我的" class="sp-nav-icon">
        <span>我的</span>
    </a>
</nav>

<!-- Modals Container -->
<div id="modalsContainer">
    <!-- Success Modal Template -->
    <div class="sp-modal-overlay" id="successModal">
        <div class="sp-modal sp-modal-success">
            <div class="sp-modal-icon success">
                <i class="fas fa-check-circle"></i>
            </div>
            <p class="sp-modal-text" id="successModalText">操作成功</p>
        </div>
    </div>

    <!-- Confirm Modal Template -->
    <div class="sp-modal-overlay" id="confirmModal">
        <div class="sp-modal sp-modal-confirm">
            <div class="sp-modal-icon" id="confirmModalIcon">
                <i class="fas fa-sign-out-alt"></i>
            </div>
            <h3 class="sp-modal-title" id="confirmModalTitle">确认操作？</h3>
            <p class="sp-modal-message" id="confirmModalMessage"></p>
            <div class="sp-modal-buttons">
                <button class="sp-modal-btn sp-modal-btn-cancel" onclick="closeModal('confirmModal')">取消</button>
                <button class="sp-modal-btn sp-modal-btn-confirm" id="confirmModalBtn">确定</button>
            </div>
        </div>
    </div>

    <!-- Password Input Modal Template -->
    <div class="sp-modal-overlay" id="passwordModal">
        <div class="sp-modal sp-modal-password">
            <button class="sp-modal-close" onclick="closeModal('passwordModal')">
                <i class="fas fa-times"></i>
            </button>
            <h3 class="sp-modal-title" id="passwordModalTitle">输入密码</h3>
            <div class="sp-password-inputs">
                <input type="password" maxlength="1" class="sp-password-box" data-index="0">
                <input type="password" maxlength="1" class="sp-password-box" data-index="1">
                <input type="password" maxlength="1" class="sp-password-box" data-index="2">
                <input type="password" maxlength="1" class="sp-password-box" data-index="3">
                <input type="password" maxlength="1" class="sp-password-box" data-index="4">
                <input type="password" maxlength="1" class="sp-password-box" data-index="5">
            </div>
            <p class="sp-modal-hint">忘记密码？</p>
            <button class="sp-btn sp-btn-primary sp-modal-submit" id="passwordModalBtn">确定</button>
        </div>
    </div>
</div>
