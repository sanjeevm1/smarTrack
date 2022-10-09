<?php
       
       
       $opt=$_GET["opt"];


       $mysql=new mysqli("127.0.0.1:3307","root","","platformtrack");

       
       if($opt==1){
          
          $uname=$_GET["uname"];
          $pass=$_GET["pass"];
          
          $res=$mysql->query("SELECT * FROM auth where uname='$uname' and password='$pass'");
           
          if($res->num_rows==0){
               echo 0;
               return;
          }
          
          while($row=$res->fetch_assoc()){
               echo $row["uname"];
           }
       }

       else if($opt==2){

           $sname=$_POST["sname"];
           $regno=$_POST["regno"];
           $year=$_POST["year"];
           $dept=$_POST["dept"];
           $cname=$_POST["cname"];
           $leetcode=$_POST["leetcode"];
           $codechef=$_POST["codechef"];
             
           $check=$mysql->query("INSERT INTO student (sname,regNo,year,dept,cname,leetcode,codechef) values 
            ('$sname','$regno','$year','$dept','$cname','$leetcode','$codechef')");

            if($check==1)
            echo "Inserted";

            else
            echo "Not Inserted Try Again";


       }

       
?>