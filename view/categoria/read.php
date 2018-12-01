<?php

include '../../control/categoriaController.php';

$categoriaController = new categoriaController();

header('Content-Type: application/json');

$valor = $categoriaController->read();

echo json_encode($valor);



?>