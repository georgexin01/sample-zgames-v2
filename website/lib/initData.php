<?php
//connect database
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../api/Website/Models/BaseModel.php';
require_once __DIR__ . '/../api/Website/Lib/Optimize.php';
//end

// import
use Website\I18n;
$db = Website\conn();

//init data
$url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// Assuming $contactData is your array from DB as shown
// $ctaddress = isset($contactData[0]['address']) ? $contactData[0]['address'] : '';
// $ctcontact = isset($contactData[0]['contact']) ? formatMalaysiaPhone($contactData[0]['contact']) : '';
// $ctemail = isset($contactData[0]['email']) ? $contactData[0]['email'] : '';
// $ctsocial = isset($contactData[0]['socialMedias']) ? $contactData[0]['socialMedias'] : [];
$ctcontact = formatMalaysiaPhone(60177052227);
$ctemail = 'sandrapang@tsmm.com.my';
$ctaddress = 'No 36, Jalan Selatan 3/3, Taman Impian Emas, 81300 Johor Bahru, Johor.';

// Page configuration array
$pageConfigs = [
    'index' => [
        'title' => 'Home – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru',
        'description' => 'Welcome to T&S machiner movers. Explore who we are and what we offer, including professional machine moving, heavy equipment relocation, rigging services, packing, transportation, import and export handling, and complete logistics solutions.',
        'og_title' => 'Home',
        'og_site_name' => 'Home – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru'
    ],
    'about' => [
        'title' => 'About Us – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru',
        'description' => 'Learn about T&S Machine Movers (M) Sdn Bhd, a leading machine moving company established in 2010. Discover our expertise in heavy machinery moving, transportation, and logistics services.',
        'og_title' => 'About Us',
        'og_site_name' => 'About Us – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru'
    ],
    'service' => [
        'title' => 'Our Service – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru',
        'description' => 'Explore our comprehensive services including machine moving, lifting & shifting, crating & uncrating, dismantling & installation, and complete logistics solutions.',
        'og_title' => 'Our Service',
        'og_site_name' => 'Our Service – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru'
    ],
    'project' => [
        'title' => 'Our Project – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru',
        'description' => 'View our portfolio of successful machine moving and transportation projects. See how we handle complex machinery relocation with precision and safety.',
        'og_title' => 'Our Project',
        'og_site_name' => 'Our Project – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru'
    ],
    'equipment' => [
        'title' => 'Our Equipment – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru',
        'description' => 'Discover the specialized equipment and machinery we use for safe and efficient heavy equipment moving, lifting, and transportation services.',
        'og_title' => 'Our Equipment',
        'og_site_name' => 'Our Equipment – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru'
    ],
    'article' => [
        'title' => 'Article – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru',
        'description' => 'Read our latest articles and insights about machine moving, heavy equipment transportation, industry news, and logistics best practices.',
        'og_title' => 'Article',
        'og_site_name' => 'Article – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru'
    ],
    'career' => [
        'title' => 'Career – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru',
        'description' => 'Join our team at T&S Machine Movers. Explore career opportunities in machine moving, logistics, and heavy equipment transportation services.',
        'og_title' => 'Career',
        'og_site_name' => 'Career – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru'
    ],
    'contact' => [
        'title' => 'Contact Us – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru',
        'description' => 'Get in touch with T&S Machine Movers for professional machine moving and transportation services. Contact us for quotes and consultations.',
        'og_title' => 'Contact Us',
        'og_site_name' => 'Contact Us – T & S Machine Movers (M) Sdn Bhd |Machine Movers & Transportation Service in Johor Bahru'
    ]
];

// Detect current page and set meta
$currentPage = '';
$currentUri = $_SERVER['REQUEST_URI'];

foreach ($pageConfigs as $pageKey => $config) {
    if (strpos($currentUri, $pageKey) !== false) {
        $currentPage = $pageKey;
        $metaTitle = $config['title'];
        $metaDescription = $config['description'];
        $ogTitle = $config['og_title'];
        $ogSiteName = $config['og_site_name'];
        break;
    }
}

// If no page detected, default to home
if (empty($currentPage)) {
    $currentPage = 'index';
    $metaTitle = $pageConfigs['index']['title'];
    $metaDescription = $pageConfigs['index']['description'];
    $ogTitle = $pageConfigs['index']['og_title'];
    $ogSiteName = $pageConfigs['index']['og_site_name'];
}

//meta
$metaKeyword = 'machine mover, machine moving and rigging, heavy equipment moving companies near me, heavy machinery moving equipment, moving gym equipment, machinery moving equipment, moving heavy machinery, mover machine, heavy equipment mover, machine moving company, machine moving rollers, heavy machinery moving, heavy equipment moving near me, strongway machinery mover, strongway machinery skate, moving heavy equipment by hand, vending machine moving equipment, machinery moving company near me, heavy machinery moving company, piano moving machine, machine moving and rigging companies, moving gym equipment near me, moving heavy gym equipment, rollers for moving heavy equipment, heavy lift machinery moving, heavy load moving equipment, industrial machinery mover, house shifting machine, heavy equipment moving service, machine moving trolley, machine mover, machine moving equipment, vacuum packing, packing, transportation, import and export, forwarding, shipping, appliance moving equipment, heavy machine mover, aliexpress standard shipping, department of transport, moving boxes, fedex shipping, transport department, movers and packers, same day delivery, mail forwarding, standard delivery, machine mover, machine moving equipment, heavy machine mover, vacuum packing, packing, transportation, import and export, forwarding, shipping, appliance moving equipment';
// $metaModel = new SeoModel($db);
// $metaData  = $metaModel->getSeoByPageName($pageName);
// $metaTitle = $metaData[0]['metaTitle'] ? $pageName . " | " . $metaData[0]['metaTitle'] : $pageName;
// $metaDescription = $metaData[0]['metaDescription'] ? $metaData[0]['metaDescription'] : "Description";
// $metaKeyword = $metaData[0]['metaKeyword'] ? $metaData[0]['metaKeyword'] : "Keywords";
//meta others
$metaAlt = $metaTitle . ' Logo'; //extra tag
$metaRobot = 'index, follow';
//upload favicon &: else default icon
$favIcon  = "https://" . $_SERVER['HTTP_HOST'] . '/favicon/favicon.svg';
$ogImage  = "https://" . $_SERVER['HTTP_HOST'] .'/favicon/ogImage_v1.jpg';

//custom meta
if($pageName == 'Product Detail'){
    // $getid = $_GET['id'] ?? null;
    // $serviceModel = new ServiceModel($db);
    // $serviceData = getSingleByUrl($serviceModel, $getid);
    // $serviceData = $serviceData[0];

    // $metaTitle = !empty($serviceData['name']) ? $serviceData['name'] : $metaTitle;
    // $metaDescription = !empty($serviceData['description']) ? $serviceData['description'] : $metaDescription;
    // $ogImage = (!empty($serviceData['images'][0])) ? $serviceData['images'][0] : $ogImage;
}

//language code
$langCode = $_GET['lang'] ?? $_SESSION['lang'] ?? 'gb';
$_SESSION['lang'] = $langCode;
$GLOBALS['lang'] = new I18n($langCode);

// Translation function
function __($key) {
    return $GLOBALS['lang']?->get($key) ?? $key;
}
?>
