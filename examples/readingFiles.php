<?php

require_once '../vendor/autoload.php';


$file = new \PHPEDIParser\TxtReader(__DIR__ .'/resources/edi-file-sample.txt');

$edi = new \PHPEDIParser\Parser\File($file);

$result = $edi->getEDI();

echo '<pre>';

var_dump($result);

echo '</pre>';