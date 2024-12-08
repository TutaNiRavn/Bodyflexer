<?php
session_start();
include 'connect.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
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
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="media/homepage/icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BODYFLEXER</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;500;600;700&display=swap"
        rel="stylesheet">

</head>
<!---nav-bar--->
<header>
    <div class="logo">
        <a href="homepagee.php"> <img src="media/homepage/icon.png" width="70px"></a>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="homepagee.php">Home</a></li>
            <li class="dropdown">
                <a href="program.php">Program</a>
                <div class="dropdown-content">
                    <a href="https://www.fix.com/blog/master-proper-workout-form/">Proper form</a>
                </div>
            </li>
            <li><a href="guides.php">Guides</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1): ?>
            <li><a href="databasedaw/index.php">Config</a></li>
        <?php endif; ?>
        </ul>
    </nav>
    <!--Login Button-->
    <div class="cartLogin">  
        <a href="profile.php">
            <img src="media/homepage/login.png" width="40px" height="40px">
        </a>
    </div>
</header>


<body style="background-color: black;">
    
<title>Account Information</title>
<style>
     .logout-button {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #f44336;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
      }
      .logout-button:hover {
        background-color: #d32f2f;
      }
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    h1 {
        margin-bottom: 20px;
        color: #333;
    }

    .centered-table {
        border-collapse: collapse;
        width: 80%;
        max-width: 600px;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .centered-table th, .centered-table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #dddddd;
    }

    .centered-table th {
        background-color: #000000;
        color: white;
    }

    .centered-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>
</head>
<body>

<h1>Account Information</h1>

<table class="centered-table">
    <thead>
        <tr>
            <th>Full Name</th></p>
            <th>Email</th></p>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo htmlspecialchars($fullName); ?></td>
            <td><?php echo htmlspecialchars($email); ?></td>
</tr>
</tbody>
     
</table>

            
    <!------footer-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-logo">
                <img src="media/homepage/landscape-icon.jpg" width="400px" height="100px">
                </div>
                <div class="footer-col-3">
                    <h3>Information</h3>
                    <li><a href="login.php">About Us</a></li>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Refund policy</a></li>
                </div>
                <div class="footer-col-3">
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Term of use</a></li>
                </div>
                <div class="footer-col-3">
                    <h3>Follow Us</h3>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright © 2024 BODYFLEXER - All rights reserved.</p>
        </div>
    </div>
     <a href="logout.php" class="logout-button">Logout</a>
</body>
</html>
