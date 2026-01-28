<?php
/**
 * withdraw.php - SUPERONG Mobile App
 * 提款 (Withdrawal Page)
 * 100% Match with resource/1/45.png
 */

$pageName = 'withdraw';
$pageTitle = '提款';
$headerTitle = '提款';
$bodyClass = 'sp-bg-fixed';
$headerRightIcon = 'fa-clock';
$headerRightLink = 'withdraw-record.php';

include 'lib/htmlHead.php';
include 'lib/header.php';

// Dummy data
$currencies = [
    ['code' => 'MYR', 'name' => 'MYR', 'flag' => 'resource/flag/flag-my.png'],
    ['code' => 'SGD', 'name' => 'SGD', 'flag' => 'resource/flag/flag-sg.png'],
];

$banks = [
    ['id' => 1, 'name' => 'MAYBANK', 'icon' => 'resource/bank/maybank.png'],
    ['id' => 2, 'name' => 'Hong Leong Bank', 'icon' => 'resource/bank/hlb.png'],
];

$bankAccount = 'ALI（系统绑定实名认证）';
$balance = 10000;
?>

<!-- ========== WITHDRAWAL PAGE CONTENT ========== -->
<main class="sp-page">
    <div class="sp-withdraw-container">

        <!-- Currency Selection Card -->
        <div class="sp-withdraw-card">
            <label class="sp-withdraw-label">提款货币</label>
            <div class="sp-withdraw-select-wrapper">
                <div class="sp-withdraw-select" id="currencySelect" onclick="toggleCurrencyDropdown()">
                    <div class="sp-withdraw-select-icon">
                        <img src="<?php echo $currencies[0]['flag']; ?>" alt="" class="sp-withdraw-flag">
                    </div>
                    <span class="sp-withdraw-select-text" id="selectedCurrency"><?php echo $currencies[0]['name']; ?></span>
                    <i class="fas fa-chevron-down sp-withdraw-arrow"></i>
                </div>
                <div class="sp-withdraw-dropdown" id="currencyDropdown">
                    <?php foreach ($currencies as $currency): ?>
                    <div class="sp-withdraw-dropdown-item" data-code="<?php echo $currency['code']; ?>" data-flag="<?php echo $currency['flag']; ?>" onclick="selectCurrency(this)">
                        <div class="sp-withdraw-select-icon">
                            <img src="<?php echo $currency['flag']; ?>" alt="" class="sp-withdraw-flag">
                        </div>
                        <span><?php echo htmlspecialchars($currency['name']); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Bank Selection Card -->
        <div class="sp-withdraw-card">
            <label class="sp-withdraw-label">选择银行</label>
            <div class="sp-withdraw-select-wrapper">
                <div class="sp-withdraw-select" id="bankSelect" onclick="toggleBankDropdown()">
                    <div class="sp-withdraw-select-icon">
                        <img src="<?php echo $banks[0]['icon']; ?>" alt="" class="sp-withdraw-bank-icon">
                    </div>
                    <span class="sp-withdraw-select-text" id="selectedBank"><?php echo $banks[0]['name']; ?></span>
                    <i class="fas fa-chevron-down sp-withdraw-arrow"></i>
                </div>
                <div class="sp-withdraw-dropdown" id="bankDropdown">
                    <?php foreach ($banks as $bank): ?>
                    <div class="sp-withdraw-dropdown-item" data-id="<?php echo $bank['id']; ?>" data-name="<?php echo htmlspecialchars($bank['name']); ?>" data-icon="<?php echo $bank['icon']; ?>" onclick="selectBank(this)">
                        <div class="sp-withdraw-select-icon">
                            <img src="<?php echo $bank['icon']; ?>" alt="" class="sp-withdraw-bank-icon">
                        </div>
                        <span><?php echo htmlspecialchars($bank['name']); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <label class="sp-withdraw-label" style="margin-top: 16px;">银行帐号</label>
            <div class="sp-withdraw-account-value"><?php echo htmlspecialchars($bankAccount); ?></div>
        </div>

        <!-- Amount Input Card -->
        <div class="sp-withdraw-card">
            <label class="sp-withdraw-label">提款金额</label>
            <input type="number" class="sp-withdraw-input" id="withdrawAmount" placeholder="10 - 100000" min="10" max="100000">
        </div>

        <!-- Submit Button -->
        <button type="button" class="sp-withdraw-submit-btn" onclick="submitWithdraw()">确认提款</button>
        <a href="#" class="sp-withdraw-notice-link">提款注意事项</a>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<!-- Success Toast -->
<div class="sp-toast-overlay" id="withdrawSuccessToast">
    <div class="sp-toast-card">
        <div class="sp-toast-icon">
            <i class="fas fa-check"></i>
        </div>
        <p class="sp-toast-message">提款申请已提交</p>
    </div>
</div>

<?php include 'lib/footer.php'; ?>

<script>
function toggleCurrencyDropdown() {
    const select = document.getElementById('currencySelect');
    const dropdown = document.getElementById('currencyDropdown');
    // Close bank dropdown first
    document.getElementById('bankSelect').classList.remove('active');
    document.getElementById('bankDropdown').classList.remove('active');

    select.classList.toggle('active');
    dropdown.classList.toggle('active');
}

function toggleBankDropdown() {
    const select = document.getElementById('bankSelect');
    const dropdown = document.getElementById('bankDropdown');
    // Close currency dropdown first
    document.getElementById('currencySelect').classList.remove('active');
    document.getElementById('currencyDropdown').classList.remove('active');

    select.classList.toggle('active');
    dropdown.classList.toggle('active');
}

function selectCurrency(item) {
    const code = item.dataset.code;
    const flag = item.dataset.flag;
    document.getElementById('selectedCurrency').textContent = code;
    document.querySelector('#currencySelect .sp-withdraw-flag').src = flag;

    document.getElementById('currencySelect').classList.remove('active');
    document.getElementById('currencyDropdown').classList.remove('active');
}

function selectBank(item) {
    const name = item.dataset.name;
    const icon = item.dataset.icon;
    document.getElementById('selectedBank').textContent = name;
    document.querySelector('#bankSelect .sp-withdraw-bank-icon').src = icon;

    document.getElementById('bankSelect').classList.remove('active');
    document.getElementById('bankDropdown').classList.remove('active');
}

// Close dropdowns when clicking outside
document.addEventListener('click', function(e) {
    if (!e.target.closest('.sp-withdraw-select-wrapper')) {
        document.getElementById('currencySelect').classList.remove('active');
        document.getElementById('currencyDropdown').classList.remove('active');
        document.getElementById('bankSelect').classList.remove('active');
        document.getElementById('bankDropdown').classList.remove('active');
    }
});

function submitWithdraw() {
    const amount = document.getElementById('withdrawAmount').value;
    if (!amount || amount < 10 || amount > 100000) {
        alert('请输入有效金额 (10 - 100000)');
        return;
    }

    // Show success toast
    document.getElementById('withdrawSuccessToast').classList.add('active');
    setTimeout(() => {
        document.getElementById('withdrawSuccessToast').classList.remove('active');
    }, 2000);
}
</script>

<?php include 'lib/htmlBody.php'; ?>
