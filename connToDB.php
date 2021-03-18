<?php
//connction to the database
$conn = new mysqli('localhost', 'root', '', 'testdb');
    if ($conn->connect_error) {
        die("Error connecting to database." .$conn->connect_error);
    }

?>