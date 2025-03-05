<?php
$con=mysqli_connect("localhost","root","","rg_soumya");
if(!$con){
    die("Connection Unsuccessful.".mysqli_connect_error());
}


$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['number'];
$repass=$_POST['pass'];


$gen=$_POST['gender'];

$sql="INSERT INTO patient(name,email,phone_number,password,gender) VALUES('".$name."','".$email."','".$phone."','".$repass."','".$gen."')";
$query=mysqli_query($con,$sql);
if($query){
    echo "<script>alert('Registration Successful.');window.location.href='login_page.php';</script>";
}
else{
    echo "<script>alert('Sorry, Registration Unsuccessful.');window.location.href='registration.php';</script>";
}

?>