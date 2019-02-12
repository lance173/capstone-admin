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

            <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title"> <i class="fas fa-bars"></i> &nbsp; Menu Items </div>
                        </div>
                        <div class="ibox-body">
                            <table class="table table-hover" style="margin-bottom: 0px;">                            
                                <tbody>
                                    <tr>
                                        <td style="background-color: #6ba3ff; color: #FFF">Home</td>                                        
                                    </tr>
                                    <tr>
                                        <td>Libraries</td>
                                    </tr>
                                    <tr>
                                        <td>Other Services</td>
                                    </tr>
                                    <tr>
                                        <td>Linkages</td>
                                    </tr>
                                    <tr>
                                        <td>Electronic Resources</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="ibox-footer" style="text-align: center">
                           <button class="btn btn-info" > <i class="fas fa-plus"></i> Add New Item </button> 
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
                            <div class="form-group">
                                <label>Position</label>
                                <select class="form-control">
                                    <option selected>After Home</option>
                                    <option>After Libraries</option>
                                    <option>After Other Services</option>
                                    <option>After Linkages</option>
                                    <option>After Electronic Resources</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Type</label>
                                <select class="form-control" id="sttcordrpdwn" onchange="staticordropdown();">
                                    <option selected disabled hidden>Static or Drop-down</option>
                                    <option>Static</option>
                                    <option>Drop-down</option>                                    
                                </select>
                            </div>
                            <div id="chosenstatic">
                                <div class="form-group">
                                    <label>Choose Page</label>
                                    <select class="form-control" id="pageorcustomlink1" onchange="ifcustomlink1();">
                                        <option selected disabled hidden>Select Page</option>
                                        <option>Libraries</option>
                                        <option>Other Services</option>
                                        <option>Linkages</option>
                                        <option>Electronic Resources</option>
                                        <option>Custom Link</option>
                                    </select>
                                </div>
                                <div id="chosencustomlink1">
                                    <div>
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" placeholder="Display Name">
                                        </div>
                                        <div class="form-group">
                                            <label>URL or Link</label>
                                            <div class="input-group-icon">
                                                <div class="input-icon"><i class="fa fa-link"></i></div>
                                                <input class="form-control" type="text" placeholder="url">
                                            </div>
                                        </div>
                                    </div>    
                                </div>    
                            </div>                                                                                                              
                            <div id="chosendropdown">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Display Name">
                                </div>
                                Drop-down list
                                <div class="col-md-11 offset-md-1">
                                    <div class="drpdwn-list">
                                        <button class="btn drpitm-btn"> Link 1 </button>
                                        <button class="btn drpitm-btn"> Link 2 </button>
                                        <button class="btn drpitm-btn"> Link 3 </button>
                                    </div>
                                    <button class="btn adddrp-btn"> <i class="fas fa-plus"></i> Add new drop-down item </button>
                                    <div class="adddrpform">
                                        <div class="form-group">
                                            <label>Choose Page</label>
                                            <select class="form-control" id="pageorcustomlink2" onchange="ifcustomlink2();">
                                                <option selected disabled hidden>Select Page</option>
                                                <option>Libraries</option>
                                                <option>Other Services</option>
                                                <option>Linkages</option>
                                                <option>Electronic Resources</option>
                                                <option>Custom Link</option>
                                            </select>
                                        </div>
                                        <div id="chosencustomlink2">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control" type="text" placeholder="Display Name">
                                            </div>
                                            <div class="form-group">
                                                <label>URL or Link</label>
                                                <div class="input-group-icon">
                                                    <div class="input-icon"><i class="fa fa-link"></i></div>
                                                    <input class="form-control" type="text" placeholder="url">
                                                </div>
                                            </div>
                                        </div>
                                         
                                        <button> Add to List </button>
                                    </div>
                                     
                                </div>                                
                            </div>                            
                        </div>
                        <div class="ibox-footer" style="text-align: right;">
                            <button class="btn btn-success" style="margin-right: 20px;"> Submit </button>
                        </div>
                    </div>
                </div>
            </div>                

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  