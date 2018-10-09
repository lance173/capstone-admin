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
                <center> <h3 class="page-title"> Add New Student User</h3> </center>
            </div>

            
            <form class="form-horizontal" action="" method="post">
                <fieldset>
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-6 use-dud">

                            <div class="imgupld-section">
                                <img src="../assets/img/default-avatar.jpg" class="default-adminimg" >
                                <input type="file" name="fileToUpload" id="fileToUpload">
                            </div>
                            
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
                                <div class="row" style="margin-bottom: 1rem;">
                                    <div class="col-md-9">
                                        <label for="course">Course</label>       
                                        <input id="course" name="course" type="text" placeholder="Course" class="form-control">    
                                    </div>
                                    <!-- Last Name input-->
                                    <div class="col-md-3">
                                        <label class="control-label" for="year">Year</label>
                                        <input id="year" name="year" type="text" placeholder="Year" class="form-control">    
                                    </div>
                                </div>                               
                               
                                <!-- Password input-->
                                <div class="form-group">
                                    <label class="control-label" for="email">Password</label>
                                    <input id="password" name="Password" type="text" placeholder="Password is set to USC ID Number as default" class="form-control" disabled="disabled">
                                </div>  

            
                                <!-- Form actions -->
                                <div class="form-group">
                                  <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-success btn-lg">Submit</button>
                                  </div>
                                </div>                              
                        </div>
                      
                </fieldset>
            </form>       

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  