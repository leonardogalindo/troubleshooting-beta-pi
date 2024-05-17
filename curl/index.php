<!doctype html>
<html lang="en" class="ls-theme-blue">
<head>
    <!--meta tags e CSS-->
    <?php  
      require_once('meta_tags.php');
    ?>
        <title>Suporte PAE</title>
        <style type="text/css">
          
          .input-list-pers{
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 10px 20px; 
  border: 2px dashed #5a5a5a;
  -webkit-border-radius: 4px;
  border-radius: 4px;
  font: normal 16px/normal Arial, Helvetica, sans-serif;
  color: rgba(0,142,198,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgba(252,252,252,1);
  -webkit-box-shadow: 4px 3px 4px 1px rgba(220,220,220,1) inset;
  box-shadow: 4px 3px 4px 1px rgba(220,220,220,1) inset;
  text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}
        </style>
        
</head>
<body>

        <!--navbar - barra de navegação -->
    <?php
      require_once('navbar.php');
    
    ?>
<script type="text/javascript" src="scripts.js?n=1"></script>

        <!-- box -->
    <main class="ls-main">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-home">Página inicial</h1>

    <form name="dns" class="ls-form row" action="" method="post">
    <label class="ls-label col-md-5">
      <b class="ls-label-text">Domínio</b>
      <input type="text" name="domain" id="domain" placeholder="dominio.com.br" value="<?php if (isset($_POST["domain"])) {echo $_POST["domain"];} ?>" required >
    </label>
  <div class="ls-actions-btn">
    <button class="ls-btn" name="zonadns" id="zonadns" value="zonadns" onclick="Executa1()">Zona de DNS</button>
    <button class="ls-btn-danger" name="logdns" id="logdns" value="logdns" onclick="Executa2()">Logs da zona de DNS</button>
  </div>
  </form>
<!-- ----------------------------------------------------------------------------------------------------------------- -->

  <h3 class="ls-title-3">Liberar domínio</h3>
  </br>
<iframe src="https://www.locaweb.com.br/" width="680" height="480" ></iframe>
</br>
<hr>
<iframe src="https://www.youtube.com/embed/dXBohfjc4WA" width="680" height="480"></iframe>

<!-- ----------------------------------------------------------------------------------------------------------------- -->

<hr>
</br>
<h3 class="ls-title-3">Lista de ramais</h3>


  <label class="ls-label col-md-3">
      <b class="ls-label-text">Filtro de busca</b>
      <p class="ls-label-info">Pesquise por aqui</p>
      <input type="text" name="filter1" id="filter1" onkeyup="filtering()">
    </label>

<table class="ls-table ls-table-striped ls-md-space" id="lista">
  <thead>
    <tr>
      <th>Ramal</th>
      <th>Descrição</th>
      <th>Nome</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>183</td>  
      <td>Suporte Locaweb PRO</td>
      <td>Suporte AEP</td>
    </tr>
    <tr>
      <td>11111</td>
      <td>Cobrança Locaweb PRO</td>
      <td>Cobrança AEP</td>
    </tr>
    <tr>
      <td>139</td>
      <td>Comercial Locaweb PRO</td>
      <td>omercial AEP</td>
    </tr>
    <tr>
      <td>Mensagem Teste Locastyle 3</td>
      <td>Campanha</td>
      <td>Enviada</td>
    </tr>
  </tbody>
</table>

<div class="ls-pagination-filter">
  <ul class="ls-pagination-lg">
    <li><a href="#">&laquo;</a></li>
    <li class="ls-active"><a href="#">1</a></li>
    <li><a href="#">&raquo;</a></li>
  </ul>
</div>

        </div>
    </main>
        
        <!--footer com js e notifications-->
        <?php
          require_once('javascript.php');
        ?>
        <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
</body>
</html>