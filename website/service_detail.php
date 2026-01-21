<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // init head
    $serviceId = $_GET['id'] ?? '16'; // Default to service 16 if no ID
    $pageName = 'Service Detail';
    include('lib/htmlHead.php');

    $urlPath = '/uploads/images/services/';

    $services = [
        '16' => [
            'title' => __('service_detail.moving_lifting_title'),
            'text' => __('service_detail.moving_lifting_desc'),
            'images' => [
                '737828_1615363652.jpeg',
                '379643_1615363652.jpeg',
                '193676_1615363652.jpeg',
                '883189_1615363652.jpeg',
                '973489_1615363652.jpeg',
                '273020_1615363663.jpeg',
				'007.png',
				'008.png',
				'009.png',
				'015.png',
				'017.png'
            ]
        ],
        '17' => [
            'title' => __('service_detail.crating_title'),
            'text' => __('service_detail.crating_desc'),
            'images' => [
                '894699_1615363687.jpeg',
                '15644_1615363688.jpeg',
                '771960_1615363688.jpeg',
                '646924_1615363688.jpeg',
            ]
        ],
        '18' => [
            'title' => __('service_detail.dismantling_title'),
            'text' => __('service_detail.dismantling_desc'),
            'images' => [
                '303225_1615363719.jpeg',
                '505088_1615363719.jpeg',
                '311873_1615363719.jpeg',
                '805393_1615363719.jpeg',
				'004.png'
            ]
        ],
        '19' => [
            'title' => __('service_detail.logistics_title'),
            'text' => __('service_detail.logistics_desc'),
            'images' => [
                '791065_1615363877.jpeg',
                '765765_1615363877.jpeg',
                '10173_1615363877.jpeg',
				'001.png',
				'016.png',
				'017.png',
				'005.png'
            ]
        ]
    ];

    $currentService = $services[$serviceId] ?? $services['16']; // Default to service 16
    $serviceImages = $currentService['images'];
    $serviceTitle = $currentService['title'];
    $serviceText = $currentService['text'];
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
	                    <h1><?= $serviceTitle; ?></h1>
	                    <ul class="moverspackers-breadcrumb">
	                        <li><a href="/"><?= __('services.breadcrumb_home'); ?></a></li>
	                        <li><a href="/service"><?= __('services.breadcrumb_services'); ?></a></li><li><?= $serviceTitle; ?></li>
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
	                        <div class="moverspackers-fancy-title">
	                            <p><p><?= $serviceText; ?></p></p><br>
	                        </div>
	                        <div>
	                        <div class="moverspackers-services moverspackers-services-grid service-all">
	                          <div class="row">
								<?php foreach ($serviceImages as $index => $image): ?>
									<div class="column col-md-3 cols-md-3" style="padding-left: 5px;padding-right: 5px">
										<img src="<?= $urlPath . $image; ?>" onclick="openModal();currentSlide(<?= $index + 1; ?>)" class="hover-shadow cursor">
									</div>
								<?php endforeach; ?>
	                          </div>
	                        </div>

	                        <div id="myModal" class="modal">
	                            <span class="close cursor" onclick="closeModal()">&times;</span>

	                            <div class="modal-content">
								<?php foreach ($serviceImages as $image): ?>
									<div class="mySlides">
										<img src="<?= $urlPath . $image; ?>" class="modalImagess">
									</div>
									<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
									<a class="next" onclick="plusSlides(1)">&#10095;</a>
								<?php endforeach; ?>
	                            </div>
	                        </div>
	                        <script>
function openModal() {
	document.getElementById("myModal").style.display = "block";
}
function closeModal() {
	document.getElementById("myModal").style.display = "none";
}
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
	showSlides(slideIndex += n);
}
function currentSlide(n) {
	showSlides(slideIndex = n);
}
function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("demo");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
	  slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
	  dots[i].className = dots[i].className.replace(" active", "");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active";
	captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
	            </div>
	                  </div>
	                </div>
	            </div>
	        </div>

	    </div> <div class="clearfix"></div>
	</div>
<!-- footer -->
<?php include('lib/footer.php'); ?>
<?php include('lib/htmlBody.php'); ?>
</body>
</html>
