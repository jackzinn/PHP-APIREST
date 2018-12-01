<?php
include '../../control/userController.php';
 
$userController = new userController();

header('Content-Type: application/json');

$id = $_GET['id'];

$valor = $userController->delete($id);

echo json_encode('Apagado '.$valor);


?>