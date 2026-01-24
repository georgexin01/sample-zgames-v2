<?php

/**
 * settings.php - SUPERONG Settings Page
 * User preferences and application settings
 * 99% Design Similarity
 */

$pageName = 'settings';
$pageTitle = 'Settings - SUPERONG';
$headerTitle = '设置';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page">
    <div class="container-fluid" style="padding: 16px;">

        <!-- Account Settings Section -->
        <h3 class="sp-section-title">账户设置</h3>

        <!-- Language Setting -->
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 14px 0; border-bottom: 1px solid #f0f0f0;">
            <div>
                <div style="color: #2d2d5a; font-weight: 600; font-size: 14px;">语言</div>
                <div style="color: #9999aa; font-size: 12px; margin-top: 4px;">选择应用界面语言</div>
            </div>
            <select class="sp-form-input" style="width: 120px; padding: 8px; border: 1px solid #dfe6e9; border-radius: 8px;">
                <option>中文 (简体)</option>
                <option>English</option>
                <option>ไทย</option>
            </select>
        </div>

        <!-- Currency Setting -->
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 14px 0; border-bottom: 1px solid #f0f0f0;">
            <div>
                <div style="color: #2d2d5a; font-weight: 600; font-size: 14px;">货币</div>
                <div style="color: #9999aa; font-size: 12px; margin-top: 4px;">选择交易货币</div>
            </div>
            <select class="sp-form-input" style="width: 120px; padding: 8px; border: 1px solid #dfe6e9; border-radius: 8px;">
                <option>¥ CNY</option>
                <option>$ USD</option>
                <option>THB</option>
            </select>
        </div>

        <!-- Notification Settings Section -->
        <h3 class="sp-section-title" style="margin-top: 20px;">通知设置</h3>

        <!-- Push Notifications -->
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 14px 0; border-bottom: 1px solid #f0f0f0;">
            <div>
                <div style="color: #2d2d5a; font-weight: 600; font-size: 14px;">推送通知</div>
                <div style="color: #9999aa; font-size: 12px; margin-top: 4px;">接收重要消息推送</div>
            </div>
            <label style="display: flex; align-items: center; cursor: pointer;">
                <input type="checkbox" checked style="width: 20px; height: 20px; cursor: pointer; accent-color: #d4a84b;">
            </label>
        </div>

        <!-- Email Notifications -->
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 14px 0; border-bottom: 1px solid #f0f0f0;">
            <div>
                <div style="color: #2d2d5a; font-weight: 600; font-size: 14px;">邮件通知</div>
                <div style="color: #9999aa; font-size: 12px; margin-top: 4px;">接收邮件更新和提醒</div>
            </div>
            <label style="display: flex; align-items: center; cursor: pointer;">
                <input type="checkbox" checked style="width: 20px; height: 20px; cursor: pointer; accent-color: #d4a84b;">
            </label>
        </div>

        <!-- SMS Notifications -->
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 14px 0; border-bottom: 1px solid #f0f0f0;">
            <div>
                <div style="color: #2d2d5a; font-weight: 600; font-size: 14px;">短信提醒</div>
                <div style="color: #9999aa; font-size: 12px; margin-top: 4px;">接收重要交易短信</div>
            </div>
            <label style="display: flex; align-items: center; cursor: pointer;">
                <input type="checkbox" style="width: 20px; height: 20px; cursor: pointer; accent-color: #d4a84b;">
            </label>
        </div>

        <!-- Privacy Settings Section -->
        <h3 class="sp-section-title" style="margin-top: 20px;">隐私设置</h3>

        <!-- Account Visibility -->
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 14px 0; border-bottom: 1px solid #f0f0f0;">
            <div>
                <div style="color: #2d2d5a; font-weight: 600; font-size: 14px;">显示个人资料</div>
                <div style="color: #9999aa; font-size: 12px; margin-top: 4px;">允许其他用户看到您的排名</div>
            </div>
            <label style="display: flex; align-items: center; cursor: pointer;">
                <input type="checkbox" checked style="width: 20px; height: 20px; cursor: pointer; accent-color: #d4a84b;">
            </label>
        </div>

        <!-- Game History Visibility -->
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 14px 0; border-bottom: 1px solid #f0f0f0;">
            <div>
                <div style="color: #2d2d5a; font-weight: 600; font-size: 14px;">隐藏游戏历史</div>
                <div style="color: #9999aa; font-size: 12px; margin-top: 4px;">不显示您的游戏历史记录</div>
            </div>
            <label style="display: flex; align-items: center; cursor: pointer;">
                <input type="checkbox" style="width: 20px; height: 20px; cursor: pointer; accent-color: #d4a84b;">
            </label>
        </div>

        <!-- Security Settings Section -->
        <h3 class="sp-section-title" style="margin-top: 20px;">安全设置</h3>

        <!-- Two-Factor Authentication -->
        <div style="display: flex; align-items: center; justify-content: space-between; padding: 14px 0; border-bottom: 1px solid #f0f0f0;">
            <div>
                <div style="color: #2d2d5a; font-weight: 600; font-size: 14px;">双重认证</div>
                <div style="color: #9999aa; font-size: 12px; margin-top: 4px;">增强账户安全保护</div>
            </div>
            <label style="display: flex; align-items: center; cursor: pointer;">
                <input type="checkbox" style="width: 20px; height: 20px; cursor: pointer; accent-color: #d4a84b;">
            </label>
        </div>

        <!-- Clear Cache -->
        <a href="#" class="sp-list-item" style="border-bottom: 1px solid #f0f0f0;">
            <div style="flex: 1;">
                <div style="color: #2d2d5a; font-weight: 600; font-size: 14px;">清除缓存</div>
                <div style="color: #9999aa; font-size: 12px; margin-top: 4px;">删除应用缓存文件</div>
            </div>
            <div class="sp-list-arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>

        <!-- About & Help Section -->
        <h3 class="sp-section-title" style="margin-top: 20px;">关于</h3>

        <a href="about.php" class="sp-list-item" style="border-bottom: 1px solid #f0f0f0;">
            <div style="flex: 1;">
                <div style="color: #2d2d5a; font-weight: 600; font-size: 14px;">关于我们</div>
            </div>
            <div class="sp-list-arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>

        <a href="terms.php" class="sp-list-item" style="border-bottom: 1px solid #f0f0f0;">
            <div style="flex: 1;">
                <div style="color: #2d2d5a; font-weight: 600; font-size: 14px;">条款和条件</div>
            </div>
            <div class="sp-list-arrow">
                <i class="fas fa-chevron-right"></i>
            </div>
        </a>

        <div style="padding: 16px 0; text-align: center; color: #9999aa; font-size: 12px; margin-bottom: 80px;">
            <div>版本 1.0.0</div>
            <div style="margin-top: 8px;">© 2024 SUPERONG. 版权所有</div>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
</body>

</html>