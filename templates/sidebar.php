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
        <li class="nav-item <?= appendActiveClass(["certificate-requests", "resident_certification", "generate_brgy_cert", "generate_fpscert", "generate_indi_cert", "generate_business_permit"]) ?>">
          <a href="#certificates" data-toggle="collapse" class="<?= appendActiveClass(["certificate-requests", "resident_certification", "generate_brgy_cert", "generate_fpscert", "generate_indi_cert", "generate_business_permit"]) ? "collapsed" : "" ?>" aria-expanded="<?= appendActiveClass(["certificate-requests", "resident_certification", "generate_brgy_cert", "generate_fpscert", "generate_indi_cert", "generate_business_permit"]) ? "true" : "false" ?>">
            <i class="fas fa-certificate"></i>
            <p>Certificates</p>
            <span class="caret"></span>
          </a>

          <div class="collapse <?= appendActiveClass(["certificate-requests", "resident_certification", "generate_brgy_cert", "generate_fpscert", "generate_indi_cert", "generate_business_permit"]) ? "show" : "" ?>" id="certificates">
            <ul class="nav nav-collapse">
              <li class="<?= $currentPage == "certificate-requests" ? "active" : null ?>">
                <a href="certificate-requests.php">
                  <span class="sub-item">Certificate Requests</span>
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
       <?php if (role(["user", ""])): ?>
       <li class="
              nav-item
              <?= appendActiveClass(["certificate-requests"]) ?>
            ">
          <a href="certificate-requests.php">
            <i class="fas fa-user-tie"></i>
            <p>Certificate Requests</p>
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

           <?php if (role(["administrator", "user","staff"])): ?>
        <li class="nav-item <?= appendActiveClass(["blotter", "generate_blotter_report"]) ?>">
          <a href="blotter.php">
            <i class="icon-layers"></i>
            <p>Blotter Records</p>
          </a>
        </li>
        <?php endif; ?>

        <li class="nav-item <?= appendActiveClass(["announcements", "announcements-view"]) ?>">
          <a href="announcements.php">
            <i class="icon-pin"></i>
            <p>Announcements</p>
          </a>
        </li>

        <!-- <?php if (role(["staff", "user"])): ?>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">System</h4>
        </li>
        <li class="nav-item">
          <a href="#support" data-toggle="modal">
            <i class="fas fa-flag"></i>
            <p>Support</p>
          </a>
        </li>
    <?php endif; ?> -->
 

      
        <!-- <li class="nav-item <?= appendActiveClass(["revenue"]) ?>">
          <a href="revenue.php">
            <i>₱</i>
            <p>Collection Payment</p>
          </a>
        </li> -->

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
           <?php if (isAdmin() || role(["user", "staff"])): ?>
                <li class="<?= $currentPage == "precinct" ? "active" : null ?>">
                    <a href="precinct.php">
                        <span class="sub-item">Contact Number</span>
                    </a>
                </li>
            <?php endif; ?>
              
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
                 <li class="<?= $currentPage == "loginhistory" ? "active" : null ?>">
                    <a href="loginhistory.php">
                        <span class="sub-item">Login History</span>
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