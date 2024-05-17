<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar 3 domínios do servidor</title>
</head>

<body>

    <h1>Teste</h1>

    <form action="/tres_sites" method="post">
        <input type="text" name="ip" id="ip" value="" placeholder="IP: 10.0.0.1">
        <input type="submit" value="Enviar">
    </form>

    <?php
    $sites = [];
    $sitesOk = [];
    $ip_site = $_POST['ip'];

    if (isset($_POST['ip'])) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://website.informer.com/$ip_site");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $resposta = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Erro cURL: ' . curl_error($ch);
        }

        $dom = new DOMDocument();

        $dom->loadHTML($resposta);
        $links = $dom->getElementsByTagName('a');
        foreach ($links as $link) {
            if ($link->nodeValue !== null && trim($link->nodeValue) !== "") {
                if (strpos($link->nodeValue, '.com') !== false || strpos($link->nodeValue, '.net') !== false) {
                    array_push($sites, $link->nodeValue);
                }
            }
        }

        curl_close($ch);

        foreach ($sites as $site) {
            $get_ip = dns_get_record($site, DNS_A);
            $ip = $get_ip[0]['ip'];
            if ($ip === $ip_site) {
                array_push($sitesOk, [$ip, $site]);
                if (count($sitesOk) >= 3) {
                    break;
                }
            }
        }

        foreach ($sitesOk as $site) {
            echo "$site[1] - $site[0] <a href='http://$site[1]' target='_blank'>Acessar</a>";
            echo "</br>";
        }
    }
    ?>

</body>

</html>