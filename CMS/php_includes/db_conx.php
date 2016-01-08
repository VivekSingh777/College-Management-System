<?php

//Create a database with cms before running this file on browser

$servername = "localhost";

$username="root";

$password="";

$database="cms";


// Create connection

/*$conn = new mysqli($servername, $username, $password);

// Check connection

if ($conn->connect_error) {
    die("<h2>Connection failed: " . $conn->connect_error . "</h2>");
} 

// Create database

$create_db = "CREATE DATABASE IF NOT EXISTS ". $database;

if ($conn->query($create_db) === TRUE) {

    echo "<h2>CMS Database created successfully </h2>";

} else {

    echo "<h2>Error creating database: " . $conn->error . "</h2>";

}

$conn -> close();
*/
$db_conx = mysqli_connect($servername, $username, $password, $database);

// Evaluate the connection

if (mysqli_connect_errno()) {

    echo mysqli_connect_error();

    exit();

} else {

	//echo "<h3>Successful database connection !!! </h3>";


}

?>