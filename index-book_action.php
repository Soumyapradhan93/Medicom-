<?php
$con = mysqli_connect("localhost", "root", "", "index-book");
if (!$con) {
    die("Connection Unsuccessful." . mysqli_connect_error());
}
$name = $_POST['name'];
$age = $_POST['number'];
$service = $_POST['service'];

$sql = "INSERT INTO service-book(name,age,service) VALUES('" . $name . "','" . $number . "','" . $service . "')";
$query = mysqli_query($con, $sql);
$id=mysqli_insert_id($con);
$sql2="SELECT * FROM service-book WHERE id='".$id."'";
$query2=mysqli_query($con, $sql2);
// echo $query;
// $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
// echo "<pre>";
// print_r($data);
// echo "</pre>";
if ($query) {
    echo "<script>alert('Book Successful.');window.location.href='index.php';</script>";
    $data=mysqli_fetch_assoc($query2);
    session_start();
    $_SESSION['uid']=$data['id'];
    $_SESSION['name']=$data['name'];
    $_SESSION['age']=$data['number'];
    $_SESSION['service']=$data['service'];
} else {
    echo "<script>alert('Sorry, Book Unsuccessful.');window.location.href='index.php';</script>";
}
?>