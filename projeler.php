<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Konstruktic</title>

  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=8; IE=10; IE=11" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no" />

  
  <?php include "includes/head.php"; ?>

</head>
<body>

<div class="header app ui-page">

  <?php include "includes/header.php"; ?>

  <div class="inner-page__header">
    <div class="inner-page__photo"><img src="assets/images/sayfa/bkg.jpeg" alt="Konstruktic"></div>
    <div class="inner-page__heading">
      <div class="container">
        <div class="inner-page__heading-left ui-txt-center">
          <h2 class="title">PROJELER</h2>
          <div class="text"></div>
        </div>
        <div class="breadcrumb">
          <ul class="ui-d-flex">
            <li>
              <a class="not" href="index.php"><span class="icon"><?php include "includes/icons/fa.home.light.php"; ?></span></a>
            </li>
            <li><a>PROJE</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="project">
    <div class="container">
      <div class="project-menu">
        <div class="section-header">
          <div class="title">Featured Work</div>
        </div>
        <div class="project-gallery">

          <div class="row no-gutters">
            <div class="gallery-box col-md-4">
              <img src="assets/images/project/1.jpeg" alt="">
              <div class="gallery-box__text">
                <div class="min-text">BUİLDİNG</div>
                <div class="title">Green House <br> Neighbourhood</div>
              </div>
            </div>
            <div class="gallery-box col-md-4">
              <img src="assets/images/project/2.jpeg" alt="">
              <div class="gallery-box__text">
                <div class="min-text">BUİLDİNG</div>
                <div class="title">Social Housing <br> in Valleca</div>
              </div>
            </div>
            <div class="gallery-box col-md-4">
              <img src="assets/images/project/3.jpeg" alt="">
              <div class="gallery-box__text">
                <div class="min-text">BUİLDİNG</div>
                <div class="title">Sience lab <br> building</div>
              </div>
            </div>
          </div>

          <div class="row no-gutters">
            <div class="gallery-box col-md-4">
              <img src="assets/images/project/4.jpeg" alt="">
              <div class="gallery-box__text">
                <div class="min-text">OFFİCE</div>
                <div class="title">Golden Gate <br> Bridge</div>
              </div>
            </div>
            <div class="gallery-box col-md-4">
              <img src="assets/images/project/5.jpeg" alt="">
              <div class="gallery-box__text">
                <div class="min-text">INTERIOR</div>
                <div class="title">Great museum</div>
              </div>
            </div>
            <div class="gallery-box col-md-4">
              <img src="assets/images/project/6.jpeg" alt="">
              <div class="gallery-box__text">
                <div class="min-text">CONSTRUCTİON</div>
                <div class="title">Magdalen <br> Catholic <br> School</div>
              </div>
            </div>
          </div>

          <div class="project-button">
           <div class="button ui-button-style-2 ui-color-dark">View More <i class="fa-solid fa-arrow-right-long"></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include "includes/footer.php"; ?>

</div>

<?php include "includes/js.app.php"; ?>

</body>
</html>