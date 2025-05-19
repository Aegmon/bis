<?php
include '../server/server.php';

if (!isset($_SESSION['username'])) {
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}

$id            = $conn->real_escape_string($_POST['id']);
$complainant   = $conn->real_escape_string($_POST['complainant']);
$respondent    = $conn->real_escape_string($_POST['respondent']);
$victim        = $conn->real_escape_string($_POST['victim']);
$type          = $conn->real_escape_string($_POST['type']);
$location      = $conn->real_escape_string($_POST['location']);
$date          = $conn->real_escape_string($_POST['date']);
$time          = $conn->real_escape_string($_POST['time']);
$status        = $conn->real_escape_string($_POST['status']);
$details       = $conn->real_escape_string($_POST['details']);
$feedback       = $conn->real_escape_string($_POST['feedback']);
$feedback       = $conn->real_escape_string($_POST['feedback']);

// Check if the ID is not empty
if (!empty($id)) {
    $query = "UPDATE tblblotter SET `respondent`='$respondent', `victim`='$victim', `type`='$type', `location`='$location', `date`='$date',
              `time`='$time', `status`='$status', `details`='$details' ,  `feedback`='$feedback'  WHERE id=$id;";
    $result = $conn->query($query);

    // Check if the update was successful
    if ($result === true) {
    
		$role = $_SESSION["username"];
		$logMessage = "$role Modified Blotter/Incident Report";
		$logQuery = $conn->prepare("INSERT INTO admin_logs (logs) VALUES (?)");
		$logQuery->bind_param("s", $logMessage);
		$logQuery->execute();
        $_SESSION['message'] = 'Blotter details have been updated!';
        $_SESSION['status'] = 'success';
    } else {
        $_SESSION['message'] = 'Something went wrong!';
        $_SESSION['status'] = 'danger';
    }
} else {
    $_SESSION['message'] = 'No Blotter ID found!';
    $_SESSION['status'] = 'danger';
}

header("Location: ../blotter.php");

$conn->close();
?>
