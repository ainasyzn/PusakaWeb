<?php
include ("../conn.php");

if(isset($_POST["tambah"])){
  $name = $_POST["name"];
  $khidmat = $_POST["perkhidmatan"];


  $sql = "INSERT INTO  `perkhidmatan`
          SET khidmatName = '$name', khidmatDescription = '$khidmat'";
                                                  
  if(mysqli_query($conn, $sql)){
         echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Perkhidmatan berjaya ditambah!')
         window.location.href='../dashboard/admin/perkhidmatan.php'
         </SCRIPT>");
  }
   else {
         echo 'query error: ' . mysqli_error($conn);
        }            

}
?>