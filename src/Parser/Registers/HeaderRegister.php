<?php

namespace PHPEDIParser\Parser\Registers;

class HeaderRegister extends BaseRegister {

    public function __construct()
    {
        $this->addField(new RegisterField('tipo_de_registro','N', 1, 1, 1,true,'Constante “0”: identifica o tipo de registro header', '0'));
        $this->addField(new RegisterField('estabelecimento_matriz','N', 2, 11, 10,true,'Número do estabelecimento matriz da cadeia de extrato eletrônico.', '0'));
        $this->addField(new RegisterField('data_processamento','N', 12, 19, 8,true,'AAAAMMDD – data em que o arquivo foi gerado.', '0'));   
        $this->addField(new RegisterField('periodo_inicial','N', 20, 27, 8,true,'AAAAMMDD –  menor data de captura encontrada no movimento.', '0'));   
        $this->addField(new RegisterField('periodo_final','N', 28, 35, 8,true,'AAAAMMDD – maior data de captura encontrada no movimento.', '0'));     
        $this->addField(new RegisterField('sequencia','N', 36, 42, 7,true,'Número sequencial do arquivo. Nos casos de recuperação este dado será enviado como 9999999.', '0'));     
        $this->addField(new RegisterField('adquirente','A', 43, 47, 5,true,'Constante Cielo.', '0'));     
        $this->addField(new RegisterField('opcao_extrato','N', 48, 49, 2,true,'Tipo de arquivo.', '0'));     
        $this->addField(new RegisterField('van','A', 50, 50, 1,true,'I – OpenText (antiga GXS), P – TIVIT.', '0'));     
        $this->addField(new RegisterField('caixa_postal','A', 51, 70, 20,true,'Informação obtida no formulário de cadastro na VAN.', '0'));    
        $this->addField(new RegisterField('versao_layout','N', 71, 73, 3,true,'Constante 001.', '0'));            
    }


}