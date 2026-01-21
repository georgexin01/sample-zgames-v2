<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // init head
    $pageName = 'Our Service';
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
					<h1><?= __('services.title'); ?></h1>
					<ul class="moverspackers-breadcrumb">
						<li><a href="/"><?= __('services.breadcrumb_home'); ?></a></li>
						<li><?= __('services.breadcrumb_services'); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="moverspackers-main-content" style="background-image: url(images/bg5.jpg);">
		<div class="moverspackers-main-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="moverspackers-blog moverspackers-blog-grid">
							<ul class="row">
								<li class="col-md-6">
									<div class="moverspackers-project-list-wrap">
										<figure style="margin-bottom: 20px;"><a href="/service/16"><img src="images/248987_1617007106.png" alt=""><i class="flaticon moverspackers-technology-1"></i></a></figure>
										<div class="moverspackers-project-list-text-right">
											<h5 style="text-align: center;" ><a style="color:black; font-size: 23px !important;" href="/service/16"><?= __('services.moving_lifting'); ?></a></h5>
											<a style="text-align: center  !important;" href="/service/16" class="custom-readmore-right"><?= __('services.more'); ?></a>
										</div>
									</div>
								</li>
								<li class="col-md-6">
									<div class="moverspackers-project-list-wrap">
										<figure style="margin-bottom: 20px;"><a href="/service/17"><img src="images/462840_1615344979.png" alt=""><i class="flaticon moverspackers-technology-1"></i></a></figure>
										<div class="moverspackers-project-list-text-right">
											<h5 style="text-align: center;" ><a style="color:black; font-size: 23px !important;" href="/service/17"><?= __('services.crating'); ?></a></h5>
											<a style="text-align: center  !important;" href="/service/17" class="custom-readmore-right"><?= __('services.more'); ?></a>
										</div>
									</div>
								</li>
								<li class="col-md-6">
									<div class="moverspackers-project-list-wrap">
										<figure style="margin-bottom: 20px;"><a href="/service/18"><img src="images/422287_1615344999.png" alt=""><i class="flaticon moverspackers-technology-1"></i></a></figure>
										<div class="moverspackers-project-list-text-right">
											<h5 style="text-align: center;" ><a style="color:black; font-size: 23px !important;" href="/service/18"><?= __('services.dismantling'); ?></a></h5>
											<a style="text-align: center  !important;" href="/service/18" class="custom-readmore-right"><?= __('services.more'); ?></a>
										</div>
									</div>
								</li>
								<li class="col-md-6">
									<div class="moverspackers-project-list-wrap">
										<figure style="margin-bottom: 20px;"><a href="/service/19"><img src="images/960255_1615345009.png" alt=""><i class="flaticon moverspackers-technology-1"></i></a></figure>
										<div class="moverspackers-project-list-text-right">
											<h5 style="text-align: center;" >
												<a style="color:black; font-size: 23px !important;" href="/service/19"><?= __('services.logistics'); ?></a>
											</h5>
											<a style="text-align: center  !important;" href="/service/19" class="custom-readmore-right"><?= __('services.more'); ?></a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>

<!-- footer -->
<?php include('lib/footer.php'); ?>
<?php include('lib/htmlBody.php'); ?>
</body>
</html>
