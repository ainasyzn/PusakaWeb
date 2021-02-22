<?php
include ("../conn.php");

if(isset($_POST["tambah"])){
  $name = $_POST["name"];
  $phoneno = $_POST["phoneno"];


  $sql = "INSERT INTO  `contact`
          SET contactName = '$name', contact_no = '$phoneno'";
                                                  
  if(mysqli_query($conn, $sql)){
         echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Nombor Telefon berjaya ditambah!')
         window.location.href='../dashboard/admin/list-contact.php'
         </SCRIPT>");
  }
   else {
         echo 'query error: ' . mysqli_error($conn);
        }            

}
?>