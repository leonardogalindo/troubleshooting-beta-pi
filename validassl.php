<!doctype html>
<html lang="pt-br" class="ls-theme-wine">

<head>
    <!--meta tags e CSS-->
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <style>
        #domain {
            width: 250px;
            /* Defina o valor desejado para a largura do campo */
            height: 33.56px;
        }
    </style>
    <?php
    require_once('meta_tags.php');
    ?>
    <title>SSL Checker</title>

</head>

<body>
    <!--navbar - barra de navegação -->
    <?php
    require_once('navbar.php');
    require_once('aside.php');
    ?>
    <script type="text/javascript" src="scripts.js?n=1"></script>

    <!-- box -->
    <main class="ls-main">
        <div class="container-fluid">
            <h1 class="ls-title-intro ls-ico-earth">SSL Checker</h1>


            <form method="post">
                <label class="ls-label col-md-8" for="domain">Digite o domínio:</label>
                <div class="ls-prefix-group">
                    <span class="ls-label-text-prefix">https://</span>
                    <input type="text" id="domain" name="domain" placeholder="locaweb.com.br" required>
                    <button type="submit" class="ls-btn ls-ico-shaft-right">Validar SSL</button>
                </div>
            </form>

            <?php
            if (isset($_POST['domain']) && !empty($_POST['domain'])) {
                $site_url = $_POST['domain'];

                // Obtém as informações do certificado SSL
                $context = stream_context_create(["ssl" => [
                    "capture_peer_cert" => true,
                    "crypto_method" => STREAM_CRYPTO_METHOD_TLS_CLIENT,
                ]]);

                $ssl_info = stream_socket_client("ssl://$site_url:443", $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $context);

                if ($ssl_info) {

                    $cert_info = stream_context_get_params($ssl_info)["options"]["ssl"]["peer_certificate"];

                    // Verifica se o certificado é válido
                    if ($cert_info) {
                        // Convertendo o certificado para um array associativo
                        $cert_info_array = openssl_x509_parse($cert_info);
                        $valid_from = date('d-m-Y', $cert_info_array['validFrom_time_t']);
                        $valid_to = date('d-m-Y', $cert_info_array['validTo_time_t']);
                        $header = get_headers("https://$site_url");
                        $server_header = null;

                        foreach ($header as $h) {
                            if (strpos($h, 'Server:') === 0) {
                                $server_header = $h;
                                break;
                            }
                        }

                        echo '<br>';

                        // Apontamento de onde foi detectado o certificado
                        $dnsip = gethostbyname($site_url);
                        $apontamento = gethostbyaddr($dnsip);
                        echo "<strong>$site_url</strong> aponta para $dnsip<br>";
                        echo '<br>';
                        if ($apontamento == null) {
                            echo 'DNS reverso não localizado<br>';
                        }
                        if ($apontamento == $dnsip) {
                            echo 'DNS reverso não localizado<br>';
                        } else {
                            echo '<strong>DNS Reverso:</strong> ' . $apontamento . '<br>';
                        }

                        if ($server_header) {
                            $server_type = trim(str_replace('Server:', '', $server_header));
                            echo "<br><strong>Serviço Web:</strong> $server_type<br>";
                        }
                        $meta_data = stream_get_meta_data($ssl_info);

                        // Obtém o protocolo de criptografia (TLS/SSL)
                        $crypto_protocol = $meta_data['crypto']['protocol'];

                        // Obtém as versões do TLS suportadas pelo servidor
                        $supported_tls_versions = openssl_get_cipher_methods(true);

                        echo "<br><strong>Versão do TLS:</strong> $crypto_protocol<br>";

                        echo '<br>';
                        // Emisor do certificado
                        $emissor = $cert_info_array['issuer']['CN'];
                        if ($emissor == 'R3') {
                            echo "<strong>Emissor do certificado:</strong> Let's Encrypt<br>";
                        }
                        elseif ($emissor == 'AlphaSSL CA - SHA256 - G4') {
                            echo "<strong>Emissor do certificado:</strong> GlobalSign<br>";
                        } else {
                            $emissor = strtok($emissor, ' ');
                            echo "<strong>Emissor do certificado:</strong> $emissor<br>";
                        }
                        echo '<br>';
                        // Calcula quanto tempo falta para expirar em dias
                        $agora = time();
                        $tempo_restante = $cert_info_array['validTo_time_t'] - $agora;
                        $dias_restantes = floor($tempo_restante / (60 * 60 * 24));

                        echo "Faltam $dias_restantes dias para o certificado expirar.<br>";
                        echo "Certificado válido de $valid_from à $valid_to<br>";
                    }

                    fclose($ssl_info);
                }elseif($errstr == "php_network_getaddresses: getaddrinfo failed: Name or service not known"){
                    echo "<br>";
                    echo "<div class='ls-alert-danger'><strong>Erro!</strong> O domínio $site_url não possui um apontamento configurado.</div>";
                }else{
                    echo "<br>";
                    echo "<div class='ls-alert-danger'><strong>Erro!</strong> O domínio $site_url não possui um SSL válido. 
                    <a href='https://www.sslshopper.com/ssl-checker.html?hostname=$site_url' target='_blank'>Mais informações</a>";
                }
            }
            require_once('javascript.php');
            ?>
</body>

</html>