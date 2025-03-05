<?php
include('../db_connection.php');

function getAllUsers()
{
    global $conn;
    $sql = "SELECT * FROM contact ";
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
    
    $stmt = $conn->prepare("DELETE FROM `contact` WHERE id = ?");
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
    
    $stmt->close();
}

?>