<?php
/**
 * terms.php - SUPERONG Mobile App
 * 用户协议 (Terms of Service Page)
 * 99% Similarity Required
 */

// Page settings
$pageName = 'terms';
$pageTitle = '用户协议';
$headerTitle = '用户协议';

// Include header
include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- ========== TERMS PAGE CONTENT ========== -->
<main class="sp-page-content sp-terms-page">

    <div class="sp-terms-content">
        <h2>SUPERONG 用户协议</h2>
        <p class="sp-terms-date">最后更新日期：<?php echo date('Y-m-d'); ?></p>

        <div class="sp-terms-section">
            <h3>1. 服务条款</h3>
            <p>欢迎使用 SUPERONG 平台。在使用我们的服务之前，请仔细阅读以下条款和条件。使用本平台即表示您同意遵守这些条款。</p>
        </div>

        <div class="sp-terms-section">
            <h3>2. 用户资格</h3>
            <p>您必须年满18岁或达到您所在司法管辖区的法定成年年龄才能使用本平台。使用本服务即表示您确认已达到法定年龄。</p>
        </div>

        <div class="sp-terms-section">
            <h3>3. 账户安全</h3>
            <p>您有责任保护您的账户信息安全。请勿与他人分享您的密码或账户详情。如发现任何未经授权使用您账户的情况，请立即通知我们。</p>
        </div>

        <div class="sp-terms-section">
            <h3>4. 存款与提款</h3>
            <p>所有存款和提款必须通过平台提供的官方渠道进行。我们保留对可疑交易进行调查的权利。</p>
        </div>

        <div class="sp-terms-section">
            <h3>5. 游戏规则</h3>
            <p>所有游戏均受特定规则约束。在参与任何游戏之前，请确保您了解并同意相关规则。</p>
        </div>

        <div class="sp-terms-section">
            <h3>6. 隐私政策</h3>
            <p>我们重视您的隐私。有关我们如何收集、使用和保护您个人信息的详细信息，请参阅我们的隐私政策。</p>
        </div>

        <div class="sp-terms-section">
            <h3>7. 免责声明</h3>
            <p>本平台不对因使用我们的服务而导致的任何直接或间接损失承担责任。请负责任地进行游戏。</p>
        </div>

        <div class="sp-terms-section">
            <h3>8. 条款修改</h3>
            <p>我们保留随时修改这些条款的权利。修改后继续使用本平台即表示您接受新条款。</p>
        </div>

        <div class="sp-terms-section">
            <h3>9. 联系我们</h3>
            <p>如果您对这些条款有任何疑问，请通过客服渠道与我们联系。</p>
        </div>
    </div>

</main>

<?php
// Include footer
include 'lib/footer.php';
include 'lib/htmlBody.php';
?>
