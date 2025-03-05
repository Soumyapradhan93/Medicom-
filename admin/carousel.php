<?php
include('header_link.php');
include('manubar.php');
?>

<!-- Add Carousel Modal -->
<div class="modal fade" id="addaminprofile" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="examplemodalLabel">Add carousel card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="carousel_action.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- <div class="mb-3">
                        <label for="name" class="form-label">carousel Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div> -->
                    <div class="mb-3">
                        <label for="image_url" class="form-label">Carousel Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addaminprofile">
                    Add Carousel Card
                </button>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                // Database connection
                $conn = mysqli_connect('localhost', 'root', '', 'rg_soumya');
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Fetch carousel images
                $query = "SELECT * FROM carousel";
                $query_run = mysqli_query($conn, $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Carousel Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($row = mysqli_fetch_assoc($query_run)) {
                                $imagePath = "upload/" . htmlspecialchars($row['image']);
                                $defaultImagePath = "../profile/defaultimg.png";
                        ?>
                                <tr>
                                    <td>
                                        <?php
                                        // Check if the image exists before displaying it
                                        if (!empty($row['image']) && file_exists($imagePath)) {
                                            echo '<img src="' . $imagePath . '" width="100" height="100" alt="Carousel Image">';
                                        } else {
                                            echo '<img src="' . $defaultImagePath . '" width="100" height="100" alt="Default Image">';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <form action="carousel_edit.php" method="POST">
                                            <input type="hidden" name="edit_id" value="<?php echo htmlspecialchars($row["id"]); ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="carousel_action.php" method="POST" onsubmit="return confirmDelete()">
                                            <input type="hidden" name="delete_id" value="<?php echo htmlspecialchars($row["id"]); ?>">
                                            <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='3'>No records found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete() {
        return confirm("Are you sure you want to delete?");
    }
</script>

<?php
include('footer_link.php');
?>
