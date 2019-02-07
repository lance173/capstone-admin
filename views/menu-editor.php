<?php 
    require('header.php');
    include('nav.php');
?>


        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="row" style="display: none;">
                <div class="inpage-alerts">
                    <div class="alert alert-success">
                        Menu bar changed successfully.
                    </div>
                </div>
            </div>


            <div class="page-heading">
                <h3 class="page-title"> <i class="fas fa-window-maximize"></i> Edit Menu Bar </h3>
            </div>

            <div class="row">
                <div class="col-md-11 mnurow"> 
                  
                    <div class="menubar-preview">
                      <a href="#home">Home</a>
                      <div class="drpdwn-prvw">
                        <button class="dropbtn">Libraries
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="drpdwn-prvw-content">
                          <a href="#">Link 1</a>
                          <a href="#">Link 2</a>
                          <a href="#">Link 3</a>
                        </div>
                      </div>
                      <div class="drpdwn-prvw">
                        <button class="dropbtn">Other Services
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="drpdwn-prvw-content">
                          <a href="#">Link 1</a>
                          <a href="#">Link 2</a>
                          <a href="#">Link 3</a>
                        </div>
                      </div>
                      <a href="#home">Linkages</a> 
                      <div class="drpdwn-prvw">
                        <button class="dropbtn">Electronic Resources
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="drpdwn-prvw-content">
                          <a href="#">Link 1</a>
                          <a href="#">Link 2</a>
                          <a href="#">Link 3</a>
                        </div>
                      </div> 
                    </div>
                </div>
            </div> 

            <div class="row" style="margin-top: 70px;">
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title"> Menu Items </div>
                        </div>
                        <div class="ibox-body">
                            <div>
                                Home
                            </div>
                            <div>
                                Libraries
                            </div>
                            <div>
                                Other Services
                            </div>
                            <div>
                                Linkages
                            </div>
                            <div>
                                Electronic Resources
                            </div>
                        </div>
                        <div class="ibox-footer">
                            <i class="fas fa-plus"></i> Add New Item
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title"> Home </div>
                            <div> <a href="#"> <button class="btn add-btn2"> <i class="far fa-edit"></i> Edit</button> </a> </div>
                        </div>
                        <div class="ibox-body">

                            <div>
                                URL
                                <input type="text" name="">
                            </div>
                            
                        </div>
                        <div class="ibox-footer">
                            
                        </div>
                    </div>
                </div>
            </div>                

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  