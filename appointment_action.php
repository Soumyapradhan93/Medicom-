<?php
$con = mysqli_connect("localhost", "root", "", "rg_soumya");
if (!$con) {
    die("Connection Unsuccessful." . mysqli_connect_error());
}
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$doctor = $_POST['doctor'];

$sql = "INSERT INTO appointment(name,email,date,time,doctor) VALUES('" . $name . "','" . $email . "','" . $date . "','" . $time . "','" . $doctor . "')";
$query = mysqli_query($con, $sql);
$id=mysqli_insert_id($con);
$sql2="SELECT * FROM appointment WHERE id='".$id."'";
$query2=mysqli_query($con, $sql2);
// echo $query;
// $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
// echo "<pre>";
// print_r($data);
// echo "</pre>";
if ($query) {
    echo "<script>alert('Appointment Successful.');window.location.href='index.php';</script>";
    $data=mysqli_fetch_assoc($query2);
    session_start();
    $_SESSION['uid']=$data['id'];
    $_SESSION['name']=$data['name'];
    $_SESSION['email']=$data['email'];
    $_SESSION['doc']=$data['doctor'];
    $_SESSION['date']=$data['date'];
    $_SESSION['time']=$data['time'];
} else {
    echo "<script>alert('Sorry, Appointment Unsuccessful.');window.location.href='appointment.php';</script>";
}
?>