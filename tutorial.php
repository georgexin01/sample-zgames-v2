<?php
/**
 * tutorial.php - SUPERONG Mobile App
 * 教程 (Tutorial/FAQ Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'tutorial';
$pageTitle = '教程';
$headerTitle = '教程';
$bodyClass = 'sp-bg-fixed';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';

// Tutorial videos (dummy)
$tutorials = array(
    array('id' => 1, 'title' => '如何注册账户', 'thumbnail' => 'resource/tutorial/register.jpg'),
    array('id' => 2, 'title' => '如何充值', 'thumbnail' => 'resource/tutorial/deposit.jpg'),
    array('id' => 3, 'title' => '如何提款', 'thumbnail' => 'resource/tutorial/withdraw.jpg'),
    array('id' => 4, 'title' => '如何转账', 'thumbnail' => 'resource/tutorial/transfer.jpg'),
    array('id' => 5, 'title' => '如何进入游戏', 'thumbnail' => 'resource/tutorial/game.jpg'),
);

// FAQ items
$faqs = array(
    array(
        'question' => '如何注册?',
        'answer' => 'superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong',
    ),
    array(
        'question' => '如何充值?',
        'answer' => '您可以通过银行转账或在线支付方式进行充值。请在充值页面选择您偏好的支付方式。',
    ),
    array(
        'question' => '如何提款?',
        'answer' => '请前往提款页面，输入提款金额并选择您的银行账户。提款通常在24小时内处理完成。',
    ),
    array(
        'question' => '忘记密码怎么办?',
        'answer' => '请点击登录页面的"忘记密码"链接，按照提示重置您的密码。',
    ),
);

$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'tutorial';
?>

<!-- ========== TUTORIAL PAGE CONTENT ========== -->
<main class="sp-page-content">

    <!-- Tabs -->
    <div class="sp-tabs-container">
        <div class="sp-tabs">
            <a href="tutorial.php?tab=tutorial" class="sp-tab <?php echo $activeTab === 'tutorial' ? 'active' : ''; ?>">教程</a>
            <a href="tutorial.php?tab=faq" class="sp-tab <?php echo $activeTab === 'faq' ? 'active' : ''; ?>">常见问题</a>
        </div>
    </div>

    <?php if ($activeTab === 'tutorial'): ?>
    <!-- Tutorial Videos -->
    <div class="sp-tutorial-list">
        <?php foreach ($tutorials as $tutorial): ?>
        <div class="sp-tutorial-item">
            <div class="sp-tutorial-thumbnail">
                <div class="sp-tutorial-placeholder">
                    <i class="fas fa-play-circle"></i>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <?php else: ?>
    <!-- FAQ List -->
    <div class="sp-faq-list">
        <?php foreach ($faqs as $index => $faq): ?>
        <div class="sp-faq-item" data-index="<?php echo $index; ?>">
            <div class="sp-faq-question" onclick="toggleFaq(<?php echo $index; ?>)">
                <span><?php echo e($faq['question']); ?></span>
                <i class="fas fa-chevron-down sp-faq-icon"></i>
            </div>
            <div class="sp-faq-answer" id="faq-answer-<?php echo $index; ?>">
                <p><?php echo e($faq['answer']); ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>

</main>

<script>
function toggleFaq(index) {
    var answer = document.getElementById('faq-answer-' + index);
    var item = answer.closest('.sp-faq-item');
    var icon = item.querySelector('.sp-faq-icon');

    if (answer.classList.contains('active')) {
        answer.classList.remove('active');
        icon.style.transform = 'rotate(0deg)';
    } else {
        // Close all others
        document.querySelectorAll('.sp-faq-answer').forEach(function(el) {
            el.classList.remove('active');
        });
        document.querySelectorAll('.sp-faq-icon').forEach(function(el) {
            el.style.transform = 'rotate(0deg)';
        });
        // Open this one
        answer.classList.add('active');
        icon.style.transform = 'rotate(180deg)';
    }
}
</script>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
