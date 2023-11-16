<?php
$DB_SERVER = "10.103.0.35";
$DB_USER = "medik";
$DB_PASSWORD = "husad4";
$DB_NAME = "temprature";
$mysqli = new mysqli($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME);

if ($mysqli->connect_errno) {
  echo json_encode(["error" => "Database connection failed"]);
  exit;
}
