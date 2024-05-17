<?php

$url = 'http://domain.com/webservice/olt.php';

/*
// Dados que serão enviados para a ativação de uma ONT
$dados = [
    'key' => '2811c1e54a29f99941ac601d8dd169',  // Chave API, visualize essa informação em configolt.php na aba configurações
    'action' => 'activation',                   // Ação a ser executada para ativação de ONT
    'olt' => '1',                               // ID da OLT
    'model_id' => '10',                         // ID do modelo de código que será utilizado, os modelos estão em configolt.php na aba configurações na aba autorização de ONU
    'serial_number' => 'ALCLFC4D0E8F',          // Número de série da ONT
    'slot' => '1',                              // Slot da OLT
    'pon' => '4',                               // PON da OLT
    'ont' => '2',                               // Identificador da ONT na OLT
    'vlan' => '1328',                           // VLAN da ONT
    'description' => 'Descrição da ONT'         // Descrição da ONT
];

// Dados que serão enviados para a exclusão de uma ONT
$dados = [
    'key' => '2811c1e54a29f99941ac601d8dd169',  // Chave API, a mesma utilizada na ativação
    'action' => 'exclusion',                    // Ação a ser executada para exclusão de ONT
    'olt' => '1',                             // ID da OLT
    'slot' => '1',                              // Slot da OLT onde a ONT está conectada
    'pon' => '4',                               // PON da OLT onde a ONT está conectada
    'ont' => '2',                               // Identificador da ONT na OLT
];

// Dados que serão enviados para buscar por ONTs não provisionadas
$dados = [
    'key' => '2811c1e54a29f99941ac601d8dd169',  // Chave API, a mesma utilizada na ativação
    'action' => 'unprovisioned',                // Ação a ser executada para buscar por ONTs não provisionadas
    'olt' => '122'                              // ID da OLT
];


// Dados que serão enviados para buscar a próxima posição disponível
$dados = [
    'key' => '2811c1e54a29f99941ac601d8dd169',  // Chave API, a mesma utilizada na ativação
    'action' => 'search_position',              // Ação a ser executada para buscar a próxima posição disponível
    'olt' => '1',                               // ID da OLT
    'slot' => '1',                              // Slot da OLT onde a ONT está conectada
    'pon' => '1',                               // PON da OLT onde a ONT está conectada
];


// Dados que serão enviados para buscar por uma OLT (Retorna todos os dados da OLT e ONTs)
$dados = [
    'key' => '2811c1e54a29f99941ac601d8dd169',  // Chave API, a mesma utilizada na ativação
    'action' => 'search_olt',                   // Ação a ser executada para buscar OLT
    'olt' => '1',                               // ID da OLT (É necessário informa o ID ou o nome da OLT)
    'name' => 'OLT-01'                          // Nome da OLT (É necessário informa o ID ou o nome da OLT)
];
*/

// Dados que serão enviados para buscar por uma ONT (As informações são sincronizadas com a OLT)
$dados = [
    'key' => '2811c1e54a29f99941ac601d8dd169',  // Chave API, a mesma utilizada na ativação
    'action' => 'search_ont',                   // Ação a ser executada para buscar ONT
    //'olt' => '1',                             // ID da OLT (É necessário informa o ID ou o nome da OLT)
    'name' => 'OLT-01',                         // Nome da OLT (É necessário informa o ID ou o nome da OLT)
    'mac-ns' => '48475443576BAFAB'              // MAC ou NS da ONT
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
// Decodifica a resposta JSON para um array associativo e imprime na tela as ONTs retornadas "pendentes de autorização"
$data = json_decode($response, true);

// Verifica se a chave 'ONTs' existe e contém algum valor
if(isset($data['ONTs']) && is_array($data['ONTs'])) {
    echo "ONTs retornadas:<br><br>";
    foreach($data['ONTs'] as $ont) {
        echo "Slot: " . $ont['slot'] . ", PON: " . $ont['pon'] . ", Serial: " . $ont['serial'] . "<br>";
    }
} else {
    echo "Nenhuma ONT encontrada.";
}
*/
?>