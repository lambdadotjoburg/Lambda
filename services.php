<?php

    session_start();

    if (isset($_SESSION['useruid'])) {

        $_SESSION['useruid'];

    }

?>

<!DOCTYPE html>

<html lang="en" >
    
    <head>
        
      <meta charset="UTF-8">
      
      <title>Services</title>

      <link rel="stylesheet" href="./assets/css/style.services.css">
    
    </head>
    
    <body>

        <div class="wrapper-grid">
            
            <div class="container">
                <div class="banner-img"></div>
                <img src="assets/images/services/icons/6172512.gif" alt="profile img" class="profile-img"/>
                <h1 class="Name">Rockets</h1>
                <p class="description">This is dummy text to fill up space on the page while I am busy making edits to the card</p>
                <button class="btn">Lean More</button>
            </div>
            
            <div class="container">
                <div class="banner-img"></div>
                <img src="assets/images/services/icons/6172518.gif" alt="profile img" class="profile-img"/>
                <h1 class="Name">Clouds</h1>
                <p class="description">Our Question Paper Generator is a service that will reshape online education</p>
                <button class="btn">Lean More</button>
            </div>
            
            <div class="container">
                <div class="banner-img"></div>
                <img src="assets/images/services/icons/6172532.gif" alt="profile img" class="profile-img"/>
                <h1 class="Name">Network</h1>
                <p class="description">We are partnering with </p></p>
                <button class="btn">Lean More</button>
            </div>
            
        </div>
    
    </body>

</html>