<?php

class UnaClase{

    public static function UnMetodo(){

        echo "Yahallo watashi wa Yui Yuighama";

    }

}

$obj=new UnaClase();
$obj->unMetodo();

//Otro metodo para llamarlo

UnaClase::UnMetodo();

?>