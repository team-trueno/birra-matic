<?php

class Usuario {
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $fecha_nac;
    private $pass;

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFechaNac() {
        return $this->fecha_nac;
    }

    public function setNombre($nombre) {

    }

    public function setApellido($apellido) {}

    public function setEmail($email) {}

    public function setFechaNac($fechaNac) {}

    public function setPass($pass) {}
}
