<?php

require "../server/server.php";
require "../helpers/method-vars.php";

if (getBody("register-official", $_POST)) {
	try {
		$name = getBody("name", $_POST);
		$chair = getBody("chair", $_POST);
		$position = getBody("position", $_POST);
		$start = getBody("start", $_POST);
		$end = getBody("end", $_POST);
		$status = getBody("status", $_POST);

		if (!isset($name, $chair, $position, $start, $end, $status)) {
			$_SESSION["message"] = "All fields are required!";
			$_SESSION["status"] = "danger";

			header("location: ../officials.php");
			return $conn->close();
		}

		if ($position == 1) {
			$hasCaptain = $db
					->from("tblofficials")
					->where("position", 1)
					->where("status", "Active")
					->select(["id" => "tblofficials.id"])
					->exec();
	
			if (count($hasCaptain) > 0) {  // Ensure we're checking if there are results
					$_SESSION["message"] = "A captain is already registered!";
					$_SESSION["status"] = "danger";
					
					header("location: ../officials.php");
					exit; // Use exit instead of return for proper redirection
			}
	}
	

		$result = $db
			->insert("tblofficials")
			->values([
				"name" => $name,
				"chairmanship" => $chair,
				"position" => $position,
				"termstart" => $start,
				"termend" => $end,
				"status" => $status,
			])
			->exec();

		if ($result["status"] !== true) {
			$_SESSION["message"] = "Internal Server Error";
			$_SESSION["status"] = "danger";

			header("location: ../announcements.php");
			return $conn->close();
		}

		$_SESSION["message"] = "Official registered";
		$_SESSION["status"] = "success";
		$role = $_SESSION["username"];
		$logMessage = "$role Add Brgy Officials and Staff";
		$logQuery = $conn->prepare("INSERT INTO admin_logs (logs) VALUES (?)");
		$logQuery->bind_param("s", $logMessage);
		$logQuery->execute();
		header("location: ../officials.php");
		$conn->close();

		return;
	} catch (Exception $e) {
		throw $e;
	}
}
