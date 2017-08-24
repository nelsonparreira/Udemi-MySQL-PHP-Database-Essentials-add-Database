<?php
require_once('settings.php');
require_once ('connect.php');

/* OOP way - See if connects to the Database
if ($conn->connect_error){
    die("Connection failed" . $conn->connect_error());
}
*/

// procedual way
if (!$conn){
    die("Connection failed" . mysqli_connect_error());
}

echo 'Connected Successfully';

// CREATE a DATABASE
// $sql = "CREATE DATABASE phpcreated";
// run the query to create the database.
/*if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}*/

// REMOVE A DATABASE
$sql = "DROP DATABASE phpcreated";
// run the query to create the database.
if (mysqli_query($conn, $sql)) {
    echo "Database Deleted successfully";
} else {
    echo "Error deleting database: " . mysqli_error($conn);
}
