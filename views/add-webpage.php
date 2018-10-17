<?php 
    require('header.php');
    include('nav.php');
?>


        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="row" style="display: none;">
                <div class="inpage-alerts">
                    <div class="alert alert-success">
                        Page is published successfully.
                    </div>
                </div>
            </div>

            <div class="page-heading">
                <h3 class="page-title"> Add New Page </h3>
            </div>

            

            <div class="row">
                    <div class="col-md-9">
                        <form>
                            <input type="text" name="" class="input-title" placeholder="Page Title"  >
                        </form>

                        <div class="ibox">
                            <textarea id="richtexteditor" style="height: 320px;"> </textarea>
                        </div>

                    </div>  
                    <div class="col-md-3">
                        
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="newibox-title"> Featured Image  </div>
                                <div> <i class="fas fa-caret-down"></i> </div>
                            </div>
                            <div class="ibox-body" style="display: ;">
                                <img src="../assets/img/image.png" style="height: 130px; width: 100%;">
                            </div>
                            <div class="ibox-footer">
                                <div class="ibox-footercontent"> <a href="#"><span class="setfeat-img">Set featured image</span></a> </div>
                            </div>
                        </div>

                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="newibox-title"> Publish  </div>
                                <div> <i class="fas fa-caret-down"></i> </div>
                            </div>
                            <div class="ibox-body">
                                <i class="fas fa-info-circle"></i> publishing page info
                            </div>
                            <div class="ibox-footer">
                                <div class="ibox-footercontent publishpage-btn"> <button class="btn btn-primary"> Publish Page </button> </div>
                            </div>
                        </div>

                        

                             
                    </div>                
            </div>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  