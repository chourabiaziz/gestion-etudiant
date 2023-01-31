<?php
   include "connection.php";
   $CodeEtudiant=$_POST["code"];
   $nom=$_POST["nom"];
   $prenom=$_POST["prenom"];
   $adresse=$_POST["adresse"];
   $classe=$_POST["classe"];
   echo "votr code est ".$CodeEtudiant."<br>" ;
   echo "votr nom est ".$nom."<br>"  ;
   echo "votr prenom est ".$prenom."<br>"  ;
   echo "votr adresse est ".$adresse ."<br>" ;
   echo "votr classe est ".$classe ."<br>" ;
   $req1="INSERT INTO etudiant1 VALUES ('$CodeEtudiant','$nom','$prenom','$adresse','$classe');";
   $result=$bdd->exec($req1);
   if ($result){
      echo "insertion etablie";
   }else
   echo "insertion échouée";
   ?>