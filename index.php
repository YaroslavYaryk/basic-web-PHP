<?php
	  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing</title>
  <link rel="stylesheet" href="css/lending.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
  <div class="containers">
    <header class="header__container">
      <div class="header">
        <div class="header__logo">
          <img src="img/lending/logo.png" alt="">
          <span>MGym</span>
        </div>
        <nav>
          <div class="topnav" id="myTopnav">
          <a class="topnav__item" href="../index.php">HOME</a>
				<a class="topnav__item" href="../trainers/trainers.php">TRAINERS</a>
				<a class="topnav__item" href="../services/services.php">SERVICES</a>
				<a class="topnav__item" href="../pricing/pricing.php">PRICING</a>
        <?php
          if ($_SESSION["user"]){
            echo '<a class="topnav__item create-account" href="../views/logout.php">Logout</a>';
          }
          else{
            echo '<a class="topnav__item create-account" href="../registration/registration.php">CREATE ACCOUNT</a>';

          }
          ?>  
            <a href="#" id="menu" class="icon">&#9776</a>
          </div>
        </nav>
      </div>
      <div class="header__middle">
        <div class="header__middle-title">Excercise<br />makes you<br />heathier</div>
        <div class="header__middle-button">GET STARTED</div>
      </div>
    </header>
    <div class="section1">
      <div class="container">
        <div class="container__header">
          <div class="container__title">Build your<br /> body with us</div>
          <div class="container__subtitle">Get the best facilities from us to support your<br />
            health and focus</div>
        </div>

        <div class="container__body">
          <div class="row">
            <div class=" container__body-item col-lg-3 col-sm-6 col-xs-6">
              <div class="container__body-title">
                25
              </div>
              <div class="container__body-content">
                Year experience
              </div>
            </div>
            <div class="container__body-item col-lg-3 col-sm-6 col-xs-6">
              <div class="container__body-title">
                150
              </div>
              <div class="container__body-content">
                Excelent equipments
              </div>
            </div>
            <div class="container__body-item col-lg-3 col-sm-6 col-xs-6">
              <div class="container__body-title">
                250
              </div>
              <div class="container__body-content">
                Expert trainers
              </div>
            </div>
            <div class="container__body-item col-lg-3 col-sm-6 col-xs-6">
              <div class="container__body-title">
                9000+
              </div>
              <div class="container__body-content">
                Good Rewiews
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="section2">
      <div class="section2__title">
        Build with our<br />personal trainers
      </div>
      <div class="containers">
        <div class="row">
          <div class="section2__item col-sm-4 col-xs-12 ">
            <div class="section2__item-image">
              <img class="item__image" src="img/lending/trainer1.jpg" alt="">
            </div>
            <div class="section2__item-text">
              Keith Lawrence
            </div>
          </div>
          <div class="section2__item col-sm-4 col-xs-12 ">
            <div class="section2__item-image">
              <img class="item__image" src="img/lending/trainer2.jpg" alt="">
            </div>
            <div class="section2__item-text">
              Mat Forzaglia
            </div>

          </div>
          <div class="section2__item col-sm-4 col-xs-12 ">
            <div class="section2__item-image">
              <img class="item__image" src="img/lending/trainer3.jpg" alt="">
            </div>
            <div class="section2__item-text">
              Zack Thompson
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="section3">
      <div class="section2__title">
        Pricing plan
      </div>
      <div class="conteiner">
        <div class="row">
          <div class="section3__item col-md-4 ">
            <div class="section3__header">
              <div class="section3__header-title">BASIC</div>
              <div class="section3__header-item">20$</div>
            </div>
            <div class="section3__body">
              <ul type="none" class="section3__list">
                <li class="section3__link">unlimited gym access</li>
                <li class="section3__link">1 training program</li>
                <li class="section3__link">free fitness consultation</li>
              </ul>
            </div>
            <div class="section3__footer">
              <div class="section3__footer-text">
                JOIN NOW
              </div>
            </div>

          </div>
          <div class="section3__item col-md-4 ">
            <div class="section3__header">
              <div class="section3__header-title">PREMIUM</div>
              <div class="section3__header-item">35$</div>
            </div>
            <div class="section3__body">
              <ul type="none" class="section3__list">
                <li class="section3__link">unlimited gym access</li>
                <li class="section3__link">5 training programs</li>
                <li class="section3__link">free fitness consultation</li>
                <li class="section3__link">personal trainer</li>
              </ul>
            </div>
            <div class="section3__footer">
              <div class="section3__footer-text section3__footer-active">
                JOIN NOW
              </div>
            </div>

          </div>
          <div class="section3__item col-md-4 ">
            <div class="section3__header">
              <div class="section3__header-title">ELITE</div>
              <div class="section3__header-item">45$</div>
            </div>
            <div class="section3__body">
              <ul type="none" class="section3__list">
                <li class="section3__link">unlimited gym access</li>
                <li class="section3__link">1 training program</li>
                <li class="section3__link">free fitness consultation</li>
                <li class="section3__link">personal trainer</li>
                <li class="section3__link">50% off drinks</li>
              </ul>
            </div>
            <div class="section3__footer">
              <div class="section3__footer-text">
                JOIN NOW
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>

<?php
  echo $_SESSION;
  require "blocks/footer.php";
?>