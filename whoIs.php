<!doctype html>
<html lang="en" class="ls-theme-wine">

<head>
    <!--meta tags e CSS-->
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <?php
    require_once('meta_tags.php');
    ?>
    <title>SSL Checker</title>

    <style>
        form {
            margin-top: 60px;
            margin-bottom: 60px;
        }

        ul {
            list-style: none;
        }

        li {
            font-size: 16px;
            margin-top: 19px;
            margin-bottom: 9px;
        }

        p {
            margin-top: 30px;
        }

        input {
            height: 30px;
        }

        #dominio {
            width: 340px;
            padding: 0px;
        }
    </style>
</head>

<body>

    <?php
    require_once('navbar.php');
    require_once('aside.php');

    ?>
    <script type="text/javascript" src="scripts.js?n=1"></script>

    <main class="ls-main">
        <div class="container-fluid">

            <h1>Server Status</h1>

            <form action="/sslChecker.php" method="post">
                <label for="domain">Domínio:</label>
                <input type="text" id="domain" name="domain" placeholder="locaweb.com.br">
                <input type="submit" value="pesquisar">
            </form>

            <?php

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['domain'])) {
                    $domain = $_POST['domain'];

                    $dominio = "https://www.sslshopper.com/ssl-checker.html#hostname={$domain}";

                    echo '
                    <iframe 
                        src="' . $dominio . '"
                        frameborder="0"
                        style="height: 100vh; width: calc(100vw - 340px)"
                        sandbox="allow-same-origin allow-scripts"
                    >
                    </iframe>';
                } else {
                    // Se o campo 'domain' não estiver definido, exiba uma mensagem de erro ou faça o tratamento adequado
                    echo "Erro: O campo 'domain' não está definido.";
                }
            }

            ?>

        </div>
    </main>

    <?php
    require_once('javascript.php');
    ?>

</body>

</html>