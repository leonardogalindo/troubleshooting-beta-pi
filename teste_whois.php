<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

$domain = 'learningpath.tech';
$api_url = 'https://api.api-ninjas.com/v1/whois?domain=' . urlencode($domain);
$api_key = 'C+VmsNdmUO8w3NkZFIyxUw==JRKUvLxQGGhkuIzZ';

$options = [
    'http' => [
        'header' => "X-Api-Key: $api_key"
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($api_url, false, $context);

if ($response !== false) {
    echo $response;
} else {
    $http_response_header_data = $http_response_header[0];
    list($protocol, $statusCode, $statusMessage) = explode(' ', $http_response_header_data, 3);
    echo "Error: $statusCode $statusMessage\n";
}

?>


    
</body>
</html>