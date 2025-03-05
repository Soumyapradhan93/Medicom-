<?php
include('../db_connection.php');

function getAllUsers()
{
    global $conn;
    $sql = "SELECT * FROM appointment";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $data;
    } else {
        return false;
    }
}

function userDelete($user_id)
{
    global $conn;
    $sql = "DELETE FROM `appointment` WHERE id='" . $user_id . "'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        return $query;
    } else {
        return false;
    }
}

function fetchSingleRec($id){
    global $conn;
    $sql = "SELECT * FROM appointment WHERE id = '".$id."'";
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);
    if($count > 0){
        $data = mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}


function UserUpdate($id, $name, $email, $time, $date, $doctor)
{
    global $conn;
    $sql = "UPDATE `appointment` SET name='" . $name . "',email='" . $email . "',time='".$time."',date='" . $date . "',doctor='".$doctor."' WHERE id='" . $id . "'";
    $query = mysqli_query($conn, $sql);

    return $query ? true : false;
}
?>