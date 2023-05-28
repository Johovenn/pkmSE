<?php
    session_start();

    $usernameError = "";
    $emailError = "";
    $passwordError = "";
    $confirmError = "";
    $_SESSION["registerStatus"] = "Login into your account here!";
    $_SESSION["username"] = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm = $_POST["confirm"];

        $sql = "SELECT * FROM userdata WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 0){
            if(strpos($email, "@gmail.com") !== false){
                if(strcmp($password, $confirm) == 0){
                    $sql = "INSERT INTO `userdata`(`id`, `username`, `email`, `password`) VALUES ('','$username','$email','$password')";
                    $result = mysqli_query($conn, $sql);
                    $_SESSION["registerStatus"] = "You have successfully registered your account.";
    
                    header("Location: loginPage.php");
                }
                else{
                    $confirmError = "Password doesn't match!";
                }
            }
            else{
                $emailError = "Email must contain '@gmail.com'";
            }
        }
        else{
            $usernameError = "This username is not available!";
        }
    }
?>