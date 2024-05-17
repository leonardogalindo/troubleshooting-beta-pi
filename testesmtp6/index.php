<!doctype html>
<html lang="en" class="ls-theme-blue">
<head>
    <!--meta tags e CSS-->
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Insira aqui a descrição da página.">
    <link href="https://assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" sizes="192x192" href="/locawebstyle/assets/images/ico-boilerplate.png">
    <link rel="apple-touch-icon" href="/locawebstyle/assets/images/ico-boilerplate.png">
        <title>Testes de email</title>
</head>
<body>

  <div class="ls-topbar ">

  <!-- Barra de Notificações -->

  <span class="ls-show-sidebar ls-ico-menu"></span>

  <a href="index.php"  class="ls-go-next"><span class="ls-text">Voltar à lista de serviços</span></a>

  <!-- Nome do produto/marca com sidebar -->
    <h1 class="ls-brand-name">
      <a href="index.php" class="ls-ico-panel-cloud">
        Formulário de testes
      </a>
    </h1>

  <!-- Nome do produto/marca sem sidebar quando for o pre-painel  -->
</div>

    <!--navbar - barra de navegação -->

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
        <!--footer com js-->
      <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js" type="text/javascript"></script>
</body>
</html>
