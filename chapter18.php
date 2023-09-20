<?php
   $host = "Localhost";
   $user = "roo";
   $pass = "";
   $database = "db11";

   $connection = mysqli_connect($host, $user, $pass, $database);

   if($connection){
       echo "Successfully Connectd";
   }else{
      die("Could not connect");
   }
   $sql="INSERT INTO contact(name, email, phone)" VALUES("Arvi", "Arvi@gmail.com", 3456");
mysqli_query($connection, $sql);
   mysqli_close($connection);