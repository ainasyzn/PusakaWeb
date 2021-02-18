<?php

  include ('conn.php');

if(isset($_POST['submit'])){

   $projekinfo = $_POST["projekinfo"];
   $jambekerja = $_POST["jambekerja"];
   $bilklien = $_POST["bilklien"];
   $bilproj = $_POST["bilproj"];
   $bilsuka = $_POST["bilsuka"];
   

   $query="UPDATE `tentang` SET  projek_desc='$projekinfo' , jam_bekerja=$jambekerja, bilanganklien=$bilklien, bilanganprojek= $bilproj, bilangansuka=$bilsuka WHERE id = 1";
   
   $results = $conn->query($query);
       
      if($results){
            header ("refresh:1; url=../dashboard/admin/manage-project.php");
         ?>
         <script> alert("Tentang Projek Berjaya Dikemaskini")</script>
         <?php
      }
   }

     

?>