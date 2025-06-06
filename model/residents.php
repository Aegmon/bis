<?php

include "../bootstrap/index.php";

use function _\camelCase as _camelCase;

function toNumberOrZero($val)
{
	if (is_numeric($val)) {
		return $val + 0;
	}
	return 0;
}

if (isset($_POST["register-resident"])) {
	try {
	  $nationalIDFile = $_FILES["issuedID"]; 
		$fourPsIDFile = $_FILES["four_ps_id"];
		$pwdIDFile = $_FILES["pwd_id"];
		$citizenship = getBody("citizenship", $_POST);
		$address = getBody("address", $_POST);
		$fname = getBody("fname", $_POST);
		$mname = getBody("mname", $_POST);
		$lname = getBody("lname", $_POST);
		$alias = getBody("alias", $_POST);
		$birthplace = getBody("birthplace", $_POST);
		$birthdate = getBody("birthdate", $_POST);
		$age = toNumberOrZero(getBody("age", $_POST));
		$civil_status = getBody("civil_status", $_POST);
		$gender = getBody("gender", $_POST);
		$purokId = getBody("purok_id", $_POST);
		$voter_status = getBody("voter_status", $_POST);
		$identified_as = getBody("identified_as", $_POST);
		$email = getBody("email", $_POST);
		$number = getBody("number", $_POST);
		$occupation = getBody("occupation", $_POST);
		$username = getBody("username", $_POST);
		$password = getBody("password", $_POST);
		$password_confirm = getBody("password_confirm", $_POST);
		$is_4ps = toNumberOrZero(getBody("is_4ps", $_POST));
		$is_pwd = toNumberOrZero(getBody("is_pwd", $_POST));
		$is_senior = $age > 60;

		$profileimg = getBody("profileimg", $_POST);
		$fourPsIDFilename = null;
		$pwdIDFilename = null;

		$requiredFields = [
			"Address" => $address,
			"First Name" => $fname,
			"Last Name" => $lname,
			"Birth Place" => $birthplace,
			"Birth Date" => $birthdate,
			"Age" => $age,
			"Civil Status" => $civil_status,
			"Gender" => $gender,
			"Purok" => $purokId,
			"Voter Status" => $voter_status,
			"Email" => $email,
			"Contact Number" => $number,
			"Occupation" => $occupation,
			"Username" => $username,
			"Password" => $password,
			"Password Confirmation" => $password_confirm,
		];
		
$_SESSION['formData'] = [
    "issuedID" => $nationalIDFile,
    "citizenship" => $citizenship,
    "address" => $address,
    "fname" => $fname,
    "mname" => $mname,
    "lname" => $lname,
    "alias" => $alias,
    "birthplace" => $birthplace,
    "birthdate" => $birthdate,
    "age" => $age,
    "civil_status" => $civil_status,
    "gender" => $gender,
    "purok_id" => $purokId,
    "voter_status" => $voter_status,
    "identified_as" => $identified_as,
    "email" => $email,
    "number" => $number,
    "occupation" => $occupation,
    "username" => $username,
    "is_4ps" => $is_4ps,
    "is_pwd" => $is_pwd,
    "is_senior" => $is_senior,
];

		/**
		 * Check required fields
		 */
		$emptyRequiredField = array_find_key($requiredFields, fn($item) => empty($item));

if ($emptyRequiredField) {
    $_SESSION["message"] = "<b>$emptyRequiredField</b> is required!";
    $_SESSION["status"] = "danger";

    // Redirect back to the form
    if ($_SERVER["HTTP_REFERER"]) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
        return $conn->close();
    }

    header("location: ../user-register.php");
    return $conn->close();
}

// If form is successful, clear the session data
unset($_SESSION['formData']);
		/**
		 * Check password
		 */


		 if (!empty($fourPsIDFile["name"])) {
			$uniqId = uniqid("4ps_" . date("YmdhisU"));
			$ext = pathinfo($fourPsIDFile["name"], PATHINFO_EXTENSION);
			$fourPsIDFilename = "$uniqId.$ext";
			$targetDir = "../assets/uploads/$fourPsIDFilename";

			move_uploaded_file($fourPsIDFile["tmp_name"], $targetDir);
	}

	// Upload PWD ID if provided
	if (!empty($pwdIDFile["name"])) {
			$uniqId = uniqid("pwd_" . date("YmdhisU"));
			$ext = pathinfo($pwdIDFile["name"], PATHINFO_EXTENSION);
			$pwdIDFilename = "$uniqId.$ext";
			$targetDir = "../assets/uploads/$pwdIDFilename";

			move_uploaded_file($pwdIDFile["tmp_name"], $targetDir);
	}
		if ($password != $password_confirm) {
			$_SESSION["message"] = "Please confirm your password!";
			$_SESSION["status"] = "danger";

			if ($_SERVER["HTTP_REFERER"]) {
				header("Location: " . $_SERVER["HTTP_REFERER"]);
				return $conn->close();
			}

			header("location: ../user-register.php");
			return $conn->close();
		}

		/**
		 * Handle profile image
		 */
	// Handle the file upload for National ID and Profile Image

$profileFile = $_FILES["img"];  // Profile image file

// Variables for storing the filenames of the uploaded files
$nationalIDFilename = null;
$imgFilename = null;

// If a National ID file is uploaded, process it
if (!empty($nationalIDFile["name"])) {
    $uniqId = uniqid("nationalID_" . date("YmdhisU"));  // Generate unique ID for National ID file
    $ext = pathinfo($nationalIDFile["name"], PATHINFO_EXTENSION);  // Get the file extension of the National ID file
    $nationalIDFilename = "$uniqId.$ext";  // Generate the file name using the unique ID and extension
    $nationalIDDir = "../assets/uploads/$nationalIDFilename";  // Directory where the National ID will be saved

    // Move the uploaded National ID file to the destination directory
    if (move_uploaded_file($nationalIDFile["tmp_name"], $nationalIDDir)) {
        // Successfully uploaded National ID
    } else {
        echo "Failed to upload National ID.";
    }
}

// If a profile image is uploaded, process it
if (!empty($profileFile["name"])) {
    $uniqId = uniqid("profile_" . date("YmdhisU"));  // Generate unique ID for profile image
    $ext = pathinfo($profileFile["name"], PATHINFO_EXTENSION);  // Get the file extension of the profile image
    $imgFilename = "$uniqId.$ext";  // Generate the image file name using the unique ID and extension
    $imgDir = "../assets/uploads/$imgFilename";  // Directory where the profile image will be saved

    // Move the uploaded profile image file to the destination directory
    if (move_uploaded_file($profileFile["tmp_name"], $imgDir)) {
        // Successfully uploaded profile image
    } else {
        echo "Failed to upload profile image.";
    }
}




		/**
		 * Create account
		 */
		$find_username = $db
			->from("users")
			->where("username", $username)
			->first()
			->exec();

		if ($find_username) {
			$_SESSION["message"] = "Username is already taken";
			$_SESSION["status"] = "danger";

			if ($_SERVER["HTTP_REFERER"]) {
				header("Location: " . $_SERVER["HTTP_REFERER"]);
				return $conn->close();
			}

			header("location: ../user-register.php");
			return $conn->close();
		}

		$account_id = (function () use ($db) {
			$imgFilename = $GLOBALS["imgFilename"];
			$username = $GLOBALS["username"];
			$email = $GLOBALS["email"];
			$password = sha1($GLOBALS["password"]);

			$result = $db
				->insert("users")
				->values([
					"username" => $username,
					"email"=>$email,
					"password" => $password,
					"user_type" => "user",
					"avatar" => $imgFilename,
				])
				->exec();

			return $result["id"];
		})();

		$result = $db
			->insert("residents")
			->values([
				"national_id" => $nationalIDFilename,
				"citizenship" => $citizenship,
				"firstname" => $fname,
				"middlename" => $mname,
				"lastname" => $lname,
				"alias" => $alias,
				"birthplace" => $birthplace,
				"birthdate" => $birthdate,
				"age" => $age,
				"civilstatus" => $civil_status,
				"gender" => $gender,
				"purok_id" => $purokId,
				"voterstatus" => $voter_status,
				"identified_as" => $identified_as,
				"phone" => $number,
				"email" => $email,
				"occupation" => $occupation,
				"address" => $address,
				"account_id" => $account_id,
				"is_4ps" => $is_4ps,
				"is_pwd" => $is_pwd,
				"is_senior" => $is_senior,
				"4ps_id" => $fourPsIDFilename,
				"pwd_id" => $pwdIDFilename,
			])
			->exec();

		$_SESSION["message"] = "Resident registered";
		$_SESSION["status"] = "success";

		if ($_SERVER["HTTP_REFERER"]) {
			header("Location: " . $_SERVER["HTTP_REFERER"]);
			return $conn->close();
		}

		header("location: ../user-register.php");
		return $conn->close();
	} catch (Exception $e) {
		echo "<pre>";
		var_dump($e);
		echo "</pre>";
		throw $e;
	}
}

if (isset($_POST["update-resident"])) {
	$resident_id = getBody("resident_id", $_POST);
	$national_id = getBody("national_id", $_POST);
	$citizenship = getBody("citizenship", $_POST);
	$address = getBody("address", $_POST);
	$fname = getBody("fname", $_POST);
	$mname = getBody("mname", $_POST);
	$lname = getBody("lname", $_POST);
	$alias = getBody("alias", $_POST);
	$birthplace = getBody("birthplace", $_POST);
	$birthdate = getBody("birthdate", $_POST);
	$age = getBody("age", $_POST);
	$civil_status = getBody("civil_status", $_POST);
	$gender = getBody("gender", $_POST);
	$purok_id = getBody("purok_id", $_POST);
	$voter_status = getBody("voter_status", $_POST);
	$identified_as = getBody("identified_as", $_POST);
	$email = getBody("email", $_POST);
	$number = getBody("number", $_POST);
	$occupation = getBody("occupation", $_POST);
	$is_pwd = getBody("is_pwd", $_POST);
	$is_4ps = getBody("is_4ps", $_POST);
	$username = getBody("username", $_POST);
	$password = getBody("password", $_POST);
	$password_confirm = getBody("password_confirm", $_POST);

	$requiredFields = [
		"Citizenship" => $citizenship,
		"Address" => $address,
		"First Name" => $fname,
		"Last Name" => $lname,
		"Birth Place" => $birthplace,
		//"Birth Date" => $birthdate,
		//"Age" => $age,
		"Civil Status" => $civil_status,
		"Gender" => $gender,
		"Purok" => $purok_id,
		"Voter Status" => $voter_status,
		"Email" => $email,
		"Contact Number" => $number,
		"Occupation" => $occupation,
		"Username" => $username,
	];

	/**
	 * Check required fields
	 */
	$emptyRequiredField = array_find_key($requiredFields, fn($item) => empty($item));

	if ($emptyRequiredField) {
		$_SESSION["message"] = "<b>$emptyRequiredField</b> is required!";
		$_SESSION["status"] = "danger";

		header("location: ../resident-view.php?resident_id=$resident_id");
		return $conn->close();
	}

	/**
	 * Check password
	 */
	if ($password || $password_confirm) {
		if ($password != $password_confirm) {
			$_SESSION["message"] = "Please confirm your password!";
			$_SESSION["status"] = "danger";

			header("location: ../resident-view.php?resident_id=$resident_id");
			return $conn->close();
		}
	}

	$resident_details = $db
		->from("residents")
		->join("users", "users.id", "residents.account_id")
		->where("residents.id", $resident_id)
		->first()
		->select([
			"avatar" => "users.avatar",
			"user_id" => "users.id",
		])
		->exec();

	if (!$resident_details) {
		$_SESSION["message"] = "Resident not found!";
		$_SESSION["status"] = "danger";

		header("location: ../resident-view.php?resident_id=$resident_id");
		return $conn->close();
	}

	/**
	 * Handle profile image
	 */
	$profile_camera = getBody("profileimg", $_POST); // base 64 image
	$profile_file = $_FILES["img"];

	$img_filename = empty($profile_camera) ? $resident_details["avatar"] : $profile_camera;

	if ($profile_file["name"]) {
		$uniqId = uniqid(date("YmdhisU"));
		$ext = pathinfo($profile_file["name"], PATHINFO_EXTENSION);
		$img_filename = "$uniqId.$ext";
		$imgDir = "../assets/uploads/$img_filename";

		move_uploaded_file($profile_file["tmp_name"], $imgDir);
	}

	/**
	 * Update account
	 */
	$find_username = $db
		->from("users")
		->where("username", $username)
		->whereNot("users.id", $resident_details["user_id"])
		->first()
		->exec();

	if ($find_username) {
		$_SESSION["message"] = "Username is already taken";
		$_SESSION["status"] = "danger";

		header("location: ../resident-view.php?resident_id=$resident_id");
		return $conn->close();
	}

	(function () use ($db, $username, $password, $img_filename, $resident_details) {
		$user_updates = [
			"username" => $username,
			"avatar" => $img_filename,
		];

		if ($password) {
			$user_updates["password"] = sha1($password);
		}

		$db
			->update("users")
			->where("id", $resident_details["user_id"])
			->set($user_updates)
			->exec();
	})();

	$result = $db
		->update("residents")
		->where("id", $resident_id)
		->set([
			"national_id" => $national_id,
			"citizenship" => $citizenship,
			"firstname" => $fname,
			"middlename" => $mname,
			"lastname" => $lname,
			"alias" => $alias,
			"birthplace" => $birthplace,
			"birthdate" => $birthdate,
			"age" => $age,
			"address" => $address,
			"civilstatus" => $civil_status,
			"gender" => $gender,
			"purok_id" => $purok_id,
			"voterstatus" => $voter_status,
			"identified_as" => $identified_as,
			"phone" => $number,
			"email" => $email,
			"occupation" => $occupation,
			"is_4ps" => $is_4ps,
			"is_pwd" => $is_pwd,
			"is_senior" => ((int) $age) > 60 ? 1 : 0,
			"address" => $address,
		])
		->exec();

	$_SESSION["message"] = "Resident details updated";
	$_SESSION["status"] = "success";
	
	$logMessage = " Modified Resident Information";
	$logQuery = $conn->prepare("INSERT INTO admin_logs (logs) VALUES (?)");
	$logQuery->bind_param("s", $logMessage);
	$logQuery->execute();
	header("location: ../resident-view.php?resident_id=$resident_id");
	return $conn->close();
}

if (isset($_GET["remove-resident"])) {
	$resident_id = $_GET["id"];

	$conn->query("SET FOREIGN_KEY_CHECKS=0;");

	$resident_details = $db
		->from("residents")
		->where("residents.id", $resident_id)
		->select([
			"account_id" => "residents.account_id",
		])
		->first()
		->exec();

	$db
		->delete("residents")
		->where("residents.id", $resident_id)
		->exec();

	$db
		->delete("users")
		->where("id", $resident_details["account_id"])
		->exec();

	$conn->query("SET FOREIGN_KEY_CHECKS=1;");

	$_SESSION["message"] = "Resident removed";
	$_SESSION["status"] = "success";

	header("location: ../resident-view.php");
	return $conn->close();
}

if (isset($_GET["unset-4ps"])) {
	$resident_id = $_GET["id"];

	$db
		->update("residents")
		->where("residents.id", $resident_id)
		->set([
			"is_4ps" => 0,
		])
		->exec();

	$_SESSION["message"] = "Resident removed from 4Ps";
	$_SESSION["status"] = "success";

	header("location: ../4ps-residents.php");
	return $conn->close();
}

if (isset($_POST["verify-resident"])) {
    $resident_id = $_POST["resident_id"];

    $db
        ->update("users")
        ->where("users.id", $resident_id)
        ->set([
            "isVerify" => 1,
        ])
        ->exec();

    $_SESSION["message"] = "Resident verified successfully";
    $_SESSION["status"] = "success";

   	header("location: ../resident-view.php");
    return $conn->close();
}
