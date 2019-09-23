<!DOCTYPE html>
<head>

    <link href="style/all.css" rel="stylesheet">

</head>


<?php
session_start();
if ( isset($_GET['person']) && isset($_GET['action'])  ) {
    if ($_GET['person'] == 'client' && $_GET['action'] == 'create') {
        $_SESSION['online'] = "du";
    }
}
else{$_SESSION['online']=null;}

include 'config.php';
include 'database.php';
include 'view/Menu.php';


$person = '';
if(isset($_GET['person'])) {
    $person = mysql::escape($_GET['person']);
}

$action = '';
if(isset($_GET['action'])) {
    $action = mysql::escape($_GET['action']);
}

$actionFile = "";
if(!empty($person) && !empty($action)) {
    $actionFile = "controller/{$person}_{$action}.php";

}
    include 'view/main.php';

?>
<script>
    var myVar = setInterval(myTimer, 5000);

    function myTimer() {
        var token = document.getElementById('_token').value
        console.log(x);
    }
    $.ajax({
        type: "post",
        url: "<?= URL::to('model/Client.php/TimeLeft($id)')?>",
        dataType: "json",
        data:{
            'id_Client': x,
            '_token' : token
        },
</script>
