<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once 'config.php';

//use referensi serivce
$AN = new \Mbahmario\Bpjs\Antrean\Antrean($pcare_conf);
$JD = new \Mbahmario\Bpjs\Antrean\Jadwaldokter($pcare_conf);
$start = microtime(true);
$data = [
    $JD->getJadwal('MAT', '2023-10-31'),
    $AN->getListTask('2023-10-10')
];
// var_dump($data);
$finish = microtime(true) - $start;
$toAnt = number_format($finish, 2);
echo json_encode(array('toAnt' => $toAnt));
