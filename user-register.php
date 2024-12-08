<?php

include 'connect.php';

if (isset($_POST['signUp'])) {
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkEmail = "SELECT * FROM register WHERE email = '$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_row > 0) {
        echo "Email Address Already Exists !";
    } else {
        $insertQuery = "INSERT INTO register(fullName,email,password)
                      VALUES ('$fullName','$email','$password')";

        if ($conn->query($insertQuery) == TRUE) {
            header("Location: login.php");
        } else {
            echo "Error:" . $conn->error;
        }
    }

}
?>