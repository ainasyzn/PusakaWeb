<?php
include ("../conn.php");

if(isset($_POST["tambah"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $pass = 'admin';

  $sql = "INSERT INTO  `admin`
          SET adName = '$name', email = '$email', adPassword = '$pass'";
                                                  
  if(mysqli_query($conn, $sql)){
         echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Admin berjaya didaftar!')
         window.location.href='../dashboard/admin/index.php'
         </SCRIPT>");
  }
   else {
         echo 'query error: ' . mysqli_error($conn);
        }            

}
?>