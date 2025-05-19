<?php include 'bootstrap/index.php' ?>
<?php
$id = $_GET['id'];

$resident = $db
  ->from('residents')
  ->where('id', $id)
  ->first()
  ->exec();

$captain = $db
  ->from(["tblofficials" => "officials"])
  ->join(["tblposition" => "positions"], "positions.id", "officials.position")
  ->where("positions.id", 4)
  ->first()
  ->select([
    "name" => "officials.name"
  ])
  ->exec();


$sec = $db
  ->from(["tblofficials" => "officials"])
  ->join(["tblposition" => "positions"], "positions.id", "officials.position")
  ->where("positions.id", 15)
  ->first()
  ->select([
    "name" => "officials.name"
  ])
  ->exec();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include 'templates/header.php' ?>
    <title>Certificate of Indigency - Barangay Services Management System</title>
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
                      <div class="card-title">Certificate of Indigency</div>
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
                          <h1 class="mt-4 fw-bold mb-5" style="font-size:28px;color:black">CERTIFICATE OF INDIGENCY
                          </h1>
                        </div>
                        <h3 class="mt-5 fw-bold">TO WHOM IT MAY CONCERN:</h3>
                          <h4 class="mt-3" style="text-indent: 40px;">This is to certify that the person whose name and other information appear below has passed the record verification being one of the indigent families with low-income in our community, to wit.
                        </h4>
                           <br>
<<<<<<< HEAD
                        <h3 class="mt-3">Name: <span class="fw-bold"
                            style="font-size:20px"><?= ucwords($resident['firstname'] . ' ' . $resident['middlename'] . ' ' . $resident['lastname']) ?></span></h3>
                        <h3 class="mt-3 ">Barangay: <span class="fw-bold"
                            style="font-size:20px"><?= ucwords($brgy) ?></span></h3>
=======
                        <h1 class="mt-3">Name: <span class="fw-bold"
                            style="font-size:20px"><?= ucwords($resident['firstname'] . ' ' . $resident['middlename'] . ' ' . $resident['lastname']) ?></span></h1>
                        <h1 class="mt-3 ">Barangay: <span class="fw-bold"
                            style="font-size:20px"><?= ucwords($brgy) ?></span></h1>
>>>>>>> 4bea30e1c3ccfb56c27612a76902532a25ee193c




          
<<<<<<< HEAD
                       <h4 class="mt-3" style="text-indent: 40px;">This certification/clearance is hereby issued to the above-named person for whatever legal purpose it may serve him or her best.</h4>
<h4 class="mt-5">Issued this day <span  style="font-size:20px"><?= date('d') ?></span> of <span style="font-size:20px"><?= date('F') ?></span>, 2024 <br>

Barangay <span style="font-size:20px"><?= ucwords($brgy) ?></span> <br>
Municipality of <span style="font-size:20px"><?= ucwords($town) ?></span>, Philippines.</h4>
=======
                       <h2 class="mt-3" style="text-indent: 40px;">This certification/clearance is hereby issued to the above-named person for whatever legal purpose it may serve him or her best.</h2>
<h2 class="mt-5">Issued this day <span  style="font-size:20px"><?= date('d') ?></span> of <span style="font-size:20px"><?= date('F') ?></span>, 2024 <br>

Barangay <span style="font-size:20px"><?= ucwords($brgy) ?></span> <br>
Municipality of <span style="font-size:20px"><?= ucwords($town) ?></span>, Philippines.</h2>
>>>>>>> 4bea30e1c3ccfb56c27612a76902532a25ee193c



                      </div>
                      <div class="col-md-12">
<<<<<<< HEAD
                        <div class="p-3 text-right mr-5" style="margin-top:50px">
=======
                        <div class="p-3 text-right mr-5" style="margin-top:200px">
>>>>>>> 4bea30e1c3ccfb56c27612a76902532a25ee193c
                          <h1 class="fw-bold mb-0 text-uppercase"><?= ucwords($captain['name']) ?></h1>
                          <p class="mr-5">PUNONG BARANGAY</p>
                          <small>**NOT VALID without the official Dry Seal</small>
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
                <input type="hidden" name="resident_id" value="<?= $_GET['id'] ?>">
                <input type="hidden" name="create-payment" value="<?= $_GET['id'] ?>">
                <input type="hidden" name="request_id" value="<?= getBody('request_id', $_GET) ?>">
                <input type="hidden" name="certificate_id" value="4">
                <button type="button" class="btn btn-secondary" onclick="goBack()">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
              </form>
            </div>
          </div>
        </div>
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
