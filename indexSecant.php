<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método de la secante</title>
</head>
<body>
    <h1>Método de la secante</h1>
    <form name="formulario" method="post" action="actionSecant.php">
        Función:
        <input type="text" name="funcion" value=""><br><br>
        Aproximación xi:
        <input type="text" name="a" value=""><br><br>
        Aproximación xi-1:
        <input type="text" name="b" value=""><br><br>
        Tolerancia:
        <input type="text" name="tol" value=""><br><br>
        <input type="submit" value="Boton para enviar">
    </form>
</body>
</html>