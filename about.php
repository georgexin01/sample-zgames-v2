<?php
/**
 * about.php - About Us Page
 * ZGames Mobile WebApp
 */

$pageName = 'About';
include('lib/htmlHead.php');
?>

<?php include('lib/header.php'); ?>

<!-- Main Content -->
<main class="main-content">
    <div class="container">

        <!-- Page Header -->
        <div class="page-header mb-4">
            <h1 class="page-title">About Us</h1>
        </div>

        <!-- About Content -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4>Welcome to ZGames</h4>
                        <p>Your ultimate destination for mobile gaming news, reviews, and downloads.</p>
                        <!-- More about content will go here -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Sidebar content will go here -->
            </div>
        </div>

    </div>

    <!-- Mobile spacer -->
    <div class="mobile-nav-spacer d-lg-none"></div>

</main>

<?php include('lib/footer.php'); ?>

<?php include('lib/htmlBody.php'); ?>
