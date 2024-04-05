<?php

function imprimirNombre($Nombre,$apellido=""){ //en este caso $apellido="" tiene un vacio por si solo hay un nombre mas no un apellido

    //rutinas (instrucciones)

    echo "Hola ".$Nombre." ".$apellido."<br/>";

}

//llamar a la funcion

imprimirNombre("Yui","Yuigahama");
imprimirNombre("Yukino","Yukinoshita");
imprimirNombre("Hachiman","Hikigaya");
imprimirNombre("Iroha");

?>