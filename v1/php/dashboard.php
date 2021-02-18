<?php
   session_start();
   $email = $_SESSION['email'];

   //get all admin info
   $sql = "SELECT * 
           FROM `admin`
           WHERE email = '$email'";
   $result = $conn->query($sql);
   $admin = $result-> fetch_assoc();

   if(isset($_GET['id']))
   {
        $email = $_GET['email'];

        //get all admin info
        $sql = "SELECT * 
                FROM `admin`
                WHERE email = '$email'";
        $result = $conn->query($sql);
        $admin = $result-> fetch_assoc();
   }
?>
