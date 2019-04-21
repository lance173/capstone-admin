<?php 
    require('header.php');
    include('nav.php');
    require('../controllers/AdminUserController.php');

    $admin = displayAllAdmins();
    $sysAdmin = displaySysAdmins();
    $editor = displayEditors();
    $author = displayAuthors();
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
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#changeRoleModal" onclick="changeAdminRole(<?php echo $id; ?>)"> Change Role </button>
                                                    <button class="btn btn-rptusr" onclick="loadDeleteAdmin(<?php echo $id; ?>)"> Delete </button>
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
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#changeRoleModal" onclick="changeAdminRole(<?php echo $id; ?>)"> Change Role </button>
                                                    <button class="btn btn-rptusr" onclick="loadDeleteAdmin(<?php echo $id; ?>)"> Delete </button>
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
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#changeRoleModal" onclick="changeAdminRole(<?php echo $id; ?>)"> Change Role </button>
                                                    <button class="btn btn-rptusr" onclick="loadDeleteAdmin(<?php echo $id; ?>)"> Delete </button>
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
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#changeRoleModal" onclick="changeAdminRole(<?php echo $id; ?>)"> Change Role </button>
                                                    <button class="btn btn-rptusr" onclick="loadDeleteAdmin(<?php echo $id; ?>)"> Delete </button>
                                                </td>
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

            <div class="modal fade" id="changeRoleModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">                            
                            <h4 class="modal-title">Change Role</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">

                            <center> 
                                <img id="changerole-adminphoto" width="100px" style="border-radius: 100px;" />

                                <div style="display:block; margin-top: 10px; font-size: 18px; " id="changerole-adminname">
                                  <div id="changerole-adminfirstname" style="display: inline-block;"> </div> <div id="changerole-adminlastname" style="display: inline-block;"> </div>
                                </div>
                                <small id="changerole-adminposition"> </small>
                            </center>

                            

                            <div class="form-group site-roleselect" style="margin-top: 20px;">
                                <label class="control-label" for="site-role">Site Role</label>
                                <select id="siteRole" name="siteRole" class="form-control"  onchange="roleSelect();" style="width: 80%">
                                    <option selected disabled hidden>Select Role for admin in this website</option>
                                    <option value="System Administrator">System Admin</option>
                                    <option value="Editor">Editor</option>
                                    <option value="Author">Author / Writer</option>
                                </select>

                                <div class="role-descrip" id="role-sysad">
                                    <i class="fas fa-info-circle"></i> System Admin can:
                                        <ul>
                                            <li> Add and Manage Admins  </li>
                                            <li> Add and Manage Students</li>
                                            <li> Approve Articles and Webpages</li>
                                            <li> Write and Manage Articles </li>
                                            <li> Approve Articles </li>
                                            <li> Add and Mange Webpages</li>
                                            <li> Edit website appearance</li>
                                        </ul>
                                </div>

                                <div class="role-descrip" id="role-editr">
                                    <i class="fas fa-info-circle"></i> Editor can:
                                        <ul>
                                            <li> Write and Manage Articles </li>
                                            <li> Approve Articles </li>
                                            <li> Add and Mange Webpages</li>
                                            <li> Edit website appearance</li>
                                        </ul>
                                </div>

                                <div class="role-descrip" id="role-autr">
                                    <i class="fas fa-info-circle"></i> Author/Writer can:
                                        <ul>
                                             <li> Only Write Articles </li>                                                 
                                        </ul>
                                </div>                                    
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
                    

                <!--content-wrapper closing tag will be found in footer.php -->
<?php
    require('footer.php');
?>  