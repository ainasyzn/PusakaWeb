<?php 
include ("../conn.php");
  
    $id = $_GET["ID"];
    $sql = "DELETE FROM partner WHERE id = $id";
    $result = $conn->query($sql);

    header("Location: ../dashboard/admin/manage-partner.php");
    
?>