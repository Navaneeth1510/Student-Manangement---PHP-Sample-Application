<?php
    $conn = new mysqli("localhost", "root", "", "tutorial2");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>
