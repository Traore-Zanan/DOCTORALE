<?php
    include_once "../../config/connexiondb.php";
    session_start();
    if($_SERVER['REQUEST_METHOD']=='GET')
    {
       
        
         if(isset($_GET['idNI'])){
            
            $id = $_GET['idNI'];
            //On recupère l'etudiant dans la table de demande d'inscription
            $sql1="SELECT * FROM etudiantni WHERE idNI = '$id'";
            $result=$idcnx-> query($sql1);
            $ligne = $result->fetch (PDO::FETCH_ASSOC);
    
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
                $resq2 = "INSERT INTO etudiantinsc (nomInsc, prenomInsc, dateNaissanceInscef, contactInsc, mailInsc, etablissementInsc, matriculeInsc, sexeInsc) VALUES ('$nom', '$prenom', '$date', '$contact', '$mail','$etab', '$matricule', '$sexe')";
                $rest = $idcnx->exec($resq2);
                
                //puis on le supprime de la table de demende d'inscription
                if ($rest) {
                  $sql3 = "DELETE FROM etudiantni WHERE idNI = '$id'";
                  $rest3 = $idcnx->exec($sql3);
                  $message = "inscription acceptée !!";
                  $_SESSION['messageConfirm']=$message;
                  echo($message);

    
                } 
            } 
         }
        
    
        
?>