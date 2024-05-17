<!doctype html>
<html lang="en" class="ls-theme-wine">
<head>
    <!--meta tags e CSS-->
    <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
    <?php  
      require_once('meta_tags.php');
    ?>
        <title>Comandos Linux</title>
             
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
        <h1 class="ls-title-intro ls-ico-home">Lista de Comandos</h1>
        <div class="ls-list ls-box ls-sm-space">
      <label class="ls-label col-md-3">
      <b class="ls-label-text">Filtro de busca</b>
      <p class="ls-label-info">Pesquise por aqui</p>
      <input type="text" name="filter1" id="filter1" onkeyup="filtering()">
    </label>

<table class="ls-table ls-table-striped ls-md-space" id="lista">
  <thead>
    <tr>
      <th>comandos</th>
      <th>Descrição</th>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td> curl -SO http://baixar.tecnologia.ws/backup/cms/SugarCE-6.5.20.zip && unzip SugarCE-6.5.20.zip && rm SugarCE-6.5.20.zip && mv SugarCE-Full-6.5.20/* . && rm -r SugarCE-Full-6.5.20</td>
    <td>Baixar SugarCRM</td>
    </tr>
<tr>
     <td>find . -atime -1</td>
    <td>Buscar por arquivos que foram modificados há menos de 1 dia</td>
	</tr>
  <tr>
      <td> find ~/public_html/  -type f -ctime -7 -name '*.php'</td>
    <td> Verificar se teve alterações nos arquivos nos últimos 7 dias</td>
    </tr>
<tr>
     <td>sudo /sbin/locadmin/hospedagem/editar_vhost FTP</td>
    <td>Editar Vhost</td>
	</tr>
  <tr>
      <td> sudo /etc/init.d/httpd reload</td>
    <td>Recarregar Apache</td>
    </tr>
    <tr>
     <td>sudo /etc/init.d/httpd restart</td>
    <td>Reiniciar Apache</td>
	</tr>
  <tr>
     <td>sudo /etc/init.d/varnish restart</td>
    <td>Reiniciar Varnish</td>
	</tr>
  <tr>
     <td>tomcat stop & tomcat start</td>
    <td>Reiniciar TomCat Rodar dentro do FTP do cliente</td>
	</tr>
  <tr>
     <td> du -sh .</td>
    <td>Verificar espaço usado em disco Do Cliente "Rodar dentro do FTP do cliente"</td>
	</tr>
  <tr>
     <td>df -h</td>
    <td>Verificar espaço usado em disco do servidor</td>
	</tr>
  <tr>
     <td>find . -type f | wc -l</td>
    <td> Listar quantidade de arquivos</td>
	</tr>
  <tr>
     <td>user-fix-owner public_html 1</td>
    <td>Corrigir permissão do usuário FTP.</td>
	</tr>
  <tr>
     <td>find . -type d -exec chmod 755 {}  \; && find . -type f -exec chmod 644 {}  \; && chmod 750 .</td>
    <td>Corrigir permissionamento de pastas e arquivos no ftp do cliente</td>
	</tr>
  <tr>
     <td>sudo pgrep httpd | wc -l ; sudo /etc/init.d/httpd status; sudo /etc/init.d/varnish status; uptime ;time df -h</td>
    <td>Status do serviços do servidor / varnish, apache, consumo etc</td>
	</tr>
  <tr>
     <td>tar -czvf novo.tar.gz PASTA</td>
    <td>Criar arquivo TAR</td>
	</tr>
  <tr>
     <td>gunzip arquivo.tar.gz</td>
    <td>descompactar Arquivos TAR</td>
	</tr>
  <tr>
     <td>find . -type f -exec grep -H "eval(base64_decode(" {} \; | awk -F: '{print $1}'
find . -type f -exec grep -H '$qV="stop_"' {} \; | awk -F: '{print $1}'
find . -type f -exec grep -H "PCT4BA6ODSE" {} \; | awk -F: '{print $1}'
find . -type f -exec grep -H "FilesMan" {} \; | awk -F: '{print $1}'
find ~/public_html/ -name *.php | xargs egrep -ri "strtolower|strtoupper" | egrep "\{eval" | awk '{print $1}' | cut -d':' -f1
find ~/ -name '*.php' | xargs egrep -ri "[$][A-Za-z][0-9][0-9]\[|[$][A-Za-z][A-Za-z][A-Za-z][0-9][0-9]\[|[$][A-Za-z][A-Za-z][A-Za-z][0-9][0-9]\}|[;][$][A-Za-z][A-Za-z][A-Za-z][0-9][0-9]|[;][$][A-Za-z][A-Za-z][A-Za-z][0-9]|[$][{][$][A-Za-z][A-Za-z][A-Za-z][A-Za-z][0-9][0-9]|[(][$][{][$][A-Za-z][A-Za-z][A-Za-z][0-9][0-9]" | awk -F: '{print $1}' | sort -u | xargs ls -la</td>
    <td>Segurança - Verificar arquivos maliciosos Rode dentro do FTP.</td>
	</tr>
  <tr>
     <td>find . -type f -name '*.php' -o -name '*.ico' | xargs egrep -sri "shell|Obfuscator|edoced_46esab|WSO|FilesMan|ALREADY_RUN|preg_replace|strtolower|strtoupper|str_replace|$GLOBALS|Array|$V0mRd|die\(PHP_OS.chr" | egrep -rsi "FilesMan|shellbox123|[$]ua5T4A|x76al|[$]affdom|eval[(][$]_POST|eval[/][*]|eval\(base64_decode\(|eval\(\(base64_decode\(|eval\(gzinflate\(str_rot13\(base64_decode|[$]www=|$_F=__FILE__|compress\(|=urldecode\(|strrev\(|h10ac592|system\($_POST\[" | awk -F ':' '{print $1}' | uniq</td>
    <td>Segurança - Verificar arquivos maliciosos Rode dentro da public_html</td>
	</tr>
  <tr>
     <td>find . -type f \( -iname \*.php -o -iname \*.sh -o -iname \*.pl -o -iname \*.ico \) | xargs egrep -sri "for\([$]i=0[;] [$]i < strlen\([$]|[$][A-Za-z0-9]{9}=\"base\" \. \"64_decode\";return [$][A-Za-z0-9]{9}\([$]|\.gzuncompress\(base64\_decode\(|[$]wp_auth_key=[']|if\(preg_match_all\([']\/[\][$]tmpcontent = @file_get_contents[\]\(|wp_temp_setupx\(|[$][a-z]{6} = [$]_POST\[['][a-z]{22,}[']\];|} elseif \(\([$]perms & 0xA000\) == 0xA000\) {|<title>{keyword}</title>|unset\([$]{[$]heakhtkd}|[$][A-Za-z0-9]{11} = chr\([0-9]{3,}\^[0-9]{3,}\)\.chr\([0-9]{3,}\^[0-9]{3,}\)\.chr\([0-9]{3,}\^[0-9]{3,}\)|Mass Deface|[$][a-z0-9A-Z]{11,} = \"[a-z0-9A-Z]{300}|\.pw\/xx\.php\?|WebShell|=[a-z0-9A-Z]{15,}\(['][0-9a-z]{55}|[\]x[0-9]{2}[\]x[0-9]{2}[\]x[0-9]{2}[\]x[0-9]{2}[\]x[0-9]{2}[\]x[0-9]{2}[\]x[0-9]{2}[\]x[0-9]{2}|eval\([$][0-9A-Za-z]{10}|go\.onclasrv\.com\/apu\.php\?|c99madshell|install_code = ['][A-Za-z0-9]{30}|Bypass Shell|gzinflate\(str_rot13|eval\(gzinflate\(base64_decode|eval\(gzuncompress\(base64_decode|x397\\\x2ei\\\x63o|\.pw\/code\.php|chmod \+x doc2|wp-trans\.|phpddos|} elseif \(\([$]perms & 0xA000\) == 0xA000\) {| WSO |Dark Shell|cutMixDDataLPrevE|b374k-shell|[']FilesMan[']|IndoXploit|Web PHP Shell|preg_replace|strtolower|strtoupper|str_replace|[$]GLOBALS|[$]V0mRd|die\(PHP_OS\.chr" | egrep -rsi "for\([$]i=0[;] [$]i < strlen\([$]|\.gzuncompress\(base64\_decode\(|if\(preg_match_all\([']\/[\][$]tmpcontent = @file_get_contents[\]\(| WSO |cutMixDDataLPrevE|b374k-shell|Web PHP Shell|shellbox123|<title>{keyword}</title>|\)\{eval|[$]affdom|eval[(][$]_POST|eval[/][*]|eval\(base64_decode\(|eval\(\(base64_decode\(|Dark Shell|[$]www=|=explode\(chr\(|IndoXploit|[']FilesMan[']|phpddos|wp-trans\.|WebShell|c99madshell|Bypass Shell|[$]install_code|chmod \+x doc2|[$][A-Za-z0-9]{9}=\"base\" \. \"64_decode\";return [$][A-Za-z0-9]{9}\([$]|[$]wp_auth_key=[']|\.pw\/code\.php|x397\\\x2ei\\\x63o|eval\(gzinflate\(|eval\(gzuncompress\(base64_decode|@[$]GLOBALS\[[$]GLOBALS\[['][a-zA-Z0-9]{7,}[']\]\[[0-9]{2,}\]\.[$]GLOBALS\[|gzinflate\(str_rot13|eval \(gzinflate\(base64_decode|onclasrv\.com|freegeoip\.net|broin\.top|eval\(eval\(|=[a-z0-9]{15}\(['][0-9a-z]{55}|\.pw\/xx\.php\?|[$][a-z0-9A-Z]{11,} = \"[a-z0-9A-Z]{300}|Mass Deface|unset\([$]{[$]heakhtkd}|wp_temp_setupx\(|[$][A-Za-z0-9]{11} = chr\([0-9]{3,}\^[0-9]{3,}\)\.chr\([0-9]{3,}\^[0-9]{3,}\)\.chr\([0-9]{3,}\^[0-9]{3,}\)|[$][a-z]{6} = [$]_POST\[['][a-z]{22,}[']\];" --exclude={wp-app.php,class-simplepie.php,class-IXR.php,*.js} | awk '{print $1}' | cut -d':' -f1 | sort | uniq</td>
    <td>Segurança - Verificar arquivos maliciosos Completo dentro da public_html</td>
	</tr>
  <tr>
     <td>cat wp-includes/version.php | grep wp_version</td>
    <td>Verificar versao do wordpress Rodar dentro da public_html</td>
	</tr>
  <tr>
     <td>cd && mv php.ini php.ini_oldlw && cp /etc/php.ini . && sed -i 's/max_execution_time = 30/max_execution_time = 90/' php.ini && sed -i 's/max_input_time = 60/max_input_time = 90/' php.ini && sed -i 's/memory_limit = 32M/memory_limit = 1024M/' php.ini && sed -i 's/post_max_size = 8M/post_max_size = 50M/' php.ini && sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 50M/' php.ini && sed -i '954i session.save_path = "/home/'$USER'/tmp"' php.ini && sed -i '955d' php.ini  && ls -ilha | grep -i 'php.*'</td>
    <td>Criar novo PHP.INI Rodar fora da public_html </td>
	</tr>
  <tr>
     <td>sudo /usr/local/sbin/lwsmarts_firewall_remove_ip IPCLIENTE</td>
    <td>Remover IPTABLES </td>
	</tr>
  <tr>
     <td> sudo /sbin/locadmin/hospedagem/admin_statusweb LOGINDEFTP </td>
    <td>Verificar o Status da Hospedagem </td>
	</tr>
  <tr>
     <td>sudo /sbin/locadmin/hospedagem/admin_startweb LOGINDEFTP</td>
    <td>Ativar Hospedagem do Cliente </td>
	</tr>
  <tr>
     <td>sudo lwmyctrl matarconexoes USUARIODOBANCO</td>
    <td>Matar conexão com o banco de dados (myshared):'criarbase', 'removerbase', 'ativarbase', 'desativarbase', 'trocasenha', 'statusbase', 'matarconexoes' </td>
	</tr>
  <tr>
     <td>lwpgctrl matarconexoes NOME_DA_BASE</td>
    <td>Matar conexões do banco de dados postgree 'criarbase', 'removerbase', 'ativarbase', 'desativarbase', 'trocasenha', 'statusbase', 'matarconexoes'</td>
	</tr>
  <tr>
     <td>top ou top -c</td>
    <td>Comando para INC - Servidor indisponível</td>
	</tr>
  <tr>
     <td> pgrep httpd | wc -l ; sudo /etc/init.d/httpd status; sudo /etc/init.d/varnish status; uptime; time df -h ;sudo netstat -ntu | grep ':80 '| awk '{print $5}' | grep -v "servers\|Address" | cut -d: -f1 | sort | uniq -c | sort -n | grep -v '127\.0\.0\.1\|CLOSE\_WAIT\|TIME\_WAIT\|LISTEN|ESTABLISHED' | tac | head | tac | tac | head -n8 | tac | date </td>
    <td>Comando para INC - Servidor indisponível</td>
	</tr>
  <tr>
     <td>cat /var/log/messages | grep IPDOCLIENTE</td>
    <td>Verificar IPTABLES Mostra logs de quanto e porque foi listado</td>
	</tr>
  <tr>
     <td>cat /var/log/secure | grep IPDOCLIENTE</td>
    <td>Verificar IPTABLES Caso queira ver quando foi feita a remoção</td>
	</tr>
  <tr>
     <td>sudo /etc/init.d/iptables restart</td>
    <td>Verificar IPTABLES Restarta o IP table da maquina</td>
	</tr>
  <tr>
     <td>sudo /sbin/iptables -nL | grep IPDOCLIENTE</td>
    <td>Verificar IPTABLES Só para ver se está listado</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>
  <tr>
     <td>comandos</td>
    <td>Descrição</td>
	</tr>

</tbody>
</table>
        </div>
    </main>
        
        <!--footer com js e notifications-->
        <?php
          require_once('javascript.php');
        ?>
 
 

 
</body>
</html>
