<?php 
    include ("conn.php");

    //get all desc
    $sql = "SELECT * FROM `tentang`";
    $result = $conn->query($sql);
    $row = $result-> fetch_assoc();

    $sqls = "SELECT * FROM `projek`";
    $results = $conn->query($sqls);
   
    $query = "SELECT * FROM `contact` WHERE contactName = 'Pejabat'";
    $rsql = $conn->query($query);
    $rows = $rsql-> fetch_assoc();

    //get all team desc
    $sql1 = "SELECT * FROM `member`";
    $result1 = $conn->query($sql1);

    //get all partner desc
    $sql2 = "SELECT * FROM `partner`";
    $result2 = $conn->query($sql2);

    //get all perkhidmatan
    $sql3 = "SELECT * FROM  `perkhidmatan`";
    $result3 = $conn->query($sql3);

    //get contacts
    $sql4 = "SELECT * FROM `contact`";
    $result4 = $conn->query($sql4);
?>