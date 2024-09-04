<?php
include_once ('header.php');
?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Add Data Of Student</h2>
                <hr>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Form Details
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Basic Form</h3>
                                <hr>
                                <form role="form" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>First Name :</label>
                                        <input type="text" name="first_name" class="form-control"></input>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name :</label>
                                        <input type="text" name="last_name" class="form-control"></input>
                                    </div>
                                    <div class="form-group">
                                        <label>Email :</label>
                                        <input type="email" name="email" class="form-control"></input>
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile No :</label>
                                        <input type="number" name="m_no" class="form-control"></input>
                                    </div>
                                    <div class="form-group">
                                        <label>Profile Photo :</label>
                                        <input type="file" name="profile_pic" class="form-control"></input>
                                    </div>
                
                                    <button type="submit" name="submit" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-primary">Reset Button</button>

                                </form>
                            </div>
                        </div>
                        <!-- /. PAGE INNER  -->
                    </div>
                    <?php
                    include_once ('footer.php');
                    ?>