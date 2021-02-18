<?php 
session_start();
include ("../conn.php");
$email = $_SESSION["email"];

if(isset($_POST["kemaskini"])){
    $name = $_POST["nama"];
    $emailbaru = $_POST["email"];
    $katalaluan = $_POST["katalaluan"];

    $check = "SELECT * FROM admin
            WHERE email = '$email' AND adPassword = '$katalaluan'";
    $result = $conn->query($check);
    $admin = $result-> fetch_assoc();

    if($admin){
        $sql1 = "UPDATE admin
        SET adName = '$name', email = '$emailbaru'";
        $result1 = $conn->query($sql1);
        header("Location: ../dashboard/admin/manage-access.php?email =$email");
    }

}
?>