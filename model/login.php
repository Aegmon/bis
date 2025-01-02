<?php
include "../server/server.php";

// Get the input values and escape to prevent SQL injection
$username = $_POST["username"];
$password = $conn->real_escape_string(trim($_POST["password"]));

// Check if username and password are provided
if (empty($username) || empty($password)) {
    $_SESSION["message"] = "Username or password is empty! Please wait for the admin to verify your registration.";
    $_SESSION["status"] = "danger";
    header("location: ../login.php");
    return $conn->close();
}

// Hash the password for verification
$hash = sha1($password);

// Prepare and execute the query to retrieve the user
$result = $conn->query("SELECT * FROM users WHERE (username = '$username' OR email = '$username') AND password = '$hash'");
$fetchedData = $result->fetch_assoc();

// Check if the user exists
if (!$fetchedData) {
    $_SESSION["message"] = "Username or Password is incorrect!";
    $_SESSION["status"] = "danger";
    header("location: ../login.php");
    return $conn->close();
}

// Apply isVerify check only if the user_type is 'user'
if ($fetchedData["user_type"] == "user" && $fetchedData["isVerify"] != 1) {
    $_SESSION["message"] = "Your account is not verified. Please wait for the admin to verify your registration.";
    $_SESSION["status"] = "danger";
    header("location: ../login.php");
    return $conn->close();
}

// Set session variables for the authenticated user
$_SESSION["id"] = $fetchedData["id"];
$_SESSION["username"] = $fetchedData["username"];
$_SESSION["role"] = $fetchedData["user_type"];
$_SESSION["avatar"] = $fetchedData["avatar"];

// Log login activity for administrators
if ($fetchedData["user_type"] == "administrator") {
    $logMessage = $_SESSION["username"] . " logged in as Administrator";
    $logQuery = $conn->prepare("INSERT INTO admin_logs (logs) VALUES (?)");
    $logQuery->bind_param("s", $logMessage);
    $logQuery->execute();
}

// Log login activity for staff
if ($fetchedData["user_type"] == "staff") {
    $staffId = $fetchedData["id"];
    $staffUsername = $fetchedData["username"];
    $staffLogMessage = $staffUsername . " logged in as Staff";
    $staffLogQuery = $conn->prepare("INSERT INTO staff_logs (staff_id, username, log_message) VALUES (?, ?, ?)");
    $staffLogQuery->bind_param("iss", $staffId, $staffUsername, $staffLogMessage);
    $staffLogQuery->execute();
}

// Success message
$_SESSION["message"] = "You have successfully logged in to the Automated Barangay Services Management System!";
$_SESSION["status"] = "success";

// Redirect to the dashboard
header("location: ../dashboard.php");
return $conn->close();
?>
