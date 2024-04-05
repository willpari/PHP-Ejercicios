<?php

class persona{

    public $nombre; // propiedades
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){

        $this->nombre=$nuevoNombre;
    }

    public function asignarNombre($nuevoNombre){ //acciones o metodos...

        $this->nombre=$nuevoNombre;

    }
    public function imprimirNombre(){

        echo "Hola soy ".$this->nombre."<br/>";

    }
    public function mostrarEdad(){

        $this->edad=20;
        return $this->edad;
    }

}

$objAlumno= new persona("Yui Yuigahama"); // instancia o crecaion de un objeto
//$objAlumno->asignarNombre("Yui"); // llamado un metodo
$objAlumno->imprimirNombre(); 

?>  