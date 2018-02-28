<?php

namespace PHPEDIParser\Parser\Registers;

class ROAntecipedDetailRegister extends BaseRegister
{

    public function __construct()
    {
        $this->addField(new RegisterField('tipo_de_registro', 'N', 1, 1, 1, true, 'Constante “6”: identifica o tipo de registro header', '6'));
        $this->addField(new RegisterField('estabelecimento_submissor', 'N', 2, 11, 10, true, 'Número do estabelecimento e/ou filial onde a venda foi realizada.', '0'));
        $this->addField(new RegisterField('numero_oper_antecipacao', 'N', 12, 20, 9, true, 'Número da operação de Antecipação.', '0'));       
        $this->addField(new RegisterField('data_vencimento', 'N', 21, 28, 8, true, 'AAAAMMDD – Data de pagamento da operação.', '0'));
        $this->addField(new RegisterField('num_ro_antecipado', 'N', 29, 35, 7, true, 'Número do RO antecipado.', '0'));
        $this->addField(new RegisterField('parcela_antecipada', 'N', 36, 37, 2, true, 'Número da parcela antecipada no caso de RO parcelado.', '0'));
        $this->addField(new RegisterField('total_parceldas', 'N', 38, 39, 2, true, 'Quantidade de parcelas do RO.', '0'));
        $this->addField(new RegisterField('sinal_valor_bruto_orig_ro', 'N', 40, 40, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_bruto_orig_ro', 'N', 41, 53, 13, true, 'Valor bruto original do RO..', '0'));
        $this->addField(new RegisterField('sinal_valor_liquido_orig_ro', 'N', 54, 54, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_liquido_orig_ro', 'N', 55, 67, 13, true, 'Valor líquido Original do RO.', '0'));
        $this->addField(new RegisterField('sinal_valor_bruto_antec_ro', 'N', 68, 68, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_bruto_antec_ro', 'N', 69, 81, 13, true, 'Valor líquido original do RO, exceto se houver débitos programados para este RO.', '0'));
        $this->addField(new RegisterField('sinal_valor_liquido_antec_ro', 'N', 82, 82, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_liquido_antec_ro', 'N', 83, 95, 13, true, 'Valor líquido efetivamente pago ao estabelecimento, já descontada a taxa de desconto comercial da antecipação.', '0'));
        $this->addField(new RegisterField('bandeira', 'N', 96, 98, 2, true, 'Código da Bandeira – Vide Tabela VI.', '0'));
        $this->addField(new RegisterField('numero_unico_ro', 'N', 99, 120, 22, true, 'Número Único de identificação do RO', '0'));     
    }

}
