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
