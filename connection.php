<?php
   try{
      $bdd=new PDO("mysql: host=localhost; dbname=biblio1","root","");
      echo "cbn";
   }
   catch(Exception $e){
      die('erreur'. $e->getMessage());
      echo "<br>";
   }
?>