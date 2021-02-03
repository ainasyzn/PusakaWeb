<?php
    // connect to database
    $conn = mysqli_connect('localhost','root','','pelangi');
    
    // Check connection
    if ($conn -> error) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
?>