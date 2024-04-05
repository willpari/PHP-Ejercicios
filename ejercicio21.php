<?php

$frutas=array("fresa","manzana","pera");

print_r($frutas);

//nueva acotacion en todo array se empieza desde el 0

echo $frutas[1]."<br/>";

// con for

for($indice=0;$indice<3;$indice++){

    echo $frutas[$indice]."<br/>";

}

?>