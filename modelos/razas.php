<?php

class Raza {

    private $id_raza;
    private $nombre_raza;
    

    // Constructor
    public function __construct($id_raza = "", $nombre_raza= "") {
        $this->id_raza = $id_raza;
        $this->nombre_raza = $nombre_raza;
        
        

        
    }

    // Getters y Setters
    public function getId() {
        return $this->id_raza;
    }

    public function setId($id_raza) {
        $this->id_raza = $id_raza;
    }


    public function getNombreRaza() {
        return $this->nombre_raza;
    }

    public function setNombreRaza($nombre_raza) {
        $this->nombre_raza = $nombre_raza;
    }

    
}

?>
