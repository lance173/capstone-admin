<?php 
    require('header.php');
    include('nav.php');

    require('../controllers/ReportController.php');
    $reports = loadAllReports();
?>
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuReportPage'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h3 class="page-title"> <i class="sidebar-item-icon fa fa-flag"></i> Reports </h3>
            </div>

            <div class="row">
                <div class="col-md-10">                    
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title" >Summary of Reported Users </div>
                        </div>
                        <div class="ibox-body">
                            <table class="table table-responsive-lg" id="reports-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>No. of reports</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $number = 1;
                                        if(isset($reports)){foreach($reports as $r){ ?>
                                            <tr>
                                                <td> <?php echo $number?> </td>
                                                <td> <?php echo $r['OffenderFirstName']; echo ' '; echo $r['OffenderLastName']; ?> </td>
                                                <td>Reported on <b>5 counts</b> </td>
                                                <td><a class="btn btn-vwrptusr" href="reported-user.php" role="button"> View </a></td>
                                            </tr>
                                    <?php $number++; }} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>                  
                </div>
            </div>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  