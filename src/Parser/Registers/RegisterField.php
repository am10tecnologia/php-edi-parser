<?php

namespace PHPEDIParser\Parser\Registers;

class RegisterField {

    protected $name;
    protected $description;
    protected $type;
    protected $startPosition;
    protected $endPosition;
    protected $length;
    protected $required;
    protected $defaultValue;

    public function __construct($name, $type, $startPosition, $endPosition, $length,$required = false, $description = '', $defaultValue = '')
    {
        $this->name = $name;
        $this->type = $type;
        $this->startPosition = $startPosition;
        $this->endPosition = $endPosition;
        $this->length = $length;
        $this->required = $required;
        $this->description = $description;
        $this->defaultValue = $defaultValue;
    }


    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name,$value)
    {
        $this->$name = $value;
    }

}