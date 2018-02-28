<?php

namespace PHPEDIParser\Parser\Registers;

class BaseRegister
{

    protected $registerFields = [];

    public function getFieldsValues($line)
    {
        $fields = [];
        foreach ($this->registerFields as $field) {
            $fields[$field->name] = $this->getFieldValue($line, $field);
        }
        return $fields;
    }

    private function getFieldValue($line, RegisterField $field)
    {
        $text = substr($line, $field->startPosition - 1, $field->length);
        if (($text === '') and $field->required) {
            throw new \Exception("Required field {$field->name} is missing on line {$line}");
        }
        return $text;
    }

    protected function addField(RegisterField $field)
    {
        $this->registerFields[] = $field;
    }

}
