<?php

include '../../control/userController.php';

$data = file_get_contents('php://input');

$obj =  json_decode($data);

$id = $_GET['id'];

if  (!empty ($data) ){	

    $userController = new userController();
    
    $userController->update($obj, $id);

    header('Location:read.php');
}


?>

