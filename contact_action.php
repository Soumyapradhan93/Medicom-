<?php
$con = mysqli_connect("localhost", "root","", "rg_soumya");
if (!$con) {
    die("Connection Unsuccessful." . mysqli_connect_error());
}

// include('db_connection.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$pnumber = $_POST['number'];
$comment = $_POST['comment'];


$sql = "INSERT INTO contact(fname,lname,mail,pnumber,comment) VALUES('" . $fname . "','" . $lname . "','" . $mail . "','" . $pnumber . "','" . $comment . "')";
$query = mysqli_query($con, $sql);
if ($query) {
    echo "<script>alert('contact Successful.');window.location.href='index.php';</script>";
    $data=mysqli_fetch_assoc($query2);
}
else {
    echo "<script>alert('Sorry, contact Unsuccessful.');window.location.href='contact.php';</script>";
}
?>