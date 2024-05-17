<!doctype html>
<html lang="en" class="ls-theme-wine">

<head>
  <!--meta tags e CSS-->
  <link rel="shortcut icon" type="image/png" href="favicon.ico" />
  <?php require_once('meta_tags.php'); ?>
  <title>WhoIs</title>

  <style>
    * {
      list-style: none;
      font-size: 16px;
    }

    h1 {
      font-size: 26px;
    }

    h4 {
      padding: 6px 0px;
    }

    .div_links_uteis {
      margin: 40px 0px;
      padding: 40px 0xp;
      border-bottom: 2px solid gray;
    }

    .div_links_uteis div {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      padding: 10px 0px;
    }

    .div_links_uteis a,
    .div_links_uteis input[type='submit'] {
      display: flex;
      justify-content: center;
      align-items: center;
      min-width: 100px;
      padding: 10px 12px;
      border: 1px solid gray;
      border-radius: 8px;
      background-color: #513335;
      color: white;
      cursor: pointer;
    }

    .div_links_uteis a:hover {
      background-color: #80595c;
    }

    .div_origem {
      display: grid;
      grid-template-columns: 1.5fr 2fr 1fr;
      grid-gap: 10px;
    }

    .div_spf_dmarc,
    .div_registro_br,
    .div_server_info,
    .div_cinco_site,
    .div_nslookup,
    .div_cname {
      border: 1px solid #ddd;
      padding: 10px;
    }

    .div_server_info {
      grid-column: span 3;
    }

    .div_registro_br,
    .div_spf_dmarc,
    .div_cinco_site {
      grid-column: span 1;
    }

    .div_nslookup,
    .div_cname {
      grid-column: span 3;
    }

    .dns_lookup {
      padding: 7px 0 7px 0;
    }

    form input[type='submit'] {
      padding: 7px 10px;
      border: none;
      border-radius: 8px;
      background-color: #755658;
      color: white;
    }

    form input[type='submit']:hover {
      cursor: pointer;
      background-color: #63494a;
    }

    form input[type='text'] {
      min-width: 300px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      color: black;
    }

    table tr td {
      padding: 14px 26px 14px 26px;
      border: 1px solid #ddd;
      max-width: 70vw;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: pre-wrap;
    }

    tr:nth-child(even) {
      background-color: #f0f0f0;
      /* Cor para linhas pares */
    }

    tr:nth-child(odd) {
      background-color: #e0e0e0;
      /* Cor para linhas ímpares */
    }

    ul li {
      padding: 6px 0px;
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


      <div class="div_links_uteis">
        <h4>Links úteis:</h4>
        <div>
          <div>
            <a href="http://hm9266.locaweb.com.br/server-info" target="_blank">Server Info</a>
          </div>
          <div>
            <a href="https://smartlayer.windows.locaweb.com.br" target="_blank">Smart Layer</a>
          </div>
          <div>
            <a href="https://cegonha.locaweb.com.br/groups/85" target="_blank">Cegonha</a>
          </div>
          <div>
            <a href="https://cal.locaweb.com.br/" target="_blank">CAL</a>
          </div>
          <div>
            <a href="https://hank.locaweb.com.br/" target="_blank">Hank</a>
          </div>
          <div>
            <a href="http://dinesh0005.hospedagem.locaweb.com.br/server-status" target="_blank">Dinesh Status</a>
          </div>
          <div>
            <a href="https://statusblog.locaweb.com.br/" target="_blank">Status Blog</a>
          </div>
          <div>
            <a href="http://painel-atendimen1.hospedagemdesites.ws/kbs_servicenow.php" target="_blank">KBs Service Now</a>
          </div>
        </div>
      </div>

      <div style="background-color: #f5f5f5; border-radius: 6px; padding: 6px 2px; padding-left: 10px;">
        <h4 style="padding-bottom: 30px;">Informações sobre domínios</h4>

        <form action="/dashboard.php" method="post">
          <label for="domain">Digite o domínio:</label>
          <input type="text" id="domain" name="domain" placeholder="Ex.: dominio.com.br" required>
          <input type="submit" value="Verificar">
        </form>
      </div>

      </br>

      <div>
        <?php
        $domain = $_POST['domain'];
        echo "<h1>$domain </h1>";
        ?>
      </div>

      </br>
      </br>


      <div class="div_origem">
        <!-- Essa div contém a parte sobre informações do servidor, como IP e Hostname -->
        <div class="div_server_info">
          <h4>Informações do servidor</h4>

          <?php
          function serverInfo($domain)
          {
            $server = gethostbyname($domain);
            $name = gethostbyaddr($server);
            echo "<table>";
            echo "<tr>";
            echo "<td>IP: $server</td>";
            echo "<td>Nome: $name</td>";
            echo "</tr>";
            echo "</table>";
          }

          if (isset($_POST['domain'])) {
            serverInfo($domain);
          }
          ?>
        </div>

        <div class="div_registro_br">
          <h4>Registro BR / Who Is</h4>
          <?php
          function formatarData($dataOriginal)
          {
            $dataObj = new DateTime($dataOriginal);
            return $dataObj->format('d/m/Y');
          }

          function formatarDocumento($documentoOriginal)
          {
            if (strlen($documentoOriginal) > 11) {
              $cnpj = preg_replace("/[^0-9]/", "", $documentoOriginal);
              $cnpjFormatado = substr($cnpj, 0, 2) . '.' . substr($cnpj, 2, 3) . '.' . substr($cnpj, 5, 3) . '/' . substr($cnpj, 8, 4) . '-' . substr($cnpj, 12, 2);
              return $cnpjFormatado;
            } else {
              $cpf = preg_replace("/[^0-9]/", "", $documentoOriginal);
              $cpfFormatado = substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
              return $cpfFormatado;
            }
          }
          function consultaRegistroBr($domain)
          {
            $url_registroBr = "https://rdap.registro.br/domain/$domain";

            $resultado_json = file_get_contents($url_registroBr);
            $resultado = json_decode($resultado_json);
            $meu_array = [];

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              array_push($meu_array, array("Representante" => $resultado->entities[0]->legalRepresentative));
              array_push($meu_array, array("Documento" => formatarDocumento($resultado->entities[0]->handle)));
              array_push($meu_array, array("Servidor DNS" => $resultado->nameservers[0]->ldhName));
              array_push($meu_array, array("Servidor DNS" => $resultado->nameservers[1]->ldhName));
              array_push($meu_array, array("Servidor DNS" => $resultado->nameservers[2]->ldhName));
              array_push($meu_array, array("Criação" => formatarData($resultado->events[0]->eventDate)));
              array_push($meu_array, array("Expiração" => formatarData($resultado->events[2]->eventDate)));
              array_push($meu_array, array("Alteração" => formatarData($resultado->events[1]->eventDate)));
              array_push($meu_array, array("Provedor" => $resultado->entities[2]->vcardArray[1][0][3]));
              array_push($meu_array, array("Status" => $resultado->status[0]));
            }
            return $meu_array;
          }

          function consultaWhoIs($domain)
          {
            $api_url = 'https://api.api-ninjas.com/v1/whois?domain=' . urlencode($domain);
            $api_key = '';

            $options = [
              'http' => ['header' => "X-Api-Key: $api_key"]
            ];

            $context = stream_context_create($options);
            $response = file_get_contents($api_url, false, $context);
            $obj = json_decode($response);

            $meu_array = [];

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              array_push($meu_array, array("Registrante" => $obj->registrar));
              array_push($meu_array, array("WhoIs Server" => $obj->whois_server));
              array_push($meu_array, array("Servidor DNS" => $obj->name_servers[0]));
              array_push($meu_array, array("Servidor DNS" => $obj->name_servers[1]));
              array_push($meu_array, array("Servidor DNS" => $obj->name_servers[2]));
              array_push($meu_array, array("Servidor DNS" => $obj->name_servers[3]));
              array_push($meu_array, array("Empresa" => $obj->org));
              array_push($meu_array, array("País" => $obj->country));
              //array_push($meu_array, array("Criação" => formatarData((new DateTime())->setTimestamp($obj->creation_date)->format('Y-m-d H:i:s'))));
              //array_push($meu_array, array("Expiração" => formatarData((new DateTime())->setTimestamp($obj->expiration_date)->format('Y-m-d H:i:s'))));
              array_push($meu_array, array("Modificação" => formatarData((new DateTime())->setTimestamp($obj->updated_date)->format('Y-m-d H:i:s'))));
            }
            return $meu_array;
          }

          function renderizar($domain)
          {

            $extensao = pathinfo($domain, PATHINFO_EXTENSION);
            if (strtolower($extensao) === "br") {
              $meu_array = consultaRegistroBr($domain);
              $redirecionar_registroBr = "https://registro.br/tecnologia/ferramentas/whois?search=$domain";
            } else {
              $meu_array = consultaWhoIs($domain);
            }

            echo "<ul>";
            foreach ($meu_array as $item) {
              echo "<table>";
              foreach ($item as $key => $value) {
                if (!$value === '' || !is_null($value)) {
                  echo "<tr>";
                  echo "<td>" . "<strong>" . $key . "</strong>" . ": " . $value . "</td>";
                  echo "</tr>";
                }
              }
              echo "</table>";
            }
            echo "</ul>";
            echo '<p>Para mais informações: <a href="' . $redirecionar_registroBr . '" target="_blank">Clique aqui</a> </p>';
          }

          if (isset($_POST['domain'])) {
            $domain = $_POST['domain'];
            renderizar($domain);
          }
          ?>
        </div>

        <div class="div_spf_dmarc">
          <h4>SPF e DMARC</h4>
          <div>
            <?php
            if (isset($_POST['domain']) && !empty($_POST['domain'])) {
              $domain = $_POST['domain'];
              $dns_TXT = dns_get_record($domain, DNS_TXT);
              $dmarc_domain = "_dmarc." . $domain;
              $records = dns_get_record($dmarc_domain, DNS_TXT);

              foreach ($dns_TXT as $txt) {
                if (strpos($txt['txt'], "spf") !== false) {

                  echo "<table>";
                  echo "<tr>";
                  if (strpos($txt['txt'], 'include:_spf.locaweb.com.br')) {
                    echo "<td>$txt[txt]</td>";
                    echo "<td style='color: green;'>SPF da Locaweb</td>";
                  } else {
                    echo "<td>$txt[txt]</td>";
                    echo "<td style='color: red;'>Sem o SPF Locaweb</td>";
                  }
                  echo "</tr>";
                  echo "<tr>";
                  if (strpos($txt['txt'], '-all')) {
                    echo "<td> </td>";
                    echo "<td style='color: green;'>Contém a propriedade <strong>-all</strong></td>";
                  } else {
                    echo "<td> </td>";
                    echo "<td style='color: red;'>Não contém a propriedade <strong>-all</strong></td>";
                  }
                  echo "</tr>";
                  if (strpos($records[0]['host'], 'dmarc')) {
                    echo "<td>{$records[0]['host']}</td>";
                    echo "<td>{$records[0]['txt']}</td>";
                  } else {
                    echo "<td colspan='2' style='color: red;'>dmarc não encontrado</td>";
                  }
                  echo "</tr>";
                  echo "</table>";
                }
              };
            }
            ?>
          </div>
        </div>

        <!-- Essa div apresenta os cinco sites que estão no mesmo servidor do site que estamos consultando na página. -->
        <div class="div_cinco_site">
          <h4>Sites com o mesmo IP (limitado a 5)</h4>
          <?php
          function getCincoSites($dns_IP)
          {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://website.informer.com/$dns_IP");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $resposta = curl_exec($ch);
            if (curl_errno($ch)) {
              echo 'Erro cURL: ' . curl_error($ch);
            }
            curl_close($ch);
            return $resposta;
          }

          function algo($dns_IP)
          {
            $resposta = getCincoSites($dns_IP);
            $sitesWithSameIP = [];
            $dom = new DOMDocument();
            $dom->loadHTML($resposta);
            $links = $dom->getElementsByTagName('a');
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
            return $sitesWithSameIP;
          }

          function renderSites($dns_IP)
          {
            $sites = algo($dns_IP);
            echo "<table>";
            foreach ($sites as $site) {
              echo "<tr>";
              echo "<td><a href=\"http://$site\" target=\"_blank\" style='color: #001f3f;'>$site</a></td>";
              echo "<tr>";
            }
            echo "</table>";
          }

          if (isset($_POST['domain'])) {
            $domain = $_POST['domain'];
            $dns_IP = gethostbyname($domain);
            renderSites($dns_IP);
          }
          ?>
        </div>

        
        <!-- A div abaixo é responsável por realizar as funções e renderização da parte de nslookup. -->
        <div class="div_nslookup">
          <h4>Zona DNS</h4>
          <?php
          function verivyDomain($domain)
          {
            $regex = '/\.[a-zA-Z]{2,10}$/';
            return preg_match($regex, $domain);
          };

          function getDns($domain)
          {
            $isDomainTrue = verivyDomain($domain);
            if ($isDomainTrue === false) {
              echo "<span>Domínio não existe.</span>";
              return;
            }
            $dns_IP = gethostbyname($domain);
            $dns_host = gethostbyaddr($dns_IP);
            $dns_MX = dns_get_record($domain, DNS_MX);
            $dns_NS = dns_get_record($domain, DNS_NS);
            $dns_SOA = dns_get_record($domain, DNS_SOA);
            $dns_A = dns_get_record($domain, DNS_A);
            $dns_TXT = dns_get_record($domain, DNS_TXT);
            $dns_CNAME = dns_get_record($domain, DNS_CNAME);
            $result = array('IP' => $dns_IP, 'host' => $dns_host, 'MX' => $dns_MX, 'NS' => $dns_NS, 'SOA' => $dns_SOA, 'A' => $dns_A, 'TXT' => $dns_TXT, 'CNAME' => $dns_CNAME);
            return $result;
          }

          function dnsToArray($domain)
          {
            $algo = getDns($domain);
            $meuArray = [];
            foreach ($algo['A'] as $tipoA) {
              $meuArray[] = ['classe' => 'IP', 'valor' => $tipoA['ip']];
            }
            foreach ($algo['MX'] as $mx) {
              $meuArray[] = ['classe' => 'MX', 'valor' => $mx['target']];
            }
            foreach ($algo['NS'] as $ns) {
              $meuArray[] = ['classe' => 'NS', 'valor' => $ns['target']];
            }
            foreach ($algo['SOA'] as $soa) {
              $soaInfo = $soa['mname'] . ' ' . $soa['rname'] . ' ' . $soa['serial'] . ' ' . $soa['refresh'] . ' ' . $soa['retry'];
              $meuArray[] = ['classe' => 'SOA', 'valor' => $soaInfo];
            }
            foreach ($algo['TXT'] as $txt) {
              $meuArray[] = ['classe' => 'TXT', 'valor' => $txt['txt']];
            }
            return $meuArray;
          }

          function showDns($domain)
          {
            $inputsFromDns = dnsToArray($domain);
            echo '<table>';
            foreach ($inputsFromDns as $item) {
              echo '<tr>';
              echo "<td>{$item['classe']}</td>";
              echo "<td>{$item['valor']}</td>";
              echo '</tr>';
            }
            echo '</table>';
          }

          if (isset($_POST['domain'])) {
            $domain = $_POST['domain'];
            showDns($domain);
          }
          ?>
        </div>

        <!-- A div abaixo é responsável por analisar um tipo de DNS específico (TXT ou CNAME) que será enviado via form. -->
        <div class="div_cname">
            <h4>Whats My DNS</h4>

            <form action="/dashboard.php" method="post" >
              <select id="dns_type" name="dns_type" style="padding: 6px; border-radius: 8px; border: 2px solid #ddd; margin: 18px 0px;">
                <option value="CNAME">CNAME</option>
                <option value="TXT">TXT</option>
              </select>
              <input type="text" id="myDomain" name="myDomain" placeholder="www.dominio.com.br">
              <input type="submit" name="submit" id="submit">
            </form>

            <?php
            $myDomain = $_POST['myDomain'];
            $dnsType = $_POST['dns_type'];

            $result = dns_get_record($myDomain, DNS_CNAME);
            $cname = $result[0]['target'];

            $result_txt = dns_get_record($myDomain, DNS_TXT);
            $txt = $result_txt[0]['txt'];

            if ($_SERVER['REQUEST_METHOD'] === "POST" && $dnsType != '') {

              if($dnsType === "CNAME") {
                echo '<table>';
                  echo '<tr>';
                    echo '<td>TYPE</td>';
                    echo '<td>DOMAIN</td>';
                    echo '<td>VALUE</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo "<td>$dnsType</td>";
                    echo "<td>$myDomain</td>";
                    echo "<td>$cname</td>";
                  echo '</tr>';
                echo '</table>';
              } else {
                echo '<table>';
                  echo '<tr>';
                    echo '<td>TYPE</td>';
                    echo '<td>DOMAIN</td>';
                    echo '<td>VALUE</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo "<td>$dnsType</td>";
                    echo "<td>$myDomain</td>";
                    if($txt == '') {
                      echo "<td style='color: red;'>null</td>";
                    } else {
                      echo "<td>$txt</td>";
                    }
                  echo '</tr>';
                echo '</table>';
              }
            }
          ?>
          </div>
      </div>

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
        <p class="ls-copy-right">Beta.</p>
      </div>
    </footer>
  </main>

  <!--footer com js e notifications-->
  <?php require_once('javascript.php'); ?>

</body>

</html>
