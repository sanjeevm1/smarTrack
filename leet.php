<?php

    
    $mysql=new mysqli("127.0.0.1:3307","root","","platformtrack");

    $res=$mysql->query("SELECT * FROM Student");

    $arr=array();

    while($row=$res->fetch_assoc()){

            array_push($arr,implode(",",$row));
    }

    echo implode(":",$arr);

?>




