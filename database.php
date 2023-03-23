<?php
// Set database credentials
 $host = "localhost";
 $user = "root";
 $password = "";
 $dbname = "database_name";
 
 
// Create a connection to the database
 $conn = mysqli_connect($host, $user, $password, $dbname);

// Check if the connection was successful
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
     }
     echo "Connected successfully";
     ?>
