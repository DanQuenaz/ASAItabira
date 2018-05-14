<?php
    // $servername = "localhost";
    // $username = "id5755472_root";
    // $password = "iasd12345";
    // $dbname = "id5755472_asaitabira";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "asaitabira";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

?>