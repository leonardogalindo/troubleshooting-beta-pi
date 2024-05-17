<!doctype html>
<html lang="en" class="ls-theme-green">
<head>
    <!--meta tags e CSS-->
    <?php  
      require_once('meta_tags.php');
    ?>
        <title>Testes de email</title>
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
        <h1 class="ls-title-intro">Formulário de email PHPmailer (Com debug!)</h1>

        <form action="form.php" enctype="multipart/form-data" class="ls-form row" method="post">
  <fieldset>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">Conta de email</b>
      <p class="ls-label-info">Aqui gravamos os dados do from e sender</p>
      <input type="text" name="email" placeholder="contato@dominio.com.br" id="email" required >
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">Servidor</b>
      <p class="ls-label-info">Host de disparo dos emails</p>
      <input type="text" name="host" placeholder="email-ssl.com.br" id="host" required >
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">Usuário</b>
      <p class="ls-label-info">Usuário da autenticação do email</p>
      <input type="text" name="user" placeholder="Usuário" id="user" required >
    </label>
    <label class="ls-label col-md-4">
      <b class="ls-label-text">Senha</b>
      <div class="ls-prefix-group">
        <input type="password" maxlength="20" id="password" name="password">
          <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#password" href="#">
          </a>
      </div>
    </label>
      <label class="ls-label col-md-4">
        <b class="ls-label-text">Criptografia</b>
      <div class="ls-custom-select">        
    <select class="ls-select" name="criptografia" id="criptografia">
        <option value="">Nenhuma</option>
        <option value="ssl">SSL</option>
        <option value="tls">TLS</option>
    </select>
    </div>
    </label>
    <label class="ls-label col-md-4">
        <b class="ls-label-text">Porta de envio</b>
      <div class="ls-custom-select">        
    <select class="ls-select" name="porta" id="porta">
        <option value="587">587</option>
        <option value="465">465</option>
    </select>
    </div>
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">Destinatário</b>
      <p class="ls-label-info">email que irá receber o envio deste form</p>
      <input type="text" name="destino" placeholder="contato@dominio.com.br" id="destino" required >
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">Assunto</b>
      <p class="ls-label-info">Assunto do email enviado</p>
      <input type="text" name="assunto" placeholder="teste Locaweb" id="assunto" required >
    </label>
    <label class="ls-label col-md-9">
      <b class="ls-label-text">Anexo</b>
      <input type="file" name="anexo" id="anexo" />
    </label>
    <label class="ls-label">
      <b class="ls-label-text">Mensagem</b>
      <textarea rows="3" class="ls-textarea-autoresize" name="mensagem" id="mensagem">Olá, esta é uma mensagem de teste enviada via PHPMailer com seus dados de envio!</textarea>
    </label>
    <div class="ls-actions-btn">
    <button class="ls-btn" type="submit" value="Enviar">Enviar</button>
    <button class="ls-btn-danger" type="reset" value="Limpar">Resetar campos</button>
  </div>
  </fieldset>
  </form>
      
    </main>
        <!--footer com js e notifications-->
        <?php
          require_once('javascript.php');
        ?>
</body>
</html>