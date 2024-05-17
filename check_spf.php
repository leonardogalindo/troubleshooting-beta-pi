<!doctype html>
<html lang="en" class="ls-theme-wine">

<head>
  <!--meta tags e CSS-->
  <link rel="shortcut icon" type="image/png" href="favicon.ico" />
  <?php
  require_once('meta_tags.php');
  
  ?>
  <title>Whois</title>

  <style>
    .dns_lookup{
      padding: 7px 0 7px 0;
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

        <form action="/check_spf.php" method="post">
            <label for="domain">Digite o domínio:</label>
            <input type="text" id="domain" name="domain" required>
            <button type="submit">Verificar</button>
        </form>

            <?php

            if (isset($_POST['domain']) && !empty($_POST['domain'])) {
                $domain = $_POST['domain'];
 
                $dns_MX = dns_get_record($domain, DNS_MX);
                $dns_TXT = dns_get_record($domain, DNS_TXT);

                echo "<h3 class='dns_lookup' style='margin: 20px 0px 20px 0px;'> $domain </h2>";

                foreach ($dns_MX as $mx) {
                    echo "<h4 class='dns_lookup' style='margin-top: 6px;'>MX: $mx[target] </h4>";
                };

                foreach ($dns_TXT as $txt) {
                    if(strpos($txt['txt'], "spf") !== false){

                        echo "<h4 class='dns_lookup' style='margin: 22px 0px 22px 0px;'>TXT: $txt[txt] </h4>";

                        if(strpos($txt['txt'], "include:_spf.locaweb.com.br") !== false){
                            echo html_entity_decode('<span style="color: green;"> Contém o SPF da Locaweb! </span>');
                        } else {
                            echo html_entity_decode('<span style="color: red;"> NÃO contém o SPF da Locaweb! </span>');
                        }

                        echo "</br>";
                        echo "</br>";

                        if(strpos($txt['txt'], "-all") !== false){
                            echo html_entity_decode('<span style="color: green;"> Contém o atríbuto -all </span>');
                        } else {
                            echo html_entity_decode('<span style="color: red;"> NÃO contém o atríbuto -all </span>');
                        }
                    }
                };
            }
                
            ?>

        </div>
    </main>

    <?php
    require_once('javascript.php');
    ?>

</body>

</html>