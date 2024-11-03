<footer class="footer">
  <div class="container-fluid">
    <div class="copyright ml-auto">
      2024 &copy Document Request System & Complaint Reporting for Barangay Cariño
Paniqui Tarlac

    </div>
  </div>
</footer>
<!-- Modal -->
<div class="modal fade" id="barangay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          <?= isAdmin() ? "Update Barangay Info" : "Barangay Information" ?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="model/edit_brgy_info.php" enctype="multipart/form-data">
          <input type="hidden" name="size" value="1000000">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Province Name</label>
                <input type="text" class="form-control" placeholder="Enter Province Name" name="province" required value="<?= $province ?>" 
                <?= isAdmin() ? "" : "readonly" ?>>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Town Name</label>
                <input type="text" class="form-control" placeholder="Enter Town Name" name="town" required value="<?= $town ?>" 
                <?= isAdmin() ? "" : "readonly" ?>>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Barangay Name</label>
                <input type="text" class="form-control" placeholder="Enter Barangay Name" name="brgy" required value="<?= $brgy ?>" 
                <?= isAdmin() ? "" : "readonly" ?>>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Contact Number</label>
                <input type="text" class="form-control" placeholder="Enter Contact Number" name="number" required value="<?= $number ?>" 
                <?= isAdmin() ? "" : "readonly" ?>>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Dashboard Text</label>
            <textarea class="form-control" name="db_msg" required <?= isAdmin() ? "" : "readonly" ?>><?= $db_txt ?></textarea>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Municipality/City Logo</label><br>
                <img src="assets/uploads/<?= $city_logo ?>" class="img-fluid" width="120">
                <?php if (isAdmin()): ?>
                  <input type="file" class='form-control' name="city_logo" accept="image/*">
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Barangay Logo</label><br>
                <img src="assets/uploads/<?= $brgy_logo ?>" class="img-fluid" width="120">
                <?php if (isAdmin()): ?>
                  <input type="file" class='form-control' name="brgy_logo" accept="image/*">
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Dashboard Image</label><br>
            <img src="<?= !empty($db_img) ? "assets/uploads/" . $db_img : "assets/img/bg-abstract.png" ?>" class="img-fluid">
            <?php if (isAdmin()): ?>
              <input type="file" class='form-control' name="db_img" accept="image/*">
            <?php endif; ?>
          </div>
                  <?php if (isAdmin()): ?>
          <small class="form-text text-muted">Note: Please upload only images and not more than 20MB.</small>
           <?php endif; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <?php if (isAdmin()): ?>
          <button type="submit" class="btn btn-primary">Update</button>
        <?php endif; ?>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="support" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>If you need assistance, please reach out to one of the following contacts:</p>
                
                <h6>𝗠𝗗𝗥𝗥𝗠𝗖 𝗣𝗔𝗡𝗜𝗤𝗨𝗜</h6>
                <ul>
                  
                    <li>0948-8675-614</li>
                    <li>(045) 606-3952</li>
                </ul>
                
                <h6>𝗣𝗡𝗣 𝗣𝗔𝗡𝗜𝗤𝗨𝗜</h6>
                <ul>
                    <li>0908-9882-818</li>
                    <li>(045) 931-1110</li>
                 
                </ul>
                
                <h6>𝗕𝗙𝗣 𝗣𝗔𝗡𝗜𝗤𝗨𝗜</h6>
                <p>0923-1357-153</p>
                <p>(045) 491-0362</p>
                
                <h6>𝗥𝗛𝗨-𝗜 𝗣𝗔𝗡𝗜𝗤𝗨𝗜</h6>
                <ul>
                    <li>800-9882-818</li>
         
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="requestdoc" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Certificate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background-image:url('assets/img/db.jpg'); background-size:cover;">
        <form method="POST" action="model/save_requestdoc.php">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Name" name="name" required >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter Email Address" name="email" required >
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Contact Number(optional)" name="number">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Enter Requested Document" name="subject" required>
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" placeholder="Enter Purpose" name="message" required ></textarea>
          </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Request</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="model/change_password.php">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Enter Name" readonly name="username" value="<?= $_SESSION[
            	"username"
            ] ?>" required >
          </div>
          <div class="form-group form-floating-label">
            <label>Current Password</label>
            <input type="password" id="cur_pass" class="form-control" placeholder="Enter Current Password" name="cur_pass" required >
            <span toggle="#cur_pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          </div>
          <div class="form-group form-floating-label">
            <label>New Password</label>
            <input type="password" id="new_pass" class="form-control" placeholder="Enter New Password" name="new_pass" required >
            <span toggle="#new_pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          </div>
          <div class="form-group form-floating-label">
            <label>Confirm Password</label>
            <input type="password" id="con_pass" class="form-control" placeholder="Confirm Password" name="con_pass" required >
            <span toggle="#con_pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      <button type="submit" class="btn btn-primary">Change</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="restore" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Restore Database</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="model/restore.php" enctype="multipart/form-data">
          <input type="hidden" name="size" value="1000000">
          <div class="form-group form-floating-label">
            <label>Upload Sql file</label>
            <input type="file" class="form-control" accept=".sql" name="backup_file" required>
          </div>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      <button type="submit" class="btn btn-primary">Restore</button>
      </div>
      </form>
    </div>
  </div>
</div>