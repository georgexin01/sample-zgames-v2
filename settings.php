<?php
/**
 * settings.php - SUPERONG Mobile App
 * 设定 (Settings Page)
 * 100% Match with resource/1/57.png, 61.png, 68.png, 72.png, 73.png
 */

$pageName = 'settings';
$pageTitle = '设定';
$headerTitle = '设定';
$headerTitleClass = 'sp-header-title-orange';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== SETTINGS PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-settings-container">

        <!-- Settings Menu Card -->
        <div class="sp-profile-menu-card">
            <div class="sp-profile-menu-list">
                <a href="change-phone.php" class="sp-profile-menu-item">
                    <span class="sp-profile-menu-text">修改手机号</span>
                    <i class="fas fa-chevron-right sp-profile-menu-arrow"></i>
                </a>
                <a href="bind-email.php" class="sp-profile-menu-item">
                    <span class="sp-profile-menu-text">绑定Email</span>
                    <i class="fas fa-chevron-right sp-profile-menu-arrow"></i>
                </a>
                <a href="change-password.php" class="sp-profile-menu-item">
                    <span class="sp-profile-menu-text">修改密码</span>
                    <i class="fas fa-chevron-right sp-profile-menu-arrow"></i>
                </a>
                <a href="javascript:void(0)" onclick="openPaymentPasswordModal()" class="sp-profile-menu-item">
                    <span class="sp-profile-menu-text">修改支付密码</span>
                    <i class="fas fa-chevron-right sp-profile-menu-arrow"></i>
                </a>
                <a href="javascript:void(0)" onclick="openBirthdayModal()" class="sp-profile-menu-item">
                    <span class="sp-profile-menu-text">设置生日</span>
                    <i class="fas fa-chevron-right sp-profile-menu-arrow"></i>
                </a>
                <a href="about.php" class="sp-profile-menu-item">
                    <span class="sp-profile-menu-text">关于</span>
                    <i class="fas fa-chevron-right sp-profile-menu-arrow"></i>
                </a>
            </div>
        </div>

    </div>
</main>

<!-- Payment Password Modal Step 1 (61.png) -->
<div class="sp-modal-overlay" id="payPasswordModal1">
    <div class="sp-modal-card sp-password-modal">
        <button class="sp-modal-close" onclick="closePayPasswordModal()">&times;</button>
        <h3 class="sp-modal-title">请输入支付密码</h3>
        <div class="sp-password-boxes" id="passwordBoxes1">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
        </div>
        <p class="sp-modal-step">（1/3）</p>
        <button class="sp-modal-btn" onclick="goToStep2()">下一步</button>
    </div>
</div>

<!-- Payment Password Modal Step 2 (68.png) -->
<div class="sp-modal-overlay" id="payPasswordModal2">
    <div class="sp-modal-card sp-password-modal">
        <button class="sp-modal-close" onclick="closePayPasswordModal()">&times;</button>
        <h3 class="sp-modal-title">请输入新支付密码</h3>
        <div class="sp-password-boxes" id="passwordBoxes2">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
        </div>
        <p class="sp-modal-step">（2/3）</p>
        <button class="sp-modal-btn" onclick="goToStep3()">下一步</button>
    </div>
</div>

<!-- Payment Password Modal Step 3 (72.png) -->
<div class="sp-modal-overlay" id="payPasswordModal3">
    <div class="sp-modal-card sp-password-modal">
        <button class="sp-modal-close" onclick="closePayPasswordModal()">&times;</button>
        <h3 class="sp-modal-title">请确认新支付密码</h3>
        <div class="sp-password-boxes" id="passwordBoxes3">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
            <input type="password" maxlength="1" inputmode="numeric" class="sp-password-box">
        </div>
        <p class="sp-modal-step">（3/3）</p>
        <button class="sp-modal-btn" onclick="submitPayPassword()">确认</button>
    </div>
</div>

<!-- Success Toast (73.png) -->
<div class="sp-toast-overlay" id="payPasswordSuccessToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-message">支付密码修改完成</p>
    </div>
</div>

<!-- Birthday Modal -->
<div class="sp-modal-overlay" id="birthdayModal">
    <div class="sp-modal-card sp-password-modal">
        <button class="sp-modal-close" onclick="closeBirthdayModal()">&times;</button>
        <h3 class="sp-modal-title">设置生日</h3>
        <div class="sp-birthday-inputs">
            <select id="birthYear" class="sp-birthday-select">
                <option value="">年</option>
                <?php for ($y = date('Y'); $y >= 1950; $y--): ?>
                <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
                <?php endfor; ?>
            </select>
            <select id="birthMonth" class="sp-birthday-select">
                <option value="">月</option>
                <?php for ($m = 1; $m <= 12; $m++): ?>
                <option value="<?php echo $m; ?>"><?php echo $m; ?>月</option>
                <?php endfor; ?>
            </select>
            <select id="birthDay" class="sp-birthday-select">
                <option value="">日</option>
                <?php for ($d = 1; $d <= 31; $d++): ?>
                <option value="<?php echo $d; ?>"><?php echo $d; ?>日</option>
                <?php endfor; ?>
            </select>
        </div>
        <button class="sp-modal-btn" onclick="saveBirthday()">确认</button>
    </div>
</div>

<!-- Birthday Success Toast -->
<div class="sp-toast-overlay" id="birthdaySuccessToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-message">生日设置成功</p>
    </div>
</div>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function openPaymentPasswordModal() {
    document.getElementById('payPasswordModal1').classList.add('active');
    setupPasswordBoxes('passwordBoxes1');
}

function closePayPasswordModal() {
    document.getElementById('payPasswordModal1').classList.remove('active');
    document.getElementById('payPasswordModal2').classList.remove('active');
    document.getElementById('payPasswordModal3').classList.remove('active');
    clearPasswordBoxes();
}

function goToStep2() {
    document.getElementById('payPasswordModal1').classList.remove('active');
    document.getElementById('payPasswordModal2').classList.add('active');
    setupPasswordBoxes('passwordBoxes2');
}

function goToStep3() {
    document.getElementById('payPasswordModal2').classList.remove('active');
    document.getElementById('payPasswordModal3').classList.add('active');
    setupPasswordBoxes('passwordBoxes3');
}

function submitPayPassword() {
    closePayPasswordModal();
    document.getElementById('payPasswordSuccessToast').classList.add('active');
    setTimeout(function() {
        document.getElementById('payPasswordSuccessToast').classList.remove('active');
    }, 2000);
}

function setupPasswordBoxes(containerId) {
    var boxes = document.querySelectorAll('#' + containerId + ' .sp-password-box');
    boxes.forEach(function(box, index) {
        box.value = '';
        box.addEventListener('input', function() {
            if (this.value.length === 1 && index < boxes.length - 1) {
                boxes[index + 1].focus();
            }
        });
        box.addEventListener('keydown', function(e) {
            if (e.key === 'Backspace' && this.value === '' && index > 0) {
                boxes[index - 1].focus();
            }
        });
    });
    setTimeout(function() { boxes[0].focus(); }, 100);
}

function clearPasswordBoxes() {
    document.querySelectorAll('.sp-password-box').forEach(function(box) {
        box.value = '';
    });
}

// Close modal on overlay click
document.querySelectorAll('.sp-modal-overlay').forEach(function(overlay) {
    overlay.addEventListener('click', function(e) {
        if (e.target === this) {
            closePayPasswordModal();
            closeBirthdayModal();
        }
    });
});

function openBirthdayModal() {
    document.getElementById('birthdayModal').classList.add('active');
}

function closeBirthdayModal() {
    document.getElementById('birthdayModal').classList.remove('active');
}

function saveBirthday() {
    var year = document.getElementById('birthYear').value;
    var month = document.getElementById('birthMonth').value;
    var day = document.getElementById('birthDay').value;
    if (!year || !month || !day) {
        alert('请选择完整的生日日期');
        return;
    }
    closeBirthdayModal();
    document.getElementById('birthdaySuccessToast').classList.add('active');
    setTimeout(function() {
        document.getElementById('birthdaySuccessToast').classList.remove('active');
    }, 2000);
}
</script>

<?php include 'lib/htmlBody.php'; ?>
