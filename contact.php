<?php
include("header_link.php");
include("manubar.php");
?>
<style>
    /* ================contact section================== */
    #form {
        padding: 150px 0;
    }

    /* #form h1 {
    text-align: center;
    color: red;
} */

    .contact-text h6 {
        color: #595959;
        line-height: 26px;
        font-size: 16px;
    }

    #usr,
    #comment {
        background: #f4f4f4;
        margin-top: 0;
        border: solid 1px #d5d5d5;
    }

    .form-group {
        width: 100%;
    }

    .form-ara .col-md-6 {
        padding: 0 0;
    }

    .name-text {
        /* margin-top: ; */
        display: block;
        overflow: hidden;
        margin-top: 5px;
        width: 96%;
    }

    .form-ara .col-lg-6 {
        padding: 0;
    }

    .form-ara input {
        padding: 10px 15px;
        font-size: 14px;
        min-height: 53px;
    }

    .map-area iframe {
        width: 100%;
    }

    /* .captha {
    width: 60%;
    background: #f4f4f4;
    border: solid 1px #d5d5d5;
    padding: 15px 22px;
}

.form-check .form-check-label {
    display: inline-flex;
}

.form-check p {
    margin-top: 11px;
    padding-right: 29px;
}

#captha-image {
    margin-left: 10px;
} */

    .buton-form a {
        background: #01478c;
        position: absolute;
        right: 0;
        padding: 14px 51px;
        bottom: 47px;
        font-size: 16px;
        color: white;
        font-weight: 600;
        border-radius: 5px;
        border: solid 1px transparent;
        transition: all ease-in 0.5s;
    }

    .buton-form a:hover {
        background: #f4f4f4;
        color: #01478c;
        border: solid 1px #01478c;
        transition: all ease-out 0.5s;
    }

    .form-check-label {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .form-check-label input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .checkmark {
        position: absolute;
        top: 18px;
        left: 0;
        height: 26px;
        width: 26px;
        background-color: white;
        border: solid 1px #d5a440;
    }

    .form-check-label:hover input~.checkmark {
        background-color: #01478c;
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .form-check-label input:checked~.checkmark:after {
        display: block;
    }

    .form-check-label .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .contact-text.text-center h6 {
        margin-bottom: 60px;
    }

    /* .capcta {
    width: 25%;
    min-height: 63px;
    object-fit: cover;
} */

    .map-area iframe {
        border: solid 2px whitesmoke !important;
        padding: 4px;
        background: #fff;
        box-shadow: 1px 4px 2px 0px rgba(1, 1, 1, 0.22);
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
                        <li class="nav-item font-weight-bold active">
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
    <section id="form">
        <h1>Contact</h1>
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-text text-center">
                        <h6>Contact us through <span class="not_sure_span">thakurayush511@gmail.com</span><br />
                            reach out to us on phone 8219743301 </h6>
                    </div>
                </div>
            </div> -->
        <form action="contact_action.php" method="post">
            <div class="container form-box">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-ara">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group name">
                                        <input type="text " class="form-control name-text" id="fname" placeholder="First-name" name="fname">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group name">
                                        <input type="text" class="form-control" id="lname" placeholder="last-name" name="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group phone">
                                    <input type="email" class="form-control" id="mail" placeholder="Mail" name="mail">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group phone">
                                    <input type="number" class="form-control" id="pnumber" placeholder="Phone-Number" name="number">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group massge">
                                    <textarea class="form-control" rows="5" placeholder="Message" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="row buton-form">
                                <!-- <div class="form-check captha">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" id="check" value="">
                                        <span class="checkmark"></span>
                                        <p>I’m not a robot</p>
                                        <img class="capcta" src="https://pbs.twimg.com/profile_images/566388455265931264/dVHQiE0t.png">
                                    </label>
                                </div> -->
                                <div class="buton-form">
                                    <!-- <a type="submit" onclick="return validation();">Submit</a> -->
                                    <!-- <a> -->
                                    <button type="submit" onclick="return validation();">Submit</button>
                                    <!-- </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 empty-div-form"></div>
                    <div class="col-lg-5">
                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13578.350870882019!2d76.72664628403336!3d31.699836950967995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3904df2b45c39f79%3A0x7c4cce8149cb5540!2sSarkaghat%2C+Himachal+Pradesh+175024!5e0!3m2!1sen!2sin!4v1551328657489" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!-- ====================== footer ================ -->

    <?php
    include("footer_link.php");
    ?>