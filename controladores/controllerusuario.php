<?php

class controller_usuario extends conexion{

    public function login($usuario) {
        $sql = "CALL login(?, ?)";
    
        $rs = $this->ejecutarSQL($sql, [$usuario->getEmail(), $usuario->getContra()]);
        
        $resultado = array();
    
        if ($rs) {
            while ($fila = $rs->fetch_assoc()) {
                $resultado[] = new usuario(
                    $fila["id_usuario"],
                    $fila["nombre_usuario"],
                    $fila["nombre"],
                    $fila["correo"],
                    $fila["contra"],
                    $fila["tipo"]
                );
            }
        }    
        return $resultado;
    }

    public function insert($usuario) {
        $sql = "CALL `insertusuario`(?,?,?,?)";
    
        $rs = $this->ejecutarSQL($sql, [$usuario->getNombreUsuario(), $usuario->getNombre(),
        $usuario->getEmail(), $usuario->getContra()]);
                
        $resultado = array();
    
        if ($rs) {
            while ($fila = $rs->fetch_assoc()) {
                $resultado[] = new usuario(
                    $fila["id_usuario"],
                    $fila["nombre_usuario"],
                    $fila["nombre"],
                    $fila["correo"],
                    $fila["contra"],
                    $fila["tipo"]
                );
            }
        }    
        return $resultado;
    }

    public function consulta() {
        $sql = "SELECT * FROM `usuario`";
    
        $rs = $this->ejecutarSQL($sql);
        
        $resultado = array();
    
        if ($rs) {
            while ($fila = $rs->fetch_assoc()) {
                $resultado[] = new usuario(
                    $fila["id_usuario"],
                    $fila["nombre_usuario"],
                    $fila["nombre"],
                    $fila["correo"],
                    $fila["contra"],
                    $fila["tipo"]
                );
            }
        }    
        return $resultado;
    }
}


?>