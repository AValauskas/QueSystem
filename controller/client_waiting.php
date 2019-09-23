<?php
include 'model/Client.php';

$clientobject = new Client();


    $data = $clientobject->GetClientById($code);
    if (empty($data)) {
        $data = $clientobject->ClientList();
        $error = "there is no such registered client";

        include 'view/LightBoard_page.php';

    } else {
        $left = $clientobject->TimeLeft2($code);
        include 'view/ClientTime_page.php';
    }

?>