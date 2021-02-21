<?php 
include ("conn.php");
if(isset($_POST["muatnaikgambar"])){
   $name = $_POST["name"];
 
   $file = $_FILES['file'];
   $fileName = $_FILES['file']['name'];
   $fileTmpName = $_FILES['file']['tmp_name'];
   $fileSize = $_FILES['file']['size'];
   $fileError = $_FILES['file']['error'];
   $fileType = $_FILES['file']['type'];
 
   $fileExt = explode('.', $fileName);
   $fileActualExt = strtolower(end($fileExt));
 
   $allowed = array('jpg', 'jpeg', 'png');
 
   if(in_array($fileActualExt, $allowed)) {
           if($fileError === 0) {
                   if($fileSize < 10000000) {
                           $fileNameNew = uniqid('', true).".".$fileActualExt;
                           $fileDestination = '../uploads/'.$fileNameNew;
                           move_uploaded_file($fileTmpName, $fileDestination);
 
                           $sql = "INSERT INTO  `projek`
                                   SET projekName = '$name', imej = '$fileNameNew'";
 
                           if(mysqli_query($conn, $sql)){
                               echo ("<SCRIPT LANGUAGE='JavaScript'>
                               window.alert('Kemaskini Projek Berjaya!')
                               window.location.href='../dashboard/admin/list-project.php'
                                     </SCRIPT>");
                               } else {
                                 echo 'query error: ' . mysqli_error($conn);
                               }
                   }
           }
   }
   else {
           echo ("<SCRIPT LANGUAGE='JavaScript'>
           window.alert('Gagal Memuatnaik. Sila cuba sekali lagi!')
           window.location.href='../dashboard/admin/list-project.php'
                 </SCRIPT>");
   }
 }