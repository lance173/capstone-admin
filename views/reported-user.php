<?php 
    require('header.php');
    include('nav.php');

    require('../controllers/ReportController.php');
    $report = listReportsOnUser();
    $reported_user = reportedUserProfile();

    if($_SESSION['profile']['SiteRole'] == 'Author' || $_SESSION['profile']['SiteRole'] == 'Editor'){
    ?>
        <script>
            window.location='restrictedpage.php';
        </script> 
    <?php
    }
?>
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuReportPage'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h3 class="page-title"> <i class="sidebar-item-icon fa fa-flag"></i> Reports </h3>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="ibox">                       
                        <div class="ibox-body">
                            <div class="imgupld-section">
                                <img src="<?php echo $reported_user['OffenderPhoto']; ?>" class="default-adminimg" id="output_image">
                                <div>
                                    <br> <?php echo $reported_user['OffenderFirstName']; ?> <?php echo $reported_user['OffenderLastName']; ?>
                                    <br> <small> <?php echo $reported_user['OffenderCourse']; ?> - <?php echo $reported_user['OffenderYearLevel']; ?> </small>
                                </div>
                            </div>
                        </div>                       
                        <div class="ibox-footer"  style="text-align: center;">
                            <button class="btn btn-lg btn-danger" style="margin-top: 25px" onclick="readyBlockUser(<?php echo $reported_user['OffenderID'];?>, '<?php echo $reported_user['OffenderStatus']?>')"> <i class="fas fa-ban"></i> Block User</button>

                                <div style="margin-top: 25px"> 
                                    <i class="fas fa-info-circle"></i> A blocked user will not be able to comment on articles.
                                </div>   
                        </div>
                    </div> 
                    <div class="ibox">                        
                        <div class="ibox-body" style="text-align: center;">                                
                            <button class="btn btn-warning" onclick="readyDeleteReport(<?php echo $reported_user['OffenderID'];?>)"> <i class="fas fa-trash-alt"></i> Delete Report</button>          
                        </div>
                    </div>                  
                </div>
                <div class="col-md-9">

                    <?php if(isset($report)){foreach($report as $r){ ?>
                        <div class="ibox">                        
                            <div class="ibox-head">                              
                                <div class="ibox-title"> 
                                    <img src="<?php echo $r['ReporterPhoto']; ?>" class="reporter-img"> <?php echo $r['ReporterFirstName']; ?> <?php echo $r['ReporterLastName']; ?> <span style="font-weight: normal;"> reported: </span> 
                                </div>
                                <div>
                                    <?php $dateCreat=date_create($r['DateReported']); echo date_format($dateCreat,"F d, Y"); ?>
                                </div>                                                                          
                            </div>
                            <div class="ibox-body">                           
                                <h4 class="report-reason"> <?php echo $r['Reason']; ?> </h4>
                                <div class="reported-comment">
                                    <img src="<?php echo $r['OffenderPhoto']; ?>"> <div class="reported-nombre"> <?php echo $r['OffenderFirstName']; ?> <?php echo $r['OffenderLastName']; ?> </div>
                                    <p>
                                        <?php echo $r['Content']; ?>
                                    </p>
                                </div>                                                             
                            </div>
                            <div class="ibox-footer">
                                <div style="padding-left: 10px;"> From Article: <a href="http://localhost/capstone-user/views/ArticlePage.php?id=<?php echo $r['ArticleID'] ?>"> <?php echo $r['Title']; ?> </a> </div>                     
                            </div>
                        </div>
                    <?php }} ?>
                </div>
            </div>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  