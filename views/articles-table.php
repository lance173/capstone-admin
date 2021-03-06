<?php 
    require('header.php');
    include('nav.php');
    require('../controllers/ArticleController.php'); 
    $PublishedArticles = loadPublishedArticles();
    $PendingArticles = loadPendingArticles();
?>
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuArticles'); activePageAtSideNav('MenuArticlesTable'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h3 class="page-title"> <i class="fas fa-file-alt"></i> Article Posts </h3>
            </div>
            <div class="row">
                <div class="inpage-alerts">
                    <?php include('../controllers/NotificationManager.php');?>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Published Articles</div>
                                <div> <a href="add-article.php"> <button class="btn add-btn"> <i class="fas fa-plus"></i> Post New Article </button> </a> </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-7-1" data-toggle="tab"><i class="fas fa-file-alt"></i> Published Articles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-7-2" data-toggle="tab"><i class="fas fa-file-signature"></i> Pending Approval</a>
                                    </li>                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-7-1">

                                         <table class="table table-striped table-bordered table-hover" id="publishedarticles-table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Photo</th>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Date</th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(isset($PublishedArticles)){foreach($PublishedArticles as $pubA){ ?>

                                                    <?php if($pubA['AdminID'] == $_SESSION['profile']['AdminID']){
                                                        $isAuthorOfArticle = 'true';
                                                    } else {
                                                        $isAuthorOfArticle = 'false';
                                                    } ?>


                                                    <tr>
                                                        <td style="text-align: center;"> <img src="<?php echo $pubA['FeaturePhoto'];?>" class="img-artvw"> </td>
                                                        <td> <?php echo $pubA['Title'];?> </td>
                                                        <td> <?php echo $pubA['FirstName'];?> <?php echo $pubA['LastName'];?> </td>
                                                        <td> <?php $dateWrit=date_create($pubA['DatePublished']); echo date_format($dateWrit,"F d, Y"); ?> </td>
                                                        <td> 
                                                            
                                                            <button class="btn btn-primary" onclick="loadEditArticle(<?php echo $pubA['ArticleID'];?>, '<?php echo $isAuthorOfArticle; ?>', '<?php echo $_SESSION['profile']['SiteRole'];?>')"> Edit 
                                                            </button> 
                                                            <button class="btn btn-success" onclick="viewLiveArticle(<?php echo $pubA['ArticleID'];?>);"> View 
                                                            </button> 
                                                            <button class="btn btn-danger" onclick="loadDeleteArticle(<?php echo $pubA['ArticleID'];?>, '<?php echo $isAuthorOfArticle; ?>', '<?php echo $_SESSION['profile']['SiteRole'];?>')"> <i class="fas fa-trash-alt"></i> 
                                                            </button> 
                                                        </td>
                                                    </tr> 
                                                <?php }} ?>                                                               
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-pane" id="tab-7-2">

                                        <table class="table table-striped table-bordered table-hover" id="pendingarticles-table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th> </th>
                                                    <th>Photo</th>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Date Written</th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(isset($PendingArticles)){foreach($PendingArticles as $penA){ ?>

                                                    <?php if($penA['AdminID'] == $_SESSION['profile']['AdminID']){
                                                        $isAuthorOfArticle = 'true';
                                                    } else {
                                                        $isAuthorOfArticle = 'false';
                                                    } ?>
                                                            
                                                    <tr>
                                                        <td style="padding: 30px;">
                                                            
                                                            <button class="btn btn-artvw" onclick="loadApproveArticle(<?php echo $penA['ArticleID'];?>, '<?php echo $_SESSION['profile']['SiteRole']; ?>')"> <i class="fas fa-check"></i> Approve </button>  
                                                        </td>
                                                        <td class="center-tabledata"> <img src="<?php echo $penA['FeaturePhoto'];?>" class="img-artvw"> </td>
                                                        <td> <?php echo $penA['Title'];?> </td>
                                                        <td><?php echo $penA['FirstName'];?> <?php echo $penA['LastName'];?> </td>
                                                        <td> <?php $dateWrit=date_create($penA['DateWritten']); echo date_format($dateWrit,"F d, Y"); ?> </td>
                                                        <td> 
                                                            
                                                            <button class="btn btn-primary" onclick="loadEditArticle(<?php echo $penA['ArticleID'];?>, '<?php echo $isAuthorOfArticle; ?>', '<?php echo $_SESSION['profile']['SiteRole'];?>')"> View / Edit </button>
                                                            <button class="btn btn-rptusr" onclick="loadDeleteArticle(<?php echo $penA['ArticleID'];?>, '<?php echo $isAuthorOfArticle; ?>', '<?php echo $_SESSION['profile']['SiteRole'];?>')"> <i class="fas fa-trash-alt"></i> </button>
                                                        </td>
                                                    </tr>
                                                <?php }} ?>                                                                                               
                                            </tbody>
                                        </table> 

                                    </div>                                   
                                </div><br></div>
                        </div>                  
                    </div>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  