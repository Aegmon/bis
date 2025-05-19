<?php
include '../server/server.php';

if (!isset($_SESSION['username'])) {
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}

$id = $conn->real_escape_string($_POST['id']);
$name = $conn->real_escape_string($_POST['name']);
$chair = $conn->real_escape_string($_POST['chair']);
$pos = $conn->real_escape_string($_POST['position']);
$start = $conn->real_escape_string($_POST['start']);
$end = $conn->real_escape_string($_POST['end']);
$status = $conn->real_escape_string($_POST['status']);

if (!empty($id)) {
    $query = "UPDATE tblofficials SET `name`='$name', `chairmanship`='$chair', `position`='$pos', termstart='$start', termend='$end', `status`='$status' WHERE id=$id;";
    $result = $conn->query($query);

    if ($result === true) {
        $_SESSION['message'] = 'Brgy Official has been updated!';
        $_SESSION['status'] = 'success';

        // Log the action if the user is an administrator
            $role = $_SESSION["username"];
            $logMessage = "$role Modified Brgy Officials and Staff Information";
            $logQuery = $conn->prepare("INSERT INTO admin_logs (logs) VALUES (?)");
            $logQuery->bind_param("s", $logMessage);
            $logQuery->execute();
        

    } else {
        $_SESSION['message'] = 'Something went wrong!';
        $_SESSION['status'] = 'danger';
    }
} else {
    $_SESSION['message'] = 'No Brgy Official ID found!';
    $_SESSION['status'] = 'danger';
}

header("Location: ../officials.php");

$conn->close();
?>
