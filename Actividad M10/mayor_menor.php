
    <?php
    //punto dos conocer si una persona es mayor de edad o no.

    include 'mayor_menor.html';
    //Variables
    $edad = 0;
    
    //Logica
    if(isset($_POST['verificar'])) {
        $edad = $_POST['edad'];

        if ($edad >= 18) {
            echo "Es mayor de edad";
        }
        else if (18 > $edad && 0 < $edad) {
            echo "Es menor de edad";
        }
        else{
            echo "No valido";
        }

    }

    ?>

    