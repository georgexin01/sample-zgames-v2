<?php
/**
 * games.php - Games Listing Page
 * ZGames Mobile WebApp
 */

$pageName = 'Games';
include('lib/htmlHead.php');
?>

<?php include('lib/header.php'); ?>

<!-- Main Content -->
<main class="main-content">
    <div class="container">

        <!-- Page Header -->
        <div class="page-header mb-4">
            <h1 class="page-title">All Games</h1>
            <p class="text-muted">Browse our collection of mobile games</p>
        </div>

        <!-- Filter Bar -->
        <div class="filter-bar mb-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <!-- Category filter will go here -->
                </div>
                <div class="col-md-6 text-md-end">
                    <!-- Sort options will go here -->
                </div>
            </div>
        </div>

        <!-- Games Grid -->
        <div class="row">
            <!-- Game cards will be populated here -->
        </div>

        <!-- Pagination -->
        <nav class="mt-4">
            <!-- Pagination will go here -->
        </nav>

    </div>

    <!-- Mobile spacer -->
    <div class="mobile-nav-spacer d-lg-none"></div>

</main>

<?php include('lib/footer.php'); ?>

<?php include('lib/htmlBody.php'); ?>
