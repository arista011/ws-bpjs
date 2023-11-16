<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once 'config.php';

//use referensi serivce
$MN = new \Mbahmario\Bpjs\VClaim\Monitoring($vclaim_conf);
$start = microtime(true);
$data = [
    $MN->dataKunjungan('2023-11-01', '2023-11-09'),
    $MN->dataKlaim('2023-09-01', '2', '3'),
    $MN->historyPelayanan('0001338750022', '2023-03-01', '2023-05-30')
];
// var_dump($data);
$finish = microtime(true) - $start;
$toMon = number_format($finish, 2);
echo json_encode(array('toMon' => $toMon));
