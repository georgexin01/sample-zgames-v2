<?php
/**
 * index.php - Homepage
 * ZGames Mobile WebApp
 */

$pageName = 'Home';
include('lib/htmlHead.php');
?>

<?php include('lib/header.php'); ?>

<!-- Main Content -->
<main class="main-content">

    <!-- Hero Banner Section -->
    <section class="hero-banner">
        <div class="container">
            <!-- Banner content will go here -->
        </div>
    </section>

    <!-- Featured Games Section -->
    <section class="section featured-games">
        <div class="container">
            <h2 class="section-title">Featured Games</h2>
            <div class="row">
                <!-- Game cards will go here -->
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="section categories-section bg-light">
        <div class="container">
            <h2 class="section-title">Browse by Category</h2>
            <div class="row">
                <!-- Category cards will go here -->
            </div>
        </div>
    </section>

    <!-- Latest Games Section -->
    <section class="section latest-games">
        <div class="container">
            <h2 class="section-title">Latest Games</h2>
            <div class="row">
                <!-- Latest game cards will go here -->
            </div>
        </div>
    </section>

    <!-- Mobile spacer for bottom nav -->
    <div class="mobile-nav-spacer d-lg-none"></div>

</main>

<?php include('lib/footer.php'); ?>

<?php include('lib/htmlBody.php'); ?>
