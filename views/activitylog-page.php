<?php 
    require('header.php');
    include('nav.php');
?>
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuActivityLogPage'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="row" style="display: none;">
                <div class="inpage-alerts">
                    <div class="alert alert-success">
                        Slider changed successfully.
                    </div>
                </div>
            </div>


            <div class="page-heading">
                <h3 class="page-title"> <i class="fas fa-hourglass-start"></i> Activity Log </h3>
                <div style="margin-left: 50px;"> 
                    <i class="fas fa-info-circle"></i> Activity Log page bla bla bla
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">
                    <div class="ibox" style="margin-top: 20px;">
                        <div class="ibox-body">
                                <div class="table-responsive">  
                                    <table class="table">                                            
                                        <tbody> 

                                        <?php $viewdetailsid = "viewdtls1";?>

                                           
                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')" data-toggle="modal" data-target=".bd-example-modal-lg">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u5.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Michael Jordan </b> added a new Page  
                                                        <div class="activity-timeanddate">
                                                            <i class="far fa-window-restore"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                                <td> 
                                                    <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                        View Details
                                                    </div>    
                                                </td>
                                            </tr>

                                           <?php include('activity-detailsmodal.php'); ?>                                                                                          
                                        <?php $viewdetailsid++; ?>

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')" data-toggle="modal" data-target=".viewdetail2-modal-lg">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u3.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Nick Fury </b> added 10 New Student Users  
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-user-plus"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                                <td> 
                                                    <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                        View Details
                                                    </div>    
                                                </td>
                                            </tr>


                                            <!-- just php include modals -->

                                            <div class="modal fade viewdetail2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                              <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Activity Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                    </button>
                                                  </div>
                                                  <div class="modal-body">

                                                    <div class="row">          
                                                        <div class="col-md-2"  style="margin-left: 100px;">
                                                          <img src="../assets/img/users/u3.jpg" height="110px" width="110px" style="border-radius: 100px; "> 
                                                        </div>
                                                        <div class="col-md-7">
                                                          <div class="activity-actiondone"> <h2> Nick Fury </h2>  
                                                              <div class="activity-timeanddate">
                                                                  <h6> May 22, 2018 • 12:34 PM </h6>
                                                              </div>
                                                          </div> 
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top: 20px;">
                                                      <hr width="70%" style="border: 1px solid #bababa;">
                                                        <div style="margin-left: 140px; margin-top: 15px;">
                                                            <div class="activity-data"> 
                                                                <i class="fas fa-user-plus"></i> added student user <b>15101101 - User No1</b>
                                                            </div>
                                                            <div class="activity-data"> 
                                                                <i class="fas fa-user-plus"></i> added student user <b>15101102 - User No2</b>
                                                            </div>
                                                            <div class="activity-data"> 
                                                                <i class="fas fa-user-plus"></i> added student user <b>15101103 - User No3</b>                                            
                                                            </div>
                                                            <div class="activity-data">
                                                                <i class="fas fa-user-plus"></i> added student user <b>15101104 - User No4</b>
                                                            </div>
                                                            <div class="activity-data">
                                                                <i class="fas fa-user-plus"></i> added student user <b>15101105 - User No5</b>
                                                            </div>
                                                            <div class="activity-data">
                                                                <i class="fas fa-user-plus"></i> added student user <b>15101106 - User No6</b>
                                                            </div>
                                                            <div class="activity-data">
                                                                <i class="fas fa-user-plus"></i> added student user <b>15101107 - User No7</b>
                                                            </div>
                                                            <div class="activity-data">
                                                                <i class="fas fa-user-plus"></i> added student user <b>15101108 - User No8</b>
                                                            </div>
                                                            <div class="activity-data">
                                                                <i class="fas fa-user-plus"></i> added student user <b>15101109 - User No9</b>
                                                            </div>
                                                            <div class="activity-data">
                                                                <i class="fas fa-user-plus"></i> added student user <b>15101010 - User No10</b>
                                                            </div>     
                                                      </div>
                                                    </div>                                                    
                                                  </div>
                                                  <div class="modal-footer">
                                                    
                                                  </div>
                                                </div>
                                              </div>
                                            </div> 

                                        <?php $viewdetailsid++; ?>

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u1.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Phil Coulson </b> approved 3 Articles  
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-check"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                                <td> 
                                                    <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                        View Details
                                                    </div>    
                                                </td>
                                            </tr>

                                        <?php $viewdetailsid++; ?>

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u2.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Carol Danvers </b> edited an Article  
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-pen"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                                <td> 
                                                    <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                        View Details
                                                    </div>    
                                                </td>
                                            </tr>

                                        <?php $viewdetailsid++; ?>

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u4.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Steve Rogers </b> wrote an Article  
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-file-alt"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                                <td> 
                                                    <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                        View Details
                                                    </div>    
                                                </td>
                                            </tr>

                                        <?php $viewdetailsid++; ?>
                                      
                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                    <td width="100px;">
                                                        <img src="../assets/img/users/u3.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                    </td>
                                                    <td>                                                        
                                                        <div class="activity-actiondone"> <b> Nick Fury </b> deleted an Article  
                                                            <div class="activity-timeanddate">
                                                                <i class="fa fa-trash"></i> May 22, 2018 • 12:34 PM
                                                            </div>
                                                        </div>                                          
                                                    </td>
                                                    <td> 
                                                        <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                            View Details
                                                        </div>    
                                                    </td>
                                            </tr>

                                        <?php $viewdetailsid++; ?>

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u4.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Steve Rogers </b> blocked a Student User 
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-ban"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                                <td> 
                                                    <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                        View Details
                                                    </div>    
                                                </td>
                                            </tr>

                                        <?php $viewdetailsid++; ?>

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                    <td width="100px;">
                                                        <img src="../assets/img/users/u3.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                    </td>
                                                    <td>                                                        
                                                        <div class="activity-actiondone"> <b> Nick Fury </b> edited the Slider  
                                                            <div class="activity-timeanddate">
                                                                <i class="fas fa-angle-left"></i> <i class="fas fa-angle-right"></i> May 22, 2018 • 12:34 PM
                                                            </div>
                                                        </div>                                          
                                                    </td>
                                                    <td> 
                                                        <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                            View Details
                                                        </div>    
                                                    </td>
                                                </tr>

                                        <?php $viewdetailsid++; ?>

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u5.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Michael Jordan </b> edited the Menu  
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-window-maximize"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                                <td> 
                                                    <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                        View Details
                                                    </div>    
                                                </td>
                                            </tr>

                                        <?php $viewdetailsid++; ?>

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u2.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Carol Danvers </b> deleted a Report  
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-trash"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                                <td> 
                                                    <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                        View Details
                                                    </div>    
                                                </td>
                                            </tr>

                                        <?php $viewdetailsid++; ?>

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u1.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Phil Coulson </b> added 2 Admin Users  
                                                        <div class="activity-timeanddate">
                                                            <i class="fa fa-user-shield"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                                <td> 
                                                    <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                        View Details
                                                    </div>    
                                                </td>
                                            </tr>

                                        <?php $viewdetailsid++; ?>

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                    <td width="100px;">
                                                        <img src="../assets/img/users/u3.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                    </td>
                                                    <td>                                                        
                                                        <div class="activity-actiondone"> <b> Nick Fury </b> edited a Page  
                                                            <div class="activity-timeanddate">
                                                                <i class="fas fa-pen"></i> May 22, 2018 • 12:34 PM
                                                            </div>
                                                        </div>                                          
                                                    </td>
                                                    <td> 
                                                        <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                            View Details
                                                        </div>    
                                                    </td>
                                                </tr>

                                        <?php $viewdetailsid++; ?>

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u4.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Steve Rogers </b> deleted a Page  
                                                        <div class="activity-timeanddate">
                                                            <i class="fa fa-trash"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                                <td> 
                                                    <div class="vwactvty-dtls" id="<?php echo $viewdetailsid ?>" >
                                                        View Details
                                                    </div>    
                                                </td>
                                            </tr>

                                        <?php $viewdetailsid++; ?>


                                            

                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>                  

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  