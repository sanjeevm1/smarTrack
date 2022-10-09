<?php
         

        $cname=$_GET["cname"];
        $uname=$_GET["uname"];

        echo file_get_contents("https://clist.by/standings/$cname/?search=$uname");

         
?>