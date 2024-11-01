<?php
if (!defined('URL')) define("URL", "http://localhost/Databasedoggy/");


//controladores
require_once("controladores/conexion.php");
require_once("controladores/contenido.php");
require_once("controladores/controllerusuario.php");


//modelos
require_once("modelos/usuario.php");


//vistas
//require_once("vistas/usuario/login.php");

$url = isset($_GET["url"]) ? $_GET["url"] : null;


if ($url) {
    $mostrar = new Contenido();

    $pagina = $mostrar  ->mostrar_contenido();
    require_once($pagina); 
}
?>