<?php
// session_start();
include("db_connection.php");
global $conn;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST)) {

	$email = $_POST['email'];
	$password = $_POST['pw'];

	$sql = "SELECT * FROM patient WHERE email='" . $email . "'";
	$query = mysqli_query($conn, $sql);

	$get_no_row = mysqli_num_rows($query);

	if ($get_no_row) {
		$data = mysqli_fetch_assoc($query);
		// print_r($data);die();
		if ($data['password'] == $password) {
			session_start();
			$_SESSION['username'] = $data['name'];
			$_SESSION['email'] = $data['email'];
			$_SESSION['phone'] = $data['phone_number'];
			$_SESSION['gender'] = $data['gender'];
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
