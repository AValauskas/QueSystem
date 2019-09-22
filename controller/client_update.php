<?php

include '../config.php';
include '../database.php';
include '../model/Client.php';


$clientobj = new Client();
$id=$_GET['id'];
$ser=$_GET['service'];
if($ser==3) {
    $clientobj->ConfirmClient($id, $ser);
    $check = 1;
    $client = $clientobj->GetClientById($id);
}else if($ser==1) {
    $clientobj->ConfirmClient($id, $ser);
    $clientdata=$clientobj->FirstClient();
    $check=0;
}
include '../view/specialist_page.php';
?>