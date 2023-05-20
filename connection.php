<?php
    $hostname = "localhost";
    $username = "id20782606_root";
    $password = "BMS4@prashi";
    $database = 'id20782606_localhost';

    // Create connection
    $conn = new mysqli($hostname, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>