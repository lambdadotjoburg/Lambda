<!DOCTYPE html>

<html lang="en">

    <head>
    
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>SMS</title>
    
    </head>

    <style>
    
        body {
            position: absolute;
            left: 5%;
        }
        
        input {
            width: 250px;
        }
        
        textarea {
            width: 250px;
            height: 100px;
        }
    
    </style>

    <body>

        <form method="POST" action="includes/sms.inc.php">

            <h4> Send Text Message using PHPMailer() </h4>
        
            <br>
            <br>
            
            <input name="tel" type="tel" placeholder="Enter Recipient Phone Number" required></input>
            
            <br>
            <br>
            
            <textarea name="text" placeholder="Enter your text message body here ..." required></textarea>
            
            <br>
            <br>
            
            <button name="send">Send</button>
            
        </form>
        
    </body>
    
</html>