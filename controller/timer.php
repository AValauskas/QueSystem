<?php
include '../model/Client.php';

include '../config.php';
include '../database.php';


$clientobject = new Client();
    $hint = $clientobject->TimeLeft2($_GET['q']);
    if ($hint<3600){
        $min =  round($hint / 60);
        $sek = $hint % 60;

        echo
            "<tr>"
            . "<td>$min min</td>"
            . "<td>   </td>"
            . "<td>$sek sec</td>"
            . "<br>"
            . "</tr>";

    } else{
        $hour = round($hint / 3600);
        $left =$hint-$hour*3600;
        $min = round($left / 60);
        $sek = $left % 60;

        echo
            "<tr>"
            . "<td>$hour h</td>"
            . "<td>   </td>"
            . "<td>$min min</td>"
            . "<td>   </td>"
            . "<td>$sek sec</td>"
            . "<br>"
            . "</tr>";
    }

