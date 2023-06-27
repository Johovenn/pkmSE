<?php
    session_start();
    include("dbconnection.php");
    $userid = $_SESSION["userid"];
    $provinceid = $_SESSION["provinceid"];

    $sql = "UPDATE msprogress SET quiz1 = 1 WHERE userid = $userid AND provinceid = $provinceid";
    $result = mysqli_query($conn, $sql);
?>