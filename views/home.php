<?php 
    require('header.php');
    include('nav.php');
    require('../controllers/HomeDataControllers.php'); 

    $NoOfUsers = countStudentUsers();
    $articles = loadArticlesToHome();
    $visitors = countVisits();
    $activity = loadActivitiesToHome();

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
                              <span class="info-box-number">3.5</span>
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
                                <div> <a class="btn btn-artvwall" href="webpage-table.php" role="button"> View All </a> </div>
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
                                            <tr>
                                                <td> <div class="td-content"> <i class="fas fa-flag"></i> <b>Jon Snow</b> has been reported on <b>2 counts</b> </div> </td>
                                            </tr>
                                            <tr>
                                                <td> <div class="td-content"> <i class="fas fa-flag"></i> <b>Anna Marie</b> has been reported on <b>4 counts</b>  </div> </td>
                                            </tr>
                                            <tr>
                                                <td> <div class="td-content"> <i class="fas fa-flag"></i> <b>Clark Kent</b> has been reported on <b>3 counts</b> </div> </td>                                            
                                            </tr>
                                            <tr>
                                                <td> <div class="td-content"> <i class="fas fa-flag"></i> <b>James Bond</b> has been reported on <b>7 counts</b> </div>  </td>                                         
                                            </tr>
                                            <tr>
                                                <td> <div class="td-content"> <i class="fas fa-flag"></i> <b>Tony Stark</b> has been reported on <b>1 counts</b> </div> </td>                                              
                                            </tr>
                                            <tr>
                                                <td> <div class="td-content"> <i class="fas fa-flag"></i> <b>Yellow Green</b> has been reported on <b>1 counts</b> </div> </td>                                                       
                                            </tr>                                        
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
                                            <tr>
                                                <td> <img src="../assets/img/user-1.jpg" class="img-ratvw">  </td>
                                                <td width="350px"> 
                                                    <div class="ratvw-usrnam">Juan Dela Cruz</div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                                </td>   
                                                <td>
                                                    <div class="td-content"> 
                                                        <span class="fa fa-star star-checked"></span>
                                                        <span class="fa fa-star star-checked"></span>
                                                        <span class="fa fa-star star-checked"></span>
                                                        <span class="fa fa-star star-checked"></span>
                                                        <span class="fa fa-star star-checked"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <img src="../assets/img/user-2.jpg" class="img-ratvw">  </td>
                                                <td width="350px"> 
                                                    <div class="ratvw-usrnam">Maria Clara</div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                                </td>   
                                                <td>
                                                    <div class="td-content"> 
                                                        <span class="fa fa-star star-checked"></span>
                                                        <span class="fa fa-star star-checked"></span>
                                                        <span class="fa fa-star star-checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <img src="../assets/img/user-3.jpg" class="img-ratvw">  </td>
                                                <td width="350px"> 
                                                    <div class="ratvw-usrnam">Cardo Dalisay</div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                                </td>   
                                                <td>
                                                    <div class="td-content"> 
                                                        <span class="fa fa-star star-checked"></span>
                                                        <span class="fa fa-star star-checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                </td>
                                            </tr>                                       
                                        </tbody>
                                    </table>
                                        <center> <a class="btn btn-ratvwall" href="#" role="button"> View All </a> </center>
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

                                                            <i class="fas fa-clone"></i> 

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


