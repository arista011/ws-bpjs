<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once 'config.php';

//use referensi serivce
$RJ = new \Mbahmario\Bpjs\VClaim\Rujukan($vclaim_conf);
$RF = new \Mbahmario\Bpjs\VClaim\Referensi($vclaim_conf);
$start = microtime(true);
$data = [
    $RJ->cariByNoKartu('Peserta', '0001338750022', true),
    $RJ->cariByNoRujukan('', '0117U0041023P000886'),
    $RF->poli('MAT'),
    $RF->faskes('UMUM', '2')
];
// var_dump($data);
$finish = microtime(true) - $start;
$toRu = number_format($finish, 2);
echo json_encode(array('toRu' => $toRu));
