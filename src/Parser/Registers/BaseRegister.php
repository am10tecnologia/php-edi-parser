<?php

namespace PHPEDIParser\Parser\Registers;

class BaseRegister
{

    protected $registerFields = [];

    /**
     * Return the field values in an array
     * @param string $line Line String
     * @return array
     */

    public function getFieldsValues($line)
    {
        $fields = [];
        foreach ($this->registerFields as $field) {
            $fields[$field->name] = $this->getFieldValue($line, $field);
        }
        return $fields;
    }

    /**
     * Return the field value
     * @param string $line Line String
     * @param RegisterField $field Register Field Object
     * @return mixed Field Value
     */

    private function getFieldValue($line, RegisterField $field)
    {
        $text = substr($line, $field->startPosition - 1, $field->length);
        if (($text === '') and $field->required) {
            throw new \Exception("Required field {$field->name} is missing on line {$line}");
        }
        return $this->formatValue($text, $field->type);
    }

    /**
     * Format the field value based in the field type
     * @param string $value
     * @param string $type Type of data (N = number, D = date, H = hour, F = float)
     * @return mixed Formatted Value
     */
    private function formatValue($value, $type)
    {
        switch ($type) {
            case 'N':
            default:
                return $value;
                break;
            case 'D':
                $date = \DateTime::createFromFormat("Ymd", $value);
                if ($date instanceof \DateTime) {
                    return $date->format("Y-m-d");
                }
                return '0000-00-00';
                break;
            case 'H':
                $date = \DateTime::createFromFormat("His", $value);
                if ($date instanceof \DateTime) {
                    return $date->format("H:i:s");
                }
                return '00:00:00';
                break;
            case 'F':
                $number = substr($value, 0, strlen($value) - 2) . '.' . substr($value, strlen($value) - 2, 2);
                $float = (float) \number_format($number, 2, '.', '');
                return $float;
                break;
        }
    }

    /**
     * Add a new field to register
     * @param RegisterField Register field object
     */

    protected function addField(RegisterField $field)
    {
        $this->registerFields[] = $field;
    }

}
