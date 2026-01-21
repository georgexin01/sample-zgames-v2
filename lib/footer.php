<!-- Footer -->
<footer class="zgames-footer">
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <!-- About Column -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="footer-widget">
                        <h5 class="widget-title">
                            <img src="images/default/logo.png" alt="<?php echo e($siteConfig['siteName']); ?>" class="footer-logo">
                            <?php echo e($siteConfig['siteName']); ?>
                        </h5>
                        <p class="widget-text">
                            <?php echo e($siteConfig['siteTagline']); ?> - Your ultimate destination for mobile gaming news, reviews, and downloads.
                        </p>
                        <div class="social-links">
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <div class="footer-widget">
                        <h5 class="widget-title">Quick Links</h5>
                        <ul class="footer-links">
                            <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
                            <li><a href="games.php"><i class="fas fa-chevron-right"></i> Games</a></li>
                            <li><a href="about.php"><i class="fas fa-chevron-right"></i> About Us</a></li>
                            <li><a href="contact.php"><i class="fas fa-chevron-right"></i> Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Categories -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="footer-widget">
                        <h5 class="widget-title">Categories</h5>
                        <ul class="footer-links">
                            <?php foreach (array_slice($categories, 0, 4) as $cat): ?>
                            <li>
                                <a href="games.php?cat=<?php echo $cat['id']; ?>">
                                    <i class="fas <?php echo e($cat['icon']); ?>"></i> <?php echo e($cat['name']); ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5 class="widget-title">Contact Us</h5>
                        <ul class="contact-info">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span><?php echo e($siteConfig['address']); ?></span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <a href="tel:<?php echo e($siteConfig['contactPhone']); ?>">
                                    <?php echo e($siteConfig['contactPhone']); ?>
                                </a>
                            </li>
                            <li>
                                <i class="fab fa-whatsapp"></i>
                                <a href="<?php echo formatWhatsapp($siteConfig['contactWhatsapp']); ?>" target="_blank">
                                    WhatsApp Us
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:<?php echo e($siteConfig['adminEmail']); ?>">
                                    <?php echo e($siteConfig['adminEmail']); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="copyright-text"><?php echo $siteConfig['copyright']; ?></p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <ul class="footer-bottom-links">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Mobile Bottom Navigation (Fixed) -->
<nav class="mobile-bottom-nav d-lg-none">
    <a href="index.php" class="nav-item <?php echo isActivePage($pageName, 'Home'); ?>">
        <i class="fas fa-home"></i>
        <span>Home</span>
    </a>
    <a href="games.php" class="nav-item <?php echo isActivePage($pageName, 'Games'); ?>">
        <i class="fas fa-gamepad"></i>
        <span>Games</span>
    </a>
    <a href="#" class="nav-item nav-item-center" data-bs-toggle="modal" data-bs-target="#searchModal">
        <i class="fas fa-search"></i>
    </a>
    <a href="about.php" class="nav-item <?php echo isActivePage($pageName, 'About'); ?>">
        <i class="fas fa-info-circle"></i>
        <span>About</span>
    </a>
    <a href="contact.php" class="nav-item <?php echo isActivePage($pageName, 'Contact'); ?>">
        <i class="fas fa-envelope"></i>
        <span>Contact</span>
    </a>
</nav>

<!-- Search Modal (Mobile) -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Search Games</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form role="search">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-lg" placeholder="Search games..." aria-label="Search">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- WhatsApp Floating Button -->
<a href="<?php echo formatWhatsapp($siteConfig['contactWhatsapp'], 'Hi, I have a question about ZGames!'); ?>" class="whatsapp-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
</a>
