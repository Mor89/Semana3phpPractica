<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mostrar Datos:</h1>
    <?php
    if(isset($_REQUEST["carnet"]))
    {
        echo "<br>Carnet:".$_REQUEST["carnet"];
        echo "<br>nombre:".$_REQUEST["nombre"];
        echo "<br>fecha de Nac:".$_REQUEST["fecha"];
    }
    ?>
</body>
</html>