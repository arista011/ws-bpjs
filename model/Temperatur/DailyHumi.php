<?php
require_once 'config.php';

// Query Temperature Data
$query = "SELECT DATE_FORMAT(datetimes, '%H:%m') AS time, hum FROM data 
            WHERE datetimes >= DATE_SUB(NOW(), INTERVAL 12 HOUR)
            GROUP BY DATE_FORMAT(datetimes, '%H:%m')";

$result = $mysqli->query($query);
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
