<?php

include '../config.php';
include '../database.php';
include '../model/Client.php';


$clientobject = new Client();
$name=$_POST['name'];
$clientobject->AddClient($name);
$data=$clientobject->ClientList();
include '../view/LightBoard_page.php';

?>