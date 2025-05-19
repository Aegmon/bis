<?php 
require_once "./bootstrap/index.php";

// Fetch staff logs
$admin_logs = $db
    ->from("admin_logs")
    ->orderBy("date_created", "desc")
    ->select([

      "logs" => "admin_logs.logs",
      "date_created" => "admin_logs.date_created",
  ])
    ->exec();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "templates/header.php"; ?>
    <title>Admin Logs - Barangay Services Management System</title>
</head>

<body>
    <?php include "templates/loading_screen.php"; ?>
    <div class="wrapper">
        <!-- Main Header -->
        <?php include "templates/main-header.php"; ?>
        <!-- End Main Header -->

        <!-- Sidebar -->
        <?php include "templates/sidebar.php"; ?>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white fw-bold">Staff Logs</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner">
                    <div class="row mt--2">
                        <div class="col-md-12">

                            <?php if (isset($_SESSION["message"])): ?>
                                <div class="alert alert-<?php echo $_SESSION["status"]; ?> <?= $_SESSION["status"] == "danger"
                                    ? "bg-danger text-light"
                                    : null ?>" role="alert">
                                    <?php echo $_SESSION["message"]; ?>
                                </div>
                                <?php unset($_SESSION["message"]); ?>
                            <?php endif; ?>

                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">Staff Logs Management</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="usertable" class="display table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Logs</th>
                              
                                                    <th scope="col"> Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($admin_logs)): ?>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($admin_logs as $row): ?>
                                                        <tr>
                                                            <td><?= $no ?></td>
                                                        
                                                            <td><?= $row["logs"] ?></td>
                                                            <td><?= $row["date_created"] ?></td>
                                                        </tr>
                                                    <?php $no++; endforeach; ?>
                                                <?php else: ?>
                                                    <tr>
                                                        <td colspan="4" class="text-center">No Available Data</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                <th scope="col">No.</th>
                                                    <th scope="col">Logs</th>
                              
                                                    <th scope="col"> Time</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Footer -->
            <?php include "templates/main-footer.php"; ?>
            <!-- End Main Footer -->

        </div>

    </div>
    <?php include "templates/footer.php"; ?>
    <script>
        $(document).ready(function() {
            $('#usertable').DataTable({
                order: []
            });
        });
    </script>
</body>

</html>
        