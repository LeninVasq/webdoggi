<?php

class Contenido
{
    public function mostrar_contenido()
    {
        $pagina = "";
        $url = isset($_GET["url"]) ? $_GET["url"] : null;


        $url = explode("/", $url);

        switch ($url[0]) {
            case "login":
                $pagina = "vistas/usuario/login.php";
                break;
            
            default:
                $pagina = "Vistas/e404.php";
                break;
        }


        return $pagina;
    }
}
