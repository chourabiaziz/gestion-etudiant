<?php
include "connection.php";
$crit=$_POST["s"];
$valeur=$_POST["valeur"];
   $req="SELECT * FROM etudiant1 WHERE $crit='$valeur';";
   $result=$bdd->query($req);
   $reponse=$result->fetchall();
   $nb=COUNT($reponse); 
   if($nb>0){

      echo 'Primary key: ' .$row['PRIMARYKEY'];  
echo '<br /> Code: ' .$row['nom'];  
echo '<br /> Description: '.$row['prenom'];  
echo '<br /> Category: '.$row['adresse'];  
   
   }
   else
      echo "existe pas";
 ?>