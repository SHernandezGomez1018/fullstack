
    <?php
    //Punto cuatro conocer si es mayor o menor de edad y mostrar la edad exacta años,meses,dias.
    include "edad_exacta.html";
    
    //Constantes
    const constante_18 = 18;
    const constante_0 = 0;

    //Logica
    if (isset($_POST['verificar'])) {
        $fecha = new DateTime($_POST['fecha_actual']);
       
        $date2 = new DateTime(date("y-m-d"));

        $fecha_actual = $fecha->diff($date2);

        $edad_actual = $fecha_actual->y;
        $edad_meses = $fecha_actual->m;
        $edad_dias = $fecha_actual->d;
        
        if($edad_actual >= constante_18){
            echo "Es mayor de edad dado que tiene: ".$edad_actual. " años. " .$edad_meses. " meses, ".$edad_dias. " dias."; 
        }
        else if($edad_actual < constante_18 && $edad_actual > constante_0){
            echo "Es menor de edad, dado que tiene:" .$edad_actual. "años".$edad_meses. " meses, ".$edad_dias. " dias.";
        }
        else{
            echo "No valido ";
        }
 }
?> 


