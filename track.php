<?php
    $uname=$_GET["uname"];
    $cname=$_GET["cname"];
    $contest=$_GET["contest"];
    $cid=$_GET["cid"];

    if($contest==0){
        echo file_get_contents("https://clist.by/standings/weekly-contest-$cid/?search=$uname");
    }

    else if($contest==1){
        echo file_get_contents("https://clist.by/standings/biweekly-contest-$cid/?search=$uname");
    }

    else if($contest==2){
        echo file_get_contents("https://clist.by/standings/$cid/?division=any&search=$cname");
    }
?>