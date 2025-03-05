<?php
include("../db_connection.php");
include("Appointment_funtion.php");
// echo "<pre>";
// print_r($_POST);
// if($_SERVER['REQUEST_METHOD']==="post" && isset($_POST) && isset ($_POST{'userEditBtn'})){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $doctor=$_POST['doctor'];
    $call = UserUpdate($id,$name,$email,$time,$date,$doctor);
    // die();
    if($call){
        echo"<script>
        alert('user updateed successfuiiy');
        window.location.href='Doctor_Appointment.php';
        </script>
        ";
    }
    else{
        echo"<script>
        alert('user updateed failed');
        window.location.href='index.php';
        </script>
        ";
        }
// }
?>