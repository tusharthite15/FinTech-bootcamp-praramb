<?php
session_start();
require("./config.php");

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['save'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $ConfirmPassword = $_POST['cpass'];
    
    if($password != $ConfirmPassword){
        echo 'password not match';
        exit; 
    }
        // check if the email already exists
        $checkmail = "SELECT * FROM accounts WHERE email = '$email'";
        $result = mysqli_query($conn, $checkmail);

        if(mysqli_num_rows($result) > 0){
            echo "Email address is already existing";
            exit;
        } 

        // now inserting data in db
        $query = "INSERT INTO accounts (`username`, `email`, `password`) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        // Assuming 'id' is auto-incremented, so no need to include it in the query
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
        mysqli_stmt_execute($stmt);

        // Check for errors
        if(mysqli_stmt_affected_rows($stmt) <= 0){
            die("Error while executing the statement: " . mysqli_error($conn));
        }

        // Store session values
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
    // }
}
?>
