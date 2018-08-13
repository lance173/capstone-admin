<?php 
    require('header.php');
    include('nav.php');
?>


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
                              <span class="info-box-number">210,146</span>
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

            <!--Jumbotron-->
                <div class="jumbotron jumbo-viewsite">
                    <div class="viewsite-cover">
                        <center>
                            <img src="../assets/img/usclibsystem-transp-whitetxt.png" class="usclogo-jumbo">
                            
                            <div class="buttonset-jumbo">
                                <div class="wrapper">
                                    <a class="editsite-btn" href="#" role="button">EDIT WEBSITE</a>
                                    <a class="viewsite-btn" href="#" role="button">VIEW WEBSITE  </a> 
                                </div>
                            </div>                           
                        </center>                        
                    </div>
                </div>
            <!--End of Jumbotron-->

            <div class="page-content fade-in-up">
                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Line Chart</div>
                            </div>
                            <div class="ibox-body">
                                <div>
                                    <canvas id="line_chart" style="height:200px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Bar Chart</div>
                            </div>
                            <div class="ibox-body">
                                <div>
                                    <canvas id="bar_chart" style="height:200px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
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
                                                <td> <img src="../assets/img/lnch212.jpg" class="img-artvw">  </td>
                                                <td> <div class="td-content">USC Library La..</div></td>
                                                <td> <div class="td-content">Steve Rogers </div></td>
                                                <td> <div class="td-content"> 02/08/2017 </div></td>
                                                <td>
                                                    <div class="td-content"> <a class="btn btn-artvw" href="#" role="button"> View </a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <img src="../assets/img/bk-fr2121.jpg" class="img-artvw"> </td>
                                                <td> <div class="td-content"> USC Book Fair.. </div></td>
                                                <td> <div class="td-content">Reed Richards</div></td>
                                                <td> <div class="td-content">08/10/2017</div></td>
                                                <td>
                                                    <div class="td-content"> <a class="btn btn-artvw" href="#" role="button"> View </a> </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> <img src="../assets/img/facl-212121.jpg" class="img-artvw"> </td>
                                                <td> <div class="td-content"> New Facilities.. </div></td>
                                                <td> <div class="td-content"> Susan Storm </div></td>
                                                <td> <div class="td-content"> 14/11/2017 </div></td>
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
                                        </tbody>
                                    </table>
                                        <center> <a class="btn btn-rptusrall" href="#" role="button"> View All </a> </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a class="adminca-banner" href="http://admincast.com/adminca/" target="_blank">
                        <div class="adminca-banner-ribbon"><i class="fa fa-trophy mr-2"></i>PREMIUM TEMPLATE</div>
                        <div class="wrap-1">
                            <div class="wrap-2">
                                <div>
                                    <img src="../assets/img/adminca-banner/adminca-preview.jpg" style="height:160px;margin-top:50px;" />
                                </div>
                                <div class="color-white" style="margin-left:40px;">
                                    <h1 class="font-bold">ADMINCA</h1>
                                    <p class="font-16">Save your time, choose the best</p>
                                    <ul class="list-unstyled">
                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>High Quality Design</li>
                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Fully Customizable and Easy Code</li>
                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Bootstrap 4 and Angular 5+</li>
                                        <li class="m-b-5"><i class="ti-check m-r-5"></i>Best Build Tools: Gulp, SaSS, Pug...</li>
                                        <li><i class="ti-check m-r-5"></i>More layouts, pages, components</li>
                                    </ul>
                                </div>
                            </div>
                            <div style="flex:1;">
                                <div class="d-flex justify-content-end wrap-3">
                                    <div class="adminca-banner-b m-r-20">
                                        <img src="../assets/img/adminca-banner/bootstrap.png" style="width:40px;margin-right:10px;" />Bootstrap v4</div>
                                    <div class="adminca-banner-b m-r-10">
                                        <img src="../assets/img/adminca-banner/angular.png" style="width:35px;margin-right:10px;" />Angular v5+</div>
                                </div>
                                <div class="dev-img">
                                    <img src="../assets/img/adminca-banner/sprite.png" />
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
<?php
    require('footer.php');
?>  


