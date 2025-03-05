<?php
    include("Appointment_funtion.php");
    $user_id =$_GET["uid"];
    $call = fetchSingleRec($user_id);
    
    foreach($call as $val){
        $name = $val['name'];
        $email = $val['email'];
        $date = $val['date'];
        $time = $val['time'];
        $id = $val['id'];
        $doctor = $val['doctor'];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../assets/css/admin_styles.css" /> -->
    <title>Appointment</title>
</head>
<style>
    /* .body{
        background-image: url(assets\img\a1.jpg);
    } */
    .booking-form {
        background-color: #97ddf0;
        /* background-image: url(assets/img/a1.jpg); */
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .booking-form h2 {
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin: 10px 0 5px;
    }

    input,
    select,
    button {
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }

    /* Mobile Responsive Styles */
    @media screen and (max-width: 600px) {
        .booking-form {
            width: 90%;
            margin: 20px auto;
        }
    }

    /* Confirmation Section */
    .confirmation-section {
        display: none;
        /* Initially hidden */
        text-align: center;
        margin-top: 50px;
    }

    .confirmation-section h2 {
        color: #007bff;
    }

    .confirmation-section p {
        margin: 20px 0;
        font-size: 18px;
    }

    #new-appointment-btn {
        padding: 10px 20px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    #new-appointment-btn:hover {
        background-color: #218838;
    }
</style>

<body>
    <section class="booking-form" id="booking-section">
        <h2>Edit Appointment</h2>
        <form action="appointment_edit_action.php" method="post" id="appointment-form">
            <label for="name">Full Name:</label>
            <input type="text" id="name" placeholder="Your Name" value="<?php echo $name; ?>" name="name">
            <input style="display: none;" name="id" value="<?php echo $id; ?>">
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Your Email" value="<?php echo $email; ?>" name="email">

            <label for="date">Appointment Date:</label>
            <input type="date" id="date" value="<?php echo $date; ?>" name="date">

            <label for="time">Appointment Time:</label>
            <input type="time" id="time" value="<?php echo $time; ?>" name="time">

            <label for="doctor">Select Doctor:</label>
            <select id="doctor" name="doctor">
                <option ><?php echo $doctor; ?></option>
                <option value="Dr. John Smith">Dr. John Smith</option>
                <option value="Dr. Alice Brown">Dr. Alice Brown</option>
                <option value="Dr. Michael Lee">Dr. Michael Lee</option>
            </select>

            <button type="submit" value="submit" onclick="return formvalidation();">Book Appointment</button>
        </form>
    </section>

    <!-- <section id="confirmation-section" class="confirmation-section">
        <h2>Appointment Confirmed</h2>
        <p id="confirmation-message"></p>
        <button id="new-appointment-btn">Book New Appointment</button>
    </section> -->

    <script>
        // document
        //     .getElementById("appointment-form")
        //     .addEventListener("submit", function(e) {
        //         e.preventDefault();
        function formvalidation() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const date = document.getElementById("date").value;
            const time = document.getElementById("time").value;
            const doctor = document.getElementById("doctor").value;

            // form validetion

            if (name == "" || name == "") {
                alert("plaese enter name.... ");
                document.getElementById("name").focus();
                return false;
            } else if (email == "" || email == " ") {
                alert("Plaese Enter Email....");
                document.getElementById("email").focus();
                return false;
            } else if (email == "" || email == " ") {
                alert("Plaese Enter valid Email....");
                document.getElementById("email").focus();
                return false;
            } else if (date == "" || date == " ") {
                alert("Plaese select your date....");
                document.getElementById("date").focus();
                return false;
            } else if (time == "" || time == "") {
                alert("Plaese Enter appointment time....");
                document.getElementById("time").focus();
                return false;
            } else if (doctor == "" || doctor == "") {
                alert("plaese select appointment doctor...");
                document.getElementById("doctor").focus();
                return false;
            } else {
                return true;
            }
        }
        // Get form values

        // });

        // Create confirmation message
        //             const confirmationMessage = `
        //     Thank you, ${name}! Your appointment with ${doctor} on ${date} at ${time} has been successfully booked.
        //     A confirmation email has been sent to ${email}.
        // `;

        // Hide booking form and show confirmation
        // document.getElementById("booking-section").style.display = "none";
        // document.getElementById(
        //     "confirmation-message"
        // ).innerText = confirmationMessage;
        // document.getElementById("confirmation-section").style.display = "block";


        // Handle 'Book New Appointment' button click
        // document
        //     .getElementById("new-appointment-btn")
        //     .addEventListener("click", function() {
        // Reset the form and switch back to booking form view
        //     document.getElementById("appointment-form").reset();
        //     document.getElementById("booking-section").style.display = "block";
        //     document.getElementById("confirmation-section").style.display = "none";
        // });
    </script>

    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>