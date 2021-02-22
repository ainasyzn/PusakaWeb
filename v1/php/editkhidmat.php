<?php 
session_start();
include ("../conn.php");

if(isset($_POST["kemaskini"])){
    $id = $_POST["id"];
    $name = $_POST["nama"];
    $perkhidmatan = $_POST["perkhidmatan"];

        $sql1 = "UPDATE `perkhidmatan`
        SET khidmatName = '$name', khidmatDescription = '$perkhidmatan' WHERE id ='$id' ";
        $result1 = $conn->query($sql1);
        if($result1){
        header("Location: ../dashboard/admin/perkhidmatan.php");
        ?>
        <script>alert("Perkhidmatan berjaya Dikemaskini")</script>
        <?php
        }
}
?>