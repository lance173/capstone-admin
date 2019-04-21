 <!-- change admin role modal -->
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

                            <form action="../controllers/AdminUserController.php" method="POST" onsubmit="return checkChangeRole(this);">
                                    <input type="text" name="currentUser" for="" value="<?php echo $_SESSION['profile']['AdminID'];?>" hidden>
                                    <input type="text" name="changeroleadminID" for="" id="changerole-adminID" hidden>
                                    <input type="text" name="currentRole" for="currentRole" id="currentRole" hidden>
                                    

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
                                    <button type="submit" class="btn btn-login" name="btnChangeAdmin">Change Role</button>
                                    <button type="button" class="btn btn-rptusr" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>