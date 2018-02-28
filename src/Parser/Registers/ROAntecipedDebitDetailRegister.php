<?php

namespace PHPEDIParser\Parser\Registers;

class ROAntecipedDebitDetailRegister extends BaseRegister
{

    public function __construct()
    {
        $this->addField(new RegisterField('tipo_de_registro', 'N', 1, 1, 1, true, 'Constante “7”: identifica o tipo de registro header', '7'));
        $this->addField(new RegisterField('estabelecimento_submissor', 'N', 2, 11, 10, true, 'Número do estabelecimento e/ou filial onde a venda foi realizada.', '0'));
        $this->addField(new RegisterField('numero_unico_original_venda', 'N', 12, 33, 22, true, 'Número único do RO original da venda.', '0'));       
        $this->addField(new RegisterField('numero_ro_antecipado', 'N', 34, 40, 7, true, 'Número do RO da venda original.', '0'));
        $this->addField(new RegisterField('data_pagamento_ro_antecipado', 'N', 41, 48, 8, true, 'AAAAMMDD – Data de Pagamento do RO Antecipado.', '0'));      
        $this->addField(new RegisterField('sinal_valor_ro_antecipado', 'N', 49, 49, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_ro_antecipado', 'N', 50, 62, 13, true, 'Valor do RO antecipado.', '0'));
        $this->addField(new RegisterField('num_unico_vda_orig_ajuste', 'N', 63, 84, 22, true, 'Número único do RO da venda que originou o ajuste.', '0'));
        $this->addField(new RegisterField('num_ro_ajuste_debito', 'N', 85, 91, 7, true, 'Número do RO que apresenta os valores retidos para a operação de antecipação.', '0'));
        $this->addField(new RegisterField('data_pagamento_ajuste', 'N', 92, 99, 8, true, 'AAAAMMDD.', '0'));       
        $this->addField(new RegisterField('sinal_valor_ajuste_debito', 'N', 100, 100, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_ajuste_debito', 'N', 101, 113, 13, true, 'Valor total do débito.', '0'));
        $this->addField(new RegisterField('sinal_valor_compensado', 'N', 114, 114, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_compensado', 'N', 115, 127, 13, true, 'Valor compensado do RO antecipado.', '0'));
        $this->addField(new RegisterField('sinal_valor_saldo_ro_antecipado', 'N', 128, 128, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_saldo_ro_antecipado', 'N', 129, 141, 13, true, 'Resultado do total de débito – valor compensado.', '0'));         
    }

}
