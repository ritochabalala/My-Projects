<?php
    // For example, you can insert the customer information and financial data into a database
	$host = "localhost";
    $username = "root";
    $password = "";
    $database = "rendervisualisations";

    // Create DB Connection
    $conn = mysqli_connect($host, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>