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

$code=0;
if(isset($_POST['code']))
{
    $code=$_POST['code'];
}



$person = '';
if(isset($_GET['person'])) {
    $person = mysql::escape($_GET['person']);
}
$id = '';
if(isset($_GET['id'])) {
    $id = mysql::escape($_GET['id']);
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

if (isset($left) )
{
    ?>
    <input type="hidden" name="demo" id="dome" value="<?php echo"$code" ?>">
    <?php

?>



    <script>
        var myVar = setInterval(myTimer, 1000);

        function myTimer() {

            var token = document.getElementById('dome').value
            //(token);
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("timer").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "controller/timer.php?q="+token, true);
            xhttp.send();
            //document.getElementById("demo").innerHTML = d.toLocaleTimeString();*/
        }







    </script>
<?php
}
?>