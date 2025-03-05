<?php
include('header_link.php');
include('manubar.php');
include('../db_connection.php');
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
            <form action="doctor_action.php" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">doctor Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">doctor qualification</label>
                        <input type="text" class="form-control" id="qualification" name="qualification">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">doctor Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="registerbtn" class="btn btn-primary" value="registerbtn">Save</button>
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
                // $conn = mysqli_connect('localhost', 'root', '', 'rg_soumya');
                // if (!$conn) {
                //     die("Connection failed: " . mysqli_connect_error());
                // }

                $query = "SELECT * FROM doctor";
                $query_run = mysqli_query($conn, $query);
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <!-- <th>ID</th> -->
                            <th>Name</th>
                            <th>qualification</th>
                            <th>doctor Image</th>
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
                                    <td><?php echo htmlspecialchars($row['qualification']); ?></td>
                                    <!-- <td><?php echo htmlspecialchars($row[''])?></td> -->
                                    <td>
                                        <?php
                                        if (!empty($row['image']) && file_exists($imagePath)) {
                                            echo '<img src="' . $imagePath . '" width="100" height="100" alt="Guide Image">';
                                        } else {
                                            echo '<img src="' . $defaultImagePath . '" width="100" height="100" alt="Default Image">';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <form action="doctor_edit.php" method="POST">
                                            <input type="hidden" name="edit_id" value="<?php echo htmlspecialchars($row["id"]); ?>">
                                            <button type="submit" name="edit_btn" class="btn btn-success">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="doctor_action.php" method="POST">
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