<?php
include('header_link.php');
include('manubar.php');
?>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-black fixed-top">
                <h5>MEDICOM</h5>
                <a class="navbar-brand" href="index.php"><img src="assets/img/page_logo.png" class="logo_img" />
                    <!-- <p>Doctoral</p> -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="navbar-nav ml-auto topnav">
                        <li class="nav-item font-weight-bold ">
                            <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item font-weight-bold ">
                            <a class="nav-link" href="Doctors_information.php">
                                Doctor's
                            </a>
                        </li>
                        <li class="nav-item font-weight-bold active">
                            <a class="nav-link" href="department.php">Departments</a>
                        </li>
                        <li class="nav-item font-weight-bold">
                            <a class="nav-link" href="service.php">Services</a>
                        </li>
                        <li class="nav-item font-weight-bold dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Resources
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="error.php">Specialties</a>
                                <a class="dropdown-item" href="error.php">Pre-Health</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="error.php">Online Payment</a>
                            </div>
                        </li>
                        <!-- <li class="nav-item font-weight-bold">
                            <a class="nav-link" href="error.php">Medical Shop</a>
                        </li> -->
                        <li class="nav-item font-weight-bold">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user">
                                    <p>
                                        <!-- Profile -->
                                    </p>
                                </i>
                            </a>


                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>
                                <?php
                                if (isset($_SESSION['username'])) {
                                ?>
                                    <a class="dropdown-item" href="profile.php">Profile</a>
                                    <a class="dropdown-item" href="logout.php">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        logout</a>
                                <?php
                                } else {
                                ?>
                                    <a class="dropdown-item" href="login_page.php">Login</a>
                                <?php
                                }
                                ?>
                                <!-- <a class="dropdown-item" href="login_page.php">Login</a>
                                <a class="dropdown-item" href="Register_from.php">Register</a> -->
                            </div>
                        </li>
                    </div>
                </div>
        </div>
        </nav>
        </div>
    </header>

<div class="department-tabs ">
    <div class="container">
        <div class="row">
            <div class="col-md-3 tab-navs">
                <div class="heading">
                    <h4>Our Departments</h4>
                </div>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-Specialties-tab" data-toggle="tab"
                            href="#tab1" role="tab" aria-controls="nav-Specialties"
                            aria-selected="true">Medecine and Health</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-Procedures-tab" data-toggle="tab" href="#tab2"
                            role="tab" aria-controls="nav-Procedures" aria-selected="false">Dental Care and Surgery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-Procedures-tab" data-toggle="tab" href="#tab3"
                            role="tab" aria-controls="nav-Procedures" aria-selected="false">Eye Treatment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-Procedures-tab" data-toggle="tab" href="#tab4"
                            role="tab" aria-controls="nav-Procedures" aria-selected="false">Children Chare</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-Procedures-tab" data-toggle="tab" href="#tab5"
                            role="tab" aria-controls="nav-Procedures" aria-selected="false">Nuclear magnetic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav_Pro-Health_tab" data-toggle="tab" href="#tab6"
                            role="tab" aria-controls="Three" aria-selected="false">Traumatology</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 tab-contents2">
                <div class="row">
                    <div class="tab-content tab-content-info">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                            aria-labelledby="nav-Specialties-tab">
                            <div class="col-md-6 medical_title">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/deparment.jpg" alt="Thumb" style="height: 100%; width:100%;">
                                    </div>
                                    <h3>Medecine and Health</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too
                                        say adieus who direct esteem. It esteems luckily mr or picture placing
                                        drawing no. Apartments frequently or motionless on reasonable projecting
                                        expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men
                                        over day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Times</h4>
                                    <ul>
                                        <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade show" id="tab2" role="tabpanel"
                            aria-labelledby="nav-Specialties-tab">
                            <div class="col-md-6 medical_title">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/deparment1.jpg" alt="Thumb">
                                    </div>
                                    <h3>Dental Care and Surgery</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too
                                        say adieus who direct esteem. It esteems luckily mr or picture placing
                                        drawing no. Apartments frequently or motionless on reasonable projecting
                                        expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men
                                        over day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade show" id="tab3" role="tabpanel"
                            aria-labelledby="nav-Specialties-tab">
                            <div class="col-md-6 medical_title">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/deparment2.jpg" alt="Thumb">
                                    </div>
                                    <h3>Eye Treatment</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too
                                        say adieus who direct esteem. It esteems luckily mr or picture placing
                                        drawing no. Apartments frequently or motionless on reasonable projecting
                                        expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men
                                        over day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade show" id="tab4" role="tabpanel"
                            aria-labelledby="nav-Specialties-tab">
                            <div class="col-md-6 medical_title">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/deparment3.jpg" alt="Thumb">
                                    </div>
                                    <h3>Children Chare</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too
                                        say adieus who direct esteem. It esteems luckily mr or picture placing
                                        drawing no. Apartments frequently or motionless on reasonable projecting
                                        expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men
                                        over day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade show" id="tab5" role="tabpanel"
                            aria-labelledby="nav-Specialties-tab">
                            <div class="col-md-6 medical_title">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/deparment4.jpg" alt="Thumb">
                                    </div>
                                    <h3>Nuclear magnetic</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too
                                        say adieus who direct esteem. It esteems luckily mr or picture placing
                                        drawing no. Apartments frequently or motionless on reasonable projecting
                                        expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men
                                        over day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade show" id="tab6" role="tabpanel"
                            aria-labelledby="nav-Specialties-tab">
                            <div class="col-md-6 medical_title">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/deparment5.jpg" alt="Thumb">
                                    </div>
                                    <h3>Traumatology</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too
                                        say adieus who direct esteem. It esteems luckily mr or picture placing
                                        drawing no. Apartments frequently or motionless on reasonable projecting
                                        expression. Way mrs end gave tall walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men
                                        over day.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =================footer=============== -->

<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Address</h5>
                <ul class="list-unstyled quick-links">
                    <li>
                        <a href="#"><i class="fa fa-map-o">
                                Vill-Padmapukuria,P.O + P.S- Contai Dist-Purba Medinipur, W.B(721401)</a></i>
                    </li>
                    <li><i class="fa fa-phone" aria-hidden="true">
                            <a href="#">
                                9382508712 /
                            </a>
                            <a href="#">
                                7602694191
                            </a>
                        </i>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope-o"
                                aria-hidden="true"></i>soumyaphadhan.2004@gmail.com</a>
                    </li><br>
                    <!-- <footer>
                        <iframe src="https://www.google.com/maps/embed?..." width="200" height="250" frameborder="0"
                            style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </footer> -->
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4" style="padding-left: 100px;">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Doctor,s</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Departments</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Services</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Medical Shop</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i>Contact</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="footer-widget">
                    <h5>Departments</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Medecine and Health</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Dental Care and Surgery</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Eye Treatment</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Children Chare</a></li>
                        <li><a href="#" title="Design and developed by"><i
                                    class="fa fa-angle-double-right"></i>Nuclear magnetic</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Traumatology</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p><u><a href="#">SOUMYA PRADHAN</a></u> CCLMS student Of BCA22</p>
                <p class="h6">© All right Reversed.<a class="text-green ml-2" href="#" target="_blank">SOUMYA
                        PRADHAN</a></p>
            </div>
            <hr>
        </div>
    </div>
</section>

<?php
include('footer_link.php');
?>
