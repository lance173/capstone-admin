<?php 
    require('header.php');
    include('nav.php');
    require('../controllers/StudentUserController.php'); 

    $NoOfUsers = countStudentUsers();
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
                              <span class="info-box-text">Today's Visits</span>
                              <span class="info-box-number"> 1,100 </span>
                            </div>
                          </div>                 
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="info-box">
                            <span class="info-box-icon noofusers-infobox"><i class="fas fa-user-friends"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">Users</span>
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Weekly Visitor Record</div>
                            </div>
                            <div class="ibox-body">
                                <div class="chart" id="flot_visitors" style="height:280px;"></div>
                                <div class="chart" id="flot_visitors_overview" style="height:100px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title"> <i class="fa fa-file-alt"></i> Current Articles</div>
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
                                                <th width="100px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> <img src="../assets/img/post-featureimages/lnch212.jpg" class="img-artvw">  </td>
                                                <td> <div class="td-content">USC Library La..</div></td>
                                                <td> <div class="td-content">Reed Richards </div></td>
                                                <td> <div class="td-content"> 07/08/2018 </div></td>
                                                <td>
                                                    <div class="td-content"> <a class="btn btn-artvw" href="#" role="button"> View </a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <img src="../assets/img/post-featureimages/bk-fr2121.jpg" class="img-artvw"> </td>
                                                <td> <div class="td-content"> USC Book Fair.. </div></td>
                                                <td> <div class="td-content">Ben Grimm</div></td>
                                                <td> <div class="td-content">03/01/2018</div></td>
                                                <td>
                                                    <div class="td-content"> <a class="btn btn-artvw" href="#" role="button"> View </a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <img src="../assets/img/post-featureimages/facl-212121.jpg" class="img-artvw"> </td>
                                                <td> <div class="td-content"> New Facilities.. </div></td>
                                                <td> <div class="td-content"> Susan Storm </div></td>
                                                <td> <div class="td-content"> 01/19/2018 </div></td>
                                                <td>
                                                    <div class="td-content"> <a class="btn btn-artvw" href="#" role="button"> View </a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <img src="../assets/img/post-featureimages/uscnc-bkrdng.jpg" class="img-artvw"> </td>
                                                <td> <div class="td-content"> North Campus.. </div></td>
                                                <td> <div class="td-content"> Johnny Storm </div></td>
                                                <td> <div class="td-content"> 11/12/2017 </div></td>
                                                <td>
                                                    <div class="td-content"> <a class="btn btn-artvw" href="#" role="button"> View </a> </div>
                                                </td>
                                            </tr>                                       
                                        </tbody>
                                    </table>
                                        <center> <a class="btn btn-artvwall" href="#" role="button"> View All </a> </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title"> <i class="fas fa-flag"></i> Reported Users</div>
                            </div>
                            <div class="ibox-body">
                                <div class="table-responsive">  
                                    <table class="table">                                            
                                        <tbody>
                                            <tr>
                                                <td> <i class="fas fa-flag"></i> <b>Jon Snow</b> has been reported on <b>2 counts</b> </td>
                                                <td> <a class="btn btn-rptusr" href="#" role="button"> View </a> </td>
                                            </tr>
                                            <tr>
                                                <td> <i class="fas fa-flag"></i> <b>Anna Marie</b> has been reported on <b>4 counts</b> </td>
                                                <td> <a class="btn btn-rptusr" href="#" role="button"> View </a> </td>
                                            </tr>
                                            <tr>
                                                <td> <i class="fas fa-flag"></i> <b>Clark Kent</b> has been reported on <b>3 counts</b> </td>
                                                <td> <a class="btn btn-rptusr" href="#" role="button"> View </a> </td>                                               
                                            </tr>
                                            <tr>
                                                <td> <i class="fas fa-flag"></i> <b>James Bond</b> has been reported on <b>7 counts</b> </td>
                                                <td> <a class="btn btn-rptusr" href="#" role="button"> View </a> </td>                                                
                                            </tr>
                                            <tr>
                                                <td> <i class="fas fa-flag"></i> <b>Tony Stark</b> has been reported on <b>1 counts</b> </td>
                                                <td> <a class="btn btn-rptusr" href="#" role="button"> View </a> </td>                                               
                                            </tr>
                                            <tr>
                                                <td> <i class="fas fa-flag"></i> <b>Yellow Green</b> has been reported on <b>1 counts</b> </td>
                                                <td> <a class="btn btn-rptusr" href="#" role="button"> View </a> </td>                                               
                                            </tr>                                        
                                        </tbody>
                                    </table>
                                        <center> <a class="btn btn-rptusrall" href="#" role="button"> View All </a> </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!--Jumbotron-->
                <div class="jumbotron jumbo-viewsite">
                    <div class="viewsite-cover">
                        <center>
                            <img src="../assets/img/usclibsystem-transp-whitetxt.png" class="usclogo-jumbo">
                            
                            <div class="buttonset-jumbo">
                                <div class="wrapper">
                                    <a class="editsite-btn" href="site-editor.php" role="button">EDIT WEBSITE</a>
                                    <a class="viewsite-btn" href="#" role="button">VIEW WEBSITE  </a> 
                                </div>
                            </div>                           
                        </center>                        
                    </div>
                </div>
            <!--End of Jumbotron-->
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
                                            <tr>
                                                <td> <div class="td-content"> <i class="fas fa-clone"></i> <b>Michael Jordan</b> added a new Page </div> </td>
                                            </tr>
                                            <tr>
                                                <td> <div class="td-content"> <i class="fas fa-user-plus"></i> <b>Nick Fury</b> added 10 New Student Users </div> </td>
                                            </tr>
                                            <tr>
                                                <td> <div class="td-content"> <i class="fas fa-check"></i> <b>Phil Couson</b> approved an Article </div> </td>                                 
                                            </tr>
                                            <tr>
                                                <td> <div class="td-content"> <i class="fas fa-pen"></i> <b>Carol Danvers</b> edited an Article </div> </td>  
                                            </tr>
                                            <tr>
                                                <td> <div class="td-content"> <i class="fas fa-file-alt"></i> <b>Steve Rogers</b>  wrote an Article </div> </td>
                                            </tr>                                       
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


