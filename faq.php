<?php
/**
 * faq.php - SUPERONG Mobile App
 * 常见问题 (FAQ Page)
 * 100% Match with faq常见问题.png
 */

$pageName = 'faq';
$pageTitle = '常见问题';
$headerTitle = '常见问题';

include 'lib/htmlHead.php';
include 'lib/header.php';

// FAQ items
$faqs = [
    ['q' => '如何注册?', 'a' => 'superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong superong'],
    ['q' => '如何充值?', 'a' => '您可以通过银行转账或电子钱包进行充值。请前往充值页面选择合适的充值方式。'],
    ['q' => '如何提款?', 'a' => '请确保您已完成实名认证，然后前往提款页面填写提款信息即可。'],
    ['q' => '忘记密码怎么办?', 'a' => '请点击登录页面的"忘记密码"链接，通过手机或邮箱验证重置密码。'],
];
?>

<!-- ========== FAQ PAGE CONTENT ========== -->
<main class="sp-page sp-page-dark">
    <div class="sp-faq-container">

        <!-- Tab Switch -->
        <div class="sp-tab-switch">
            <button class="sp-tab-btn">教程</button>
            <button class="sp-tab-btn active">常见问题</button>
        </div>

        <!-- FAQ Accordion -->
        <div class="sp-faq-list">
            <?php foreach ($faqs as $index => $faq): ?>
            <div class="sp-faq-item <?php echo $index === 1 ? 'active' : ''; ?>">
                <div class="sp-faq-question" onclick="toggleFaq(this)">
                    <span><?php echo htmlspecialchars($faq['q']); ?></span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="sp-faq-answer" <?php echo $index === 1 ? 'style="display: block;"' : ''; ?>>
                    <?php echo htmlspecialchars($faq['a']); ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</main>

<!-- Floating Customer Service Button -->
<a href="customer-service.php" class="sp-float-cs-btn">
    <i class="fas fa-headset"></i>
</a>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>

<script>
function toggleFaq(element) {
    const item = element.parentElement;
    const isActive = item.classList.contains('active');

    // Close all
    document.querySelectorAll('.sp-faq-item').forEach(i => {
        i.classList.remove('active');
        i.querySelector('.sp-faq-answer').style.display = 'none';
    });

    // Open clicked one if it was closed
    if (!isActive) {
        item.classList.add('active');
        item.querySelector('.sp-faq-answer').style.display = 'block';
    }
}

document.querySelectorAll('.sp-tab-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.sp-tab-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>

<?php include 'lib/htmlBody.php'; ?>
