<?php

if($_POST){

    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    //if( ($valorA != $valorB) && ($valorA > $valorB) ) aqui si los dos son verdaderos se muestra el mensaje

    if( ($valorA != $valorB) || ($valorA > $valorB) ) {

        echo "El valor de A es diferente al de B y tambien es mayor";

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br/>
        Valor B:
        <input type="text" name="valorB" id="">
        <br/>
        <input type="submit" value="Calcular">

    </form>
</body>
</html>