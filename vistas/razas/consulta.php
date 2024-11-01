<?php 

$razas = new Raza();
$controller_raza = new controller_raza();


$datos["razas"] = []; // Inicializamos el array de razas

foreach ($controller_raza->consultar() as $objraza) {
    $datos["razas"][] = [
        'id' => $objraza->getId(),
        'nombre_raza' => $objraza->getNombreRaza()
    ];
}

echo json_encode($datos);


?>  