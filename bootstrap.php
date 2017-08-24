<?php
require_once('settings.php');
require_once ('connect.php');

// procedual way
// See if connects to the Database
/*
if (!$conn)
    {
        die("Connection failed" . mysqli_connect_error());
    } else {
        echo 'Connected Successfully';
    }
*/

//OOP way
// See if connects to the Database
if ($conn->connect_error)
    {
        die("Connection failed" . $conn->connect_error());
    } else {
        echo 'Object Conn - Connected Successfully';
    }
