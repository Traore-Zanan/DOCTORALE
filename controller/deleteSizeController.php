<?php

    include_once "../config/dbconnect.php";
    session_start();
    $id=$_POST['record'];
    $_SESSION['idNI']=$id;
  


    //On recupère l'etudiant dans la table de demande d'inscription
    $sql1="SELECT * FROM etudiantni WHERE idNI = '$id'";
    $result=$conn-> query($sql1);
    $ligne=$result-> fetch_assoc();
    
      $matricule=$ligne["matriculeNI"];
      $nom=$ligne["nomNI"];     
      $prenom=$ligne["prenomNI"];
      $date=$ligne["dateNaissanceNI"];
      $contact=$ligne["contactNI"] ;
      $mail=$ligne["mailNI"];
      $departement=$ligne["departementNI"];
      $etab=$ligne["etablissementNI"] ;
      $sexe=$ligne["sexeNI"];
    
      // On l'ajoute dans la table des inscrits
        $resq2 = "INSERT INTO etudiantinsc (nomInsc, prenomInsc, dateNaissancInsce, contactInsc, mailInsc, etablissementInsc, matriculeInsc, sexeInsc, departementInsc) VALUES ('$nom', '$prenom', '$date', '$contact', '$mail','$etab', '$matricule', '$sexe', '$departement')";
        $rest = mysqli_query($conn,$resq2);
        
        //puis on le supprime de la table de demende d'inscription
        if ($rest) {
          $sql3 = "DELETE FROM etudiantni WHERE idNI = '$id'";
          $rest3=mysqli_query($conn,$sql3);
          $message = "inscription acceptée !!";
          $_SESSION['messageConfirm']=$message;

        } 
?>