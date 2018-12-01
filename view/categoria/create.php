<?php

include '../../control/categoriaController.php';

header('Content-Type: application/json');

$data = file_get_contents('php://input');

$obj =  json_decode($data);

if( !empty($data)   )   {	

    $categoriaController = new categoriaController();
    
    $categoriaController->create($obj);

    header('Location:read.php');

}

