<?php
   $code=$_POST["code"];



   echo "Votre Code est ".$code."<br>" ;

   include "connection.php";
   $req="DELETE FROM etudiant1 WHERE CodeEtudiant=$code";
   $result=$bdd->exec($req);
   if($result){

   	echo "La suppression est établie";
   }
   else
   	echo "La suppression est echoué";
 include "dec.php";


