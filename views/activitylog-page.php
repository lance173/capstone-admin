<?php 
    require('header.php');
    include('nav.php');
    require('../controllers/ActivityLogController.php');

    $activity = loadActivities();

?>
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuActivityLogPage'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            
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

                                        <?php if(isset($activity)){foreach($activity as $acts){ ?> 
                                                
                                            <tr class="activityrow">
                                                <td width="100px;">
                                                    <img src="<?php echo $acts['AdminPhoto'] ?>" height="75px" width="75px" style="border-radius: 100px; "> 
                                                </td>
                                                <td>                                                        
                                                    <div class="activity-actiondone"> <b> <?php echo $acts['AdminName'] ?> </b> <?php echo $acts['Activity'] ?> <b><?php echo $acts['BoldText'] ?></b>
                                                        <div class="activity-timeanddate">

                                                            <?php if($acts['ActivityCode'] == 'Add Student'){ ?>
                                                                <i class="fas fa-user-plus"></i> 
                                                            <?php } else if($acts['ActivityCode'] == 'Delete Student'){ ?>
                                                                <i class="fa fa-trash"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Unblock Student'){ ?>
                                                                <i class="fas fa-user-check"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Add Admin'){ ?>
                                                                <i class="fa fa-user-shield"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Change Admin Role'){ ?>
                                                                <i class="fas fa-users-cog"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Delete Admin'){ ?>
                                                                <i class="fa fa-trash"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Block Student'){ ?>
                                                                <i class="fas fa-user-slash"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Delete Report'){ ?>
                                                                <i class="fa fa-trash"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Add Article'){ ?>
                                                                <i class="fas fa-file-alt"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Edit Article'){ ?>
                                                                <i class="fas fa-pen"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Delete Article'){ ?>
                                                                <i class="fa fa-trash"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Approve Article'){ ?>
                                                                <i class="fas fa-check"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Add WebPage'){ ?>
                                                                <i class="far fa-window-restore"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Edit WebPage'){ ?>
                                                                <i class="fas fa-pen"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Delete WebPage'){ ?>
                                                                <i class="fa fa-trash"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Bin WebPage'){ ?>
                                                                <i class="fa fa-trash"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Restore WebPage'){ ?>
                                                                <i class="fas fa-reply"></i>                                    
                                                            <?php } else if($acts['ActivityCode'] == 'Edit MenuBar'){ ?>
                                                                <i class="fas fa-window-maximize"></i>
                                                            <?php } else if($acts['ActivityCode'] == 'Edit Slider'){ ?>
                                                                <i class="fas fa-angle-left"></i> <i class="fas fa-angle-right"></i>
                                                            <?php }?>

                                                            <?php $dateCreat=date_create($acts['DateDone']); echo date_format($dateCreat,"F d, Y • h:i A"); ?>
                                                        </div>
                                                    </div>                                          
                                                </td>
                                            </tr> 

                                        <?php }} ?>

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