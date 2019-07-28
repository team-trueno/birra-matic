<?php

class Usuario {
    private $nombre;
    private $apellido;
    private $email;
    private $fecha_nac;
    private $contrasenia;

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEmail() {
        return $this->email;
    }

    public function fecha_nac() {
        return $this->fecha_nac;
    }
}