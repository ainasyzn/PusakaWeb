<?php 
include ("../conn.php");
  
    $id = $_GET["ID"];
    $sql = "DELETE FROM `perkhidmatan` WHERE id = $id";
    $result = $conn->query($sql);

    header("Location: ../dashboard/admin/perkhidmatan.php");
    
?>