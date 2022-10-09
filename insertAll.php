
<?php

$mysql=new mysqli("127.0.0.1:3307","root","","platformtrack");

$name=$_GET["name"];
$no=$_GET["no"];
$cname=$_GET["cname"];
$leet=$_GET["leet"];

$check=$mysql->query("INSERT INTO student (sname,year,dept,cname,leetcode,codechef,regNo) values ('$name',1,'EEE','A','$leet','$cname','$no')");

if($check==1)
echo "inserted";

else
echo $no;
?>