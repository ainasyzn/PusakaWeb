<?php
include ("../conn.php");

if(isset($_POST["kemaskini"])){
  $name = $_POST["name"];
  $id = $_POST["id"];

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

                          $sql = "UPDATE `partner`
                                  SET partnerName = '$name', partnerImej = '$fileNameNew'
                                  WHERE id = $id";
                                                  
                          if(mysqli_query($conn, $sql)){
                              echo ("<SCRIPT LANGUAGE='JavaScript'>
                              window.alert('Rakan Kongsi berjaya dikemaskini!')
                              window.location.href='../dashboard/admin/manage-partner.php'
                                    </SCRIPT>");
                              } else {
                                echo 'query error: ' . mysqli_error($conn);
                              }   
                  }
          }
  }
  else if(empty($fileTmpName)){ //kalau no gambar

        $sql = "UPDATE `partner`
        SET partnerName = '$name'
        WHERE id = $id";
                                              
        if(mysqli_query($conn, $sql)){
          echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Partner successfully updated!')
          window.location.href='../dashboard/admin/manage-partner.php'
                </SCRIPT>");
        } else {
          echo 'query error: ' . mysqli_error($conn);
        }  

  } 
  else {
          echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Can't upload file of this type! Please try again.')
          window.location.href='../dashboard/admin/manage-partner.php'
                </SCRIPT>");
  }
}
?>