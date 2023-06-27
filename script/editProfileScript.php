<?php 
    $userid = $_SESSION["userid"];

    $username = "";
    $firstName = "";
    $lastName = "";
    $email = "";
    $dob = "";
    
    $sql = "SELECT * FROM userdata WHERE userid = $userid";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);

        $username = $row["username"];
        $firstName = $row["firstName"];
        $lastName = $row["lastName"];
        $email = $row["email"];
        $dob = $row["dob"];

        echo "<script> getUserData($firstName, $lastName, $username, $email, $dob) </script>";
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];

        if(!empty($username) && !empty($email) && !empty($firstname) && !empty($lastname) && !empty($dob)){
            $sql = "SELECT * FROM userdata WHERE userid = $username";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) == 0){ //verify username available apa gak
                if(strpos($email, "@gmail.com") !== false){ //verify email nya valid apa ga
                    $sql = "UPDATE userdata SET firstName = $firstName, lastName = $lastName, username = $username, email = $email, dob = $dob WHERE userid = $userid";
                    $result = mysqli_query($conn, $sql);
                }
            }
        }
    }
?>