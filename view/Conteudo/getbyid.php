<?php

include '../../control/ConteudoControl.php';
$conteudoControl = new ConteudoControl();

header('Content-Type: application/json');
$id = $_GET['id'];
$valor = $conteudoControl->findById($id);

echo json_encode($valor);


