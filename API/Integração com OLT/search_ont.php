<?php

$url = 'http://domain.com/webservice/olt.php';

// Dados necessários que serão enviados para busar por informações atualizadas de uma ONT específica
$dados = [
    'key' => '2811c1e54a29f99941ac601d8dd169',  // Chave API, visualize essa informação em configolt.php na aba Configurações
    'action' => 'search_ont',                   // Ação a ser executada para buscar por uma ONT
    //'olt' => '1',                             // ID da OLT (É necessário informa o ID ou o nome da OLT)
    'name' => 'OLT-01',                         // Nome da OLT (É necessário informa o ID ou o nome da OLT)
    'mac-ns' => '48575443566BAFAB'              // MAC ou NS da ONT
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
    {
        "onts": [
            {
                "slot": "1",
                "pon": "1",
                "ont": "1",
                "description": "ONT 1",
                "rx_ont": "-10.00",
                "tx_ont": "-10.00",
                "rx_olt": "-10.00",
                "voltage": "3.30",
                "temperature": "25.00",
                "distance": "20.00",
                "biascurrent": "20.00",
                "status": "1",
                "sync_date": "2021-01-01 00:00:00"
            }
        ]
    }
 * 
 *
 * Em caso de erro, a resposta será:
 * {"error":"Error message"}
 * 
 * No exemplo acima, a resposta foi um JSON com as informações atualizadas da ONT encontrada.
 * Não esqueça de substituir 'key', 'olt' ou 'name' pelos valores reais que você deseja enviar.
 * Para localizar a ONT em questão é necessário informar o ID ou o nome da OLT. Não é necessário informar os dois.
 * Na variável $url, substitua 'http://domain.com/webservice/olt.php' pelo endereço do arquivo olt.php em seu servidor.
 */

?>