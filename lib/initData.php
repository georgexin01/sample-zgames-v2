<?php
/**
 * initData.php - Initialize data, database connection, and configuration
 * ZGames Mobile WebApp
 */

// Start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// ============================================================================
// DATABASE CONNECTION (MySQL) - Uncomment when ready to use
// ============================================================================
/*
$db_host = 'localhost';
$db_name = 'zgames';
$db_user = 'root';
$db_pass = '';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
*/

// ============================================================================
// SITE CONFIGURATION
// ============================================================================
$siteConfig = array(
    'siteName'      => 'ZGames',
    'siteTagline'   => 'Mobile Gaming Hub',
    'siteUrl'       => 'http://localhost/zgames',
    'adminEmail'    => 'admin@zgames.com',
    'contactPhone'  => '+60123456789',
    'contactWhatsapp' => '60123456789',
    'address'       => 'Kuala Lumpur, Malaysia',
    'copyright'     => '© ' . date('Y') . ' ZGames. All rights reserved.',
);

// ============================================================================
// PAGE CONFIGURATIONS (SEO Meta)
// ============================================================================
$pageConfigs = array(
    'home' => array(
        'title'       => 'ZGames - Mobile Gaming Hub',
        'description' => 'Discover the best mobile games, reviews, and gaming news.',
        'keywords'    => 'mobile games, gaming, android games, ios games',
    ),
    'games' => array(
        'title'       => 'Games - ZGames',
        'description' => 'Browse our collection of mobile games.',
        'keywords'    => 'mobile games, game list, android, ios',
    ),
    'about' => array(
        'title'       => 'About Us - ZGames',
        'description' => 'Learn more about ZGames and our mission.',
        'keywords'    => 'about zgames, gaming community',
    ),
    'contact' => array(
        'title'       => 'Contact Us - ZGames',
        'description' => 'Get in touch with ZGames team.',
        'keywords'    => 'contact, support, zgames',
    ),
);

// ============================================================================
// DETECT CURRENT PAGE & SET META
// ============================================================================
$currentUri = $_SERVER['REQUEST_URI'];
$currentPage = 'home'; // default

if (strpos($currentUri, '/games') !== false) {
    $currentPage = 'games';
} elseif (strpos($currentUri, '/about') !== false) {
    $currentPage = 'about';
} elseif (strpos($currentUri, '/contact') !== false) {
    $currentPage = 'contact';
}

$metaTitle = $pageConfigs[$currentPage]['title'] ?? $siteConfig['siteName'];
$metaDescription = $pageConfigs[$currentPage]['description'] ?? '';
$metaKeywords = $pageConfigs[$currentPage]['keywords'] ?? '';
$canonicalUrl = $siteConfig['siteUrl'] . $currentUri;

// ============================================================================
// DUMMY DATA - Games (Replace with MySQL queries later)
// ============================================================================
/*
// MySQL Query Example:
$stmt = $pdo->query("SELECT * FROM games WHERE status = 'active' ORDER BY created_at DESC");
$games = $stmt->fetchAll();
*/

$games = array(
    1 => array(
        'id'          => 1,
        'title'       => 'Epic Adventure',
        'category'    => 'RPG',
        'rating'      => 4.5,
        'downloads'   => '10M+',
        'image'       => 'images/default/game1.jpg',
        'description' => 'An epic role-playing adventure game.',
    ),
    2 => array(
        'id'          => 2,
        'title'       => 'Speed Racer',
        'category'    => 'Racing',
        'rating'      => 4.2,
        'downloads'   => '5M+',
        'image'       => 'images/default/game2.jpg',
        'description' => 'High-speed racing action.',
    ),
    3 => array(
        'id'          => 3,
        'title'       => 'Puzzle Master',
        'category'    => 'Puzzle',
        'rating'      => 4.8,
        'downloads'   => '15M+',
        'image'       => 'images/default/game3.jpg',
        'description' => 'Challenge your mind with puzzles.',
    ),
);

// ============================================================================
// DUMMY DATA - Categories
// ============================================================================
/*
// MySQL Query Example:
$stmt = $pdo->query("SELECT * FROM categories ORDER BY name ASC");
$categories = $stmt->fetchAll();
*/

$categories = array(
    array('id' => 1, 'name' => 'Action', 'icon' => 'fa-gamepad'),
    array('id' => 2, 'name' => 'RPG', 'icon' => 'fa-dragon'),
    array('id' => 3, 'name' => 'Puzzle', 'icon' => 'fa-puzzle-piece'),
    array('id' => 4, 'name' => 'Racing', 'icon' => 'fa-car'),
    array('id' => 5, 'name' => 'Sports', 'icon' => 'fa-futbol'),
    array('id' => 6, 'name' => 'Strategy', 'icon' => 'fa-chess'),
);

// ============================================================================
// DUMMY DATA - Featured/Banner
// ============================================================================
$banners = array(
    array(
        'id'    => 1,
        'title' => 'New Game Release',
        'text'  => 'Check out our latest games!',
        'image' => 'images/default/banner1.jpg',
        'link'  => 'games.php',
    ),
);

// ============================================================================
// HELPER FUNCTIONS
// ============================================================================

/**
 * Format phone number for WhatsApp link
 */
function formatWhatsapp($phone, $message = '') {
    $phone = preg_replace('/[^0-9]/', '', $phone);
    $url = "https://wa.me/{$phone}";
    if ($message) {
        $url .= "?text=" . urlencode($message);
    }
    return $url;
}

/**
 * Escape output for HTML
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
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
 * Check if current page matches
 */
function isActivePage($pageName, $check) {
    return ($pageName === $check) ? 'active' : '';
}
