<?php

class Client
{
    public function __construct(){


    }

    public function AddClient($name){
        $date = new DateTime();
        $timestamp= $date->getTimestamp();
        $finishedclient ="select count(*) from client where serviced='1'";
        $workingspecialists ="select count(*) from specialist where working='1'";
        $que ="select count(*) from client where serviced='2'";

        $data = mysql::select($finishedclient);
        foreach ($data as $key => $val) {
            $rowfinish=$val['count(*)'];
        }

        $data = mysql::select($workingspecialists);
        foreach ($data as $key => $val) {
            $rowspecialist=$val['count(*)'];
        }

        $data = mysql::select($que);
        foreach ($data as $key => $val) {
            $rowque=$val['count(*)'];
        }

        $query= "select * from Client where serviced='1'";
        $data = mysql::select($query);

        $diff=0;
        foreach ($data as $key => $val)
        {
            $diff=$diff+$val['timestampend']-$val['timestampstart'];
        }

        $avrgwospeccount=$diff/$rowfinish;
        $avrgtot=$avrgwospeccount/ $rowspecialist;
        $left=round($avrgtot*$rowque, 0);


        $query= "Insert into client (name,	timestampregister,lefttime,serviced) VALUES('$name', '$timestamp','$left', '2') ";
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
    public function LastId()
    {
        $query= "select * from Client where serviced='2' order by id_Client DESC LIMIT 1";
        $data = mysql::select($query);
        foreach ($data as $key => $val) {
            $idd=$val['id_Client'];
        }
        return $idd;
    }
    public function GetClientById($id)
    {
        $query= "select * from Client where id_Client='$id'";
        $data = mysql::select($query);
        return $data;
    }
    public function ConfirmClient($id,$serv)
    {
        $date = new DateTime();
        $timestamp= $date->getTimestamp();
        if ($serv==3) {
            $query = "  UPDATE client
					SET    `serviced`='$serv', `timestampstart`= '$timestamp'
					WHERE `id_Client`='$id'";
        }else{
            $query = "  UPDATE client
					SET    `serviced`='$serv', `timestampend`= '$timestamp'
					WHERE `id_Client`='$id'";
        }
        mysql::query($query);
    }
    public function DeleteClient($id){
        $query= "DELETE Client from Client where id_Client='$id'";
            mysql::query($query);
    }
    public function LastedTime($id){
        $query= "select * from Client where id_Client='$id'";
        $data = mysql::select($query);
        $row = mysqli_fetch_assoc($data);
        $timelaped=$row['timestampend']-$row['timestampstart'];
        return $timelaped;
    }
    public function TimeLeft($id){
        $hint="";
        $finishedclient ="select count(*) from client where serviced='1' and id_Client<$id";
        $workingspecialists ="select count(*) from specialist where working='1'";
        $que ="select count(*) from client where serviced='2' and id_Client<$id";

        $data = mysql::select($finishedclient);
        foreach ($data as $key => $val) {
            $rowfinish=$val['count(*)'];
        }

        $data = mysql::select($workingspecialists);
        foreach ($data as $key => $val) {
            $rowspecialist=$val['count(*)'];
        }

        $data = mysql::select($que);
        foreach ($data as $key => $val) {
            $rowque=$val['count(*)'];
        }

        $query= "select * from Client where serviced='1' and id_Client<$id";
        $data = mysql::select($query);

        $diff=0;
        foreach ($data as $key => $val)
        {
            $diff=$diff+$val['timestampend']-$val['timestampstart'];
        }

        $avrgwospeccount=$diff/$rowfinish;
        $avrgtot=$avrgwospeccount/ $rowspecialist;
        $left=round($avrgtot*$rowque, 0);


        $hint .= ", $left";

        return $hint;
    }
    public function TimeLeft2($id){
        $finishedclient ="select count(*) from client where serviced='1' and id_Client<$id";
        $workingspecialists ="select count(*) from specialist where working='1'";
        $que ="select count(*) from client where serviced='2' and id_Client<$id";

        $data = mysql::select($finishedclient);
        foreach ($data as $key => $val) {
            $rowfinish=$val['count(*)'];
        }

        $data = mysql::select($workingspecialists);
        foreach ($data as $key => $val) {
            $rowspecialist=$val['count(*)'];
        }

        $data = mysql::select($que);
        foreach ($data as $key => $val) {
            $rowque=$val['count(*)'];
        }

        $query= "select * from Client where serviced='1' and id_Client<$id";
        $data = mysql::select($query);

        $diff=0;
        foreach ($data as $key => $val)
        {
            $diff=$diff+$val['timestampend']-$val['timestampstart'];
        }

        $avrgwospeccount=$diff/$rowfinish;
        $avrgtot=$avrgwospeccount/ $rowspecialist;
        $left=round($avrgtot*$rowque, 0);
        return $left;


    }





}


?>