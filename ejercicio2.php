<?php
        if($_POST){

        // Recibir informacion del formulario HTML (Metodo POST)
        $nombre=$_POST['txtNombre'];

        echo "Hola".$nombre;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio2.php" method="post">
    Nombre:
    <input type="text" name="txtNombre" id="">
    <br/>
    <input type="submit" name="" id="Enviar">

    </form>

</body>
</html>