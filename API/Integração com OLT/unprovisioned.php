<?php

$url = 'http://domain.com/webservice/olt.php';

// Dados necessários que serão enviados para a busar por ONTs pendentes de autorização
$dados = [
    'key' => '2811c1e54a29f99941ac601d8dd169',  // Chave API, visualize essa informação em configolt.php na aba Configurações
    'action' => 'unprovisioned',                // Ação a ser executada para buscar por ONTs não provisionadas
    'olt' => '1'                                // ID da OLT
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
        "success": "search completed successfully",
        "ONTs": [
            {
                "slot": "1",
                "pon": "1",
                "serial": "48575443566BAFAB"
            },
            {
                "slot": "1",
                "pon": "2",
                "serial": "48575443566BAFAC"
            }
        ]
    }
 * 
 *
 * Em caso de erro, a resposta será:
 * {"error":"Error message"}
 * 
 * No exemplo acima, a resposta foi um sucesso e retornou duas ONTs não provisionadas na OLT 1.
 * Não esqueça de substituir 'key' e 'olt' pelos valores reais que você deseja enviar.
 * Na variável $url, substitua 'http://domain.com/webservice/olt.php' pelo endereço do arquivo olt.php em seu servidor.
 */

?>