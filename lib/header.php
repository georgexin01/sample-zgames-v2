<?php

/**
 * header.php - SUPERONG Mobile App Header
 * Simplified header structure matching design exactly
 *
 * Home Page: Logo + Language + Balance Bar
 * Other Pages: Back Button + Title + Action
 */
?>

<header class="sp-header-container">
    <?php if ($pageName === 'alert'): ?>
        <!-- HOME HEADER -->
        <div class="sp-header-home">
            <div class="sp-header-top">
                <!-- Logo Center -->
                <div class="sp-logo-area">
                    <img src="resource/ui-elements/logo_main.png" alt="SUPERONG" class="sp-logo">
                </div>
                <!-- Language Selector Button -->
                <button type="button" class="sp-btn-lang" onclick="showLangModal()" title="选择语言"></button>
            </div>
        </div>
    <?php else: ?>
        <!-- STANDARD PAGE HEADER -->
        <div class="sp-header-page">
            <!-- Back Button -->
            <a href="javascript:history.back()" class="sp-btn-back" title="返回">
                <i class="fas fa-arrow-left"></i>
            </a>
            <!-- Title -->
            <h1 class="sp-header-title"><?php echo htmlspecialchars($headerTitle ?? 'Page'); ?></h1>
            <!-- Right Action -->
            <div class="sp-header-action">
                <?php if (isset($headerRightIcon)): ?>
                    <?php if (isset($headerRightDropdown) && $headerRightDropdown === true): ?>
                        <!-- Dropdown Trigger -->
                        <button type="button" class="sp-btn-action sp-btn-dropdown-trigger" onclick="toggleHeaderDropdown()">
                            <?php if (isset($headerRightIconType) && $headerRightIconType === 'image'): ?>
                                <img src="<?php echo htmlspecialchars($headerRightIcon); ?>" alt="" class="sp-header-icon-img">
                            <?php else: ?>
                                <i class="fas <?php echo htmlspecialchars($headerRightIcon); ?>"></i>
                            <?php endif; ?>
                        </button>
                        <!-- Header Settings Dropdown (22.png) -->
                        <div id="headerDropdown" class="sp-header-dropdown">
                            <div class="sp-header-dropdown-menu">
                                <?php if (isset($headerDropdownItems) && is_array($headerDropdownItems)): ?>
                                    <?php foreach ($headerDropdownItems as $item): ?>
                                        <a href="<?php echo htmlspecialchars($item['link']); ?>" class="sp-header-dropdown-item"><?php echo htmlspecialchars($item['label']); ?></a>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <!-- Default chat dropdown items -->
                                    <a href="qrcode.php" class="sp-header-dropdown-item">扫码</a>
                                    <a href="chat.php" class="sp-header-dropdown-item">好友申请</a>
                                    <a href="blacklist.php" class="sp-header-dropdown-item">黑名单</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <!-- Regular Link -->
                        <a href="<?php echo htmlspecialchars($headerRightLink ?? '#'); ?>" class="sp-btn-action">
                            <?php if (isset($headerRightIconType) && $headerRightIconType === 'image'): ?>
                                <img src="<?php echo htmlspecialchars($headerRightIcon); ?>" alt="" class="sp-header-icon-img">
                            <?php else: ?>
                                <i class="fas <?php echo htmlspecialchars($headerRightIcon); ?>"></i>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                <?php else: ?>
                    <div style="width: 36px;"></div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</header>

<?php if (isset($headerRightDropdown) && $headerRightDropdown === true): ?>
<script>
function toggleHeaderDropdown() {
    var dropdown = document.getElementById('headerDropdown');
    dropdown.classList.toggle('active');
}

// Close dropdown when clicking outside
document.addEventListener('click', function(e) {
    var dropdown = document.getElementById('headerDropdown');
    var trigger = document.querySelector('.sp-btn-dropdown-trigger');
    if (dropdown && trigger && !dropdown.contains(e.target) && !trigger.contains(e.target)) {
        dropdown.classList.remove('active');
    }
});
</script>
<?php endif; ?>
