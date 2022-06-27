<?php
    namespace MathPHP\NumericalAnalysis\RootFinding;

    require('FixedPointIteration.php');

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

    if(isset($_POST['p'])) {
        $p = $_POST['p'];
    }

    if(isset($_POST['tol'])) {
        $tol = $_POST['tol'];
    }

    $resultado = FixedPointIteration::solve($funcion, $a, $b, $p, $tol);

    echo "Resultado: " . $resultado;
?>