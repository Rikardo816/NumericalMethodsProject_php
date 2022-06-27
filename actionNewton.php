<?php
    namespace MathPHP\NumericalAnalysis\RootFinding;

    require('NewtonsMethod.php');

    if(isset($_POST['funcion'])) {
        $fun = str_replace("x", "\$x", $_POST['funcion']);
        eval("\$funcion = fn(\$x) => $fun ;");
    }

    if(isset($_POST['p'])) {
        $p = $_POST['p'];
    }

    if(isset($_POST['tol'])) {
        $tol = $_POST['tol'];
    }

    $args = array($p);
    $target = 0;

    $resultado = NewtonsMethod::solve($funcion, $args, $target, $tol);

    echo "Resultado: " . $resultado;
?>