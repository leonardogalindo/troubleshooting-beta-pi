<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de formulário HTML</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <h1>Teste de envio de formulários HTML</h1>

    <form action="/teste_form.php" method="post">
        <label for="">Nome</label>
        <input type="text" id="nome" name="nome" required>
        <label for="">Número</label>
        <input type="number" id="numero" name="numero" required>
        <label for="">Data</label>
        <input type="date" id="date" name="date">
        <label for="">Range</label>
        <input type="range" id="range" name="range" required>
        <label for="">Time</label>
        <input type="time" id="time" name="time" required>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $numero = $_POST['numero'];
        $date = $_POST['date'];
        $range = $_POST['range'];
        $time = $_POST['time'];

        echo "</br>";
        echo "Nome: $nome<br>";
        echo "Número: $numero<br>";
        echo "Data: $date<br>";
        echo "Range: $range<br>";
        echo "Time: $time<br>";
    }
    ?>

    <p>Clique no botão abaixo para fazer download do arquivo com o código fonte desse form.</p>
    <p>Adicione o arquivo dentro da pasta public_html da hospedagem e acesse o domínio do cliente com /teste_form.php</p>
    <p>Atenção! Esse form utiliza PHP para renderizar as informações em tela.</p>
    <button onclick="baixarArquivo()">Baixar arquivo</button>

    <script>
        function baixarArquivo() {
            fetch('http://painel-atendimen1.hospedagemdesites.ws/teste_form.php')
                .then(response => response.blob())
                .then(blob => {
                    var downloadUrl = URL.createObjectURL(blob);
                    var a = document.createElement("a");
                    a.style.display = 'none';
                    a.href = downloadUrl;
                    a.download = 'teste_form.php';
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                    URL.revokeObjectURL(downloadUrl);
                });
        }
    </script>


</body>

</html>