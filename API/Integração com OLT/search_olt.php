<?php

$url = 'http://domain.com/webservice/olt.php';

// Dados necessários que serão enviados para a busar por ONTs pendentes de autorização
$dados = [
    'key' => '2811c1e54a29f99941ac601d8dd169',  // Chave API, visualize essa informação em configolt.php na aba Configurações
    'action' => 'search_olt',                   // Ação a ser executada para buscar dados da OLT e todas as ONTs provisionadas
    'olt' => '10',                              // ID da OLT (É necessário informa o ID ou o nome da OLT)
    //'name' => 'OLT-01'                        // Nome da OLT (É necessário informa o ID ou o nome da OLT)
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
        "olts": [
            {
                "id": "1",
                "name": "OLT-01",
                "execution_cronogram": "Run every 5 minutes",
                "ip": "192.168.2.1",
                "brand": "Huawei",
                "sync_date": "2021-08-01 12:00:00",
                "onts": [
                    {
                        "slot": "1",
                        "pon": "1",
                        "ont": "1",
                        "description": "ONT-01",
                        "mac-sn": "00:00:00:00:00:01",
                        "rx_ont": "-10",
                        "tx_ont": "-10",
                        "rx_olt": "-10",
                        "voltage": "3.3",
                        "temperature": "25",
                        "distance": "20",
                        "biascurrent": "10",
                        "status": "1",
                        "sync_date": "2021-08-01 12:00:00"
                    },
                    {
                        "slot": "1",
                        "pon": "1",
                        "ont": "2",
                        "description": "ONT-02",
                        "mac-sn": "00:00:00:00:00:02",
                        "rx_ont": "-10",
                        "tx_ont": "-10",
                        "rx_olt": "-10",
                        "voltage": "3.3",
                        "temperature": "25",
                        "distance": "20",
                        "biascurrent": "10",
                        "status": "1",
                        "sync_date": "2021-08-01 12:00:00"
                    }
                ]
            }
        ]
    }
 * 
 *
 * Em caso de erro, a resposta será:
 * {"error":"Error message"}
 * 
 * No exemplo acima, a resposta foi um JSON com as informações da OLT e todas as ONTs provisionadas.
 * Não esqueça de substituir 'key', 'olt' ou 'name' pelos valores reais que você deseja enviar.
 * Para localizar a OLT em questão é necessário informar o ID ou o nome da OLT. Não é necessário informar os dois.
 * Na variável $url, substitua 'http://domain.com/webservice/olt.php' pelo endereço do arquivo olt.php em seu servidor.
 */

?>