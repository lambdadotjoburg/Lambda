<?php

    session_start();

    if (isset($_SESSION['useruid'])) {

        echo $_SESSION['useruid'];

    }

?>