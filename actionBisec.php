<?php
    namespace MathPHP\NumericalAnalysis\RootFinding;

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

    echo "Resultado: " . $resultado;
?>