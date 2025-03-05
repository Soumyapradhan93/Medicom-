<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/style3.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="icon" type="image/x-icon" href="assets/img/page_logo.png">


</head>
<style>
body{
    padding-top: 50px;
}
.topnav a:hover {
    border-bottom: 3px solid rgb(54, 138, 147);
}
.dropdown:hover>.dropdown-menu {
    display: block;
}
.logo_img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin: 10px;
}
nav {
    background-color: rgba(182, 172, 172, 0.5);
    backdrop-filter: blur(10px);
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-item_1 {
    padding-top: 1px;
    padding-left: 6px;
    /* color: rgb(64, 0, 255); */
    font-size: 20px;
}

.carousel-item {
    height: 500px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/*------------doctors card----------------*/

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    border: none;
    outline: none;
    font-family: 'Poppins', sans-serif;
    text-transform: capitalize;
    transition: all 0.2s linear;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 25px;
/*    background: #d6eef1;*/
}

.container form {
    width: 700px;
    padding: 20px;
    background: #fff;
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
}

.container form .row {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.container form .row .col {
    flex: 1 1 250px;
}

.col-1 .title {
    font-size: 20px;
    color: rgb(237, 55, 23);
    padding-bottom: 5px;
}

.col-1 .inputBox {
    margin: 15px 0;
}

.col-1 .inputBox label {
    margin-bottom: 10px;
    display: block;
}

.col-1 .inputBox input,
.col-1 .inputBox select {
    width: 100%;
    border: 1px solid #ccc;
    padding: 10px 15px;
    font-size: 15px;
}

.col-1 .inputBox input:focus,
.col-1 .inputBox select:focus {
    border: 1px solid #000;
}

.col-1 .flex {
    display: flex;
    gap: 15px;
}

.col-1 .flex .inputBox {
    flex: 1 1;
    margin-top: 5px;
}

.col-1 .inputBox img {
    height: 34px;
    margin-top: 5px;
    filter: drop-shadow(0 0 1px #000);
}

.container form .submit_btn {
    width: 100%;
    padding: 12px;
    font-size: 17px;
    background: rgb(1, 143, 34);
    color: #fff;
    margin-top: 5px;
    cursor: pointer;
    letter-spacing: 1px;
}

.container form .submit_btn:hover {
    background: #3d17fb;
}

input::-webkit-inner-spin-button,
input::-webkit-outer-spin-button {
    display: none;
}


/*---------footer----------*/

/*section{
    padding: 60px 0;    
}*/

section .section-title {
    text-align: center;
    color: #255870;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer {
    background: #255870 !important;
    /* margin-top: 20px; */
    /* border-radius: 0 400px 0 0; */

}
#footer h5{
    padding-left: 10px;
    border-left: 3px solid #00ffae;
    padding-bottom: 6px;
    margin-bottom: 20px;
    margin-top: 50px;
    color:#ff9f10;
}
#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
    padding: 3px 0;
}
#footer ul.social li a i {
    margin-right: 5px;
    font-size:25px;
    -webkit-transition: .5s all ease;
    -moz-transition: .5s all ease;
    transition: .5s all ease;
}
#footer ul.social li:hover a i {
    font-size:30px;
    margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
    color:#ffffff;
}
#footer ul.social li a:hover{
    color:#eeeeee;
}
#footer ul.quick-links li{
    padding: 3px 0;
    -webkit-transition: .5s all ease;
    -moz-transition: .5s all ease;
    transition: .5s all ease;
}
#footer ul.quick-links li:hover{
    padding: 3px 0;
    margin-left:5px;
    font-weight:700;
}
#footer ul.quick-links li a i{
    margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
    font-weight: 700;
}
    </style>

<body>

    <head>
        <!-- <div class="container"> -->
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
                        <a class="nav-link" href="#">
                            Doctor's
                        </a>

                    </li>
                    <li class="nav-item font-weight-bold">
                        <a class="nav-link" href="#">Departments</a>
                    </li>
                    <li class="nav-item font-weight-bold">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item font-weight-bold dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Resources
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Carfax</a>
                            <a class="dropdown-item" href="#">Carproof</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item active" href="#">Online payment</a>
                        </div>
                    </li>
                    <li class="nav-item font-weight-bold">
                        <a class="nav-link" href="#">Medical Shop</a>
                    </li>
                    <li class="nav-item font-weight-bold">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="login_page.php">Login</a>
                            <a class="dropdown-item" href="Register_from.php">Register</a>
                        </div>
                    </li>
                </div>
            </div>
        </nav>
        <!-- </div> -->


        <div class="container">

            <form action="#">

                <div class="row">

                    <div class="col">
                        <h3 class="title">
                            Billing Address
                        </h3>

                        <div class="inputBox">
                            <label for="name">
                                Full Name:
                            </label>
                            <input type="text" id="name"
                                placeholder="Enter your full name">
                        </div>

                        <div class="inputBox">
                            <label for="email">
                                Email:
                            </label>
                            <input type="text" id="email"
                                placeholder="Enter email address">
                        </div>

                        <div class="inputBox">
                            <label for="address">
                                Address:
                            </label>
                            <input type="text" id="address"
                                placeholder="Enter address">
                        </div>

                        <div class="inputBox">
                            <label for="city">
                                City:
                            </label>
                            <input type="text" id="city"
                                placeholder="Enter city">
                        </div>

                        <div class="flex">

                            <div class="inputBox">
                                <label for="state">
                                    State:
                                </label>
                                <input type="text" id="state"
                                    placeholder="Enter state">
                            </div>

                            <div class="inputBox">
                                <label for="zip">
                                    Zip Code:
                                </label>
                                <input type="number" id="zip"
                                    placeholder="123 456">
                            </div>

                        </div>

                    </div>
                    <div class="col">
                        <h3 class="title">Payment</h3>

                        <div class="inputBox">
                            <label for="name">
                                Card Accepted:
                            </label>
                            <p>All Card Accepted.
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20240715140014/Online-Payment-Project.webp"
                                    alt="credit/debit card image">
                        </div>

                        <div class="inputBox">
                            <label for="cardName">
                                Name On Card:
                            </label>
                            <input type="text" id="cardName"
                                placeholder="Enter card name">
                        </div>

                        <div class="inputBox">
                            <label for="cardNum">
                                Credit Card Number:
                            </label>
                            <input type="text" id="cardNum"
                                placeholder="1111-2222-3333-4444"
                                maxlength="19">
                        </div>

                        <div class="inputBox">
                            <label for="">Exp Month:</label>
                            <select name="" id="expm">
                                <option value="">Choose month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>


                        <div class="flex">
                            <div class="inputBox">
                                <label for="">Exp Year:</label>
                                <select name="" id="expy">
                                    <option value="">Choose Year</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                </select>
                            </div>

                            <div class="inputBox">
                                <label for="cvv">CVV</label>
                                <input type="number" id="cvv"
                                    placeholder="123">
                            </div>
                        </div>

                    </div>

                </div>

                <input type="submit" value="Proceed to Checkout"
                    class="submit_btn" onclick="return funvalidation();">
            </form>

        </div>


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
                            </li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Services</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Contact</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Medical Shop</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Doctor,s</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Departments</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Services</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Contact</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Medical Shop</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>MAP</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                            <li><a href="#" title="Design and developed by"><i
                                        class="fa fa-angle-double-right"></i>Imprint</a></li>
                        </ul>
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
        <script type="text/javascript" src="index.js">
            function funvalidation() {
                var a = document.getElementById("name").value.trim();
                var b = document.getElementById("email").value.trim();
                var c = document.getElementById("address").value.trim();
                var d = document.getElementById("city").value.trim();
                var e = document.getElementById("state").value.trim();
                var f = document.getElementById("zip").value.trim();
                var g = document.getElementById("cardName").value.trim();
                var h = document.getElementById("expm").value.trim();
                var i = document.getElementById("expy").value.trim();
                var j = document.getElementById("cvv").value.trim();

                if (a == '') {
                    alert("Please enter your name.....");
                    return false;
                } else if (b == '') {
                    alert("please enter your email...");
                    return false;
                } else if (c == '') {
                    alert("please enter your address...");
                    return false;
                } else if (d == '') {
                    alert("please enter your city.....");
                    return false;
                } else if (e == '') {
                    alert("Please enter your state....");
                    return false;
                } else if (f == '') {
                    alert("Please enter your zip_no...");
                    return false;
                } else if (g == '') {
                    alert("please enter your cardName...");
                    return false;
                } else if (h == '') {
                    alert("please enter your Exp Month ");
                    return false;
                } else if (i == '') {
                    alert("please enter your exp year");
                    return false;
                } else if (j == '') {
                    alert("please enter your cvv");
                }

            }
        </script>

    </head>
    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>