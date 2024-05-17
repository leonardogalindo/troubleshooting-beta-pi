<!DOCTYPE html>
<html lang="en" class="ls-theme-wine">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
    <?php require_once('meta_tags.php'); ?>
    <title>Lista de ramais</title>
</head>
<body>
    <?php
        require_once('navbar.php');
        require_once('aside.php');
    ?>
    <script type="text/javascript" src="scripts.js" defer></script>

    <main class="ls-main">
        <div class="container-fluid">
            <h1 class="ls-title-intro ls-ico-home">Lista de ramais</h1>

            <div class="ls-list ls-box ls-sm-space">
                <header class="ls-list-header">
                    <label class="ls-label col-md-3">
                        <b class="ls-label-text">Filtro de busca</b>
                        <p class="ls-label-info">Pesquise por aqui</p>
                        <input type="text" name="filter1" id="filter1" onkeyup="filtering()">
                    </label>
                </header>

                <table class="ls-table ls-table-striped ls-md-space" id="lista">
                    <thead>
                        <tr>
                            <th>Ramal</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                        </tr>
                    </thead>
                    <tbody>
  <tr>
      <td>24</td>
      <td>TEL_EMAIL_GO</td>
    <td>EmailGo</td>
    </tr>
    <tr>
      <td>183</td>
      <td>TEL_SUPORTE_AEP</td>
    <td>RAMAL SUPORTE AEP</td>
    </tr>
        <tr>
      <td>101</td>
      <td>TEL_EXCHANGE</td>
    <td>RAMAL EXCHANGE</td>
    </tr>
    <tr>
      <td>339</td>
      <td>TEL_EMAIL</td>
    <td>RAMAL LOCAMAIL</td>
    </tr>
    <tr>
      <td>353</td>
      <td>TEL_COBRANCA</td>
    <td>RAMAL COBRANÇA SEGUNDA Á SEXTA DAS 08:00 AS 18:00</td>
    </tr>
    <tr>
      <td>367</td>
      <td>TEL_REVENDA_PLESK</td>
    <td>RAMAL REVENDA PLESK</td>
    </tr>
    <tr>
      <td>551</td>
      <td>TEL_REVENDA_CPANEL</td>
    <td>RAMAL REVENDA CPANEL (IURIXXXX GARGARINXXXX)</td>
    </tr>
    <tr>
      <td>560</td>
      <td>TEL_EMAIL_MARKETING</td>
    <td>RAMAL EMAIL MARKETING SAAS</td>
    </tr>
    <tr>
      <td>563</td>
      <td>TEL_SMTP</td>
    <td>RAMAL SMTP LOCAWEB SAAS</td>
    </tr>
    <tr>
      <td>681</td>
      <td>TEL_CORPORATIVO</td>
    <td>RAMAL CORP CLIENTE COM TAG VIP SERVIDOR G0 PARA SERVIÇO DE EMAIL SEGUIR O ATENDIMENTO NO CONVENCIONAL</td>
    </tr>
    <tr>
      <td>776</td>
      <td>TEL_LINUX</td>
    <td>RAMAL HOSPEDAGEM LINUX COMPARTILHADA</td>
    </tr>
    <tr>
      <td>777</td>
      <td>TEL_WINDOWS</td>
    <td>RAMAL HOSPEDAGEM WINDOWS COMPARTILHADA</td>
    </tr>
    <tr>
      <td>778</td>
      <td>TEL_CLOUD_SERVER</td>
    <td>RAMAL CLOUD SERVER PRO G0</td>
    </tr>
    <tr>
      <td>779</td>
      <td>TEL_COBRANCA_CORP</td>
    <td>RAMAL COBRANÇA CORP SEGUNDA Á SEXTA DAS 08:00 AS 18:00</td>
    </tr>
    <tr>
      <td>993</td>
      <td>TEL_INSIDE_SALES</td>
    <td>VENDAS SEGUNDA Á SEXTA DAS 08:00 AS 18:00</td>
    </tr>   
	 <tr>
      <td>996</td>
      <td>TEL_CUSTOMER_CARE</td>
    <td>CANCELAMENTO SEGUNDA Á SEXTA DAS 08:00 AS 18:00</td>
    </tr>
         <tr>
      <td>10</td>
      <td>TEL_REVENDA_LOCAWEB</td>
    <td>NOVA REVENDA LOCAWEB</td>
    </tr>
         <tr>
      <td>39</td>
      <td>TEL_DBAAS</td>
    <td>RAMAL DBAAS BANCO DE DADOS MSSQL</td>
    </tr>
   <tr>
      <td>42</td>
      <td>TEL_O365_WORKSPACE</td>
    <td>PRODUTO GOOGLE WORKSPACE SAAS</td>
    </tr>
   <tr>
      <td>88</td>
      <td>TEL_VPS</td>
    <td>PRODUTO VPS LOCAWEB G0 CLOUD</td>
    </tr>
   <tr>
      <td>89</td>
      <td>TEL_WORDPRESS_LOCAWEB</td>
    <td>PRODUTO WORDPRESS LOCAWEB</td>
    </tr>
   <tr>
      <td>93</td>
      <td>TEL_HOSPEDAGEM_VPS</td>
    <td>PRODUTO HOSPEDAGEM DEDICADA (l70 vpshost vpswhost)CLOUD</td>
    </tr>
   <tr>
      <td>205</td>
      <td>TEL_REGISTRO</td>
    <td>PRODUTO REGISTRO DE DOMINIO NACIONAL E INTERNACIONAL</td>
    </tr>
   <tr>
      <td>355</td>
      <td>TEL_SERV_DEDICADO</td>
    <td>PRODUTO SERVIDOR DEDICADO MAQUINA FISICA CLOUD</td>
    </tr>
   <tr>
      <td>356</td>
      <td>TEL_PABX_VIRTUAL</td>
    <td>PRODUTO PABX VIRTUAL SAAS</td>
    </tr>
   <tr>
      <td>634</td>
      <td>TEL_OFFICE_365</td>
    <td>PRODUTO OFFICE 365 SAAS</td>
    </tr>
   <tr>
      <td>826</td>
      <td>TEL_CRIADOR_DE_SITES</td>
    <td>PRODUTO CRIADOR DE SITES </td>
    </tr>
</tbody>
</table>
        </div>
        <footer class="ls-footer" role="contentinfo">
  <nav class="ls-footer-menu">
      <h2 class="ls-title-footer">suporte e ajuda</h2>
      <ul class="ls-footer-list">
        <li>
          <a href="https://lwp.service-now.com/" target="_blank" class="bg-customer-support">
            <span class="visible-lg">Service Now</span>
          </a>
        </li>
        <li>
          <a href="https://locaweb.beedoo.io/feed" target="_blank" class="bg-my-tickets">
            <span class="visible-lg">Beedoo</span>
          </a>
        </li>
        <li>
          <a href="https://locaweb.com.br/ajuda" target="_blank" class="bg-help-desk">
            <span class="visible-lg">Ajuda Locaweb</span>
          </a>
        </li>
        <li>
          <a href="https://statusblog.locaweb.com.br/" target="_blank" class="bg-statusblog">
            <span class="visible-lg">Statusblog</span>
          </a>
        </li>
      </ul>
  </nav>
  <div class="ls-footer-info">
    <span class="last-access ls-ico-screen"><strong>Último acesso: </strong>99/99/9999 99:99:99</span>
    <div class="set-ip"><strong>IP:</strong> 000.00.00.000</div>
    <p class="ls-copy-right">Copyright © 1997-2023 Serviços de Internet S/A.</p>
  </div>
</footer>
    </main>
        
        <!--footer com js e notifications-->
        <?php
          require_once('javascript.php');
        ?>
        
</body>
</html>
