<?php

//get all tentang info
     $sql = "SELECT * FROM `tentang`";
     $result = $conn->query($sql);
     $tentang = $result-> fetch_assoc();

?>