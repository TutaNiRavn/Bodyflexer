<?php
session_start();
include 'connect.php';

if (isset($_POST['signIn'])) {
    $input = $_POST['email']; // Holds either email or fullName
    $password = $_POST['password'];

    // Determine if input is an email
    if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
        $query = "SELECT Id FROM register WHERE email = ? AND password = ?";
    } else {
        $query = "SELECT Id FROM register WHERE fullName = ? AND password = ?";
    }

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $input, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['Id']; // Save user ID in session
        $_SESSION['email'] = $input;

        if ($user['Id'] == 1) {
            header("Location: homepagee.php");
        } else {
            header("Location: homepagee.php");
        }
        exit();
    } else {
        echo "Incorrect email or password.";
    }
}
?>
