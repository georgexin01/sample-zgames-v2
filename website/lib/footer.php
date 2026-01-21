<!-- Footer -->
<footer id="moverspackers-footer" class="moverspackers-footer-one">
    <span class="footer-widget-transparent"></span>
    <div class="moverspackers-footer-widget">
        <div class="container">
            <div class="row">
                <aside class="col-md-4 widget widget_about_us">
                    <h2 class="moverspackers-footer-title"><?= __('footer.aboutus'); ?></h2>
                    <p style="text-align: justify;"><?= __('footer.intro'); ?></p>
                    <ul class="moverspackers-footer-social">
                        <li><a href="https://wa.link/uohybb" target="blank" class="fab fa-whatsapp"></a></li>
                    </ul>
                </aside>
                <aside class="col-md-4 widget widget_links">
                    <h2 class="moverspackers-footer-title"><?= __('footer.usefullinks'); ?></h2>
                    <ul>
                        <li><a href="/"><?= __('menu.home'); ?></a></li>
                                <li><a href="/about"><?= __('menu.aboutus'); ?></a></li>
                                <li><a href="/service"><?= __('menu.services'); ?></a></li>
                                <li><a href="/project"><?= __('menu.projects'); ?></a></li>
                                <li><a href="/equipment"><?= __('menu.equipment'); ?></a></li>
                                <li><a href="/career"><?= __('menu.career'); ?></a></li>
                                <li><a href="/contact"><?= __('menu.contactus'); ?></a></li>
                        </ul>
                </aside>
                <aside class="col-md-4 widget widget_newsletter">
                    <h2 class="moverspackers-footer-title"><?= __('footer.map'); ?></h2>
                    <a href="https://maps.app.goo.gl/dTmcnQ4tnxwCYp5Q7" target="_blank"><p><i style="margin-right:10px; ;" class="fa fa-home"></i> <?= $ctaddress ?> </p></a>
                    <a href="<?= formatWhatsapp($ctcontact) ?>" target="blank">
                        <p><i style="margin-right:10px; ;" class="fab fa-whatsapp"></i>+<?= $ctcontact ?></p>
                    </a>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15953.564312206783!2d103.675284!3d1.532579!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc899cb1c24ec20f!2sT%20%26%20S%20Machine%20Movers%20(M)%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1615280777847!5m2!1sen!2smy" width="200" height="160" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </aside>
            </div>
        </div>
    </div>
<div class="moverspackers-footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><i class="fa fa-copyright"></i> 2021 <a href="/">2021 T&S Machine Movers (M) Sdn Bhd</a>. Designed By Zeta Web Solutions.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Language -->
<div class="desktopp">
    <a href="?lang=gb" style="bottom:70px;" class="floatss">
        <i class="fa fa-globe my-floatss"> ENG</i>
    </a>
    <a href="?lang=cn" class="floatss">
        <i class="fa fa-globe my-floatss"> 中文</i>
    </a>
</div>
