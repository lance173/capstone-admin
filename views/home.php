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
                              <span class="info-box-number">90<small>%</small></span>
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
                    <!-- <div class="col-md-3 col-sm-6 col-xs-12">
                      <div class="info-box">
                            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                            <div class="info-box-content">
                              <span class="info-box-text">New Members</span>
                              <span class="info-box-number">2,000</span>
                            </div>
                      </div>
                    </div> -->
                </div>
            <!--End of Info Boxes-->

            <div class="page-content fade-in-up">
                <div class="row">
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
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Radar Chart</div>
                            </div>
                            <div class="ibox-body">
                                <div>
                                    <canvas id="radar_chart" style="height:200px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Doughnut Chart</div>
                            </div>
                            <div class="ibox-body">
                                <div>
                                    <canvas id="doughnut_chart" style="height:200px;"></canvas>
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


