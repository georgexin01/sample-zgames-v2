<?php
//init database
include('lib/initData.php');
?>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

<title><?= $metaTitle ?></title>
<meta name="description" content="<?= $metaDescription ?>">
<meta name="keywords" content="<?= $metaKeyword ?>">
<meta property="og:title" content="<?= $ogTitle ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $url ?>">
<meta property="og:image" content="<?= $ogImage ?>">
<meta property="og:image:secure_url" content="<?= $ogImage ?>">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">
<meta property="og:image:alt" content="<?= $metaAlt ?>">
<meta property="og:image" content="<?= $ogImage ?>">
<meta property="og:image:secure_url" content="<?= $ogImage ?>">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="<?= $metaAlt ?>">
<meta property="og:description" content="<?= $metaDescription ?>">
<meta property="og:locale" content="en">
<meta property="og:site_name" content="<?= $ogSiteName ?>">
<link rel="canonical" href="<?= $url ?>">
<!--Robot Meta Tag -->
<meta name="robots" content="<?= $metaRobot ?>">

<!-- insert link\src -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-utilities.min.css" rel="stylesheet">
<link href="/css/bootstrap.css" rel="stylesheet">
<link href="/css/font-awesome.css" rel="stylesheet">
<link href="/css/flaticon.css" rel="stylesheet">
<link href="/css/slick-slider.css" rel="stylesheet">
<link href="/css/fancybox.css" rel="stylesheet">
<link href="/css/color.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet" />
<link href="/css/style.css" rel="stylesheet">
<link href="/css/style2.css?<?= time(); ?>" rel="stylesheet" />

<!-- https://realfavicongenerator.net/ -->
<link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
<link rel="shortcut icon" href="/favicon/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
<link rel="manifest" href="/favicon/site.webmanifest" />

<!-- others js -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js"></script>
