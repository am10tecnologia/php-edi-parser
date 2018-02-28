<?php

require_once '../vendor/autoload.php';

class TxtReadingTest extends PHPUnit_Framework_TestCase
{
    public function testeInstanciacaoTxtReader()
    {
        $txtReader = new \PHPEDIParser\TxtReader(__DIR__ .'/resources/edi-file-sample.txt');
        $this->assertInstanceOf(\PHPEDIParser\TxtReader::class,$txtReader);
    }
}