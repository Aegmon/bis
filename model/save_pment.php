<?php

include "../bootstrap/index.php";

if (isset($_POST['create-payment'])) {

  if (!isset($_SERVER["HTTP_REFERER"])) {
    header("Location: ../dashboard.php");
    return $conn->close();
  }

  // Get POST data
  $amount = getBody('amount', $_POST);
  // Set default value to 0 if amount is empty or not set
  $amount = empty($amount) ? 0 : $amount;

  $details = getBody('details', $_POST);
  $date = getBody('date', $_POST);
  $mode = "Cash";
  $resident_id = getBody('resident_id', $_POST);
  $certificate_id = getBody('certificate_id', $_POST);
  $request_id = getBody('request_id', $_POST);
  $stats = "released";

  $requiredFields = [
    "Amount" => $amount,
    "Resident ID" => $resident_id,
    "Payment Mode" => $mode,
    "Certificate ID" => $certificate_id,
  ];

  /**
   * Check required fields
   */
  $emptyRequiredField = array_find_key($requiredFields, fn($item) => empty($item));

  if ($emptyRequiredField) {
    $_SESSION["message"] = "<b>$emptyRequiredField</b> is required!";
    $_SESSION["status"] = "danger";

    header("Location: " . $_SERVER["HTTP_REFERER"]);
    return $conn->close();
  }

  $paymentResult = $db
    ->insert("payments")
    ->values([
      "user_id" => $_SESSION['id'],
      "details" => $details,
      "resident_id" => $resident_id,
      "amount" => $amount,
      "mode" => $mode,
    ])
    ->exec();

  if ($paymentResult['status'] !== true) {
    $_SESSION["message"] = "Internal server error";
    $_SESSION["status"] = "danger";

    header("Location: " . $_SERVER["HTTP_REFERER"]);
    return $conn->close();
  }

  $requestResult = ["status" => false];

  if ($request_id) {
    $requestResult = $db
      ->update("certificate_requests")
      ->where('id', $request_id)
      ->set([
        "payment_id" => $paymentResult["id"],
        "status" => $stats,
            "feedback" => $details,
      ])
      ->exec();
  } else {
    $requestResult = $db
      ->insert('certificate_requests')
      ->values([
        "resident_id" => $resident_id,
        "payment_id" => $paymentResult['id'],
        "certificate_id" => $certificate_id,
        "status" => $stats,
        "memo" => $details,
           "feedback" => $details,
      ])
      ->exec();
  }

  if ($requestResult['status'] !== true) {
    $_SESSION["message"] = "Internal server error";
    $_SESSION["status"] = "danger";

    header("Location: " . $_SERVER["HTTP_REFERER"]);
    return $conn->close();
  }

  $_SESSION["message"] = "Amount Sent";
  $_SESSION["status"] = "success";
  $role = $_SESSION["username"];
  $logMessage = "$role Processed Certificate Request";
  $logQuery = $conn->prepare("INSERT INTO admin_logs (logs) VALUES (?)");
  $logQuery->bind_param("s", $logMessage);
  $logQuery->execute();
  header("location: ../officials.php");
  $conn->close();
  header("Location: " . $_SERVER["HTTP_REFERER"] . "&closeModal=1");
  return $conn->close();
}
