<?php include 'bootstrap/index.php' ?>
<?php


$captain = $db
  ->from(["tblofficials" => "officials"])
  ->join(["tblposition" => "positions"], "positions.id", "officials.position")
  ->where("positions.id", 1)
  ->first()
  ->select([
    "name" => "officials.name"
  ])
  ->exec();

$sec = $db
  ->from(["tblofficials" => "officials"])
  ->join(["tblposition" => "positions"], "positions.id", "officials.position")
  ->where("positions.id", 4)
  ->first()
  ->select([
    "name" => "officials.name"
  ])
  ->exec();

  if (isset($_GET['request_id'])) {
    $id = $_GET['id'];
    $job = $db
      ->from(["residents" => "resident"])
      ->where('resident.id', $id)
      ->first()
      ->exec();

  $request = $db
    ->from(["certificate_requests" => "cr"])
    ->where("cr.id", $_GET['request_id'])
    ->first()
    ->exec();


}

if(isset($_GET['cr_id'])){
  $id = $_GET['cr_id'];
  // Prepare the query with a named placeholder
  $query = "SELECT 
      cr.id AS id, 
      r.id AS resident_id, 
      r.firstname, ' ', r.middlename, ' ', r.lastname, r.age,
      cr.*
  FROM certificate_requests AS cr
  JOIN residents AS r ON cr.resident_id = r.id
  WHERE cr.id = $id";
  // Prepare the statement
  $stmt = $conn->prepare($query);
  // Execute the query
  $stmt->execute();
  // Fetch the result
  $job = $stmt->get_result()->fetch_assoc();
  $residence= json_decode($job['data'], true);
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include 'templates/header.php' ?>
    <title>Certificate of Guardianship - Barangay Services Management System</title>
    <style>
    @page {
      size: auto;
      /* auto is the initial value */

      /* this affects the margin in the printer settings */
      margin: 20mm 20mm 20mm 20mm;
    }

    </style>
  </head>

  <body>
    <?php include 'templates/loading_screen.php' ?>
    <div class="wrapper">
      <!-- Main Header -->
      <?php include 'templates/main-header.php' ?>
      <!-- End Main Header -->

      <!-- Sidebar -->
      <?php include 'templates/sidebar.php' ?>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="content">
          <div class="panel-header bg-primary-gradient">
            <div class="page-inner">
              <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                  <h2 class="text-white fw-bold">Generate Certificate</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="page-inner">
            <div class="row mt--2">
              <div class="col-md-12">

                <?php include "templates/alert.php"; ?>

                <div class="card">
                  <div class="card-header">
                    <div class="card-head-row">
                      <div class="card-title">Certificate of Guardianship</div>
                      <div class="card-tools">
                        <button class="btn btn-info btn-border btn-round btn-sm" onclick="printDiv('printThis')">
                          <i class="fa fa-print"></i>
                          Print Certificate
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="card-body m-5" id="printThis">
                    <div class="d-flex flex-wrap justify-content-around" style="border-bottom:1px solid red">
                      <div class="text-center">
                        <img src="assets/uploads/<?= $city_logo ?>" class="img-fluid" width="100">
                      </div>
                      <div class="text-center">
                        <h3 class="fw-bold mb-0"><i>Republic of the Philippines</i></h3>
                        <h3 class="fw-bold mb-0"><i>Province of <?= ucwords($province) ?></i></h3>
                        <h3 class="fw-bold mb-0"><i><?= ucwords($town) ?></i></h3>
                        <h3 class="fw-bold mb-0"><i><?= ucwords($brgy) ?></i></i></h3>
                        <p><i>Mobile No. <?= $number ?></i></p>
                      </div>
                      <div class="text-center">
                        <img src="assets/uploads/<?= $brgy_logo ?>" class="img-fluid" width="100">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-12">
                        <div class="text-center mt-5">
                          <h1 class="mt-4 fw-bold"><u>OFFICE OF THE BARANGAY CAPTAIN</u></h1>
                        </div>
                        <div class="text-center">
                          <h1 class="mt-4 fw-bold mb-5" style="font-size:20;color:black">OATH OF UNDERTAKING <br>
                                      Republic Act 11261  First Time Jobseekers Assistance Act

                          </h1>
                        </div>
                        <h3 class="mt-5 fw-bold">TO WHOM IT MAY CONCERN:</h3>
                          <h3 class="mt-3" style="text-indent: 40px;">I <?= ucwords($job['firstname'].' '.$job['middlename'].'. '.$job['lastname']) ?>  <?= ucwords($job['age']) ?> years of age, resident of Barangay Carino, Paniqui Tarlac, availing the benefits of Republic Act 11261, otherwise known as the First Time Jobseekers Act of 2019, do hereby declare, agree and undertake to abide and be bound by the following:
                        </h3>
                        <br>
                        
                        <h3 style="text-indent: 40px;">
                          1. That this is the first time that I will actively look for a job, and therefore requesting that a
                              Barangay Certification be issued in my favor to avail the benefits of the law;
                        </h3>

                        <h3 style="text-indent: 40px;">
                          2. That I am aware that the benefit and privilege/s under the said law shall be valid only for
                              one (1) year from the date that the Barangay Certification is issued
                        </h3>

                        <h3 style="text-indent: 40px;">
                          3. That I can avail the benefits of the law only once;
                        </h3>

                        <h3 style="text-indent: 40px;">
                          4. That I understand that my personal information shall be included in the Roster/List of
                              First Time Jobseekers and will not be used for any unlawful purpose;
                        </h3>

                        <h3 style="text-indent: 40px;">
                          5. That I will inform and/or report to the Barangay personally, through text or other means,
                              or through my family/relatives once I get employed;
                        </h3>

                        <h3 style="text-indent: 40px;">
                          6. That I am not a beneficiary of the JobStart Program under R.A. No. 10869 and other
                              laws that give similar exemptions for the documents or transactions exempted under R.A No. 11261;
                        </h3>
                            
                        <h3 style="text-indent: 40px;">
                          7. That if issued the requested Certification, I will not use the same in any fraud, neither
                              falsify nor help and/or assist in the fabrication of the said certification;
                        </h3>

                         <h3 style="text-indent: 40px;">
                          8. That this undertaking is made solely for the purpose of obtaining a Barangay Certification consistent with the objective of R.A. No. 11261 and not for any other purpose; and
                        </h3>
                        <h3 style="text-indent: 40px;">
                          9. That I consent to the use of my personal information pursuant to the Data Privacy Act
                              and other applicable laws, rules, and regulations.
                        </h3>


                      </div>
                      <div class="col-md-12">   
                        <div class="p-3 text-right mr-5" style="margin-top:70px">
                          <h1 class="fw-bold mb-0 text-uppercase"><?= ucwords($captain['name']) ?></h1>
                          <p class="mr-5">PUNONG BARANGAY</p>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="p-3 text-right mr-5" style="margin-top:20px">
                          <h1 class="fw-bold mb-0 text-uppercase"><?= ucwords($sec['name']) ?></h1>
                          <p class="mr-5">Secretary</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal -->
       <div class="modal fade" id="pment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="model/save_pment.php">
                  <div class="form-group">
                    <label>Amount of Payment</label>
                 <input type="number" class="form-control" name="amount" placeholder="Enter amount to pay" value='25' required>
                  </div>

                  <div class="form-group">
                    <label>Date Issued</label>
                    <input type="date" class="form-control" name="date" value="<?= date('Y-m-d') ?>">
                  </div>

              

                <div class="form-group">
                    <label>Feedback</label>
                    <textarea class="form-control" placeholder="Enter Feedback"
                      name="details">Enter Feedback</textarea>
                  </div>
              </div>
              <div class="modal-footer">
                <input type="hidden" name="resident_id" value="<?= htmlspecialchars($_GET['id'] ?? $_GET['cr_id'] ?? '') ?>">
                <input type="hidden" name="create-payment" value="<?= htmlspecialchars($_GET['id'] ?? $_GET['cr_id'] ?? '') ?>">
                <input type="hidden" name="request_id" value="<?= getBody('request_id', $_GET) ?>">
                <input type="hidden" name="certificate_id" value="4">
                <button type="button" class="btn btn-secondary" onclick="goBack()">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
              </form>
            </div>
          </div>
        </div
        <!-- Main Footer -->
        <?php include 'templates/main-footer.php' ?>
        <!-- End Main Footer -->
      </div>

    </div>
    <?php include 'templates/footer.php' ?>
    <script>
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());

    if (!params['closeModal']) {
      setTimeout(() => {
        $('#pment').modal('show');
      }, 1000);
    }

    function printDiv(divName) {
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;

      window.print();

      document.body.innerHTML = originalContents;
    }
    </script>
  </body>

</html>
