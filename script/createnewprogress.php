<?php 
    session_start();
    include("dbconnection.php");

    $param = $_GET['param'];
    parse_str($param, $params);
    $provinceid = $params['param'];
    $userid = $_SESSION["userid"];
    $_SESSION["provinceid"] = $provinceid;

    $sql = "SELECT * FROM msprogress WHERE provinceid = $provinceid AND userid = $userid";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){
        $sql = "INSERT INTO `msprogress`(`progressid`, `userid`, `provinceid`, `quiz1`, `quiz2`, `quiz3`) VALUES ('','$userid','$provinceid', 0, 0, 0)";
        $result = mysqli_query($conn, $sql);
    }
?>