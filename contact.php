<?php
/**
 * contact.php - Contact Us Page
 * ZGames Mobile WebApp
 */

$pageName = 'Contact';
include('lib/htmlHead.php');
?>

<?php include('lib/header.php'); ?>

<!-- Main Content -->
<main class="main-content">
    <div class="container">

        <!-- Page Header -->
        <div class="page-header mb-4">
            <h1 class="page-title">Contact Us</h1>
            <p class="text-muted">Get in touch with our team</p>
        </div>

        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-7 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-4">Send us a message</h5>
                        <form class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="mb-4">Contact Information</h5>
                        <ul class="contact-info list-unstyled">
                            <li class="mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-3"></i>
                                <?php echo e($siteConfig['address']); ?>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-phone text-primary me-3"></i>
                                <a href="tel:<?php echo e($siteConfig['contactPhone']); ?>">
                                    <?php echo e($siteConfig['contactPhone']); ?>
                                </a>
                            </li>
                            <li class="mb-3">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <a href="mailto:<?php echo e($siteConfig['adminEmail']); ?>">
                                    <?php echo e($siteConfig['adminEmail']); ?>
                                </a>
                            </li>
                            <li>
                                <i class="fab fa-whatsapp text-success me-3"></i>
                                <a href="<?php echo formatWhatsapp($siteConfig['contactWhatsapp']); ?>" target="_blank">
                                    WhatsApp Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Mobile spacer -->
    <div class="mobile-nav-spacer d-lg-none"></div>

</main>

<?php include('lib/footer.php'); ?>

<?php include('lib/htmlBody.php'); ?>
