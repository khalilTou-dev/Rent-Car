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
              <div class="lag-select-area">
                <select>
                  <option>ENG</option>
                  <option>RUS</option>
                  <option>BAN</option>
                </select>
              </div>
              <div class="login-reg">
                  <a href="#0">Sign Up</a>
                  <a href="#0">Sign in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
            $id = $_GET['id'];
            $cin = $_GET['cin'];
            ?>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
          <a class="site-logo site-title" href="index.html"><img src="assets/images/logo1.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu mr-auto">
              <li><a href="indexlog.php?id=<?php echo $id ?>">Home</a></li>
              <li><a href="cars.php?id=<?php echo $id ?>">cars</a></li>
              <li><a href="facture.php?id=<?php echo $id; ?>&cin=<?php echo $cin; ?>">Mes Reservation</a></li>
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
          <h2 class="page-title">Facturisation</h2>
          <ol class="page-list">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li>facture</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- inner-apge-banner end -->

  <!-- blog-section start -->
  
        <div class="col-lg-10">
          <aside class="sidebar">
            <?php include("php/Reservation.php"); ?>
                <?php
                    $cin = $_GET['cin'];
                    $reservation = new Reservation();
                    $res = $reservation->listres($cin);
                ?>
            <?php include("php/Chauffeur.php"); ?>
            <?php $chauf = new Chauffeur();?>
            <?php
            $i = 0;
                while ($ligne = $res->fetch()) {
                    $i++;
            ?>
            
                <?php
                    
                    $ch = $chauf->findchauf($ligne[8]);
                    
                ?>
            <div style="margin-left: 200px;margin-top: 50px;" class="widget widget-archive">
              <h4 class="widget-title">Facture N°<?php echo $i ?></h4>
              <div class="widget-body">
              <table class="table">
                <tbody>
                    <tr>
                    <th scope="row">Contrat de location N°</th>
                    <td><?php echo $ligne[0] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Vehicule</th>
                    <td><?php echo $ligne[4] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">date départ</th>
                    <td><?php echo $ligne[5] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">date reprise</th>
                    <td><?php echo $ligne[6] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">nombre du jours</th>
                    <td>
                        <?php 
                            $date1 = strtotime($ligne[5]);
                            $date2 = strtotime($ligne[6]);
                            $diff = abs($date1 - $date2);
                            $retour = array();
 
                            $tmp = $diff;
                            $retour['second'] = $tmp % 60;
                        
                            $tmp = floor( ($tmp - $retour['second']) /60 );
                            $retour['minute'] = $tmp % 60;
                        
                            $tmp = floor( ($tmp - $retour['minute'])/60 );
                            $retour['hour'] = $tmp % 24;
                        
                            $tmp = floor( ($tmp - $retour['hour'])  /24 );
                            $retour['day'] = $tmp;
                            echo $retour['day'];
                        ?>
                    </td>
                    </tr>
                    <tr>
                    <th scope="row">Locataire</th>
                    <td><?php echo $ligne[1] ?></td>
                    </tr>
                    <tr>
                        
                    <th scope="row">Chauffeur</th>
                    <?php if ($ligne[8]!= 0) {$ligneCh = $ch->fetch();?>
                    <td><?php echo $ligneCh[1] ?></td>
                    <?php }else{?>
                    <td>No</td>
                    <?php } ?>
                    </tr>
                    <tr>
                    <th scope="row">Facturisation</th>
                    <td><?php echo $ligne[7] ?> dt</td>
                    </tr>
                </tbody>
                </table>
              </div>
            </div><!-- widget end -->
            <?php
                }
            ?>
        </div>
      </div>
    </div>
  </section>
  <!-- blog-section end -->

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