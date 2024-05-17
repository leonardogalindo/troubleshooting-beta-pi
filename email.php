<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php

        // Informações de autenticação
        $siteUrl = 'https://locawebsa-my.sharepoint.com';
        $username = 'leonardo.grando@locaweb.com.br';
        $password = '';

        // URL da API para acessar a lista de dados
        $listUrl = $siteUrl . "/_api/web/lists/getbytitle('{Migração}')/items";

        // Cabeçalhos da requisição
        $headers = array(
            'Authorization: Basic ' . base64_encode("$username:$password"),
            'Accept: application/json;odata=verbose'
        );

        // Enviar requisição para obter os dados da lista
        $ch = curl_init($listUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);


        // Processar a resposta JSON
        $data = json_decode($response, true);

        echo $data;
        print_r($data);

        // Exemplo de processamento dos dados
        if ($data && isset($data['d']['results'])) {
            $results = $data['d']['results'];
            foreach ($results as $item) {
                echo "ID: " . $item['ID'] . ", Título: " . $item['Title'] . "<br>";
            }
        } else {
            echo "Nenhum dado encontrado.";
        }

    ?>
    
</body>
</html>