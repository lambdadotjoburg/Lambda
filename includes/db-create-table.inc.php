<?php

  // call this file when you need to create the table users

  // Require appropriate classes in appropriate order
  include "../core/classes/dbh/db-create-table-viewer.classes.php";

  // Instatiate SignupController class
  $create = new DBCreateTableViewer();

  // Running error Hanlers
  $create->DBCreateTable();
  exit();
  
?>