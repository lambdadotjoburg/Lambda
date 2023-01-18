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

					<a style="position: absolute; left: 2%;" href="resources.php"> Resources </a>
                    
                    <a style="position: absolute; text-decoration: none; right: 2%; top: 3%;" href="index.php"> <i class="fa fa-home" style="font-size: 36px;"></i> </a>

					<br>
                    <br>

					<hr>

                </body>
                
            </html>

        <?php

    }

?>
