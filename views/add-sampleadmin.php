<?php 
    require('header.php');
    include('nav.php');
?>


        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="row" style="display: none;">
                <div style="width: 90%; margin: 25px 20px 0px;">
                    <div class="alert alert-success">
                        Page is published successfully.
                    </div>
                </div>
            </div>

            <div class="page-heading">
                <h3 class="page-title"> Add New Admin </h3>
            </div>

            

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="well well-sm">
                      <form class="form-horizontal" action="" method="post">
                      <fieldset>
                                        
                        <!-- USC ID input-->
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="control-label" for="name">USC ID Number</label>       
                            </div>
                            <div class="col-md-6">
                                <input id="name" name="name" type="text" placeholder="Your ID Number" class="form-control">    
                            </div>
                        </div>
                        
                        <!-- First Name input-->
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="control-label" for="name">First Name</label>       
                            </div>
                            <div class="col-md-6">
                                <input id="name" name="name" type="text" placeholder="Your First Name" class="form-control">    
                            </div>
                        </div>

                        <!-- First Name input-->
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="control-label" for="name">Last Name</label>       
                            </div>
                            <div class="col-md-6">
                                <input id="name" name="name" type="text" placeholder="Your Last Name" class="form-control">    
                            </div>
                        </div>
                
                        <!-- Email input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="email">E-mail</label>
                          <div class="col-md-9">
                            <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                          </div>
                        </div>
                
                        <!-- Email input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="email">E-mail</label>
                          <div class="col-md-9">
                            <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                          </div>
                        </div>
                        
                        <!-- Email input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="email">First Name</label>
                          <div class="col-md-9">
                            <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                          </div>
                        </div>

                        <!-- Email input-->
                        <div class="form-group">
                          <label class="col-md-3 control-label" for="email">Last Name</label>
                          <div class="col-md-9">
                            <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                          </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                          <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                          </div>
                        </div>
                      </fieldset>
                      </form>
                    </div>
                </div>
            </div>     
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  