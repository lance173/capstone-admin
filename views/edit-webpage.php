<?php 
    require('header.php');
    include('nav.php');
    require('../controllers/WebPagesController.php'); 

    $id = $_GET['editID'];
    $row = viewPageToEdit($id);
?>
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuWebApprnc'); activePageAtSideNav('MenuWebApprncSitePages'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div style="margin-top: 20px;">
                <a href="webpage-table.php"> <i class="fas fa-arrow-left"></i> Back to Pages List </a>
            </div>            

            <div class="page-heading">
                <h3 class="page-title"> Add New Page </h3>
            </div>

            <div class="row">
                <div class="inpage-alerts">
                    <?php include('../controllers/NotificationManager.php');?>
                </div>
            </div>


            <div class="jumbotron jumbotron-fluid" id="pagetitlejumboimage" style="background: url(<?php echo $row[3];?>); background-repeat: no-repeat; background-position: center; background-size: cover; color: #FFF;">
              <div class="container" style="text-align: center;">
                <div class="pagetitlejumbo-title">
                    <h1 class="display-4"><?php echo $row[1];?></h1>
                </div>                
              </div>
            </div>

            <form method="POST" action="../controllers/WebPagesController.php" enctype="multipart/form-data">
                <div class="row">
                        <div class="col-md-9">
                            
                                <input type="text" name="title" class="input-title" placeholder="Page Title" value="<?php echo $row[1];?>">
                            

                            <div class="ibox">
                                <textarea class="input-block-level" id="summernote" name="content">
                                    <?php echo $row[2];?>
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
                                        <img src="<?php echo $row[3];?>" class="prvwfeatimg" id="output_image">
                                    </div>
                                    <div class="ibox-footer">
                                        <div class="ibox-footercontent">                                    
                                            <a href="#" id="fileupload"><span class="setfeat-img">Set featured image</span></a> </div>
                                            <input id="upload-file" type="file" accept="image/*" onchange="preview_imageaddwebpage(event)" name="featureimage"/>
                                    </div>
                                </div>                            
                            </div>

                            <div class="ibox">
                                <div class="ibox-head">
                                    <div class="newibox-title"> Publish Changes </div>
                                    <div class="caret-hidetoggle" onclick="hdeshwpblsh()"> <span id="pblsh-down" style="display: none"><i class="fas fa-caret-down"></i></span> <span id="pblsh-up"><i class="fas fa-caret-up"></i> </span> </div>
                                </div>
                                <div id="pblsh-body">
                                    <div class="ibox-body">
                                        <i class="fas fa-pen"></i> <?php $dateCreat=date_create($row[4]); echo date_format($dateCreat,"F d, Y • h:i A"); ?>
                                        <br> <br>
                                        <i class="fas fa-info-circle"></i> publishing page info
                                        <input type="text" value="<?php echo $row[0];?>" name="webpageID" hidden>
                                    </div>
                                    <div class="ibox-footer">
                                        <div class="ibox-footercontent publishpage-btn"> <button type="submit" name="btnEditPage" class="btn btn-primary"> Save Changes </button> </div>
                                    </div>
                                </div>                            
                            </div>                                                     
                        </div>                
                </div>
            </form>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  