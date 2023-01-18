<?php
    
    if (isset($_POST['send'])) {
        
        // Continue Processing Information
        
        $tel = $_POST['tel'];
        
        $msg = $_POST['text'];
        
        // 0934556556@winsms.co.za
        $recipient_email_address = $tel . "@winsms.net";

    } else {
        
        header("location: ../sms.php?access=denied");
        exit();
        
    }

?>

<?php

    ob_start();
    require_once('../vendor/autoload.php');
    $result = ob_get_contents();
    ob_end_clean();
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require '../vendor/phpmailer/phpmailer/src/Exception.php';
    require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require '../vendor/phpmailer/phpmailer/src/SMTP.php';
    
?>

<?php
    // Other (International) Networks
    // 0934556556@winsms.co.za
    // 083445678@message.allter.com
    // 0934556556@mobile.mycingullar.com.
    
    // Vodacom
    // 082-xxx-xxxx@voda.co.za
    // 0(7)82xxxxxxx@voda.co.za
    // 2776xxxxxxx@voda.co.za
    // number@vodalive.co.za
    // number@vodamail.co.za
    // number@voda.co.za
    
    // MTN
    // 083-xxx-xxxx@sms.co.za
    // 0(7)83xxxxxxx@sms.co.za
    // 2776xxxxxxx@sms.co.za
    // number@mtnsms.com
    // number@sms.co.za
    
    // CellC
    // 084-xxx-xxxx@cmobile.co.za
    // number@cmobile.co.za
    
?>

<?php

    $mail = new PHPMailer(true);

?>

<?php

    // Server settings
    $mail->SMTPDebug = true; // Enable Debug
    $mail->isSMTP(); // Send using SMTP
    
    // Set the SMTP Host Server to Send Emails through
    $mail->Host = 'dreadnought.aserv.co.za';
    // $mail->Host = 'smtp.gmail.com';
    
    $mail->SMTPAuth = true;
    $mail->SMTPEncryption = '7bit';
    
    $mail->Username = 'lambda@lambda.joburg';
    $mail->Password = '12113sAs12Ww*#';
    
    // Enable SSL encryption
    $mail->SMTPSecure = "ssl";
    // $mail->SMTPSecure = "tls";
    
    $mail->Port = 465;
    // $mail->Port = 25;
    // $mail->Port = 587;
    
    // Author Details
    $mail->setFrom('admin@lambda.joburg', 'SMS');
    $mail->setFrom('lambda@lambda.joburg', 'SMS');
    
    // Recipients Details
    $mail->addAddress($recipient_email_address);
    
    // Headers
    $headers = 'From: lambda@lambda.joburg' . "\r\n";
    $headers .= 'Reply-To: lambda@lambda.joburg' . "\r\n";
    
    // Message Contents
    $body = $msg;
    
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'SMS Test Message';
    $mail->Body = $body;
    
    $mail->send();
    
?>
    
<?php
    
    sleep(3);
    
    echo "<script> location.href='../sms.php?sms=sent'; </script>";
    exit();
    
?>