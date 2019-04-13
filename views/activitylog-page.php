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
                    <i class="fas fa-info-circle"></i> Activity Log page displays all actions made by an Admin.
                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
                    <div class="ibox" style="margin-top: 20px;">
                        <div class="ibox-body">
                                <div class="table-responsive">  
                                    <table class="table" id="activitylog-table" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th> <div style="visibility: hidden;"> # </div> </th>
                                                <th> </th>
                                            </tr>
                                        </thead>                                            
                                        <tbody>                                            
                                            <tr class="activityrow">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u5.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Michael Jordan </b> added a new Page &nbsp; <b>Montessori Campus</b>
                                                        <div class="activity-timeanddate">
                                                            <i class="far fa-window-restore"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                            </tr>   
                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')" data-toggle="modal" data-target=".viewdetail2-modal-lg">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u3.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Nick Fury </b> added a New Student User &nbsp; <b>1514952 - Joshua Jaluag</b>
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-user-plus"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                            </tr>                                        
                                            <tr class="activityrow">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u1.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Phil Coulson </b> approved Article &nbsp; <b>USC Book Fair 2018</b>
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-check"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                            </tr>
                                            <tr class="activityrow">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u2.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Carol Danvers </b> edited an Article &nbsp; <b>USC Book Fair 2018</b>
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-pen"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                            </tr>
                                            <tr class="activityrow">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u4.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Steve Rogers </b> blocked Student User &nbsp; <b>1510001 - User Unknown</b>
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-ban"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                            </tr>                                      
                                            <tr class="activityrow" onmouseover="showvwdetails('<?php echo $viewdetailsid ?>')" onmouseout="hidevwdetails('<?php echo $viewdetailsid ?>')">
                                                    <td width="100px;">
                                                        <img src="../assets/img/users/u3.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                    </td>
                                                    <td>                                                        
                                                        <div class="activity-actiondone"> <b> Nick Fury </b> deleted an Article &nbsp; <b>Test Article</b> 
                                                            <div class="activity-timeanddate">
                                                                <i class="fa fa-trash"></i> May 22, 2018 • 12:34 PM
                                                            </div>
                                                        </div>                                          
                                                    </td>
                                            </tr>
                                            <tr class="activityrow">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u4.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Steve Rogers </b> wrote an Article &nbsp; <b>USC Book Fair 2018</b>
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-file-alt"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                            </tr>
                                            <tr class="activityrow">
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
                                                </tr>
                                            <tr class="activityrow">
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
                                            </tr>
                                            <tr class="activityrow">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u2.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Carol Danvers </b> deleted a Report of Student User &nbsp; <b>15102020 - User NoName</b>
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-trash"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                            </tr>
                                            <tr class="activityrow">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u1.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Phil Coulson </b> added Admin User &nbsp; <b>Michael Jordan</b>
                                                        <div class="activity-timeanddate">
                                                            <i class="fa fa-user-shield"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                            </tr>
                                            <tr class="activityrow">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u3.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Nick Fury </b> edited a Page &nbsp; <b>North Campus</b>
                                                        <div class="activity-timeanddate">
                                                            <i class="fas fa-pen"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>
                                            </tr>
                                            <tr class="activityrow">
                                                <td width="100px;">
                                                    <img src="../assets/img/users/u4.jpg" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> Steve Rogers </b> deleted a Page &nbsp; <b>Sample Webpage</b>  
                                                        <div class="activity-timeanddate">
                                                            <i class="fa fa-trash"></i> May 22, 2018 • 12:34 PM
                                                        </div>
                                                    </div>                                          
                                                </td>                                                
                                            </tr>                                           
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