<?php
/**
 * 404.php - Page Not Found
 * ZGames Mobile WebApp
 */

$pageName = '404';
$metaTitle = 'Page Not Found - ' . $siteConfig['siteName'];
include('lib/htmlHead.php');
?>

<?php include('lib/header.php'); ?>

<!-- Main Content -->
<main class="main-content">
    <div class="container">

        <div class="empty-state" style="padding: 100px 20px;">
            <i class="fas fa-ghost"></i>
            <h2>404</h2>
            <h4>Page Not Found</h4>
            <p>Sorry, the page you are looking for does not exist or has been moved.</p>
            <a href="index.php" class="btn btn-primary mt-3">
                <i class="fas fa-home me-2"></i>Back to Home
            </a>
        </div>

    </div>

    <!-- Mobile spacer -->
    <div class="mobile-nav-spacer d-lg-none"></div>

</main>

<?php include('lib/footer.php'); ?>

<?php include('lib/htmlBody.php'); ?>
