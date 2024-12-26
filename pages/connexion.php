<?php
   
 function connex(){
   $servername = 'XAMPP';
   $username = 'test1';
   $password = '';
   $dbname = 'user_management';
   
   
 }
   try
     ($conn= new PDO('$servername= XAMPP ; $username = test1 ', $password, $dbname))
    catch
     // echo "Error";
?>