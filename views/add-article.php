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
                <h3 class="page-title"> Post New Article </h3>
            </div>

            
            <form>
                <div class="row">
                        <div class="col-md-9">
                            
                                <input type="text" name="" class="input-title" placeholder="Title"  >
                            

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
                                    <img src="../assets/img/image.png" style="height: 130px; width: 100%;" id="output_image">
                                </div>
                                <div class="ibox-footer">
                                    <div class="ibox-footercontent">                                    
                                        <a href="#" id="fileupload"><span class="setfeat-img">Set featured image</span></a> </div>
                                        <input id="upload-file" type="file" accept="image/*" onchange="preview_image(event)" />
                                </div>
                            </div>

                            <div class="ibox">
                                <div class="ibox-head">
                                    <div class="newibox-title"> Publish  </div>
                                    <div> <i class="fas fa-caret-down"></i> </div>
                                </div>
                                <div class="ibox-body">
                                    <i class="fas fa-info-circle"></i> publishing article info
                                </div>
                                <div class="ibox-footer">
                                    <div class="ibox-footercontent publishpage-btn"> <button class="btn btn-primary"> Publish Article </button> </div>
                                </div>
                            </div>          
                        </div>                
                </div>
            </form> 

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  