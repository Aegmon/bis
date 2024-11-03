<?php
include '../server/server.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'administrator') {
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}

$id = $conn->real_escape_string($_GET['id']);

if ($id != '') {
    $query = "DELETE FROM tblblotter WHERE id = '$id'";
    $result = $conn->query($query);

    if ($result === true) {
        $_SESSION['message'] = 'Blotter has been removed!';
        $_SESSION['status'] = 'danger';

        // Log the deletion action
        $logMessage = "Admin deleted Blotter entry with ID: $id";
        $logQuery = $conn->prepare("INSERT INTO admin_logs (logs) VALUES (?)");
        $logQuery->bind_param("s", $logMessage);
        $logQuery->execute();
    } else {
        $_SESSION['message'] = 'Something went wrong!';
        $_SESSION['status'] = 'danger';
    }
} else {
    $_SESSION['message'] = 'Missing Blotter ID!';
    $_SESSION['status'] = 'danger';
}

header("Location: ../blotter.php");
$conn->close();
?>
