<?php

require("../server/server.php");

// get Users
$query = "SELECT
    residents.firstname,
    residents.middlename,
    residents.lastname,
    residents.alias,
    residents.birthplace,
    residents.birthdate,
    residents.age,
    residents.civilstatus,
    residents.gender,
    purok.name AS purok,
    residents.voterstatus,
    residents.identified_as,
    residents.phone,
    residents.email,
    residents.address
FROM residents
JOIN purok ON residents.purok_id = purok.id";

if (!$result = $conn->query($query)) {
    exit($conn->error);
}

$users = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Residents.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('First Name','Middle Name', 'Last Name', 'Alias', 'Birtplace', 'Birthdate', 'Age', 'Civil Status', 'Gender', 'Purok', 'Voter Status', 'Identified As', 'Contact Number', 'Email Address', 'Address'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}


?>