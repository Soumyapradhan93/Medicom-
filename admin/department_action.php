<?php
session_start(); // Make sure the session is started to store messages

include('../db_connection.php');

// Add guide action
if (isset($_POST['registerbtn'])) {
    if (isset($_POST['name'], $_POST['description'], $_FILES['image']) && !empty($_FILES['image']['name'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $image_name = $_FILES['image']['name'];
        $description = $_POST['description'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $opening_hours = $_POST['opening_hours'];

        $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
        $unique_image_name = uniqid('card_', true) . '.' . $image_ext;
        $image_folder = "upload/" . $unique_image_name;

        if (move_uploaded_file($image_tmp, $image_folder)) {
            // Prepare and bind the statement
            $stmt = $conn->prepare("INSERT INTO department (name, description, image, opening_hours) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $description, $unique_image_name, $opening_hours); // "ssss" for string types
            if ($stmt->execute()) {
                $_SESSION['message'] = "Guide added successfully!";
                header("Location: department.php");
                exit;
            } else {
                $_SESSION['error'] = "Error adding guide: " . $stmt->error;
                header("Location: department.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Error uploading image.";
            header("Location: department.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "All fields are required.";
        header("Location: department.php");
        exit;
    }
}


// Delete guide action
if (isset($_POST['delete_btn'])) {
    if (isset($_POST['delete_id'])) {
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

        // Get image file path from database
        $query = "SELECT image FROM department WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $delete_id);  // "i" for integer type
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $image_path = "upload/" . $row['image'];

            // Delete guide from database
            $delete_query = "DELETE FROM department WHERE id = ?";
            $stmt = $conn->prepare($delete_query);
            $stmt->bind_param("i", $delete_id);
            if ($stmt->execute()) {
                // Delete the image from the server
                if (file_exists($image_path)) {
                    unlink($image_path);
                }

                $_SESSION['message'] = "Guide deleted successfully!";
                header("Location: department.php");
                exit;
            } else {
                $_SESSION['error'] = "Error deleting guide: " . $stmt->error;
                header("Location: department.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Guide not found.";
            header("Location: department.php");
            exit;
        }
    }
}


// Update Guide
if (isset($_POST['update_btn'])) {
    $guide_id = $_POST['edit_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $opening_hours = $_POST['opening_hours'];

    // Check if a new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        // Get the current image path from the database
        $query = "SELECT image FROM department WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $guide_id);  // "i" for integer type
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $old_image_path = "upload/" . $row['image'];

            // Delete the old image if it exists
            if (file_exists($old_image_path)) {
                unlink($old_image_path);
            }
        }

        // Upload the new image
        $image_name = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
        $unique_image_name = uniqid('card_', true) . '.' . $image_ext;
        $image_path = "upload/" . $unique_image_name;

        if (move_uploaded_file($image_tmp_name, $image_path)) {
            // Prepare and execute the update query
            $update_query = "UPDATE department SET name = ?, description = ?, image = ?, opening_hours = ? WHERE id = ?";
            $stmt = $conn->prepare($update_query);
            $stmt->bind_param("ssssi", $name, $description, $unique_image_name, $opening_hours, $guide_id);
            if ($stmt->execute()) {
                $_SESSION['message'] = "Guide updated successfully!";
                header("Location: department.php");
                exit;
            } else {
                $_SESSION['error'] = "Error updating guide: " . $stmt->error;
                header("Location: department.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Error uploading the image.";
            header("Location: department.php");
            exit;
        }
    } else {
        // If no new image is uploaded, update without changing the image
        $update_query = "UPDATE department SET name = ?, description = ?, opening_hours = ? WHERE id = ?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("sssi", $name, $description, $opening_hours, $guide_id);
        if ($stmt->execute()) {
            $_SESSION['message'] = "Guide updated successfully!";
            header("Location: department.php");
            exit;
        } else {
            $_SESSION['error'] = "Error updating guide: " . $stmt->error;
            header("Location: department.php");
            exit;
        }
    }
}


//     mysqli_close($conn);
// }
