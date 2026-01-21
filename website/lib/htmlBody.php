<!-- lazyload -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
<!-- ======= import ======= -->
<script type="text/javascript" src="/script/jquery.js"></script>
<script type="text/javascript" src="/script/bootstrap.js"></script>
<script type="text/javascript" src="/script/jquery.countdown.min.js"></script>
<script type="text/javascript" src="/script/slick.slider.js"></script>
<script type="text/javascript" src="/script/fancybox.pack.js"></script>
<!-- isotope removed - not needed -->
<script type="text/javascript" src="/script/numscroller.js"></script>
<script type="text/javascript" src="/script/progressbar.js"></script>
<script type="text/javascript" src="/script/functions.js"></script>
<!-- ======= main-js ======= -->
<script src="/js/main.js?<?= time() ?>"></script>
<!-- ======= form handler ======= -->
<?php include($_SERVER['DOCUMENT_ROOT'] . '/sendEmail.php'); ?>
<!-- Initialize banner slideshow after page load -->
<script>
jQuery(window).on('load', function() {
    // Re-initialize banner slideshow to ensure it works
    if (jQuery('.moverspackers-banner').length > 0) {
        jQuery('.moverspackers-banner').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            dots: false,
            arrows: true,
            fade: true,
            prevArrow:'<span class=" slick-arrow"><i class="fa fa-angle-left"></i></span>',
            nextArrow:'<span class="arrow-next slick-arrow"><i class="fa fa-angle-right"></i></span>',
            responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 800,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 400,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
            ]
        });
    }
});
</script>
