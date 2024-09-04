<?php
include_once('header.php');
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Manage Data</h2>
                <h5>Welcome Admin , Love to see you back. </h5>

            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <!--   Kitchen Sink -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Student Data
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>M.No</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    if ($manage_data > 0) {

                                        foreach ($manage_data as $W) {

                                            ?>
                                            <tr>
                                                <td><?php echo $W->id; ?> </td>
                                                <td><?php echo $W->first_name; ?></td>
                                                <td><?php echo $W->last_name; ?></td>
                                                <td><?php echo $W->email; ?></td>
                                                <td><?php echo $W->m_no; ?></td>
                                                <td><img src="upload/userimg/<?php echo $W->profile_pic; ?>" alt=""
                                                        width="50px"></td>
                                                <td>
                                                    <a href="edit_data?e_data=<?php echo $W->id; ?>"
                                                        class="btn btn-success">Edit</a>
                                                    <a href="delete?ddata=<?php echo $W->id; ?>"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td align="center" colspan="7">
                                                <h4>Data Not Found</h4>
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
                <!-- End  Kitchen Sink -->
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <?php
    include_once('footer.php');
    ?>