<!doctype html>
<html lang="en">
  <head>
    
    <!--meta tags e CSS-->
    <?php  

      require_once('meta_tags.php');

    ?>

    
   <style>
    div.margem {
      padding: 10px;
      margin-left: 100px;
      margin-right: 100px;
    }
  </style>

    <title>SMTP web</title>
  </head>
  <body>
    
    <!--navbar - barra de navegação -->
    <?php

      require_once('navbar.php');

    ?>
 


<!-- formulário -->
<main role="main">
  
<form>
  <div class="form-row margem">
  <div class="form-group col-md-6">
    <label for="email">Endereço de email</label>
    <input type="email" class="form-control" id="email" placeholder="Email@dominio.com.br">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>  -->
  </div>
  <div class="form-group col-md-4">
    <label for="senha">Senha </label>
    <input type="password" class="form-control" id="senha" placeholder="Senha">
  </div>
  </div>

  <div class="form-row margem">
  <div class="form-group col-md-6">
    <label for="host">Servidor SMTP</label>
    <input type="text" class="form-control" id="host" placeholder="smtp.dominio.com.br">
  </div>

  <div class="form-group col-md-2">
    <label for="porta">porta</label>
      <select id="porta" class="form-control">
        <option selected>587</option>
        <option>465</option>
      </select>
  </div>
  <div class="form-group col-md-2">
    <label for="criptografia">criptografia</label>
      <select id="criptografia" class="form-control">
        <option selected>Nenhum</option>
        <option>SSL</option>
        <option>TLS</option>
      </select>
  </div>
  </div>
  <div class="form-group col-md-10">
    <label for="destinatario">Destinatário</label>
    <input type="text" class="form-control" id="destinatário">
  </div>
  <div class="form-group col-md-10">
    <label for="conteudo">Corpo do email</label>
    <textarea class="form-control" id="conteudo" rows="5"></textarea>
  </div>
  <div class="form-group margem">
    <label for="anexo">anexo</label>
    <input type="file" class="form-control-file" id="anexo">
  </div>
<div class="margem">
  <button  type="submit" class="btn btn-primary ">Submit</button>
</form>
</div>
</main>
    <?php

      require_once('javascript.php');

    ?>

</body>
</html>
