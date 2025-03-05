<?php
include('header_link.php');
include('manubar.php');
include('Appointment_funtion.php');
$call = getAllUsers();
?>
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
                                    <th>Appointment Time</th>
                                    <th>Appointment Date</th>
                                    <th>Doctor</th>
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
                                            <?php echo $val['time'] ?>
                                        </td>
                                        <td>
                                            <?php echo $val['date'] ?>
                                        </td>
                                        <td>
                                            <?php echo $val['doctor'] ?>
                                        </td>
                                        <td>
                                            <a href="edit_appointment.php?uid=<?php echo $val['id']; ?>" class="btn btn-sm btn-info edit_btn"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        </td>
                                        <td>
                                            <a href="delete_appointment.php?uid=<?php echo $val['id']; ?>" class=" delete_info btn btn-sm btn-danger delete_btn"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <?php
    include('footer_link.php');
    ?>