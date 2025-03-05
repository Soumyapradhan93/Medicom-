<?php
include("../db_connection.php");
include("admin_function.php");
// echo "<pre>";
// print_r($_POST);
// if($_SERVER['REQUEST_METHOD']==="post" && isset($_POST) && isset ($_POST{'userEditBtn'})){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $gender = $_POST['gender'];
    $call = UserUpdate($id,$name,$email,$phone,$gender);
    // die();
    if($call){
        echo"<script>
        alert('user updateed successfuiiy');
        window.location.href='index.php';
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