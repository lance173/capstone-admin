<?php require('../controllers/UserController.php');
       $branches=loadAllBranchesForUser();
       $id = $_GET['updateID'];
       $row = viewUser($id);
?>


<?php require('menu.php');?>
                <div class="span9" id="content">

                   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit User</div>
                            </div>
                            <div class="block-content collapse in">
                            	<div class="span12">
                                     <form class="form-horizontal" 
                                     method="POST" 
                                     action="../controllers/UserController.php" 
                                     onsubmit="return confirm('Are you sure?')"
                                     >
                                      <fieldset>
                                        <legend>Edit User Form</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="user-id">ID</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" id="user-id" name="user-id" type="text" value="<?php echo $row[0];?>"required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="user-first-name">First Name</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" id="user-first-name" name="user-first-name" type="text" value="<?php echo $row[1];?>" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="user-last-name">Last Name</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" id="user-last-name" name="user-last-name" type="text" 
                                            value="<?php echo $row[2];?>" required>
                                          </div>
                                        </div>
                                        <div class="control-group">
                                          <label class="control-label" for="user-password">Password</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" id="user-password" name="user-password" type="text"
                                            value="<?php echo $row[3];?>" required>
                                          </div>
                                        </div>
                                        
                                        <div class="control-group"> 
                                          <label class="control-label" for="user-gender">Gender</label>
                                          <div class="controls">
                                            <select id="user-gender" name="user-gender">
                                              <option value="Male" <?php echo $row[4]=="Male"?"selected":"" ?> >Male</option>
                                              <option value="Female" <?php echo $row[4]=="Female"?"selected":"" ?> >Female</option>
                          
                                            </select>
                                     
                                          </div>
                                        </div>
                                        <div class="control-group"> 
                                          <label class="control-label" for="user-branch-id">Branch</label>
                                          <div class="controls">
                                            <select id="user-branch-id" name="user-branch-id">
                                            	<?php foreach($branches as $b){ ?>
                                              <option value="<?php echo $b[0];?>"<?php echo $row[5] == $b[0]?"selected":""; ?> >


                                                <?php echo $b[1];?></option>
                                              <?php }?>
                                              
                          
                                            </select>
                                            
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary" name="btnEditUserSubmit">Save changes</button>
                                          <button type="reset" class="btn" onclick="loadUserPage()">Cancel</button>
                                        </div>
                                      </fieldset>
                                    </form>

                                </div>
                                
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                                    
                </div>



</div>
                       
        </div>
<?php require('footer.php');?>