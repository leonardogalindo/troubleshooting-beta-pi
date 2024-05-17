<!doctype html>
<html lang="en" class="ls-theme-green">
<head>
    <!--meta tags e CSS-->
    <?php  
      require_once('meta_tags.php');
    ?>
        <title>Teste de banco de dados</title>
</head>
<body>

    <!--navbar - barra de navegação -->
    <?php
      require_once('navbar.php');
      require_once('aside.php');
    ?>
   
   <?php

if (isset($_POST["hostmysql"])){
$host    = $_POST["hostmysql"];
$usuario = $_POST["usuariomysql"];
$senha   = $_POST["passwordmysql"];
$banco   = $_POST["basemysql"];
}

if (isset($_POST["hostpostgresql"])){
$host    = $_POST["hostpostgresql"];
$usuario = $_POST["usuariopostgresql"];
$senha   = $_POST["passwordpostgresql"];
$banco   = $_POST["basepostgresql"];
}

if (isset($_POST["hostmssql"])){
$host    = $_POST["hostmssql"];
$usuario = $_POST["usuariomssql"];
$senha   = $_POST["passwordmssql"];
$banco   = $_POST["basemssql"];
}
   ?>

    
        <!-- box -->
    <main class="ls-main">
      <div class="container-fluid">
        <h1 class="ls-title-intro">Teste de banco de dados</h1>

<ul class="ls-tabs-nav" id="awesome-dropdown-tab">
  <li class="ls-active"><a data-ls-module="tabs" href="#tab3">Mysql</a></li>
  <li><a data-ls-module="tabs" href="#tab4">PostgreSQL</a></li>
  <li><a data-ls-module="tabs" href="#tab5">MS SQL</a></li>
</ul>
<div class="ls-tabs-container">
  
  <!-- Mysql -->
  <div id="tab3" class="ls-tab-content ls-active">
    

   <form action="" class="ls-form row" method="post">
  
    <label class="ls-label col-md-9">
      <b class="ls-label-text">Host do banco de dados</b>
      <input type="text" name="hostmysql" id="hostmysql" value="<?php if(isset($host)){ echo $host; } ?>" required >
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">usuario</b>
      <input type="text" name="usuariomysql" id="usuariomysql" value="<?php if(isset($usuario)){ echo $usuario; } ?>" required >
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">nome da base de dados</b>
      <input type="text" name="basemysql" id="basemysql" value="<?php if(isset($banco)){ echo $banco; } ?>" required >
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Senha</b>
      <div class="ls-prefix-group">
        <input type="password" maxlength="20" id="passwordmysql" name="passwordmysql" value="<?php if(isset($senha)){ echo $senha; } ?>">
          <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password" href="#"></a>
      </div>
      <label class="ls-label col-md-9">
      <b class="ls-label-text">Query Mysql</b>
      <input type="text" name="querymysql" id="querymysql" placeholder="show tables;" required >
    </label> 
    <div class="ls-actions-btn">
    <button class="ls-btn" type="submit" value="Enviarmysql" id="Enviarmysql">Enviar</button>
    <button class="ls-btn-danger" type="reset" value="Limpar">Resetar campos</button>
  </div>
  
  </form>
  </div>
<!-- final do mysql -->

<!-- postgresql -->
  <div id="tab4" class="ls-tab-content">
    
    <form action="" class="ls-form row" method="post">
  
    <label class="ls-label col-md-9">
      <b class="ls-label-text">Host do banco de dados</b>
      <input type="text" name="hostpostgresql" id="hostpostgresql" value="<?php if(isset($host)){ echo $host; }?>" required >
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">usuario</b>
      <input type="text" name="usuariopostgresql" id="usuariopostgresql" value="<?php if(isset($usuario)){ echo $usuario; } ?>" required >
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">nome da base de dados</b>
      <input type="text" name="basepostgresql" id="basepostgresql" value="<?php if(isset($banco)){ echo $banco; } ?>" required >
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Senha</b>
      <div class="ls-prefix-group">
        <input type="password" maxlength="20" id="passwordpostgresql" name="passwordpostgresql" value="<?php if(isset($senha)){ echo $senha; } ?>">
          <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password" href="#"></a>
      </div>
      <label class="ls-label col-md-9">
      <b class="ls-label-text">Query postgresql</b>
      <input type="text" name="querypostgresql" id="querypostgresql" placeholder="show tables;" required >
    </label> 
    <div class="ls-actions-btn">
    <button class="ls-btn" type="submit" value="Enviarpostgresql" id="Enviarpostgresql">Enviar</button>
    <button class="ls-btn-danger" type="reset" value="Limpar">Resetar campos</button>
  </div>
  
  </form>


  </div>
<!-- final do postresql -->

<!-- MSSQL -->
  <div id="tab5" class="ls-tab-content">
    <form action="" class="ls-form row" method="post">
  
    <label class="ls-label col-md-9">
      <b class="ls-label-text">Host do banco de dados</b>
      <input type="text" name="hostmssql" id="hostmssql" value="<?php if(isset($host)){ echo $host; }?>" required > 
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">usuario MS</b>
      <input type="text" name="usuariomssql" id="usuariomssql" value="<?php if(isset($usuario)){ echo $usuario; } ?>" required >
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">nome da base de dados</b>
      <input type="text" name="basemssql" id="basemssql" value="<?php if(isset($banco)){ echo $banco; } ?>" required >
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Senha</b>
      <div class="ls-prefix-group">
        <input type="password" maxlength="20" id="passwordmssql" name="passwordmssql" value="<?php if(isset($senha)){ echo $senha; } ?>">
          <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password" href="#"></a>
      </div>
      <label class="ls-label col-md-9">
      <b class="ls-label-text">Query MS SQL</b>
      <input type="text" name="querymssql" id="querymssql" placeholder="show tables;" required >
    </label> 
    <div class="ls-actions-btn">
    <button class="ls-btn" type="submit" value="Enviarmssql" id="Enviarmssql">Enviar</button>
    <button class="ls-btn-danger" type="reset" value="Limpar">Resetar campos</button>
  </div>
  
  </form>
  </div>
  <!-- final do MSSQL -->


</div>

<?php
  /* APARTIR DAQUI TEREMOS O CODIGO PHP PARA CONECTAR AOS BANCOS DE DADOS 
  if(isset($_POST['Enviarmysql'])) {
    require("mysql.php");
  }elseif (isset($_POST['Enviarpostgresql'])) {
    require("postgresql.php");
  }elseif (isset($_POST['Enviarmssql'])) {
    require("mssql.php");
  }

*/
?>


  <!-- PHP Mysql -->

<?php

if (isset($_POST["hostmysql"])){

$conexao=mysql_connect($host, $usuario, $senha) or die ("<p>Nao foi possivel conectar com o Banco</p>");
$bd = mysql_select_db($banco);

echo '<p class="x">' . "</p>\n";
$sql = $_POST["querymysql"];
$rs = mysql_query($sql);
$regs = mysql_num_rows($rs);
$fields = mysql_num_fields($rs);

echo("<table border='1'>\n");
// retornando todos os nomes de campos
if ($fields > 0 ) {
  echo("<tr>\n");
  for ($coluna = 0; $coluna < $fields; $coluna++) {
    echo('<td class="x"><b>'.str_replace("<", "&lt;", str_replace(">", "&gt;", mysql_field_name($rs,$coluna)))."</b></td>\n");
  }
  echo("</tr>\n");
}

// retornando todos os registros
if ($regs > 0) {
  $linha = 0;
  while ($linha < $regs){
    echo("<tr>\n");
    $coluna = 0;
    while ($coluna < $fields){
      $mostra = mysql_result($rs,$linha,$coluna);
      if ($mostra == NULL) $mostra = "<i>NULL</i>";
      echo('<td class="x">'.str_replace("<", "&lt;", str_replace(">", "&gt;", $mostra))."</td>\n");
      $coluna++;
    }
    echo("</tr>\n");
    $linha++;
  }
}
echo("</table>");
mysql_close($conexao);
}
?>

  <!-- PHP Postgresql -->

<?php

if (isset($_POST["hostpostgresql"])){
$conexao=pg_connect("host=".$host." dbname=".$banco." user=".$usuario." password=".$senha) or die ("<p>Nao foi possivel conectar com o Banco</p>");

echo '<p class="x">' . "</p>\n";
$sql = $_POST["querypostgresql"];
$rs = pg_query($sql);
$regs = pg_num_rows($rs);
$fields = pg_num_fields($rs);

echo("<table border='1'>\n");
// retornando todos os nomes de campos
if ($fields > 0 ) {
  echo("<tr>\n");
  for ($coluna = 0; $coluna < $fields; $coluna++) {
    echo('<td class="x"><b>'.str_replace("<", "&lt;", str_replace(">", "&gt;", pg_field_name($rs,$coluna)))."</b></td>\n");
  }
  echo("</tr>\n");
}

// retornando todos os registros
if ($regs > 0) {
  $linha = 0;
  while ($linha < $regs){
    echo("<tr>\n");
    $coluna = 0;
    while ($coluna < $fields){
      $mostra = pg_result($rs,$linha,$coluna);
      if ($mostra == NULL) $mostra = "<i>NULL</i>";
      echo('<td class="x">'.str_replace("<", "&lt;", str_replace(">", "&gt;", $mostra))."</td>\n");
      $coluna++;
    }
    echo("</tr>\n");
    $linha++;
  }
}
echo("</table>");
pg_close($conexao);
}
?>


  <!-- PHP MSSQL -->

<?php
if (isset($_POST["hostmssql"])){
$conexao=mssql_connect($host, $usuario, $senha) or die ("<p>Nao foi possivel conectar com o Banco</p>");
$bd = mssql_select_db($banco);

echo '<p class="x">' . "</p>\n";
$sql = $_POST["querymssql"];
$rs = mssql_query($sql);
$regs = mssql_num_rows($rs);
$fields = mssql_num_fields($rs);

echo("<table border='1'>\n");
// retornando todos os nomes de campos
if ($fields > 0 ) {
  echo("<tr>\n");
  for ($coluna = 0; $coluna < $fields; $coluna++) {
    echo('<td class="x"><b>'.str_replace("<", "&lt;", str_replace(">", "&gt;", mssql_field_name($rs,$coluna)))."</b></td>\n");
  }
  echo("</tr>\n");
}

// retornando todos os registros
if ($regs > 0) {
  $linha = 0;
  while ($linha < $regs){
    echo("<tr>\n");
    $coluna = 0;
    while ($coluna < $fields){
      $mostra = mssql_result($rs,$linha,$coluna);
      if ($mostra == NULL) $mostra = "<i>NULL</i>";
      echo('<td class="x">'.str_replace("<", "&lt;", str_replace(">", "&gt;", $mostra))."</td>\n");
      $coluna++;
    }
    echo("</tr>\n");
    $linha++;
  }
}
echo("</table>");
mssql_close($conexao);
}
?>
        
      
    </main>
        
        <!--footer com js e notifications-->
        <?php
          require_once('javascript.php');
        ?>
</body>
</html>