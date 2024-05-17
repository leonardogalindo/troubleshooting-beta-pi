<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>[PHP] Teste de conex&atilde;o com banco de dados</title>
<style>
.x {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:smaller;}
.y {font-family:Verdana, Arial, Helvetica, sans-serif; font-size:xx-small;}
</style>
</head>
<body>
<h2>Exemplo simples de conex&atilde;o com MySQL, PostgreSQL e SQL Server</h2>
<form class="x" action="" method="post">
<p class="x">Dados do servidor<br>
<table border="0">
<tr><td class="x">Tipo: </td><td><select class="x" name="tipo" id="tipo">
  <option value="mysql"<?php if((isset($_POST[tipo])) and ($_POST[tipo] == "mysql")) echo(" selected"); ?>>MySQL</option>
  <option value="pgsql"<?php if((isset($_POST[tipo])) and ($_POST[tipo] == "pgsql")) echo(" selected"); ?>>PostgreSQL</option>
  <option value="mssql"<?php if((isset($_POST[tipo])) and ($_POST[tipo] == "mssql")) echo(" selected"); ?>>SQL Server</option>
</select></td></tr>
<tr><td class="x">Servidor: </td><td><input class="x" type="text" name="host" id="host" value="<?php echo($_POST[host]); ?>"></td></tr>
<tr><td class="x">Usuario: </td><td><input class="x" type="text" name="login" id="login" value="<?php echo($_POST[login]); ?>"></td></tr>
<tr><td class="x">Senha: </td><td><input class="x" type="password" name="senha" id="senha" value="<?php echo($_POST[senha]); ?>"></td></tr>
<tr><td class="x">Nome da base: </td><td><input class="x" type="text" name="banco" id="banco" value="<?php echo($_POST[banco]); ?>"></td></tr>
</table>
<p class="x">Informe a query:<br>
<textarea class="x" name="query" id="query" cols="80" rows="12"><?php echo($_POST[query]); ?></textarea>
</p>
<div class="x">
<input class="x" type="submit" value="enviar">
</div>
<div class="x"><b>Este arquivo (index.php) &eacute; somente um formulario que faz um include em</b></div>
<div class="x">'mysqlphp', 'pgsql.php' <b>e</b> 'mssql.php'<b>, conforme o tipo de banco.</b></div>
<div class="x"><b>Caso queira basear-se no exemplo de conex&atilde;o direta com banco, vejam o</b></div>
<div class="x"><b>de um dos tr&ecirc;s arquivos citados acima.</b></div>
<br>
<div class="x"><b>Query sugerida:</b></div>
<div class="y"><b>MySQL:</b> SHOW TABLES;</div>
<div class="y"><b>SQL Server:</b> sp_help;</div>
<div class="y"><b>PostgreSQL:</b> SELECT schemaname, tablename FROM pg_tables WHERE schemaname NOT LIKE
'information_schema' AND schemaname NOT LIKE 'pg_catalog' ORDER BY
schemaname ASC , tablename ASC;</div>
</form>
<?php
	/* APARTIR DAQUI TEREMOS O CODIGO PHP PARA CONECTAR AOS BANCOS DE DADOS */
	if(isset($_POST[tipo])) {
		require($_POST[tipo] . ".php");
	}
?>
</body>
</html>
