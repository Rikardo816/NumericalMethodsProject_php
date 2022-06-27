<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método de Bisección</title>
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
                
                <h1>Método de Bisección</h1>
                <form name="formulario" method="post" action="actionBisec.php">
                    Función:
                    <input type="text" name="funcion" value=""><br><br>
                    Límite a:
                    <input type="text" name="a" value=""><br><br>
                    Límite b:
                    <input type="text" name="b" value=""><br><br>
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