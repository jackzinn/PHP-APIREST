<?php

include '../../control/categoriaController.php';

$categoriaController = new categoriaController();

header('Content-Type: application/json');

$id = $_GET['id'];

$valor = $categoriaController->delete($id);

echo json_encode('Apagado '.$valor);


?>
