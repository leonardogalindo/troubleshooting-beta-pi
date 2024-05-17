<!doctype html>
<html lang="pt-br" class="ls-theme-wine">

<head>
    <!--meta tags e CSS-->
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <?php
    require_once('meta_tags.php');
    ?>
    <title>Extrator de key</title>

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
            <h2 class="ls-title-intro">Extrator de Chave Privada<a href="#" class="ls-ico-help ls-float-right" data-trigger="hover" data-ls-module="popover" data-placement="left" data-content="Extrai a chave privada(.key) de um arquivo .pfx"></a></h2>




            <form method="post" class="ls-form row" data-ls-module="form" enctype="multipart/form-data">
                <fieldset>
                    <label class="ls-label col-md-8" id="p12File"><b class="ls-label-text">Arquivo .pfx</b>
                        <input type="file" name="p12File" id="p12File" accept=".pfx" required>
                    </label>
                    <label class="ls-label col-md-4" id="p12Password">
                        <b class="ls-label-text">Senha do arquivo .pfx</b>
                        <input type="password" maxlength="20" id="p12Password" name="p12Password" required>
                    </label>
                </fieldset>

                <button type="submit" class="ls-btn">Extrair</button>

            </form>


            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Senha para o arquivo PFX
    $p12Password = $_POST['p12Password'];

    // Carrega o conteúdo do arquivo PFX
    $p12Contents = file_get_contents($_FILES['p12File']['tmp_name']);

    if ($_FILES['p12File']['error'] !== UPLOAD_ERR_OK) {
        die("Erro no upload do arquivo PFX. Código: " . $_FILES['p12File']['error']);
    }

    // Tente decodificar o arquivo PFX com a senha fornecida
    if (!openssl_pkcs12_read($p12Contents, $certs, $p12Password)) {
        die("Falha ao decodificar o arquivo PFX. Verifique a senha.");
    }

    // Extrair a chave privada
    $privateKey = $certs['pkey'];

    // Extrai o nome do domínio (Common Name) do certificado
    $cert_info = openssl_x509_parse($certs['cert']);
    $domain_name = isset($cert_info['subject']['CN']) ? $cert_info['subject']['CN'] : "N/A";

    // Cria um arquivo na pasta 'key' com um nome único
    $filename = 'key/chave_privada_' . uniqid() . '.key';
    file_put_contents($filename, $privateKey);

    if ($domain_name == 'N/A'){
        echo "<br><div class='ls-alert-success'>Extração da chave privada concluída. <a href=" . $filename . " download>Baixe o arquivo</a></div>";
    }else{
    echo "<br><div class='ls-alert-success'>Domínio: $domain_name <br>Extração da chave privada concluída. <a href=" . $filename . " download>Baixe o arquivo</a></div>";
    }
    exit;
}
?>




        </div>
    </main>
</body>

</html>