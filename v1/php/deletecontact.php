<?php 
include ("../conn.php");
  
    $id = $_GET["ID"];
    $sql = "DELETE FROM `contact` WHERE id = $id";
    $result = $conn->query($sql);

    header("Location: ../dashboard/admin/list-contact.php");
    
?>