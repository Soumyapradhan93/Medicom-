<?php
include('appointment_funtion.php');

$user_id = $_GET['uid'];

$call = userDelete($user_id);
if ($call) {
    echo "<script>
			alert('User Delete Successful.');
			window.location.href='Doctor_Appointment.php';
		</script>";
} else {
    echo "<script>
			alert('User Delete Unuccessful.');
			window.location.href='index.php';
		</script>";
}
