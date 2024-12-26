<?php
   include('connexion.php');

   function getAllAttribute(){
    PDO($conn, $sql);
    $sql = "INSERT INTO users(firstname, lastname, email, passwordd) VALUES ('me','you', 'me.you@gmail.com','147852369**);";
   }
?>