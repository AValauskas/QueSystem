<?php
include '../model/Client.php';

include '../config.php';
include '../database.php';


$clientobject = new Client();
    $hint = $clientobject->TimeLeft($_GET['q']);
    echo $hint === "" ? "no suggestion" : $hint;
