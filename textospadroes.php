<!doctype html>
<html lang="en" class="ls-theme-wine">
<head>
    <!--meta tags e CSS-->
    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
    <?php  
      require_once('meta_tags.php');
    ?>
        <title>Textos padrões para chamados</title>
        
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
        <h1 class="ls-title-intro">Textos Padrões para chamado</h1>
        <div class="ls-list ls-box ls-sm-space">

        <h3 class="ls-title-3">Backup e Restore</h3>

        <div class="ls-tabs-btn">
  <ul class="ls-tabs-btn-nav">
    <li class="col-md-1 col-sm-4 col-xs-4 ls-active"><label class="ls-btn" data-ls-module="button" data-target="#tab1">Site <input type="radio" name="btn"></label></li>
    <li class="col-md-1 col-sm-4 col-xs-4"><label class="ls-btn" data-ls-module="button" data-target="#tab2">Banco <input type="radio" name="btn"></label></li>
  </ul>

  <div class="ls-tabs-container">
    <div id="tab1" class="ls-tab-content">
		<label class="ls-label-text">
    	<fieldset>
       <div class="ls-label col-md-5">
      <label class="ls-label-text">
        <input type="radio" name="radinho"  value="backup">
        Backup
      </label>
      <label class="ls-label-text">
        <input type="radio" name="radinho" value="restore">
        Restore
      </label>
    </div>
  </fieldset>
  <fieldset>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Dominio: </b>
      <p class="ls-label-info">Site à ser feito o backup: </p>
      <input type="text" id="dominios" name="dominios" placeholder="meusite.com.br" >
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Pasta à ser restaurada: </b>
      <input type="text" id="pastas" name="pastas" placeholder="public_html" >
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Data do Backup: </b>
      <input type="text" name="datepickersite" class="datepicker" id="datepickersite" placeholder="dd/mm/aaaa">
  </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Motivo do backup: </b>
      <input type="text" id="motivo" name="motivo" >
    </label>
  </fieldset>
  <div class="ls-actions-btn">
    <button class="ls-btn" onclick="backupsite()">Gerar</button>  
  </div>
</label>



    </div>
    <div id="tab2" class="ls-tab-content">
      


        <label class="ls-label-text">
      <fieldset>
       <div class="ls-label col-md-5">
      <label class="ls-label-text">
        <input type="radio" name="radinho2"  value="backup">
        Backup
      </label>
      <label class="ls-label-text">
        <input type="radio" name="radinho2" value="restore">
        Restore
      </label>
    </div>
  </fieldset>
  <fieldset>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Host: </b>
      <p class="ls-label-info">endereço do banco ou IP: </p>
      <input type="text" id="host" name="host" >
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">usuário: </b>
      <input type="text" id="user" name="user" >
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Data do Backup: </b>
      <input type="text" name="datepickerbanco" class="datepicker" id="datepickerbanco" placeholder="dd/mm/aaaa">
  </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">senha: </b>
      <input type="text" id="senha2" name="senha2" >
    </label>

    <label class="ls-label col-md-4">

      <b class="ls-label-text">Motivo do backup: </b>
      <input type="text" id="motivo2" name="motivo2" >
    </label>

  </fieldset>
  <div class="ls-actions-btn">
    <button class="ls-btn" onclick="backupbanco()">Gerar</button>    
  </div>
</label>




    </div>

  </div>
</div>
<div class="ls-box" id="printer"></div>       


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
    <p class="ls-copy-right">Copyright © 1997-2023 Serviços de Internet S/A.</p>
  </div>
</footer>
    </main>
        
        <!--footer com js e notifications-->
        <?php
          require_once('javascript.php');
        ?>
</body>
</html>