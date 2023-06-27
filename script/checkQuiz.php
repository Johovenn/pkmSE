<?php
    include("dbconnection.php");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $userid = $_SESSION["userid"];
    $provinceid = $_SESSION["provinceid"];

    function checkQuiz(){
        global $conn, $userid, $provinceid;

        $sql = "SELECT * FROM msprogress WHERE userid = $userid AND provinceid = $provinceid";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }

        $row = mysqli_fetch_assoc($result);
        
        if($row["quiz1"] == 0){
            echo "<script> disableQuiz(2) </script>";
        }
        if($row["quiz2"] == 0){
            echo "<script> disableQuiz(3) </script>";
        }
    }
?>