<?php
date_default_timezone_set('America/El_Salvador');

if(!defined('SERVIDOR')) define('SERVIDOR','localhost');
if(!defined('USUARIO')) define('USUARIO','bajeiiuy_lenin_vasquez');
if(!defined('CLAVE')) define('CLAVE','vasques$299');
if(!defined('DATABASE')) define('DATABASE','bajeiiuy_web');

class conexion {
    private $connect;

    public function __construct() {
        try {
            $this->connect = new mysqli(SERVIDOR, USUARIO, CLAVE, DATABASE);
            if ($this->connect->connect_error) {
                throw new Exception("Conexión fallida: " . $this->connect->connect_error);
            }
        } catch (Exception $e) {
            echo "Error de conexión: " . $e->getMessage();
        }
    }

    public function cn() {
        return $this->connect;
    }

    public function ejecutarSQL($sql, $params = []) {
        $stmt = $this->connect->prepare($sql);
        if ($params) {
            $types = str_repeat('s', count($params)); // Cambia 's' a otros tipos según sea necesario
            $stmt->bind_param($types, ...$params);
        }
        $stmt->execute();
        $result = $stmt->get_result();

        // Procesar todos los conjuntos de resultados
        $this->consumirResultados();

        return $result;
    }

    private function consumirResultados() {
        while ($this->connect->more_results() && $this->connect->next_result()) {
            if ($result = $this->connect->store_result()) {
                $result->free();
            }
        }
    }

    public function encriptar($accion,$texto){
        $output=false;
        $encriptarmetodo="AES-256-CBC";
        $palabrasecreta="kjsadhajdh";
        $iv="C9FBL1EWSD/M8JFTGS";
        $key=hash("sha256",$palabrasecreta);
        $siv=substr(hash("sha256",$iv),0,16);
        if($accion=="encriptar"){
            $salida=openssl_encrypt($texto,$encriptarmetodo,$key,0,$siv);
        }else if($accion=="desencriptar"){
            $salida=openssl_decrypt($texto,$encriptarmetodo,$key,0,$siv);
        }
        return $salida;
    }

    public function encriptar2($accion, $texto) {
        $output = false;
        $encriptarmetodo = "AES-256-CBC";
        $palabrasecreta = "cafeteriamazapan";
        $iv = "C9FBL1EWSD/M8JFTGS";
        $key = hash("sha256", $palabrasecreta);
        $siv = substr(hash("sha256", $iv), 0, 16);

        if ($accion == "encriptar") {
            $encrypted = openssl_encrypt($texto, $encriptarmetodo, $key, 0, $siv);
            $output = base64_encode($encrypted); // Codificar en base64
        } else if ($accion == "desencriptar") {
            $decoded = base64_decode($texto); // Decodificar de base64
            $output = openssl_decrypt($decoded, $encriptarmetodo, $key, 0, $siv);
        }

        return $output;
    }
}
?>