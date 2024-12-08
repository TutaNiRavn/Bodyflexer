<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
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

    <div class="register-container" id="signUp">
        <h2>Register</h2>
        <form method="post" action="user-register.php">
            <div class="input-group">
                <span class="icon"> <ion-icon name="mail"></ion-icon>
                </span>
                <input type="text" name="fullname" id="fullname" placeholder="Full Name" required>
            </div>
            <div class="input-group">
                <span class="icon"> <ion-icon name="mail"></ion-icon>
                </span>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <img src="eye-icon.png" alt="Show Password" onclick="togglePassword('password', this)">
            </div>
            <button type="submit" class="btn-register" name="signUp">Register</button>
            <div class="login-link">
                Already have an account? <a href="login.php">Login</a>
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
                eyeIcon.src = "close eye-icon.png";
            } else {
                input.type = "password";
                eyeIcon.src = "eye-icon.png";
            }
        }
    </script>
</body>

</html>