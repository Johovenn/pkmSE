<?php
    session_start();

    $errorMessage = "test error";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $check = $_POST["check"];
    
        $sql = "SELECT * FROM userdata WHERE username = '$check'";
        $result = mysqli_query($conn, $sql);
    
        // Check if the query was successful
        if ($result) {
            if(mysqli_num_rows($result) == 0){
                $row = mysqli_fetch_assoc($result);
                $oldUsername = $_SESSION["username"];
    
                $sql = "UPDATE `userdata` SET username = '$check' WHERE username = '$oldUsername'";
                $result = mysqli_query($conn, $sql);
                
                $errorMessage = "Success! Changed to $check";
                $_SESSION["username"] = $check;
            } 
            else {
                $errorMessage = "No user found";
            }
        } 
        else {
            $errorMessage = "Query error: " . mysqli_error($conn);
        }
    }
?>