<?php

namespace PHPEDIParser;

class TxtReader 
{
    private $file;

    public function __construct($filePath)
    {
        $this->file = file($filePath, FILE_IGNORE_NEW_LINES);         
    }

    public function toArray()
    {
        if ($this->isValidTXT()){
            return $this->file;
        }        
    }

    private function isValidTXT()
    {
        if (!$this->file){
            throw new Exception("Empty file");
        }

        return true;
    }

}