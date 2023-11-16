<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once 'config.php';

//use referensi serivce
$RK = new \Mbahmario\Bpjs\VClaim\RencanaKontrol($vclaim_conf);
$RF = new \Mbahmario\Bpjs\VClaim\Referensi($vclaim_conf);
$start = microtime(true);
$data = [

    $RK->cariByNoSEP('0117R0870723V013334'),
    $RK->cariByNoKartu('06', '2023', '0001338750022', '2'),
    $RK->cariByNoSuratKontrol('0117R0870623K005188'),
    $RK->listDataSuratKontrol('2023-06-01', '2023-06-30', '2'),
    $RF->dokterDpjp('2', '2023-06-01', 'THT'),
    $RF->faskes('BOGOR', '1')
];
// var_dump($data);
$finish = microtime(true) - $start;
$toPen = number_format($finish, 2);
echo json_encode(array('toPen' => $toPen));
