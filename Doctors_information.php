<?php
// include('header_link.php');
include('manubar.php');
?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="icon" type="image/x-icon" href="assets/img/page_logo.png">
</head>
<style>
.profile {
    margin: 50px 0;
    padding: 30px;
}

.tab-pane .profile-sidebar:hover {
    transform: scale(1.1);
    text-decoration: none;
}

.profile-sidebar {
    padding: 20px 0 10px 0;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 3px;
    box-shadow: 0 0 10px rgba(0, 0, 0);
}

.profile-userpic img {
    float: none;
    margin: 0 auto;
    width: 40%;
    height: 30%;
    -webkit-border-radius: 50% !important;
    -moz-border-radius: 50% !important;
    border-radius: 50% !important;
}

.profile-usertitle {
    text-align: center;
    margin-top: 20px;
    color: #000;
    text-decoration: none;
}

.profile-usertitle-name {
    color: #5a7391;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 7px;
}

.profile-usertitle a:hover {
    color: #000000;
    text-decoration: none;
}

.profile-usertitle-job {
    text-transform: uppercase;
    color: #385f80;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 15px;
}

.profile-userbuttons {
    text-align: center;
    margin-top: 10px;
    text-decoration: none;
}

.profile-userbuttons .btn {
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 600;
    padding: 6px 15px;
    margin-right: 5px;
    text-decoration: none;
}

.profile-userbuttons .btn:last-child {
    margin-right: 0px;
}

.profile-usermenu {
    margin-top: 30px;
}

.profile-usermenu ul li {
    border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
    border-bottom: none;
}

.profile-usermenu ul li a {
    color: #93a3b5;
    font-size: 14px;
    font-weight: 400;
}

.profile-usermenu ul li a i {
    margin-right: 8px;
    font-size: 14px;
}

.profile-usermenu ul li a:hover {
    background-color: #fafcfd;
    color: #5b9bd1;
}

.profile-usermenu ul li.active {
    border-bottom: none;
}

.profile-usermenu ul li.active a {
    color: #5b9bd1;
    background-color: #f6f9fb;
    border-left: 2px solid #5b9bd1;
    margin-left: -2px;
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
                        <li class="nav-item font-weight-bold active">
                            <a class="nav-link" href="Doctors_information.php">
                                Doctor's
                            </a>
                        </li>
                        <li class="nav-item font-weight-bold">
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
<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <a href="appointment.php">
                        <img src="assets/img/doctor/D1.png"
                            class="img-responsive rounded mx-auto d-block" alt="">
                    </a>
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <a href="">
                            Dr. P Jana
                        </a>
                    </div>
                    <div class="profile-usertitle-job">
                        <a href="">
                            MBBS (1971), MD (1979), Dip. Card. (1976), FCCP
                        </a>
                    </div>
                </div>
                <div class="profile-userbuttons">
                    <a href="appointment.php">
                        <button type="button" class="btn btn-success btn-sm">
                            <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                            APPOINTMENT</button></a>
                    <a href="contact.php">
                        <button type="button" class="btn btn-danger btn-sm"><i
                                class="fa fa-envelope-open-o" aria-hidden="true"></i>
                            Message</button></a>
                </div>
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <a href="appointment.php">
                        <img src="assets/img/doctor/D3.png"
                            class="img-responsive rounded mx-auto d-block" alt="">
                    </a>
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <a href="">
                            Dr. Aritra Konar
                        </a>
                    </div>
                    <div class="profile-usertitle-job">
                        <a href="">
                            MBBS, MD (MEDICINE),DM (CARDIOLOGY), FCCP
                        </a>
                    </div>
                </div>
                <div class="profile-userbuttons">
                    <a href="appointment.php">
                        <button type="button" class="btn btn-success btn-sm"><i
                                class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            APPOINTMENT</button></a>
                    <a href="contact.php">
                        <button type="button" class="btn btn-danger btn-sm"><i
                                class="fa fa-envelope-open-o" aria-hidden="true"></i>
                            Message</button></a>
                </div>
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <a href="appointment.php">
                        <img src="assets/img/doctor/D2.png"
                            class="img-responsive rounded mx-auto d-block" alt="">
                    </a>
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <a href="">
                            Dr. A K Bardhan
                        </a>
                    </div>
                    <div class="profile-usertitle-job">
                        <a href="">
                            MBBS (1971), MD (1979), Dip. Card. (1976), FCCP
                        </a>
                    </div>
                </div>
                <div class="profile-userbuttons">
                    <a href="appointment.php">
                        <button type="button" class="btn btn-success btn-sm">
                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            APPOINTMENT</button></a>
                    <a href="contact.php">
                        <button type="button" class="btn btn-danger btn-sm"><i
                                class="fa fa-envelope-open-o" aria-hidden="true"></i>
                            Message</button></a>
                </div>
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <a href="appointment.php">
                        <img src="assets/img/doctor/D5.png"
                            class="img-responsive rounded mx-auto d-block" alt="">
                    </a>
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <a href="">
                            Dr. Abraham Oomman
                        </a>
                    </div>
                    <div class="profile-usertitle-job">
                        <a href="">
                            MBBS, MD - General Medicine, DM - Cardiology, DNB - Cardiology
                        </a>
                    </div>
                </div>
                <div class="profile-userbuttons">
                    <a href="appointment.php">
                        <button type="button" class="btn btn-success btn-sm">
                            <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            APPOINTMENT</button></a>
                    <a href="contact.php">
                        <button type="button" class="btn btn-danger btn-sm"><i
                                class="fa fa-envelope-open-o" aria-hidden="true"></i>
                            Message</button></a>
                </div>
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <a href="appointment.php">
                        <img src="assets/img/doctor/D4.png"
                            class="img-responsive rounded mx-auto d-block" alt="">
                    </a>
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <a href="">
                            Dr. ak pariya
                        </a>
                    </div>
                    <div class="profile-usertitle-job">
                        <a href="">
                            MBBS (1971), MD (1979), Dip. Card. (1976), FCCP
                        </a>
                    </div>
                </div>
                <div class="profile-userbuttons">
                    <a href="appointment.php">
                        <button type="button" class="btn btn-success btn-sm"><i
                                class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            APPOINTMENT</button></a>
                    <a href="contact.php">
                        <button type="button" class="btn btn-danger btn-sm"><i
                                class="fa fa-envelope-open-o" aria-hidden="true"></i>
                            Message</button></a>
                </div>
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <a href="appointment.php">
                        <img src="assets/img/doctor/D6.png"
                            class="img-responsive rounded mx-auto d-block" alt="">
                    </a>
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <a href="">
                            Dr. A Sreenivas Kumar
                        </a>
                    </div>
                    <div class="profile-usertitle-job">
                        <a href="">
                            MBBS, MD(Gen Med), DM(Cardio)SGPGI, FACC(USA)
                        </a>
                    </div>
                </div>
                <div class="profile-userbuttons">
                    <a href="appointment.php">
                        <button type="button" class="btn btn-success btn-sm"><i
                                class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            APPOINTMENT</button></a>
                    <a href="contact.php">
                        <button type="button" class="btn btn-danger btn-sm"><i
                                class="fa fa-envelope-open-o" aria-hidden="true"></i>
                            Message</button></a>
                </div>
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <a href="appointment.php">
                        <img src="assets/img/doctor/D9.png"
                            class="img-responsive rounded mx-auto d-block" alt="">
                    </a>
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <a href="">
                            Dr. Abhijit Vilas Kulkarni
                        </a>
                    </div>
                    <div class="profile-usertitle-job">
                        <a href="">
                            MBBS(1997), MD(1998), DM (Cardiology), plastic surgery
                        </a>
                    </div>
                </div>
                <div class="profile-userbuttons">
                    <a href="appointment.php">
                        <button type="button" class="btn btn-success btn-sm"><i
                                class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            APPOINTMENT</button></a>
                    <a href="contact.php">
                        <button type="button" class="btn btn-danger btn-sm"><i
                                class="fa fa-envelope-open-o" aria-hidden="true"></i>
                            Message</button></a>
                </div>
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <a href="appointment.php">
                        <img src="assets/img/doctor/D8.jpg"
                            class="img-responsive rounded mx-auto d-block" alt="">
                    </a>
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        <a href="">
                            Dr. S Pradhan
                        </a>
                    </div>
                    <div class="profile-usertitle-job">
                        <a href="">
                            MBBS (1971), MD (1979), Dip. Card. (1976), FCCP
                        </a>
                    </div>
                </div>
                <div class="profile-userbuttons">
                    <a href="appointment.php">
                        <button type="button" class="btn btn-success btn-sm"><i
                                class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            APPOINTMENT</button></a>
                    <a href="contact.php">
                        <button type="button" class="btn btn-danger btn-sm"><i
                                class="fa fa-envelope-open-o" aria-hidden="true"></i>
                            Message</button></a>
                </div>
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="#">
                                <i class="glyphicon glyphicon-home"></i>
                                Overview </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-user"></i>
                                Account Settings </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                Tasks </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('footer_link.php');
?>