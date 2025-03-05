<?php
include('header_link.php');
include('manubar.php');
include('contact_funtion.php');
//getAllUsers();
?>
<div class="row my-5">
    <div class="col">
        <table class="table bg-white rounded shadow-sm  table-hover">
            <thead>
                <tr class="bg-info">
                <tr class="bg-info">
                    <th>SL</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Massage</th>
                    <!-- <th>Edit</th> -->
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $alldata = getAllUsers();
                if (!empty($alldata)) {
                    foreach ($alldata as $key => $data) {
                ?>
                        <tr>
                            <td>
                                <?php echo ($key + 1) ?>
                            </td>
                            <td>
                                <?php echo $data['fname'] ?>
                            </td>
                            <td>
                                <?php echo $data['lname'] ?>
                            </td>
                            <td>
                                <?php echo $data['mail'] ?>
                            </td>
                            <td>
                                <?php echo $data['pnumber'] ?>
                            </td>
                            <td>
                                <?php echo $data['comment'] ?>
                            </td>
                            <!-- <td>
                            <a href="edit_appointment.php?uid=<?php echo $val['id']; ?>" class="btn btn-sm btn-info edit_btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </td> -->
                            <td>
                                <a href="delete_contact.php ?uid=<?php echo $data['id']; ?>" class=" delete_info btn btn-sm btn-danger delete_btn"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Your cart is empty.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include('footer_link.php');
?>