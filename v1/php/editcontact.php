<?php 
session_start();
include ("../conn.php");

if(isset($_POST["kemaskini"])){
    $id = $_POST["id"];
    $name = $_POST["nama"];
    $phoneno = $_POST["phoneno"];

        $sql1 = "UPDATE `contact`
        SET contactName = '$name', contact_no = '$phoneno' WHERE id ='$id' ";
        $result1 = $conn->query($sql1);
        if($result1){
        header("Location: ../dashboard/admin/list-contact.php");
        }
}
?>