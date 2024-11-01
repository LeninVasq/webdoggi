<?php
if (!defined('URL')) define("URL", "http://localhost/Databasedoggy/");


//controladores
require_once("controladores/conexion.php");
require_once("controladores/contenido.php");
require_once("controladores/controllerusuario.php");
require_once("controladores/controllerraza.php");


//modelos
require_once("modelos/usuario.php");
require_once("modelos/razas.php");


//vistas

$url = isset($_GET["url"]) ? $_GET["url"] : null;


if ($url) {
    $mostrar = new Contenido();

    $pagina = $mostrar  ->mostrar_contenido();
    require_once($pagina); 
}
?>