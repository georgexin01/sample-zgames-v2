<!-- Header -->
<header id="moverspackers-header" class="moverspackers-header-one">
  <div class="moverspackers-main-header">   
    <div class="row owp" >
        <aside class="col-md-2" style="padding: 0 0;"><a href="/" class="logo button-none" style="text-align: center;"><img src="/images/default/TS-final-3.png" alt="logo"> </a></aside>
        <aside class="col-md-10">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a href="/" class="logo button-ok" ><img src="/images/default/TS-final-3.png" alt="logo"> </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse nav-barr" id="navbar-collapse-1">
                    <ul class="nav navbar-nav " id="sidebar-menu">
                        <li class="homess<?= ($pageName == 'Home') ? ' active' : '' ?>">
                            <a href="/"><?= __('menu.home'); ?></a>
                        </li>
                        <li class="homess2<?= ($pageName == 'About Us') ? ' active' : '' ?>">
                            <a href="/about"><?= __('menu.aboutus'); ?></a>
                        </li>
                        <li class="has-child seddd<?= ($pageName == 'Our Service' || $pageName == 'Service Detail') ? ' active' : '' ?>"><a href="/service"><?= __('menu.services'); ?></a>
                            <ul class="moverspackers-dropdown-menu">
                                <li><a href="/service/16"><?= __('services.moving_lifting'); ?></a></li>
                                <li><a href="/service/17"><?= __('services.crating'); ?></a></li>
                                <li><a href="/service/18"><?= __('services.dismantling'); ?></a></li>
                                <li><a href="/service/19"><?= __('services.logistics'); ?></a></li>
                            </ul>
                        </li>
                        <li class="seddd2<?= ($pageName == 'Our Project' || $pageName == 'Project Detail') ? ' active' : '' ?>">
                            <a href="/project"><?= __('menu.projects'); ?></a>
                        </li>
                        <li class="homess3<?= ($pageName == 'Our Equipment') ? ' active' : '' ?>">
                            <a href="/equipment"><?= __('menu.equipment'); ?></a>
                        </li>
                        <li class="homess4<?= ($pageName == 'Career') ? ' active' : '' ?>">
                            <a href="/career"><?= __('menu.career'); ?></a>
                        </li>
                        <li class="homess5<?= ($pageName == 'Contact Us') ? ' active' : '' ?>">
                            <a href="/contact"><?= __('menu.contactus'); ?></a>
                        </li>
                        <li>
                            <a class="langbut text-center" href="/" style="width:40%;margin:0 5% 2% 5%;">English</a>
                            <a class="langbut text-center" href="/" style="width:40%;margin:0 5% 2% 5%;">中文</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <a href="<?= formatWhatsapp($ctcontact) ?>" target="blank" class="moverspackers-simple-btn button-none"><?= __('header.get_quote'); ?></a>
        </aside>
    </div>
  </div>
</header>
