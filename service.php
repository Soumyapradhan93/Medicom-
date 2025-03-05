<?php
include("header_link.php");
include("manubar.php");
?>
<style>
	body {
		font-family: 'Philosopher', sans-serif;
		position: relative;
		font-weight: 400;
		font-size: 16px;
		color: #8a919c;
		line-height: 30px;
	}

	.pt-100 {
		padding-top: 100px;
	}

	.pb-100 {
		padding-bottom: 100px;
	}

	.ptb-100 {
		padding: 100px 0px;
	}

	.pt-70 {
		padding-top: 70px;
	}

	.pb-70 {
		padding-bottom: 70px;
	}

	.ptb-70 {
		padding: 70px 0px;
	}

	p {
		font-size: 15px;
		margin: 0px;
		padding: 0px;
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		margin: 0;
		padding: 0;
		color: #025a8e;
	}

	#services .title {
		font-size: 46px;
		color: #000000;
		font-weight: 600;
	}

	#services .title span {
		font-size: 46px;
		color: #025a8e;
		font-weight: 600;
	}

	#services .btn-primary {
		color: #fff;
		background-color: #025a8e;
		border: none;
		font-size: 14px;
		letter-spacing: 1px;
		text-transform: uppercase;
		padding: 12px 20px;
		min-width: 150px;
		transition: all 0.5s ease;
		-moz-transition: all 0.5s ease;
		-webkit-transition: all 0.5s ease;
		-ms-transition: all 0.5s ease;
		-o-transition: all 0.5s ease;
	}

	.btn-primary:hover {
		-webkit-box-shadow: 0 5px 9px -4px rgb(0 0 255 / 65%);
		box-shadow: 0 5px 9px -4px rgb(0 0 255 / 65%);
	}

	.card-items .card {
		position: relative;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-direction: column;
		flex-direction: column;
		min-width: 0;
		word-wrap: break-word;
		background-color: #fff;
		background-clip: border-box;
		border: none;
		border-radius: .25rem;
		box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.08);
		margin-bottom: 30px;
	}

	.card-items .card .card-body i {
		border-radius: 6px;
		font-size: 31px;
		color: #025a8e;
		background-color: #80ACC6;
		width: 50px;
		height: 50px;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.card-title {
		text-decoration: none;
		color: #025a8e;
		font-size: 18px;
		font-weight: 600;
		margin-bottom: 10px;

	}

	.card-items .card .card-body .card-title {
		margin-bottom: .75rem;
		margin-top: 26px;
		margin-bottom: 15px;
		text-decoration: none;
	}
</style>

<body>
<header>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-black fixed-top">
                <a class="navbar-brand" href="#"><img src="assets/img/page_logo.png" class="logo_img" /></a>
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
                        <li class="nav-item font-weight-bold">
                            <a class="nav-link" href="department.php">Departments</a>
                        </li>
                        <li class="nav-item font-weight-bold active">
                            <a class="nav-link" href="service.php">Services</a>
                        </li>
                        <li class="nav-item font-weight-bold dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Resources
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="error.php">Carfax</a>
                                <a class="dropdown-item" href="error.php">Carproof</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="payment_page.php">Online Payment</a>
                            </div>
                        </li>
                        <!-- <li class="nav-item font-weight-bold">
                            <a class="nav-link" href="error.php">Medical Shop</a>
                        </li> -->
                        <li class="nav-item font-weight-bold ">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user">
                                    <p>
                                    </p>
                                </i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>
                                <?php
                                if (isset($_SESSION['username'])) {
                                ?>
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
            </nav>
        </div>
    </header>

<section id="services" class="bg-light pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h2 class="title">What <span>Service</span> We
                    Offer
                </h2>
                <p class=" mt-3 ">One of the first major discoveries relevant to the field of pulmonology was the discovery of pulmonary circulation. Originally, it was thought that blood reaching the right side of the heart passed through small</p>
                <a class="btn btn-primary my-5" href="error.php">More Info </a>
            </div>
            <div class="col-lg-7">
                <div class="row card-items">
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- <i class="fa fa-comments"></i> -->
                                <img src="assets/img/service.png" style="width: 100%; height:100%;">
                                <a href="#">
                                    <h5 class="card-title">Digital Health Facilities</h5>
                                </a>
                                <!-- <p class="card-text"> Health Facility Registry is a comprehensive repository of health facilities of the country across modern and traditional systems of medicine.
                                    It includes both public and private health facilities including hospitals, clinics, diagnostic laboratories and imaging centers, pharmacies, etc</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- <i class="fa fa-cc-paypal" aria-hidden="true"></i> -->
                                <img src="assets/img/service1.png" style="width: 100%; height:100%;">
                                <a href="#">
                                    <h5 class="card-title">Intensive Care Unit (ICU)</h5>
                                </a>
                                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <!-- <i class="fa fa-envelope-open"></i> -->
                                <img src="assets/img/service2.png" style="height: 100%; width:100%;">
                                <a href="#">
                                    <h5 class="card-title"> Quick Ambulance</h5>
                                </a>
                                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="assets/img/service3.jpg" style="height: 100%; width:100%;">
                                <!-- <i class="fa fa-phone"></i> -->
                                <a href="#">
                                    <h5 class="card-title">Bills & Insurance</h5>
                                </a>
                                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

	<!-- =------------------footer-------------- -->
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
	include("footer_link.php");
	?>