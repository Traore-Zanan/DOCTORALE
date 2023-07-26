<?php
include "../../config/connexiondb.php";
if(isset($_POST["valider"])){
    extract($_POST);
	
    

    $resq2 = "SELECT * FROM admin WHERE matricule='$matricule'";
    $resultat2 = $idcnx->query($resq2);
    
    if($resultat2 != null && $resultat2->rowCount()>0){
	  $ligne2 = $resultat2->fetch (PDO::FETCH_ASSOC);
      session_start();
      $_SESSION['matricule'] = $matricule;
      $_SESSION['nom'] =$nom;
	  $_SESSION['prenom'] =$ligne2['prenom'];
	  
      header("location:../espaceAdmin.php");
    }else {$inconnu = "Mot de passe incorrecte!";}
  }




?>