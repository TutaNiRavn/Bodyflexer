<?php
session_start();
include("connect.php");
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
        <a href="login.php"> <img src="media/homepage/icon.png" width="70px"></a>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="login.php">Home</a></li>
            <li class="dropdown">
                <a href="login.php">Program</a>
                <div class="dropdown-content">
                    <a href="https://www.fix.com/blog/master-proper-workout-form/">Proper form</a>
                </div>
            </li>
            <li><a href="login.php">Guides</a></li>
            <li><a href="login.php">Contact Us</a></li>
        </ul>
    </nav>
    <!--Login Button-->
    <div class="cartLogin">
        <a href="login.php">
            <img src="media/homepage/login.png" width="40px" height="40px">
        </a>
    </div>
</header>


<body style="background-color: black;">

    <!--Login-->
    <div class="container">
        <div class="homepage-design">
            <img src="media/homepage/text-gif.gif" width="800px">
            <a href="login.php" class="btn">Explore Now &#8594;</a>
        </div>
    </div>
    <video autoplay loop muted plays-inline class="back-video" src="media/homepage/backgroundVideo.mp4"
        type="video/mp4"></video>
    <!-----main---->
    <div class="main-workout">
        <div class="small-container">
            <div class="row">
                <div class="workout-image">
                    <img src="media/homepage/back_hover.gif" class="back-img">
                    <img src="media/homepage/front_hover.gif" class="front-img">
                </div>
                <div class="main-descrip">
                    <h3>GUIDE:</h3>
                    <h1>What Happens When We Exercise</h1>
                    <small>Fitness is complex because the human body is not a static object. Because of their
                        microbiome, every person is unique. Exercise affects gut bacteria (microbiome) and the brain as
                        well as the body. Getting fit requires the body to undergo physical and cellular adaptations in
                        direct response to perceived environmental pressures; these pressures are what we call exercise
                        and they take the form of aerobic or metabolic stress and mechanical loads. The body’s
                        adaptation response takes, on average, six weeks to fully manifest itself. Every fitness gain
                        that is made needs to be maintained through extra work (i.e. exercise). The moment that work
                        stops the fitness gain begins to degrade until it is lost. Because the body constantly adapts
                        the fitness gains made through specific exercises decline over time unless variations are thrown
                        in which continue to challenge the body.</small>
                    <br> <a href="login.php" class="btn">Read more &#8594;</a>
                </div>
            </div>
        </div>
    </div>
    <!----featured program---->
    <div class="featured-container">
        <h2 class="title">Popular Workout Plans
        </h2>
        <div class="row">
            <div class="featured-workout">
                <a href="">
                    <img src="media/homepage/popular.jpg">
                </a>
                <h4>8 Week Beginner Fat Loss Workout for Women</h4>
                <div class="description">
                    <p><b> Overview:</b>
                        <br>
                        <b>Main Goal:</b> Lose Fat
                        <br>
                        <b>Workout Type:</b> Split
                        <br>
                        <b>Training Level:</b> Beginner
                        <br>
                        <b>Program Duration:</b> 8 weeks
                        <br>
                        <b>Days Per Week:</b> 4
                        <br>
                        <b>Time Per Workout:</b> 60-75 minutes
                        <br>
                        <b>Equipment Required:</b> Barbell, Bodyweight, Cables, Dumbbells, Exercise Ball, Machines
                        <br>
                        <b>Target Gender:</b> Female
                    </p>
                </div>
            </div>

            <div class="featured-workout">
                <a href="">
                    <img src="media/homepage/featured-workout.jpg">
                </a>
                <h4>Start from Scratch Series: 6 Week Complete Beginner Program</h4>
                <div class="description">
                    <p><b> Overview:</b>
                        <br>
                        <b>Main Goal:</b> Build Muscle
                        <br>
                        <b>Workout Type:</b> Split
                        <br>
                        <b>Training Level:</b> Intermediate
                        <br>
                        <b>Program Duration:</b> 6 weeks
                        <br>
                        <b>Days Per Week:</b> 4
                        <br>
                        <b>Time Per Workout:</b> 45-60 minutes
                        <br>
                        <b>Equipment Required:</b> Barbell, Bodyweight, Cables, Dumbbells, Machines
                        <br>
                        <b>Target Gender:</b> Male
                    </p>
                </div>
            </div>
            <div class="featured-workout">
                <a href="">
                    <img src="media/homepage/workout-split.jpg">
                </a>
                <h4>Dumbbell Only Workout: 5 Day Dumbbell Workout Split</h4>
                <div class="description">
                    <p><b> Overview:</b>
                        <br>
                        <b>Main Goal:</b> Build Muscle <br>
                        <b>Workout Type:</b> Split
                        <br>
                        <b>Training Level:</b> Intermediate
                        <br>
                        <b>Program Duration:</b> 12 weeks
                        <br>
                        <b>Days Per Week:</b> 5
                        <br>
                        <b>Time Per Workout:</b> 45-60 minutes
                        <br>
                        <b>Equipment Required:</b> Bodyweight, Dumbbells
                        <br>
                        <b>Target Gender:</b> Male & Female
                    </p>
                </div>
            </div>
        </div>
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
</body>

</html>