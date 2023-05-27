<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Renten - Car Rental Service HTML Template</title>
  <!-- site favicon -->
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg"/>
  <!-- fontawesome css link -->
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <!-- bootstrap css link -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- lightcase css link -->
  <link rel="stylesheet" href="assets/css/lightcase.css">
  <!-- animate css link -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- nice select css link -->
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <!-- datepicker css link -->
  <link rel="stylesheet" href="assets/css/datepicker.min.css">
  <!-- wickedpicker css link -->
  <link rel="stylesheet" href="assets/css/wickedpicker.min.css">
  <!-- jquery ui css link -->
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
  <!-- owl carousel css link -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <!-- main style css link -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->   

<!--  header-section start  -->
<header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <ul class="social-links">
              <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="header-info d-flex justify-content-center">
              <li>
                <i class="fa fa-map-marker"></i>
                <p>Medino, NY 10012, USA Mitro Road</p>
              </li>
              <li>
                <i class="fa fa-clock-o"></i>
                <p>Sat - Fri Day 08:00 am - 5.00 pm Sunday Holyday</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-3">
            <div class="header-action d-flex align-items-center justify-content-end">
              <div class="login-reg">
                  <a href="registration.html">Sign Up</a>
                  <a href="login.html">Sign in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
          <a class="site-logo site-title" href="index.html"><img src="assets/images/logo1.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <?php
            $id = $_GET['idCli'];
          ?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu mr-auto">
              <li><a href="indexlog.html?id=<?php echo $id ?>">Home</a></li>
              <li><a href="cars.php?id=<?php echo $id ?>">cars</a></li>
              <li><a href="reservation.html">reservation</a></li>
              <li><a href="contact.html">contact us</a></li>
              <li><a href="about.html">About</a>
            </ul>
          </div>
        </nav>
      </div>
    </div><!-- header-bottom end -->
  </header>
  <!--  header-section end  -->

  <!-- inner-apge-banner start -->
  <section class="inner-page-banner bg_img overlay-3" data-background="assets/images/inner-page-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-title">reservation</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#0">car list</a></li>
            <li>reservation</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <?php
    $id = $_GET['idCli'];
    $matricule = $_GET['matricule'];
    $type = $_GET['type'];
    $prix = $_GET['prix'];
    $image = $_GET['image'];
    ?>
  <!-- reservation-section start -->
  <section class="reservation-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="reservation-details-area">
            <div class="thumb">
              <img src="<?php echo $image ?>" width="1000px" alt="images">
            </div>
            <div class="content">
              <div class="content-block">
                <h3 class="car-name"><?php echo $type; ?></h3>
                <span class="price">Start form <?php echo $prix; ?>$ per day</span>
              </div>
              <form class="reservation-form" action="php/reservation_action.php?idCli=<?php echo $id; ?>&prix=<?php echo $prix; ?>" method="POST">
                <div class="content-block">
                  
                    
                  <div class="row">
                    <div class="form-group col-md-6">
                      <i class="fa fa-calendar"></i>
                      <input type='text'  name="datedeb" id="datedeb" class='form-control has-icon datepicker-here' data-language='en' placeholder="Pickup Date">
                    </div>
                    <input hidden type='text'  name="type" id="type" value="<?php echo $type; ?>" class='form-control has-icon datepicker-here' data-language='en' placeholder="Pickup Date">
                    <input hidden type='text'  name="image" id="image" <?php echo $image; ?> class='form-control has-icon datepicker-here' data-language='en' placeholder="Pickup Date">

                    <div class="form-group col-md-6">
                      <i class="fa fa-calendar"></i>
                      <input type='text' name="datefin" id="datefin" class='form-control has-icon datepicker-here' data-language='en' placeholder="Drop Off Date">
                    </div>
                    
                  </div>
                </div>
                <?php include("php/Client.php"); ?>
                <?php
                  $client = new Client();
                  $res = $client->findcli($id);
                  $cli = $res->fetch();
                ?>
                <div class="content-block">
                  <h3 class="title">personal information</h3>
                  <div class="row">
                    <div class="col-lg-6 form-group">
                      <input readonly style="cursor:no-drop;" type="text" name="name" value="<?php echo $cli[2] ?>" placeholder="Name">
                    </div>
                    <div class="col-lg-6 form-group">
                      <input readonly style="cursor:no-drop;" type="cin" name="cin" value="<?php echo $cli[1] ?>" placeholder="cin">
                    </div>
                    <div class="col-lg-6 form-group">
                      <input type="tel" name="phone" placeholder="Phone">
                    </div>
                    <input type="text" name="matricule" value="<?php echo $matricule ?>" hidden>
                    
                  </div>
                </div>
                <?php include("php/Chauffeur.php"); ?>
                <?php
                    $chauf = new Chauffeur();
                    $res = $chauf->list();
                ?>
                <div class="content-block">
                  <h3 class="title">Do you want a driver?</h3>
                  <div class="row">
                    <div class="col-lg-6 form-group">
                      <select name="chauf">
                        <option value="0">Select Driver</option>
                        <?php
                            while ($ligne = $res->fetch()) {
                        ?>
                      
                      <option value="<?php echo $ligne[0];?>"> <?php echo $ligne[1]; ?></option>
                      <?php
                        }
                        ?>
                        </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                      <button type="reset" class="cmn-btn bg-black">Cancel</button>
                      <button type="submit" onclick="return verifdate()" class="cmn-btn">reservation</button>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <aside class="sidebar">
            <div class="widget widget-all-cars">
              <h4 class="widget-title">our all cars</h4>
              <ul class="cars-list">
                <li>mistubisshi</li>
                <li>forester subar</li>
                <li>subary liberty</li>
                <li>pajero range</li>
                <li>volkswagen</li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- reservation-section end -->

  <!-- footer-section start -->
  <footer class="footer-section">
    <div class="footer-top pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-8">
            <div class="footer-widget widget-about">
              <div class="widget-about-content">
                <a href="index.html" class="footer-logo"><img src="assets/images/logo-footer.png" alt="logo"></a>
                <p>Lorem ipsum dolor sit amet, congue placeranec. Leo faucibus sed eleifend bibendum n vehicula nulla mauris nulla ipsum neque sed. Gravida egestas fermentum urna, velit sed. </p>
                <ul class="social-links">
                  <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4">
            <div class="footer-widget widget-menu">
              <h4 class="widget-title">our cars</h4>
              <ul>
                <li><a href="#0">mistubishi lancer</a></li>
                <li><a href="#0">forester subar</a></li>
                <li><a href="#0">mirage ange</a></li>
                <li><a href="#0">pajero range</a></li>
                <li><a href="#0">subaru liberty</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-4">
            <div class="footer-widget widget-menu">
              <h4 class="widget-title">useful link</h4>
              <ul>
                <li><a href="#0">about</a></li>
                <li><a href="#0">reservation</a></li>
                <li><a href="#0">faq</a></li>
                <li><a href="#0">blog</a></li>
                <li><a href="#0">car list</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-sm-8">
            <div class="footer-widget widget-address">
              <h4 class="widget-title">contact with us</h4>
              <ul>
                <li>
                  <i class="fa fa-map-marker"></i>
                  <span>Medino, NY 10012, Kitaniya Road Nikamobo Libono USA</span>
                </li>
                <li>
                  <i class="fa fa-envelope"></i>
                  <span>www.carrentalinfo2457@gmail.com www.oursupport/info@gmail.com</span>
                </li>
                <li>
                  <i class="fa fa-phone-square"></i>
                  <span>+88014578541-09 , +0885424-542-254 +88047859-4541</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-sm-6">
            <p class="copy-right-text"><a href="templateshub.net">Templates Hub</a></p>
          </div>
          <div class="col-sm-6">
            <ul class="payment-method d-flex justify-content-end">
              <li>We accept</li>
              <li><img src="assets/images/money-method/1.png" alt="image"></li>
              <li><img src="assets/images/money-method/2.png" alt="image"></li>
              <li><img src="assets/images/money-method/3.png" alt="image"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer-section end -->
  
  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->
  <script src="assets/js/controle.js"></script>

  <!-- jquery js link -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- jquery migrate js link -->
  <script src="assets/js/jquery-migrate-3.0.0.js"></script>
  <!-- bootstrap js link -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- lightcase js link -->
  <script src="assets/js/lightcase.js"></script>
  <!-- wow js link -->
  <script src="assets/js/wow.min.js"></script>
  <!-- nice select js link -->
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <!-- datepicker js link -->
  <script src="assets/js/datepicker.min.js"></script>
  <script src="assets/js/datepicker.en.js"></script>
  <!-- wickedpicker js link -->
  <script src="assets/js/wickedpicker.min.js"></script>
  <!-- owl carousel js link -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- jquery ui js link -->
  <script src="assets/js/jquery-ui.min.js"></script>
  <!-- main js link -->
  <script src="assets/js/main.js"></script>
</body>

</html>