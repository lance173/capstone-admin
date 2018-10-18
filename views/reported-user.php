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
                        <div class="ibox-head">                              
                            <div class="ibox-title"> 
                                <img src="../assets/img/default-avatar.jpg" class="reporter-img"> Joshua Jaluag <span style="font-weight: normal;"> reported: </span> 
                            </div>
                            <div>
                                May 15, 2018
                            </div>                                                                          
                        </div>
                        <div class="ibox-body">                           
                            <h4 class="report-reason"> Use of profanity. </h4>
                            <div class="reported-comment">
                                <img src="../assets/img/default-avatar.jpg"> <div class="reported-nombre"> Lemon Blue </div>
                                <p>
                                    The new website is so fucking ugly. I prefer the old website more.
                                </p>
                            </div>                                                             
                        </div>
                        <div class="ibox-footer">
                            <div style="padding-left: 10px;"> From Article: <a href="#"> USC Library Launches New Website </a> </div>                            
                        </div>
                    </div>
                    <div class="ibox">                        
                        <div class="ibox-head">                              
                            <div class="ibox-title"> 
                                <img src="../assets/img/default-avatar.jpg" class="reporter-img"> Lance Sasedor <span style="font-weight: normal;"> reported: </span> 
                            </div>
                            <div>
                                June 25, 2018
                            </div>                                                                          
                        </div>
                        <div class="ibox-body">                           
                            <h4 class="report-reason"> Unruly behavior. </h4>
                            <div class="reported-comment">
                                <img src="../assets/img/default-avatar.jpg"> <div class="reported-nombre"> Lemon Blue </div>
                                <p>
                                    You are so stupid.
                                </p>
                            </div>                                                             
                        </div>
                        <div class="ibox-footer">
                            <div style="padding-left: 10px;"> From Article: <a href="#"> New Facilities at LRC </a> </div>                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  