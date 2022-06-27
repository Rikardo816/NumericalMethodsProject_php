<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método del punto fijo</title>
</head>
<body>
    <h1>Método del punto fijo</h1>
    <form name="formulario" method="post" action="actionFp.php">
        Función:
        <input type="text" name="funcion" value=""><br><br>
        Límite a:
        <input type="text" name="a" value=""><br><br>
        Límite b:
        <input type="text" name="b" value=""><br><br>
        Estimación inicial:
        <input type="text" name="p" value=""><br><br>
        Tolerancia:
        <input type="text" name="tol" value=""><br><br>
        <input type="submit" value="Boton para enviar">
    </form>
</body>
</html>