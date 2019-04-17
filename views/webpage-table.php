<?php 
    require('header.php');
    include('nav.php');
    require('../controllers/WebPagesController.php');
    $ActivePages = loadActivePages();
    $PageBin = loadPageBin()
?>
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuWebApprnc'); activePageAtSideNav('MenuWebApprncSitePages'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h3 class="page-title"> <i class="far fa-window-restore"></i> Pages </h3>
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
                                <div class="ibox-title">Website Pages</div>
                                <div> <a href="add-webpage.php"> <button class="btn add-btn"> <i class="fas fa-plus"></i> Add New Page </button> </a> </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-7-1" data-toggle="tab"><i class="far fa-window-maximize"></i> Active Pages</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-7-2" data-toggle="tab"> <i class="fa fa-trash" aria-hidden="true"></i> Page Bin </a>
                                    </li>                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tab-7-1">

                                         <table class="table table-striped table-bordered table-hover" id="activepages-table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>                                                    
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <!-- TO BE ADDED: $lnkid will increment every <tr> -->
                                                <?php $lnkid = "showpgelnk1"; 
                                                if(isset($ActivePages)){foreach($ActivePages as $actP){ 
                                                ?> 

                                                    <tr onmouseover="showpgelnks('<?php echo $lnkid ?>')" onmouseout="hidepgelnks('<?php echo $lnkid ?>')">                                                  
                                                        <td> <div class="pagetabletitle"> <?php echo $actP['PageTitle'];?> </div> 
                                                            <div class="pagetableminlink" id="<?php echo $lnkid ?>"> 
                                                                <a href="#" onclick="loadEditWebPage(<?php echo $actP['WebPageID'];?>)"> Edit </a> |  <a href="#" onclick="viewLiveWebPage(<?php echo $actP['WebPageID'];?>)"  class="green-theme"> View </a> | <a href="#" class="page-deletelink" onclick="loadBinWebPage(<?php echo $actP['WebPageID'];?>)"> Bin </a> 
                                                            </div>
                                                        </td>
                                                        <td> <?php echo $actP['FirstName'];?> <?php echo $actP['LastName'];?> </td>
                                                        <td><?php $dateCreat=date_create($actP['DateCreated']); echo date_format($dateCreat,"F d, Y"); ?></td>
                                                    </tr> 
                                                                  
                                                <?php $lnkid++;
                                                }} ?> <!-- Exactly what i said from the first comment -->
                                                                    <!-- Just here to catch attention-->                                                                                            
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-pane" id="tab-7-2">

                                        <table class="table table-striped table-bordered table-hover" id="pagebin-table" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>                                                    
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Date</th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if(isset($PageBin)){foreach($PageBin as $binP){  ?>
                                                    <tr>                                                                                                  
                                                        <td> <b> <?php echo $binP['PageTitle'];?> </b>  </td>
                                                        <td> <?php echo $binP['FirstName'];?> <?php echo $binP['LastName'];?> </td>
                                                        <td><?php $dateCreat=date_create($binP['DateCreated']); echo date_format($dateCreat,"F d, Y"); ?></td>
                                                        <td> 
                                                            <a class="btn btn-artvw" href="#" role="button" onclick="loadRestoreWebPage(<?php echo $binP['WebPageID'];?>)"> <i class="fas fa-reply"></i> Restore </a>
                                                            <a class="btn btn-primary" href="#" role="button" onclick="loadEditWebPage(<?php echo $binP['WebPageID'];?>)"> <i class="fas fa-pen"></i> Edit </a>
                                                            <a class="btn btn-rptusr" href="#" role="button" onclick="loadDeleteWebPage(<?php echo $binP['WebPageID'];?>)"> <i class="fas fa-trash-alt"></i> Delete </a>
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