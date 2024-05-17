<?php

$url = 'http://domain.com/webservice/olt.php';

// Dados necessários que serão enviados para a exclusão de uma ONT
$dados = [
    'key' => '2811c1e54a29f99941ac601d8dd169',  // Chave API, visualize essa informação em configolt.php na aba Configurações
    'action' => 'exclusion',                    // Ação a ser executada para exclusão de ONT
    'olt' => '1',                               // ID da OLT
    'slot' => '1',                              // Slot da OLT onde a ONT está conectada
    'pon' => '4',                               // PON da OLT onde a ONT está conectada
    'ont' => '2',                               // Identificador da ONT na OLT
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
 * {"success":"ONT removed successfully"}
 *
 * Em caso de erro, a resposta será:
 * {"error":"Error message"}
 * 
 * No script PHP de exemplo, substitua 'key', 'olt', 'slot', 'pon' e 'ont' pelos valores reais que você deseja enviar.
 * Na variável $url, substitua 'http://domain.com/webservice/olt.php' pelo endereço do arquivo olt.php em seu servidor.
 */

?>