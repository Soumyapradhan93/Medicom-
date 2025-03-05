<?php
include('contact_funtion.php');

$user_id = $_GET['uid'];

$call = userDelete($user_id);
if ($call) {
    echo "<script>
			alert('User Delete Successful.');
			window.location.href='user_contact.php';
		</script>";
} else {
    echo "<script>
			alert('User Delete Unuccessful.');
			window.location.href='index.php';
		</script>";
}
