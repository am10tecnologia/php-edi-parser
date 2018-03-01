<?php

namespace PHPEDIParser\Parser\Registers;

class CVDetailRegister extends BaseRegister
{

    public function __construct()
    {
        $this->addField(new RegisterField('tipo_de_registro', 'N', 1, 1, 1, true, 'Constante “2”: identifica o tipo de registro header', '2'));
        $this->addField(new RegisterField('estabelecimento_submissor', 'N', 2, 11, 10, true, 'Número do estabelecimento e/ou filial onde a venda foi realizada.', '0'));
        $this->addField(new RegisterField('numero_ro', 'N', 12, 18, 7, true, 'Número do resumo de operação.', '0'));
        $this->addField(new RegisterField('numero_cartao', 'A', 19, 37, 19, true, 'Número do cartão truncado.', '0'));
        $this->addField(new RegisterField('data_venda', 'D', 38, 45, 8, true, 'AAAAMMDD – Data em que a venda ou o ajuste foi realizado.', '0'));
        $this->addField(new RegisterField('sinal_valor_compra', 'N', 46, 46, 1, true, '+ = credito, - = debito.', '0'));
        $this->addField(new RegisterField('valor_compra', 'F', 47, 59, 13, true, 'Valor da compra ou da parcela que foi liberada, no caso de venda parcelada na loja.', '0'));
        $this->addField(new RegisterField('parcela', 'N', 60, 61, 2, true, 'No caso de venda parcelada, será formatado com o número da parcela que está sendo liberada. No caso de venda à vista, será formatado com zeros.', '0'));
        $this->addField(new RegisterField('total_parcelas', 'N', 62, 63, 2, true, 'Número total de parcelas da venda. No caso de venda à vista, será formatado com zero.', '0'));
        $this->addField(new RegisterField('motivo_rejeicao', 'N', 64, 66, 3, true, 'Vide Tabela VIII, caso não possua rejeição o campo é formatado em branco.', '0'));
        $this->addField(new RegisterField('codigo_autorizacao', 'A', 67, 72, 6, true, 'Código de autorização da transação. Nao é unico', '0'));
        $this->addField(new RegisterField('tid', 'A', 73, 92, 20, true, 'Identificação da transação realizada no comércio eletrônico ou mobile payment.', '0'));
        $this->addField(new RegisterField('nsu_doc', 'A', 93, 98, 6, true, 'Número sequencial, também conhecido como DOC (número do documento). Nao é unico', '0'));
        $this->addField(new RegisterField('valor_complementar', 'F', 99, 111, 13, true, 'Valor da transação de Saque com cartão de Débito ou AgroElectron de acordo com indicador de produto do RO.', '0'));
        $this->addField(new RegisterField('dig_cartao', 'N', 112, 113, 2, true, 'Número de Dígitos do Cartão.', '0'));
        $this->addField(new RegisterField('valor_total_venda', 'F', 114, 126, 13, true, 'O valor total da venda parcelada na loja.', '0'));
        $this->addField(new RegisterField('valor_proxima_parcela', 'F', 127, 139, 13, true, 'O valor das próximas parcelas da venda é enviado somente no arquivo de vendas.', '0'));
        $this->addField(new RegisterField('numero_nota_fiscal', 'N', 140, 148, 9, true, 'Número da nota fiscal para estabelecimentos que capturam esta informação no POS.', '0'));
        $this->addField(new RegisterField('ind_cartao_emi_exterior', 'N', 149, 152, 4, true, '0000 - Nao atribuido, 0001 - Emi Brasil, 0002 - Emi Exterior.', '0'));
        $this->addField(new RegisterField('num_logico_terminal', 'N', 153, 160, 8, true, 'Número lógico do terminal onde foi efetuada a venda.', '0'));
        $this->addField(new RegisterField('id_taxa_emb_valor_entrada', 'A', 161, 162, 2, true, 'TX = taxa embarque, VE = valor entrada', '0'));
        $this->addField(new RegisterField('codigo_pedido', 'N', 163, 182, 20, true, 'Referência ou código do pedido informado em uma transação mobile payment e comércio eletrônico.', '0'));
        $this->addField(new RegisterField('hora_transacao', 'H', 183, 188, 6, true, 'Hora da transação apresentada no formado HHMMSS.', '0'));
        $this->addField(new RegisterField('numero_unico_transacao', 'N', 189, 217, 29, true, 'Número Único que identifica cada transação.', '0'));
        $this->addField(new RegisterField('ind_cielo_promo', 'A', 218, 218, 1, false, 'Identificador do Produto Cielo Promo.', '0'));     
    }

}
