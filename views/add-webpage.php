<?php 
    require('header.php');
    include('nav.php');
?>
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuWebApprnc'); activePageAtSideNav('MenuWebApprncSitePages'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div style="margin-top: 20px;">
                <a href="webpage-table.php"> <i class="fas fa-arrow-left"></i> Back to Pages List </a>
            </div>

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


            <div class="jumbotron jumbotron-fluid" id="pagetitlejumboimage" style="background: url(../assets/img/image.png); background-repeat: no-repeat; background-position: center; background-size: cover; color: #FFF;">
              <div class="container" style="text-align: center;">
                <div class="pagetitlejumbo-title">
                    <h1 class="display-4">Page Title</h1>
                </div>                
              </div>
            </div>
            
            <div class="row">
                <div class="inpage-alerts">
                    <?php include('../controllers/NotificationManager.php');?>
                </div>
            </div>

            <div class="row">
                    <div class="col-md-9">
                        <form>
                            <input type="text" name="" class="input-title" placeholder="Page Title"  >
                        </form>

                        <div class="ibox">
                            <textarea class="input-block-level" id="summernote" name="content">
                            </textarea>
                        </div>

                    </div>  
                    <div class="col-md-3">
                                            
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="newibox-title"> Featured Image  </div>
                                <div class="caret-hidetoggle" onclick="hdeshwftimg()"> <span id="featimg-down" style="display: none"><i class="fas fa-caret-down"></i></span> <span id="featimg-up"><i class="fas fa-caret-up"></i> </span> </div>
                            </div>
                            <div id="featimg-body">
                                <div class="ibox-body">
                                    <img src="../assets/img/image.png" class="prvwfeatimg" id="output_image">
                                </div>
                                <div class="ibox-footer">
                                    <div class="ibox-footercontent">                                    
                                        <a href="#" id="fileupload"><span class="setfeat-img">Set featured image</span></a> </div>
                                        <input id="upload-file" type="file" accept="image/*" onchange="preview_imageaddwebpage(event)" />
                                </div>
                            </div>                            
                        </div>

                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="newibox-title"> Publish  </div>
                                <div class="caret-hidetoggle" onclick="hdeshwpblsh()"> <span id="pblsh-down" style="display: none"><i class="fas fa-caret-down"></i></span> <span id="pblsh-up"><i class="fas fa-caret-up"></i> </span> </div>
                            </div>
                            <div id="pblsh-body">
                                <div class="ibox-body">
                                    <i class="fas fa-info-circle"></i> publishing page info
                                </div>
                                <div class="ibox-footer">
                                    <div class="ibox-footercontent publishpage-btn"> <button class="btn btn-primary"> Publish Page </button> </div>
                                </div>
                            </div>                            
                        </div>                       
                             
                    </div>                
            </div>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  