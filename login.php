<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="login.css" rel="stylesheet">
    <style>
        .logo {
            position: absolute;
            top: 20px;
            /* Adjust as needed */
            left: 20px;
            /* Adjust as needed */
            z-index: 10;
            /* Ensure it appears above the video */
            width: 100px;
            /* Set the desired width */
            height: auto;
            /* Maintain aspect ratio */
        }
    </style>
</head>

<body>
    <img src="media/homepage/icon.png" alt="Logo" class="logo">

    <video autoplay muted loop id="bgVideo">
        <source src="media/homepage/backgroundVideo.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="login-container" id="signIn">
        <h2>Login</h2>
        <form method="post" action="user-login.php">
            <div class="input-group">
                <span class="icon"> <ion-icon name="mail"></ion-icon></span>
                <input type="text" name="email" id="email" placeholder="Email or Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <img src="eye-icon.png" alt="Show Password" onclick="togglePassword('password', this)">
            </div>
            <button type="submit" class="btn-login" name="signIn">Login</button>
            <div class="register-link">
                Don't have an account? <a href="register.php">Register</a>
            </div>
        </form>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        function togglePassword(inputId, eyeIcon) {
            const input = document.getElementById(inputId);
            if (input.type === "password") {
                input.type = "text";
                eyeIcon.src = "close eye-icon.png"; // Ensure this path is correct
            } else {
                input.type = "password";
                eyeIcon.src = "eye-icon.png"; // Ensure this path is correct
            }
        }
    </script>
</body>

</html>