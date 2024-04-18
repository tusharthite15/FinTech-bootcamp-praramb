<?php
session_start();
require("./config.php");

if(isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["pass"];

    // check all fields are filled properly
    if(!empty($email) && !empty($password)) { 

        
        $query = "SELECT * FROM accounts WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();

        $result = $stmt->get_result();

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['username'] = $row['username'];

            // Redirect to dashboard
            header("Location: ../../modules/dashboard.html");
            exit; // Added exit
        }
        else {
            echo 'No account found with this email and password';
        }
    }
    else {
        echo 'Please fill all the details';
    }
}
?>
