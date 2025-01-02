<?php

include "../bootstrap/index.php";

if (isset($_POST["request-certificate"])) {
	$certificate_id = getBody("certificate_id", $_POST);
	$memo = getBody("memo", $_POST);
	$resident_id = getBody("resident_id", $_POST);
	$request_data = (object) [];


    $uploadDir = __DIR__ . '/uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true); // Create the uploads directory if it doesn't exist
    }






   $uploadedFilePath = null;
    if (isset($_FILES['supporting_document']) && $_FILES['supporting_document']['error'] === UPLOAD_ERR_OK) {
        $fileName = basename($_FILES['supporting_document']['name']);
        $targetFilePath = $uploadDir . $fileName;

        if (move_uploaded_file($_FILES['supporting_document']['tmp_name'], $targetFilePath)) {
            $uploadedFilePath = 'uploads/' . $fileName; // Store relative path for database
        } else {
            $_SESSION["message"] = "Failed to upload file.";
            $_SESSION["status"] = "danger";
            header("Location: ../certificate-requests.php");
            return $conn->close();
        }
    } else {
        $_SESSION["message"] = "Supporting document is required!";
        $_SESSION["status"] = "danger";
        header("Location: ../certificate-requests.php");
        return $conn->close();
    }














	$requiredFields = [
		"Certificate" => $certificate_id,
		"Resident" => $resident_id,
	];

	/**
	 * Check required fields
	 */
	$emptyRequiredField = array_find_key($requiredFields, fn($item) => empty($item));

	if ($emptyRequiredField) {
		$_SESSION["message"] = "<b>$emptyRequiredField</b> is required!";
		$_SESSION["status"] = "danger";

		header("Location: ../certificate-requests.php");
		return $conn->close();
	}



	$certificateDetails = $db
		->from("certificates")
		->where("id", $certificate_id)
		->first()
		->select([
			"url" => "url",
		])
		->exec();

	$has_empty_cert_field = false;

	/**
	 * Is business clearance
	 */
	if ($certificate_id == 5) {
		$request_data = [
			"name" => getBody("business_name", $_POST),
			"owner_1" => getBody("business_owner_1", $_POST),
			"owner_2" => getBody("business_owner_2", $_POST),
			"nature" => getBody("business_nature", $_POST),
		];

		$requiredFields = [
			"Business Name" => $request_data["name"],
			"Business Owner" => $request_data["owner_1"],
			"Business Nature" => $request_data["nature"],
		];

		$has_empty_cert_field = array_find_key($requiredFields, fn($item) => empty($item));
	}

	/**
	 * Is cutting permit
	 */
	if ($certificate_id == 6) {
		$request_data = [
			"material" => getBody("cutting_material", $_POST),
			"quantity" => getBody("cutting_quantity", $_POST),
			"location" => getBody("cutting_location", $_POST),
		];

		$requiredFields = [
			"Material" => $request_data["material"],
			"Quantity" => $request_data["quantity"],
			"Location" => $request_data["location"],
		];

		$has_empty_cert_field = array_find_key($requiredFields, fn($item) => empty($item));
	}

	/**
	 * Is guardian permit
	 */
	if ($certificate_id == 7) {
		$request_data = [
			"guardian_name" => getBody("guardian_name", $_POST),

		];

		$requiredFields = [
			"guardian_name" => $request_data["guardian_name"],

		];

		$has_empty_cert_field = array_find_key($requiredFields, fn($item) => empty($item));
	}



	if ($has_empty_cert_field) {
		$_SESSION["message"] = "<b>$has_empty_cert_field</b> is required!";
		$_SESSION["status"] = "danger";

		header("Location: ../certificate-requests.php");
		return $conn->close();
	}

	$result = $db
		->insert("certificate_requests")
		->values([
			"resident_id" => $resident_id,
			"certificate_id" => $certificate_id,
			"memo" => $memo,
			"status" => "pending",
			"data" => json_encode($request_data),
			 "supporting_document" => $uploadedFilePath, 
		])
		->exec();

	if ($result["status"] !== true) {
		$_SESSION["message"] = "Internal server error";
		$_SESSION["status"] = "danger";

		header("Location: ../certificate-requests.php");
		return $conn->close();
	}

	$db
		->update("certificate_requests")
		->where("id", $result["id"])
		->set([
			"url" => $certificateDetails["url"] . "?id=$resident_id&request_id={$result["id"]}",
		])
		->exec();

	$_SESSION["message"] = "Certificate request sent!";
	$_SESSION["status"] = "success";

	header("Location: ../certificate-requests.php");
	return $conn->close();
}

if (isset($_POST["edit-request"])) {
	$certificate_id = getBody("certificate_id", $_POST);
	$memo = getBody("memo", $_POST);
	$request_id = getBody("id", $_POST);

	$requiredFields = [
		"Certificate" => $certificate_id,
		"Request ID" => $request_id,
	];

	/**
	 * Check required fields
	 */
	$emptyRequiredField = array_find_key($requiredFields, fn($item) => empty($item));

	if ($emptyRequiredField) {
		$_SESSION["message"] = "<b>$emptyRequiredField</b> is required!";
		$_SESSION["status"] = "danger";

		header("Location: ../certificate-requests.php");
		return $conn->close();
	}

	$result = $db
		->update("certificate_requests")
		->where("certificate_requests.id", $request_id)
		->set([
			"certificate_id" => $certificate_id,
			"memo" => $memo,
		])
		->exec();

	if ($result["status"] !== true) {
		$_SESSION["message"] = "Internal server error";
		$_SESSION["status"] = "danger";

		header("Location: ../certificate-requests.php");
		return $conn->close();
	}

	$_SESSION["message"] = "Request updated!";
	$_SESSION["status"] = "success";

	header("Location: ../certificate-requests.php");
	return $conn->close();
}

if (isset($_GET["delete-request"])) {
	$request_id = getBody("id", $_GET);

	$requiredFields = [
		"Request ID" => $request_id,
	];

	/**
	 * Check required fields
	 */
	$emptyRequiredField = array_find_key($requiredFields, fn($item) => empty($item));

	if ($emptyRequiredField) {
		$_SESSION["message"] = "<b>$emptyRequiredField</b> is required!";
		$_SESSION["status"] = "danger";

		header("Location: ../certificate-requests.php");
		return $conn->close();
	}

	$result = $db
		->delete("certificate_requests")
		->where("id", $request_id)
		->exec();

	if ($result["status"] !== true) {
		$_SESSION["message"] = "Internal server error";
		$_SESSION["status"] = "danger";

		header("Location: ../certificate-requests.php");
		return $conn->close();
	}

	$_SESSION["message"] = "Request deleted!";
	$_SESSION["status"] = "success";

	header("Location: ../certificate-requests.php");
	return $conn->close();
}
