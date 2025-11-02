<!DOCTYPE html>
<html lang="tr">
<head>
  <title>BC Hotel</title>

  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=8; IE=10; IE=11" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no" />

  <?php include "includes/head.php"; ?>

</head>
<body>

<div class="app ui-page">

  <?php include "includes/header.php"; ?>

  <div class="inner-page__header">
    <div class="inner-page__photo"><img src="assets/images/sayfa/bkg.jpeg" alt="BC Hotel"></div>
    <div class="inner-page__heading">
      <div class="container">
        <div class="inner-page__heading-left ui-txt-center">
          <h2 class="title">Contact</h2>
        </div>
        <div class="breadcrumb">
          <ul class="ui-d-flex">
            <li>
              <a class="not" href="index.php"><span class="icon"><?php include "includes/icons/fa.home.light.php"; ?></span></a>
            </li>
            <li><a>Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="inner-page__wrapper">

    <div class="container">

      <div class="contact">
        <div class="contact-map"><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=London%20Eye%2C%20London%2C%20United%20Kingdom&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" aria-label="London Eye, London, United Kingdom"></iframe></div>
        <div class="contact-iletisim">
          <div class="contact-iletisim__box row ui-gutter-30">
            <div class="contact-form col-md-7">
              <div class="title">Get In Touch</div>
              <div class="text">Your email address will not be published. Required fields are marked *</div>
              <form action="">
                <ul class="row">
                  <li class="col-lg-4"><input type="text" placeholder="Name"></li>
                  <li class="col-lg-4"><input type="text" placeholder="Email"></li>
                  <li class="col-lg-4"><input type="text" placeholder="WebSite"></li>
                </ul>
                <ul class="row">
                  <li class="col-lg-12"><textarea placeholder="Message" name="" id="" cols="30" rows="10"></textarea></li>
                </ul>
                <ul class="row">
                  <li class="col-lg-3"><button class="button ui-button-style-2 ui-color-dark">Submit</button></li>
                </ul>
              </form>
            </div>
            <div class="contact-local col-md-4">
              <div class="baslik">Office</div>
              <div class="row local-box">
                <div class="col-md-12">
                  <div class="title">London Office</div>
                  <div class="text"><h3>Add:</h3>Box 565, Pinney’s Beach, Nevis, West Indies, Caribbean</div>
                  <div class="text"><h3>Phone:</h3>+844 – 123 456 78</div>
                  <div class="text"><h3>Fax:</h3>+844 – 123 456 78</div>
                  <div class="text"><h3>Email:</h3>contact@example.com</div>
                </div>
              </div>
              <div class="row local-box">
                <div class="col-md-12">
                  <div class="title">NewYork Office</div>
                  <div class="text"><h3>Add:</h3>Box 565, Pinney’s Beach, Nevis, West Indies, Caribbean</div>
                  <div class="text"><h3>Phone:</h3>+844 – 123 456 78</div>
                  <div class="text"><h3>Fax:</h3>+844 – 123 456 78</div>
                  <div class="text"><h3>Email:</h3>contact@example.com</div>
                </div>
              </div>
            </div>
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