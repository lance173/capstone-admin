<?php 
    require('header.php');
    include('nav.php');
    require('../controllers/StudentUserController.php'); 

    if($_SESSION['profile']['SiteRole'] == 'Author' || $_SESSION['profile']['SiteRole'] == 'Editor'){
    ?>
        <script>
            window.location='restrictedpage.php';
        </script> 
    <?php
    }

?>

    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuStudentUsers'); activePageAtSideNav('MenuAddStudentUser'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div style="margin-top: 20px;">
                <a href="students-table.php"> <i class="fas fa-arrow-left"></i> Back to Students List </a>
            </div>  

            <div class="page-heading">
                <center> <h3 class="page-title"> Add New Student User</h3> </center>
            </div>

            <div class="row">
                <div class="inpage-alerts">
                    <?php include('../controllers/NotificationManager.php');?>
                </div>
            </div>

            <div class="ibox">
                <div class="ibox-body"> 
                    <form class="form-horizontal" method="POST" action="../controllers/StudentUserController.php" enctype="multipart/form-data">
                        <fieldset>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-6 use-dud">

                                    <div class="imgupld-section">
                                        <img src="../assets/img/default-avatar.jpg" class="default-adminimg" id="output_image">
                                        <input type="file" name="student_photo" accept="image/*" onchange="preview_image(event)" id="fileToUpload">                
                                    </div>
                                        <!-- USC ID input-->   
                                        <div class="form-group">
                                            <label class="control-label" for="name">USC ID Number</label>
                                            <input id="name" name="id_number" type="text" placeholder="USC ID Number" class="form-control" required> 
                                        </div>                                                             
                                        <!-- First Name input-->
                                        <div class="row" style="margin-bottom: 1rem;">
                                            <div class="col-md-6">
                                                <label for="firstname">First Name</label>       
                                                <input id="firstname" name="firstname" type="text" placeholder="First Name" class="form-control" required>    
                                            </div>
                                            <!-- Last Name input-->
                                            <div class="col-md-6">
                                                <label class="control-label" for="name">Last Name</label>
                                                <input id="lastname" name="lastname" type="text" placeholder="Last Name" class="form-control" required>    
                                            </div>
                                        </div>
                                        <div class="row" style="margin-bottom: 1rem;">
                                            <div class="col-md-9">
                                                <label for="course">Course</label>       
                                                <input id="course" name="course" type="text" placeholder="Course" class="form-control" required>    
                                            </div>
                                            <!-- Last Name input-->
                                            <div class="col-md-3">
                                                <label class="control-label" for="year">Year Level</label>
                                                <input id="yearlvl" name="yearlvl" type="text" placeholder="Year Level" class="form-control" required>    
                                            </div>
                                        </div>                               
                                       
                                        <!-- Password input-->
                                        <div class="form-group">
                                            <label class="control-label" for="password">Password</label>
                                            <input id="password" name="password" type="text" placeholder="Password is set to USC ID Number as default" class="form-control" disabled="disabled">
                                        </div>  
                    
                                        <!-- Form actions -->
                                        <div class="form-group">
                                          <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-success btn-lg" name="btnAddStudentUser">Submit</button>
                                          </div>
                                        </div>                              
                                </div>                              
                        </fieldset>
                    </form>
                </div>
             </div>
                   

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  