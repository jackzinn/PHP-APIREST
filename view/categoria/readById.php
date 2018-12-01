<?php

include '../../control/categoriaController.php';

$categoriaController = new categoriaController();

header('Content-Type: application/json');

$id = $_GET['id'];

$valor = $categoriaController->readById($id);

echo json_encode($valor);


?>