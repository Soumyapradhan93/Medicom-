<?php
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$date = $_SESSION['date'];
$time = $_SESSION['time'];
$doc = $_SESSION['doc'];
// include("appointment.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- <style>
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

    </style> -->

<body>
    <section id="confirmation-section" class="confirmation-section">
        <h2>Appointment Confirmed</h2>
        <p><?php echo "Thank you, '" . $name . "'Your appointment with '" . $doc . "' on '" . $date . "' at '" . $time . "' has been successfully booked.
        A confirmation email has been sent to '" . $email . "'." ?></p>
        <button id="new-appointment-btn">Book New Appointment</button>
    </section>

</body>

<script>
     // Handle 'Book New Appointment' button click
        document
            .getElementById("new-appointment-btn")
            .addEventListener("click", function() {
        // Reset the form and switch back to booking form view
            document.getElementById("appointment-form").reset();
            document.getElementById("booking-section").style.display = "block";
            document.getElementById("confirmation-section").style.display = "none";
        });

        // Handle 'Book New Appointment' button click
        document
            .getElementById("new-appointment-btn")
            .addEventListener("click", function() {
        // Reset the form and switch back to booking form view
            document.getElementById("appointment-form").reset();
            document.getElementById("booking-section").style.display = "block";
            document.getElementById("confirmation-section").style.display = "none";
        });
</script>

</html>