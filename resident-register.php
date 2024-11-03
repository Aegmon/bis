<?php
session_start();

include "bootstrap/index.php";

$purokList = (function () use ($db) {
	// prettier-ignore
	return $db
		->from("purok")
		->select([
			"id" => "purok.id",
			"name" => "purok.name",
			"details" => "purok.details",
		])
		->exec();
})();
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include "templates/header.php"; ?>

    <title>Login - Barangay Services Management System</title>

    <style>
    .hidden {
      display: none !important;
    }

    label.btn.active {
      color: white !important;
      background-color: #337BB6;
    }

    .form-check>.btn-group {
      width: 100%;
    }

    .form-check>.btn-group>label {
      border: 1px solid #3f3f46;
    }

    .wrapper {
      height: 100% !important;
    }

    </style>
  </head>

  <body class="login">
    <?php include "templates/loading_screen.php"; ?>

    <div class="
			wrapper
			<?= isAuthenticated() ? "" : "d-flex flex-column justify-content-center" ?>
		">

      <?php isAdmin() and (include "templates/main-header.php"); ?>

      <?php isAdmin() and (include "templates/sidebar.php"); ?>

      <div class="

				<?= isAdmin() ? "main-panel" : "" ?>
				<?= isAuthenticated() ? "" : "container" ?>
				<?= isAuthenticated() ? "" : "d-flex flex-column justify-content-center" ?>
			">
        <div class="content">
          <?php if (isAdmin()): ?>
          <div class="panel-header bg-primary-gradient">
            <div class="page-inner">
              <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                  <h2 class="text-white fw-bold">Resident Registration</h2>
                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>

          <div class="page-inner">
            <div class="fadeIn card">
              <div class="login-form card-body">
                <?php if (!isAuthenticated()): ?>
                <h3 class="card-title text-center fw-bold mb-3">Register</h3>
                <?php endif; ?>

                <?php include "templates/alert.php"; ?>

                <form method="POST" action="model/residents.php"  enctype="multipart/form-data">
                  <div class="row g-5">
                    <div class="col-md-4">
                      <div style="height: 250;" class="text-center" id="my_camera">
                        <img src="assets/img/person.png" alt="..." class="img img-fluid" width="250">
                      </div>

                      <div class="form-group d-flex justify-content-center gap-2">
                        <button type="button" class="btn btn-danger btn-sm mr-2" id="open_cam">
                          Open Camera
                        </button>
                        <button type="button" class="btn btn-secondary btn-sm ml-2" onclick="save_photo()">
                          Capture
                        </button>
                      </div>

                      <div id="profileImage">
                        <input type="hidden" name="profileimg">
                      </div>

                      <div class="form-group">
                        <input type="file" class="form-control" name="img" accept="image/*">
                        <small style="color:red">**Jpeg , jpg only</small>
                      </div>

                      <div class="form-group">
                        <label>Any Goverment Issued ID</label>
                    <input type="file" class="form-control" name="issuedID" accept="image/*">
                    
                      </div>

                 
                        <input type="hidden" class="form-control" name="citizenship" placeholder="Enter citizenship" value="Filipino"
                          required readonly>
                    

                      <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" name="address" required placeholder="Enter Address"></textarea>
                      </div>
                    </div>

                    <div class="col-md-8">
                      <div class="row g-0">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>First name</label>
                            <input class="form-control" placeholder="Enter First name" name="fname" required>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Middle name</label>
                            <input class="form-control" placeholder="Middel Name (optional)" name="mname" >
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Last name</label>
                            <input class="form-control" placeholder="Enter Last name" name="lname" required>
                          </div>
                        </div>
                      </div>

                      <div class="row g-0">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Alias</label>
                            <input class="form-control" placeholder="Enter Alias" name="alias">
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Place of Birth</label>
                            <input class="form-control" placeholder="Enter Birthplace" name="birthplace" required>
                          </div>
                        </div>

                       <div class="col-sm-4">
                        <div class="form-group">
                          <label>Birthdate</label>
                          <input type="date" class="form-control" placeholder="Enter Birthdate" name="birthdate" id="birthdate" required>
                        </div>
                      </div>
                      </div>

                      <div class="row g-0">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Age</label>
                            <input type="number"  id="age" class="form-control" placeholder="Enter Age" min="1" name="age" value="0"
                              required readonly>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Civil Status</label>
                            <select class="form-control" name="civil_status">
                              <option disabled selected>Select Civil Status</option>
                              <option value="Single">Single</option>
                              <option value="Married">Married</option>
                              <option value="Widow">Widow</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Sex</label>
                            <select class="form-control" required name="gender">
                              <option disabled selected value="">Select Sex</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row g-0">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Purok</label>
                            <select class="form-control" required name="purok_id">
                              <option disabled selected>Select Purok Name</option>
                              <?php foreach ($purokList as $purok): ?>
                              <option value="<?= $purok["id"] ?>"><?= $purok["name"] ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Voters Status</label>
                            <select class="form-control vstatus" required name="voter_status">
                              <option disabled selected>Select Voters Status</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                            </select>
                          </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Identified As</label>
                            <select class="form-control indetity" name="identified_as">
                              <option value="Register">Register</option>
                              <option value="Unregister">Unregister</option>
                              <option value="Unidentified" selected>Unidentified</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row g-0">
                        <div class="col-sm-4">
                       <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email">
                    <small id="emailHelp" class="form-text"></small>
                  </div>

                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Contact Number</label>
                            <input class="form-control" placeholder="Enter Contact Number" name="number">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>Occupation</label>
                            <input class="form-control" placeholder="Enter Occupation" name="occupation">
                          </div>
                        </div>
                      </div>
                     <div class="container mt-5">
                       <div class="row g-0">
    <div class="col-sm-6">
      <div class="form-group">
        <label>Are you a 4Ps Beneficiary?</label>
        <div class="form-check">
      <div class="btn-group btn-group-justified" >
            <label class="btn" id="4ps-yes">
              <input type="radio" name="is_4ps" class="hidden" value="1" id="4ps_yes"> Yes
            </label>
            <label class="btn active" id="4ps-no">
              <input type="radio" name="is_4ps" class="hidden" value="0" id="4ps_no"> No
            </label>
          </div>
        </div>
      </div>
      <!-- Hidden 4Ps ID upload field -->
      <div class="form-group" id="4ps-id-upload" style="display:none;">
        <label>Upload 4Ps ID</label>
        <input type="file" class="form-control" name="four_ps_id" accept="image/*">
        <small style="color:red">**Jpeg, jpg only</small>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="form-group">
        <label>Are you a PWD?</label>
        <div class="form-check">
   <div class="btn-group" >
            <label class="btn" id="pwd-yes">
              <input type="radio" name="is_pwd" class="hidden" value="1" id="pwd_yes"> Yes
            </label>
            <label class="btn active" id="pwd-no">
              <input type="radio" name="is_pwd" class="hidden" value="0" id="pwd_no"> No
            </label>
          </div>
        </div>
      </div>
      <!-- Hidden PWD ID upload field -->
      <div class="form-group" id="pwd-id-upload" style="display:none;">
        <label>Upload PWD ID</label>
        <input type="file" class="form-control" name="pwd_id" accept="image/*">
        <small style="color:red">**Jpeg, jpg only</small>
      </div>
    </div>
  </div>

                      <div class="row g-0">
                        <div class="col-12">
                          <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" placeholder="Enter Username" name="username">
                          </div>
                        </div>

                        <div class="col-6">
                          <div class="form-group">
                            <label>Password</label>

                          <input id="password" name="password" type="password" class="form-control"
       placeholder="Password" title="Password must be at least 8 characters long, contain at least 1 uppercase letter, 1 lowercase letter, 1 numeric digit, and 1 special character.">


                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password">
                            </span>
                            <p id="password-error" style="color: red; display: none;">Password must be at least 8 characters long, contain 1 uppercase, 1 lowercase, 1 numeric digit, and 1 special character.</p>
                          </div>
                        </div>

                        <div class="col-6">
                          <div class="form-group">
                            <label>Password Confirmation</label>

                            <input id="password_confirm" name="password_confirm" type="password" class="form-control"
                              placeholder="Password Confirmation">
                            <span toggle="#password_confirm" class="fa fa-fw fa-eye field-icon toggle-password">
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-action mb-3 d-flex justify-content-end gap-3">
                    <input type="hidden" name="register-resident" value="1">

                    <?php if (isAdmin()): ?>
                    <a type="button" href="resident.php" class="btn btn-dark btn-block text-white fw-bold">
                      Back
                    </a>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-success btn-block text-white fw-bold">
                      Register
                    </button>

                    <?php if (!isAuthenticated()): ?>
                    <a href="login.php" class="btn btn-dark btn-block text-white fw-bold">
                      Back to Login
                    </a>
                    <?php endif; ?>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Main Footer -->
        <?php isAdmin() and (include "templates/main-footer.php"); ?>
        <!-- End Main Footer -->
      </div>
    </div>

    <?php include "templates/footer.php"; ?>
 <script>
  document.getElementById('email').addEventListener('input', function() {
    const emailField = this;
    const emailHelp = document.getElementById('emailHelp');
    const email = emailField.value;
    const emailPattern = /^[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com)$/;

    if (emailPattern.test(email)) {
      emailHelp.textContent = "Valid email address.";
      emailHelp.style.color = "green";
    } else {
      emailHelp.textContent = "Only Gmail or Yahoo email addresses are allowed.";
      emailHelp.style.color = "#FF0000";
    }
  });

   // Show or hide the 4Ps ID upload field based on the radio selection
  document.getElementById('4ps_yes').addEventListener('change', function() {
    document.getElementById('4ps-id-upload').style.display = 'block';
  });
  document.getElementById('4ps_no').addEventListener('change', function() {
    document.getElementById('4ps-id-upload').style.display = 'none';
  });

  // Show or hide the PWD ID upload field based on the radio selection
  document.getElementById('pwd_yes').addEventListener('change', function() {
    document.getElementById('pwd-id-upload').style.display = 'block';
  });
  document.getElementById('pwd_no').addEventListener('change', function() {
    document.getElementById('pwd-id-upload').style.display = 'none';
  });
</script>
  </body>

</html>
