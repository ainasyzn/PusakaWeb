<?php
include("conn.php");

if(isset($_POST['but_upload'])){
   $maxsize = 5242880; // 5MB
   if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
       $name = $_FILES['file']['name'];
       $target_dir = "../video/";
       $target_file = $target_dir.$name;

       // Select file type
       $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($extension,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            header ("refresh:1; url=../dashboard/admin/manage-company.php")
            ?>
            <script>alert('File too large. File must be less than 5MB.');</script>
            <?php
            
          }else{
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               // Insert record
               $var = substr($target_file,3);
               $query = "UPDATE `tentang` SET vname='$name', lokasi='$var'  WHERE id = 1";

               mysqli_query($conn,$query);
               
               header ("refresh:1; url=../dashboard/admin/manage-company.php")
               ?>
               <script>alert('Muat Naik Berjaya');</script>
               <?php
             }
          }

       }else{
         header ("refresh:1; url=../dashboard/admin/manage-company.php")
            ?>
            <script>alert('Invalid File Extension');</script>
            <?php
       }
   }else{
      echo "Select file";
   }
   
} 

?>
