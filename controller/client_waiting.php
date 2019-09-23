<?php
include 'model/Client.php';

$clientobject = new Client();
$code=$_POST['code'];

$data=$clientobject->GetClientById($code);
if (empty($data))
{
    $data=$clientobject->ClientList();
    $error="there is no such registered client";

    include 'view/LightBoard_page.php';

}else {
    $left=$clientobject->TimeLeft($code);
    include 'view/ClientTime_page.php';
}

?>