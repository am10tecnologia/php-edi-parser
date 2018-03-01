<?php

namespace PHPEDIParser\Parser;

class File
{
    private $txtReader;
    private $registers = [];

    public function __construct(\PHPEDIParser\TxtReader $txtReader)
    {
        $this->txtReader = $txtReader;
    }

    /**
     * Populates the registers array based on EDI file content     * 
     */

    private function parseEDIFile()
    {
        $ediFileContentArray = $this->txtReader->toArray();       

        foreach ($ediFileContentArray as $line) {
            $register = $line[0];
            switch ($register) {
                case \PHPEDIParser\Parameters::HEADER_REGISTER:
                    $register = new \PHPEDIParser\Parser\Registers\HeaderRegister();
                    $this->registers['header'] = $register->getFieldsValues($line);
                    break;
                case \PHPEDIParser\Parameters::RO_DETAIL_REGISTER:
                    $register = new \PHPEDIParser\Parser\Registers\RODetailRegister();
                    $this->registers['ro_detail'][] = $register->getFieldsValues($line);
                    break;
                case \PHPEDIParser\Parameters::CV_DETAIL_REGISTER:
                    $register = new \PHPEDIParser\Parser\Registers\CVDetailRegister();
                    $this->registers['cv_detail'][] = $register->getFieldsValues($line);
                    break;
                case \PHPEDIParser\Parameters::ARV_DETAIL_REGISTER:
                    $register = new \PHPEDIParser\Parser\Registers\ARVDetailRegister();
                    $this->registers['arv_detail'][] = $register->getFieldsValues($line);
                    break;
                case \PHPEDIParser\Parameters::RO_ANTECIPED_DETAIL_REGISTER:
                    $register = new \PHPEDIParser\Parser\Registers\ROAntecipedDetailRegister();
                    $this->registers['ro_antec_detail'][] = $register->getFieldsValues($line);
                    break;
                case \PHPEDIParser\Parameters::RO_ANTECIPED_DEBIT_DETAIL_REGISTER:
                    $register = new \PHPEDIParser\Parser\Registers\ROAntecipedDebitDetailRegister();
                    $this->registers['ro_antec_debit_detail'][] = $register->getFieldsValues($line);
                    break;
                case \PHPEDIParser\Parameters::TRAILER_REGISTER:
                    $register = new \PHPEDIParser\Parser\Registers\TrailerRegister();
                    $this->registers['trailer'] = $register->getFieldsValues($line);
                    break;
            }
        }        
    }

    /**
     * Validate number of registers
     * @return boolean
     */
    private function validateTrailer()
    {
        $qtdRegisters = $this->countRegisters();
        $qtdTrailer = (int) $this->registers["trailer"]["total_registros"];

        if ($qtdRegisters != $qtdTrailer) {
            throw new \Exception("The number of registers especified in the trailer {$qtdTrailer} is different from the calculated value {$qtdRegisters}");
        }

        return true;
    }

    /**
     * Return the number of registers
     * @return integer
     */

    private function countRegisters()
    {
        $roDetail = isset($this->registers['ro_detail']) ? count($this->registers['ro_detail']) : 0;
        $cvDetail = isset($this->registers['cv_detail']) ? count($this->registers['cv_detail']) : 0;
        $arvDetail = isset($this->registers['arv_detail']) ? count($this->registers['arv_detail']) : 0;
        $roAntecDetail = isset($this->registers['ro_antec_detail']) ? count($this->registers['ro_antec_detail']) : 0;
        $roAntecDebitDetail = isset($this->registers['ro_antec_debit_detail']) ? count($this->registers['ro_antec_debit_detail']) : 0;
        return $roDetail + $cvDetail + $arvDetail + $roAntecDetail + $roAntecDebitDetail;
    }

    /**
     * Return the EDI parsed in array
     * @return array
     */
    public function getEDI()
    {
        $this->parseEDIFile();
        if ($this->validateTrailer()) {
            return $this->registers;
        }

        return false;
    }

}
