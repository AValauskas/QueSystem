
<?php
include 'model/specialist.php';



$specialistobj= new specialist();
$log=$_POST['username'];
$pass=$_POST['password'];

$data = $specialistobj->Login($log,$pass);
if(!empty($data))
{
    $_SESSION['online']="is";
    include 'model/Client.php';
    $clientobj= new Client();
    $clientdata=$clientobj->FirstClient();
    $check=0;
    include 'view/specialist_page.php';

}
else{
   echo "Unsuccesfully login";

}


?>