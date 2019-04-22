<?php 
    require('header.php');
    include('nav.php');
    require('../controllers/HomeDataControllers.php'); 

    $NoOfUsers = countStudentUsers();
    $articles = loadArticlesToHome();
    $visitors = countVisits();
    $activity = loadActivitiesToHome();
    $ratings = loadRatingsOnHome();
    $averagestars = averageStars();
    $reports = loadAllReportsToHome();

?>
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuHomePage'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h3 class="page-title"> <i class="fa fa-home"></i> Home / Dashboard </h3>
            </div>

            <!-- Info boxes -->
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="info-box">
                            <span class="info-box-icon todaysviews-infobox"><i class="fa fa-bar-chart" aria-hidden="true"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Site Visits</span>
                              <span class="info-box-number"> <?php echo $visitors ;?> </span>
                            </div>
                          </div>                 
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="info-box">
                            <span class="info-box-icon noofusers-infobox"><i class="fas fa-user-friends"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Student Users</span>
                              <span class="info-box-number"> <?php echo $NoOfUsers ?> </span>
                            </div>
                      </div>
                    </div>                    

                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="info-box">
                            <span class="info-box-icon avgrate-infobox"><i class="fa fa-star-half-alt" aria-hidden="true"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Average Virtual Tour Rating</span>
                              <span class="info-box-number"> <?php echo number_format($averagestars, 1); ?> </span>
                            </div>
                      </div>
                    </div>
                </div>
            <!--End of Info Boxes-->

            <div class="page-content fade-in-up">
               
                <!--Jumbotron-->
                <div class="jumbotron jumbo-viewsite">
                    <div class="viewsite-cover">
                        <center>
                            <img src="../assets/img/usclibsystem-transp-whitetxt.png" class="usclogo-jumbo">
                            
                            <div class="buttonset-jumbo">
                                <div class="wrapper">
                                    <a class="editsite-btn" href="site-editor.php" role="button">EDIT WEBSITE</a>
                                    <a class="viewsite-btn" href="http://localhost/capstone-user" role="button">VIEW WEBSITE  </a> 
                                </div>
                            </div>                           
                        </center>                        
                    </div>
                </div>
            <!--End of Jumbotron-->
                <div class="row">
                    <div class="col-md-7">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title"> <i class="fa fa-file-alt"></i> Current Articles</div>
                                <div> <a class="btn btn-artvwall" href="articles-table.php" role="button"> View All </a> </div>
                            </div>
                            <div class="ibox-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>                                            
                                                <th>PHOTO</th>
                                                <th>TITLE</th>
                                                <th>AUTHOR</th>
                                                <th>DATE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($articles)){foreach($articles as $Artc){ ?>
                                                <tr>
                                                    <td> <img src="<?php echo $Artc['FeaturePhoto'];?>" class="img-artvw">  </td>
                                                    <td> <div class="td-content"><?php echo $Artc['Title'];?></div></td>
                                                    <td> <div class="td-content"> <?php echo $Artc['FirstName'];?> <?php echo $Artc['LastName'];?> </div></td>
                                                    <td> <div class="td-content"> <?php $dateWrit=date_create($Artc['DatePublished']); echo date_format($dateWrit,"F d, Y"); ?> </div></td>                                                
                                                </tr>
                                            <?php }} ?>                                  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title"> <i class="fas fa-flag"></i> Reported Users</div>
                                <div> <a class="btn btn-rptusrall" href="reported-table.php" role="button"> View All </a> </div>
                            </div>
                            <div class="ibox-body">
                                <div class="table-responsive">  
                                    <table class="table">                                            
                                        <tbody>
                                            <?php if(isset($reports)){foreach($reports as $r){ ?>
                                                <tr>
                                                    <td> <div class="td-content"> <i class="fas fa-flag"></i> <b> <?php echo $r['OffenderFirstName']; echo ' '; echo $r['OffenderLastName']; ?> </b> has been reported on <b><?php echo $r['NoOfReports']; echo ' '; echo ($r['NoOfReports']==1) ? 'count' : 'counts'; ?></b> </div> </td>
                                                </tr>
                                            <?php }} ?>                                       
                                        </tbody>
                                    </table>                                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title"> <i class="fa fa-star-half-alt" aria-hidden="true"></i> Virtual Tour Ratings</div>
                            </div>
                            <div class="ibox-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <?php if(isset($ratings)){
                                            foreach($ratings as $r){   
                                            ?>
                                                <tr>
                                                    <td> <img src="<?php echo $r['Photo'];?>" class="img-ratvw">  </td>
                                                    <td width="350px"> 
                                                        <div class="ratvw-usrnam"><?php echo $r['FirstName']; echo ' '; echo $r['LastName'];?></div>
                                                        <div class="font-13"> <?php echo $r['Feedback'];?> </div>
                                                    </td>   
                                                    <td>
                                                        <div class="td-content"> 
                                                            <?php if($r['Stars'] == 1){?>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                            <?php }else if($r['Stars'] == 2){?>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>                                                 
                                                            <?php }else if($r['Stars'] == 3){?>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                            <?php }else if($r['Stars'] == 4){?>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star"></span>
                                                            <?php }else if($r['Stars'] == 5){?>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star star-checked"></span>
                                                                <span class="fa fa-star star-checked"></span>
                                                            <?php }?>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php }} ?>                                      
                                        </tbody>
                                    </table>
                                        <center> <a class="btn btn-ratvwall" href="http://localhost/capstone-user/views/startvirtualtour.php#rating-section" role="button"> View All </a> </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title"> <i class="fas fa-hourglass-start"></i> Activity Log</div>
                                <div>
                                    <a class="btn btn-actlog btn-sm" href="activitylog-page.php">View All</a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <div class="table-responsive">  
                                    <table class="table">                                            
                                        <tbody>
                                            <?php if(isset($activity)){foreach($activity as $acts){ ?>
                                                <tr>
                                                    <td> 
                                                        <div class="td-content"> 

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

                                                            <b> <?php echo $acts['FirstName'] ?> <?php echo $acts['LastName'] ?> </b> <?php echo $acts['Activity'] ?>: <?php echo $acts['BoldText'] ?>  
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
            </div>

           
   
            <!-- END PAGE CONTENT-->
    <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  


