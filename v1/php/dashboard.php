<?php
   session_start();
   include("conn.php");
   $email = $_SESSION['email'];

   //get all admin info
   $sql = "SELECT * 
           FROM `admin`
           WHERE email = '$email'";
   $result = $conn->query($sql);
   $admin = $result-> fetch_assoc();
?>
