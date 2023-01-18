<?php

    session_start();

    // print_r ($_SESSION);

    if (isset($_SESSION['useruid'])) {
        
        $username = $_SESSION['useruid'];

    } else {

        header("location: index.php");

    }

?>

<!DOCTYPE html>

<html lang="en" >

    <head>

        <meta charset="UTF-8">

        <title> Profile Page </title>
        
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,300,700'>
        <link rel="stylesheet" href="./assets/css/style.profile.css">

    </head>

    <body>
        
        <form method="post" action="includes/profile.inc.php" enctype="multipart/form-data">

            <!-- partial:index.partial.html -->
            <div class="container">

                <div class="form-part">

                    <h2 style="text-align: center;"> Profile Information </h2>

                    <label class="pic" for="picture">
                        <img src='assets/images/team/default/defaultImage.png' alt='profile image' class="profile-img">
                    </label>

                    <input type="file" id="picture" name="picture" class="picture"></input>
                    
                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="form-inputs">

                        <div class="cub-input">
                                
                            <div class="text-input">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Name" required>
                            </div>

                            <div class="text-input">
                                
                                <label for="surname">Surname</label>
                                <input type="text" name="surname" id="surname" placeholder="Surname" required>
                                
                            </div>

                            <div class="text-input">
                                
                                <label for="mobile">Mobile</label>
                                <input type="tel" name="mobile" id="mobile" placeholder="Mobile" required>

                            </div>

                            <div class="clearfix"></div>

                        </div>

                        <br>
                        <br>                            

                        <div class="cub-input">
                                
                            <div class="text-input">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" required>
                            </div>

                            <div class="text-input">
                                
                                <label for="id_number">ID Number</label>
                                <input type="number" name="id_number" id="id_number" placeholder="ID Number" required>
                                
                            </div>

                            <div class="text-input">
                                
                                <label for="date_of_birth">Date of Birth</label>
                                <input type="date" name="date_of_birth" id="date_of_birth" required>
                                
                            </div>

                            <div class="clearfix"></div>

                        </div>

                        <br>
                        <br>

                        <div class="cub-input">

                            <div class="text-input">
                                
                                <label for="nqf">NQF</label>
                                <input type="number" name="nqf" id="nqf" min="1" max="10" placeholder="NQF Level" required/>
                                
                            </div>

                            <div class="text-input">
                                
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" placeholder="House Number & Street Name" required/>
                                
                            </div>

                            <div class="text-input">
                                
                                <label for="postal_code">Postal Code</label>
                                <input type="number" name="postal_code" id="postal_code" placeholder="Zip Code" required/>
                                
                            </div>

                            <div class="clearfix"></div>

                        </div>

                        <input type="hidden" id="session_username" name="session_username" value="<?php echo $username ;?>">

                        <br>
                        <br>

                        <div style="width: 100%; display: flex; justify-content: center;">
                            <button name="submit" type="submit" class="button" value="Signup"> Update </button>
                        </div>

                    </div>

                </div>

            </div>            

    </form>

    </body>

</html>