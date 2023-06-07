<?php 
    session_start();

    $message = "ini message";
    $username = $_SESSION["username"];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $oldPassword = $_POST["current"];
        $newPassword = $_POST["new"];
        $confirmPassword = $_POST["confirm"];


        $sql = "SELECT * FROM userdata WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);

            if(strcmp($oldPassword, $row["password"]) == 0){ //kalo pass lama nya bener
                if(strcmp($newPassword, $confirmPassword) == 0){ //kalo pass baru sama confirm nya sama
                    $sql = "UPDATE userdata SET `password` = '$newPassword' WHERE username = '$username'";
                    $query = mysqli_query($conn, $sql);
                    $message = "berhasil";
                }
                else{
                    $message = "Password doesn't match";
                }
            }
            else{ // kalo pass lama nya salah
                $message = "Wrong Password!";
            }
        }
    }
?>