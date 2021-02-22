<?php

  include ('conn.php');
  


if(isset($_POST['submit'])){

   $penSyarikat = $_POST["penSyarikat"];
   $penVideo = $_POST["penVideo"];
   $infopasukan = $_POST["infopasukan"];
   $alamat = $_POST["alamat"];
   

   $query="UPDATE `tentang` SET pengenalan_desc = '$penSyarikat' ,  pengenalan_vid_desc='$penVideo', team_desc='$infopasukan', alamat= '$alamat' WHERE id = 1";
   
   $results = $conn->query($query);
       
      if($results){
            header ("refresh:1; url=../dashboard/admin/manage-company.php");
         ?>
         <script> alert("Tentang syarikat berjaya dikemaskini")</script>
         <?php
      }
   }

     

?>