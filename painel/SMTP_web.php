<!doctype html>
<html lang="en">
  <head>
    
    <!--meta tags e CSS-->
    <?php  

      require_once('meta_tags.php');

    ?>

    <title>SMTP web</title>
  </head>
  <body>
    
    <!--navbar - barra de navegação -->
    <?php

      require_once('navbar.php');

    ?>
 



<main role="main">
    <!-- box do gráfico -->
  </br>

    <div class="container-fluid">

      <button onclick="window.location.href='/smtp_disparo.php'" type="button" class="btn btn-secondary btn-lg btn-block">SMTP - preencher conta de disparo</button>
      <button type="button" class="btn btn-secondary btn-lg btn-block">SMTP de conta Locamail</button>
      <button type="button" class="btn btn-secondary btn-lg btn-block">SMTP de conta Plesk linux 12.5</button>
      <button type="button" class="btn btn-secondary btn-lg btn-block">SMTP de conta Cpanel Iuri</button>
      <button type="button" class="btn btn-secondary btn-lg btn-block">SMTP de conta Cpanel Gagarin</button>


    </div>

</main>
    <?php

      require_once('javascript.php');

    ?>

</body>
</html>
