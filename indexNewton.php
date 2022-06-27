<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método de Newton Raphson</title>
</head>
<body>
    <h1>Método de Newton Raphson</h1>
    <form name="formulario" method="post" action="actionNewton.php">
        Función:
        <input type="text" name="funcion" value=""><br><br>
        Estimación inicial:
        <input type="text" name="p" value=""><br><br>
        Tolerancia:
        <input type="text" name="tol" value=""><br><br>
        <input type="submit" value="Boton para enviar">
    </form>
</body>
</html>