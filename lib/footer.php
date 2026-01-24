<?php

/**
 * footer.php - SUPERONG Mobile App
 * Bottom Navigation + Customer Service Floating Button
 * 99% Similarity Required
 */
?>

<!-- Bottom Navigation -->
<nav class="sp-bottom-nav">
    <!-- 通知 (Notification) -->
    <a href="notification.php" class="sp-nav-item <?php echo isActivePage($pageName, 'notification'); ?>">
        <img src="resource/ui-elements/alert.png" alt="通知" class="sp-nav-icon">
        <span>通知</span>
    </a>

    <!-- 邀请好友 (Invite Friends) -->
    <a href="invite.php" class="sp-nav-item <?php echo isActivePage($pageName, 'invite'); ?>">
        <img src="resource/ui-elements/user-plus.png" alt="邀请好友" class="sp-nav-icon">
        <span>邀请好友</span>
    </a>

    <!-- Center Spade Button (Home) -->
    <div class="sp-nav-center">
        <a href="index.php" class="sp-nav-crown <?php echo isActivePage($pageName, 'index'); ?>">
            <img src="resource/ui-elements/logo-transparent.png" alt="Home" class="sp-nav-crown-logo">
        </a>
    </div>

    <!-- 聊天室 (Chat) -->
    <a href="chatroom.php" class="sp-nav-item <?php echo isActivePage($pageName, 'chatroom'); ?>">
        <img src="resource/ui-elements/chat.png" alt="聊天室" class="sp-nav-icon">
        <span>聊天室</span>
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