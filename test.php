
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <h1>Form Data</h1>
                <ul>
                    <li>Servidor: </li>
                    <li>Username: </li>
                    <li>Password: </li>
                    <li>DB_Name: </li>
                </ul>

                <?php

                  function testar() {

                    $conn = mysqli_connect(, , , );

                    if (!$conn) {
                        echo "Há algo errado";
                    } else {
                        echo "Conectado";
                    }
            
                    mysqli_close($conn);
                  }
                ?>

                <button onclick="testar()">Testar</button>


            </body>
            </html>
            