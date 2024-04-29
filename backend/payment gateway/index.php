<?php

require ('../config.php');

if (isset($_POST['submit'])) {


    $name = $_POST["billing_name"];
    $email = $_POST["billing_email"];
    $mobile = $_POST["billing_mobile"];
    $amount = $_POST["payAmount"];

    // now inserting this payment data into db
    $query = "INSERT INTO `transactions`(`name`, `email`, `mobile`, `amount`) VALUES ('$name','$email','$mobile','$amount')";
    $result1 = mysqli_query($conn, $query);
    if ($result1) {

    }
    else{
        echo "<script>alert('Error')</script>";

    }

}
?>