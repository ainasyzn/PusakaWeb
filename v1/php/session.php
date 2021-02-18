<?php
   include('../conn.php');
   session_start();
   
   $user_check = $_SESSION['adminuser'];
   
   $ses_sql = mysqli_query($conn,"select adName from admin where adName = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['adName'];
   
   if(!isset($_SESSION['adminuser'])){
      header("location:login.php");
      die();
   }
?>