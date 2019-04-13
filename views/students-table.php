<?php 
    require('header.php');
    include('nav.php');
    require('../controllers/StudentUserController.php'); 
    $Allstudents = loadAllStudents();
    $Clearedstudents = loadClearedStudents();
    $Blockedstudents = loadBlockedStudents();
?>
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuStudentUsers'); activePageAtSideNav('MenuStudentUsersTable'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h3 class="page-title"> <i class="sidebar-item-icon fa fa-users"></i> Student Users </h3>
            </div>

            <div class="row">
                <div class="inpage-alerts">
                    <?php include('../controllers/NotificationManager.php');?>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">All Student Users</div>
                                <div> <a href="add-userstudent.php"> <button class="btn add-btn"> <i class="fas fa-plus"></i> Add New Student</button> </a> </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-7-1" data-toggle="tab"><i class="fas fa-users"></i> All Students </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-7-2" data-toggle="tab"><i class="fas fa-user-check"></i> Cleared Students </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-7-3" data-toggle="tab"><i class="fas fa-user-slash"></i> Blocked Students </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-7-1">

                                        <!-- Display all students. -->
                                        <table class="table table-striped table-bordered table-hover" id="allstudents-table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>USC ID No.</th>
                                                    <th>Name</th>
                                                    <th>Course & Year</th>
                                                    <th>Status</th>
                                                    <th><center>Action</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(isset($Allstudents)){foreach($Allstudents as $as){  ?>
                                                    <tr>
                                                        <td style="display: none"><?php $id=$as['StudentID']; echo $id?></td>
                                                        <td><?php echo $as['USCIDNo'];?></td>
                                                        <td><?php echo $as['FirstName'];?> <?php echo $as['LastName'];?></td>
                                                        <td><?php echo $as['Course'];?> - <?php echo $as['YearLevel'];?> </td>
                                                        <td><?php echo $as['Status'];?></td>
                                                        <td> <center> <button class="btn btn-rptusr" onclick="loadDeleteStudent(<?php echo $id; ?>)"> <i class="fas fa-trash-alt"></i> Delete </button> </center> </td>
                                                    </tr> 
                                                <?php }} ?>                                                
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-pane" id="tab-7-2">
                                    

                                        <!-- Display all students with CLEARED status only. -->
                                        <table class="table table-striped table-bordered table-hover" id="clearedstudents-table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>ID No.</th>
                                                    <th>Name</th>
                                                    <th>Course & Year</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(isset($Clearedstudents)){foreach($Clearedstudents as $cs){  ?>
                                                    <tr>
                                                        <td><?php echo $cs['USCIDNo'];?></td>
                                                        <td><?php echo $cs['FirstName'];?> <?php echo $cs['LastName'];?></td>
                                                        <td><?php echo $cs['Course'];?> - <?php echo $cs['YearLevel'];?> </td>
                                                    </tr> 
                                                <?php }} ?>                                                
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-pane fade"  id="tab-7-3">
                                    

                                        <!-- Display all students with BLOCKED status only. -->
                                        <table class="table table-striped table-bordered table-hover" id="blockedstudents-table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>ID No.</th>
                                                    <th>Name</th>
                                                    <th>Course & Year</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(isset($Blockedstudents)){foreach($Blockedstudents as $bs){  ?>
                                                    <tr>
                                                        <td style="display: none"><?php $id=$bs['StudentID']; echo $id?></td>
                                                        <td><?php echo $bs['USCIDNo'];?></td>
                                                        <td><?php echo $bs['FirstName'];?> <?php echo $bs['LastName'];?></td>
                                                        <td><?php echo $bs['Course'];?> - <?php echo $bs['YearLevel'];?> </td>
                                                        <td> <center> <button class="btn btn-rptusrall" onclick="loadUnblockStudents(<?php echo $id; ?>)"> Unblock </button> </center> </td>
                                                    </tr> 
                                                <?php }} ?>                                                
                                            </tbody>
                                        </table>

                                    </div>
                                </div><br>
                            </div>
                        </div>                  
                    </div>
                </div>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  