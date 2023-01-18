<?php

    // call this file when you need to clean the database from unactivated users up to current time & date, preferably via cronjob, during least active website times
    
    error_reporting(E_ALL);
    ini_set('display_errors', 2);

    // Require appropriate classes in appropriate order
    include "../core/classes/dbh/dbh-model.classes.php";
    include "../core/classes/dbh/db-cleaner-viewer.classes.php";

    $currentDate = date("U");

    // Instatiate SignupController class
    $clean = new DBCleanerViewer();

    // Running error Hanlers
    $clean->DBCleaner($currentDate);
    exit();

?>