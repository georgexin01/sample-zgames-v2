<?php
/**
 * transfer.php - SUPERONG Mobile App
 * 转帐 (Transfer Page)
 * 100% Match with resource/1/40.png
 */

$pageName = 'transfer';
$pageTitle = '转帐';
$headerTitle = '转帐';
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'fa-clock';
$headerRightLink = 'transfer-record.php';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy balance
$balance = 10000;

// Dummy transfer users (friends list)
$transferUsers = [
    ['id' => 1, 'name' => 'AAA111'],
    ['id' => 2, 'name' => 'BBB222'],
    ['id' => 3, 'name' => 'CCC333'],
];
?>

<!-- ========== TRANSFER PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-transfer-container">

        <!-- Transfer Form Card -->
        <div class="sp-transfer-card">
            <!-- User Selection -->
            <div class="sp-transfer-section">
                <label class="sp-transfer-label">转帐用户</label>
                <div class="sp-transfer-select-wrapper">
                    <div class="sp-transfer-select" id="userSelect" onclick="toggleUserDropdown()">
                        <div class="sp-transfer-user-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <span class="sp-transfer-select-text" id="selectedUserText">输入用户帐号</span>
                        <i class="fas fa-chevron-down sp-transfer-arrow-icon"></i>
                    </div>
                    <div class="sp-transfer-dropdown" id="userDropdown">
                        <?php foreach ($transferUsers as $user): ?>
                        <div class="sp-transfer-dropdown-item" data-id="<?php echo $user['id']; ?>" data-name="<?php echo htmlspecialchars($user['name']); ?>" onclick="selectUser(this)">
                            <div class="sp-transfer-user-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <span class="sp-transfer-dropdown-item-name"><?php echo htmlspecialchars($user['name']); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Amount Section -->
            <div class="sp-transfer-section">
                <label class="sp-transfer-label">转帐金额</label>
                <input type="number" class="sp-transfer-input" id="transferAmount" placeholder="10 - 100000" min="10" max="100000">
                <div class="sp-transfer-fee-row">
                    <span class="sp-transfer-fee-label">手续费</span>
                    <span class="sp-transfer-fee-value">0.00</span>
                </div>
            </div>
        </div>

        <!-- Balance Card -->
        <div class="sp-transfer-balance-card">
            <label class="sp-transfer-balance-label">帐户余额</label>
            <div class="sp-transfer-balance-value"><?php echo number_format($balance, 0); ?></div>
        </div>

        <!-- Submit Button -->
        <button type="button" class="sp-transfer-submit-btn" onclick="confirmTransfer()">确认转帐</button>
        <a href="#" class="sp-transfer-notice-link">转帐注意事项</a>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<!-- Transfer Confirmation Modal (42.png) -->
<div class="sp-confirm-overlay" id="transferConfirmModal">
    <div class="sp-transfer-modal-card">
        <div class="sp-transfer-modal-header">
            <span class="sp-transfer-modal-title">转帐</span>
            <button class="sp-transfer-modal-close" onclick="closeTransferModal()">&times;</button>
        </div>
        <div class="sp-transfer-modal-body">
            <div class="sp-transfer-modal-row">
                <span class="sp-transfer-modal-label">转帐用户</span>
                <span class="sp-transfer-modal-value" id="modalUserName">AAA111</span>
            </div>
            <div class="sp-transfer-modal-row">
                <span class="sp-transfer-modal-label">转帐金额</span>
                <span class="sp-transfer-modal-value" id="modalAmount">MYR 100</span>
            </div>
            <div class="sp-transfer-modal-fee">
                手续费：<span class="sp-transfer-modal-fee-value">MYR 1.00</span>
            </div>
        </div>
        <button class="sp-transfer-modal-btn" onclick="showPasswordModal()">确定</button>
    </div>
</div>

<!-- Password Input Modal (43.png) -->
<div class="sp-confirm-overlay" id="passwordModal">
    <div class="sp-transfer-modal-card">
        <div class="sp-transfer-modal-header">
            <span class="sp-transfer-modal-title">输入密码</span>
            <button class="sp-transfer-modal-close" onclick="closePasswordModal()">&times;</button>
        </div>
        <div class="sp-transfer-modal-body">
            <div class="sp-password-inputs">
                <input type="password" class="sp-password-box" maxlength="1" inputmode="numeric">
                <input type="password" class="sp-password-box" maxlength="1" inputmode="numeric">
                <input type="password" class="sp-password-box" maxlength="1" inputmode="numeric">
                <input type="password" class="sp-password-box" maxlength="1" inputmode="numeric">
                <input type="password" class="sp-password-box" maxlength="1" inputmode="numeric">
                <input type="password" class="sp-password-box" maxlength="1" inputmode="numeric">
            </div>
            <a href="forgot-password.php" class="sp-forgot-password-link">忘记密码?</a>
        </div>
        <button class="sp-transfer-modal-btn" onclick="submitTransfer()">确定</button>
    </div>
</div>

<!-- Transfer Success Toast (44.png) -->
<div class="sp-toast-overlay" id="transferSuccessToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-message">转帐成功</p>
    </div>
</div>

<?php include 'lib/footer.php'; ?>

<script>
let selectedUserId = null;
let selectedUserName = '';
let transferAmount = 0;

function toggleUserDropdown() {
    const select = document.getElementById('userSelect');
    const dropdown = document.getElementById('userDropdown');
    select.classList.toggle('active');
    dropdown.classList.toggle('active');
}

function selectUser(item) {
    selectedUserId = item.dataset.id;
    selectedUserName = item.dataset.name;
    document.getElementById('selectedUserText').textContent = selectedUserName;
    document.getElementById('selectedUserText').style.color = '#333';

    // Close dropdown
    document.getElementById('userSelect').classList.remove('active');
    document.getElementById('userDropdown').classList.remove('active');
}

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.sp-transfer-select-wrapper')) {
        document.getElementById('userSelect').classList.remove('active');
        document.getElementById('userDropdown').classList.remove('active');
    }
});

// Step 1: Show confirmation modal (42.png)
function confirmTransfer() {
    if (!selectedUserId) {
        alert('请选择转帐用户');
        return;
    }

    transferAmount = document.getElementById('transferAmount').value;
    if (!transferAmount || transferAmount < 10 || transferAmount > 100000) {
        alert('请输入有效金额 (10 - 100000)');
        return;
    }

    // Update modal content
    document.getElementById('modalUserName').textContent = selectedUserName;
    document.getElementById('modalAmount').textContent = 'MYR ' + transferAmount;

    // Show confirmation modal
    document.getElementById('transferConfirmModal').classList.add('active');
}

function closeTransferModal() {
    document.getElementById('transferConfirmModal').classList.remove('active');
}

// Step 2: Show password modal (43.png)
function showPasswordModal() {
    closeTransferModal();
    document.getElementById('passwordModal').classList.add('active');

    // Clear and focus first password box
    const passwordBoxes = document.querySelectorAll('#passwordModal .sp-password-box');
    passwordBoxes.forEach(box => box.value = '');
    setTimeout(() => passwordBoxes[0].focus(), 100);
}

function closePasswordModal() {
    document.getElementById('passwordModal').classList.remove('active');
}

// Password box auto-focus
document.querySelectorAll('#passwordModal .sp-password-box').forEach((box, index, boxes) => {
    box.addEventListener('input', function() {
        if (this.value.length === 1 && index < boxes.length - 1) {
            boxes[index + 1].focus();
        }
    });

    box.addEventListener('keydown', function(e) {
        if (e.key === 'Backspace' && this.value === '' && index > 0) {
            boxes[index - 1].focus();
            boxes[index - 1].value = '';
        }
    });
});

// Step 3: Submit and show success (44.png)
function submitTransfer() {
    const passwordBoxes = document.querySelectorAll('#passwordModal .sp-password-box');
    let password = '';
    passwordBoxes.forEach(box => password += box.value);

    if (password.length !== 6) {
        alert('请输入6位密码');
        return;
    }

    // Close password modal and show success toast
    closePasswordModal();
    document.getElementById('transferSuccessToast').classList.add('active');

    // Hide success toast after 2 seconds
    setTimeout(() => {
        document.getElementById('transferSuccessToast').classList.remove('active');
    }, 2000);
}

// Close modals on overlay click
document.getElementById('transferConfirmModal').addEventListener('click', function(e) {
    if (e.target === this) closeTransferModal();
});

document.getElementById('passwordModal').addEventListener('click', function(e) {
    if (e.target === this) closePasswordModal();
});
</script>

<?php include 'lib/htmlBody.php'; ?>
