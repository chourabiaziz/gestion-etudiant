<?php
include "connection.php";
   $req="SELECT * FROM etudiant1;";
   $result=$bdd->query($req);
   $reponse=$result->fetchall();
   foreach ($reponse as $ligne) {
   	echo $ligne ['CodeEtudiant'].' '.$ligne ['nom'].' '.$ligne ['prenom'].' '.$ligne ['adresse'].' '.$ligne ['classe'].'<br>';
   }
 ?>