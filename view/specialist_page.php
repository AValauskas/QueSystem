
<body>
<?php
if ($check==0) {
    foreach ($clientdata as $key => $val) {
        $idd = $val['id_Client'];
        ?>

        <table class="table table-hover" id="myTable">
            <td><?php echo $val['name'] ?></td>
            <td></td>
            <td><?php echo $val['id_Client'] ?></td>
            <td> <?php echo " <a href=index.php?person=client&action=update&service=3&id=", urlencode($idd), "><input type=button id='$idd' value='Accept' ></a> " ?></td>
        </table>
        <?php
    }
}
else{
    foreach ($client as $key => $val) {
        $idd = $val['id_Client'];
        ?>

        <table class="table table-hover" id="myTable">
            <td><?php echo $val['name'] ?></td>
            <td></td>
            <td><?php echo $val['id_Client'] ?></td>
            <td> <?php echo " <a href=index.php?person=client&action=update&service=1&id=", urlencode($idd), "><input type=button id='$idd' value='Finished' ></a> " ?></td>
        </table>



        <?php
    }

}
?>
</body>


