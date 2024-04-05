<?php

class persona{

    public $nombre; // propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){ //acciones o metodos...

        $this->nombre=$nuevoNombre;

    }
    public function imprimirNombre(){

        echo "Hola soy ".$this->nombre;

    }
    public function mostrarEdad(){

        $this->edad=20;
        return $this->edad;
    }

}

class trabajador extends persona{

    public $puesto; // propiedad nueva
    public function presentarseComoTrabajador(){

        echo "Hola soy ".$this->nombre." y soy una ".$this->puesto;
    }

}

$objtrabjador= new trabajador(); // instancia o crecaion de un objeto
$objtrabjador->asignarNombre("Yui Yuigahama"); // llamado un metodo
$objtrabjador->puesto="Profesora";

$objtrabjador->presentarseComoTrabajador();

?>