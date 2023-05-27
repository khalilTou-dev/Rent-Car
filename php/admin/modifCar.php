<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Renten - Car Rental Service HTML Template</title>
    <!-- site favicon -->
    <link rel="shortcut icon" type="image/png" href="../../assets/images/favicon.jpg" />
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="../../assets/css/fontawesome.min.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <!-- lightcase css link -->
    <link rel="stylesheet" href="../../assets/css/lightcase.css">
    <!-- animate css link -->
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <!-- nice select css link -->
    <link rel="stylesheet" href="../../assets/css/nice-select.css">
    <!-- datepicker css link -->
    <link rel="stylesheet" href="../../assets/css/datepicker.min.css">
    <!-- wickedpicker css link -->
    <link rel="stylesheet" href="../../assets/css/wickedpicker.min.css">
    <!-- jquery ui css link -->
    <link rel="stylesheet" href="../../assets/css/jquery-ui.min.css">
    <!-- owl carousel css link -->
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="../../assets/css/main.css">
</head>

<body>

    <!-- preloader start -->
    <div id="preloader"></div>
    <!-- preloader end -->

    <!--  header-section start  -->
    <header class="header-section">

        <div class="header-bottom">
            <div class="container">
                <nav class="navbar navbar-expand-lg p-0">
                    <a class="site-logo site-title" href="indexlog.php"><img src="../../assets/images/logo1.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="menu-toggle"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav main-menu mr-auto">
                            <li><a href="../../logadmin.html">Home</a></li>
                            <li><a href="cars.php">cars</a></li>
                            <li><a href="listeReservation.php">mes Reservations</a></li>
                            <li><a href="listeChauffeur.php">Les chauffeurs</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div><!-- header-bottom end -->
    </header>
    <!--  header-section end  -->
    <?php
        $matricule = $_GET['matricule'];
        $marque = $_GET['marque'];
        $type = $_GET['type'];
        $prix = $_GET['prix'];
    ?>
    <div class="col-lg-9">
        <form  style="margin-top: 150px;margin-left:100px;" action="./modifierCar.php" method="POST">
            <div class="frm-group">
                <label class="small mb-1" style="font-size:15px">Matricule Véhicule</label>
                <input readonly style="cursor: no-drop;" type="text" name="matricule" id="matricule" value="<?php echo $matricule?>">
            </div>
            <div class="frm-group">
                <label class="small mb-1" style="font-size:15px" >Marque Véhicule</label>
                <input type="text" name="marque" id="marque" value="<?php echo $marque?>">
            </div>
            <div class="frm-group">
                <label class="small mb-1" style="font-size:15px" >Type Véhicule</label>
                <input type="text" name="type" id="type" value="<?php echo $type?>">
            </div>
            <div class="frm-group">
                <label class="small mb-1" style="font-size:15px" >Prix Par jour</label>
                <input type="text" name="prix" id="prix" value="<?php echo $prix?>">
            </div>
            
            <div class="frm-group">
                <input type="submit" value="Modifier la véhicule">
            </div>

        </form>

        <!-- scroll-to-top start -->
        <div class="scroll-to-top">
            <span class="scroll-icon">
                <i class="fa fa-rocket"></i>
            </span>
        </div>
        <!-- scroll-to-top end -->

        <!-- jquery js link -->
        <script src="../../assets/js/jquery-3.3.1.min.js"></script>
        <!-- jquery migrate js link -->
        <script src="../../assets/js/jquery-migrate-3.0.0.js"></script>
        <!-- bootstrap js link -->
        <script src="../../assets/js/bootstrap.min.js"></script>
        <!-- lightcase js link -->
        <script src="../../assets/js/lightcase.js"></script>
        <!-- wow js link -->
        <script src="../../assets/js/wow.min.js"></script>
        <!-- nice select js link -->
        <script src="../../assets/js/jquery.nice-select.min.js"></script>
        <!-- datepicker js link -->
        <script src="../../assets/js/datepicker.min.js"></script>
        <script src="../../assets/js/datepicker.en.js"></script>
        <!-- wickedpicker js link -->
        <script src="../../assets/js/wickedpicker.min.js"></script>
        <!-- owl carousel js link -->
        <script src="../../assets/js/owl.carousel.min.js"></script>
        <!-- jquery ui js link -->
        <script src="../../assets/js/jquery-ui.min.js"></script>
        <!-- main js link -->
        <script src="../../assets/js/main.js"></script>
</body>

</html>