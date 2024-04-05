<?php

class persona{

    public $nombre; // propiedades
    private $edad;
    protected $altura;

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

$objAlumno= new persona(); // instancia o crecaion de un objeto
$objAlumno->asignarNombre("Yui"); // llamado un metodo
$objAlumno->imprimirNombre();

$objAlumno2= new persona(); 
$objAlumno2->asignarNombre("Yukino"); 

echo $objAlumno->nombre."<br/>"; // imprimir una propiedad

echo $objAlumno->mostrarEdad()."<br/>";

echo $objAlumno2->nombre."<br/>"; 

?>