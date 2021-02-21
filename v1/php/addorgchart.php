<?php
include ("../conn.php");

if(isset($_POST["tambah"])){

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

                          $sql = "UPDATE `tentang` SET imej_org = '$fileNameNew' WHERE id = 1";
                                                  
                          if(mysqli_query($conn, $sql)){
                              echo ("<SCRIPT LANGUAGE='JavaScript'>
                              window.alert('Carta organisasi berjaya dikemaskini!')
                              window.location.href='../dashboard/admin/manage-company.php'
                                    </SCRIPT>");
                              } else {
                                echo 'query error: ' . mysqli_error($conn);
                              }   
                  }
          }
  }
  else {
          echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Format fail tidak dibenarkan! Sila cuba sekali lagi')
          window.location.href='../dashboard/admin/manage-comopany.php'
                </SCRIPT>");
  }
}
?>