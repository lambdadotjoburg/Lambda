<?php

    session_start();

    if (isset($_SESSION['useruid'])) {

        // Check if user is granted administrative privileges in which case the manage employees link is available to the user, otherwise not

    }

?>

<!DOCTYPE html>

<html lang="en" >

    <head>

        <meta charset="UTF-8">

        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700">
        <link rel="stylesheet" href="./assets/css/style.team.css">

        <title>Team</title>

    </head>

    <body>

        <div class="heading">

            <h1> Meet our Team </h1>
            
            <br>

            <a href="employees_list.php" class="link"> Manage Employees </a>

            <br>
            <br>

        </div>

        <?php

            // Add-new-employee link should only be visible to website administrator

        ?>

        <div class="wrapper-grid">

            <?php
                
                // write php code here to pull in employees information from the database to display here using a for each loop
            
            ?>

            <div class="container">
                <div class='banner-img'></div>
                <img src='assets/images/team/photos/nerd.jpg' alt='profile image' class="profile-img">
                <h1 class="name">James</h1>
                <p class="description">Hi there! My name is James and I am a Geek! I love applied mathematics and physics</p>
                <button class='btn'>Meet</button>
            </div>

            <div class="container">
                <div class='banner-img'></div>
                <img src='assets/images/team/photos/moss.jpg' alt='profile image' class="profile-img">
                <h1 class="name">Moss</h1>
                <p class="description">Hi there! My name is Moss and I am a Nerd. I love computer science and pure mathematics!</p>
                <button class='btn'>Meet</button>
            </div>

            <div class="container">
                <div class='banner-img'></div>
                <img src='assets/images/team/photos/nerd.jpg' alt='profile image' class="profile-img">
                <h1 class="name">James</h1>
                <p class="description">Hi there! My name is James and I am a Geek! I love applied mathematics and physics</p>
                <button class='btn'>Meet</button>
            </div>

            <div class="container">
                <div class='banner-img'></div>
                <img src='assets/images/team/photos/moss.jpg' alt='profile image' class="profile-img">
                <h1 class="name">Moss</h1>
                <p class="description">Hi there! My name is Moss and I am a Nerd. I love computer science and pure mathematics!</p>
                <button class='btn'>Meet</button>
            </div>

        </div>

    </body>

</html>