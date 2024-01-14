<?php
    $conn = new mysqli("localhost", "root", "", "tutorial");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST["data"];
        $sql = "INSERT INTO example (data) VALUES ('$data')";
        if ($conn->query($sql) === TRUE) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>