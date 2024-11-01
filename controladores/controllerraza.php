<?php 


class controller_raza extends conexion{


    public function consultar(){
        $sql = "SELECT * FROM `razas`";
    
        $rs = $this->ejecutarSQL($sql);
        
        $resultado = array();
    
        if ($rs) {
            while ($fila = $rs->fetch_assoc()) {
                $resultado[] = new Raza(
                    $fila["id_raza"],
                    $fila["nombre_raza"]
                );
            }
        }    
        return $resultado;
    }

}

?>