<?php
include "../server/server.php";

// Get the input values and escape to prevent SQL injection
$username = $conn->real_escape_string(trim($_POST["username"]));
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
$result = $conn->query("SELECT * FROM users WHERE username = '$username' AND password = '$hash'");
$fetchedData = $result->fetch_assoc();

// Check if the user exists
if (!$fetchedData) {
    $_SESSION["message"] = "Username or Password is incorrect!";
    $_SESSION["status"] = "danger";
    header("location: ../login.php");
    return $conn->close();
}

// Check if the user is verified
if ($fetchedData["isVerify"] != 1) {
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

// Success message
$_SESSION["message"] = "You have successfully logged in to the Automated Barangay Services Management System!";
$_SESSION["status"] = "success";

// Redirect to the dashboard
header("location: ../dashboard.php");
return $conn->close();
