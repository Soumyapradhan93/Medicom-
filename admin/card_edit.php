<?php
include('header_link.php');
include('manubar.php');

if (isset($_POST['edit_btn'])) {
    $guide_id = $_POST['edit_id'];


    $conn = mysqli_connect('localhost', 'root', '', 'rg_soumya');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM card WHERE id = $guide_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $guide = mysqli_fetch_assoc($result);
    } else {
        die("Error fetching guide data: " . mysqli_error($conn));
    }
} else {
    header("Location: card.php");
    exit;
}

?>

<!-- Edit Guide Form -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit card</h6>
        </div>
        <div class="card-body">
            <form action="card_action.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="edit_id" value="<?php echo htmlspecialchars($guide['id']); ?>">

                <div class="mb-3">
                    <label for="name" class="form-label">card Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($guide['name']); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">card URL</label>
                    <input type="text" class="form-control" id="name" name="url" value="<?php echo htmlspecialchars($guide['url']); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="image_url" class="form-label">card Image</label>
                    <input type="file" class="form-control" id="image_url" name="image_url">
                    <!-- <small class="form-text text-muted">Leave empty to keep the current image.</small> -->
                </div>

                <div class="mb-3">
                    <?php
                        $imagePath = "upload/" . htmlspecialchars($guide['image']);
                        $defaultImagePath = "../profile/defaultimg.png";
                        if (!empty($guide['image']) && file_exists($imagePath)) {
                            echo '<img src="' . $imagePath . '" width="100" height="100" alt="Current Guide Image">';
                        } else {
                            echo '<img src="' . $defaultImagePath . '" width="100" height="100" alt="Default Image">';
                        }
                        ?>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancel</button>
                    <button type="submit" name="update_btn" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>



<?php

include('footer_link.php');
?>