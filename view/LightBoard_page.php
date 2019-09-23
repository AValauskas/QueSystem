<?php
foreach($data as $key => $val) {
    if ( $val['lefttime']<3600   )
    {
        $min=$val['lefttime']/60;
        $sek=$val['lefttime']%60;



    }
echo
"<tr>"
    . "<td>{$val['name']}</td>"
    ."<td>   </td>"
    . "<td>$min min</td>"
    ."<td>   </td>"
    . "<td>$sek sec</td>"
    ."<br>"
    . "</tr>";
}

echo "$error";
$error="";
?>