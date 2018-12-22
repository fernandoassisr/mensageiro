<?php
// Loading the XML file
$fullXML = simplexml_load_file("book.XML");
            $xml = $fullXML->NFe->infNFe;
// var_dump($xml);
var_dump($xml->children(1));
echo "<h2>".$xml->getName()."</h2><br />";
// foreach($xmls->children() as $xml)
// {
var_dump($xml->ide);
	 $dadosNfe = [
                    'nf'                  => (string) $xml->ide->nNF,
                    'serie'               => (string) $xml->ide->serie,
                    'data_hora_emissao'   => $dataHoraEmissao,
                    'id_empresa_emitente' =>  $xml->emit->CNPJ,
                    'cnpj_cpf_cliente'    => $cnpjCpfCliente,
                    'natureza_op'         => utf8_decode((string) $xml->ide->natOp),
                    'desconto'            => (string) $xml->total->ICMSTot->vDesc,
                    'icms_st'             => (string) $xml->total->ICMSTot->vST,
                    // 'id_grupo'            => post('slGrupo'),
                    'cancelada'           => $cancelada
                ];
                var_dump($dadosNfe);
// }