<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método de Newton Raphson</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manjari&display=swap" rel="stylesheet">

</head>
<body>
<header>
        <h1>Métodos para encontrar raíces con PHP</h1>
    </header>
    <div id="container">

        <div id="center">
    <h1>Método de Newton Raphson</h1>
    <form name="formulario" method="post" action="actionNewton.php">
        Función:
        <input type="text" name="funcion" value=""><br><br>
        Estimación inicial:
        <input type="text" name="p" value=""><br><br>
        Tolerancia:
        <input type="text" name="tol" value=""><br><br>
        <input type="submit" id="boton" value="Boton para enviar">
    </form>
    </div>
            
            <footer>
                Metodos Numéricos 2022A
            </footer>
        </div>
    
</body>
</html>