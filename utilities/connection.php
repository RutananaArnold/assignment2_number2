<?php
    $dbname = "assignment1";
    $db_usr = "root";
    $db_pass = "";
    $db_host = "localhost";
    
    $conn = new mysqli("$db_host","$db_usr","$db_pass","$dbname");
    if (!$conn) {
        echo("Connection failed: " . $conn->connect_error);
    }
?>