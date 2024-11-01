<?php


$usuario = new Usuario();
$controller_usuario = new controller_usuario();




@$usu = $_REQUEST['usu'];
@$nom = $_REQUEST['nom'];
@$email = $_REQUEST['correo'];
@$contra = $_REQUEST['pas'];





$usuario->setEmail($usu);
$usuario->setContra($contra);


$nombre;
$tipo;
$correo;
foreach($controller_usuario->consulta() as $objusuario){
    $nombre= $objusuario -> getNombreUsuario();
    $correo= $objusuario ->getEmail();
}

echo $nombre;
echo "<br>";
echo $correo;


if($nombre == $usu){
    $datos['usurepe'] ="El usuario ya esta registrado";
}
else{
    if($email != $correo){

        $datos['regitra'] = "Registrado exitosamente";
        
    }
    else{
        $datos['correorepe'] ="El correo ya esta registrado";

    }
}


echo json_encode($datos);
?>