<?php

include ("../conn.php");

session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $myusername= mysqli_real_escape_string($conn,$_POST['username']);
        $mypassword= mysqli_real_escape_string($conn,$_POST['password']);
        $sql = "SELECT * FROM admin WHERE email = '$myusername' and adPassword = '$mypassword'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        
        if($count == 1)
        {
            $_SESSION['adminuser'] = $myusername;
            echo '<h3>connection successfull!</h3>';
            header("location:../admindash/admindashboard/ltr/index.html");
        }
        else
        {
            ?>
            <script> alert('Invalid Username or Password');</script>
<?php
                
                header ("refresh:1; url=login.php");
        }
    }
?>