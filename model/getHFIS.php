<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once 'config.php';

$now = date('Y-m-d', strtotime('now'));
$HFIS = new Mbahmario\Bpjs\VClaim\Referensi($vclaim_conf);
$cekDok  = $HFIS->dokterDpjp('1', $now, '');

header('Content-Type: application/json');
echo json_encode(array('cekDok' => $cekDok), JSON_UNESCAPED_SLASHES);
