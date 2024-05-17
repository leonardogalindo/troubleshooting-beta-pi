<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecionamento de Links</title>
</head>
<body>
    <form action="" method="post" target="_blank">
        <label for="tipo">Selecione o tipo:</label>
        <select name="tipo" id="tipo">
            <option value="INC">INC</option>
            <option value="RITM">RITM</option>
            <option value="PRB">PRB</option>
            <option value="KB">KB</option>
        </select>
        <label for="numero">Número do incidente:</label>
        <input type="text" name="numero" id="numero" required>
        <input type="submit" value="Visualizar">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o valor selecionado no campo tipo e o número inserido
        $tipo = $_POST["tipo"];
        $numero = $_POST["numero"];

        // Redireciona para o link correspondente
        switch ($tipo) {
            case "INC":
                $url = "https://lwp.service-now.com/incident.do?sysparm_query=number=" . $numero;
                break;
            case "RITM":
                $url = "https://lwp.service-now.com/sc_req_item.do?sysparm_query=number=" . $numero;
                break;
            case "PRB":
                $url = "https://lwp.service-now.com/problem.do?sysparm_query=number=" . $numero;
                break;
            case "KB":
                $url = "https://lwp.service-now.com/kb_view.do?sysparm_article=" . $numero;
                break;
            default:
                echo "Tipo inválido";
                exit();
        }

        // Redireciona para o link construído
        header("Location: $url");
        exit();
    }
    ?>
</body>
</html>
