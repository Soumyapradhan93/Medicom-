<?php
include('../db_connection.php');
function getAllUsers()
{
    global $conn;
    $sql = "SELECT * FROM patient";
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
    $sql = "DELETE FROM `patient` WHERE id='" . $user_id . "'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        return $query;
    } else {
        return false;
    }
}



function fetchSingleRec($id){
    global $conn;
    $sql = "SELECT * FROM patient WHERE id = '".$id."'";
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



function UserUpdate($id, $name, $email, $phone_number, $gender)
{
    global $conn;
    $sql = "UPDATE `patient` SET name='" . $name . "',email='" . $email . "',phone_number='".$phone_number."',gender='" . $gender . "' WHERE id='" . $id . "'";
    $query = mysqli_query($conn, $sql);

    return $query ? true : false;
}