<?php

namespace PHPEDIParser\Parser\Registers;

class ARVDetailRegister extends BaseRegister
{

    public function __construct()
    {
        $this->addField(new RegisterField('tipo_de_registro', 'N', 1, 1, 1, true, 'Constante “5”: identifica o tipo de registro header', '5'));
        $this->addField(new RegisterField('estabelecimento_submissor', 'N', 2, 11, 10, true, 'Número do estabelecimento e/ou filial onde a venda foi realizada.', '0'));
        $this->addField(new RegisterField('numero_oper_antecipacao', 'N', 12, 20, 9, true, 'Número da operação de Antecipação.', '0'));       
        $this->addField(new RegisterField('data_credito', 'N', 21, 28, 8, true, 'AAAAMMDD – Data de pagamento da operação.', '0'));
        $this->addField(new RegisterField('sinal_valor_bruto_antec_avista', 'N', 29, 29, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_bruto_antec_avista', 'N', 30, 42, 13, true, 'Valor bruto da antecipação de agenda à vista.', '0'));
        $this->addField(new RegisterField('sinal_valor_bruto_antec_parcelado', 'N', 43, 43, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_bruto_antec_parcelado', 'N', 44, 56, 13, true, 'Valor bruto da antecipação de agenda do parcelado.', '0'));
        $this->addField(new RegisterField('sinal_valor_bruto_antec_electron_pre', 'N', 57, 57, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_bruto_antec_electron_pre', 'N', 58, 70, 13, true, 'Valor bruto da antecipação da agenda do Electron Pré-Datado.', '0'));
        $this->addField(new RegisterField('sinal_valor_bruto_antec_total', 'N', 71, 71, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_bruto_antec_total', 'N', 72, 84, 13, true, 'Valor bruto da antecipação das agendas à vista, parcelado e Electron Pré-Datado.', '0'));
        $this->addField(new RegisterField('sinal_valor_liquido_antec_avista', 'N', 85, 85, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_liquido_antec_avista', 'N', 86, 98, 13, true, 'Valor líquido da antecipação da agenda à vista.', '0'));
        $this->addField(new RegisterField('sinal_valor_liquido_antec_parcelado', 'N', 99, 99, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_liquido_antec_parcelado', 'N', 100, 112, 13, true, 'Valor líquido da antecipação da agenda do parcelado.', '0'));
        $this->addField(new RegisterField('sinal_valor_liquido_antec_pre', 'N', 113, 113, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_liquido_antec_pre', 'N', 114, 126, 13, true, 'Valor líquido da antecipação da agenda do parcelado.', '0'));
        $this->addField(new RegisterField('sinal_valor_liquido_total', 'N', 127, 127, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_liquido_total', 'N', 128, 140, 13, true, 'Valor líquido da antecipação das agendas à vista, parcelado e Electron Pré-Datado.', '0'));
        $this->addField(new RegisterField('taxa_desconto_antec', 'N', 141, 145, 5, true, 'Taxa de desconto comercial da antecipação.', '0'));
        $this->addField(new RegisterField('banco', 'N', 146, 149, 4, true, 'Banco no qual os valores foram depositados.', '0'));
        $this->addField(new RegisterField('agencia', 'N', 150, 154, 5, true, 'Agência na qual os valores foram depositados', '0'));
        $this->addField(new RegisterField('conta_corrente', 'A', 155, 168, 14, true, 'Conta-corrente na qual os valores foram depositados.', '0'));
        $this->addField(new RegisterField('sinal_valor_liquido_antec', 'A', 169, 169, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_liquido_antec', 'N', 170, 182, 13, true, 'Valor líquido da antecipação.', '0'));       
    }

}
