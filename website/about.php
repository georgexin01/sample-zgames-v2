<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // init head
    $pageName = 'About Us';
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
            <div class="row" style="margin-bottom: 40px;">
                <div class="col-md-12">
                    <h1><?= __('about.title'); ?></h1>
                    <ul class="moverspackers-breadcrumb">
                        <li><a href="/"><?= __('about.breadcrumb_home'); ?></a></li>
                        <li><?= __('about.breadcrumb_about'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="moverspackers-main-content moverspackers-aboutus-padding">
        <div class="moverspackers-main-section moverspackers-aboutusfull">
            <div class="container" style="width:85%;margin-left:7.5%;margin-right:7.5%">
                    <div class="row">
                        <div class="col-md-8 cols-md-8">
                            <div class="moverspackers-aboutus">
                                        <h2 class="moverspackers-aboutus-heading"><?= __('about.title'); ?> <span> </span>
                                                                            </h2>
                                        <p style="text-align: justify;"><p style="text-align:justify"><?= __('about.description'); ?></p>

<p style="text-align:justify"><?= __('about.additional'); ?></p>

<p>&nbsp;</p></p>
                            </div>
                        </div>
                        <div class="col-md-4 cols-md-4 cop">
                            <div class="moverspackers-aboutus-thumb kimp" >
                                <div class="moverspackers">
                                    <div class="moverspackers-banner-layer" style=" background-color: #ffffff;padding:40px 0 40px 0;">
                                        <img src="images/about/414596_1616656111.jpeg" onclick="openModal();currentSlide(1)" alt="" style="width: 100%; height: 350px; object-fit: contain;margin-left:auto;margin-right:auto;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 cols-md-4 desktop1 cop">
                            <div class="moverspackers-aboutus-thumb kimp" >
                                <div class="moverspackers">
                                    <div class="moverspackers-banner-layer" style=" background-color: #ffffff;padding:40px 0 40px 0;">
                                        <img src="images/about/86455_1615344146.jpeg" onclick="openModal();currentSlide(2)" alt="" style="width: 100%; height: 350px; object-fit: contain;margin-left:auto;margin-right:auto;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 cols-md-8">
                            <div class="moverspackers-aboutus">
                                <h2 class="moverspackers-aboutus-heading">CIDB <span><?=  __('about.cidb_title') ?> </span></h2>
                                <p style="text-align: justify;"><p style="text-align:justify"><?=  __('about.cidb_description') ?></p> </p>
                            </div>
                        </div>
                        <div class="col-md-4 cols-md-4 mobile1">
                            <div class="moverspackers-aboutus-thumb kimp" >
                                <div class="moverspackers">
                                    <div class="moverspackers-banner-layer"style=" background-color:white;padding:40px 0 40px 0;">
                                        <img src="images/about/86455_1615344146.jpeg" onclick="openModal();currentSlide(2)" alt="" style="width: 100%; height: 400px; object-fit: contain;margin-left:auto;margin-right:auto;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <div class="mySlides">
                <img src="uploads/images/services/414596_1616656111.jpeg" class="modalImagess">
            </div>
            <div class="mySlides">
                <img src="images/about/86455_1615344146.jpeg" class="modalImagess">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
</div>

<!-- Custom Script -->
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
