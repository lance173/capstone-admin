<?php $employeeID = $_SESSION['profile']['AdminID']; ?>
<div class="modal fade" id="editAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form class="form-horizontal" method="POST" action="../controllers/AdminUserController.php" >

  <input type="hidden" name="empployeeID" value="<?php echo $employeeID; ?>" />

    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <img src="<?php echo $_SESSION['profile']['Photo']?>" width="100px" style="border-radius: 100px;" />
            <div style="display:block; margin-top: 10px; font-size: 18px;">
              <b><?php echo $_SESSION['profile']['FirstName'],'&nbsp',$_SESSION['profile']['LastName']?></b>
            </div>
              <small><?php echo $_SESSION['profile']['Position']?></small>
            
          </center>
          <div class="" style="margin-top: 20px; margin-left: 50px;">
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Old Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="inputOldPassword" id="inputOldPassword" placeholder="Old Password" style="width: 80%;">
              </div>
            </div>   
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">New Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="inputNewPassword" id="inputNewPassword" placeholder="New Password" style="width: 80%;">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-4 col-form-label">Confirm Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="inputConfPassword" id="inputConfPassword" placeholder="Confirm New Password" style="width: 80%;">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="editAdminUser" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </form>
</div>