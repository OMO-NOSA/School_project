<?php
   $server ="localhost";
   $database ="nosa";
   $db_username="root";
   $db_password="";
   
   $db_con= new mysqli("$server","$db_username","$db_password","$database");
   
   if($db_con->connect_errno){
   	echo  $db_con->connect_error;
   	     die("<br/> Not available, please try again later");
 }



?>