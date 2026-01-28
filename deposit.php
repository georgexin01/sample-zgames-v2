<?php
/**
 * deposit.php - SUPERONG Mobile App
 * 充值 (Deposit Page)
 * 100% Match with resource/1/50.png (银行充值) and 51.png (快速充值)
 */

$pageName = 'deposit';
$pageTitle = '充值';
$headerTitle = '充值';
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'fa-clock';
$headerRightLink = 'deposit-record.php';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy data for bank deposit
$bankDeposit = [
    'bank' => 'MAYBANK',
    'bankIcon' => 'resource/bank/maybank.png',
    'accountNumber' => '47736610099',
];

// Dummy data for quick deposit
$currencies = [
    ['code' => 'MYR', 'name' => 'MYR', 'flag' => 'resource/flag/flag-my.png'],
    ['code' => 'SGD', 'name' => 'SGD', 'flag' => 'resource/flag/flag-sg.png'],
];

$banks = [
    ['id' => 1, 'name' => 'MAYBANK', 'icon' => 'resource/bank/maybank.png'],
    ['id' => 2, 'name' => 'Hong Leong Bank', 'icon' => 'resource/bank/hlb.png'],
];
?>

<!-- ========== DEPOSIT PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-deposit-container">

        <!-- Tab Switch -->
        <div class="sp-tab-switch">
            <button type="button" class="sp-tab-btn active" id="tabBank" onclick="switchDepositTab('bank')">银行充值</button>
            <button type="button" class="sp-tab-btn" id="tabQuick" onclick="switchDepositTab('quick')">快速充值</button>
        </div>

        <!-- Tab Content: 银行充值 (50.png) -->
        <div class="sp-deposit-tab-content" id="contentBank">
            <!-- Bank Selection Card -->
            <div class="sp-deposit-card">
                <label class="sp-deposit-label">银行存款</label>
                <div class="sp-deposit-select-wrapper">
                    <div class="sp-deposit-select" id="bankDepositSelect" onclick="toggleBankDepositDropdown()">
                        <div class="sp-deposit-select-icon">
                            <img src="<?php echo $bankDeposit['bankIcon']; ?>" alt="" class="sp-deposit-bank-icon">
                        </div>
                        <span class="sp-deposit-select-text" id="selectedBankDeposit"><?php echo $bankDeposit['bank']; ?></span>
                        <i class="fas fa-chevron-down sp-deposit-arrow"></i>
                    </div>
                    <div class="sp-deposit-dropdown" id="bankDepositDropdown">
                        <?php foreach ($banks as $bank): ?>
                        <div class="sp-deposit-dropdown-item" data-name="<?php echo htmlspecialchars($bank['name']); ?>" data-icon="<?php echo $bank['icon']; ?>" onclick="selectBankDeposit(this)">
                            <div class="sp-deposit-select-icon">
                                <img src="<?php echo $bank['icon']; ?>" alt="" class="sp-deposit-bank-icon">
                            </div>
                            <span><?php echo htmlspecialchars($bank['name']); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <label class="sp-deposit-label" style="margin-top: 16px;">银行账号</label>
                <div class="sp-deposit-account-value" id="bankAccountDisplay"><?php echo htmlspecialchars($bankDeposit['accountNumber']); ?></div>
            </div>

            <!-- Amount Input Card -->
            <div class="sp-deposit-card">
                <label class="sp-deposit-label">充值金额</label>
                <input type="number" class="sp-deposit-input" id="bankDepositAmount" placeholder="10 - 100000" min="10" max="100000">
            </div>

            <!-- Submit Button -->
            <button type="button" class="sp-deposit-submit-btn" onclick="submitBankDeposit()">确认</button>
            <a href="#" class="sp-deposit-notice-link">充值注意事项</a>
        </div>

        <!-- Tab Content: 快速充值 (51.png) -->
        <div class="sp-deposit-tab-content" id="contentQuick" style="display: none;">
            <!-- Currency Selection Card -->
            <div class="sp-deposit-card">
                <label class="sp-deposit-label">充值货币</label>
                <div class="sp-deposit-select-wrapper">
                    <div class="sp-deposit-select" id="quickCurrencySelect" onclick="toggleQuickCurrencyDropdown()">
                        <div class="sp-deposit-select-icon">
                            <img src="<?php echo $currencies[0]['flag']; ?>" alt="" class="sp-deposit-flag">
                        </div>
                        <span class="sp-deposit-select-text" id="selectedQuickCurrency"><?php echo $currencies[0]['name']; ?></span>
                        <i class="fas fa-chevron-down sp-deposit-arrow"></i>
                    </div>
                    <div class="sp-deposit-dropdown" id="quickCurrencyDropdown">
                        <?php foreach ($currencies as $currency): ?>
                        <div class="sp-deposit-dropdown-item" data-code="<?php echo $currency['code']; ?>" data-flag="<?php echo $currency['flag']; ?>" onclick="selectQuickCurrency(this)">
                            <div class="sp-deposit-select-icon">
                                <img src="<?php echo $currency['flag']; ?>" alt="" class="sp-deposit-flag">
                            </div>
                            <span><?php echo htmlspecialchars($currency['name']); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Bank Selection Card -->
            <div class="sp-deposit-card">
                <label class="sp-deposit-label">选择银行</label>
                <div class="sp-deposit-select-wrapper">
                    <div class="sp-deposit-select" id="quickBankSelect" onclick="toggleQuickBankDropdown()">
                        <div class="sp-deposit-select-icon">
                            <img src="<?php echo $banks[0]['icon']; ?>" alt="" class="sp-deposit-bank-icon">
                        </div>
                        <span class="sp-deposit-select-text" id="selectedQuickBank"><?php echo $banks[0]['name']; ?></span>
                        <i class="fas fa-chevron-down sp-deposit-arrow"></i>
                    </div>
                    <div class="sp-deposit-dropdown" id="quickBankDropdown">
                        <?php foreach ($banks as $bank): ?>
                        <div class="sp-deposit-dropdown-item" data-name="<?php echo htmlspecialchars($bank['name']); ?>" data-icon="<?php echo $bank['icon']; ?>" onclick="selectQuickBank(this)">
                            <div class="sp-deposit-select-icon">
                                <img src="<?php echo $bank['icon']; ?>" alt="" class="sp-deposit-bank-icon">
                            </div>
                            <span><?php echo htmlspecialchars($bank['name']); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Amount Input Card -->
            <div class="sp-deposit-card">
                <label class="sp-deposit-label">充值金额</label>
                <input type="number" class="sp-deposit-input" id="quickDepositAmount" placeholder="10 - 100000" min="10" max="100000">
            </div>

            <!-- Submit Button -->
            <button type="button" class="sp-deposit-submit-btn" onclick="submitQuickDeposit()">确认</button>
            <a href="#" class="sp-deposit-notice-link">充值注意事项</a>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<!-- Success Toast -->
<div class="sp-toast-overlay" id="depositSuccessToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-message">充值申请已提交</p>
    </div>
</div>

<?php include 'lib/footer.php'; ?>

<script>
// Tab switching
function switchDepositTab(tab) {
    document.getElementById('tabBank').classList.remove('active');
    document.getElementById('tabQuick').classList.remove('active');
    document.getElementById('contentBank').style.display = 'none';
    document.getElementById('contentQuick').style.display = 'none';

    if (tab === 'bank') {
        document.getElementById('tabBank').classList.add('active');
        document.getElementById('contentBank').style.display = 'block';
    } else {
        document.getElementById('tabQuick').classList.add('active');
        document.getElementById('contentQuick').style.display = 'block';
    }

    // Close all dropdowns when switching tabs
    closeAllDropdowns();
}

function closeAllDropdowns() {
    document.querySelectorAll('.sp-deposit-select').forEach(el => el.classList.remove('active'));
    document.querySelectorAll('.sp-deposit-dropdown').forEach(el => el.classList.remove('active'));
}

// Bank Deposit Tab (50.png)
function toggleBankDepositDropdown() {
    closeAllDropdowns();
    document.getElementById('bankDepositSelect').classList.toggle('active');
    document.getElementById('bankDepositDropdown').classList.toggle('active');
}

function selectBankDeposit(item) {
    const name = item.dataset.name;
    const icon = item.dataset.icon;
    document.getElementById('selectedBankDeposit').textContent = name;
    document.querySelector('#bankDepositSelect .sp-deposit-bank-icon').src = icon;
    closeAllDropdowns();
}

// Quick Deposit Tab (51.png)
function toggleQuickCurrencyDropdown() {
    const isActive = document.getElementById('quickCurrencySelect').classList.contains('active');
    closeAllDropdowns();
    if (!isActive) {
        document.getElementById('quickCurrencySelect').classList.add('active');
        document.getElementById('quickCurrencyDropdown').classList.add('active');
    }
}

function toggleQuickBankDropdown() {
    const isActive = document.getElementById('quickBankSelect').classList.contains('active');
    closeAllDropdowns();
    if (!isActive) {
        document.getElementById('quickBankSelect').classList.add('active');
        document.getElementById('quickBankDropdown').classList.add('active');
    }
}

function selectQuickCurrency(item) {
    const code = item.dataset.code;
    const flag = item.dataset.flag;
    document.getElementById('selectedQuickCurrency').textContent = code;
    document.querySelector('#quickCurrencySelect .sp-deposit-flag').src = flag;
    closeAllDropdowns();
}

function selectQuickBank(item) {
    const name = item.dataset.name;
    const icon = item.dataset.icon;
    document.getElementById('selectedQuickBank').textContent = name;
    document.querySelector('#quickBankSelect .sp-deposit-bank-icon').src = icon;
    closeAllDropdowns();
}

// Close dropdowns when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.sp-deposit-select-wrapper')) {
        closeAllDropdowns();
    }
});

// Submit functions
function submitBankDeposit() {
    const amount = document.getElementById('bankDepositAmount').value;
    if (!amount || amount < 10 || amount > 100000) {
        alert('请输入有效金额 (10 - 100000)');
        return;
    }
    showDepositSuccess();
}

function submitQuickDeposit() {
    const amount = document.getElementById('quickDepositAmount').value;
    if (!amount || amount < 10 || amount > 100000) {
        alert('请输入有效金额 (10 - 100000)');
        return;
    }
    showDepositSuccess();
}

function showDepositSuccess() {
    document.getElementById('depositSuccessToast').classList.add('active');
    setTimeout(() => {
        document.getElementById('depositSuccessToast').classList.remove('active');
    }, 2000);
}
</script>

<?php include 'lib/htmlBody.php'; ?>
