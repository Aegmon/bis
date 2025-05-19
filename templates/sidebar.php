<?php // function to get the current page name
$currentPage = (function () {
	$fullFilename = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);

	return pathinfo($fullFilename)["filename"];
})();

$isSettingsPage = in_array($currentPage, [
	"purok",
	"position",
	"precinct",
	"chairmanship",
	"users",
	"support",
	"requestdoc",
	"backup",
]);

function appendActiveClass(array $pages)
{
	return in_array($GLOBALS["currentPage"], $pages) ? "active" : null;
}
?>
<div class="sidebar sidebar-style-2">
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <div class="user">
        <div class="avatar-sm float-left mr-2">
          <?php if (!empty($_SESSION["avatar"])): ?>
          <img src="<?= imgSrc($_SESSION["avatar"]) ?>" alt="..." class="avatar-img rounded-circle">
          <?php else: ?>
          <img src="assets/img/person.png" alt="..." class="avatar-img rounded-circle">
          <?php endif; ?>
        </div>
        <div class="info">
          <a data-toggle="collapse" href="<?= role(["user", "administrator"]) ? "#collapseExample" : "javascript:void(0)" ?>" aria-expanded="true">
            <span>
              <?= isAuthenticated() ? ucfirst($_SESSION["username"]) : "Guest User" ?>
              <span class="user-level">
                <?= isAuthenticated() ? ucfirst($_SESSION["role"]) : "Guest" ?>
              </span>
              <?= isAdmin() ? '<span class="caret"></span>' : null ?>
            </span>
          </a>
          <div class="clearfix"></div>
          <div class="collapse in" id="collapseExample">
            <ul class="nav">
              <li>
                <a href="#edit_profile" data-toggle="modal">
                  <span class="link-collapse">Edit Profile</span>
                </a>
                <a href="#changepass" data-toggle="modal">
                  <span class="link-collapse">Change Password</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="nav nav-primary">
        <li class="nav-item <?= appendActiveClass(["dashboard", "resident_info", "purok_info"]) ?>">
          <a href="dashboard.php">
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Menu</h4>
        </li>

        <?php if (role(["administrator", "staff"])): ?>
        <li class="nav-item <?= appendActiveClass(["officials"]) ?>">
          <a href="officials.php">
            <i class="fas fa-user-tie"></i>
            <p>Brgy Officials and Staff</p>
          </a>
        </li>
        <?php endif; ?>
  <?php  if (isAdmin()): ?>
       <?php
// Add this before the HTML to get the count
$unreadCount = 0;
 

        $stmt = $conn->prepare("
            SELECT COUNT(*) AS count 
            FROM certificate_requests 
            WHERE isReadAdmin = 0 AND status = 'pending'
        ");
        $stmt->execute();
        $countResult = $stmt->get_result()->fetch_assoc();
        $unreadCount = $countResult['count'];
        $stmt->close();
    
?>
        <li class="nav-item <?= appendActiveClass(["certificate-requests", "resident_certification", "generate_brgy_cert", "generate_fpscert", "generate_indi_cert", "generate_business_permit"]) ?>">
          <a href="#certificates" data-toggle="collapse" class="<?= appendActiveClass(["certificate-requests", "resident_certification", "generate_brgy_cert", "generate_fpscert", "generate_indi_cert", "generate_business_permit"]) ? "collapsed" : "" ?>" aria-expanded="<?= appendActiveClass(["certificate-requests", "resident_certification", "generate_brgy_cert", "generate_fpscert", "generate_indi_cert", "generate_business_permit"]) ? "true" : "false" ?>">
            <i class="fas fa-certificate"></i>
            <p>Certificates</p>
            <span class="caret"></span>
                 <?php if ($unreadCount > 0): ?>
                        <span class="badge badge-danger"><?= $unreadCount ?></span>
                      <?php endif; ?>
          </a>

          <div class="collapse <?= appendActiveClass(["certificate-requests", "resident_certification", "generate_brgy_cert", "generate_fpscert", "generate_indi_cert", "generate_business_permit"]) ? "show" : "" ?>" id="certificates">
            <ul class="nav nav-collapse">
              <li class="<?= $currentPage == "certificate-requests" ? "active" : null ?>">
                <a href="certificate-requests.php">
                  <span class="sub-item">Certificate Requests
                <?php if ($unreadCount > 0): ?>
                        <span class="badge badge-danger"><?= $unreadCount ?></span>
                      <?php endif; ?>
                  </span>
                </a>
              </li>
            
              <li class="<?= $currentPage == "resident_certification" ? "active" : null ?>">
                <a href="resident_certification.php">
                  <span class="sub-item">Barangay Clearance </span>
                </a>
              </li>
           
         
              <!-- <li class="<?= $currentPage == "4ps-residents" ? "active" : null ?>">
                <a href="4ps-residents.php">
                  <span class="sub-item">4ps Certification</span>
                </a>
              </li> -->
              <li class="<?= $currentPage == "resident_indigency" ? "active" : null ?>">
                <a href="resident_indigency.php">
                  <span class="sub-item">Certificate of Indigency</span>
                </a>
              </li>
              <li class="<?= $currentPage == "business_permit" ? "active" : null ?>">
                <a href="business_permit.php">
                  <span class="sub-item">Brgy Business Clearance</span>
                </a>
              </li>
                <li class="<?= $currentPage == "certificate_ofguardianship" ? "active" : null ?>">
                <a href="certificate_ofguardianship.php">
                  <span class="sub-item">Certificate of Guardianship</span>
                </a>
              </li>
                <li class="<?= $currentPage == "certificate_ofguardianship" ? "active" : null ?>">
                <a href="certificate_jobseeker.php">
                  <span class="sub-item">First Time Jobseekers</span>
                </a>
              </li>
                  <!--li class="<?= $currentPage == "certificate_ofguardianship" ? "active" : null ?>">
                <a href="#">
                  <span class="sub-item">Oath of Undertaking</span>
                </a>
              </li-->
            </ul>
          </div>
        </li>
   <?php endif; ?>
   <?php
// Add this before the HTML to get the count
$unreadCount = 0;

if (isset($_SESSION["id"])) {
    $userId = $_SESSION["id"];
    $stmt = $conn->prepare("
        SELECT r.id AS resident_id
        FROM residents r
        JOIN users u ON u.id = r.account_id
        WHERE u.id = ?
    ");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if ($result && isset($result['resident_id'])) {
        $residentId = $result['resident_id'];

        $stmt = $conn->prepare("
            SELECT COUNT(*) AS count 
            FROM certificate_requests 
            WHERE isRead = 0 AND status = 'released' AND resident_id = ?
        ");
        $stmt->bind_param("i", $residentId);
        $stmt->execute();
        $countResult = $stmt->get_result()->fetch_assoc();
        $unreadCount = $countResult['count'];
        $stmt->close();
    }
}
?>

<?php if (role(["user", ""])): 
  echo $residentId;
  ?>
  <li class="nav-item <?= appendActiveClass(["certificate-requests"]) ?>">
    <a href="certificate-requests-read.php">
      <i class="fas fa-user-tie"></i>
      <p>
        Certificate Requests 
     
        <?php if ($unreadCount > 0): ?>
          <span class="badge badge-danger"><?= $unreadCount ?></span>
        <?php endif; ?>
      </p>
    </a>
  </li>
<?php endif; ?>

<?php if (role(["administrator", "staff"])): ?>
  <li class="nav-item <?= appendActiveClass(["resident", "generate_resident"]) ?>">
    <a href="resident.php">
      <i class="icon-people"></i>
      <p>Resident Information</p>
    </a>
  </li>

  <li class="nav-item <?= appendActiveClass(["purok", "generate_resident"]) ?>">
    <a href="purok.php">
      <i class="icon-pin"></i>
      <p>Purok</p>
    </a>
  </li>
<?php endif; ?>
  <li class="nav-item <?= appendActiveClass(["purok", "generate_resident"]) ?>">
    <a href="purok.php">
      <i class="icon-pin"></i>
      <p>Purok</p>
    </a>
  </li>
<?php endif; ?>



        <li class="nav-item <?= appendActiveClass(["blotter", "generate_blotter_report"]) ?>">
          <a href="blotter.php">
            <i class="icon-layers"></i>
            <p>Blotter Records</p>
          </a>
        </li>
    
    

        <li class="nav-item <?= appendActiveClass(["announcements", "announcements-view"]) ?>">
          <a href="announcements.php">
            <i class="icon-pin"></i>
            <p>Announcements</p>
          </a>
        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">System</h4>
        </li>

     <li class="nav-item <?= $isSettingsPage ? "active" : null ?>">
    <a href="#settings" data-toggle="collapse" class="collapsed" aria-expanded="false">
        <i class="icon-wrench"></i>
        <p>
            <?php if (isAdmin()): ?>
                Settings
            <?php elseif (role(["user"])): ?>
                Settings
            <?php elseif (role(["staff"])): ?>
                 Settings
            <?php endif; ?>
        </p>
        <span class="caret"></span>
    </a>

    <div class="collapse <?= $isSettingsPage ? "show" : null ?>" id="settings">
        <ul class="nav nav-collapse">
               <?php if (role(["user"])): ?>
                <li>
                        <a href="settings.php">
                  <span class="sub-item">Profile</span>
                </a>
                </li>
            <?php endif; ?>
                <li>
                    <a href="#barangay" data-toggle="modal">
                        <span class="sub-item">Barangay Information</span>
                    </a>
                </li>
                    
            <?php if (role(["administrator","staff"])): ?>
                <li class="<?= $currentPage == "chairmanship" ? "active" : null ?>">
                    <a href="chairmanship.php">
                        <span class="sub-item">Chairmanship</span>
                    </a>
                </li>
            <?php endif; ?>
      
      
                <li class="<?= $currentPage == "precinct" ? "active" : null ?>">
                    <a href="precinct.php">
                        <span class="sub-item">Contact Number</span>
                    </a>
                </li>
        
        
              
            <?php if (isAdmin()): ?>

            
                <li class="<?= $currentPage == "users" ? "active" : null ?>">
                    <a href="users.php">
                        <span class="sub-item">Users</span>
                    </a>
                </li>
                <li class="<?= $currentPage == "position" ? "active" : null ?>">
                    <a href="position.php">
                        <span class="sub-item">Position</span>
                    </a>
                </li>
                <li class="<?= $currentPage == "logs" ? "active" : null ?>">
                    <a href="logs.php">
                        <span class="sub-item">Transaction Logs</span>
                <li class="<?= $currentPage == "logs" ? "active" : null ?>">
                    <a href="logs.php">
                        <span class="sub-item">Transaction Logs</span>
                    </a>
                </li>
             
             
            <?php endif; ?>
        </ul>
    </div>
</li>

  

      </ul>
    </div>
  </div>
</div>
<div class="modal fade" id="edit_profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create System User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="model/edit_profile.php" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="size" value="1000000">
          <div class="text-center">
            <div id="my_camera" style="height: 250;" class="text-center">
              <?php if (empty($_SESSION["avatar"])): ?>
              <img src="assets/img/person.png" alt="..." class="img img-fluid" width="250">
              <?php else: ?>
              <img src="<?= imgSrc(
              	$_SESSION["avatar"]
              ) ?>" alt="..." class="img img-fluid" width="250">
              <?php endif; ?>
            </div>
            <div class="form-group d-flex justify-content-center">
              <button type="button" class="btn btn-danger btn-sm mr-2" id="open_cam">Open Camera</button>
              <button type="button" class="btn btn-secondary btn-sm ml-2" onclick="save_photo()">Capture</button>
            </div>
            <div id="profileImage">
              <input type="hidden" name="profileimg">
            </div>
            <div class="form-group">
              <input type="file" class="form-control" name="img" accept="image/*">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" value="<?= $_SESSION["id"] ?>" name="id">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="barangay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
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
            <input
              type="text"
              class="form-control"
              placeholder="Enter Name"
              readonly
              name="username"
              value="<?= $_SESSION["username"] ?>"
              required
            />
          </div>
          <div class="form-group form-floating-label">
            <label>Current Password</label>
            <input
              type="password"
              id="cur_pass"
              class="form-control"
              placeholder="Enter Current Password"
              name="cur_pass"
              required
            />
            <span toggle="#cur_pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          </div>
          <div class="form-group form-floating-label">
            <label>New Password</label>
            <input
              type="password"
              id="new_pass"
              class="form-control"
              placeholder="Enter New Password"
              name="new_pass"
              pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
              title="Password must be at least 8 characters long and include at least one lowercase letter, one uppercase letter, one number, and one special character."
              required
            />
            <span toggle="#new_pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          </div>
          <div class="form-group form-floating-label">
            <label>Confirm Password</label>
            <input
              type="password"
              id="con_pass"
              class="form-control"
              placeholder="Confirm Password"
              name="con_pass"
              pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
              title="Password must match the requirements for the New Password."
              required
            />
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
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="barangay" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
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
            <input
              type="text"
              class="form-control"
              placeholder="Enter Name"
              readonly
              name="username"
              value="<?= $_SESSION["username"] ?>"
              required
            />
          </div>
          <div class="form-group form-floating-label">
            <label>Current Password</label>
            <input
              type="password"
              id="cur_pass"
              class="form-control"
              placeholder="Enter Current Password"
              name="cur_pass"
              required
            />
            <span toggle="#cur_pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          </div>
          <div class="form-group form-floating-label">
            <label>New Password</label>
            <input
              type="password"
              id="new_pass"
              class="form-control"
              placeholder="Enter New Password"
              name="new_pass"
              pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
              title="Password must be at least 8 characters long and include at least one lowercase letter, one uppercase letter, one number, and one special character."
              required
            />
            <span toggle="#new_pass" class="fa fa-fw fa-eye field-icon toggle-password"></span>
          </div>
          <div class="form-group form-floating-label">
            <label>Confirm Password</label>
            <input
              type="password"
              id="con_pass"
              class="form-control"
              placeholder="Confirm Password"
              name="con_pass"
              pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}"
              title="Password must match the requirements for the New Password."
              required
            />
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