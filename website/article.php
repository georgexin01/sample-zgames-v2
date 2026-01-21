<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // Article data array - stores all article information (MySQL dummy data)
    $articles = array(
        1 => array(
            'title' => 'Packaging By Our Company in Johor Bahru',
            'date' => '2021-03-24',
            'date_display' => 'Mar 24',
            'author' => 'T&S Machiner Movers',
            'content' => '<p>引現這而們世正是則接路解名氣超要驚思用加老，雖主放有作心是數：工了唱土早間下結是親銷的畫不腳爸字飯王，小感向大生，視任資點好論選麼線庭簡十是物第詩我是質的竟一小作處，己一生香新？家面毛外但投手沒發定我遊公開……毛間去力則身戰中動臺簡果緊人路地五目不近象意：那約事！女內山取不研事、交日著生構麼影樣的放大你狀星越自但長我然說美們軍樂提時一相錢學獨上起度同園資長。會用長少旅！市老題美行投利？商照想校習約子，男者了百從雙，的許先維喜快就當念心，念調正顧半到做日因生向力的式速學，兒賽過。</p>',
            'youtube' => 'ev1sAaRXV7w',
            'thumbnail' => 'uploads/images/articles/369442_1615348283.jpeg',
            'images' => array(
                'uploads/images/articles/577016_1615348104.jpeg',
                'uploads/images/articles/676200_1615348104.jpeg',
                'uploads/images/articles/37981_1615348104.jpeg'
            )
        ),
        2 => array(
            'title' => 'Article 2',
            'date' => '2021-03-10',
            'date_display' => 'Mar 10',
            'author' => 'T&S Machiner Movers',
            'content' => '<p>市老題美行投利？商照想校習約子，男者了百從雙，的許先維喜快就當念心，念調正顧半到做日因生向力的式速學，兒賽過。</p>',
            'youtube' => '',
            'thumbnail' => 'uploads/images/articles/924201_1615348169.jpeg',
            'images' => array(
                'uploads/images/articles/762457_1615364345.jpeg',
                'uploads/images/articles/945149_1615364345.jpeg',
                'uploads/images/articles/919831_1615364345.jpeg',
                'uploads/images/articles/657726_1615364345.jpeg',
                'uploads/images/articles/236144_1615364727.jpeg',
                'uploads/images/articles/61592_1615364728.jpeg',
                'uploads/images/articles/790877_1615364728.jpeg'
            )
        )
    );

    $id = $_GET['id'] ?? 0;
    if (!isset($articles[$id])) {
        header('Location: /home');
        exit;
    }
    $article = $articles[$id];

    // init head
    $pageName = 'Article';
    include('lib/htmlHead.php');
?>
</head>
<body>
<div class="moverspackers-main-wrapper">
<!-- header -->
<?php include('lib/header.php'); ?>

    <div class="moverspackers-subheader" style="background-image: url(/images/494691_1615364472.jpg);">
        <span class="moverspackers-dark-transparent"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?= htmlspecialchars($article['title']); ?></h1>
                    <ul class="moverspackers-breadcrumb">
                        <li><a href="/"><?= __('nav.home'); ?></a></li>
                        <li><a href="/article"><?= __('nav.article'); ?></a></li>
                        <li><?= htmlspecialchars($article['title']); ?></li>
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
                        <div class="moverspackers-thumb-heading">
                            <h2><?= htmlspecialchars($article['title']); ?></h2>
                            <ul class="moverspackers-blog-option">
                                <li><?= __('article.author'); ?>: <?= htmlspecialchars($article['author']); ?> | <?= htmlspecialchars($article['date']); ?></li>
                            </ul>
                        </div>
                        <div class="moverspackers-rich-editor" style="text-align: justify;">
                            <?= $article['content']; ?>
                        </div>

                        <?php if (!empty($article['youtube'])): ?>
                        <div class="col-md-5">
                            <iframe width="100%" height="250px" src="https://www.youtube.com/embed/<?= htmlspecialchars($article['youtube']); ?>"></iframe>
                        </div>
                        <?php endif; ?>

<style>
.article-this img{
    width: 100%;
    height: 100px;
    object-fit: cover;
    border: 1px solid #555;
    margin: 5px 0;
}
.mySlides{
    display: none;
    height: 100%;
}
.row > .column {
    padding: 0 8px;
}
.row:after {
    content: "";
    display: table;
    clear: both;
}
.column {
    float: left;
    width: 25%;
    padding-bottom: 20px;
}
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: auto;
    height: 100%;
    overflow: auto;
    background-color: #000000c9;
}
.modal-content {
    position: relative;
    background-color: transparent;
    margin: auto;
    padding: 0;
    width: auto;
    height: 95%;
}
.hover-shadow:hover {opacity: 0.5;transition: 0.5s;}
.close {
    color: white;
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: red;
    text-decoration: none;
    cursor: pointer;
}
.cursor {
    cursor: pointer;
}
.prev,
.next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
}
.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}
.prev:hover,
.next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}
.demo {
    opacity: 0.6;
}
.active,
.demo:hover {
    opacity: 1;
}
.modalImagess {
    margin: auto;
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
@media (min-width: 768px) and (max-width: 990px){
    .moverspackers-main-content .col-md-4{
        width: 50%;
    }
    .moverspackers-main-content .col-md-5{
        width: 50%;
    }
    .moverspackers-main-content .col-md-7{
        width: 50%;
    }
}
@media (max-width: 480px){
    .moverspackers-main-content .col-md-4{
        width: 49.36%;
        padding: 0 1% 5px;
    }
}
</style>

                        <div class="col-md-7 article-this" style="justify-content: flex-end;">
                            <?php foreach ($article['images'] as $index => $image): ?>
                            <div class="col-md-4"><img src="/<?= htmlspecialchars($image); ?>" onclick="openModal();currentSlide(<?= $index + 1; ?>)" class="hover-shadow cursor"></div>
                            <?php endforeach; ?>
                        </div>

                        <div id="myModal" class="modal">
                            <span class="close cursor" onclick="closeModal()">&times;</span>
                            <div class="modal-content">
                                <?php foreach ($article['images'] as $image): ?>
                                <div class="mySlides">
                                    <img src="/<?= htmlspecialchars($image); ?>" class="modalImagess">
                                </div>
                                <?php endforeach; ?>
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                        </div>

                        <div class="comments-area"></div>
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
    if (dots.length > 0) {
        dots[slideIndex-1].className += " active";
    }
}
</script>

<!-- footer -->
<?php include('lib/footer.php'); ?>
<?php include('lib/htmlBody.php'); ?>
</body>
</html>
