<?php
/**
 * initData.php - SUPERONG Mobile App
 * Data initialization, configuration, helper functions
 * 99% Similarity Required
 */

// Start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// ============================================================================
// SITE CONFIGURATION
// ============================================================================
$siteConfig = array(
    'siteName'        => 'SUPERONG',
    'siteUrl'         => 'http://localhost/zgames',
    'defaultLang'     => 'zh',
    'currency'        => 'MYR',
    'version'         => '1.0.0',
    'address'         => '123 Main Street, Kuala Lumpur, Malaysia',
    'contactPhone'    => '+60123456789',
    'adminEmail'      => 'support@superong.com',
    'contactWhatsapp' => '+60123456789',
);

// ============================================================================
// USER DATA (Dummy - Replace with MySQL later)
// ============================================================================
$currentUser = array(
    'id'            => 1,
    'username'      => 'SUPERONG123',
    'nickname'      => 'SUPERONG',
    'phone'         => '+6012 435 6567',
    'birthday'      => '22-08-1996',
    'avatar'        => 'images/default/avatar.png',
    'point'         => 1000.00,
    'referralCode'  => '123456',
    'referralLink'  => 'http://SUPERONG123456.my',
    'isLoggedIn'    => true,
);

// ============================================================================
// LANGUAGE TRANSLATIONS
// ============================================================================
$translations = array(
    'zh' => array(
        'home' => '首页',
        'notification' => '通知',
        'invite' => '邀请好友',
        'chatroom' => '聊天室',
        'profile' => '我的',
        'activity' => '活动',
        'ranking' => '排行榜',
        'qrcode' => '二维码',
        'customer_service' => '客服',
        'deposit' => '充值',
        'withdraw' => '提款',
        'transfer' => '转帐',
        'transaction' => '交易记录',
        'settings' => '设定',
        'logout' => '退出登录',
        'point' => 'Point',
        'confirm' => '确定',
        'cancel' => '取消',
        'success' => '成功',
        'copy_success' => '复制成功',
        'save_success' => '保存成功',
        'latest_news' => '最新消息',
        'contacts' => '通讯录',
        'chat' => '聊天',
        'blacklist' => '黑名单',
        'friend_request' => '好友申请',
        'scan' => '扫码',
        'search_player' => '请输入玩家ID',
        'bank_deposit' => '银行充值',
        'quick_deposit' => '快速充值',
        'deposit_amount' => '提款金额',
        'transfer_user' => '转帐用户',
        'transfer_amount' => '转帐金额',
        'fee' => '手续费',
        'balance' => '帐户余额',
        'all_types' => '全部类型',
        'enter_game' => '进入游戏',
        'exit_game' => '退出游戏',
        'game_settle' => '游戏结算',
        'performance' => '业绩查询',
        'team_manage' => '团队管理',
        'agent_report' => '代理报表',
        'agent_intro' => '代理介绍',
        'share_friend' => '分享好友',
        'referral_link' => '推荐链接',
        'referral_code' => '推荐码',
        'direct_count' => '直属人数',
        'today_new' => '今日新增人数',
        'today_team_new' => '今日团队新增人数',
        'team_total' => '团队总人数',
        'commission' => '佣金奖励',
        'commission_record' => '佣金记录',
        'current_commission' => '本期佣金',
        'distributed' => '已派发',
    ),
    'en' => array(
        'home' => 'Home',
        'notification' => 'Notification',
        'invite' => 'Invite Friends',
        'chatroom' => 'Chat Room',
        'profile' => 'Profile',
        'activity' => 'Activity',
        'ranking' => 'Ranking',
        'qrcode' => 'QR Code',
        'customer_service' => 'Customer Service',
        'deposit' => 'Deposit',
        'withdraw' => 'Withdraw',
        'transfer' => 'Transfer',
        'transaction' => 'Transaction',
        'settings' => 'Settings',
        'logout' => 'Logout',
        'point' => 'Point',
        'confirm' => 'Confirm',
        'cancel' => 'Cancel',
        'success' => 'Success',
        'copy_success' => 'Copy Success',
        'save_success' => 'Save Success',
        'latest_news' => 'Latest News',
        'contacts' => 'Contacts',
        'chat' => 'Chat',
        'blacklist' => 'Blacklist',
        'friend_request' => 'Friend Request',
        'scan' => 'Scan',
        'search_player' => 'Enter Player ID',
        'bank_deposit' => 'Bank Deposit',
        'quick_deposit' => 'Quick Deposit',
        'deposit_amount' => 'Deposit Amount',
        'transfer_user' => 'Transfer User',
        'transfer_amount' => 'Transfer Amount',
        'fee' => 'Fee',
        'balance' => 'Balance',
        'all_types' => 'All Types',
        'enter_game' => 'Enter Game',
        'exit_game' => 'Exit Game',
        'game_settle' => 'Game Settlement',
        'performance' => 'Performance',
        'team_manage' => 'Team Management',
        'agent_report' => 'Agent Report',
        'agent_intro' => 'Agent Intro',
        'share_friend' => 'Share',
        'referral_link' => 'Referral Link',
        'referral_code' => 'Referral Code',
        'direct_count' => 'Direct Count',
        'today_new' => 'Today New',
        'today_team_new' => 'Today Team New',
        'team_total' => 'Team Total',
        'commission' => 'Commission',
        'commission_record' => 'Commission Record',
        'current_commission' => 'Current Commission',
        'distributed' => 'Distributed',
    ),
);

// Available languages
$availableLanguages = array(
    'zh' => '中文',
    'en' => 'English',
    'my' => '马来文',
    'th' => '泰语',
    'vn' => '越南',
    'id' => '印尼',
);

// ============================================================================
// GAMES DATA (Dummy)
// ============================================================================
$gameCategories = array(
    'hot' => array('name' => '热门', 'icon' => 'fa-fire'),
    'slot' => array('name' => 'SLOT', 'icon' => 'fa-dice'),
    'live' => array('name' => 'LIVE', 'icon' => 'fa-video'),
    'sport' => array('name' => 'SPORT', 'icon' => 'fa-futbol'),
    'lotto' => array('name' => 'LOTTO', 'icon' => 'fa-ticket'),
);

$games = array(
    1 => array('id' => 1, 'name' => 'Aristocrat', 'image' => 'resource/games/aristocrat.jpg', 'category' => 'slot'),
    2 => array('id' => 2, 'name' => 'Allbet', 'image' => 'resource/games/allbet.jpg', 'category' => 'live'),
    3 => array('id' => 3, 'name' => '918Kiss', 'image' => 'resource/games/918kiss.jpg', 'category' => 'slot'),
    4 => array('id' => 4, 'name' => 'Sweet Bonanza', 'image' => 'resource/games/sweet-bonanza.jpg', 'category' => 'slot'),
    5 => array('id' => 5, 'name' => 'Lucky Penny', 'image' => 'resource/games/lucky-penny.jpg', 'category' => 'slot'),
    6 => array('id' => 6, 'name' => 'Mahjong Ways', 'image' => 'resource/games/mahjong.jpg', 'category' => 'slot'),
);

// ============================================================================
// BANKS DATA
// ============================================================================
$banks = array(
    'maybank' => array('name' => 'MAYBANK', 'color' => '#ffc600', 'icon' => 'resource/banks/maybank.png'),
    'hong_leong' => array('name' => 'Hong Leong Bank', 'color' => '#ed1c24', 'icon' => 'resource/banks/hongleong.png'),
    'cimb' => array('name' => 'CIMB', 'color' => '#ec1c24', 'icon' => 'resource/banks/cimb.png'),
    'public' => array('name' => 'Public Bank', 'color' => '#c41230', 'icon' => 'resource/banks/publicbank.png'),
);

// ============================================================================
// MENU ITEMS
// ============================================================================
$profileMenuItems = array(
    array('label' => '充值', 'icon' => 'fa-plus-circle', 'link' => 'deposit.php'),
    array('label' => '提款', 'icon' => 'fa-minus-circle', 'link' => 'withdraw.php'),
    array('label' => '转帐', 'icon' => 'fa-exchange-alt', 'link' => 'transfer.php'),
    array('label' => '活动', 'icon' => 'fa-gift', 'link' => 'activity.php'),
    array('label' => '排行榜', 'icon' => 'fa-trophy', 'link' => 'ranking.php'),
    array('label' => '交易记录', 'icon' => 'fa-list', 'link' => 'transaction.php'),
    array('label' => '输赢报表', 'icon' => 'fa-chart-bar', 'link' => 'profit-report.php'),
    array('label' => '投注记录', 'icon' => 'fa-history', 'link' => 'bet-record.php'),
    array('label' => '安全设定', 'icon' => 'fa-cog', 'link' => 'settings.php'),
    array('label' => '退出登录', 'icon' => 'fa-sign-out-alt', 'link' => '#', 'action' => 'logout'),
);

$settingsMenuItems = array(
    array('label' => '修改手机号', 'link' => 'change-phone.php'),
    array('label' => '绑定Email', 'link' => 'bind-email.php'),
    array('label' => '修改密码', 'link' => 'change-password.php'),
    array('label' => '修改支付密码', 'link' => 'change-pay-password.php'),
    array('label' => '设置生日', 'link' => 'set-birthday.php'),
    array('label' => '关于', 'link' => 'about.php'),
);

// ============================================================================
// HELPER FUNCTIONS
// ============================================================================

/**
 * Get current language
 */
function getLang() {
    global $siteConfig;
    return $_GET['lang'] ?? $_SESSION['lang'] ?? $siteConfig['defaultLang'];
}

/**
 * Translate text
 */
function t($key) {
    global $translations;
    $lang = getLang();
    return $translations[$lang][$key] ?? $translations['zh'][$key] ?? $key;
}

/**
 * Escape HTML output
 */
function e($string) {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Format currency
 */
function formatMoney($amount, $currency = 'MYR') {
    return $currency . ' ' . number_format($amount, 2);
}

/**
 * Check if current page is active
 */
function isActivePage($pageName, $check) {
    return ($pageName === $check) ? 'active' : '';
}

/**
 * Get asset path with cache busting
 */
function asset($path) {
    $fullPath = __DIR__ . '/../' . $path;
    if (file_exists($fullPath)) {
        return $path . '?v=' . filemtime($fullPath);
    }
    return $path;
}

/**
 * Format date for display
 */
function formatDate($date, $format = 'Y-m-d H:i:s') {
    return date($format, strtotime($date));
}

/**
 * Mask phone number
 */
function maskPhone($phone) {
    return substr($phone, 0, 4) . '****' . substr($phone, -4);
}

/**
 * Mask username for display
 */
function maskUsername($username) {
    $len = strlen($username);
    if ($len <= 4) return $username;
    return substr($username, 0, 4) . '****' . substr($username, -3);
}

/**
 * Format WhatsApp link
 */
function formatWhatsapp($phone) {
    $cleanPhone = preg_replace('/[^0-9]/', '', $phone);
    return 'https://wa.me/' . $cleanPhone;
}
