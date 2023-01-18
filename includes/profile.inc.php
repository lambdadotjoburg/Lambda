<?php

    session_start();

    if (isset($_POST['submit'])) {

        error_reporting(E_ALL);
        ini_set('display_errors', 2);

        // Grab data from form
        $users_uid = $_POST['session_username']; // hidden
        
        $name = $_POST['name']; // text
        $surname = $_POST['surname']; // text

        $mobile = $_POST['mobile']; // tel
        
        $email = $_POST['email']; // email

        $id_number = $_POST['id_number']; // text
        
        $date_of_birth = $_POST['date_of_birth']; // date

        $grade = $_POST['nqf']; // number

        $address = $_POST['address']; // text

        $postal_code = $_POST['postal_code']; // number
                
        // Require appropriate classes in appropriate order
        include "../core/classes/dbh/dbh-model.classes.php";
        include "../core/classes/profile/profile-viewer.classes.php";
        include "../core/classes/profile/profile-controller.classes.php";

        // Instatiate ProfileContr class
        $profile = new ProfileController();

        // Running error Hanlers
        $profile->setProfile($users_uid, $email, $name, $surname, $mobile, $id_number, $date_of_birth);

        if (!file_exists($_FILES['picture']['tmp_name']) || !is_uploaded_file($_FILES['picture']['tmp_name'])) {
            
            // Picture not uploaded
            echo "<script> location.href='../profile.php?user=" . $users_uid . "?picture=none'; </script>";
            exit();

        } else {

            // Handling File Upload
            $file = $_FILES['picture']; // File // Enctype=multipart/form-date
            // print_r('picture');
            
            include "../core/classes/picture/picture-viewer.classes.php";
            include "../core/classes/picture/picture-controller.classes.php";

            // Instatiate ProfileContr class
            $profile = new PictureController();

            // Running error Hanlers
            $profile->ProcessPicture($file, $users_uid);
                    
        }

        // Send Email to notify user that profile has been updated
        include "../core/classes/email/email.classes.php";

        $subject = "Profile";

        $body = "<h3> Profile </h3>";
        $body .= "<p style='color: red'> Thank you, " . $users_uid . ". Your profile information has been updated. </p>";
        $body .= "<p>Regards</p>";

        new Email($email, $subject, $body);

        $stmt = null;

        echo "<script> location.href='../profile.php?user=" . $users_uid . "?profile=updated'; </script>";

        exit();

    }

?>