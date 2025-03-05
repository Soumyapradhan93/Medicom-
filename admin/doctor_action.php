<?php
session_start(); // Make sure the session is started to store messages

include('../db_connection.php');

// Add guide action
if (isset($_POST['registerbtn'])) {
    // print_r($_POST);
    // die();
    // Check if the form data is set
    if (isset($_POST['name']) && isset($_POST['qualification']) && isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
    //     print_r($_POST);
    // die();
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $qualification=$_POST['qualification'];

        // Generate a unique image name based on current timestamp and the guide name (or guide ID after insertion)
        $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);  // Extract the file extension
        $unique_image_name = uniqid('card_', true) . '.' . $image_ext; // Unique image name
        $image_folder = "upload/" . $unique_image_name;

        // Upload image to the server
        if (move_uploaded_file($image_tmp, $image_folder)) {
            // Insert guide data into database
            $query = "INSERT INTO doctor (name, image,qualification) VALUES ('$name','$unique_image_name','$qualification')";
            if (mysqli_query($conn, $query)) {
                $_SESSION['message'] = "Doctor added successfully!";
                header("Location: doctor.php");
                exit;
            } else {
                $_SESSION['error'] = "Error adding Doctor: " . mysqli_error($conn);
                header("Location: doctor.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Error uploading image.";
            header("Location: doctor.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "All fields are required.";
        header("Location: doctor.php");
        exit;
    }
}

// Delete guide action
if (isset($_POST['delete_btn'])) {
    if (isset($_POST['delete_id'])) {
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

        // Get image file path from database
        $query = "SELECT image FROM doctor WHERE id = '$delete_id'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $image_path = "upload/" . $row['image'];

            // Delete guide from database
            $delete_query = "DELETE FROM doctor WHERE id = '$delete_id'";
            if (mysqli_query($conn, $delete_query)) {
                // Delete the image from the server
                if (file_exists($image_path)) {
                    unlink($image_path);
                }

                $_SESSION['message'] = "Doctor deleted successfully!";
                header("Location: doctor.php");
                exit;
            } else {
                $_SESSION['error'] = "Error deleting guide: " . mysqli_error($conn);
                header("Location: doctor.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Doctor not found.";
            header("Location: doctor.php");
            exit;
        }
    }
}

// Update Guide
if (isset($_POST['update_btn'])) {
    $guide_id = $_POST['edit_id'];
    $name = $_POST['name'];
    $qualification=$_POST['qualification'];

    // Handle the image upload (only if new image is uploaded)
    if (!empty($_FILES['image']['name'])) {
        // Get the current image path from the database
        $query = "SELECT image FROM doctor WHERE id = '$guide_id'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $old_image_path = "upload/" . $row['image'];

            // Delete the old image if it exists
            if (file_exists($old_image_path)) {
                unlink($old_image_path);
            }
        }

        // Upload the new image with a unique name
        $image_name = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
        $unique_image_name = uniqid('card_', true) . '.' . $image_ext;  // Unique image name
        $image_path = "upload/" . $unique_image_name;

        // Move the uploaded image to the upload folder
        if (move_uploaded_file($image_tmp_name, $image_path)) {
            // Update the guide in the database
            $query = "UPDATE doctor SET name='$name',qualification='$qualification', image='$unique_image_name' WHERE id=$guide_id";
        } else {
            $_SESSION['error'] = "Error uploading the image.";
            header("Location: doctor.php");
            exit;
        }
    } else {
        // If no new image is uploaded, retain the old image
        $query = "UPDATE doctor SET name='$name',qualification='$qualification' WHERE id=$guide_id";
    }

    if (mysqli_query($conn, $query)) {
        $_SESSION['message'] = "Doctor updated successfully!";
        header("Location: doctor.php"); // Redirect back to guide list
        exit;
    } else {
        $_SESSION['error'] = "Error updating record: " . mysqli_error($conn);
        header("Location: doctor.php");
        exit;
    }

    mysqli_close($conn);
}
?>
