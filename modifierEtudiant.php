<?php
   $code=$_POST["code"];
   $nom=$_POST["nom"];
   $prenom=$_POST["prenom"];
   $adresse=$_POST["adresse"];
   $classe=$_POST["classe"];



   include "connection.php";
   $req="UPDATE etudiant1 SET nom='$nom', prenom='$prenom', adresse='$adresse', classe='$classe' WHERE CodeEtudiant='$code'";
   $result=$bdd->exec($req);
   if($result){

      echo "modification etablie";
   }
   else
      echo "modification echouée";
   include "dec.php";
   ?>
