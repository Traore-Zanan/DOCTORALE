<div id="ordersBtn" >
  <h2>Demande d'inscription</h2>
  <table class="table table-striped">
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
       while ($row=$result-> fetch_assoc()) {
   ?>
   <tr>
     <td><?=$count?></td>
     <td><?=$row["matricule"]?></td>
     <td><?=$row["nom"]?></td>      
     <td><?=$row["prenom"]?></td>     
     <td><?=$row["date"]?></td>   
     <td><?=$row["contact"]?></td>  
     <td><?=$row["mail"]?></td>   
     <td><?=$row["departement"]?></td>
     <td><?=$row["etablissement"]?></td>  
     <td><?=$row["sexe"]?></td> 
     <td><button class="btn btn-primary" style="height:40px" onclick="#variationEditForm('<?=$row['idENV']?>')">valider</button></td>
      <td><button class="btn btn-danger" style="height:40px"  onclick="#variationDelete('<?=$row['idENV']?>')">Supprimer</button></td>
      </tr-->
    <?php
            
        }
      }
    ?>
     
  </table>
   
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>