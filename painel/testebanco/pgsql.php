<?php
if (isset($_POST["query"]) == false) die;
$host    = $_POST["host"];
$usuario = $_POST["login"];
$senha   = $_POST["senha"];
$banco   = $_POST["banco"];

$conexao=pg_connect("host=".$host." dbname=".$banco." user=".$usuario." password=".$senha) or die ("<p>Nao foi possivel conectar com o Banco</p>");

echo '<p class="x">' . "</p>\n";
$sql = $_POST["query"];
$rs = pg_query($sql);
$regs = pg_num_rows($rs);
$fields = pg_num_fields($rs);

echo("<table border='1'>\n");
// retornando todos os nomes de campos
if ($fields > 0 ) {
	echo("<tr>\n");
	for ($coluna = 0; $coluna < $fields; $coluna++) {
		echo('<td class="x"><b>'.str_replace("<", "&lt;", str_replace(">", "&gt;", pg_field_name($rs,$coluna)))."</b></td>\n");
	}
	echo("</tr>\n");
}

// retornando todos os registros
if ($regs > 0) {
	$linha = 0;
	while ($linha < $regs){
		echo("<tr>\n");
		$coluna = 0;
		while ($coluna < $fields){
			$mostra = pg_result($rs,$linha,$coluna);
			if ($mostra == NULL) $mostra = "<i>NULL</i>";
			echo('<td class="x">'.str_replace("<", "&lt;", str_replace(">", "&gt;", $mostra))."</td>\n");
			$coluna++;
		}
		echo("</tr>\n");
		$linha++;
	}
}
echo("</table>");
pg_close($conexao);
?>
