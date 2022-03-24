<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de ingreso de datos</h1>
    <form method="post" action="procesar.php">
    Carnet: <input type= "number" name="carnet" required="true"></br>
    Nombre: <input type= "text" name= "nombre" required size="40" maxlength="40"></br>
    Fecha de nacimiento: <input type="date" name="fecha" required></br>
    <input type="submit" value="Enviar todos" name="btn">
</form>
</body>
</html>