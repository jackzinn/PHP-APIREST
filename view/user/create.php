<?php

include '../../control/userController.php';

header('Content-Type: application/json');

$data = file_get_contents('php://input');

$obj =  json_decode($data);

if( !empty($data)   )   {	

    $userController = new userController();
    
    $userController->create($obj);

    header('Location:read.php');

}











