<?php

class Usuario {

    private $id_usuario;
    private $nombre_usuario;
    private $nombre;
    private $contra;
    private $correo;
    private $tipo;

    // Constructor
    public function __construct($id_usuario = "", $nombre_usuario= "", $nombre= "", $correo= "", $contra= "",$tipo="") {
        $this->id_usuario = $id_usuario;
        $this->nombre_usuario = $nombre_usuario;
        $this->nombre = $nombre;
        $this->contra = $contra;
        $this->correo = $correo;
        $this->tipo = $tipo;
        
        

        
    }

    // Getters y Setters
    public function getId() {
        return $this->id_usuario;
    }

    public function setId($id_usuario) {
        $this->id_usuario = $id_usuario;
    }


    public function getNombreUsuario() {
        return $this->nombre_usuario;
    }

    public function setNombreUsuario($nombre_usuario) {
        $this->nombre_usuario = $nombre_usuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    

    public function getEmail() {
        return $this->correo;
    }

    public function setEmail($email) {
        $this->correo = $email;
    }

    public function getContra() {
        return $this->contra;
    }

    public function setContra($contra) {
        $this->contra = $contra;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
}

?>
