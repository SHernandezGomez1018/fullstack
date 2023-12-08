<?php
    //Ejercicio uno calculadora
    include 'calculadora.html';
   // Variables
    $n1 =  $n2 = $tipo = $result = 0;
    
    //Logica
    if (isset($_POST['operar'])) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $tipo = $_POST['tipo'];

        switch ($tipo) {
            case '1':
                $result = $n1 + $n2;
                break;
            case '2':
                $result = $n1 - $n2;
                break;
            case '3':
                $result = $n1 * $n2;
                break;
            case '4':
                $result = $n1 / $n2;
                break;
        }

        echo "El resultado de la operación es: $result";
    

    }

    ?>

