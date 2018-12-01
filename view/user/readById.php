<?php

include '../../control/userController.php';

$userController = new userController();

header('Content-Type: application/json');

$id = $_GET['id'];

$valor = $userController->readById($id);

echo json_encode($valor);

?>

