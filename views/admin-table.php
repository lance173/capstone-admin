<?php 
    require('header.php');
    include('nav.php');
    require('../controllers/AdminUserController.php');

    $admin = displayAllActiveAdmins();
    $sysAdmin = displaySysAdmins();
    $editor = displayEditors();
    $author = displayAuthors();
    $deactivated = displayDeactivatedAdmins();

    if($_SESSION['profile']['SiteRole'] == 'Author' || $_SESSION['profile']['SiteRole'] == 'Editor'){
    ?>
        <script>
            window.location='restrictedpage.php';
        </script> 
    <?php
    }

?>
    <script type="text/javascript" language="Javascript"> activePageAtSideNav('MenuAdminUsers'); activePageAtSideNav('MenuAdminUsersTable'); </script>

        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h3 class="page-title"> <i class="fa fa-user-shield"></i> Admin Users </h3>
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
                            <div class="ibox-title">All Admins</div>
                            <div> <a href="add-useradmin.php"> <button class="btn add-btn"> <i class="fas fa-plus"></i> Add New Admin</button> </a> </div>
                        </div>
                        <div class="ibox-body">
                            <ul class="nav nav-tabs tabs-line">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tab-7-1" data-toggle="tab"><i class="fas fa-users-cog"></i> All Admins</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab-7-2" data-toggle="tab"><i class="fas fa-user-tie"></i> System Admins</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab-7-3" data-toggle="tab"><i class="fa fa-user-cog"></i> Editors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab-7-4" data-toggle="tab"><i class="fa fa-user-edit"></i> Authors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tab-7-5" data-toggle="tab"><i class="fa fa-user-times"></i> Deactivated Users</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-7-1">

                                     <table class="table table-striped table-bordered table-hover" id="alladmins-table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID No.</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Role</th>
                                                <th>Email</th>
                                                <th>Action</th>                                                    
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php if(isset($admin)){foreach($admin as $all){?>
                                            <tr>
                                                <td style="display: none"><?php $id=$all['AdminID']; echo $id?></td>
                                                <td><?php echo $all['USCIDNo'];?></td>
                                                <td><?php echo $all['FirstName'],'&nbsp',$all['LastName'];?></td>
                                                <td><?php echo $all['Position'];?></td>
                                                <td><?php echo $all['SiteRole'];?></td>
                                                <td><?php echo $all['Email'];?></td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#changeRoleModal" onclick="readyChangeAdminRole(<?php echo $id; ?>)"> Change Role </button>
                                                    <button class="btn btn-vwrptusr" onclick="loadDeactAdmin(<?php echo $id;?>, '<?php echo $_SESSION['profile']['AdminID'];?>')"> Deactivate Account </button>
                                                </td>
                                            </tr>
                                        <?php }} ?>                                              
                                        </tbody>
                                    </table>

                                </div>
                                <div class="tab-pane" id="tab-7-2">

                                    <table class="table table-striped table-bordered table-hover" id="systemadmins-table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID No.</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Role</th>
                                                <th>Email</th>  
                                                <th>Action</th>                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($sysAdmin)){foreach($sysAdmin as $sysAd){?>
                                            <tr>
                                                <td style="display: none"><?php $id=$sysAd['AdminID']; echo $id?></td>
                                                <td><?php echo $sysAd['USCIDNo'];?></td>
                                                <td><?php echo $sysAd['FirstName'],'&nbsp', $sysAd['LastName'];?></td>
                                                <td><?php echo $sysAd['Position'];?></td>
                                                <td><?php echo $sysAd['SiteRole'];?></td>
                                                <td><?php echo $sysAd['Email'];?></td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#changeRoleModal" onclick="readyChangeAdminRole(<?php echo $id; ?>)"> Change Role </button>
                                                    <button class="btn btn-vwrptusr" onclick="loadDeactAdmin(<?php echo $id;?>, '<?php echo $_SESSION['profile']['AdminID'];?>')"> Deactivate Account </button>
                                                </td>
                                            </tr>
                                        <?php }} ?>                                              
                                        </tbody>
                                    </table>

                                </div>
                                <div class="tab-pane fade"  id="tab-7-3">

                                <table class="table table-striped table-bordered table-hover" id="editors-table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID No.</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Role</th>
                                                <th>Email</th>     
                                                <th>Action</th>                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($editor)){foreach($editor as $edit){?>
                                            <tr>
                                                <td style="display: none"><?php $id=$edit['AdminID']; echo $id?></td>
                                                <td><?php echo $edit['USCIDNo'];?></td>
                                                <td><?php echo $edit['FirstName'],'&nbsp', $edit['LastName'];?></td>
                                                <td><?php echo $edit['Position'];?></td>
                                                <td><?php echo $edit['SiteRole'];?></td>
                                                <td><?php echo $edit['Email'];?></td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#changeRoleModal" onclick="readyChangeAdminRole(<?php echo $id; ?>)"> Change Role </button>
                                                    <button class="btn btn-vwrptusr" onclick="loadDeactAdmin(<?php echo $id;?>, '<?php echo $_SESSION['profile']['AdminID'];?>')"> Deactivate Account </button>
                                                </td>
                                            </tr>
                                        <?php }} ?>                                              
                                        </tbody>
                                    </table>

                                </div>
                                <div class="tab-pane fade"  id="tab-7-4">
                                	<table class="table table-striped table-bordered table-hover" id="authors-table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID No.</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Role</th>
                                                <th>Email</th>            
                                                <th>Action</th>                                      
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($author)){foreach($author as $auth){?>
                                            <tr>
                                                <td style="display: none"><?php $id=$auth['AdminID']; echo $id?></td>
                                                <td><?php echo $auth['USCIDNo'];?></td>
                                                <td><?php echo $auth['FirstName'],'&nbsp', $auth['LastName'];?></td>
                                                <td><?php echo $auth['Position'];?></td>
                                                <td><?php echo $auth['SiteRole'];?></td>
                                                <td><?php echo $auth['Email'];?></td>
                                                <td>
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#changeRoleModal" onclick="readyChangeAdminRole(<?php echo $id; ?>)"> Change Role </button>
                                                    <button class="btn btn-vwrptusr" onclick="loadDeactAdmin(<?php echo $id;?>, '<?php echo $_SESSION['profile']['AdminID'];?>')"> Deactivate Account </button>
                                                </td>
                                            </tr>
                                        <?php }} ?>                                              
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade"  id="tab-7-5">
                                	<table class="table table-striped table-bordered table-hover" id="authors-table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                            	<th>Action</th> 
                                                <th>ID No.</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Role</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(isset($deactivated)){foreach($deactivated as $deac){?>
                                            <tr>
                                            	
                                                <td style="display: none"><?php $id=$deac['AdminID']; echo $id?></td>
                                                <td>                                                    
                                                    <button class="btn add-btn" onclick="loadReactivateAdmin(<?php echo $id;?>, '<?php echo $_SESSION['profile']['AdminID'];?>')"> Reactivate </button>
                                                </td>
                                                <td><?php echo $deac['USCIDNo'];?></td>
                                                <td><?php echo $deac['FirstName'],'&nbsp', $deac['LastName'];?></td>
                                                <td><?php echo $deac['Position'];?></td>
                                                <td><?php echo $deac['SiteRole'];?></td>
                                                <td><?php echo $deac['Email'];?></td>                                                
                                            </tr>
                                        <?php }} ?>                                              
                                        </tbody>
                                    </table>
                                </div>
                            </div> <br> 
                        </div>
                    </div>                  
                </div>
            </div>

           <?php include('change-adminrole.php') ?>
                    

        <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  