<?php
require 'bootstrap/index.php';
$id = $_GET['id'];
$query = "SELECT b.*, r.firstname, r.lastname 
			  FROM tblblotter b
			  LEFT JOIN residents r ON b.complainant  WHERE b.id='$id'";
$result = $conn->query($query);
$resident = $result->fetch_assoc();

$query1 = "SELECT * FROM tblofficials JOIN tblposition ON tblofficials.position=tblposition.id WHERE tblposition.position NOT IN ('SK Chairrman','Secretary','Treasurer')
                AND `status`='Active' ORDER BY `order` ASC";
$result1 = $conn->query($query1);
$officials = array();
while ($row = $result1->fetch_assoc()) {
    $officials[] = $row;
}

$captain = $db
  ->from(["tblofficials" => "officials"])
  ->join(["tblposition" => "positions"], "positions.id", "officials.position")
  ->where("positions.position", "Barangay Captain")
  ->first()
  ->select([
    "name" => "officials.name"
  ])
  ->exec();

$sec = $db
  ->from(["tblofficials" => "officials"])
  ->join(["tblposition" => "positions"], "positions.id", "officials.position")
  ->where("positions.position", "Secretary")
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
    <title>Blotter Report - Barangay Services Management Systemm</title>
      <style>
    @media print {
      * {
        font-size: 12px !important;
      }

      h1, h2, h3, h4, h5, h6 {
        font-size: 12px !important;
      }

      .fw-bold {
        font-weight: bold !important;
      }
        .row-cols-2 > * {
    flex: 0 0 50% !important;
    max-width: 50% !important;
  }
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
                  <h2 class="text-white fw-bold">Generate Report</h2>
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
                      <div class="card-title">Blotter Report</div>
                      <div class="card-tools">
                        <button class="btn btn-info btn-border btn-round btn-sm" onclick="printDiv('printThis')">
                          <i class="fa fa-print"></i>
                          Print Report
                        </button>
                      </div>
                    </div>
                  </div>
                <div class="card-body m-5" id="printThis">
                  <div class="d-flex flex-wrap justify-content-center" style="border-bottom:1px solid red">
                    <div class="text-center">
                      <h3 class="fw-bold mb-0"><i>Republic of the Philippines</i></h3>
                      <h3 class="fw-bold mb-0"><i>Province of <?= ucwords($province) ?></i></h3>
                      <h3 class="fw-bold mb-0"><i><?= ucwords($town) ?></i></h3>
                      <h3 class="fw-bold mb-0"><i><?= ucwords($brgy) ?></i></h3>
                      <p><i>Mobile No. <?= $number ?></i></p>
                    </div>
                  </div>

                  <div class="row mt-1">
                    <div class="col-md-12">
                      <div class="text-center">
                        <h4 class="mt-2 fw-bold">OFFICE OF THE BARANGAY CAPTAIN</h4>
                      </div>
                      <div class="text-center">
                        <h4 class="mt-2 fw-bold mb-5">BLOTTER REPORT</h4>
                      </div>

                      <!-- Blotter details -->
                      <div class="row">
                        <div class="col">
                          <div class="form-group row">
                            <h3 class="mt-1 col-lg-4 text-left">Complainant:</h3>
                            <div class="col-lg-8" style="border-bottom:1px solid black;">
                              <span class="fw-bold" style="font-size:20px;">
                                <?= $resident['firstname'] . '  ' . $resident['lastname'] ?>
                              </span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <h3 class="mt-1 col-lg-4 text-left">Victim:</h3>
                            <div class="col-lg-8" style="border-bottom:1px solid black;">
                              <span class="fw-bold" style="font-size:20px;">
                                <?= ucwords($resident['victim']) ?>
                              </span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <h3 class="mt-1 col-lg-4 text-left">Location:</h3>
                            <div class="col-lg-8" style="border-bottom:1px solid black;">
                              <span class="fw-bold" style="font-size:20px;">
                                <?= ucwords($resident['location']) ?>
                              </span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <h3 class="mt-1 col-lg-4 text-left">Time:</h3>
                            <div class="col-lg-8" style="border-bottom:1px solid black;">
                              <span class="fw-bold" style="font-size:20px;">
                                <?= date('h:i:s A', strtotime($resident['time'])) ?>
                              </span>
                            </div>
                          </div>
                        </div>

                        <div class="col">
                          <div class="form-group row">
                            <h3 class="mt-1 col-lg-4 text-left">Respondent:</h3>
                            <div class="col-lg-8" style="border-bottom:1px solid black;">
                              <span class="fw-bold" style="font-size:20px;">
                                <?= ucwords($resident['respondent']) ?>
                              </span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <h3 class="mt-1 col-lg-4 text-left">Type:</h3>
                            <div class="col-lg-8" style="border-bottom:1px solid black;">
                              <span class="fw-bold" style="font-size:20px;">
                                <?= ucwords($resident['type']) ?>
                              </span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <h3 class="mt-1 col-lg-4 text-left">Date:</h3>
                            <div class="col-lg-8" style="border-bottom:1px solid black;">
                              <span class="fw-bold" style="font-size:20px;">
                                <?= date('F d, Y', strtotime($resident['date'])) ?>
                              </span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <h3 class="mt-1 col-lg-4 text-left">Status:</h3>
                            <div class="col-lg-8" style="border-bottom:1px solid black;">
                              <span class="fw-bold" style="font-size:20px;">
                                <?= ucwords($resident['status']) ?>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Blotter Details -->
                      <div class="row">
                        <div class="col">
                          <div class="form-group row">
                            <h3 class="mt-1 col-lg-4 text-left">Blotter Details:</h3>
                          </div>
                          <div class="col-lg-12">
                            <div class="fw-bold" style="font-size:20px;">
                              <?= ucwords(trim($resident['details'])) ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>     
                  </div>
                  <div class="row mt-5">
                    <div class="col-md-12">
                       <div class="p-3 text-right mr-3">
                          <h2 class="fw-bold mb-0 text-uppercase"><?= ucwords($captain['name']) ?></h2>
                          <p class="mr-3">PUNONG BARANGAY</p>
                        </div>
                    </div>
              <div class="row mt-5">
                <div class="col-md-12 d-flex">
                  <!-- QR Code -->
                  <div class="col-md-3 text-center mb-2">
                    <img src="qr.png" class="img-fluid" width="200" />
                  </div>

                  <!-- Officials List -->
                  <div class="col-md-9">
                    <div class="text-center p-3" style="border:2px dotted red">
                      <h3 class="mt-1 fw-bold mb-3">Sangguniang Barangay Members</h3>
                      <?php if (!empty($officials)) : ?>
                        <div class="container">
                          <div class="row row-cols-2 row-cols-md-4 g-2">
                            <?php foreach ($officials as $official) : ?>
                              <div class="col text-center mb-2">
                                <span class="fw-bold"><?= ucwords($official['name']) ?></span><br>
                                <span><?= ucwords($official['position']) ?></span>
                              </div>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      <?php endif; ?>
                    </div>

                  </div>
                </div>
              </div>

              </div>
            </div>
          </div>
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
