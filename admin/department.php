<?php
include('header_link.php');
include('manubar.php');
?>

<!-- Add Guide Modal -->
<div class="modal fade" id="addaminprofile" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="examplemodalLabel">Add card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="department_action.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">department Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">description</label>
                        <input type="text" class="form-control" id="name" name="description" required>
                    </div>
                    <div class="mb-3">
                        <label for="image_url" class="form-label">department Image</label>
                        <input type="file" class="form-control" id="image_url" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">opening_hours</label>
                        <input type="text" class="form-control" id="name" name="opening_hours" required>
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
                    Add card
                </button>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'rg_soumya');
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $query = "SELECT * FROM department";
                $query_run = mysqli_query($conn, $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Name</th>
                            <th>description</th>
                            <th>department Image</th>
                            <th>opening_hours</th>
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
                                    <!-- <td><?php echo htmlspecialchars($row["id"]); ?></td> -->
                                    <td><?php echo htmlspecialchars($row["name"]); ?></td>
                                    <td><?php echo htmlspecialchars($row['description']); ?></td>
                                    <td>
                                        <?php
                                        if (!empty($row['image']) && file_exists($imagePath)) {
                                            echo '<img src="' . $imagePath . '" width="100" height="100" alt="Guide Image">';
                                        } else {
                                            echo '<img src="' . $defaultImagePath . '" width="100" height="100" alt="Default Image">';
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo htmlspecialchars($row['opening_hours']); ?></td>
                                    <td>
                                        <form action="department_edit.php" method="POST">
                                            <input type="hidden" name="edit_id" value="<?php echo htmlspecialchars($row["id"]); ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="departmentr_action.php" method="POST">
                                            <input type="hidden" name="delete_id" value="<?php echo htmlspecialchars($row["id"]); ?>">
                                            <button type="submit" name="delete_btn" class="btn btn-danger" onclick="return confirmDelete()">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='5'>No records found</td></tr>";
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