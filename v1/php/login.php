<?php

include ("../conn.php");

session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $email= mysqli_real_escape_string($conn,$_POST['email']);
        $mypassword= mysqli_real_escape_string($conn,$_POST['password']);
        $sql = "SELECT * FROM admin WHERE email = '$email' and adPassword = '$mypassword'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
        if($count == 1)
        {
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $row["id"];
            //echo '<h3>connection successfull!</h3>';
            header("location:../dashboard/admin/index.php");
        }
        else
        {
            ?>
            <script> alert('Email atau kata laluan tidak wujud!');</script>
<?php
                
                header ("refresh:1; url=login.php");
        }
    }
?>