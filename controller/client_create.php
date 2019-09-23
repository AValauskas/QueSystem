<?php
include 'model/Client.php';

$clientobject = new Client();
$name=$_POST['name'];
$clientobject->AddClient($name);
$data=$clientobject->ClientList();
$idd=$clientobject->LastId();
$_SESSION['online']="du";
$error="Succesfully registered! Your number: ";
$error.= " $idd";
include 'view/LightBoard_page.php';

?>