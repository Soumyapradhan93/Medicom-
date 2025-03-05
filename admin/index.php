<?php

include('header_link.php');
include('manubar.php');
include("../db_connection.php");
include ("admin_function.php");
global $conn;
$call = getAllUsers();

?>

<?php
if (isset($_SESSION['username'])) {

?>




            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Doctors</p>
                            </div>
                            <i class="fa fa-user-md fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Patient</p>
                            </div>
                            <i
                                class="fa fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <!-- <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fa fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div> -->

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%65</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fa fa-arrow-up fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <!-- <h3 class="fs-4 mb-3">All Users</h3> <i class="fa fa-arrow-up" aria-hidden="true"></i> -->
                    <!-- <div id="tab1" class="tab-pane fade active in"> -->
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr class="bg-info">
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Gender</th>
                                    <th>password</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sl = 1;
                                foreach ($call as $val) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $sl++; ?>
                                        </td>
                                        <td>
                                            <?php echo $val['name'] ?>
                                        </td>
                                        <td>
                                            <?php echo $val['email'] ?>
                                        </td>
                                        <td>
                                            <?php echo $val['phone_number'] ?>
                                        </td>
                                        <td>
                                            <?php echo $val['gender'] ?>
                                        </td>
                                        <td>
                                            <?php echo $val['password'] ?>
                                        </td>
                                        <td>
                                            <a href="edit_user.php?id=<?php echo $val['id']; ?>" class="btn btn-sm btn-info edit_btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        </td>
                                        <td>
                                            <a href="delete_user.php?uid=<?php echo $val['id']; ?>" class=" delete_info btn btn-sm btn-danger delete_btn"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>


                
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
<?php
}
else{
    echo '<script type="text/javascript">alert("Please Login First...");window.location.href="login_page.php";</script>';

}
?>
    <?php
    include('footer_link.php');
    ?>