<?php
namespace MathPHP\NumericalAnalysis\RootFinding;
?>

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
<script src="https://kit.fontawesome.com/a61aa2dc05.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <h1>Métodos para encontrar raíces con PHP</h1>
    </header>
    <div id="container">
        <div id="centro">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
<?php
    // namespace MathPHP\NumericalAnalysis\RootFinding;

    require('BisectionMethod.php');

    if(isset($_POST['funcion'])) {
        $fun = str_replace("x", "\$x", $_POST['funcion']);
        eval("\$funcion = fn(\$x) => $fun ;");
    }

    if(isset($_POST['a'])) {
        $a = $_POST['a'];
    }

    if(isset($_POST['b'])) {
        $b = $_POST['b'];
    }

    if(isset($_POST['tol'])) {
        $tol = $_POST['tol'];
    }

    $resultado = BisectionMethod::solve($funcion, $a, $b, $tol);

    echo "<span class=\"resultado\"> Resultado: " . $resultado . "</span>";

    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";

    echo "<a href=\"index.php\"><span class=\"boton\"> Volver al menú</span></a>";
?>
</div>

<footer>
            Metodos Numéricos 2022A
        </footer>
</div>
</body>
</html>