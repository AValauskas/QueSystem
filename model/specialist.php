<?php

class Specialist
{
    public function __construct(){
    }

    public function  Login($user,$pass){
        $query = "SELECT * from specialist where username = '$user' and password ='$pass'";
        $data = mysql::select($query);
        if(!empty($data))
        {
        return $data[0];}
        else return null;
    }

}


?>