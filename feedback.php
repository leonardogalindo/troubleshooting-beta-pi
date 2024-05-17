<!doctype html>
<html lang="pt-br" class="ls-theme-wine">

<head>
    <!--meta tags e CSS-->
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <?php
    require_once('meta_tags.php');
    ?>
    <title>Feedback</title>

</head>

<body>
    <!--navbar - barra de navegação -->
    <?php
    require_once('navbar.php');
    require_once('aside.php');
    require_once('javascript.php');
    ?>
    <script type="text/javascript" src="scripts.js?n=1"></script>

    <!-- box -->
    <main class="ls-main">
        <div class="container-fluid">
            <h1 class="ls-title-intro bi bi-chat-left-text"> Feedback e/ou Sugestão</h1>
            
            <form action="" class="ls-form row" method="post" nome="feedback" id="feedback">
  <fieldset>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Nome</b>
      <input type="text" d name="nome" id="nome" placeholder="Digite seu nome completo" required=""><p class="ls-help-inline"><small><strong class="ls-char-count ls-number-counter-0">20</strong> caracteres restantes</small></p>
    </label>
    </fieldset>
    <fieldset>
    <label class="ls-label col-md-8">
      <b class="ls-label-text">Mensagem</b>
      <textarea  rows="5" required="" name="mensagem" id="mensagem"></textarea><p class="ls-help-inline"><small><strong class="ls-char-count ls-number-counter-1">1000</strong> caracteres restantes</small></p>
    </label>
      <input type="submit" value="Enviar" class="ls-btn-primary" title="Enviar">
  </fieldset>
</form>
</div>
    </main>
</body>
</html>