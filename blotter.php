<?php include "bootstrap/index.php"; ?>
<?php


$userId = $_SESSION["id"];
$accountCheck = $conn->query("SELECT user_type FROM users WHERE id = '$userId'");
$accountType = $accountCheck->fetch_assoc()['user_type'] ?? null;

$blotter = [];

if ($accountType === 'user') {
	// Blotter list for users
	$query = "SELECT b.*, r.firstname, r.lastname 
			  FROM tblblotter b
			  JOIN residents r ON b.complainant = r.id
			  WHERE r.account_id = '$userId'";

	// Filtered status counts for the user
	$query1 = "SELECT COUNT(*) AS total FROM tblblotter b
			   JOIN residents r ON b.complainant = r.id
			   WHERE b.status = 'Active' AND r.account_id = '$userId'";
	$query2 = "SELECT COUNT(*) AS total FROM tblblotter b
			   JOIN residents r ON b.complainant = r.id
			   WHERE b.status = 'Scheduled' AND r.account_id = '$userId'";
	$query3 = "SELECT COUNT(*) AS total FROM tblblotter b
			   JOIN residents r ON b.complainant = r.id
			   WHERE b.status = 'Settled' AND r.account_id = '$userId'";
} else {
	// For admin and staff
	$query = "SELECT b.*, r.firstname, r.lastname 
			  FROM tblblotter b
			  LEFT JOIN residents r ON b.complainant = r.id";

	$query1 = "SELECT COUNT(*) AS total FROM tblblotter WHERE status = 'Active'";
	$query2 = "SELECT COUNT(*) AS total FROM tblblotter WHERE status = 'Scheduled'";
	$query3 = "SELECT COUNT(*) AS total FROM tblblotter WHERE status = 'Settled'";
}

// Execute main query
$result = $conn->query($query);
while ($row = $result->fetch_assoc()) {
	$blotter[] = $row;
}

// Status counts
$active = $conn->query($query1)->fetch_assoc()['total'];
$scheduled = $conn->query($query2)->fetch_assoc()['total'];
$settled = $conn->query($query3)->fetch_assoc()['total'];

$resident_details = (function () use ($db) {
    if (isUser()) {
        return $db
            ->from("residents")
            ->join("purok", "purok.id", "residents.purok_id")
            ->join("users", "users.id", "residents.account_id")
            ->where("users.id", $_SESSION["id"])
            ->first()
            ->select([
                "id" => "residents.id",
                "national_id" => "residents.national_id",
                "account_id" => "residents.account_id",
                "firstname" => "residents.firstname",
                "middlename" => "residents.middlename",
                "lastname" => "residents.lastname",
                "alias" => "residents.alias",
                "birthplace" => "residents.birthplace",
                "birthdate" => "residents.birthdate",
                "age" => "residents.age",
                "civilstatus" => "residents.civilstatus",
                "gender" => "residents.gender",
                "voterstatus" => "residents.voterstatus",
                "identified_as" => "residents.identified_as",
                "phone" => "residents.phone",
                "email" => "residents.email",
                "occupation" => "residents.occupation",
                "address" => "residents.address",
                "is_4ps" => "residents.is_4ps",
                "is_senior" => "residents.is_senior",
                "is_pwd" => "residents.is_pwd",
                "resident_type" => "residents.resident_type",
                "remarks" => "residents.remarks",
                "username" => "users.username",
                "user_type" => "users.user_type",
                "avatar" => "users.avatar",
                "purok_id" => "purok.id",
                "purok_name" => "purok.name",
                "purok_details" => "purok.details",
            ])
            ->exec();
    }

    if (isAdmin() || isStaff()) {
        return $db
            ->from("residents")
            ->select([
                "id" => "residents.id",
                "fullname" => "CONCAT(residents.firstname, ' ', residents.middlename, ' ', residents.lastname)"
            ])
            ->exec();
    }

    return [];
})();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include "templates/header.php"; ?>
	<title>Blotter/Incident Complaint - Barangay Services Management System</title>
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
								<h2 class="text-white fw-bold">Blotter/Incident Complaint</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner">
					<?php include "templates/alert.php"; ?>

					<div class="row mt--2">
						<div class="col-md-9">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">All Resident</div>
										<?php if (isset($_SESSION["username"])): ?>
											<div class="card-tools">
												<a href="#add" data-toggle="modal" class="btn btn-info btn-border btn-round btn-sm">
													<i class="fa fa-plus"></i>
													Blotter/Incident
												</a>
											</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="blottertable" class="display table table-striped">
											<thead>
												<tr>
													<th scope="col">Complainant</th>
													<th scope="col">Respondent</th>
													<th scope="col">Victim(s)</th>
													<th scope="col">Blotter/Incident</th>
													<th scope="col">Details</th>
													<th scope="col">Feedback</th>
															<th scope="col">Status</th>
								
														<th scope="col">Action</th>
							
												</tr>
											</thead>
											<tbody>
												<?php if (!empty($blotter)): ?>
													<?php foreach ($blotter as $row): ?>
														<tr>
															<td><?= $row['firstname'] . '  ' . $row['lastname'] ?></td>
															<td><?= ucwords($row["respondent"]) ?></td>
															<td><?= ucwords($row["victim"]) ?></td>
															<td><?= ucwords($row["type"]) ?></td>
															<td><?= ucwords($row["details"]) ?></td>
															<td><?= ucwords($row["feedback"]) ?></td>
															<td>
																<?php if ($row["status"] == "Scheduled"): ?>
																	<span class="badge badge-warning">Scheduled</span>
																<?php elseif ($row["status"] == "Active"): ?>
																	<span class="badge badge-danger">Active</span>
																<?php else: ?>
																	<span class="badge badge-success">Settled</span>
																<?php endif; ?>
															</td>
															
															<?php if (isset($_SESSION["username"])): ?>
																		<?php if (isAdmin() || isStaff() || isUser()): ?>
																<td>
																	<a
																		type="button"
																		href="#edit"
																		data-toggle="modal"
																		class="btn btn-link btn-primary"
																		title="Edit Blotter"
																		onclick="editBlotter1(this)"
																		data-id="<?= $row["id"] ?>"
																		data-complainant="<?= $row["firstname"] . ' ' . $row["lastname"] ?>"
																		data-respondent="<?= $row["respondent"] ?>"
																		data-victim="<?= $row["victim"] ?>"
																		data-type="<?= $row["type"] ?>"
																		data-l="<?= $row["location"] ?>"
																		data-date="<?= $row["date"] ?>"
																		data-time="<?= $row["time"] ?>"
																		data-details="<?= $row["details"] ?>"
																		data-status="<?= $row["status"] ?>"
																	>
																		<?php if (isset($_SESSION["username"])): ?>
																			<i class="fa fa-edit"></i>
																		<?php else: ?>
																			<i class="fa fa-eye"></i>
																		<?php endif; ?>
																	</a>
																	<!-- <a
																		type="button"
																		data-toggle="tooltip"
																		href="generate_blotter_report.php?id=<?= $row["id"] ?>"
																		class="btn btn-link btn-primary"
																		data-original-title="Generate Report"
																	>
																		<i class="fas fa-file-alt"></i>
																	</a> -->
															
																		<a
																			type="button"
																			data-toggle="tooltip"
																			href="model/remove_blotter.php?id=<?= $row["id"] ?>"
																			onclick="confirm('Are you sure you want to delete this blotter?');"
																			class="btn btn-link btn-danger"
																			data-original-title="Remove"
																		>
																			<i class="fa fa-times"></i>
																		</a>
																	<?php endif; ?>
																</td>
															<?php endif; ?>
														</tr>
														<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																	<div class="modal-dialog modal-lg" role="document">
																		<div class="modal-content">
																			<div class="modal-header">
																				<h5 class="modal-title" id="exampleModalLabel">Edit Blotter</h5>
																				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																					<span aria-hidden="true">&times;</span>
																				</button>
																			</div>
																			<div class="modal-body">
																				<form id="blotterFormEdit" method="POST" action="model/edit_blotter.php">
																					<div class="row">
																						<div class="col-md-6">
																						<div class="form-group">
															<label>Complainant</label>

															<input type="text" class="form-control" id="complainant" name="complainant" readonly>


																	<input type="hidden" name="complainant_id" id="complainant_id" value="<?= $row['id'] ?>">
														

													</div>

									</div>
									<div class="col-md-6">
									<div class="form-group">
										<label>Respondent</label>
										<input type="text" class="form-control" placeholder="Enter Respondent Name" id="respondent" name="respondent"
													<?php if (role(["user"])): ?>
															readonly
													<?php endif; ?>>
								</div>

									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Victim(s)</label>
											<input type="text" class="form-control" placeholder="Enter Victim(s) Name" id="victim" name="victim" required>
										</div>
									</div>
									 <div class="col-md-6">
											<div class="form-group">
												<label>Type</label>
												<select class="form-control" name="type" id="typeSelectEdit" onchange="toggleOtherInputEdit()">
														<option disabled selected>Select Blotter Type</option>
														<option value="Misunderstanding">Misunderstanding</option>
														<option value="Incident">Incident</option>
														<option value="Concern in surroundings">Concern in surroundings</option>
														<option value="Others">Others</option>
												</select>
										</div>
										<div class="form-group" id="otherInputGroupEdit" style="display: none;">
												<label>Please specify:</label>
												<input type="text" class="form-control" id="otherInputEdit" name="otherTypeEdit" placeholder="Enter your type">
										</div>
                  </div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Location</label>
											<input type="text" class="form-control" placeholder="Enter Location" id="location" name="location" required>
										</div>
									</div>
									<div class="col-md-6">
									<div class="form-group">
    <label>Date</label>
    <input type="date" class="form-control" name="date" id="date"
           <?php if (isAdmin() || isStaff()): ?>
               placeholder="Enter Date"
           <?php else: ?>
               readonly
           <?php endif; ?> required>
</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									<div class="form-group">
    <label>Time</label>
    <input type="time" class="form-control" name="time" id="time"
           <?php if (isAdmin() || isStaff()): ?>
               placeholder="Enter Time"
           <?php else: ?>
               readonly
           <?php endif; ?> required>
</div>
									</div>
												 <?php if (isAdmin() || isStaff()): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
                <option disabled selected>Select Blotter Status</option>
                <option value="Active">Active</option>
                <option value="Settled">Settled</option>
                <option value="Scheduled">Scheduled</option>
            </select>
        </div>
    </div>
<?php else: ?>
    
            <input type="hidden" class="form-control" name="status" value="Active">
        
<?php endif; ?>
								</div>
								<div class="form-group">
									<label>Details</label>
									<textarea class="form-control" placeholder="Enter Blotter or Incident here..." id="details" name="details" required></textarea>
								</div>

					<div class="form-group">
    <label>Feedback</label>
    <textarea class="form-control" placeholder="Enter Feedback here..." name="feedback" id="feedback"
              <?php if (role(["user"])): ?>
                  readonly
              <?php endif; ?>></textarea>
</div>
 <div class="form-group">
                        <button type="button" class="btn btn-info" id="generateReportBtn">
                            <i class="fas fa-file-alt"></i> Generate Report
                        </button>
                    </div>

						</div>
						<div class="modal-footer">
							<input type="hidden" id="blotter_id" name="id">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<?php if (isset($_SESSION["username"])): ?>
								<button type="submit" class="btn btn-primary">Update</button>
							<?php endif; ?>
						</div>
						</form>
					</div>
				</div>
			</div>
													<?php endforeach; ?>
												<?php endif; ?>
												</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card card-stats card-danger card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="flaticon-users"></i>
											</div>
										</div>
										<div class="col-6 col-stats">
										</div>
										<div class="col-3 col-stats">
											<div class="numbers">
												<p class="card-category">Active</p>
												<h4 class="card-title"><?= number_format($active) ?></h4>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<a href="javascript:void(0)" id="activeCase" class="card-link text-light">Active Case </a>
								</div>
							</div>
							<div class="card card-stats card-success card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="flaticon-users"></i>
											</div>
										</div>
										<div class="col-6 col-stats">
										</div>
										<div class="col-3 col-stats">
											<div class="numbers">
												<p class="card-category">Settled</p>
												<h4 class="card-title"><?= number_format($settled) ?></h4>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<a href="javascript:void(0)" id="settledCase" class="card-link text-light">Settled Case </a>
								</div>
							</div>
							<div class="card card-stats card-warning card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-3">
											<div class="icon-big text-center">
												<i class="flaticon-users"></i>
											</div>
										</div>
										<div class="col-6 col-stats">
										</div>
										<div class="col-3 col-stats">
											<div class="numbers">
												<p class="card-category">Scheduled</p>
												<h4 class="card-title"><?= number_format($scheduled) ?></h4>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<a href="javascript:void(0)" id="scheduledCase" class="card-link text-light">Scheduled Case </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Manage Blotter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="blotterForm" method="POST" action="model/save_blotter.php">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
    <label>Complainant</label>
    <?php if (isUser()): ?>
        <input type="text" class="form-control" 
               value="<?= $resident_details['firstname'] . '  ' . $resident_details['lastname'] ?>" 
               readonly>
        <input type="hidden" name="complainant_id" value="<?= $resident_details['id'] ?>">
    <?php elseif (isAdmin() || isStaff()): ?>
        <select class="form-control" name="complainant_id" required>
            <option disabled selected>Select Complainant</option>
            <?php foreach ($resident_details as $resident): ?>
                <option value="<?= $resident['id'] ?>"><?= $resident['fullname'] ?></option>
            <?php endforeach; ?>
        </select>
    <?php endif; ?>
</div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Respondent</label>
                                <input type="text" class="form-control" placeholder="Enter Respondent Name" name="respondent"
																      <?php if (role(["user"])): ?>
                                            readonly
																				     <?php endif; ?>
																
																>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Victim/Affected Resident</label>
                                <input type="text" class="form-control" placeholder="Enter Victim(s) Name" name="victim" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
															<label>Type</label>
															<select class="form-control" name="type" id="typeSelect" onchange="toggleOtherInput()">
																	<option disabled selected>Select Blotter Type</option>
																	<option value="Misunderstanding">Misunderstanding</option>
																	<option value="Incident">Incident</option>
																	<option value="Concern in surroundings">Concern in surroundings</option>
																	<option value="Others">Others</option>
															</select>
													</div>
													<div class="form-group" id="otherInputGroup" style="display: none;">
															<label>Please specify:</label>
															<input type="text" class="form-control" id="otherInput" name="otherType" placeholder="Enter your type">
													</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Location</label>
                                <input type="text" class="form-control" placeholder="Enter Location" name="location" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" name="date" 
                                <?php if (isAdmin() || isStaff()): ?>
                                    placeholder="Enter Date"
                                <?php else: ?>
                                    value="<?= date("Y-m-d") ?>" readonly
                                <?php endif; ?> required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Time</label>
                                <input type="time" class="form-control" name="time" 
                                <?php if (isAdmin() || isStaff()): ?>
                                    placeholder="Enter Time"
                                <?php else: ?>
                                    value="<?= date("H:i") ?>" readonly
                                <?php endif; ?> required>
                            </div>
                        </div>
												 <?php if (isAdmin() || isStaff()): ?>
    <div class="col-md-6">
        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status">
                <option disabled selected>Select Blotter Status</option>
                <option value="Active">Active</option>
                <option value="Settled">Settled</option>
                <option value="Scheduled">Scheduled</option>
            </select>
        </div>
    </div>
<?php else: ?>
    
            <input type="hidden" class="form-control" name="status" value="Active">
        
<?php endif; ?>

                    </div>
                    <div class="form-group">
                        <label>Details</label>
                        <textarea class="form-control" placeholder="Enter Blotter or Incident here..." name="details" required></textarea>
                    </div>

										   <div class="form-group">
                        <label>Feddback</label>
                        <textarea class="form-control" placeholder="Enter Feedback here..." name="feedback"       <?php if (role(["user"])): ?>
                                            readonly
																				     <?php endif; ?>></textarea>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>


			<!-- Modal -->

			<!-- Main Footer -->
			<?php include "templates/main-footer.php"; ?>
			<!-- End Main Footer -->

		</div>

	</div>
	<?php include "templates/footer.php"; ?>
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>
	<script>
		$(document).ready(function() {
			var oTable = $('#blottertable').DataTable({
				"order": [
					[4, "asc"]
				]
			});

			$("#activeCase").click(function() {
				var textSelected = 'Active';
				oTable.columns(6).search(textSelected).draw();
			});
			$("#settledCase").click(function() {
				var textSelected = 'Settled';
				oTable.columns(6).search(textSelected).draw();
			});
			$("#scheduledCase").click(function() {
				var textSelected = 'Scheduled';
				oTable.columns(6).search(textSelected).draw();
			});
		});
	</script>

<script>
  document.getElementById('generateReportBtn').addEventListener('click', function () {
    const blotterId = document.getElementById('blotter_id').value;
    if (blotterId) {
        window.location.href = `generate_blotter_report.php?id=${blotterId}`;
    } else {
        alert('Blotter ID is missing!');
    }
});

    function toggleOtherInput() {
        const typeSelect = document.getElementById('typeSelect');
        const otherInputGroup = document.getElementById('otherInputGroup');
        const otherInput = document.getElementById('otherInput');

        if (typeSelect.value === 'Others') {
            otherInputGroup.style.display = 'block';
            otherInput.setAttribute('required', 'required'); // Ensure it's required if "Others" is selected
        } else {
            otherInputGroup.style.display = 'none';
            otherInput.removeAttribute('required'); // Remove required if "Others" isn't selected
        }
    }

    // Handle form submission logic
    document.getElementById('blotterForm').addEventListener('submit', function (e) {
        const typeSelect = document.getElementById('typeSelect');
        const otherInput = document.getElementById('otherInput');

        // If "Others" is selected, replace the "type" field value with the custom input
        if (typeSelect.value === 'Others') {
            // Create a hidden input with the custom value
            const otherValueInput = document.createElement('input');
            otherValueInput.type = 'hidden';
            otherValueInput.name = 'type'; // Override the "type" field value
            otherValueInput.value = otherInput.value;
            this.appendChild(otherValueInput);

            // Remove the original "type" select to avoid confusion
            typeSelect.removeAttribute('name');
        }
    });


		//Edit
				// Toggle the visibility of the "Other" input field
				function toggleOtherInputEdit() {
        const typeSelect = document.getElementById('typeSelectEdit');
        const otherInputGroup = document.getElementById('otherInputGroupEdit');
        const otherInput = document.getElementById('otherInputEdit');

        if (typeSelect.value === 'Others') {
            otherInputGroup.style.display = 'block';
            otherInput.setAttribute('required', 'required'); // Ensure it's required if "Others" is selected
        } else {
            otherInputGroup.style.display = 'none';
            otherInput.removeAttribute('required'); // Remove required if "Others" isn't selected
        }
    }

				// Handle form submission logic
				document.getElementById('blotterFormEdit').addEventListener('submit', function (e) {
        const typeSelect = document.getElementById('typeSelectEdit');
        const otherInput = document.getElementById('otherInputEdit');

        // If "Others" is selected, replace the "type" field value with the custom input
        if (typeSelect.value === 'Others') {
            // Create a hidden input with the custom value
            const otherValueInput = document.createElement('input');
            otherValueInput.type = 'hidden';
            otherValueInput.name = 'type'; // Override the "type" field value
            otherValueInput.value = otherInput.value;
            this.appendChild(otherValueInput);

            // Remove the original "type" select to avoid confusion
            typeSelect.removeAttribute('name');
        }
    });
</script>
</body>

</html>