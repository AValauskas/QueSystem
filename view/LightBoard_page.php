<?php
foreach($data as $key => $val) {
    if ($val['lefttime'] < 3600) {
        $min = round($val['lefttime'] / 60);
        $sek = $val['lefttime'] % 60;

        echo
            "<tr>"
            . "<td>{$val['name']}</td>"
            . "<td>   </td>"
            . "<td>$min min</td>"
            . "<td>   </td>"
            . "<td>$sek sec</td>"
            . "<br>"
            . "</tr>";
    }
    else{
        $hour = $val['lefttime'] / 3600;
        $left =$val['lefttime']-$hour*3600;
        $min = $left / 60;
        $sek = $left % 60;

        echo
            "<tr>"
            . "<td>{$val['name']}</td>"
            . "<td>   </td>"
            . "<td>$hour h</td>"
            . "<td>   </td>"
            . "<td>$min min</td>"
            . "<td>   </td>"
            . "<td>$sek sec</td>"
            . "<br>"
            . "<br>"
            . "<br>"
            . "<br>"
            . "</tr>";

    }
}
echo "$error";
$error="";
?>