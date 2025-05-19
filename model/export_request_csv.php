<?php

require("../server/server.php"); // or use bootstrap if needed: include "../bootstrap/index.php";

// Get current year
$currentYear = date('Y');

// Prepare query
$sql = "
    SELECT 
        MONTH(cr.created_at) AS month,
        certificates.name AS certificate_name,
        COUNT(*) AS total
    FROM certificate_requests cr
    JOIN certificates ON certificates.id = cr.certificate_id
    WHERE cr.status = 'released' AND YEAR(cr.created_at) = ?
    GROUP BY month, certificate_name
    ORDER BY month
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $currentYear);
$stmt->execute();
$result = $stmt->get_result();

// Build data structure
$data = [];
$certificates = [];

while ($row = $result->fetch_assoc()) {
    $month = (int)$row['month'];
    $certName = $row['certificate_name'];
    $total = (int)$row['total'];

    if (!isset($data[$month])) {
        $data[$month] = [];
    }

    $data[$month][$certName] = $total;
    $certificates[$certName] = true;
}

// Get sorted certificate names
$certificateList = array_keys($certificates);
sort($certificateList);

// Output CSV
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=YEARLY CERTIFICATE REPORT ' . $currentYear . '.csv');
$output = fopen('php://output', 'w');

// Header row
fputcsv($output, array_merge(['Month'], $certificateList));

// Month names
$monthNames = [
    1 => 'Jan', 2 => 'Feb', 3 => 'Mar', 4 => 'Apr', 5 => 'May', 6 => 'Jun',
    7 => 'Jul', 8 => 'Aug', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Dec'
];

// Fill and write rows
for ($i = 1; $i <= 12; $i++) {
    $row = [$monthNames[$i]];
    foreach ($certificateList as $cert) {
        $row[] = isset($data[$i][$cert]) ? $data[$i][$cert] : 0;
    }
    fputcsv($output, $row);
}

fclose($output);
exit;

?>
