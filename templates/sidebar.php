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
              <?php if (role(["administrator", "staff"])): ?>
              <li class="<?= $currentPage == "resident_certification" ? "active" : null ?>">
                <a href="resident_certification.php">
                  <span class="sub-item">Barangay Certificates</span>
                </a>
              </li>
              <?php endif; ?>
              <?php if (isAdmin()): ?>
              <li class="<?= $currentPage == "4ps-residents" ? "active" : null ?>">
                <a href="4ps-residents.php">
                  <span class="sub-item">4ps Certification</span>
                </a>
              </li>
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
              <?php endif; ?>
            </ul>
          </div>
        </li>

        <?php if (role(["administrator", "staff"])): ?>
        <li class="nav-item <?= appendActiveClass(["resident", "generate_resident"]) ?>">
          <a href="resident.php">
            <i class="icon-people"></i>
            <p>Resident Information</p>
          </a>
        </li>
        <?php endif; ?>

           <?php if (role(["administrator", "user"])): ?>
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

        <?php if (role(["staff", "user"])): ?>
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

        <li class="nav-item">
          <a href="settings.php">
            <i class="fas fa-cog"></i>
            <p>Settings</p>
          </a>
        </li>
        <?php endif; ?>

        <?php if (isAdmin()): ?>
        <li class="nav-item <?= appendActiveClass(["revenue"]) ?>">
          <a href="revenue.php">
            <i>₱</i>
            <p>Collection Payment</p>
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
            <p>Settings</p>
            <span class="caret"></span>
          </a>

          <div class="collapse <?= $isSettingsPage ? "show" : null ?>" id="settings">
            <ul class="nav nav-collapse">
              <li>
                <a href="#barangay" data-toggle="modal">
                  <span class="sub-item">Barangay Info</span>
                </a>
              </li>
              <li class="<?= $currentPage == "purok" ? "active" : null ?>">
                <a href="purok.php">
                  <span class="sub-item">Purok</span>
                </a>
              </li>
              <li class="<?= $currentPage == "precinct" ? "active" : null ?>">
                <a href="precinct.php">
                  <span class="sub-item">Contact Number</span>
                </a>
              </li>
              <li class="<?= $currentPage == "position" ? "active" : null ?>">
                <a href="position.php">
                  <span class="sub-item">Position</span>
                </a>
              </li>
              <li class="<?= $currentPage == "users" ? "active" : null ?>">
                <a href="users.php">
                  <span class="sub-item">Users</span>
                </a>
              </li>
              <li class="<?= $currentPage == "support" ? "active" : null ?>">
                <a href="support.php">
                  <span class="sub-item">Support</span>
                </a>
              </li>
              <li class="<?= $currentPage == "backup" ? "active" : null ?>">
                <a href="backup.php">
                  <span class="sub-item">Backup</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <?php endif; ?>

      </ul>
    </div>
  </div>
</div>