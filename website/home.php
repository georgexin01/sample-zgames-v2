<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // init head
    $pageName = 'Home';
    include('lib/htmlHead.php');
?>
</head>
<body>
<div class="moverspackers-main-wrapper">
<!-- header -->
<?php include('lib/header.php'); ?>
    
    <div class="moverspackers-banner">
        
        <div class="moverspackers-banner-layer">
            <img src="/images/imgm/b_m26.jpg" class="lazyload">
            <span class="banner-transparent"></span>
            <div class="moverspackers-banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="moverspackers-banner-text">
                                <h5><?= __('home.banner2_title'); ?></h5>
                                <h1><?= __('home.banner2_subtitle'); ?></h1>
                                <a href="/service" class="moverspackers-classic-btn"><?= __('home.our_services'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="moverspackers-banner-layer">
            <img src="/images/imgp/b_p15.jpg" class="lazyload">
            <span class="banner-transparent"></span>
            <div class="moverspackers-banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="moverspackers-banner-text">
                                <h5><?= __('home.banner2_title'); ?></h5>
                                <h1><span><?= __('home.banner2_subtitle'); ?></span></h1>
                                <a href="/service" class="moverspackers-classic-btn"><?= __('home.our_services'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="moverspackers-banner-layer">
            <img src="/images/imgm/b_m27.jpg" class="lazyload">
            <span class="banner-transparent"></span>
            <div class="moverspackers-banner-caption">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="moverspackers-banner-text">
                                <h5><?= __('home.banner3_title'); ?></h5>
                                <h1><span><?= __('home.banner3_subtitle'); ?></span></h1>
                                <a href="/about" class="moverspackers-classic-btn"><?= __('home.about_us'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="moverspackers-main-content">
        <div class="moverspackers-main-section moverspackers-servicesfull">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="moverspackers-fancy-title">
                            
                            <div class="section-head">
                                <div class="mt-separator-outer separator-center" >
                                    <div class="mt-separator" style="margin-bottom: 0px;">
                                    <h2 class=" text-uppercase sep-line-one "><?= __('home.our_services'); ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="moverspackers-services moverspackers-services-list">
                            <ul class="row">
                                <li class="col-md-6">
                                    <a href="/service/16">
                                        <div class="moverspackers-services-wrap">
                                            <div class="moverspackers-services-text">
                                                <i><img src="images/phpg1buoE59310.png"></i>
                                                <h5><?= __('services.moving_lifting'); ?></h5>
                                                <p><?= __('services.moving_lifting_desc'); ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-md-6">
                                    <a href="/service/17">
                                        <div class="moverspackers-services-wrap">
                                            <div class="moverspackers-services-text">
                                                <i><img src="images/php3ED114138.png"></i>
                                                <h5><?= __('services.crating'); ?></h5>
                                                <p><span style="font-size:10.0pt"><?= __('services.crating_desc'); ?>&nbsp;</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-md-6">
                                    <a href="/service/18">
                                        <div class="moverspackers-services-wrap">
                                            <div class="moverspackers-services-text">
                                                <i><img src="images/php666F387.png"></i>
                                                <h5><?= __('services.dismantling'); ?></h5>
                                                <p><span style="font-size:10.0pt"><?= __('services.dismantling_desc'); ?>&nbsp;</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-md-6">
                                    <a href="/service/19">
                                        <div class="moverspackers-services-wrap">
                                            <div class="moverspackers-services-text">
                                                <i><img src="images/phpmdaswa25357.png"></i>
                                                <h5><?= __('services.logistic'); ?></h5>
                                                <p><span style="font-size:10.0pt"><?= __('services.logistic_desc'); ?></span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="moverspackers-main-section moverspackers-blog-classicfull">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 article-all">
                        <div class="moverspackers-fancy-title">
                            <div class="section-head">
                                <div class="mt-separator-outer separator-center" >
                                    <div class="mt-separator" style="margin-bottom: 0px;">
                                    <h2 class="text-uppercase sep-line-one "><?= __('home.latest_news'); ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="moverspackers-blog moverspackers-blog-classic">
                            <ul class="row" id="containerss">
                                <li class="col-md-4 cols-md-4">
                                    <figure>
                                        <a href="/article/1">
                                            <img src="uploads/images/articles/369442_1615348283.jpeg" class="lazyload">
                                            <i class="fa fa-share"></i>
                                        </a>
                                        <time datetime="2008-02-14 20:00">Mar 24</time>
                                    </figure>
                                    <div class="moverspackers-blog-classic-wrap">
                                        <ul class="moverspackers-blog-option moverspackers-bgcolor">
                                            <li>Posted By: T&S Machine Movers</li>
                                            
                                        </ul>
                                        <div class="moverspackers-blog-classic-text">
                                            <h5><a href="/article/1">Packaging By Our Company in Johor Bahru</a></h5>
                                            <p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas venenatis, augue nec pretium ornare, ante ...</p>
                                            <a href="/article/1" class="moverspackers-readmore-btn">Read More<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-4 cols-md-4">
                                    <figure>
                                        <a href="/article/2">
                                            <img src="uploads/images/articles/924201_1615348169.jpeg" class="lazyload">
                                            <i class="fa fa-share"></i>
                                        </a>
                                        <time datetime="2008-02-14 20:00">Mar 10</time>
                                    </figure>
                                    <div class="moverspackers-blog-classic-wrap">
                                        <ul class="moverspackers-blog-option moverspackers-bgcolor">
                                            <li>Posted By: T&S Machine Movers</li>
                                        </ul>
                                        <div class="moverspackers-blog-classic-text">
                                            <h5><a href="/article/2">Article 2</a></h5>
                                            <p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et ...</p>
                                            <a href="/article/2" class="moverspackers-readmore-btn">Read More<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </li>                    
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="moverspackers-main-section moverspackers-get-quote-formfull">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-8">
                        <div class="moverspackers-get-quote-form">
                            <div class="moverspackers-fancy-title">
                                <h2><?= __('home.get_quote'); ?></h2>
                                <p><?= __('home.quote_desc'); ?></p>
                            </div>
                            <form id="orderForm" method="post" action="#" enctype="multipart/form-data" accept-charset="utf-8">
                                <ul>
                                    <li><input name="comp" placeholder="<?= __('home.quote_form.company'); ?>" type="text"></li>
                                    <li><input name="name" placeholder="<?= __('home.quote_form.name'); ?>" type="text"></li>
                                    <li><input name="email" placeholder="<?= __('home.quote_form.email'); ?>" type="email"></li>
                                    <li><input name="phone" placeholder="<?= __('home.quote_form.phone'); ?>" type="text"></li>
                                    <li >
                                        <select id="services" name="services" style="background-color: #3d4151;color: #cccccc;">
                                            <option value=""><?= __('home.quote_form.types_of_services'); ?></option>
                                            <option value="Moving, Lifting & Shifting Machine"><?= __('services.moving_lifting'); ?></option>
                                            <option value="Crating, Vacuum Packing & Uncrating"><?= __('services.crating'); ?></option>
                                            <option value="Dismantling & Installation of Machine"><?= __('services.dismantling'); ?></option>
                                            <option value="Logistic Services"><?= __('services.logistic'); ?></option>
                                        </select>
                                    </li>
                                    <li class="desktop" style="float: right;"><textarea name="message" placeholder="<?= __('home.quote_form.message'); ?>"></textarea></li>
                                    <li><input name="fromState" placeholder="<?= __('home.quote_form.from_state'); ?>" type="text"></li>
                                    <li><input name="toState" placeholder="<?= __('home.quote_form.to_state'); ?>" type="text"></li>
                                    <li class="phone" style="float: right;"><textarea name="message2" placeholder="<?= __('home.quote_form.message'); ?>"></textarea></li>
                                    <li></li>
                                    <li><input type="submit" name="submit" value="<?= __('home.quote_form.submit'); ?>" style="width: 60%;margin: 2px 20% 0;"></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="moverspackers-get-quote-thumb">
                            <img src="images/default/get-quote-thumb.png" class="lazyload">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="moverspackers-main-section full nem" >
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="moverspackers-fancy-title">
                            <div class="section-head">
                                <div class="mt-separator-outer separator-center" >
                                    <div class="mt-separator" style="margin-bottom: 0px;">
                                    <h2 class=" text-uppercase sep-line-one "><?= __('home.our_process'); ?></h2>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                        </div>
                        <div class="moverspackers-process-list">
                            <ul>
                                <li style="padding: 0px 30px;">
                                    <span>
                                        <small class="moverspackers-bgcolor">1</small>
                                        <i><img src="images/icon/consultation.png" width="50%"></i>
                                        <button  class="fa fa-angle-double-right"></button>
                                    </span>
                                    <h6><?= __('home.free_consultations'); ?></h6>
                                </li>
                                <li style="padding: 0px 30px;">
                                    <span>
                                        <small class="moverspackers-bgcolor">2</small>
                                        <i class="flaticon moverspackers-pen"></i>
                                        <button  class="fa fa-angle-double-right"></button>
                                    </span>
                                    <h6><?= __('home.book_order'); ?></h6>
                                </li>
                                <li style="padding: 0px 30px;">
                                    <span>
                                        <small class="moverspackers-bgcolor">3</small>
                                        <i class="flaticon moverspackers-boxes"></i>
                                        <button  class="fa fa-angle-double-right"></button>
                                    </span>
                                    <h6><?= __('home.pack_things'); ?></h6>
                                </li>
                                <li style="padding: 0px 30px;">
                                    <span>
                                        <small class="moverspackers-bgcolor">4</small>
                                        <i class="flaticon moverspackers-transport"></i>
                                        <button  class="fa fa-angle-double-right"></button>
                                    </span>
                                    <h6><?= __('home.move_things'); ?></h6>
                                </li>
                                <li style="padding: 0px 30px;">
                                    <span>
                                        <small class="moverspackers-bgcolor">5</small>
                                        <i class="flaticon moverspackers-transport-1"></i>
                                        <button  class="fa fa-angle-double-right"></button>
                                    </span>
                                    <h6><?= __('home.deliver_things'); ?></h6>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php include('lib/footer.php'); ?>
<?php include('lib/htmlBody.php'); ?>
</body>
</html>
