<?php
 $dsn = 'mysql:host=sql2.njit.edu;dbname=dr439';
 $username = 'dr439';
 $password = 'ebRbuPFN';
 try{
   $db = new PDO($dsn,$username,$password);
 }catch (PDOException $e){
   $error_message = $e->getMessage();
   echo $error_message;
   exit();
 }
?>
