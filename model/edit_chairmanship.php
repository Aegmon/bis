<?php
include '../server/server.php';

if (!isset($_SESSION['username'])) {
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}

$chair = $conn->real_escape_string($_POST['chair']);
$id = $conn->real_escape_string($_POST['id']);

if (!empty($id)) {
    $query = "UPDATE tblchairmanship SET `title` = '$chair' WHERE id=$id;";
    $result = $conn->query($query);

    if ($result === true) {
        $_SESSION['message'] = 'Title has been updated!';
        $_SESSION['status'] = 'success';

        // Log the action if the user is an administrator
        if ($_SESSION['role'] === 'administrator') {
            $logMessage = "Admin updated chair title: ID: $id, New Title: $chair";
            $logQuery = $conn->prepare("INSERT INTO admin_logs (logs) VALUES (?)");
            $logQuery->bind_param("s", $logMessage);
            $logQuery->execute();
        }
    } else {
        $_SESSION['message'] = 'Something went wrong!';
        $_SESSION['status'] = 'danger';
    }
} else {
    $_SESSION['message'] = 'No title ID found!';
    $_SESSION['status'] = 'danger';
}

header("Location: ../chairmanship.php");

$conn->close();
?>
