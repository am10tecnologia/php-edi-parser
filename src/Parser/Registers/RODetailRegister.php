<?php

namespace PHPEDIParser\Parser\Registers;

class RODetailRegister extends BaseRegister
{

    public function __construct()
    {
        $this->addField(new RegisterField('tipo_de_registro', 'N', 1, 1, 1, true, 'Constante “1”: identifica o tipo de registro header', '0'));
        $this->addField(new RegisterField('estabelecimento_submissor', 'N', 2, 11, 10, true, 'Número do estabelecimento e/ou filial onde a venda foi realizada.', '0'));
        $this->addField(new RegisterField('numero_ro', 'N', 12, 18, 7, true, 'Número do resumo de operação.', '0'));
        $this->addField(new RegisterField('parcela', 'N', 19, 20, 2, true, 'Número da parcela que está sendo liberada na data do envio do arquivo.', '0'));
        $this->addField(new RegisterField('filler', 'A', 21, 21, 1, true, '/ = vd parceladas, a - aceleracao de parcelas, " " = demais situacoes', '0'));
        $this->addField(new RegisterField('plano', 'A', 22, 23, 2, true, 'Número de parcelas.', '0'));
        $this->addField(new RegisterField('tipo_de_transacao', 'N', 24, 25, 2, true, 'Código que identifica a transação.', '0'));
        $this->addField(new RegisterField('data_apresentacao', 'D', 26, 31, 6, true, 'AAMMDD – Data em que o RO foi transmitido para a Cielo.', '0'));
        $this->addField(new RegisterField('data_prevista_pagamento', 'D', 32, 37, 6, true, 'AAMMDD – Data prevista de pagamento.', '0'));
        $this->addField(new RegisterField('data_envio_banco', 'D', 38, 43, 6, true, 'AAMMDD – Data em que o arquivo de pagamento foi enviado ao banco.', '0'));
        $this->addField(new RegisterField('sinal_valor_bruto', 'A', 44, 44, 1, true, '+ = credito, - = debito', '0'));
        $this->addField(new RegisterField('valor_bruto', 'F', 45, 57, 13, true, 'Somatória dos valores de venda.', '0'));
        $this->addField(new RegisterField('sinal_comissao', 'N', 58, 58, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_comissao', 'F', 59, 71, 13, true, 'Valor da comissão descontada sobre as vendas.', '0'));
        $this->addField(new RegisterField('sinal_valor_rejeitado', 'N', 72, 72, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_rejeitado', 'F', 73, 85, 13, true, 'Se houver rejeição, será preenchido com a somatória das transações rejeitadas.', '0'));
        $this->addField(new RegisterField('sinal_valor_liquido', 'N', 86, 86, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_liquido', 'F', 87, 99, 13, true, 'Valor das vendas descontado o valor da comissão.', '0'));
        $this->addField(new RegisterField('banco', 'N', 100, 103, 4, true, 'Código do banco no qual os valores foram depositados.', '0'));
        $this->addField(new RegisterField('agencia', 'N', 104, 108, 5, true, 'Código da agência na qual os valores foram depositados.', '0'));
        $this->addField(new RegisterField('conta_corrente', 'N', 109, 122, 14, true, 'Código da conta-corrente na qual os valores foram depositados.', '0'));
        $this->addField(new RegisterField('status_pagamento', 'N', 123, 124, 2, true, 'Identifica a situação em que se encontram os créditos enviados ao banco.', '0'));
        $this->addField(new RegisterField('quantidade_cv_aceitos', 'N', 125, 130, 6, true, 'Quantidades de vendas aceitas no RO.', '0'));
        $this->addField(new RegisterField('quantidade_cv_rejeitados', 'N', 133, 138, 6, true, 'Quantidade de vendas rejeitadas no RO.', '0'));
        $this->addField(new RegisterField('identificador_revenda_aceleracao', 'A', 139, 139, 1, false, 'R = revenda, A = Aceleracao, " " = brancos', '0'));
        $this->addField(new RegisterField('data_captura_transacao', 'D', 140, 145, 6, true, 'AAMMDD - Data em que a transação foi capturada da pela Cielo.', '0'));     
        $this->addField(new RegisterField('origem_ajuste', 'A', 146, 147, 2, true, '02 = Ajuste Credito, 03 = Ajuste debito, 04 = Ajuste aluguel.', '0'));   
        $this->addField(new RegisterField('valor_complementar', 'F', 148, 160, 13, true, 'Valor do saque quando o produto for igual a “36” ou valor do Agro Electron para transações dos produtos “22”, “23” ou “25” apresentados na Tabela IV.', '0'));   
        $this->addField(new RegisterField('identificador_antecipacao', 'A', 161, 161, 1, false, '" " = Nao antecipado, A = Antec Cielo, C = Antec Banco.', '0'));   
        $this->addField(new RegisterField('numero_operacao_antecipacao', 'N', 162, 170, 9, true, 'Identifica o número da operação de Antecipação apresentada no registro tipo 5.', '0'));   
        $this->addField(new RegisterField('sinal_valor_bruto_antecipado', 'A', 171, 171, 1, true, '+ = credito, - = debito.', '0'));   
        $this->addField(new RegisterField('valor_bruto_antecipado', 'F', 172, 184, 13, true, 'Valor bruto antecipado, fornecido quando o RO for antecipado/cedido.', '0'));   
        $this->addField(new RegisterField('bandeira', 'N', 185, 187, 3, true, 'Código da Bandeira – vide tabela VI.', '0'));   
        $this->addField(new RegisterField('numero_unico_ro', 'N', 188, 209, 22, true, 'Número Único de identificação do RO.', '0'));   
        $this->addField(new RegisterField('taxa_comissao', 'F', 210, 213, 4, true, 'Percentual de comissão aplicado no valor da transação.', '0'));   
        $this->addField(new RegisterField('tarifa', 'F', 214, 218, 5, true, 'Tarifa cobrada por transação.', '0'));   
        $this->addField(new RegisterField('taxa_de_garantia', 'N', 219, 222, 4, true, 'Percentual de desconto aplicado sobre transações Electron Pré-Datado.', '0'));   
        $this->addField(new RegisterField('meio_de_captura', 'N', 223, 224, 2, true, 'Vide tabela VII.', '0'));   
        $this->addField(new RegisterField('numero_logico_terminal', 'N', 225, 232, 8, true, 'Número lógico do terminal onde foi efetuada a venda.', '0')); 
        $this->addField(new RegisterField('codigo_produto', 'N', 233, 235, 3, true, 'Código que identifica o produto – vide Tabela IV.', '0')); 
        $this->addField(new RegisterField('matriz_de_pagamento', 'N', 236, 245, 10, true, 'Estabelecimento matriz da cadeia centralizada de pagamento.', '0')); 
    }

}
