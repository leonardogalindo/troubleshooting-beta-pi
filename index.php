<!DOCTYPE html>
<html lang="en" class="ls-theme-wine">

<head>
    <!--meta tags e CSS-->
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <?php require_once('meta_tags.php'); ?>
    <title>Painel de Troubleshooting - Beta 1</title>
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
            <h1 class="ls-title-intro ls-ico-home">Página inicial</h1>
            <div class="ls-alert-box ls-dismissable">
  <header class="ls-info-header">
    <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
    <h2 class="ls-title-3">Seja Bem Vindo</h2>
    <p>Esse é o seu painel de atendimento</p>
    <p>Não Esqueça de realizar todo seu Troubleshooting</p>
  </header><!-- /header -->
</div>
            <div class="ls-list ls-box ls-sm-space">
                <header class="ls-list-header">
                    <div class="ls-list-title col-md-9">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="ls-box">
                            <header class="ls-info-header">
                                <h2 class="ls-title-3">Registro De Atendimento</h2>
                            </header>
                            <div class="search1">
                              <form action="/action_page.php">
                                    <textarea id="w3review1" name="w3review" rows="8" cols="70">
NOME/USUARIO: 
COD CLIENTE: 
FALHA: 
DIAGNOSTICO:  
SOLUÇÃO: 
                                    </textarea>
                                    <br />
                                    <input type="reset" value="Limpar" id="clear-button" />
                                    <button onclick="copiarTexto(event)">Copiar Texto</button>
                                </form>
                            </div>

                            <br>
                            <br>
                        </div>
                        <!--ARVORE CLASSIFICAÇÃO-->
                        <div class="ls-box">
                            <a href="https://locawebsa.sharepoint.com/:x:/s/PCA/EenjV-5UQPdGgk5umQEncIoBnfqUv6J_1EZ8V5ujHALdTg?e=X7foKu&ovuser=700a4e08-ed6d-4401-835a-4e4fe805c8ca%2Cemail&clickparams=eyJBcHBOYW1lIjoiVGVhbXMtRGVza3RvcCIsIkFwcFZlcnNpb24iOiI0OS8yMzEwMTIyNzcxMiIsIkhhc0ZlZGVyYXRlZFVzZXIiOmZhbHNlfQ%3D%3D" target="_blank" class="ls-lnk-nav ls-ico-chevron-right">Arvore de Classificação</a>
                        </div>
                         </div>
                        </div>
                    </div>
                    
                    </div>

                </header>

                <div class="row">
                    <div class="col-md-6">
                        <div class="ls-box">
                            <header class="ls-info-header">
                                <h2 class="ls-title-3">Impersonate Hospedagem</h2>
                            </header>
                            <form name="impers" class="ls-form row" action="" method="post">
                                <label class="ls-label col-md-5">
                                    <b class="ls-label-text">login</b>
                                    <input type="text" name="login" id="login" value="<?php if (isset($_POST["login"])) { echo $_POST["login"]; } ?>" required>
                                </label>
                                <div class="ls-actions-btn">
                                    <button class="ls-btn" name="zonadns" id="zonadns" value="zonadns" onclick="Executa3()">Impersonate</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="ls-box">
                            <header class="ls-info-header">
                                <h2 class="ls-title-3">Impersonate SSL Locaweb</h2>
                            </header>
                            <form name="impers" class="ls-form row" action="" method="post">
                                <label class="ls-label col-md-5">
                                    <b class="ls-label-text">login</b>
                                    <input type="text" name="login" id="login" value="<?php if (isset($_POST["login"])) { echo $_POST["login"]; } ?>" required>
                                </label>
                                <div class="ls-actions-btn">
                                    <button class="ls-btn" name="zonadns" id="zonadns" value="zonadns" onclick="Executa4()">Impersonate</button>
                                </div>
                            </form>
                        </div>
                    </div>
                   </div>
            </div>
           
            </div>
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
                <p class="ls-copy-right">Copyright © 1997-2024 versão beta.</p>
            </div>
        </footer>
    </main>

    <!--footer com js e notifications-->
    <?php require_once('javascript.php'); ?>

    <!-- Esse script é responsável por copiar o conteúdo do painel "Registro de Atendimento", ao clicar no botão "Copiar texto". -->
    <script>
        function copiarTexto(event) {
            var textarea = document.getElementById("w3review1");
            textarea.select();
            document.execCommand('copy');
            alert("Texto copiado com sucesso!");
            event.preventDefault();
        }
    </script>

</body>
</html>
