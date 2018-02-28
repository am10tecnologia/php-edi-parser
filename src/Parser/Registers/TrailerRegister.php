<?php

namespace PHPEDIParser\Parser\Registers;

class TrailerRegister extends BaseRegister
{

    public function __construct()
    {
        $this->addField(new RegisterField('tipo_de_registro', 'N', 1, 1, 1, true, 'Constante “9”: identifica o tipo de registro trailer', '0'));
        $this->addField(new RegisterField('total_registros', 'N', 2, 12, 11, true, 'Número total de registros, os quais não incluem header e trailer.', '0'));
    }

}
