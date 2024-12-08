<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['user_id'])) {
    echo "You are not logged in. Please log in to view your profile.";
    exit;
}

$user_id = $_SESSION['user_id'];

$query = "SELECT fullName, email FROM register WHERE Id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $fullName = $user['fullName'];
    $email = $user['email'];
} else {
    echo "User not found.";
    exit;
}

$stmt->close();
$conn->close();
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="profile.css" />
</head>

<body>
    <h1>Profile Page</h1>
    <p><strong>Full Name:</strong> <?php echo htmlspecialchars($fullName); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <a href="logout.php">Log Out</a>
</body>

</html>