

<?php

// This class will be instatiated through a script which will run on a cronjob during least active website times to remove users who have not activated their account after a long period of time

class DBCreateTableViewer {

    public function DBCreateTable() {

        // Error Reporting
        error_reporting(E_ALL);
        ini_set('display_errors', 2);

        // Fetch credentials from .env file
        require_once __DIR__ . '../../../../vendor/autoload.php';

        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();

        $dotenv->required(['DB_HOST', 'DB_USER', 'DB_PASSWORD', 'DB_NAME', 'SECRET_KEY', 'PUBLIC_KEY']);

        // Set database connection variables

        $dbServer = $_ENV["DB_HOST"];
        $dbUser = $_ENV["DB_USER"];
        $dbPassword = $_ENV["DB_PASSWORD"];
        $dbName = $_ENV["DB_NAME"];

        echo $dbServer;
        echo "<br>";
        echo $dbUser;
        echo "<br>";
        echo $dbPassword;
        echo "<br>";
        echo $dbName;

        echo "<br>";
        echo "<br>";

        // Create connection
        $conn = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // sql to create table
        $sql = "CREATE TABLE Users (
            users_id int(11) AUTO_INCREMENT PRIMARY Key not null,
            users_uid TINYTEXT not null,
            users_pwd LONGTEXT not null,
            users_email TINYTEXT not null,
            users_name TINYTEXT DEFAULT 0 not null,
            users_surname TINYTEXT DEFAULT 0 not null,
            users_mobile VARCHAR(16) DEFAULT 0 not null,    
            users_idnumber VARCHAR(16) DEFAULT 0 not null,
            users_dob TINYTEXT DEFAULT 0 not null,
            users_picture varchar(255) DEFAULT 0 not null,
            pwdResetSelector TEXT NOT NULL,
            pwdResetToken LONGTEXT NOT NULL,
            pwdResetExpires TEXT NOT NULL,
            AccAct TINYINT NOT NULL DEFAULT 0
        )";

        if ($conn->query($sql) === TRUE) {
            echo "Table Users created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }

        $conn->close();

    }

}

?>