
<div >
<!-- Liste de demande d'inscription-->
  <h2>Demande d'inscription en attente</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Matricule</th>
        <th class="text-center">Nom</th>
        <th class="text-center">Prenom</th>
        <th class="text-center">Date de naissance</th>
        <th class="text-center">Contact</th>
        <th class="text-center">Mail</th>
        <th class="text-center">Departement</th>
        <th class="text-center">Etablissement</th>
        <th class="text-center">sexe</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../../config/connexiondb.php";
      $sql="SELECT * FROM etudiantni";
      $result=$idcnx-> query($sql);
      $count=1;

      if ($result-> rowCount() > 0){
        while ($row = $result->fetch (PDO::FETCH_ASSOC)) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["matriculeNI"]?></td>
      <td><?=$row["nomNI"]?></td>      
      <td><?=$row["prenomNI"]?></td>     
      <td><?=$row["dateNaissanceNI"]?></td>   
      <td><?=$row["contactNI"]?></td>  
      <td><?=$row["mailNI"]?></td>   
      <td><?=$row["departementNI"]?></td>
      <td><?=$row["etablissementNI"]?></td>  
      <td><?=$row["sexeNI"]?></td>     
      <td>
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['idNI']?>')">Valider</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['idNI']?>')">Annuler</button></td>
      </tr>
    
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Validation et annulation de demande d'inscription-->

  <?php
   session_start();
   //Si l'insciption est accepté,
        if(isset($_POST['valider'])){
         
    
        $id = $_POST['valide'];
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
            
            // On puis on le supprime de la table de demende d'inscription
            if ($rest) {
              $sql3 = "DELETE FROM etudiantni WHERE idNI = '$id'";
              $rest3 = $idcnx->exec($sql3);
              $message = "inscription acceptée !!";
              $_SESSION['messageConfirm']=$message;
          

            } 
        } 
      //Si l'insciption est refusée,  on le supprime de la table de demende d'inscription
        if(isset($_POST['annuler'])){
          $id = $_POST['annul'];
          $sql4 = "DELETE FROM etudiantni WHERE idNI = '$id'";
              $rest4 = $idcnx->exec($sql4);
              $message = "inscription rejetée !!";
              $_SESSION['messageRejet']=$message;
        }
     
        
  ?>

  
</div>
   