<!doctype html>
<html lang="en" class="ls-theme-green">
<head>
    <!--meta tags e CSS-->
    <?php  
      require_once('meta_tags.php');
    ?>
        <title>Locaweb PRO homepage</title>
</head>
<body>

    <!--navbar - barra de navegação -->
    <?php
      require_once('navbar.php');
      require_once('aside.php');
    ?>

        <!-- box -->
    <main class="ls-main">
      <div class="container-fluid">
        <h1 class="ls-title-intro ls-ico-home">Página inicial</h1>

        <div class="ls-list ls-box ls-sm-space">

  <header class="ls-list-header">

    <div class="ls-list-title col-md-9">
      
      <a href="email.php">Formulários de email</a>
      <small>Serviço dos forms by Vinicius Henrique </small>
    </div>
    <div class="col-md-3 ls-txt-right">
      <a href="email.php" class="ls-btn-primary">Acessar</a>
    </div>
  </header>
  <div class="ls-list-content ">
    <div class="col-xs-12 col-md-6">
      <span class="ls-list-label">Status</span>
      <strong>Ativo</strong>
    </div>
</div>
</div>
<div class="ls-list ls-box ls-sm-space">
<header class="ls-list-header">
    <div class="ls-list-title col-md-9">
      <a href="banco_dados.php">Testes de banco de dados</a>
      <small>Testes de banco de dados by Vinicius Henrique </small>
    </div>
    <div class="col-md-3 ls-txt-right">
      <a href="banco_dados.php" class="ls-btn-primary">Acessar</a>
    </div>
  </header>
  <div class="ls-list-content ">
    <div class="col-xs-12 col-md-6">
      <span class="ls-list-label">Status</span>
      <strong>Em desenvolvimento</strong>
    </div>
</div>
</div>
<div class="ls-list ls-box ls-sm-space">
<header class="ls-list-header">
    <div class="ls-list-title col-md-9">
      <a href="migracao.php">Teste de migração de email em PHP com imapsync</a>
      <small>Migração de email by Vinicius Henrique </small>
    </div>
    <div class="col-md-3 ls-txt-right">
      <a href="migracao.php" class="ls-btn-primary">Acessar</a>
    </div>
  </header>
  <div class="ls-list-content ">
    <div class="col-xs-12 col-md-6">
      <span class="ls-list-label">Status</span>
      <strong>Em desenvolvimento</strong>
    </div>
</div>
</div>
<div class="ls-list ls-box ls-sm-space">
<header class="ls-list-header">
    <div class="ls-list-title col-md-9">
      <a href="migracao_banco.php">Teste de migração de Banco de dados</a>
      <small>Migração de banco by Vinicius Henrique </small>
    </div>
    <div class="col-md-3 ls-txt-right">
      <a href="migracao_banco.php" class="ls-btn-primary">Acessar</a>
    </div>
  </header>
  <div class="ls-list-content ">
    <div class="col-xs-12 col-md-6">
      <span class="ls-list-label">Status</span>
      <strong>Em desenvolvimento</strong>
    </div>
</div>
</div>
 <div class="ls-list ls-box ls-sm-space">
<header class="ls-list-header">
    <div class="ls-list-title col-md-9">
      <a href="migracao_banco.php">Validador SSL</a>
      <small>Análise de certificados SSL</small>
    </div>
    <div class="col-md-3 ls-txt-right">
      <a href="ssl.php" class="ls-btn-primary">Acessar</a>
    </div>
  </header>
  <div class="ls-list-content ">
    <div class="col-xs-12 col-md-6">
      <span class="ls-list-label">Status</span>
      <strong>Em desenvolvimento</strong>
    </div>
</div>
</div>


    </main>
        
        <!--footer com js e notifications-->
        <?php
          require_once('javascript.php');
        ?>
</body>
</html>