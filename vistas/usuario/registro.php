<?php


$usuario = new Usuario();
$controller_usuario = new controller_usuario();




@$usu = $_REQUEST['usu'];
@$nom = $_REQUEST['nom'];
@$email = $_REQUEST['correo'];
@$contra = $_REQUEST['pas'];

$usuario->setNombreUsuario($usu);
$usuario->setContra($contra);
$usuario->setEmail($email);
$usuario->setNombre($nombre);


$nombre =[];
$tipo;
$correo = [];
foreach($controller_usuario->consulta() as $objusuario){
    $nombre []= $objusuario -> getNombreUsuario();
    $correo[]= $objusuario ->getEmail();
}

$ingresar = false;


foreach ($nombre as $nombres) {
    if($nombres == $usu){
        $datos['usurepe'] ="El usuario ya esta registrado";
        $ingresar = true;
        break;
    }
    
}
foreach ($correo as $correos) {
    

    if($email == $correos){
        $datos['correorepe'] ="El correo ya esta registrado";
        $ingresar = true;
        break;
    }

}

if (!$ingresar) {
    $controller_usuario->insert($usuario);
    $datos['registra'] = "Registrado exitosamente";
}



echo json_encode($datos);
?>