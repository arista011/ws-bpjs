<?php
require_once 'model/Temperatur/config.php';

$query = "SELECT datetimes, temp, hum FROM data ORDER BY datetimes DESC";
$result = $mysqli->query($query);
$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
