<?php
    session_start();

    $usernameError = "";
    $emailError = "";
    $passwordError = "";
    $confirmError = "";
    $errorMessage = "";
    $_SESSION["username"] = "";
    $_SESSION["registerStatus"] = false;

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm = $_POST["confirm"];
        $firstname = $_POST["first-name"];
        $lastname = $_POST["last-name"];
        $dob = $_POST["dob"];

        $sql = "SELECT * FROM userdata WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);

        if(!empty($username) && !empty($email) && !empty($password) && !empty($confirm) && !empty($firstname) && !empty($lastname) && !empty($dob)){
            if(mysqli_num_rows($result) == 0){
                if(strpos($email, "@gmail.com") !== false){
                    if(strcmp($password, $confirm) == 0){
                        $sql = "INSERT INTO `userdata`(`firstName`, `lastName`, `username`, `email`, `password`, `dob`) VALUES ('$firstname','$lastname','$username','$email','$password','$dob')";
                        $result = mysqli_query($conn, $sql);

                        header("Location: loginPage.php");
                        $_SESSION["registerStatus"] = true;
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
        else{
            $errorMessage = "Please fill in all the forms!";
        }
    }
?>