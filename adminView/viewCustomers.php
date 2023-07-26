<div >
  <h2>Etudiants Inscrits</h2>
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
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from etudiantinsc";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
    <td><?=$count?></td>
      <td><?=$row["matriculeInsc"]?></td>
      <td><?=$row["nomInsc"]?></td>      
      <td><?=$row["prenomInsc"]?></td>     
      <td><?=$row["dateNaissancInsce"]?></td>   
      <td><?=$row["contactInsc"]?></td>  
      <td><?=$row["mailInsc"]?></td>   
      <td><?=$row["departementInsc"]?></td>
      <td><?=$row["etablissementInsc"]?></td>  
      <td><?=$row["sexeInsc"]?></td>  
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>