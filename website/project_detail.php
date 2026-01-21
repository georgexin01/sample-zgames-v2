<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // init head
    $projectId = $_GET['id'] ?? '5'; // Default to project 5 if no ID
    $pageName = 'Project Detail';
    include('lib/htmlHead.php');

    $urlPath = '/uploads/images/projects/';

    $projects = [
        '5' => [
            'title' => 'Project 1',
            'images' => [
                '502340_1616723113.jpeg',
                '639585_1616723113.jpeg',
                '195323_1616723113.jpeg',
                '665387_1616723113.jpeg',
                '353726_1616723113.jpeg',
                '209937_1616723134.jpeg',
                '848351_1616723134.jpeg',
                '172641_1616723134.jpeg',
                '64983_1616723169.jpeg',
                '256992_1616723169.jpeg',
                '261528_1616723169.jpeg',
                '491089_1616723169.jpeg',
                '687613_1616723205.jpeg',
                '710581_1616723205.jpeg',
                '673390_1616723205.jpeg',
                '197450_1616723205.jpeg',
                '930120_1616723237.jpeg',
                '826523_1616723237.jpeg',
                '426538_1616723237.jpeg',
                '241509_1616723237.jpeg',
                '464504_1616723313.jpeg',
                '107378_1616723313.jpeg',
                '660905_1616723313.jpeg',
                '221633_1616723313.jpeg',
                '224275_1616723362.jpeg',
                '44837_1616723362.jpeg',
                '723430_1616723362.jpeg',
                '956922_1616723362.jpeg',
                '959018_1616723461.jpeg',
                '695257_1616723461.jpeg',
                '646496_1616723461.jpeg',
                '344626_1616723461.jpeg',
                '001.png',
                '002.png',
                '003.png',
                '004.png',
                '005.png',
                '006.png',
                '007.png',
                '008.png',
                '009.png',
                '010.png'
            ]
        ],
        '6' => [
            'title' => 'Project 2',
            'images' => [
                '828434_1616723535.jpeg',
                '958387_1616723536.jpeg',
                '256538_1616723536.jpeg',
                '922193_1616723536.jpeg',
                '866779_1616723570.jpeg',
                '321333_1616723570.jpeg',
                '145265_1616723570.jpeg',
                '889522_1616723570.jpeg',
                '235458_1616723614.jpeg',
                '958600_1616723614.jpeg',
                '520893_1616723614.jpeg',
                '591405_1616723614.jpeg',
                '387061_1616723648.jpeg',
                '674649_1616723648.jpeg',
                '831199_1616723648.jpeg',
                '381718_1616723649.jpeg',
                '550902_1616723692.jpeg',
                '563198_1616723692.jpeg',
                '485571_1616723692.jpeg',
                '905085_1616723692.jpeg',
                '978270_1616723740.jpeg',
                '981430_1616723740.jpeg',
                '856887_1616723740.jpeg',
                '107122_1616723740.jpeg',
                '858763_1616723818.jpeg',
                '869230_1616723818.jpeg',
                '571142_1616723818.jpeg',
                '466953_1616723818.jpeg',
                '525955_1616723870.jpeg',
                '675638_1616723870.jpeg',
                '627936_1616723870.jpeg',
                '656046_1616723870.jpeg',
                '149125_1616723917.jpeg',
                '863415_1616723918.jpeg',
                '146451_1616723918.jpeg',
                '011.png',
                '012.png',
                '013.png',
                '014.png',
                '015.png',
                '016.png',
                '017.png',
                '018.png',
                '019.png',
                '020.png'
            ]
        ]
    ];

    $currentProject = $projects[$projectId] ?? $projects['5']; // Default to project 5
    $projectImages = $currentProject['images'];
    $projectTitle = $currentProject['title'];
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
	                    <h1><?= $projectTitle; ?></h1>
	                    <ul class="moverspackers-breadcrumb">
	                        <li><a href="/"><?= __('project.breadcrumb_home'); ?></a></li>
	                        <li><a href="/project"><?= __('project.breadcrumb_project'); ?></a></li><li><?= $projectTitle; ?></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="moverspackers-main-content">
	        <div class="moverspackers-main-section">
	            <div class="container">
	                <div class="row">
	                    <div class="moverspackers-fancy-title">

	                        <div class="section-head">
	                            <div class="mt-separator-outer separator-center" >
	                              <div class="mt-separator" style="margin-bottom: 0px;">
	                                <h2 class=" text-uppercase sep-line-one "><?= $projectTitle; ?></h2>
	                              </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-12">
	                        <div class="moverspackers-services moverspackers-services-grid service-all text-center">
	                          <div class="row">
								<?php foreach ($projectImages as $index => $image): ?>
									<div class="column col-md-3 cols-md-3" style="padding: 5px;padding-bottom: 20px">
										<img src="<?= $urlPath . $image; ?>" onclick="openModal();currentSlide(<?= $index + 1; ?>)" class="hover-shadow cursor">
									</div>
								<?php endforeach; ?>
	                          </div>
	                        </div>
	                        <div id="myModal" class="modal">
	                            <span class="close cursor" onclick="closeModal()">&times;</span>
	                            <div class="modal-content">
								<?php foreach ($projectImages as $image): ?>
									<div class="mySlides">
										<img src="<?= $urlPath . $image; ?>" class="modalImagess">
									</div>
									<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
									<a class="next" onclick="plusSlides(1)">&#10095;</a>
								<?php endforeach; ?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	<div class="clearfix"></div>

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

<!-- footer -->
<?php include('lib/footer.php'); ?>
<?php include('lib/htmlBody.php'); ?>
</body>
</html>
