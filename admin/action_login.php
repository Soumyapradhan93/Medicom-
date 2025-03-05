<?php
// session_start();
include("../db_connection.php");
global $conn;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST)) {

	$email = $_POST['name'];
	$password = md5($_POST['upw']);

	$sql = "SELECT * FROM admin WHERE email='" . $email . "'";
	$query = mysqli_query($conn, $sql);

	$get_no_row = mysqli_num_rows($query);

	if ($get_no_row) {
		$data = mysqli_fetch_assoc($query);
		// print_r($data);die();
		if ($data['password'] == $password) {
			// session_destroy();
			session_start();
			$_SESSION['username'] = $data['name'];
			// header('location:index.php');
			echo "<script>
			alert('login succesfully....');
			window.location.href='index.php';
		</script>";
		} else {
			echo "<script>
			alert('Password don\'t Match....');
			window.location.href='login_page.php';
		</script>";
		}
	} else {
		echo "<script>
			alert('User not Exist...);
			window.location.href='login_page.php';
		</script>";
	}
} else {
	echo "<script>
			alert('Somethings Went Wrong.\nPlease Try Again...');
			window.location.href='login_page.php';
		</script>";
}
