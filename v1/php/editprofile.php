<?php
include ("../conn.php");
session_start();
$session = $_SESSION['email'];

if(isset($_POST["Kemaskini"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $oPass = $_POST["oPass"];
  $nPass = $_POST["nPass"];

  $search = "SELECT * FROM `admin` WHERE email= $session AND adPassword = $oPass";
  $admin = $conn->query($search);

        if($admin)
        {
                $sql = "UPDATE  `admin`
                SET adName = '$name', email = '$email', adPassword = '$nPass'";
                                                        
                if(mysqli_query($conn, $sql)){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Admin berjaya dikemaskini!')
                window.location.href='../dashboard/admin/index.php'
                </SCRIPT>");
                }
                else {
                echo 'query error: ' . mysqli_error($conn);
                }
        }
        else if(empty($oPass) && empty($nPass)){
                $sql = "UPDATE  `admin`
                SET adName = '$name', email = '$email' WHERE email = $session";
                                                        
                if(mysqli_query($conn, $sql)){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Admin berjaya dikemaskini!')
                window.location.href='../dashboard/admin/index.php'
                </SCRIPT>");
                }
                else {
                echo 'query error: ' . mysqli_error($conn);
                }

        }else if(!empty($oPass) && empty($nPass)){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Sila isi katalaluan baru!')
                window.location.href='../dashboard/admin/index.php'
                </SCRIPT>");
        }
        else if(empty($oPass) && !empty($nPass)){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Sila isi katalaluan lama!')
        window.location.href='../dashboard/admin/index.php'
        </SCRIPT>");
        }         
        else {
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Katalaluan tidak benar! Sila cuba sekali lagi')
                window.location.href='../dashboard/admin/index.php'
                </SCRIPT>");
        }
}
?>