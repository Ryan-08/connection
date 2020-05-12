<?php
    $servername = "localhost";
    $username = "root";
    $password = "";    
    $db = "database_crud"; // $db database name

    $conn = new mysqli($servername, $username, $password, $db); // Create connection

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }    
?>