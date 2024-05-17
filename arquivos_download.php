<!doctype html>
<html lang="en" class="ls-theme-wine">

<head>
  <!--meta tags e CSS-->
  <link rel="shortcut icon" type="image/png" href="favicon.ico" />
  <?php require_once('meta_tags.php'); ?>
  <title>Arquivos teste</title>
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
      margin-top: 50px;
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
    .div_nslookup {
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

    .div_nslookup {
      grid-column: span 3;
    }

    .dns_lookup {
      padding: 7px 0 7px 0;
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

      <h1 class="ls-title-intro ls-ico-search">Arquivos de teste</h1>


      <h4>Formulário envio de emails - Linux</h4>
      <ul>
        <li>
          <span><a href="/arquivos_download/site.zip">Site Linux</a> (baixar o zip)</span>
        </li>
        <li>
          <span id="curl_site">curl -o site.zip http://painel-atendimento.tecnologia.ws/arquivos_download/site.zip</span>
          <button onclick="copiar('curl_site')">Copiar</button>
        </li>
      </ul>

      <h4>Formulário envio de emails - Asp Clássico</h4>
      <ul>
        <li><span><a href="/arquivos_download/ASPclassico 2.zip">Asp Clássico</a> (baixar o zip)</span></li>
      </ul>

      <h4>Conexão com banco de dados MySQL a partir do PHP</h4>
      <h5>Vai gerar um arquivo com o código necessário para se conectar no banco de dados informado abaixo.</h5>
      <h5 style="color: red;">Ainda em teste!!!</h5>
      <form action="" method="post">
        <input type="text" name="db_server" placeholder="Servidor">
        <input type="text" name="username" placeholder="Username">
        <input type="text" name="password" placeholder="Password">
        <input type="text" name="db_name" placeholder="Nome do DB">
        <input type="submit" value="Gerar">
      </form>

      <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $db_server = $_POST['db_server'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $db_name = $_POST['db_name'];

            $dados_bd = [$db_server, $username, $password, $db_name];

            $html_content = '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <h1>Form Data</h1>
                <ul>
                    <li>Servidor: ' . $dados_bd[0] . '</li>
                    <li>Username: ' . $dados_bd[1] . '</li>
                    <li>Password: ' . $dados_bd[2] . '</li>
                    <li>DB_Name: ' . $dados_bd[3] . '</li>
                </ul>

                <?php

                  function testar() {

                    $conn = mysqli_connect('. $dados_bd[0] . ', ' . $dados_bd[1] . ', ' . $dados_bd[2] . ', ' . $dados_bd[3] . ');

                    if (!$conn) {
                        echo "Há algo errado";
                    } else {
                        echo "Conectado";
                    }
            
                    mysqli_close($conn);
                  }
                ?>

                <button onclick="testar()">Testar</button>


            </body>
            </html>
            ';

            unlink('test.php');
            file_put_contents("test.php", $html_content);

            echo '<a id="algo" href="test.php" download hidden>Download do arquivo</a>';
        }
        ?>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                function clickavel() {
                    let a = document.getElementById("algo");
                    a.click();
                }
                clickavel();
            });
        </script>
        


      <h4>Renomeia o php.ini atual e adiciona um php.ini novo</h4>
      <ul>
        <li>
          <span id="phpini_novo">mv php.ini php.ini_cliente123 && cp /etc/php.ini . && sed -i 's/max_execution_time = 30/max_execution_time = 90/' php.ini && sed -i 's/max_input_time = 60/max_input_time = 90/' php.ini && sed -i 's/memory_limit = 32M/memory_limit = 512M/' php.ini && sed -i 's/post_max_size = 8M/post_max_size = 50M/' php.ini && sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 50M/' php.ini && sed -i '954i session.save_path = "/home/'$USER'/tmp"' php.ini && sed -i '955d' php.ini</span>
          <button onclick="copiar('phpini_novo')">Copiar</button>
        </li>
      </ul>

      <h4>Renomeia a public_html atual e cria uma nova com um arquivo index.html dentro</h4>
      <h5>Exemplo: a public_html do cliente será renomeada para public_html_old_20240301 (2024/03/01).</h5>
      <h5 style="color: red;">Ainda em teste!!!</h5>
      <ul>
        <li>
          <span id="public_html_novo">mv public_html public_html_old_$(date '+%Y%m%d') && mkdir public_html && echo "teste" > public_html/index.html</span>
          <button onclick="copiar('public_html_novo')">Copiar</button>
        </li>
      </ul>

      <h4>Instala o wordpress</h4>
      <ul>
        <li>
          <span><a href="/arquivos_download/wordpress-6.4.3-pt_BR.zip">Baixar Wordpress</a> - Faz o download dos arquivos do wordpress 6.4.3.</span>
        </li>
        <li>
          <span id="wordpress_novo">curl -SO https://br.wordpress.org/latest-pt_BR.zip && unzip latest-pt_BR.zip && cd wordpress && mv * .. && cd .. && rm -rf latest-pt_BR.zip wordpress</span>
          <button onclick="copiar('wordpress_novo')">Copiar</button>
        </li>
      </ul>

      <h4></h4>





      </br>
      </br>

    </div>

    <script>
      function copiar(idFromSpan) {
        let spanElement = document.getElementById(idFromSpan);
        let range = document.createRange();
        range.selectNode(spanElement);
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();
      }
    </script>


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
