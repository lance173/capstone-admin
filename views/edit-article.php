<?php 
    require('header.php');
    include('nav.php');
    require('../controllers/ArticleController.php'); 

     $id = $_GET['editID'];
     $row = viewArticleToEdit($id);
?>

    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuArticles'); activePageAtSideNav('MenuAddArticle'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->            

            <div style="margin-top: 20px;">
                <a href="articles-table.php"> <i class="fas fa-arrow-left"></i> Back to Articles List </a>
            </div>

            <div class="row">
                <div class="inpage-alerts">
                    <?php include('../controllers/NotificationManager.php');?>
                </div>
            </div>

            <div class="page-heading">
                <h3 class="page-title"> Edit Article </h3>
            </div>

            
            <form method="POST" action="../controllers/ArticleController.php" enctype="multipart/form-data">
                <div class="row">
                        <div class="col-md-9">
                            
                                <input type="text" name="title" class="input-title" placeholder="Article Title" value="<?php echo $row[1];?>">
                            

                            <div class="ibox">
                                <textarea class="input-block-level" id="summernote" name="content">
                                    <?php echo $row[3];?>
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
                                        <img src="<?php echo $row[2];?>" class="prvwfeatimg" id="output_image">
                                    </div>
                                    <div class="ibox-footer">
                                        <div class="ibox-footercontent">                                    
                                            <a href="#" id="fileupload"><span class="setfeat-img">Set featured image</span></a> </div>
                                            <input id="upload-file" type="file" accept="image/*" onchange="preview_image(event)" name="featureimage" />
                                    </div>
                                </div>                            
                            </div>

                            <div class="ibox">
                                <div class="ibox-head">
                                    <div class="newibox-title"> Publish Changes  </div>
                                    <div class="caret-hidetoggle" onclick="hdeshwpblsh()"> <span id="pblsh-down" style="display: none"><i class="fas fa-caret-down"></i></span> <span id="pblsh-up"><i class="fas fa-caret-up"></i> </span> </div>
                                </div>
                                <div id="pblsh-body">
                                    <div class="ibox-body">
                                        <i class="fas fa-info-circle"></i> publishing article info
                                        <input type="text" value="<?php echo $row[0];?>" name="articleID" hidden>
                                    </div>
                                    <div class="ibox-footer">
                                        <div class="ibox-footercontent publishpage-btn"> <button type="submit" name="btnEditArticle" class="btn btn-primary"> Save Changes </button> </div>
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