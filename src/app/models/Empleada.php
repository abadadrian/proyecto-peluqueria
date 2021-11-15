<?php

class Empleada{
    
    private $nombre;
    private $apellido;
    private $experiencia;

    function __construct(string $nombre, string $apellido, int $experiencia) {

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->experiencia = $experiencia;
    }

    public final function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public final function getExperiencia() {
        return $this->experiencia;
    }

    public final function setNombre($nombre) {
        $this->nomre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public final function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }

    public function __toString() {
		return "Nombre: $this->nombre. Apellido: $this->apellido. Años de experiencia: $this->experiencia";
	}
    
    
    $empleada = new Empleada('Cristina','Díaz', 2);
    echo $empleada;
    
}
