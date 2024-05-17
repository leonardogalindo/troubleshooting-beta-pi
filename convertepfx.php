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
    <title>Conversor SSL</title>

</head>

<body>
    <!--navbar - barra de navegação -->
    <?php
    require_once('navbar.php');
    require_once('aside.php');
    require_once('javascript.php');
    ?>
    <script type="text/javascript" src="scripts.js?n=1"></script>

    <!-- box -->
    <main class="ls-main">
        <div class="container-fluid">
            <h1 class="ls-title-intro ls-ico-text">Conversor PEM para PFX</h1>
            <div class="ls-alert-info ls-dismissable">
                <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
                <strong>Atenção:</strong> Lembre-se de quebrar as linhas da chave privada conforme a <a href="https://lwp.service-now.com/kb_view.do?sys_kb_id=f24e8d7247863150dbe77878c26d4372" target="_blank">KB0016389</a> antes de converter.<br>
            </div>


            <form method="post" class="ls-form row" data-ls-module="form">
                <fieldset>
                    <label class="ls-label col-md-8" id="certificado"><b class="ls-label-text">Certificado(.cer ou .crt)</b>
                        <textarea name="certificado" rows="4" required></textarea>
                    </label>

                    <label class="ls-label col-md-8" id="chave_privada"><b class="ls-label-text">Chave Privada(.key)</b>
                        <textarea name="chave_privada" rows="4" required></textarea>
                    </label>


                    <label class="ls-label col-md-4">
                        <b class="ls-label-text">Senha para o arquivo .pfx</b>
                        <input type="password" maxlength="20" id="password_field" name="password" required>
                    </label>
                </fieldset>

                <button type="submit" value="Converter" class="ls-btn">Converter</button>

            </form>
            <?php



            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $conteudoCertificado = $_POST['certificado'];
                $conteudoChavePrivada = $_POST['chave_privada'];
                $senhaPKCS12 = $_POST['password'];
                $certificadoInfo = openssl_x509_parse($conteudoCertificado);
                if ($certificadoInfo === false) {
                    die('<br><div class="ls-alert-danger">Falha ao analisar o certificado.</div>');
                }
                $dominioDoCertificado = $certificadoInfo['subject']['CN'];

                // Obtém a data de expiração do certificado
                $dataExpiracaoTimestamp = $certificadoInfo['validTo_time_t'];
                $dataExpiracaoFormatada = date('d/m/Y', $dataExpiracaoTimestamp);
                // Obtém a data atual
                $dataAtualTimestamp = time();

                // Compara as datas
                if ($dataAtualTimestamp > $dataExpiracaoTimestamp) {
                    echo "<br><div class='ls-alert-danger'><strong>Erro: </strong>Certificado vencido.<br>Data de expiração: $dataExpiracaoFormatada</div>";
                    die();
                }

                // Obter a chave pública correspondente ao certificado
                $chavePublica = openssl_pkey_get_public($conteudoCertificado);

                if (!$chavePublica) {
                    $erro = openssl_error_string();
                    echo "<br><div class='ls-alert-danger'>Erro ao obter chave pública do certificado: $erro</div>";
                    die();
                } else {
                    // Obter a chave privada a partir do conteúdo da chave privada
                    $chavePrivada = openssl_pkey_get_private($conteudoChavePrivada);

                    if (!$chavePrivada) {
                        $erro = openssl_error_string();
                        echo "<br><div class='ls-alert-danger'>Erro ao obter chave privada: $erro</div>";
                        die();
                    } else {
                        // Verificar se a chave privada corresponde à chave pública do certificado
                        $correspondencia = openssl_x509_check_private_key($conteudoCertificado, $chavePrivada);

                        if (!$correspondencia) {
                            echo "<br><div class='ls-alert-danger'>Este é o certificado do domínio $dominioDoCertificado. <br>A chave privada inserida não corresponde ao certificado.</div>";
                            die();
                        } else {
                            // Criar um recipiente PKCS12
                            $pkcs12 = [];

                            // Adicionar o certificado, a chave privada PKCS12
                            $result = openssl_pkcs12_export($conteudoCertificado, $pkcs12, $chavePrivada, $senhaPKCS12);

                            if (!$result) {
                                $erro = openssl_error_string();
                                echo "<br><div class='ls-alert-danger'>Erro ao exportar certificado PFX: $erro</div>";
                                die();
                            } else {
                                // Salvar o conteúdo do recipiente PKCS12 em um arquivo
                                $caminhoCertificadoPFX = 'pastapfx/' . uniqid('certificado_', true) . '.pfx';
                                $salvar = file_put_contents($caminhoCertificadoPFX, $pkcs12);

                                if ($salvar === false) {
                                    echo "<br><div class='ls-alert-danger'>Erro ao salvar o arquivo PFX.</div>";
                                    die();
                                } else {
                                    echo "<br><div class='ls-alert-success'>Conversão do SSL para o domínio $dominioDoCertificado concluída. <a href=" . $caminhoCertificadoPFX . " download>Baixe o arquivo</a></div>";
                                }
                            }
                        }

                        // Liberar os recursos
                        unset($chavePrivada);
                    }

                    // Liberar os recursos
                    unset($chavePublica);
                }
            }
            ?>
</body>

</html>