<?php
session_start(); // Make sure the session is started to store messages

include('db_connection.php');

// Add guide action
if (isset($_POST['registerbtn'])) {
    if (isset($_POST['name'], $_POST['email'], $_FILES['phone']) && !empty($_FILES['image']['name'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $image_name = $_FILES['image']['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $image_tmp = $_FILES['image']['tmp_name'];
        $address = $_POST['address'];

        $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
        $unique_image_name = uniqid('card_', true) . '.' . $image_ext;
        $image_folder = "upload/" . $unique_image_name;

        if (move_uploaded_file($image_tmp, $image_folder)) {
            // Prepare and bind the statement
            $stmt = $conn->prepare("INSERT INTO profile (name, email, phone, address) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $name, $description, $unique_image_name, $opening_hours); // "ssss" for string types
            if ($stmt->execute()) {
                $_SESSION['message'] = "Guide added successfully!";
                header("Location: profile.php");
                exit;
            } else {
                $_SESSION['error'] = "Error adding guide: " . $stmt->error;
                header("Location: profile.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Error uploading image.";
            header("Location: profile.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "All fields are required.";
        header("Location: profile.php");
        exit;
    }
}


// Delete guide action
if (isset($_POST['delete_btn'])) {
    if (isset($_POST['delete_id'])) {
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

        // Get image file path from database
        $query = "SELECT image FROM profile WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $delete_id);  // "i" for integer type
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $image_path = "upload/" . $row['image'];

            // Delete guide from database
            $delete_query = "DELETE FROM profile WHERE id = ?";
            $stmt = $conn->prepare($delete_query);
            $stmt->bind_param("i", $delete_id);
            if ($stmt->execute()) {
                // Delete the image from the server
                if (file_exists($image_path)) {
                    unlink($image_path);
                }

                $_SESSION['message'] = "profile deleted successfully!";
                header("Location: profile.php");
                exit;
            } else {
                $_SESSION['error'] = "Error deleting profile: " . $stmt->error;
                header("Location: profile.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "profile not found.";
            header("Location: profile.php");
            exit;
        }
    }
}


// Update Guide
if (isset($_POST['update_btn'])) {
    $guide_id = $_POST['edit_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Check if a new image is uploaded
    if (!empty($_FILES['image']['name'])) {
        // Get the current image path from the database
        $query = "SELECT image FROM profile WHERE id = ?";
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
            $update_query = "UPDATE profile SET name = ?, email = ?, phone = ?, address = ? WHERE id = ?";
            $stmt = $conn->prepare($update_query);
            $stmt->bind_param("ssssi", $name, $email, $unique_image_name, $phone, $guide_id);
            if ($stmt->execute()) {
                $_SESSION['message'] = "profile updated successfully!";
                header("Location: profile.php");
                exit;
            } else {
                $_SESSION['error'] = "Error updating profile: " . $stmt->error;
                header("Location: profile.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Error uploading the image.";
            header("Location: profile.php");
            exit;
        }
    } else {
        // If no new image is uploaded, update without changing the image
        $update_query = "UPDATE profile SET name = ?, email = ?, phone = ? , address= ? WHERE id = ?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("sssi", $name, $email, $phone, $address, $guide_id);
        if ($stmt->execute()) {
            $_SESSION['message'] = "profile updated successfully!";
            header("Location: profile.php");
            exit;
        } else {
            $_SESSION['error'] = "Error updating profile: " . $stmt->error;
            header("Location: profile.php");
            exit;
        }
    }
}


//     mysqli_close($conn);
// }
