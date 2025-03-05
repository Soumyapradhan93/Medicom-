<?php
session_start(); // Start session to store success or error messages

include('../db_connection.php');

// Add carousel action
if (isset($_POST['registerbtn'])) {
    // Check if the image file is uploaded
    if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
        $image_name = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        // Generate a unique image name based on current timestamp
        $image_ext = pathinfo($image_name, PATHINFO_EXTENSION); // Get file extension
        $unique_image_name = uniqid('carousel_', true) . '.' . $image_ext; // Unique image name
        $image_folder = "upload/" . $unique_image_name;

        // Upload image to the server
        if (move_uploaded_file($image_tmp, $image_folder)) {
            // Insert carousel data into database
            $query = "INSERT INTO carousel (image) VALUES ('$unique_image_name')";
            if (mysqli_query($conn, $query)) {
                $_SESSION['message'] = "Carousel added successfully!";
                header("Location: carousel.php");
                exit;
            } else {
                $_SESSION['error'] = "Error adding carousel: " . mysqli_error($conn);
                header("Location: carousel.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Error uploading image.";
            header("Location: carousel.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "Please select an image.";
        header("Location: carousel.php");
        exit;
    }
}

// Delete carousel image action
if (isset($_POST['delete_btn'])) {
    if (isset($_POST['delete_id'])) {
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

        // Get image file path from database
        $query = "SELECT image FROM carousel WHERE id = '$delete_id'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $image_path = "upload/" . $row['image'];

            // Delete carousel from database
            $delete_query = "DELETE FROM carousel WHERE id = '$delete_id'";
            if (mysqli_query($conn, $delete_query)) {
                // Delete the image from the server
                if (file_exists($image_path)) {
                    unlink($image_path);
                }

                $_SESSION['message'] = "Carousel deleted successfully!";
                header("Location: carousel.php");
                exit;
            } else {
                $_SESSION['error'] = "Error deleting carousel: " . mysqli_error($conn);
                header("Location: carousel.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Carousel not found.";
            header("Location: carousel.php");
            exit;
        }
    }
}

// Update carousel image action
if (isset($_POST['update_btn'])) {
    $carousel_id = $_POST['edit_id'];

    // Handle image upload (only if new image is uploaded)
    if (!empty($_FILES['image']['name'])) {
        // Get the current image path from the database
        $query = "SELECT image FROM carousel WHERE id = '$carousel_id'";
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
        $unique_image_name = uniqid('carousel_', true) . '.' . $image_ext;  // Unique image name
        $image_path = "upload/" . $unique_image_name;

        // Move the uploaded image to the upload folder
        if (move_uploaded_file($image_tmp_name, $image_path)) {
            // Update the carousel in the database
            $query = "UPDATE carousel SET image='$unique_image_name' WHERE id=$carousel_id";
        } else {
            $_SESSION['error'] = "Error uploading the image.";
            header("Location: carousel.php");
            exit;
        }
    } else {
        // If no new image is uploaded, retain the old image
        $query = "UPDATE carousel SET image='$image_name' WHERE id=$carousel_id";
    }

    if (mysqli_query($conn, $query)) {
        $_SESSION['message'] = "Carousel updated successfully!";
        header("Location: carousel.php"); // Redirect back to carousel list
        exit;
    } else {
        $_SESSION['error'] = "Error updating carousel: " . mysqli_error($conn);
        header("Location: carousel.php");
        exit;
    }

    mysqli_close($conn);
}
?>
