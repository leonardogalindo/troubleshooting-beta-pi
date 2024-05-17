<!doctype html>
<html lang="en" class="ls-theme-wine">
<head>
    <!--meta tags e CSS-->
    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
    <?php  
      require_once('meta_tags.php');
    ?>
        <title>Lista de ramais</title>
             
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
        <h1 class="ls-title-intro ls-ico-home">Chamados</h1>
        <div class="ls-list ls-box ls-sm-space">
        <div class="ls-alert-box ls-dismissable">
  <header class="ls-info-header">
    <span data-ls-module="dismiss" class="ls-dismiss">&times;</span>
    <h2 class="ls-title-3">ATENÇÃO</h2>
    <h2><p>TODOS OS DADOS DEVEM SER INSERIDOS CORRETAMENTE NA ABERTURA DO CHAMADO</p>
    <p>Não Esqueça de colocar detalhadamente todos os testes realizados</p></h2>
  </header><!-- /header -->
</div>
        <ul class="ls-tabs-nav">
  <li class="ls-active"><a data-ls-module="tabs" href="#1">Sumiço de Mensagens</a></li>
  <li><a data-ls-module="tabs" href="#2">Padrão Email</a></li>
  <li><a data-ls-module="tabs" href="#3">Padrão Hospedagem</a></li>
  <li><a data-ls-module="tabs" href="#4">Padrão Sobrecarga</a></li>
  <li><a data-ls-module="tabs" href="#5">Aba 3</a></li>
  <li><a data-ls-module="tabs" href="#6">Aba 3</a></li>
  <li><a data-ls-module="tabs" href="#7">Aba 3</a></li>
  <li><a data-ls-module="tabs" href="#8">Aba 3</a></li>
  <li><a data-ls-module="tabs" href="#9">Aba 3</a></li>
</ul>
<div class="ls-tabs-container">
  <div id="1" class="ls-tab-content ls-active">
  <h2 id="tt1">Template Chamado Padrão - Sumiço de Mensagens</h2>

  <div class="areatexto">

  <form action=" " method="post">
    
    <textarea id="areat" name="w3review" rows="20" cols="200">

    </textarea>
    
  </form>

  </div>

  <h2 id="tt1">Internas</h2>

  <div class="areatexto">

  <form action=" " method="post">
    
    <textarea id="areat" name="w3review" rows="8" cols="200">
Resumo:
Usuario:
Dominio:    
Testes realizados:      
Produtos:     
Observações:

    </textarea>
    
  </form>

  </div>
  </div>
  
  <div id="2" class="ls-tab-content">
    

  <h2 id="tt1">Template Chamado Padrão E-Mail</h2>

<div class="areatexto">

<form action=" " method="post">
  
  <textarea id="areat" name="w3review" rows="20" cols="200">


  </textarea>
  
</form>

</div>

<h2 id="tt1">Internas</h2>

<div class="areatexto">

<form action=" " method="post">
  
  <textarea id="areat" name="w3review" rows="8" cols="200">
Resumo:
Usuario:
Dominio:
Testes realizados:
Produtos:
Observações:
  </textarea>
  
</form>

</div>

  </div>
  <div id="3" class="ls-tab-content">
    
  <h2 id="tt1">Template Chamado Padrão Hospedagem</h2>

<div class="areatexto">

  <form action=" " method="post">

    <textarea id="areat" name="w3review" rows="20" cols="200">

  </textarea>

  </form>

</div>

<h2 id="tt1">Internas</h2>

<div class="areatexto">

  <form action=" " method="post">

    <textarea id="areat" name="w3review" rows="12" cols="200">

  </textarea>

  </form>

</div>
</div>
  <div id="4" class="ls-tab-content">
  <h2 id="tt1">[Sobrecarga servidor compartilhado] - domínio.com.br</h2>

<div class="areatexto">

  <form action=" " method="post">

    <textarea id="areat" name="w3review" rows="20" cols="200">





  </textarea>

  </form>

</div>

<h2 id="tt1">Internas</h2>

<div class="areatexto">

  <form action=" " method="post">

    <textarea id="areat" name="w3review" rows="12" cols="200">

  </textarea>

  </form>

</div>
  </div>
  <div id="5" class="ls-tab-content">
    <p>Inventore consectetur ad est praesentium dolorem et voluptatem quod ratione et aut molestiae voluptatem explicabo. corporis autem nam eos ab omnis qui nostrum eum ab iste distinctio. aut sit iusto eum in consectetur quisquam exercitationem dolorem sunt et</p>
  </div>
  <div id="6" class="ls-tab-content">
    <p>Inventore consectetur ad est praesentium dolorem et voluptatem quod ratione et aut molestiae voluptatem explicabo. corporis autem nam eos ab omnis qui nostrum eum ab iste distinctio. aut sit iusto eum in consectetur quisquam exercitationem dolorem sunt et</p>
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
