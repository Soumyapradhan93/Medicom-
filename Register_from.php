<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration_page</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/style2.css"> -->
    <link rel="icon" type="image/x-icon" href="assets/img/page_logo.png">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: rgb(130, 106, 251);
        /* background: url('assets/img/registration.jpg'); */
    }

    .container {
        position: relative;
        max-width: 700px;
        width: 100%;
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .container header {
        font-size: 1.5rem;
        color: #333;
        font-weight: 500;
        text-align: center;
    }

    .container .form {
        margin-top: 30px;
    }

    .form .input-box {
        width: 100%;
        margin-top: 20px;
    }

    .input-box label {
        color: #333;
    }

    .form :where(.input-box input, .select-box) {
        position: relative;
        height: 50px;
        width: 100%;
        outline: none;
        font-size: 1rem;
        color: #707070;
        margin-top: 8px;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 0 15px;
    }

    .input-box input:focus {
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }

    .form .column {
        display: flex;
        column-gap: 15px;
    }

    .form .gender-box {
        margin-top: 20px;
    }

    .gender-box h3 {
        color: #333;
        font-size: 1rem;
        font-weight: 400;
        margin-bottom: 8px;
    }

    .form :where(.gender-option, .gender) {
        display: flex;
        align-items: center;
        column-gap: 50px;
        flex-wrap: wrap;
    }

    .form .gender {
        column-gap: 5px;
    }

    .gender input {
        accent-color: rgb(130, 106, 251);
    }

    .form :where(.gender input, .gender label) {
        cursor: pointer;
    }

    .gender label {
        color: #707070;
    }

    .address :where(input, .select-box) {
        margin-top: 15px;
    }

    .select-box select {
        height: 100%;
        width: 100%;
        outline: none;
        border: none;
        color: #707070;
        font-size: 1rem;
    }

    .form button {
        height: 55px;
        width: 100%;
        color: #fff;
        font-size: 1rem;
        font-weight: 400;
        margin-top: 30px;
        border: none;
        cursor: pointer;
        transition: all 0.2s ease;
        background: rgb(130, 106, 251);
    }

    .form button:hover {
        background: rgb(88, 56, 250);
    }

    /* /Responsive/ @media screen and (max-width: 500px) {
    .form .column {
        flex-wrap: wrap;
    }

    .form :where(.gender-option, .gender) {
        row-gap: 15px;
    }
} */
</style>

<body>
    <!-- <form action="db_connection.php"> -->
    <section class="container">
        <header>Registration Form</header>
        <form action="action.php" method="post" class="form">
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter full name" id="fname" name="name" />
            </div>
            <div class="input-box">
                <label>Email Address</label>
                <input type="text" placeholder="Enter email address" id="eaddress" name="email" />
            </div>
            <div class="column">
                <div class="input-box">
                    <label>Phone Number</label>
                    <input type="number" placeholder="Enter phone number" id="pnumber" name="number" />
                </div>
            </div>
            <div class="column"></div>
            <div class="input-box">
                <label>Password</label>
                <input type="password" placeholder="Enter your password" id="pw" name="pass" />
            </div>
            </div>
            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" value="male" name="gender" />
                        <label for="check-male">male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" value="female" name="gender" />
                        <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-other" value="other" name="gender" />
                        <label for="check-other">prefer not to say</label>
                    </div>
                </div>
            </div>
            <button type="submit" onclick="return validation();">Submit</button>
        </form>
    </section>
    <!-- </form> -->

    <script type="text/javascript">
        function validation() {
            var a = document.getElementById("fname").value.trim();
            var namePattern = /^[a-zA-Z\s-]+$/;
            var nameCheck = a.match(namePattern);
            var b = document.getElementById('eaddress').value.trim();
            var emailPattern = /^[a-zA-Z0-9.-_+]+@[a-zA-Z]+\.[a-zA-Z]{2,}/;
            var emailCheck = b.match(emailPattern);
            var c = document.getElementById('pnumber').value.trim();
            var mobilePattern = /^[789][0-9]{9}$/;
            var mobileCheck = c.match(mobilePattern);
            var p = document.getElementById("pw").value.trim();
            var d = document.getElementById('check-male').checked;
            var e = document.getElementById('check-female').checked;
            var f = document.getElementById('check-other').checked;
            if (a == '') {
                alert("please enter the name");
                return false;
            } else if (!nameCheck) {
                alert("Please enter a valid name");
                return false;
            } else if (b == '') {
                alert("please enter your email");
                return false;
            } else if (!emailCheck) {
                alert("Please enter a valid email id");
                return false;
            } else if (c == '') {
                alert("please enter Phone number");
                return false;
            } else if (isNaN(!mobileCheck)) {
                alert("Please enter a valid mobile number");
                return false;
            } else if (p == '') {
                alert("please enter password");
                return false;
            } else if (!d && !e && !f) {
                alert("please select Gender....");
                return false;
            } else {
                return true;
            }
        }
    </script>
    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>