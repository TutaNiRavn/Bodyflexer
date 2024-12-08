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
<!DOCTYPE html>
<html>
  <head>
    <title>Hello, World!</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
      /* CSS for positioning the logout button */
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

      /* Styling for header and navigation bar */
      header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
        background-color: #333;
        color: white;
      }
      .logo img {
        width: 70px;
      }
      .navbar ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
      }
      .navbar ul li {
        margin: 0 15px;
      }
      .navbar ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s;
      }
      .navbar ul li a:hover {
        background-color: #555;
      }
      /* Styling for dropdown */
      .dropdown {
        position: relative;
      }
      .dropdown-content {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background-color: #333;
        border-radius: 5px;
        min-width: 150px;
        z-index: 1;
      }
      .dropdown:hover .dropdown-content {
        display: block;
      }
      .dropdown-content a {
        display: block;
        padding: 10px;
        color: white;
        text-decoration: none;
      }
      .dropdown-content a:hover {
        background-color: #555;
      }
    </style>
  </head>
  <body>
    <header>
      <!-- Logo Section -->
      <div class="logo">
        <a href="homepagee.php">
          <img src="media/homepage/icon.png" width="70px" alt="Logo">
        </a>
      </div>

      <!-- Navigation Bar -->
      <nav class="navbar">
        <ul>
          <li><a href="homepagee.php">Home</a></li>
          <li class="dropdown">
            <a href="program.php">Program</a>
            <div class="dropdown-content">
              <a href="form.php">Proper Form</a>
            </div>
          </li>
          <li><a href="guides.php">Guides</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav>
       
    </header>

  <div class="about.php">
            <div class="card mb-3 content">
              <h1 class="m-3 pt-3">About</h1>
              <div class="card-body">
                
                <div class="row">
                  <div class="col-md-3">
                    <h5>Full Name</h5><?php echo htmlspecialchars($fullName); ?></p>
                  </div>
                  <div class="col-md-9 text-secondary">
                  
                  </div>
                </div>
                <hr>
                
                <div class="row">
                  <div class="col-md-3">
                    <h5>Email</h5><?php echo htmlspecialchars($email); ?></p>
                  </div>
                  <div class="col-md-9 text-secondary">
                  </div>
    <!-- Logout Button in Bottom Right Corner -->
    <a href="logout.php" class="logout-button">Logout</a>
  </body>
</html>