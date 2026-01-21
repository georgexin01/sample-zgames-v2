<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // init head
    $pageName = 'Contact Us';
    include('lib/htmlHead.php');
?>
</head>
<body>
<div class="moverspackers-main-wrapper">
<!-- header -->
<?php include('lib/header.php'); ?>

	    <div class="moverspackers-subheader"style="background-image: url(/images/imgp/b_p15.jpg);">
	        <span class="moverspackers-dark-transparent"></span>
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <h1><?= __('contact.title'); ?></h1>
	                    <ul class="moverspackers-breadcrumb">
	                        <li><a href="/"><?= __('contact.breadcrumb_home'); ?></a></li>
	                        <li><?= __('contact.breadcrumb_contact'); ?></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
		<div class="moverspackers-main-content moverspackers-contactfull">
			<div class="moverspackers-main-section" style="padding-bottom: 60px;">
				<div class="container">
					<div class="row new-md">
	                    <div class="moverspackers-fancy-title">
	                        <h2><?= __('contact.our'); ?> <span><?= __('contact.addrs'); ?></span></h2>
	                        <p style="width: 100%"><?= $ctaddress ?></p>
	                    </div>
						<div class="col-md-8">
							<div class="moverspackers-contact-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127627.86753893891!2d103.65580910802477!3d1.5433962793551974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da73b64296bd59%3A0xdc899cb1c24ec20f!2sT%20%26%20S%20Machine%20Movers%20(M)%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1614568759884!5m2!1sen!2smy" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</div>
	                    </div>
	                    <div class="col-md-4 cols-md-4">
	                        <div class="moverspackers-contact-info moverspackers-contact-widget contact_p">
	                            <ul>
	                                <li style="margin-bottom: 20px;margin-top:10px;">
	                                    <div class="moverspackers-contact-info-text">
	                                        <h5><?= __('contact.contact_us'); ?></h5>
	                                        <p><i class="fa fa-fax" aria-hidden="true"></i> 07-555 9969</p>
											<!-- Mobile Number -->
											<a href="<?= formatWhatsapp(60127052227) ?>" target="blank" class="mb-0">
												<p><i class="fa fa-phone-square" aria-hidden="true"></i> 012-705 2227</p>
											</a>
											<a href="<?= formatWhatsapp(60107727222) ?>" target="blank" class="mb-0">
												<p><i class="fa fa-phone-square" aria-hidden="true"></i> 010-772 7222 - Eric Koo</p>
											</a>
											<a href="<?= formatWhatsapp(60177052227) ?>" target="blank" class="mb-0">
												<p><i class="fa fa-phone-square" aria-hidden="true"></i> 017-705 2227 - Sandra Pang</p>
											</a>

	                                        <span><i class="flaticon moverspackers-technology"></i></span>
	                                    </div>
	                                </li>
	                                <li>
	                                    <div class="moverspackers-contact-info-text">
	                                        <h5><?= __('contact.email'); ?></h5>
	                                        <a href="mailto:<?= $ctemail ?>">
												<?= $ctemail ?>
											</a>
	                                        <a href="cdn-cgi/l/email-protection.html#8d"></a>
	                                        <span><i class="flaticon moverspackers-letter"></i></span>
	                                    </div>
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
