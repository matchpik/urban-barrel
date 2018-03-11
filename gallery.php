<?php // Script 13.11 - index.php
/* This is the home page for this site. It displays:
 - The most recent quote (default)
 - OR, a randomly picked quote
 - OR, a randomly picked favourite quote */

 include('header.html');?>

<div id="info" style="height: auto; padding-top: 60px; padding-left: 20px; padding-right: 30px; margin: 0 auto; object-fit: contain;">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./assets/img/gallery/FB_IMG_1518545665057.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./assets/img/gallery/FB_IMG_1518545672579.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./assets/img/gallery/FB_IMG_1518545682956.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./assets/img/gallery/FB_IMG_1518545690332.jpg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./assets/img/gallery/FB_IMG_1518545698029.jpg" alt="Fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./assets/img/gallery/FB_IMG_1518545748145.jpg" alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./assets/img/gallery/FB_IMG_1518545753406.jpg" alt="Seventh slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./assets/img/gallery/FB_IMG_1518545763701.jpg" alt="Eigth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
           
<?php include('footer.html');?>