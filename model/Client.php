<?php

class Client
{
    public function __construct(){


    }

    public function AddClient($name){
        $date = new DateTime();
        $timestamp= $date->getTimestamp();

        $query= "Insert into client (name,timestamp,serviced) VALUES('$name', '$timestamp', '2') ";
        mysql::query($query);

    }


    public function ClientList()
    {
        $query= "select * from Client where serviced='2' order by id_Client ASC LIMIT 10";
        $data = mysql::select($query);
        return $data;
    }
    public function FirstClient()
    {
        $query= "select * from Client where serviced='2' LIMIT 1";
        $data = mysql::select($query);
        return $data;
    }
    public function GetClientById($dat)
    {
        $query= "select * from Client where id_Client='$dat'";
        $data = mysql::select($query);
        return $data;
    }
    public function ConfirmClient($data,$serv)
    {
        $query = "  UPDATE client
					SET    `serviced`='$serv'
					WHERE `id_Client`='$data'";
        mysql::query($query);
    }



}


?>