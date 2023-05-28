<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    

    $conn = new mysqli("localhost", "root", "", "test");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Connection successful. Data has been inserted.";
    } else {
        echo "Error inserting data into the database: " . $conn->error;
    }

    $conn->close();
}
?>