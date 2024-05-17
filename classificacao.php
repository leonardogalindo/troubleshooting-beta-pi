<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar 3 domínios do servidor</title>
</head>

<body>

   <h1>teste</h1>

   <?php

        $servername = "banco";
        $username = "";
        $password = "";
        $dbname = "";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM Hospedagem";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
            echo $row['Terceiro_nivel'];
        }
        } else {
        echo "0 results";
        }

        mysqli_close($conn);
   
   ?>

</body>

</html>
