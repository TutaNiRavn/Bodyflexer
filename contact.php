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
        </ul>
    </nav>
    <!--Login Button-->
    <div class="cartLogin">
        <a href="profile.php">
            <img src="media/homepage/login.png" width="40px" height="40px">
        </a>
    </div>
</header>

<title>Contact Us</title>
<style>
    /* Global styles for the body and container */
    body {
        font-family: Arial, sans-serif;
        background-color: #000000;
        margin: 0;
        padding: 0;
    }

    .scontainer {
        width: 80%;
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background: #fcfafa;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 95%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #060807;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #030504;
    }

    /* Styles for the table only */
    .table-container {
        width: 80%;
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background: #fcfafa;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .table-container h1 {
        text-align: center;
    }

    .table-container .custom-table {
        border-collapse: collapse;
        width: 100%;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
    }

    .table-container .custom-table th,
    .table-container .custom-table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #dddddd;
    }

    .table-container .custom-table th {
        background-color: #000000;
        color: white;
    }

    .table-container .custom-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>
</head>

<body>
    <div class="scontainer">
        <h1>Contact Us</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>
    </div>


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