<?php

    session_start();

    if (isset($_SESSION['useruid'])) {

        $_SESSION['useruid'];

        ?>

            <!DOCTYPE html>

            <html>

                <head>
                
                    <title> Question Paper Generator </title>

                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

                    <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML"></script>

                </head>

                <script type="text/x-mathjax-config">

                    MathJax.Hub.Config({
                        
                        tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
                        
                        
                    });

                    MathJax.Hub.Config({

                        tex2jax: {displayMath: [['$$','$$'], ['\\[','\\]']]}
                        
                    });

                </script>
                
                <body>

                    <hr>

                    <br>

					<a href="resources.php"> Resources </a>
                    
                    <a style="position: absolute; text-decoration: none; right: 2%; top: 3%;" href="index.php"> <i class="fa fa-home" style="font-size: 36px;"></i> </a>

                    <br>
                    <br>

                    <hr>

                    <?php

                        // Write php code here to fetch users contributions to the database and display the information here
                        
                        // check if user has any contributions to the database

                        // if not, offer them a link to upload their first question paper

                        // if user does have data stored within the database, spit up the data in a way which makes it easy for the user to manage the data

                        // Provide an option to edit, delete & print their old question papers

                        // If user decides to delete question paper from database, replace their username for each question paper in the database by "system" or "administrator" to keep our resources within the database for generating random "system generated" question papers

                    ?>

                </body>
                
            </html>

        <?php

    }

?>