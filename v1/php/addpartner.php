<?php
include ("../conn.php");

if(isset($_POST["tambah"])){
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

                          $sql = "INSERT INTO  `partner`
                                  SET partnerName = '$name', partnerImej = '$fileNameNew'";
                                                  
                          if(mysqli_query($conn, $sql)){
                              echo ("<SCRIPT LANGUAGE='JavaScript'>
                              window.alert('Rakan Kongsi berjaya ditambah!')
                              window.location.href='../dashboard/admin/manage-partner.php'
                                    </SCRIPT>");
                              } else {
                                echo 'query error: ' . mysqli_error($conn);
                              }   
                  }
          }
  }
  else {
        header ("refresh:1; url=../dashboard/admin/manage-partner.php")
          ?>
          <script>alert("Format fail tidak dibenarkan. Format yang dibenarkan: .jpg, .jpeg, .png")</script>
          <?php
  }
}
?>