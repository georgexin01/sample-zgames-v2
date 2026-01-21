<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // init head
    $pageName = 'Our Project';
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
					<h1><?= __('project.title'); ?></h1>
					<ul class="moverspackers-breadcrumb">
						<li><a href="/"><?= __('project.breadcrumb_home'); ?></a></li>
						<li><?= __('project.breadcrumb_project'); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="moverspackers-main-content">
		<div class="moverspackers-main-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="moverspackers-project moverspackers-project-grid project-all">
							<ul class="row">
								<li class="col-md-4 cols-md-4">
									<figure><a href="/project/5">
										<img src="uploads/images/projects/693007_1616723274.jpeg"></a>
										<figcaption>
											<div class="moverspackers-project-grid-wrap">
												<div class="moverspackers-project-grid-text">
													<h5><a href="/project/5">Project 1</a></h5>
													<p style="padding-top: 20px;padding-bottom: 30px;"></p>
													<a href="/project/5">更多<i class="fa fa-angle-double-right"></i></a>
												</div>
											</div>
										</figcaption>
									</figure>
								</li>
								<li class="col-md-4 cols-md-4">
									<figure><a href="/project/6">
										<img src="uploads/images/projects/112085_1616723501.jpeg"></a>
										<figcaption>
											<div class="moverspackers-project-grid-wrap">
												<div class="moverspackers-project-grid-text">
													<h5><a href="/project/6">Project 2</a></h5>
													<p style="padding-top: 20px;padding-bottom: 30px;"></p>
													<a href="/project/6">更多<i class="fa fa-angle-double-right"></i></a>
												</div>
											</div>
										</figcaption>
									</figure>
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
