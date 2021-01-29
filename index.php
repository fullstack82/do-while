<?php


// Bucle Do-while la condicion se evalua al final del bloque de instrucciones, es util cuando queremos que se ejecute una vez y luego comprobar algo.



/*do{

    // Bloque de instrucciones


}while(condicion);   //Evaluamos la condición

*/


$edad = 17;
$contador = 1;

do {
    echo "Tienes acceso al local privado $contador"."<br>"; 
    $contador++;
} while ($edad >= 18 && $contador <= 100);  // Si esta condición se cumple el bucle se vuelve a ejecutar hasta el final en este caso el 100, si no se cumple solo se ejecutara el primer bucle y parara;
