<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // init head
    $pageName = 'Our Equipment';
    include('lib/htmlHead.php');

    $urlPath = '/uploads/images/equipments/';
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
					<h1><?= __('equipment.title'); ?></h1>
					<ul class="moverspackers-breadcrumb">
						<li><a href="/"><?= __('equipment.breadcrumb_home'); ?></a></li>
						<li><?= __('equipment.breadcrumb_equipment'); ?></li>
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
						<h2><?= __('equipment.our'); ?><span> <?= __('equipment.equipment'); ?></span></h2>
						<p><?= __('equipment.description'); ?></p>
					</div>
					<div class="col-md-12">
						<?php
						$equipments = [
							['image' => '963167_1616722635.jpeg', 'title' => 'Komatsu Forklift', 'desc' => 'Max Lift up 5.8 ton'],
							['image' => '146392_1616722635.jpeg', 'title' => 'Mitsubishi Forklift', 'desc' => 'Max Lift up 10 ton'],
							['image' => '880790_1616722636.jpeg', 'title' => 'Self Loader', 'desc' => 'Max Lift up 17 ton'],
							['image' => '279174_1616722636.jpeg', 'title' => 'Self Loader', 'desc' => 'Max Lift up 17 ton'],
							['image' => '16947_1616722735.jpeg', 'title' => 'Lowbed', 'desc' => '41 ton, Long 45ft x 10'],
							['image' => '542264_1616722735.jpeg', 'title' => 'Fassi Crane', 'desc' => 'Max Lift up 16 ton'],
							['image' => '92445_1616722735.jpeg', 'title' => 'Toyota Forklift', 'desc' => 'Max Lift up 4 ton']
						];
						?>
						<div class="moverspackers-services moverspackers-services-grid service-all text-center">
							<div class="row">
								<?php foreach ($equipments as $index => $equipment): ?>
									<div class="column col-md-3 cols-md-3" style="padding-left: 5px;padding-right: 5px">
										<img src="<?= $urlPath . $equipment['image']; ?>" onclick="openModal();currentSlide(<?= $index + 1; ?>)" class="hover-shadow cursor">
										<div class="wed">
											<p><?= $equipment['title']; ?></p>
											<p><?= $equipment['desc']; ?></p>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>

						<div id="myModal" class="modal">
							<span class="close cursor" onclick="closeModal()">&times;</span>
							<div class="modal-content">
								<?php foreach ($equipments as $equipment): ?>
									<div class="mySlides">
										<img src="<?= $urlPath . $equipment['image']; ?>" class="modalImagess">
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

</div>

<!-- footer -->
<?php include('lib/footer.php'); ?>
<?php include('lib/htmlBody.php'); ?>
</body>
</html>
