<?php
include('../server/server.php');

if (!isset($_SESSION['username'])) {
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}

$complainant    = $conn->real_escape_string($_POST['complainant_id']);
$respondent     = $conn->real_escape_string($_POST['respondent']);
$victim         = $conn->real_escape_string($_POST['victim']);
$type             = $conn->real_escape_string($_POST['type']);
$location         = $conn->real_escape_string($_POST['location']);
$date           = $conn->real_escape_string($_POST['date']);
$time             = $conn->real_escape_string($_POST['time']);
$status         = $conn->real_escape_string($_POST['status']);
$details         = $conn->real_escape_string($_POST['details']);
$feedback         = $conn->real_escape_string($_POST['feedback']);

if (!empty($complainant) && !empty($victim) && !empty($type) && !empty($location) && !empty($date) && !empty($time) && !empty($status) && !empty($details)) {

    $insert  = "INSERT INTO tblblotter (`complainant`, `respondent`, `victim`, `type`, `location`,`date`, `time`, `details`, `feedback`, `status`)
                    VALUES ('$complainant', '$respondent','$victim', '$type','$location','$date', '$time','$details', '$feedback', '$status')";
    $result  = $conn->query($insert);

    if ($result === true) {
        $role = $_SESSION["username"];
		$logMessage = "$role Add Blotter/Incident Report";
		$logQuery = $conn->prepare("INSERT INTO admin_logs (logs) VALUES (?)");
		$logQuery->bind_param("s", $logMessage);
		$logQuery->execute();
        $_SESSION['message'] = 'Blotter added!';
        $_SESSION['status'] = 'success';
    } else {
        $_SESSION['message'] = 'Something went wrong!';
        $_SESSION['status'] = 'danger';
    }
} else {

    $_SESSION['message'] = 'Please fill up the form completely!';
    $_SESSION['status'] = 'danger';
}

header("Location: ../blotter.php");

$conn->close();
