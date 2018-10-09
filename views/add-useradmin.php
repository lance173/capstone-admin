<?php 
    require('header.php');
    include('nav.php');
?>


        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="row" style="display: none;">
                <div class="inpage-alerts">
                    <div class="alert alert-success">
                        User Admin is added successfully.
                    </div>
                </div>
            </div>

            <div class="page-heading">
                <h3 class="page-title"> Add New Admin </h3>
            </div>

            
            <form class="form-horizontal" action="" method="post">
                <fieldset>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-3 imgupld-section">
                            <img src="../assets/img/admin-avatar.png" class="default-adminimg" >
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>

                        <div class="col-md-9">                  
                                <!-- USC ID input-->   
                                <div class="form-group">
                                    <label class="control-label" for="name">USC ID Number</label>
                                    <input id="name" name="name" type="text" placeholder="USC ID Number" class="form-control"> 
                                </div>                                                             
                                <!-- First Name input-->
                                <div class="row" style="margin-bottom: 1rem;">
                                    <div class="col-md-6">
                                        <label for="firstname">First Name</label>       
                                        <input id="firstname" name="firstname" type="text" placeholder="First Name" class="form-control">    
                                    </div>
                                    <!-- Last Name input-->
                                    <div class="col-md-6">
                                        <label class="control-label" for="name">Last Name</label>
                                        <input id="lastname" name="lastname" type="text" placeholder="Last Name" class="form-control">    
                                    </div>
                                </div>
                                
                                <!--Job Position input-->
                                <div class="form-group">                                    
                                    <label class="control-label" for="name">USC Library - Job Position</label>
                                    <input id="name" name="name" type="text" placeholder="Job Position" class="form-control"> 
                                </div>

                                <!-- Email input-->
                                <div class="form-group">                                    
                                    <label class="control-label" for="name">Email</label>
                                    <input id="name" name="name" type="text" placeholder="Email" class="form-control"> 
                                </div>
                        
                                <!-- Password input-->
                                <div class="form-group">
                                    <label class="control-label" for="email">Password</label>
                                    <input id="password" name="Password" type="text" placeholder="Password is set to USC ID Number as default" class="form-control" disabled="disabled">
                                </div>  

                                

                                <div class="form-group">
                                    <label class="control-label" for="site-role">Site Role</label>
                                    <select id="" name="" type="" class="form-control">
                                        <option>System Admin</option>
                                        <option>Editor</option>
                                        <option>Author / Writer</option>
                                    </select>
                                    <div class="role-descrip">
                                        <i class="fas fa-info-circle"></i> System Admin can:
                                        <ul>
                                            <li> Can everything in t </li>
                                            <li>edfdd</li>
                                            <li>fdfd</li>
                                        </ul>
                                    </div>
                                    
                                </div>
            
                                <!-- Form actions -->
                                <div class="form-group">
                                  <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
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