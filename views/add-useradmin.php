<?php 
    require('header.php');
    include('nav.php');

    if($_SESSION['profile']['SiteRole'] == 'Author' || $_SESSION['profile']['SiteRole'] == 'Editor'){
    ?>
        <script>
            window.location='restrictedpage.php';
        </script> 
    <?php
    }

?>
<!-- <?php //session_start(); ?> -->
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuAdminUsers'); activePageAtSideNav('MenuAddAdminUser'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div style="margin-top: 20px;">
                <a href="admin-table.php"> <i class="fas fa-arrow-left"></i> Back to Admins List </a>
            </div>  

            <div class="page-heading">
                <h3 class="page-title"> Add New Admin </h3>
            </div>

            <div class="row">
                <div class="inpage-alerts">
                    <?php include('../controllers/NotificationManager.php');?>
                </div>
            </div>

            
            <form class="form-horizontal" method="POST" action="../controllers/AdminUserController.php" enctype="multipart/form-data">
                <fieldset>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-3 imgupld-section">
                            <img src="../assets/img/admin-avatar.png" class="default-adminimg" id="output_image">
                            <input type="file" name="admin_photo" id="fileToUpload" accept="image/*" onchange="preview_image(event)">
                        </div>
                        <div class="col-md-5">                  
                                <!-- USC ID input-->   
                                <div class="form-group">
                                    <label class="control-label" for="name">USC ID Number</label>
                                    <input id="uscIDNo" name="uscIDNo" type="text" placeholder="USC ID Number" class="form-control" required>
                                </div>                                                             
                                <!-- First Name input-->
                                <div class="row" style="margin-bottom: 1rem;">
                                    <div class="col-md-6">
                                        <label for="firstname">First Name</label>       
                                        <input id="firstName" name="firstName" type="text" placeholder="First Name" class="form-control" required>    
                                    </div>
                                    <!-- Last Name input-->
                                    <div class="col-md-6">
                                        <label class="control-label" for="name">Last Name</label>
                                        <input id="lastName" name="lastName" type="text" placeholder="Last Name" class="form-control" required>    
                                    </div>
                                </div>
                                
                                <!--Job Position input-->
                                <div class="form-group">                                    
                                    <label class="control-label" for="name">USC Library - Job Position</label>
                                    <input id="position" name="position" type="text" placeholder="Job Position" class="form-control" required> 
                                </div>

                                <!-- Email input-->
                                <div class="form-group">                                    
                                    <label class="control-label" for="name">Email</label>
                                    <input id="email" name="email" type="text" placeholder="Email" class="form-control" required> 
                                </div>
                        
                                <!-- Password input-->
                                <div class="form-group">
                                    <label class="control-label" for="email">Password</label>
                                    <input id="password" name="Password" type="text" placeholder="Password is set to USC ID Number as default" class="form-control" disabled="disabled">
                                </div>

                                

                                <div class="form-group site-roleselect">
                                    <label class="control-label" for="site-role">Site Role</label>
                                    <select id="siteRole" name="siteRole" class="form-control"  onchange="roleSelect();" required>
                                        <option selected disabled hidden>Select Role for admin in this website</option>
                                        <option value="System Administrator">System Admin</option>
                                        <option value="Editor">Editor</option>
                                        <option value="Author">Author / Writer</option>
                                    </select>

                                    <div class="role-descrip" id="role-sysad">
                                        <i class="fas fa-info-circle"></i> System Admin can:
                                            <ul>
                                                <li> Add and Manage Admins  </li>
                                                <li> Add and Manage Students</li>
                                                <li> Approve Articles and Webpages</li>
                                                <li> Write and Manage Articles </li>
                                                <li> Approve Articles </li>
                                                <li> Add and Mange Webpages</li>
                                                <li> Edit website appearance</li>
                                            </ul>
                                    </div>

                                    <div class="role-descrip" id="role-editr">
                                        <i class="fas fa-info-circle"></i> Editor can:
                                            <ul>
                                                <li> Write and Manage Articles </li>
                                                <li> Approve Articles </li>
                                                <li> Add and Mange Webpages</li>
                                                <li> Edit website appearance</li>
                                            </ul>
                                    </div>

                                    <div class="role-descrip" id="role-autr">
                                        <i class="fas fa-info-circle"></i> Author/Writer can:
                                            <ul>
                                                 <li> Only Write Articles </li>                                                 
                                            </ul>
                                    </div>
                                    
                                </div>
            
                                <!-- Form actions -->
                                <div class="form-group">
                                  <div class="col-md-12 text-right">
                                    <button type="submit" name="addAdminUser" class="btn btn-primary btn-lg">Submit</button>
                                  </div>
                                </div>                              
                        </div>
                    </div>   
                </fieldset>
            </form>       

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  