<?php

    session_start();

    if (isset($_SESSION['useruid'])) {

        $_SESSION['useruid'];

        ?>

        <!DOCTYPE html>

        <html>

            <head>

            <title> Question Paper Repository </title>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

            </head>
            
            <style>
            
            .center {
                position: absolute;
                left: 50%;
                top: 50%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
            
            </style>

            <body>
                
                <div class="center" style="width: 100%; text-align: center;">

                    <a href="upload_question_paper.php">
                        <img style="width: 200px;" src="assets/images/question_paper_generator/upload.svg" />
                    </a>

                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp; 

                    <a href="repository.php">
                        <img style="width: 200px;" src="assets/images/question_paper_generator/edit.svg" />
                    </a>
                    
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;

                    <a href="download_question_paper.php">
                        <img style="width: 200px;" src="assets/images/question_paper_generator/download.svg" />
                    </a>
                    
                </div>
                
            </body>
            
        </html>
        
        <?php
        
    } else {
        
        echo "You must sign up with an account and log in to use our repository";
        
    }
    
?>