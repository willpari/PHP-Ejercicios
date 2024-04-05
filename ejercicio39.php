<?php

$nombreArchivo="archivo.txt";

$contenidoArchivo=" Yahallo, Hikki";

$archivoACrear= fopen($nombreArchivo,"w");

fwrite($archivoACrear, $contenidoArchivo);

fclose($archivoACrear);

?>