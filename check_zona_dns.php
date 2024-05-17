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
  <!--navbar - barra de navegação -->
  <?php
  require_once('navbar.php');
  require_once('aside.php');
  ?>
  <script type="text/javascript" src="scripts.js?n=1"></script>

<!-- box -->
<main class="ls-main">
    <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-search">Whois</h1>

        <form action="/check_zona_dns.php" method="post">
            <label for="domain">Digite o domínio:</label>
            <input type="text" id="domain" name="domain" required>
            <button type="submit">Verificar</button>
        </form>

        </br>
        </br>

        <?php
        if (isset($_POST['domain']) && !empty($_POST['domain'])) {
            $domain = $_POST['domain'];
            $dns_IP = gethostbyname($domain);
            $dns_host = gethostbyaddr($dns_IP);
            $dns_MX = dns_get_record($domain, DNS_MX);
            $dns_NS = dns_get_record($domain, DNS_NS);
            $dns_SOA = dns_get_record($domain, DNS_SOA);
            $dns_A = dns_get_record($domain, DNS_A);
            $dns_TXT = dns_get_record($domain, DNS_TXT);
            $dns_CNAME = dns_get_record($domain, DNS_CNAME);

            echo "<h3 class='dns_lookup'>Dominio: $domain </h2>";

            foreach ($dns_A as $tipoA) {
              if ($tipoA == null){
                echo 'entrada não localizada';
              }
              else{
                echo "<h4 class='dns_lookup'>Tipo A: $tipoA[ip] </h4>";
              }
            };

            echo "<h4 class='dns_lookup'>IP Reverso: $dns_host </h4>";

            foreach ($dns_MX as $mx) {
                echo "<h4 class='dns_lookup'>MX: $mx[target] </h4>";
            };

            foreach ($dns_NS as $ns) {
                echo "<h4 class='dns_lookup'>NS: $ns[target] </h4>";
            };

            foreach ($dns_SOA as $soa) {
                echo "<h4 class='dns_lookup'>SOA: $soa[mname] $soa[rname] $soa[serial] $soa[refresh] $soa[retry] </h4>";
            };

            foreach ($dns_TXT as $txt) {
                echo "<h4 class='dns_lookup'>TXT: $txt[txt] </h4>";
            };

            // Informações sobre sites que compartilham o mesmo IP
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://website.informer.com/$dns_IP");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $resposta = curl_exec($ch);

            if (curl_errno($ch)) {
                echo 'Erro cURL: ' . curl_error($ch);
            }

            $dom = new DOMDocument();
            $dom->loadHTML($resposta);
            $links = $dom->getElementsByTagName('a');

            $sitesWithSameIP = [];

            foreach ($links as $link) {
                if ($link->nodeValue !== null && trim($link->nodeValue) !== "") {
                    if (strpos($link->nodeValue, '.com') !== false || strpos($link->nodeValue, '.net') !== false) {
                        array_push($sitesWithSameIP, $link->nodeValue);
                        if (count($sitesWithSameIP) >= 5) {
                            break; // Limita a 5 sites
                        }
                    }
                }
            }

            curl_close($ch);

            echo "<h4 class='dns_lookup'>Sites com o mesmo IP (limitado a 5):</h4>";
            foreach ($sitesWithSameIP as $site) {
                echo "<p style='color: #001f3f;'>$site</p>";
            }
        }
        ?>

      </br>
      </br>

      
    </div>
    <footer class="ls-footer" role="contentinfo">
  <nav class="ls-footer-menu">
      <h2 class="ls-title-footer">suporte e ajuda</h2>
      <ul class="ls-footer-list">
        <li>
          <a href="https://lwp.service-now.com/" target="_blank" class="bg-customer-support">
            <span class="visible-lg">Service Now</span>
          </a>
        </li>
        <li>
          <a href="https://locaweb.beedoo.io/feed" target="_blank" class="bg-my-tickets">
            <span class="visible-lg">Beedoo</span>
          </a>
        </li>
        <li>
          <a href="https://locaweb.com.br/ajuda" target="_blank" class="bg-help-desk">
            <span class="visible-lg">Ajuda Locaweb</span>
          </a>
        </li>
        <li>
          <a href="https://statusblog.locaweb.com.br/" target="_blank" class="bg-statusblog">
            <span class="visible-lg">Statusblog</span>
          </a>
        </li>
      </ul>
  </nav>
  <div class="ls-footer-info">
    <span class="last-access ls-ico-screen"><strong>Último acesso: </strong>99/99/9999 99:99:99</span>
    <div class="set-ip"><strong>IP:</strong> 000.00.00.000</div>
    <p class="ls-copy-right">Projeto Integrador.</p>
  </div>
</footer>
  </main>

  <!--footer com js e notifications-->
  <?php
  require_once('javascript.php');
  ?>



</body>

</html>
