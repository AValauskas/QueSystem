<?php
include 'model/Client.php';

$clientobject = new Client();
$name=$_POST['name'];
$clientobject->AddClient($name);
$data=$clientobject->ClientList();
$_SESSION['online']="du";
$error="Succesfully registered!";
include 'view/LightBoard_page.php';

?>