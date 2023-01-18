<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 2);

    session_start();

    if (isset($_SESSION['useruid'])) {

        echo $_SESSION['useruid'];

    }

    // Fetch credentials from .env file
    require_once __DIR__ . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $dotenv->required(['admin.name', 'admin.email']);

    // Set database connection variables
    $admin_email = $_ENV["admin.email"];
    $admin_name = $_ENV["admin.name"];

    $adminName = json_decode($admin_name, true);
    // var_dump($adminName);

    $adminEmail = json_decode($admin_email, true);
   
    // var_dump($adminEmail);
    echo $adminName["AdminName0"];
    echo "<br>";
    echo $adminName["AdminName1"];
    echo "<br>";
    echo $adminName["AdminName2"];
    echo "<br>";
    echo $adminName["AdminName3"];

    echo "<br>";
    echo "<br>";

    echo $adminEmail["AdminEmail0"];
    echo "<br>";
    echo $adminEmail["AdminEmail1"];
    echo "<br>";
    echo $adminEmail["AdminEmail2"];
    echo "<br>";
    echo $adminEmail["AdminEmail3"];

    // foreach ($adminName as $obj) {
    //     echo $obj->property;
    // }

?>
