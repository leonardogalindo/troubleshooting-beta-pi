<!doctype html>
<html lang="en" class="ls-theme-wine">

<head>
    <!--meta tags e CSS-->
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <?php
    require_once('meta_tags.php');
    ?>
    <title>API Registro.br</title>

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
            <form action="/server_status.php" method="post">
                <label for="hm_name">Nome da HM:</label>
                <input type="text" id="hm_name" name="hm_name" placeholder="hm9266">
                <input type="submit" value="pesquisar">
            </form>

            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                    $hm_name = $_POST['hm_name'];

                    echo '
                <iframe 
                src="http://' . urlencode($hm_name) . '.locaweb.com.br/server-status" 
                frameborder="0"
                style="height:100vh;width:calc(100vw - 340px)">
                </iframe>';
                }
            ?>

        </div>
    </main>

    <?php
    require_once('javascript.php');
    ?>

</body>

</html>