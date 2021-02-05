<?php 
    include ("conn.php");

    //get all desc
    $sql = "SELECT * FROM `tentang`";
    $result = $conn->query($sql);
    $row = $result-> fetch_assoc();

    //get all team desc
    $sql1 = "SELECT * FROM `member`";
    $result1 = $conn->query($sql1);

    //get all partner desc
    $sql2 = "SELECT * FROM `partner`";
    $result2 = $conn->query($sql2);

    //get all perkhidmatan
    $sql3 = "SELECT * FROM  `perkhidmatan`";
    $result3 = $conn->query($sql3);
?>