<?php 
include ("../conn.php");
  
    $id = $_GET["ID"];
    $sql = "DELETE FROM admin WHERE id = $id";
    $result = $conn->query($sql);

    header("Location: ../dashboard/admin/index.php");
    
?>