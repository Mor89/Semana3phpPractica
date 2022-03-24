<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Registro de Cliente</h1>
    <form method="post" action="procesar.php">
    DUI: <input type= "number" name="dui" required size="35" maxlength="45">
    NIT: <input type= "number" name= "nit" required size="35" maxlength="45"></br></br>
    Nombre: <input type="text" name="fecha" required size ="45" maxlength="45">
    Apellido: <input type="text" name="apellido" requied size ="45" maxlength="45"></br></br>
    Direccion: <input tipe="text" name="apellido" requied size ="60" maxlength="70"></br></br>
    <label for="sexo">Sexo:</label>
    <select id="sexo" name="sexo">
        <option value="F">F</option>
        <option value="M">M</option>
    </select>

    <label for="Estado cibil">estado cibil:</label>
    <select id="estado_Cibil" name="E cibil">
        <option value= "casado" >Casado </option>
        <option value= "soltero">Soltero</option>
        <option value= "acompañado>Acompañado">Acompañado</option>
        <option value= "divorsiado">Divorsiado</option>
        <option value= "viudo"> Viudo</option>
    </select></br></br>
    <p>Tipo de Empleo :<input type="radio" id="permanente" name="tipoEmpleo" value="Permanente">
    <label for="permanente">Permanente</label>
    <input type="radio" id="contrato" name="tipoEmpleo" value="Contrato">
    <label for="contrato">Contrato</label></p></br></br>
    <input type="submit" value="GUARDAR" name="btn">
</form>
</body>
</html> 