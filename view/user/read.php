<?php

include '../../control/userController.php';

$userController = new userController();

header('Content-Type: application/json');

$valor = $userController->read();

echo json_encode($valor);



?>