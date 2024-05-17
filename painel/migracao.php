<!doctype html>
<html lang="en" class="ls-theme-green">

<head>
    <!--meta tags e CSS-->
    <?php  
      require_once('meta_tags.php');
    ?>
        <title>Migração de emails</title>
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
                <h1 class="ls-title-intro">Migração de Emails</h1>

                <form action="migra.php" method="post" class="ls-form row">
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-6 col-md-5 col-lg-6 ls-box">
                                <label class="ls-label col-md-9">
                                    <b class="ls-label-text">Conta de email origem</b>
                                    <p class="ls-label-info">Digite sua conta de email de origem</p>
                                    <input type="text" name="emailorigem" placeholder="contato@dominio.com.br" id="emailorigem" required>
                                </label>

                                <label class="ls-label col-md-4">
                                    <b class="ls-label-text">Senha origem</b>
                                    <div class="ls-prefix-group">
                                        <input type="password" maxlength="20" id="passwordorigem" name="passwordorigem">
                                        <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#passwordorigem" href="#">
                                        </a>
                                    </div>
                                </label>

                                <label class="ls-label col-md-9">
                                    <b class="ls-label-text">Servidor de origem</b>
                                    <p class="ls-label-info">Digite o host de origem</p>
                                    <input type="text" name="hostorigem" placeholder="email-ssl.com.br" id="hostorigem" required>
                                </label>

                                <label class="ls-label col-md-4">
                                    <b class="ls-label-text">Criptografia</b>
                                    <div class="ls-custom-select">
                                        <select class="ls-select" name="criptografiaorigem" id="criptografiaorigem">
                                            <option value="">Nenhuma</option>
                                            <option value="--ssl1">SSL</option>
                                            <option value="--tls1">TLS</option>
                                        </select>
                                    </div>
                                </label>

                                <label class="ls-label col-md-4">
                                    <b class="ls-label-text">porta IMAP</b>
                                    <div class="ls-custom-select">
                                        <select class="ls-select" name="portaorigem" id="portaorigem">
                                            <option value="143">143</option>
                                            <option value="993">993</option>

                                        </select>
                                    </div>
                                </label>

                            </div>

                            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0 ls-box">
                                <label class="ls-label col-md-9">
                                    <b class="ls-label-text">Conta de email destino</b>
                                    <p class="ls-label-info">Digite sua conta de email de destino</p>
                                    <input type="text" name="emaildestino" placeholder="contato@dominio.com.br" id="emaildestino" required>
                                </label>
                                <label class="ls-label col-md-4">
                                    <b class="ls-label-text">Senha destino</b>
                                    <div class="ls-prefix-group">
                                        <input type="password" maxlength="20" id="passworddestino" name="passworddestino">
                                        <a class="ls-label-text-prefix ls-toggle-pass ls-ico-eye" data-toggle-class="ls-ico-eye, ls-ico-eye-blocked" data-target="#passworddestino" href="#"></a>
                                    </div>
                                </label>

                                <label class="ls-label col-md-9">
                                    <b class="ls-label-text">Servidor de destino</b>
                                    <p class="ls-label-info">Digite o host de destino</p>
                                    <input type="text" name="hostdestino" placeholder="email-ssl.com.br" id="hostdestino" required>
                                </label>

                                <label class="ls-label col-md-4">
                                    <b class="ls-label-text">Criptografia</b>
                                    <div class="ls-custom-select">
                                        <select class="ls-select" name="criptografiadestino" id="criptografiadestino">
                                            <option value="">Nenhuma</option>
                                            <option value="--ssl2">SSL</option>
                                            <option value="--tls2">TLS</option>
                                        </select>
                                    </div>
                                </label>

                                <label class="ls-label col-md-4">
                                    <b class="ls-label-text">porta IMAP</b>
                                    <div class="ls-custom-select">
                                        <select class="ls-select" name="portadestino" id="portadestino">
                                            <option value="143">143</option>
                                            <option value="993">993</option>
                                        </select>
                                    </div>
                                </label>

                            </div>
                        </div>
                    </fieldset>
                    <div class="row">
                        <div class="ls-actions-btn col-auto mr-auto">
                            <button class="ls-btn" type="submit" value="Enviar">Migrar email</button>
                            <button class="ls-btn-danger" type="reset" value="Limpar">Limpar campos</button>
                        </div>
                    </div>

                </form>
            </div>
        </main>

        <!--footer com js e notifications-->
        <?php
          require_once('javascript.php');
        ?>
</body>

</html>