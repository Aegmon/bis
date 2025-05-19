<?php

include "bootstrap/index.php";

if (isset($_SESSION["id"])) {
    $userId = $_SESSION["id"];

    // Get resident ID
    $stmt = $conn->prepare("
        SELECT r.id AS resident_id
        FROM residents r
        JOIN users u ON u.id = r.account_id
        WHERE u.id = ?
    ");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if ($result && isset($result['resident_id'])) {
        $residentId = $result['resident_id'];

        // Update isRead to 1
        $update = $conn->prepare("
            UPDATE certificate_requests 
            SET isRead = 1 
            WHERE resident_id = ? AND status = 'released' AND isRead = 0
        ");
        $update->bind_param("i", $residentId);
        $update->execute();
        $update->close();
    }
}

// Redirect to the actual page
header("Location: certificate-requests.php");
exit;
?>
