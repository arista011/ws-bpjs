<?php
require_once 'config.php';

// Query Chart Area
$query = "SELECT DATE_FORMAT(datetimes, '%Y-%m') AS month, temp, hum FROM data 
            WHERE datetimes >= DATE_SUB(NOW(), INTERVAL 1 YEAR)
            GROUP BY DATE_FORMAT(datetimes, '%Y-%m')";

$result = $mysqli->query($query);
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
