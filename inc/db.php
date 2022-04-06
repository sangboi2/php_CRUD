<?php
//include('inc/constants.php');

/* // Define username and password
const USERNAME = "root";
const PASSWORD = "";
const DSN = "mysql:host=local;dbname=rito";

// connect to the database using PDO
try {
    $conn = new PDO(DSN, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "Connected";
} catch (Exception $e) {
    echo "Error" . $e->getMessage();
    exit();
} */

// Define username and password
$servername = "localhost";
$username = "root";
$password = "";

// Connect to the database
try {
    $conn = new PDO("mysql:host=$servername;dbname=rito", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
