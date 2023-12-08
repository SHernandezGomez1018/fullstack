   <?php
    //Utilizar el method GET
    include "method_get.html";
   //Variable
    $edad = 0;
    //Logica
    if(isset($_GET['verificar'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cc'];
    
        echo "Nombre : ".$nombre."<br>";
        echo "Apellido : ".$apellido."<br>";
        echo "Cédula : ".$cedula."<br>";

    }

    ?>

    