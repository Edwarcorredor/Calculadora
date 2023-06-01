<?php
    echo <<<HTML
        
        <a href="index.html" >Volver</a>
    HTML;
    $operacion = $_POST;
    $numero1 = intval($_POST['numero1']);
    $numero2 = intval($_POST['numero2']);
    switch ($operacion['operacion']) {
        case 0:
            $resultado = $numero1 + $numero2;
            break;
        case 1:
            $resultado = $numero1 - $numero2;
            break;
        case 2:
            $resultado = $numero1 * $numero2;
            break;
        case 3:
            $resultado = $numero1 / $numero2;
            break;
    }
    printf($resultado);
?>