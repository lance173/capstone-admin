<?php 
    require('header.php');
    include('nav.php');
?>


        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h3 class="page-title"> <i class="sidebar-item-icon fa fa-flag"></i> Reports </h3>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="ibox">                        
                        <div class="ibox-body">
                            <div class="imgupld-section">
                                <img src="../assets/img/default-avatar.jpg" class="default-adminimg" id="output_image">
                                <div>
                                    <br> Lemon Blue
                                    <br> BS ARCH - 4
                                </div>
                            </div>
                        </div>
                        <div class="ibox-footer"  style="text-align: center;">
                            <button class="btn btn-lg btn-danger" style="margin-top: 25px"> <i class="fas fa-ban"></i> Block User</button>

                                <div style="margin-top: 25px"> 
                                    <i class="fas fa-info-circle"></i> A blocked user will not be able to comment on articles.
                                </div>   
                        </div>
                    </div> 
                    <div class="ibox">                        
                        <div class="ibox-body" style="text-align: center;">                                
                            <button class="btn btn-warning"> <i class="fas fa-trash-alt"></i> Delete Report</button>          
                        </div>
                    </div>                  
                </div>
                <div class="col-md-9">
                    <div class="ibox">                        
                        <div class="ibox-body">
                             <!-- USC ID input-->   
                                <div class="form-group">
                                    Reported by <b> Joshua Jaluag </b>
                                </div>                                               
                        </div>
                    </div>
                </div>
            </div>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  