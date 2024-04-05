<?php

$frutas=array("f"=>"fresa","m"=>"manzana","p"=>"pera");

print_r($frutas);

//nueva acotacion 

echo $frutas["m"]."<br/>";

// foreach

foreach($frutas as $indice=>&$valor){

    echo $indice."<br/>";

    echo $frutas[$indice]."<br/>";

    echo "El valor " .$valor." Tiene el indice:".$indice."<br/>";

}

?>