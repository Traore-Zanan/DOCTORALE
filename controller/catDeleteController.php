<?php

    include_once "../config/dbconnect.php";
    
    $id=$_POST['record'];
    $sql3 = "DELETE FROM etudiantni WHERE idNI = '$id'";
      $rest3=mysqli_query($conn,$sql3);
      $message = "inscription acceptée !!";
      $_SESSION['messageConfirm']=$message;
      echo($message);


    
    
?>