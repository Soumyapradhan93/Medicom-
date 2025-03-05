<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 200px;
        margin-top: -10%;
        background-color: #4CAF50;
    }

    form {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* display: flex; */
        /* flex-wrap: wrap; */
    }

    label {
        color: #4CAF50;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="password"],
    input[type="file"],

    select {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button[type="submit"],
    input[type="reset"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="reset"] {
        background-color: #f44336;
    }

    .required::after {
        content: '*';
        color: #f44336;
    }

/* form .container{
        display: flex;
        flex-wrap: wrap;
    } */
</style>

<body>

    <h2 style="text-align: center;">Registration Form</h2>
    <form action="/submit_registration" method="post">
        <div class="container">
            <label for="name" class="required">Name:</label>
            <input type="text" id="name" name="name">

            <label for="email" class="required">Email:</label>
            <input type="email" id="email" name="email">

            <label for="mobile" class="required">Mobile:</label>
            <input type="tel" id="mobile" name="mobile">

            <label for="whatsapp" class="required">WhatsApp No:</label>
            <input type="tel" id="whatsapp" name="whatsapp">

            <label for="address" class="required">Address:</label>
            <input type="text" id="address" name="address">

            <h5 class="required">Gender</h5>
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
                    <label for="check-other">Other</label>
                </div>
            </div>


            <label for="city" class="required">City:</label>
            <input type="text" id="city" name="city">

            <label for="country" class="required">Country:</label>
            <input type="text" id="country" name="country">

            <label for="qualification" class="required">Highest Qualification:</label>
            <select id="qualification" name="qualification">
                <option value="">Select...</option>
                <option value="highschool">High School</option>
                <option value="bachelor">Bachelor's Degree</option>
                <option value="master">Master's Degree</option>
                <option value="phd">PhD</option>
            </select>

            <label for="image" class="required">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*">

            <label for="password" class="required">Password:</label>
            <input type="password" id="password" name="password">

            <label for="confirm_password" class="required">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password">

            <button type="submit" onclick=" return validation()">Submit</button>
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
<script>
    function validation() {
        var a = document.getElementById("name").value.trim();
        var namePattern = /^[a-zA-Z\s-]+$/;
        var nameCheck = a.match(namePattern);
        var b = document.getElementById('email').value.trim();
        var emailPattern = /^[a-zA-Z0-9.-_+]+@[a-zA-Z]+\.[a-zA-Z]{2,}/;
        var emailCheck = b.match(emailPattern);
        var c = document.getElementById('mobile').value.trim();
        var mobilePattern = /^[789][0-9]{9}$/;
        var mobileCheck = c.match(mobilePattern);
        var d = document.getElementById('whatsapp').value.trim();
        var mobilePattern = /^[789][0-9]{9}$/;
        var whatappcheck = d.match(mobilePattern);
        var e = document.getElementById("address").value.trim();
        var f = document.getElementById('check-male').checked;
        var g = document.getElementById('check-female').checked;
        var h = document.getElementById('check-other').checked;
        var i = document.getElementById("city").value.trim();
        var j = document.getElementById("country").value.trim();
        var k = document.getElementById("qualification").value.trim();
        var l = document.getElementById("image").value.trim();
        var m = document.getElementById("password").value.trim();
        var n = document.getElementById("confirm_password").value.trim();

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
        } else if (d == '') {
            alert("please enter whatsapp");
            return false;
        } else if (isNaN(!whatappcheck)) {
            alert("Please enter a valid what's app number");
            return false;
        } else if (e == '') {
            alert("please enter address");
            return false;
        } else if (!f && !g && !h) {
            alert("please select Gender....");
            return false;
        } else if (i == '') {
            alert("please enter city");
            return false;
        } else if (j == '') {
            alert("please enter country");
            return false;
        } else if (k == '') {
            alert("please enter qualification");
            return false;
        } else if (l == '') {
            alert("please enter image");
            return false;
        } else if (m == '') {
            alert("please enter password");
            return false;
        } else if (n == '') {
            alert("please enter confirm password");
            return false;
        } else {
            return true;
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>