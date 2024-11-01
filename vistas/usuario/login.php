<?php


$usuario = new Usuario();
$controller_usuario = new controller_usuario();


@$usu = $_REQUEST['usu'];
@$contra = $_REQUEST['pas'];



$usuario->setEmail($usu);
$usuario->setContra($contra);


$nombre;
$tipo;



if ($controller_usuario->login($usuario) != null) {
    $datos['exito']="Acceso Correcto";
    foreach($controller_usuario->login($usuario)as $objusuario){
        $nombre = $objusuario->getNombreUsuario();
        $tipo = $objusuario->getTipo();
    }
     $datos['usuario']=$nombre;
	 $datos['tipo']=$tipo;

    
}
else {
    $datos['error']="Acceso Incorrecto";
}

echo json_encode($datos);
?>