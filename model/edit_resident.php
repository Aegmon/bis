<?php
include '../server/server.php';

if (!isset($_SESSION['username'])) {
	if (isset($_SERVER["HTTP_REFERER"])) {
		header("Location: " . $_SERVER["HTTP_REFERER"]);
	}
}

$id 	= $conn->real_escape_string($_POST['id']);
$national_id 		= $conn->real_escape_string($_POST['national']);
$fname 		= $conn->real_escape_string($_POST['fname']);
$mname 		= $conn->real_escape_string($_POST['mname']);
$lname 		= $conn->real_escape_string($_POST['lname']);
$alias 		= $conn->real_escape_string($_POST['alias']);
$bplace 	= $conn->real_escape_string($_POST['bplace']);
$bdate 		= $conn->real_escape_string($_POST['bdate']);
$age 		= $conn->real_escape_string($_POST['age']);
$cstatus 	= $conn->real_escape_string($_POST['cstatus']);
$gender 	= $conn->real_escape_string($_POST['gender']);
$purok 		= $conn->real_escape_string($_POST['purok']);
$vstatus 	= $conn->real_escape_string($_POST['vstatus']);
$indetity 	= $conn->real_escape_string($_POST['indetity']);
$email 	    = $conn->real_escape_string($_POST['email']);
$number 	= $conn->real_escape_string($_POST['number']);
$address 	= $conn->real_escape_string($_POST['address']);
$occu 	= $conn->real_escape_string($_POST['occupation']);
$citi 	= $conn->real_escape_string($_POST['citizenship']);
$deceased 	= $conn->real_escape_string($_POST['deceased']);
$remarks 	= $conn->real_escape_string($_POST['remarks']);
$profile 	= $conn->real_escape_string($_POST['profileimg']); // base 64 image
$profile2 	= $_FILES['img']['name'];

// change profile2 name
$newName = date('dmYHis') . str_replace(" ", "", $profile2);

// image file directory
$target = "../assets/uploads/resident_profile/" . basename($newName);
$check = "SELECT id FROM residents WHERE national_id='$national_id'";
$nat = $conn->query($check)->fetch_assoc();
if ($nat['id'] == $id || count($nat) <= 0) {
	if (!empty($id)) {

		if (empty($bdate) && empty($age)) {

			$query = "UPDATE residents SET national_id='$national_id',citizenship='$citi',`picture`='$profile', `firstname`='$fname', `middlename`='$mname', `lastname`='$lname', `alias`='$alias', `birthplace`='$bplace',`civilstatus`='$cstatus', `gender`='$gender', `purok`='$purok', `voterstatus`='$vstatus', `identified_as`='$indetity', `phone`='$number', `email`='$email',`occupation`='$occu', `address`='$address',
						`resident_type`='$deceased', `remarks`='$remarks'
						WHERE id=$id;";

			if ($conn->query($query) === true) {

				$_SESSION['message'] = 'Resident Information has been updated!';
				$_SESSION['status'] = 'success';
				header("Location: ../resident.php");
			}
		} else if (!empty($profile) && !empty($profile2)) {

			$query = "UPDATE residents SET national_id='$national_id',citizenship='$citi',`picture`='$profile', `firstname`='$fname', `middlename`='$mname', `lastname`='$lname', `alias`='$alias', `birthplace`='$bplace', `birthdate`='$bdate',
						age=$age, `civilstatus`='$cstatus', `gender`='$gender', `purok`='$purok', `voterstatus`='$vstatus', `identified_as`='$indetity', `phone`='$number', `email`='$email',`occupation`='$occu', `address`='$address',
						`resident_type`='$deceased', `remarks`='$remarks'
						WHERE id=$id;";

			if ($conn->query($query) === true) {

				$_SESSION['message'] = 'Resident Information has been updated!';
				$_SESSION['status'] = 'success';
			}
		} else if (!empty($profile) && empty($profile2)) {

			$query = "UPDATE residents SET national_id='$national_id',citizenship='$citi',`picture`='$profile', `firstname`='$fname', `middlename`='$mname', `lastname`='$lname', `alias`='$alias', `birthplace`='$bplace', `birthdate`='$bdate',
						age=$age, `civilstatus`='$cstatus', `gender`='$gender', `purok`='$purok', `voterstatus`='$vstatus', `identified_as`='$indetity', `phone`='$number', `email`='$email',`occupation`='$occu', `address`='$address',
						`resident_type`='$deceased', `remarks`='$remarks'
						WHERE id=$id;";

			if ($conn->query($query) === true) {

				$_SESSION['message'] = 'Resident Information has been updated!';
				$_SESSION['status'] = 'success';
			}
		} else if (empty($profile) && !empty($profile2)) {

			$query = "UPDATE residents SET national_id='$national_id',citizenship='$citi',`picture`='$newName', `firstname`='$fname', `middlename`='$mname', `lastname`='$lname', `alias`='$alias', `birthplace`='$bplace', `birthdate`='$bdate',
							age=$age, `civilstatus`='$cstatus', `gender`='$gender', `purok`='$purok', `voterstatus`='$vstatus', `identified_as`='$indetity', `phone`='$number', `email`='$email',`occupation`='$occu', `address`='$address',
							`resident_type`='$deceased', `remarks`='$remarks'
							WHERE id=$id;";

			if ($conn->query($query) === true) {

				$_SESSION['message'] = 'Resident Information has been updated!!';
				$_SESSION['status'] = 'success';

				if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {

					$_SESSION['message'] = 'Resident Information has been updated!!';
					$_SESSION['status'] = 'success';
				}
			}
		} else {
			$query = "UPDATE residents SET national_id='$national_id',citizenship='$citi',`firstname`='$fname', `middlename`='$mname', `lastname`='$lname', `alias`='$alias', `birthplace`='$bplace', `birthdate`='$bdate',
							age=$age, `civilstatus`='$cstatus', `gender`='$gender', `purok`='$purok', `voterstatus`='$vstatus', `identified_as`='$indetity', `phone`='$number', `email`='$email',`occupation`='$occu', `address`='$address',
							`resident_type`='$deceased', `remarks`='$remarks'
							WHERE id=$id;";

			if ($conn->query($query) === true) {

				$_SESSION['message'] = 'Resident Information has been updated!';
				$_SESSION['status'] = 'success';
			}
		}
	} else {

		$_SESSION['message'] = 'Please complete the form!';
		$_SESSION['status'] = 'danger';
	}
} else {
	$_SESSION['message'] = 'National ID is already taken. Please enter a unique national ID!';
	$_SESSION['status'] = 'danger';
}
header("Location: ../resident.php");

$conn->close();
