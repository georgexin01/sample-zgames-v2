<!-- Header Navigation -->
<header class="zgames-header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="images/default/logo.png" alt="<?php echo e($siteConfig['siteName']); ?>" class="logo-img">
                <span class="logo-text"><?php echo e($siteConfig['siteName']); ?></span>
            </a>

            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActivePage($pageName, 'Home'); ?>" href="index.php">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActivePage($pageName, 'Games'); ?>" href="games.php">
                            <i class="fas fa-gamepad"></i> Games
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-th-large"></i> Categories
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($categories as $cat): ?>
                            <li>
                                <a class="dropdown-item" href="games.php?cat=<?php echo $cat['id']; ?>">
                                    <i class="fas <?php echo e($cat['icon']); ?>"></i> <?php echo e($cat['name']); ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActivePage($pageName, 'About'); ?>" href="about.php">
                            <i class="fas fa-info-circle"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo isActivePage($pageName, 'Contact'); ?>" href="contact.php">
                            <i class="fas fa-envelope"></i> Contact
                        </a>
                    </li>
                </ul>

                <!-- Search Box (Desktop) -->
                <form class="d-none d-lg-flex ms-3" role="search">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search games..." aria-label="Search">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <!-- Mobile Search (Visible on mobile only) -->
    <div class="mobile-search d-lg-none">
        <div class="container">
            <form role="search">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search games..." aria-label="Search">
                    <button class="btn btn-primary" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</header>
