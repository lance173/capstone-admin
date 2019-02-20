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

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u5.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Michael Jordan </b> added a new Page  
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-clone"></i> May 22, 2018 • 12:34 PM
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

                                        <?php $viewdetailsid++; ?>

                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u1.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Phil Coulson </b> approved an Article  
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