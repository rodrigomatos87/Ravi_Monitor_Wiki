<?php

$url = 'http://domain.com/webservice/olt.php';

// Dados que serão enviados para a ativação de uma ONT
$dados = [
    'key' => '2811c1e54a29f99941ac601d8dd169',  // Chave API, visualize essa informação em configolt.php na aba Configurações
    'action' => 'activation',                   // Ação a ser executada para ativação de ONT
    'olt' => '1',                               // ID da OLT
    'model_id' => '10',                         // ID do modelo de código a ser utilizado. Os modelos estão em configolt.php na aba Configurações, na seção Autorização de ONT
    'serial_number' => 'ALCLFC4D0E8F',          // Número de série da ONT
    'slot' => '1',                              // Slot da OLT
    'pon' => '4',                               // PON da OLT
    'ont' => '2',                               // Identificador da ONT na OLT
    'vlan' => '1328',                           // VLAN da ONT
    'description' => 'Descrição da ONT'         // Descrição da ONT
];

// Inicializa cURL
$ch = curl_init($url);

// Configura a requisição POST
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dados));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Executa a requisição
$response = curl_exec($ch);

// Fecha a sessão cURL
curl_close($ch);

// Exibe a resposta
echo $response;

/*
 * Exemplo de resposta:
 * {"success":"ONT activated successfully"}
 *
 * Em caso de erro, a resposta será:
 * {"error":"Error message"}
 * 
 * No script PHP de exemplo, substitua 'key', 'olt', 'model_id', 'serial_number', 'slot', 'pon', 'ont', 'vlan' e 'description' pelos valores reais que você deseja enviar.
 * Na variável $url, substitua 'http://domain.com/webservice/olt.php' pelo endereço do arquivo olt.php em seu servidor.
 */

?>