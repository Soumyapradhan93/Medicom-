<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_page</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/style1.css"> -->
    <link rel="icon" type="image/x-icon" href="assets/img/page_logo.png">
</head>
<style>
    html,
    body {
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
        background-position: center;
        background: url('assets/img/login.jpg');
        overflow: hidden;

    }

    .container {
        height: 100%;
        align-content: center;
    }

    .img {
        height: 100%;
        width: 100%;
    }

    .card {
        height: 370px;
        margin-top: auto;
        margin-bottom: auto;
        width: 400px;
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    .social_icon span {
        font-size: 60px;
        margin-left: 10px;
        color: #FFC312;
    }

    .social_icon span:hover {
        color: white;
        cursor: pointer;
    }

    .card-header h3 {
        color: white;
    }

    .social_icon {
        position: absolute;
        right: 20px;
        top: -45px;
    }

    .input-group-prepend span {
        width: 50px;
        background-color: #FFC312;
        color: black;
        border: 0 !important;
    }

    input:focus {
        outline: 0 0 0 0 !important;
        box-shadow: 0 0 0 0 !important;

    }

    .remember {
        color: white;
    }

    .remember input {
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-right: 5px;
    }

    .login_btn {
        color: black;
        background-color: #FFC312;
        width: 100px;
    }

    .login_btn:hover {
        color: black;
        background-color: white;
    }

    .links {
        color: white;
    }

    .links a {
        margin-left: 4px;
    }

    .toggle-password {
        float: right;
        cursor: pointer;
        margin-right: 10px;
        margin-top: -25px;
    }
</style>

<body style="background-image: url(assets/img/login.jpg);">
    <div class="bg"></div>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fa fa-facebook-square"></i></span>
                        <span><i class="fa fa-google-plus-square"></i></span>
                        <span><i class="fa fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form action="action_login.php" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" id="email" name="email" placeholder="username">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" name="pw" id="pw" placeholder="password">
                            <!-- <i class="toggle-password fa fa-fw fa-eye-slash"></i> -->
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox" name="ck" id="ck" value="remember_me">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn"
                                onclick="return formValidate();">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="Register_from.php">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center ">
                        <a href="Register_from.php">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function formValidate() {
            let email = document.getElementById("email").value;
            let pw = document.getElementById("pw").value;
            let ck = document.getElementById("ck").checked;
            let password = /^[A-Za-z0-9.-_+/]+@[A-za-z]+\.[A-Za-z]{2,}/;
            if (email == "" || email == " ") {
                alert("Plaese Enter Name....");
                document.getElementById("email").focus();
                return false;
            } else if (email == "" || email == " ") {
                alert("Plaese Enter valid Name....");
                document.getElementById("email").focus();
                return false;
            } else if (pw == "" || pw == " ") {
                alert("Plaese Enter Password....");
                document.getElementById("pw").focus();
                return false;
            } else if (!password.match(pw)) {
                alert("Plaese Enter Valid password....");
                document.getElementById("pw").focus();
                return false;
            }
            // else if(ck=="" || ck=" "){
            //     alert("plaese check your check Box.....");
            //     document.getElementById("ck").focus();
            //     return false;
            // }
            if (ck == false) {
                alert("please select check Box....");
                document.getElementById("ck").focus();
                return false;
            } else {
                return true;
            }

            //             $(".toggle-password").click(function() {
            //     $(this).toggleClass("fa-eye fa-eye-slash");
            //     input = $(this).parent().find("input");
            //     if (input.attr("type") == "password") {
            //         input.attr("type", "text");
            //     } else {
            //         input.attr("type", "password");
            //     }
            // });

        }
    </script>




    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>